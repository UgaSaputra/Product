<div class="h-full w-full flex-1 bg-orange-500">

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
            <tbody class="divide-y divide-gray-200">
                @forelse($data as $siswa)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 align-middle border border-gray-200">
                            {{ $siswa->nama }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 align-middle border border-gray-200 text-center">
                            {{ $siswa->kelas }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 align-middle border border-gray-200 text-center">
                            {{ $siswa->jurusan }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 align-middle border border-gray-200 text-center">
                            {{ $siswa->alamat }}
                        </td>
                        <td class="px-1 py-2.5 text-sm text-gray-900 underline text-center align-middle space-x-2 border border-gray-200">
                            <flux:button :href="route('tasks.edit', $siswa)" class="inline-block py-4">Edit</flux:button>
                            <flux:button variant="danger" wire:click="delete({{ $siswa->id }})" wire:confirm="Are you sure?" class="inline-block text-xs border bg-slate-800 py-1 px-2.5">Delete</flux:button>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="5">Data empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-6 flex">
    {{ $data->links() }}
 </div>

    </div>

</div>
