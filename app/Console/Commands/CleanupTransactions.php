<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class CleanupTransactions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transactions:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete old transactions with status other than success based on retention days setting';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting transaction cleanup...');
        
        try {
            // Get retention days from settings (default 30 if not set)
            $setting = Setting::first();
            $retentionDays = $setting ? $setting->retention_days : 30;
            
            // Calculate cutoff date
            $cutoffDate = Carbon::now()->subDays($retentionDays);
            
            $this->info("Retention period: {$retentionDays} days");
            $this->info("Cutoff date: {$cutoffDate->format('Y-m-d H:i:s')}");
            
            // Delete transactions that are:
            // 1. Status is NOT 'success'
            // 2. Created before cutoff date
            $deletedCount = Transaction::where('status', '!=', 'success')
                ->where('created_at', '<', $cutoffDate)
                ->delete();
            
            $this->info("Successfully deleted {$deletedCount} old transaction(s).");
            
            Log::info('TRANSACTION_CLEANUP_SUCCESS', [
                'retention_days' => $retentionDays,
                'cutoff_date' => $cutoffDate->format('Y-m-d H:i:s'),
                'deleted_count' => $deletedCount
            ]);
            
            return Command::SUCCESS;
            
        } catch (\Exception $e) {
            $this->error('Error during cleanup: ' . $e->getMessage());
            
            Log::error('TRANSACTION_CLEANUP_ERROR', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return Command::FAILURE;
        }
    }
}
