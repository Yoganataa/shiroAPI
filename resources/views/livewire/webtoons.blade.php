<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Webtoons
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New
                Webtoon</button>

            @if ($isOpen)
                @include('livewire.create.webtoon')
            @endif



                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                    <table id="example" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1" class="px-4 py-2">No.</th>
                                <th data-priority="2" class="px-4 py-2">Title</th>
                                <th data-priority="3" class="px-4 py-2">Author</th>
                                <th data-priority="4" class="px-4 py-2">Genre</th>
                                <th data-priority="5" class="px-4 py-2">Description</th>
                                <th data-priority="6" class="px-4 py-2">Status</th>
                                <th data-priority="7" class="px-4 py-2">Rating</th>
                                <th data-priority="8" class="px-4 py-2">View Count</th>
                                <th data-priority="9" class="px-4 py-2">QR Code</th>
                                <th data-priority="10" class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($webtoons as $webtoon)
                                <tr>
                                    <td class="border px-4 py-2">{{ $webtoon->id }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->title }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->author }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->genre }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->description }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->status }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->rating }}</td>
                                    <td class="border px-4 py-2">{{ $webtoon->view_count }}</td>
                                    <td class="border px-4 py-2">
                                    @if ($webtoon->qr_code)
                                        <img src="data:image/png;base64,{{ $webtoon->qr_code }}" />
                                    @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <button wire:click="edit({{ $webtoon->id }})"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                        <button wire:click="delete({{ $webtoon->id }})"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
