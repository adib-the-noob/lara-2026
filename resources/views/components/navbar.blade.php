<div class="navbar bg-base-100 shadow-sm">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="-1"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('ideas.createForm') }}">New Ideas</a></li>
      </ul>
    </div>
    <a href="{{ route('home') }}" class="btn btn-ghost text-xl">daisyUI</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('ideas.create') }}">New Ideas</a></li>
    </ul>
  </div>
  @guest
  <div class="navbar-end">
    @if(!request()->routeIs('register.show'))
    <a href="{{ route('register.show') }}" class="btn ml-2">Register</a>
    @endif
    @if(!request()->routeIs('login.show'))
    <a href="{{ route('login.show') }}" class="btn ml-2">Login</a>
    @endif
  </div>
  @endguest

  @auth
  <div class="navbar-end">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <div class="avatar">
        <div class="w-10 rounded-full">
          <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" />
        </div>
      </div>
      <button type="submit" class="btn btn-error text-white ml-2 hover:bg-red-600">Logout</button>
    </form>
  </div>
  @endauth
</div>