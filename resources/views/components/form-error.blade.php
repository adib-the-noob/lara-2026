@props(['field'])

@error($field)
    <div role="alert" class="alert alert-error mt-2 text-sm">
        <span>{{ $message }}</span>
    </div>
@enderror
