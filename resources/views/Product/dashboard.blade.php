<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="bg-gray-50 absolute inset-0">
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
            class="mb-4 text-gray-500 hover:text-blue-600 hover:underline hover:scale-105 transform transition duration-300">
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
                <div class="w-[360px] h-[300px] py-10">
                    <canvas id="TotalOrders" class="h-[400px] px-"></canvas>
                </div>
            </div>

            <!-- Total Sell saya-->
            <div class="bg-white rounded-2xl shadow p-5 h-89">
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
                <div class="w-[300px] h-[300px] p-5">
                    <canvas id="TotalSell" class="py-1"></canvas>
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
                <div class="mt-6 py-5   ">
                    <div class="text-3xl font-bold text-gray-900">452</div>
                    <div class="text-sm mt-1 flex items-center space-x-2">
                        <span class="text-green-600 font-medium flex items-center py-3">⬆️ +23</span>
                        <span class="text-gray-400">vs last month</span>
                    </div>
                </div>
                <div class="mt-10"></div>
            </div>

            <div class="bg-white rounded-2xl shadow p-5 h-[400px]">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-white p-6 rounded-2hadow">
                            <h4 class="text-lg font-semibold mb-4">Order Summary</h4>

                            <div class="w-[300px] h=[300px] p-4">
                                <canvas id="OrderSummary" class="h-3 w-5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow p-5 h-[400px]">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-white p-6 rounded-2hadow">
                            <h4 class="text-lg font-semibold mb-4">Payment Summary       <span class="flex space-x-2">
                                <button id="btnUpcoming"
                                    class="text-sm px-3 py-1 bg-purple-600 text-white rounded-full shadow">Upcoming</button>
                                <button id="btnPaid"
                                    class="text-sm px-3 py-1 text-gray-600 rounded-full hover:bg-gray-200">Paid</button>
                            </span></h4>

                            <div class="w-[300px] h=[300px] p-4">
                                <canvas id="paymentChart" class="h-3 w-5"></canvas>
                            </div>
                            <h4 class="text-lg text-center py-4 text-gray-700">Upcoming</h4>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Order saya -->
            <div class="bg-white rounded-2xl shadow p-4 h-[400px]">
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
        </div>
    </div>

    <script>
    const ctx = document.getElementById('paymentChart').getContext('2d');

    const upcomingData = [90, 90, 60];
    const paidData = [30, 70, 50];

    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1-30 days', '31-60 days', '61-90 days'],
            datasets: [{
                label: 'Payment Amount',
                data: upcomingData,
                backgroundColor: '#6B21A8',
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 20
                    }
                }
            }
        }
    });

    document.getElementById('btnUpcoming').addEventListener('click', function() {
        chart.data.datasets[0].data = upcomingData;
        chart.update();
    });

    document.getElementById('btnPaid').addEventListener('click', function() {
        chart.data.datasets[0].data = paidData;
        chart.update();
    });

    const labelsOrders = ['January', 'February', 'March', 'April', 'May', 'June'];
    const dataOrders = {
        labels: labelsOrders,
        datasets: [{
            label: 'Total Orders',
            backgroundColor: 'rgb(54, 162, 235)',
            borderColor: 'rgb(54, 162, 235)',
            data: [0, 10, 5, 2, 20, 30],
            borderWidth: 2,
            fill: false,
            tension: 0.4
        }]
    };
    new Chart(document.getElementById('TotalOrders'), {
        type: 'line',
        data: dataOrders,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    const labelsSell = ['January', 'February', 'March', 'April'];
    const dataSell = {
        labels: labelsSell,
        datasets: [{
            label: 'Total Sell',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [20, 15, 5, 0],
            borderWidth: 2,
            fill: false,
            tension: 0.4
        }]
    };
    new Chart(document.getElementById('TotalSell'), {
        type: 'line',
        data: dataSell,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    const ctxOrderSummary = document.getElementById('OrderSummary');

    new Chart(ctxOrderSummary, {
        type: 'bar',
        data: {
            labels: ['Pending Orders', 'Shipped Orders', 'Delivered Orders'],
            datasets: [{
                label: 'Jumlah Pesanan',
                data: [160, 120, 120],
                backgroundColor: ['gold', 'blueviolet', 'mediumseagreen'],
                borderRadius: 3,
            }]
        },
        options: {
            indexAxis: 'y',
            scales: {
                x: {
                    max: 250,
                    title: {
                        display: true,
                        text: 'Total Orders'
                    },
                    ticks: {
                        stepSize: 50
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.raw;
                            const percentage = ((value / 400) * 100).toFixed(0);
                            return `${value}/400 Orders (${percentage}%)`;
                        }
                    }
                },
                legend: {
                    display: false
                },
            }
        }
    });
    </script>
</body>

</html>
</body>

</html>