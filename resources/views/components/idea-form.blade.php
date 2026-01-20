@props([
    'title' => 'My awesome page',
    'status' => 'pending',
    'method' => 'post',
    'action' => route('home'),
])

<div class="card w-full max-w-md border border-base-300/70 bg-base-100 shadow-sm">
    <div class="card-body">
        <form action="{{ $action }}" method="{{ $method }}" class="space-y-4">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box border p-4 text-lg">
                <legend class="fieldset-legend font-semibold">Add Idea</legend>

                <label class="label" for="title">Title</label>
                <input type="text" id="title" class="input text-base w-full" placeholder="{{ $title }}" value="{{ $title }}" name="title" />

                <label class="label" for="status">Status</label>
                <select name="status" id="status" class="select select-bordered w-full text-base">
                    <option value="done" @selected($status==='done' )>Done</option>
                    <option value="in_progress" @selected($status==='in_progress' )>In Progress</option>
                    <option value="pending" @selected($status==='pending' )>Pending</option>
                </select>
            </fieldset>
            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary">Submit Idea</button>
            </div>
        </form>
    </div>
</div>