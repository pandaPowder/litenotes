<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    
                    <form action="{{ route('notes.store') }}" method="post">
                        <label for="title">Title</label>
                        <x-text-input
                            type="text"
                            name="title"
                            field="title"
                            id="title"
                            placeholder="Be bold"
                            class="w-full mb-6"
                            :value="@old('title')"></x-text-input>
                        <label for="text" class="mt-6">Body</label>
                        <x-textarea-input name="text" id="text" field="text" rows="10" placeholder="Start typing here..." class="w-full" :value="@old('text')"></x-textarea-input>
                        @csrf
                        <br />
                        <x-primary-button class="mt-6">Save Note</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>