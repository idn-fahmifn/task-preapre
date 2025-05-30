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
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <tr>
                                    <td>Nama Team</td>
                                    <td>{{$data->nama_team}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="px-6 mb-6 mt-4 text-gray-900">
                    <h2 class="font-semibold">Member Team</h2>
                    <div class="overflow-x-auto">
                        <div class="mt-4">
                            <table class="min-w-full">
                                <tr>
                                    <td>Nama member</td>
                                    <td>No Telpon</td>
                                </tr>
                                <tr>
                                    <td>Jon</td>
                                    <td>0873847385</td>
                                </tr>
                                <tr>
                                    <td>Jon</td>
                                    <td>0873847385</td>
                                </tr>
                                <tr>
                                    <td>Jon</td>
                                    <td>0873847385</td>
                                </tr>
                                <tr>
                                    <td>Jon</td>
                                    <td>0873847385</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold">Data Task</h2>
                    <div class="mt-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <tr>
                                    <td>Nama Team</td>
                                    <td>{{$data->nama_team}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>