<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Reading Histories
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Add Reading History</button>

            @if($isOpen)
                @include('livewire.create.reading_history')
            @endif

<!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">User</th>
                        <th class="px-4 py-2">Episode</th>
                        <th class="px-4 py-2">Last Page Read</th>
                        <th class="px-4 py-2">Read Time</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($readingHistories as $history)
                        <tr>
                            <td class="border px-4 py-2">{{ $history->id }}</td>
                            <td class="border px-4 py-2">{{ $history->user->name }}</td>
                            <td class="border px-4 py-2">{{ $history->episode->episode_title }}</td>
                            <td class="border px-4 py-2">{{ $history->last_page_read }}</td>
                            <td class="border px-4 py-2">{{ $history->read_time }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $history->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button wire:click="delete({{ $history->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
