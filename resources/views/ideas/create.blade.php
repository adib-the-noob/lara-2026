<x-layout title="Add an Idea">
    <div class="mx-auto flex min-h-[70vh] max-w-md flex-col items-center justify-center gap-4">
        <x-idea-form
            method="post"
            action="{{ route('ideas.create') }}">
        </x-idea-form>
    </div>
</x-layout>