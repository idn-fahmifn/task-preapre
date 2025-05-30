<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold">Data Team</h2>

                    <div class="mt-6">
                        <form method="POST" action="{{ route('team.store') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="nama_team" :value="__('Nama Team')" />
                                <x-text-input id="nama_team" class="block mt-1 w-full" type="text" name="nama_team"
                                    :value="old('nama_team')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('nama_team')" class="mt-2" />
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ms-3">
                                    {{ __('Tambah Team') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">

                @foreach ($data as $item)
                    <div class="bg-white border border-gray-400 rounded-xl flex flex-col items-center justify-center py-6">
                        <div class="font-bold text-xl uppercase">
                            <a href="">{{$item->nama_team}}</a>
                        </div>
                    </div>

                @endforeach
            </div>


        </div>

    </div>
</x-app-layout>