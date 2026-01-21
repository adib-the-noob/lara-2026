<x-layout title="Login">
    <div class="flex justify-center mt-12">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend text-2xl">Login</legend>

                <label class="label text-lg">Email</label>
                <input type="email" name="email" class="input text-lg" placeholder="Email" value="{{ old('email') }}" required  />
                
                <label class="label text-lg">Password</label>
                <input type="password" name="password" class="input text-lg" placeholder="Password" required />
                <x-form-error field="email" />

                <button type="submit" class="btn btn-neutral mt-4 text-lg">Login</button>
            </fieldset>
        </form>
        
        <x-form-error field="password" />
    </div>
</x-layout>