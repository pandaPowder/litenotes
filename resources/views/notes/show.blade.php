<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <p class="opacity-70">
                    <strong>Created: {{ $note->created_at->diffForHumans() }}</strong> 
                </p>
                <p class="opacity-70 ml-4">
                    <strong>Updated: {{ $note->updated_at->diffForHumans() }}</strong> 
                </p>
            </div>
            <div class="p-6 text-gray-900">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        {{ $note->title }}
                    </h2>
                    <p class="mt-6 whitespace-pre-wrap">{{ $note->text }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
