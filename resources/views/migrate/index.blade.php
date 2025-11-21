@php
    $modules = [
        [
            'name' => 'General Ledger',
        ],
        [
            'name' => 'Accounts Payable',
        ],
        [
            'name' => 'Accounts Receivable',
        ],
        [
            'name' => 'Inventory',
        ],
        [
            'name' => 'Payroll',
        ],
        [
            'name' => 'Fixed Assets',
        ],
        [
            'name' => 'Purchasing',
        ],
        [
            'name' => 'Sales',
        ],
        [
            'name' => 'Banking',
        ],
        [
            'name' => 'Projects',
        ],
        [
            'name' => 'Manufacturing',
        ],
        [
            'name' => 'Reporting',
        ],
    ];

    $transactions = [
        [
            'transaction_no' => 'TRX-2024-001',
            'source_db' => 'COMPANY 2024',
            'module' => 'General Ledger',
            'description' => 'Opening balance entry for cash account',
            'date' => '2024-01-15',
            'amount' => 150000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-002',
            'source_db' => 'COMPANY 2025',
            'module' => 'Accounts Payable',
            'description' => 'Vendor payment for office supplies',
            'date' => '2024-02-20',
            'amount' => 25000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-003',
            'source_db' => 'COMPANY 2024',
            'module' => 'Accounts Receivable',
            'description' => 'Customer invoice for consulting services',
            'date' => '2024-03-10',
            'amount' => 85000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-004',
            'source_db' => 'COMPANY 2026',
            'module' => 'Inventory',
            'description' => 'Stock adjustment for warehouse A',
            'date' => '2024-04-05',
            'amount' => 42000.00,
            'status' => 'Failed',
        ],
        [
            'transaction_no' => 'TRX-2024-005',
            'source_db' => 'COMPANY 2024',
            'module' => 'Payroll',
            'description' => 'Monthly salary payment for employees',
            'date' => '2024-05-01',
            'amount' => 320000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-006',
            'source_db' => 'COMPANY 2025',
            'module' => 'Sales',
            'description' => 'Product sales order #1234',
            'date' => '2024-06-18',
            'amount' => 67500.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-007',
            'source_db' => 'COMPANY 2024',
            'module' => 'Banking',
            'description' => 'Bank transfer to vendor account',
            'date' => '2024-07-22',
            'amount' => 95000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-008',
            'source_db' => 'COMPANY 2026',
            'module' => 'Fixed Assets',
            'description' => 'Depreciation entry for equipment',
            'date' => '2024-08-14',
            'amount' => 12500.00,
            'status' => 'Failed',
        ],
        [
            'transaction_no' => 'TRX-2024-009',
            'source_db' => 'COMPANY 2025',
            'module' => 'Purchasing',
            'description' => 'Purchase order for raw materials',
            'date' => '2024-09-30',
            'amount' => 178000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-010',
            'source_db' => 'COMPANY 2024',
            'module' => 'Projects',
            'description' => 'Project expense allocation',
            'date' => '2024-10-12',
            'amount' => 54000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-011',
            'source_db' => 'COMPANY 2025',
            'module' => 'Manufacturing',
            'description' => 'Production cost allocation for batch #456',
            'date' => '2024-01-28',
            'amount' => 215000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-012',
            'source_db' => 'COMPANY 2024',
            'module' => 'General Ledger',
            'description' => 'Year-end closing adjustment',
            'date' => '2024-02-14',
            'amount' => 98000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-013',
            'source_db' => 'COMPANY 2026',
            'module' => 'Accounts Payable',
            'description' => 'Payment to supplier for materials',
            'date' => '2024-03-22',
            'amount' => 134000.00,
            'status' => 'Failed',
        ],
        [
            'transaction_no' => 'TRX-2024-014',
            'source_db' => 'COMPANY 2024',
            'module' => 'Accounts Receivable',
            'description' => 'Invoice payment received from client',
            'date' => '2024-04-17',
            'amount' => 186000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-015',
            'source_db' => 'COMPANY 2025',
            'module' => 'Inventory',
            'description' => 'Stock transfer between warehouses',
            'date' => '2024-05-25',
            'amount' => 73000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-016',
            'source_db' => 'COMPANY 2026',
            'module' => 'Payroll',
            'description' => 'Employee bonus disbursement',
            'date' => '2024-06-08',
            'amount' => 245000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-017',
            'source_db' => 'COMPANY 2024',
            'module' => 'Sales',
            'description' => 'Sales return processing',
            'date' => '2024-07-11',
            'amount' => 32000.00,
            'status' => 'Failed',
        ],
        [
            'transaction_no' => 'TRX-2024-018',
            'source_db' => 'COMPANY 2025',
            'module' => 'Banking',
            'description' => 'Bank reconciliation adjustment',
            'date' => '2024-08-19',
            'amount' => 15000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-019',
            'source_db' => 'COMPANY 2024',
            'module' => 'Fixed Assets',
            'description' => 'New equipment purchase',
            'date' => '2024-09-05',
            'amount' => 450000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-020',
            'source_db' => 'COMPANY 2026',
            'module' => 'Purchasing',
            'description' => 'Vendor contract payment',
            'date' => '2024-10-21',
            'amount' => 198000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-021',
            'source_db' => 'COMPANY 2025',
            'module' => 'Projects',
            'description' => 'Project milestone payment',
            'date' => '2024-11-03',
            'amount' => 275000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-022',
            'source_db' => 'COMPANY 2024',
            'module' => 'Reporting',
            'description' => 'Financial report generation',
            'date' => '2024-01-09',
            'amount' => 5000.00,
            'status' => 'Failed',
        ],
        [
            'transaction_no' => 'TRX-2024-023',
            'source_db' => 'COMPANY 2026',
            'module' => 'General Ledger',
            'description' => 'Journal entry for accruals',
            'date' => '2024-02-27',
            'amount' => 87000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-024',
            'source_db' => 'COMPANY 2025',
            'module' => 'Accounts Payable',
            'description' => 'Utility bills payment',
            'date' => '2024-03-16',
            'amount' => 28000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-025',
            'source_db' => 'COMPANY 2024',
            'module' => 'Accounts Receivable',
            'description' => 'Credit note issuance',
            'date' => '2024-04-29',
            'amount' => 19000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-026',
            'source_db' => 'COMPANY 2026',
            'module' => 'Inventory',
            'description' => 'Inventory write-off adjustment',
            'date' => '2024-05-14',
            'amount' => 36000.00,
            'status' => 'Failed',
        ],
        [
            'transaction_no' => 'TRX-2024-027',
            'source_db' => 'COMPANY 2025',
            'module' => 'Payroll',
            'description' => 'Overtime payment processing',
            'date' => '2024-06-26',
            'amount' => 156000.00,
            'status' => 'Pending',
        ],
        [
            'transaction_no' => 'TRX-2024-028',
            'source_db' => 'COMPANY 2024',
            'module' => 'Sales',
            'description' => 'Discount allocation for bulk order',
            'date' => '2024-07-30',
            'amount' => 112000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-029',
            'source_db' => 'COMPANY 2026',
            'module' => 'Banking',
            'description' => 'Foreign exchange gain/loss adjustment',
            'date' => '2024-08-23',
            'amount' => 45000.00,
            'status' => 'Migrated',
        ],
        [
            'transaction_no' => 'TRX-2024-030',
            'source_db' => 'COMPANY 2025',
            'module' => 'Manufacturing',
            'description' => 'Material requisition for production',
            'date' => '2024-09-17',
            'amount' => 189000.00,
            'status' => 'Pending',
        ],
    ];
