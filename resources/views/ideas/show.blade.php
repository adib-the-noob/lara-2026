<x-layout title="Idea Details">
    <div class="mx-auto flex min-h-[70vh] items-center justify-center">
        <x-idea-form
            title="{{ $idea->title }}"
            status="{{ $idea->status }}"
            method="post"
            action="{{ route('ideas.update', ['idea' => $idea->id]) }}"
        >
        </x-idea-form>
    </div>
</x-layout>