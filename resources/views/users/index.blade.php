@php
    $modules = [
        [
            'name' => 'General Ledger',
            'description' => 'Chart of accounts, journal entries',
            'icon' => 'general-ledger-icon.svg',
            'status' => 'not_captured',
            'color' => 'blue',
        ],
        [
            'name' => 'Accounts Payable',
            'description' => 'Vendors, bills, payments',
            'icon' => 'accounts-payable-icon.svg',
            'status' => 'captured',
            'color' => 'purple',
        ],
        [
            'name' => 'Accounts Receivable',
            'description' => 'Customers, invoices, payments',
            'icon' => 'accounts-receivable-icon.svg',
            'status' => 'not_captured',
            'color' => 'pink',
        ],
        [
            'name' => 'Inventory',
            'description' => 'Products, stock levels, adjustments',
            'icon' => 'inventory-icon.svg',
            'status' => 'captured',
            'color' => 'green',
        ],
        [
            'name' => 'Payroll',
            'description' => 'Employee salaries, taxes, deductions',
            'icon' => 'payroll-icon.svg',
            'status' => 'not_captured',
            'color' => 'orange',
        ],
        [
            'name' => 'Fixed Assets',
            'description' => 'Asset tracking, depreciation schedules',
            'icon' => 'fixed-assets-icon.svg',
            'status' => 'not_captured',
            'color' => 'red',
        ],
        [
            'name' => 'Purchasing',
            'description' => 'Purchase orders, vendor management',
            'icon' => 'purchasing-icon.svg',
            'status' => 'not_captured',
            'color' => 'teal',
        ],
        [
            'name' => 'Sales',
            'description' => 'Sales orders, customer management',
            'icon' => 'sales-icon.svg',
            'status' => 'not_captured',
            'color' => 'indigo',
        ],
        [
            'name' => 'Banking',
            'description' => 'Bank accounts, transactions, reconciliations',
            'icon' => 'banking-icon.svg',
            'status' => 'not_captured',
            'color' => 'cyan',
        ],
        [
            'name' => 'Projects',
            'description' => 'Project tracking, billing, expenses',
            'icon' => 'projects-icon.svg',
            'status' => 'not_captured',
            'color' => 'violet',
        ],
        [
            'name' => 'Manufacturing',
            'description' => 'Production orders, BOMs, work centers',
            'icon' => 'manufacturing-icon.svg',
            'status' => 'not_captured',
            'color' => 'amber',
        ],
        [
            'name' => 'Reporting',
            'description' => 'Financial reports, custom reports',
            'icon' => 'reporting-icon.svg',
            'status' => 'not_captured',
            'color' => 'emerald',
        ],
    ];

    $users = [
        [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'role' => 'Super Admin',
            'status' => 'Active',
            'created' => '2024-01-15',
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'role' => 'Admin',
            'status' => 'Active',
            'created' => '2024-02-20',
        ],
        [
            'name' => 'Michael Johnson',
            'email' => 'michael.j@example.com',
            'role' => 'Admin',
            'status' => 'Inactive',
            'created' => '2024-03-10',
        ],
        [
            'name' => 'Sarah Williams',
            'email' => 'sarah.w@example.com',
            'role' => 'Admin',
            'status' => 'Active',
            'created' => '2024-04-05',
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
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <div class="flex flex-col gap-1">
                <p class="text-[16px] font-medium text-black">Users</p>
                <p class="text-sm font-medium text-gray-600">Manage system users and permissions</p>
            </div>
        </div>
    </x-slot>

    <div class="flex flex-col gap-6 md:gap-8 lg:gap-10">
        <div
            class="w-full bg-gradient-to-r from-purple-700 to-purple-600 rounded-xl p-5 md:p-8 lg:p-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 lg:gap-4">
            <div class="flex flex-col gap-4 md:gap-5 w-full lg:w-auto">
                <div class="flex items-center gap-3 md:gap-4">
                    <div class="bg-white/20 w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 md:w-7 md:h-7 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white font-semibold text-lg md:text-xl lg:text-2xl">User Management</p>
                        <p class="text-white text-sm md:text-base font-normal">Manage system users and permissions</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-6 md:gap-10 w-full lg:w-auto justify-end">
                <div class="flex flex-col gap-1">
                    <p class="text-white font-medium text-xs md:text-sm">Total Users</p>
                    <p class="text-2xl md:text-3xl font-bold text-white self-end">4</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:gap-5 rounded-xl bg-white shadow-lg p-4 md:p-5 border border-gray-100">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 sm:gap-0">
                <div class="flex flex-col gap-1">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-purple-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>

                        <p class="text-sm md:text-base text-black font-medium">Users</p>
                    </div>
                    <p class="text-xs md:text-sm lg:text-base text-gray-500 font-normal">
                        Create and manage user accounts
                    </p>
                </div>
                <button
                    class="flex items-center py-2 px-4 md:px-5 rounded-lg bg-gradient-to-tr from-purple-700 to-violet-600 text-white font-semibold hover:shadow-lg hover:from-purple-800 hover:to-violet-700 transition text-sm md:text-[15px] w-full sm:w-auto justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 md:w-5 md:h-5 text-white inline-block mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                    Add New User
                </button>
            </div>

            {{-- table --}}
            <div class="w-full overflow-hidden border border-gray-200 rounded-lg">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse min-w-[800px]">
                        <thead class="bg-gray-100">
                            <tr class="border-b border-gray-200">
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Name</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Email</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Role</th>
                                <th class="p-2 md:p-4 text-center text-xs md:text-sm font-semibold text-gray-700">Status</th>
                                <th class="p-2 md:p-4 text-left text-xs md:text-sm font-semibold text-gray-700">Created</th>
                                <th class="p-2 md:p-4 text-center text-xs md:text-sm font-semibold text-gray-700">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($users as $user)
                                <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                    <td class="p-2 md:p-4">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xs md:text-sm font-medium text-gray-900">{{ $user['name'] }}</span>
                                        </div>
                                    </td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm text-gray-600">{{ $user['email'] }}</td>
                                    <td class="p-2 md:p-4">
                                        @if ($user['role'] === 'Super Admin')
                                            <span class="inline-flex items-center gap-1 px-2 md:px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                                </svg>
                                                Super Admin
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2 md:px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                </svg>
                                                Admin
                                            </span>
                                        @endif
                                    </td>
                                    <td class="p-2 md:p-4 text-center">
                                        @if ($user['status'] === 'Active')
                                            <span class="inline-flex items-center gap-1 px-2 md:px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                                Active
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2 md:px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                                </svg>
                                                Inactive
                                            </span>
                                        @endif
                                    </td>
                                    <td class="p-2 md:p-4 text-xs md:text-sm text-gray-600">{{ \Carbon\Carbon::parse($user['created'])->format('d M Y') }}</td>
                                    <td class="p-2 md:p-4">
                                        <div class="flex items-center justify-center gap-1 md:gap-2">
                                            <button class="inline-flex items-center justify-center p-1.5 md:p-2 rounded-lg hover:bg-blue-50 text-blue-600 hover:text-blue-700 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:w-5 md:h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </button>
                                            <button class="inline-flex items-center justify-center p-1.5 md:p-2 rounded-lg hover:bg-red-50 text-red-600 hover:text-red-700 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:w-5 md:h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
</x-app-layout>