@endphp

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <div
                class="flex items-center justify-center w-9 h-9 rounded-[14px] bg-[linear-gradient(135deg,#155DFC_0%,#4F39F6_100%)] shadow-[0_10px_15px_-3px_rgba(0,0,0,0.10),0_4px_6px_-4px_rgba(0,0,0,0.10)] flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                </svg>
            </div>
            <div class="flex flex-col gap-1">
                <p class="text-[16px] font-medium text-black">Migrate</p>
                <p class="text-sm font-medium text-gray-600">Transfer data to target database</p>
            </div>
        </div>
    </x-slot>

    <div class="flex flex-col gap-6 md:gap-8 lg:gap-10">
        <div
            class="w-full bg-gradient-to-r from-green-600 to-green-700 rounded-xl p-5 md:p-8 lg:p-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 lg:gap-4">
            <div class="flex flex-col gap-4 md:gap-5 w-full lg:w-auto">
                <div class="flex items-center gap-3 md:gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#FFFFFF" class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                    <div class="flex flex-col">
                        <p class="text-white font-normal text-xs md:text-sm tracking-wide">Source Database</p>
                        <p class="text-white text-sm md:text-base lg:text-lg font-semibold">Select database to capture data from</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <div x-data="{ open: false, selected: 'COMPANY 2024' }" class="relative w-full">
                        <button @click="open = !open" type="button"
                            class="bg-white/20 backdrop-blur-md border border-white/30 text-white text-xs md:text-sm rounded-lg focus:ring-white/50 focus:border-white/50 w-full p-2 md:p-2.5 text-left flex items-center justify-between">
                            <span x-text="selected"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 transition-transform"
                                :class="{ 'rotate-180': open }">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-10 w-full mt-2 bg-white border border-white/30 rounded-lg shadow-lg overflow-hidden">
                            <ul class="py-1">
                                <li @click="selected = 'COMPANY 2024'; open = false"
                                    :class="selected === 'COMPANY 2024' ? 'bg-blue-50' : ''"
                                    class="px-4 py-2 text-black text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                    <span>COMPANY 2024</span>
                                    <svg x-show="selected === 'COMPANY 2024'" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        class="size-5 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </li>
                                <li @click="selected = 'COMPANY 2025'; open = false"
                                    :class="selected === 'COMPANY 2025' ? 'bg-blue-50' : ''"
                                    class="px-4 py-2 text-black text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                    <span>COMPANY 2025</span>
                                    <svg x-show="selected === 'COMPANY 2025'" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        class="size-5 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </li>
                                <li @click="selected = 'COMPANY 2026'; open = false"
                                    :class="selected === 'COMPANY 2026' ? 'bg-blue-50' : ''"
                                    class="px-4 py-2 text-black text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                    <span>COMPANY 2026</span>
                                    <svg x-show="selected === 'COMPANY 2026'" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        class="size-5 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button
                        class="bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold px-4 py-2 rounded-lg hover:bg-white/30 transition whitespace-nowrap w-full sm:w-auto text-sm md:text-base">
                        Connect
                    </button>
                </div>
            </div>

            <div class="flex flex-row sm:flex-row items-center justify-between sm:justify-start gap-6 sm:gap-8 md:gap-10 w-full lg:w-auto">
                <div class="flex flex-col gap-1">
                    <p class="text-white font-medium text-xs md:text-sm">Success Rate</p>
                    <p class="text-2xl md:text-3xl font-bold text-white self-end">74.6 %</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-white font-medium text-xs md:text-sm">Ready to Migrate</p>
                    <p class="text-2xl md:text-3xl font-bold text-white self-end">190</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 lg:gap-7">
            <div class="flex min-h-[120px] md:min-h-[150px] items-center justify-between shadow-md rounded-xl bg-white p-5 md:p-7 md:pt-10">
                <div class="flex flex-col gap-1">
                    <p class="text-gray-500 text-sm md:text-base">Total</p>
                    <p class="text-black text-2xl md:text-3xl font-medium">173</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-8 h-8 md:w-10 md:h-10 text-gray-300">
                    <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875Z" />
                    <path
                        d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 0 0 1.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 0 0 1.897 1.384C6.809 12.164 9.315 12.75 12 12.75Z" />
                    <path
                        d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 0 0 1.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 0 0 1.897 1.384C6.809 15.914 9.315 16.5 12 16.5Z" />
                    <path
                        d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 0 0 1.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 0 0 1.897 1.384C6.809 19.664 9.315 20.25 12 20.25Z" />
                </svg>
            </div>
            <div class="flex min-h-[120px] md:min-h-[150px] items-center justify-between shadow-md rounded-xl bg-white p-5 md:p-7 md:pt-10">
                <div class="flex flex-col gap-1">
                    <p class="text-gray-500 text-sm md:text-base">Pending</p>
                    <p class="text-orange-600 text-2xl md:text-3xl font-medium">46</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 md:w-10 md:h-10 text-orange-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <div class="flex min-h-[120px] md:min-h-[150px] items-center justify-between shadow-md rounded-xl bg-white p-5 md:p-7 md:pt-10">
                <div class="flex flex-col gap-1">
                    <p class="text-gray-500 text-sm md:text-base">Migrated</p>
                    <p class="text-green-600 text-2xl md:text-3xl font-medium">125</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 md:w-10 md:h-10 text-green-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <div class="flex min-h-[120px] md:min-h-[150px] items-center justify-between shadow-md rounded-xl bg-white p-5 md:p-7 md:pt-10">
                <div class="flex flex-col gap-1">
                    <p class="text-gray-500 text-sm md:text-base">Failed</p>
                    <p class="text-orange-600 text-2xl md:text-3xl font-medium">44</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 md:w-10 md:h-10 text-red-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:gap-5 rounded-xl bg-white shadow-lg p-4 md:p-5 border border-gray-100">
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                    <p class="text-sm md:text-base text-black font-medium">Transaction Manager</p>
                </div>
                <p class="text-xs md:text-sm lg:text-base text-gray-500 font-normal">Select and migrate transactions to <span
                        class="font-semibold">COMPANY 2024</span></p>
            </div>

            <div class="w-full rounded-xl bg-gray-50 p-3 md:p-4 border border-gray-200 flex flex-col md:flex-row items-stretch md:items-center gap-2 md:gap-3">
                <input type="text" placeholder="Search transactions..."
                    class="bg-white rounded-md py-2 px-3 md:px-4 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-xs md:text-sm w-full md:w-[250px] lg:w-[300px] font-medium">

                <!-- All Database Dropdown -->
                <div x-data="{ open: false, selected: 'All Database' }" class="relative w-full md:w-auto">
                    <button @click="open = !open" type="button"
                        class="bg-white w-full md:min-w-[180px] lg:min-w-[200px] border border-gray-200 text-gray-700 text-xs md:text-sm rounded-md py-2 px-3 md:px-4 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center gap-2 whitespace-nowrap">
                        <span x-text="selected" class="font-medium"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-4 transition-transform ml-auto"
                            :class="{ 'rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute z-[99] mt-2 bg-white border border-gray-200 rounded-md shadow-lg overflow-hidden w-full md:min-w-[200px]">
                        <ul class="py-1 max-h-[200px] md:max-h-none overflow-y-auto">
                            <li @click="selected = 'All Database'; open = false"
                                :class="selected === 'All Database' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>All Database</span>
                                <svg x-show="selected === 'All Database'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            <li @click="selected = 'COMPANY 2024'; open = false"
                                :class="selected === 'COMPANY 2024' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>COMPANY 2024</span>
                                <svg x-show="selected === 'COMPANY 2024'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            <li @click="selected = 'COMPANY 2025'; open = false"
                                :class="selected === 'COMPANY 2025' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>COMPANY 2025</span>
                                <svg x-show="selected === 'COMPANY 2025'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            <li @click="selected = 'COMPANY 2026'; open = false"
                                :class="selected === 'COMPANY 2026' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>COMPANY 2026</span>
                                <svg x-show="selected === 'COMPANY 2026'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- All Modules Dropdown -->
                <div x-data="{ open: false, selected: 'All Modules' }" class="relative w-full md:w-auto">
                    <button @click="open = !open" type="button"
                        class="bg-white border w-full md:min-w-[180px] lg:min-w-[200px] border-gray-200 text-gray-700 text-xs md:text-sm rounded-md py-2 px-3 md:px-4 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center gap-2 whitespace-nowrap">
                        <span x-text="selected" class="font-medium"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-4 transition-transform ml-auto"
                            :class="{ 'rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute z-[99] mt-2 bg-white border border-gray-200 rounded-md shadow-lg overflow-hidden w-full">
                        <ul class="py-1">
                            <li @click="selected = 'All Modules'; open = false"
                                :class="selected === 'All Modules' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>All Modules</span>
                                <svg x-show="selected === 'All Modules'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            @foreach ($modules as $module)
                              <li @click="selected = '{{ $module['name'] }}'; open = false"
                                  :class="selected === '{{ $module['name'] }}' ? 'bg-blue-50' : ''"
                                  class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                  <span>{{ $module['name'] }}</span>
                                  <svg x-show="selected === '{{ $module['name'] }}'" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                      class="size-4 text-blue-600">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                  </svg>
                              </li>
                            @endforeach
                        </ul>
                    </div>
                  </div>
                <!-- All Status Dropdown -->
                <div x-data="{ open: false, selected: 'All Status' }" class="relative w-full md:w-auto">
                    <button @click="open = !open" type="button"
                        class="bg-white w-full md:min-w-[140px] lg:min-w-[150px] border border-gray-200 text-gray-700 text-xs md:text-sm rounded-md py-2 px-3 md:px-4 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center gap-2 whitespace-nowrap">
                        <span x-text="selected" class="font-medium"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-4 transition-transform ml-auto"
                            :class="{ 'rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute z-[99] mt-2 bg-white border border-gray-200 rounded-md shadow-lg overflow-hidden w-full">
                        <ul class="py-1">
                            <li @click="selected = 'All Status'; open = false"
                                :class="selected === 'All Status' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>All Status</span>
                                <svg x-show="selected === 'All Status'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            <li @click="selected = 'Pending'; open = false"
                                :class="selected === 'Pending' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>Pending</span>
                                <svg x-show="selected === 'Pending'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            <li @click="selected = 'Migrated'; open = false"
                                :class="selected === 'Migrated' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>Migrated</span>
                                <svg x-show="selected === 'Migrated'" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                            <li @click="selected = 'Failed'; open = false"
                                :class="selected === 'Failed' ? 'bg-blue-50' : ''"
                                class="px-4 py-2 text-gray-700 text-sm hover:bg-gray-100 cursor-pointer transition font-medium flex items-center justify-between">
                                <span>Failed</span>
                                <svg x-show="selected === 'Failed'" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="size-4 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="bg-white w-full md:flex-1 hover:bg-gray-100 p-2 border border-gray-200 rounded-lg text-xs md:text-sm text-black font-medium cursor-pointer">
                  Select All
                </button>
                <button class="bg-white w-full md:flex-1 hover:bg-gray-100 p-2 border border-gray-200 rounded-lg text-xs md:text-sm text-black font-medium cursor-pointer">
                  Clear
                </button>
            </div>


            {{-- table --}}
            <div class="w-full overflow-hidden border border-gray-200 rounded-lg" x-data="{ selectAll: false, selected: [] }">
                <div class="overflow-x-auto max-h-[400px] md:max-h-[500px] lg:max-h-[600px] overflow-y-auto">
                    <table class="w-full border-collapse min-w-[800px]">
                        <thead class="sticky top-0 z-10">
                            <tr class="bg-gray-100 border-b border-gray-200">
                                <th class="p-2 md:p-4 text-left">
                                    <input type="checkbox" x-model="selectAll" @click="selected = selectAll ? [] : {{ json_encode(array_column($transactions, 'transaction_no')) }}"
                                        class="w-3.5 h-3.5 md:w-4 md:h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                                </th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Transaction No</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Source DB</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Module</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Description</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Date</th>
                                <th class="p-2 md:p-4 text-center text-xs md:text-sm font-semibold text-gray-700">Status</th>
                                <th class="p-2 md:p-4 text-center text-xs md:text-sm font-semibold text-gray-700">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($transactions as $transaction)
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                    <td class="p-2 md:p-4">
                                        <input type="checkbox" x-model="selected" value="{{ $transaction['transaction_no'] }}"
                                            class="w-3.5 h-3.5 md:w-4 md:h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                                    </td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm font-medium text-gray-900">{{ $transaction['transaction_no'] }}</td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm text-gray-600">{{ $transaction['source_db'] }}</td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm text-gray-600">{{ $transaction['module'] }}</td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm text-gray-600 max-w-xs truncate">{{ $transaction['description'] }}</td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm text-gray-600">{{ \Carbon\Carbon::parse($transaction['date'])->format('d M Y') }}</td>
                                    <td class="p-2 md:p-4 text-center">
                                        @if ($transaction['status'] === 'Migrated')
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                                Migrated
                                            </span>
                                        @elseif ($transaction['status'] === 'Pending')
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                Pending
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                                Failed
                                            </span>
                                        @endif
                                    </td>
                                    <td class="p-2 md:p-4 text-center">
                                        <button class="inline-flex items-center justify-center p-1.5 md:p-2 rounded-lg hover:bg-red-50 text-red-600 hover:text-red-700 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:w-5 md:h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
