<x-layout title="Idea Details">
    <div class="mx-auto flex min-h-[70vh] max-w-md flex-col items-center justify-center gap-4">
        <x-idea-form
            title="{{ $idea->title }}"
            status="{{ $idea->status }}"
            method="post"
            action="{{ route('ideas.update', ['idea' => $idea->id]) }}">
        </x-idea-form>
        <form action="{{ route('ideas.destroy', ['idea' => $idea->id]) }}" method="post" class="w-full">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-ghost btn-sm text-error hover:bg-error/10 w-full border border-error/20">
                Delete Idea
            </button>
        </form>
    </div>
</x-layout>