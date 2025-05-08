<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="h-full w-full flex flex-col bg-orange-500">

<!-- SIDEBAR DI ATAS -->
<div class="bg-orange-600 text-white px-6 py-4 shadow-md">
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-semibold">Dashboard Tugas</h1>
        <nav class="space-x-4">
            <a href="#" class="hover:underline">Beranda</a>
            <a href="#" class="hover:underline">Tugas</a>
            <a href="#" class="hover:underline">Pengaturan</a>
        </nav>
    </div>
</div>

<!-- KONTEN UTAMA -->
<div class="flex-1 p-6">
    <flux:button :href="route('tasks.create')" class="mb-4">
        Create
    </flux:button>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-with-50">
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider border border-gray-200">
                        Nama
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-200 uppercase tracking-wider border border-gray-200">
                        Kelas
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-200 uppercase tracking-wider border border-gray-200">
                        Jurusan
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-200 uppercase tracking-wider border border-gray-200">
                        Alamat
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-200 uppercase tracking-wider border border-gray-200">
                        Actions
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>

</div>

</body>
</html>