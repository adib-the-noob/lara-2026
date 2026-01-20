<x-layout title="Register">
    <div class="flex justify-center mt-12">
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend text-2xl">Create a New User</legend>

                <label class="label text-lg">Name</label>
                <input type="text" name="name" class="input text-lg" placeholder="Name" required />


                <label class="label text-lg">Email</label>
                <input type="email" name="email" class="input text-lg" placeholder="Email" required />

                <label class="label text-lg">Password</label>
                <input type="password" name="password" class="input text-lg" placeholder="Password" required />

                <button type="submit" class="btn btn-neutral mt-4 text-lg">Register</button>
            </fieldset>
        </form>
    </div>
</x-layout>