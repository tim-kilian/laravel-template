<nav class="relative bg-white flex justify-between items-center px-4 py-6 sm:px-6 space-x-10">
  <span>
    <a href="{{ route('welcome') }}" class="flex">
      <img
          class="h-8 w-auto sm:h-10" src=""
          alt="{{ env('APP_NAME', 'Laravel') }}"
      >
    </a>
  </span>
  <span class="flex justify-center flex-1 space-x-10">
    {{--    <a--}}
    {{--        href="#"--}}
    {{--        class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150"--}}
    {{--    >--}}
    {{--      Item--}}
    {{--    </a>--}}
  </span>
  @if ($exception ?? false)
    <span></span>
  @else
    @guest
      <span class="flex items-center justify-end space-x-8">
        <a
            href="{{ route('login') }}"
            class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900"
        >
          Sign in
        </a>
        <a
            href="{{ route('register') }}"
            class="whitespace-no-wrap inline-flex rounded-md shadow-sm items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150"
        >
          Sign up
        </a>
      </span>
    @else
      <span class="flex items-center justify-end">
        <a
            class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
            class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900"
        >
          {{ __('Logout') }}
        </a>
      </span>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    @endguest
  @endif
</nav>
