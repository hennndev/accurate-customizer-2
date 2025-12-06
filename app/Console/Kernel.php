<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('transactions:cleanup')
            ->daily()
            ->at('02:00') //cleanup jam 2 pagi
            ->withoutOverlapping()
            ->onSuccess(function () {
                \Log::info('Transaction cleanup cron job completed successfully');
            })
            ->onFailure(function () {
                \Log::error('Transaction cleanup cron job failed');
            });
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
