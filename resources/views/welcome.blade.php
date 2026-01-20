<x-layout title="Home">
    <div id="all-ideas" class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center">
        @if (empty($ideas))
        <p class="text-center">No ideas found</p>
        @else
        @foreach ($ideas as $idea)
        <div class="w-4/5 rounded-xl border border-base-300/70 bg-base-100 p-5 shadow-sm">
            <h2 class="text-lg font-semibold text-base-content">{{ $idea->title }}</h2>
            <div class="mt-3 flex items-center justify-between text-sm text-base-content/70">
                <span class="uppercase tracking-wide">Status</span>
                @php
                $statusColor = match ($idea->status) {
                    'done' => 'bg-green-50 text-green-700 border-green-100',
                    'in_progress' => 'bg-yellow-50 text-yellow-700 border-yellow-100',
                    'pending' => 'bg-red-50 text-red-700 border-red-100',
                    default => 'bg-gray-50 text-gray-700 border-gray-200',
                };
                @endphp
                <span class="px-3 py-1 rounded-full border text-xs font-medium {{ $statusColor }}">
                    {{ $idea->status }}
                </span>
            </div>
            <div class="mt-4 flex justify-end">
                <button class="btn btn-ghost btn-sm">Details</button>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</x-layout>