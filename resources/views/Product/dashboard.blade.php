<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 absolute inset-0">
    <!-- Navigation -->
    <nav class="flex items-center justify-between px-6 py-4 bg-white shadow-sm">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/logo.png')}}" class="h-8 w-8 text-teal-500" viewBox="0 0 24 24"
                fill="currentColor"></svg>
            <span class="text-lg font-semibold">
                <span class="text-purple-800">logo</span><span class="text-sky-500">ipsum</span>
            </span>
        </div>
        <div class="flex items-center space-x-8">
            <a href="#" class="text-purple-800 font-semibold">Dashboard</a>
            <a href="#" class="text-gray-500 hover:text-purple-800">Orders</a>
            <a href="#" class="text-gray-500 hover:text-purple-800">Promotion</a>
            <a href="#" class="text-gray-500 hover:text-purple-800">Inbox</a>
        </div>
        <div class="flex items-center space-x-4">
            <button class="bg-purple-800 text-white px-4 py-2 rounded-xl hover:bg-purple-700 transition">
                Add New Product
            </button>
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center text-xs">
                <img src="{{ ('img/orang.png') }}" alt="Orang">
            </div>
        </div>
    </nav>

    <!-- Main Content saya -->
    <div class="py-5 px-14 font-serif text-sm">
        <button
            class="mb-4 text-gray-500 hover:text-blue-600 hover:underline hover:scale-105 transform transition duration-200">
            Home/Seller Portal
        </button>

        <!-- Dashboard Cards saya-->
        <div class="grid grid-cols-3 gap-6 mb-6">
            <!-- Total Orders saya-->
            <div class="bg-white rounded-2xl shadow p-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-purple-100 p-2 rounded-xl">
                            <div stroke-linecap="round" stroke-linejoin="round" stroke-width="2">🛒</div>
                        </div>
                        <div class="text-lg font-semibold text-gray-700">Total Orders</div>
                    </div>
                    <div class="text-gray-400 text-xl cursor-pointer">⋮</div>
                </div>
                <div class="mt-6">
                    <div class="text-3xl font-bold text-gray-900">400</div>
                    <div class="text-sm mt-1 flex items-center space-x-2">
                        <span class="text-green-600 font-medium flex items-center py-2">📈 10%</span>
                        <span class="text-gray-400">vs last month</span>
                    </div>
                </div>
                <div class="mt-6">
                    <svg viewBox="0 0 300 80" class="w-full h-14">
                        <polyline points="20,60 60,30 100,50 140,20 180,40 220,10 260,30" fill="none" stroke="#10b981"
                            stroke-width="2" />
                    </svg>
                </div>
            </div>

            <!-- Total Sell saya-->
            <div class="bg-white rounded-2xl shadow p-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-purple-100 p-2 rounded-xl">
                            <div stroke-linecap="round" stroke-linejoin="round" stroke-width="2">📋</div>
                        </div>
                        <div class="text-lg font-semibold text-gray-700">Total Sell</div>
                    </div>
                    <div class="text-gray-400 text-xl cursor-pointer">⋮</div>
                </div>
                <div class="mt-6">
                    <div class="text-3xl font-bold text-gray-900">42.5L</div>
                    <div class="text-sm mt-1 flex items-center space-x-2">
                        <span class="text-red-600 font-medium flex items-center py-2">📉 5%</span>
                        <span class="text-gray-400">vs last month</span>
                    </div>
                </div>
            </div>

            <!-- Total Product saya -->
            <div class="bg-white rounded-2xl shadow p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-purple-100 p-2 rounded-xl">
                            <div stroke-linecap="round" stroke-linejoin="round" stroke-width="2">➕</div>
                        </div>
                        <div class="text-lg font-semibold text-gray-700">Total Product</div>
                    </div>
                    <div class="text-gray-400 text-xl cursor-pointer">⋮</div>
                </div>
                <div class="mt-6">
                    <div class="text-3xl font-bold text-gray-900">452</div>
                    <div class="text-sm mt-1 flex items-center space-x-2">
                        <span class="text-green-600 font-medium flex items-center py-3">⬆️ +23</span>
                        <span class="text-gray-400">vs last month</span>
                    </div>
                </div>
                <div class="mt-10"></div>
            </div>

            <div class="bg-white rounded-2xl shadow p-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-white p-6 rounded-2hadow">
                <h4 class="text-lg font-semibold mb-4">Order Summary</h4>

                <!-- Pending Orders saya -->
                <div class="mb-4">
                    <p class="text-sm mb-1 w-96">Pending Orders</p><span class="text-xl">40%</span>
                    <p class="text-xs text-gray-500 mt-1 text-right">160/400 Orders</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 40%"></div>
                    </div>
                </div>

                <!-- Shipped Orders saya -->
                <div class="mb-4 py-10">
                    <p class="text-sm mb-1">Shipped Orders</p><span class="text-xl">30%</span>
                    <p class="text-xs text-gray-500 mt-1 text-right">120/400 Orders</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-purple-700 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>

                <!-- Delivered Orders saya -->
                <div>
                    <p class="text-sm mb-1">Delivered Orders</p><span class="text-xl text-black">30%</span>
                    <p class="text-xs text-gray-500 mt-1 text-right">120/400 Orders</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <!-- Total Sell saya-->
            <div class="bg-white rounded-2xl shadow p-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-semibold text-gray-700">Payment Summary</div>
                        <div class="bg-gray-100 p-1 rounded-full flex">
                        <button class="text-sm px-4 py-1 bg-white rounded-full shadow-sm text-purple-800">Upcoming</button>
                        <button class="text-sm px-3 py-1 text-gray-500">Paid</button>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Total Product saya -->
            <div class="bg-white rounded-2xl shadow p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-semibold text-gray-700">Riview Orders</div>
                    </div>
                    <div class="text-gray-400 text-xl cursor-pointer">⋮</div>
                  </div>
                    <div class="space-y-4">
                    <div class="flex justify-between items-center text-sm py-5">
                        <div>
                            <p class="font-medium">01/04/2024 <span class="text-xs text-gray-400 block">P12345</span>
                            </p>
                            <p class="text-gray-500">ZithroMax Antibiotics - PharmaQuick Ltd</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs">New York, USA</p>
                            <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded-full">In Transit</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center text-sm py-5">
                        <div>
                            <p class="font-medium">02/04/2024 <span class="text-xs text-gray-400 block">ZM2345</span>
                            </p>
                            <p class="text-gray-500">Panadol Extra - Reliable Remedies</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs">London, UK</p>
                            <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">Pending</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center text-sm  py-5">
                        <div>
                            <p class="font-medium">24/05/2024 <span class="text-xs text-gray-400 block">PX6789</span>
                            </p>
                            <p class="text-gray-500">CiproCure 500mg - HealthCorp Inc</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs">Mumbai, India</p>
                            <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded-full">Delivered</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-10"></div>
            </div>
        <!-- </div>
            <div class="bg-white p-3 rounded-2xl shadow col-span-2 max-w-96 flex-row-reverse ml-32">
                <div class="flex justify-between items-center mb-2">
                    <h4 class="text-lg font-semibold">Payment Summary</h4>
                    <div class="bg-gray-100 p-1 rounded-full flex">
                        <button
                            class="text-sm px-2 py-1 bg-white rounded-full shadow-sm text-purple-800">Upcoming</button>
                        <button class="text-sm px-3 py-1 text-gray-500">Paid</button>
                    </div>
                </div>

                <div class="flex justify-between items-end h-96 mb-2">
                    <div class="w-[20%] bg-purple-800 h-[90%] rounded-t-md"></div>
                    <div class="w-[20%] bg-purple-800 h-[90%] rounded-t-md"></div>
                    <div class="w-[20%] bg-purple-800 h-[60%] rounded-t-md"></div>
                </div>

                <div class="flex justify-between text-sm text-gray-500 mt-1">
                    <span>1-30 days</span>
                    <span>31-60 days</span>
                    <span>61-90 days</span>
                </div>
                <h4 class="text-sm py-4 px-4 text-center">Upcoming</h4>
            </div>


            </div> -->
        </div>
    </div>
</body>

</html>