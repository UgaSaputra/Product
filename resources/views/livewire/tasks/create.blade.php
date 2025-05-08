<div>
    <form wire:submit="save" class="flex flex-col gap-6">
        <flux:input wire:model="nama" label="{{ __('Nama') }}" type="text" name="nama" required />
        <flux:input wire:model="kelas" label="{{ __('Kelas') }}" type="text" name="kelas" required />
        <flux:input wire:model="jurusan" label="{{ __('Jurusan') }}" type="text" name="jurusan" required />

        <flux:textarea wire:model="alamat" label="{{ __('Alamat') }}" name="alamat" required />

        <div>
            <flux:button variant="primary" type="submit">{{ __('Save') }}</flux:button>
            <flux:button :href="route('tasks.index')" class="mb-4">Lihat Data</flux:button>
        </div>
    </form>
</div>