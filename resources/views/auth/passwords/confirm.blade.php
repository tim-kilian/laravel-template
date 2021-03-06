@extends('layouts.app')

@section('content')
  <div class="h-full bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center text-3xl">
      <img
          class="mx-auto h-12 w-auto"
          src=""
          alt="{{ env('APP_NAME', 'Template') }}"
      >
      <h2 class="mt-6 leading-9 font-extrabold text-gray-900">
        {{ __('Confirm Password') }}
      </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <div>
          {{ __('Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
          @csrf

          <div class="mt-6">
            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
              Password
            </label>
            <div class="mt-1 rounded-md shadow-sm">
              <input
                  id="password"
                  type="password"
                  name="password"
                  required
                  autocomplete="current-password"
                  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror"
              >
            </div>
          </div>

          @error('password')
          <span class="text-red-500 mt-3" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <div class="mt-6">
            <span class="block w-full rounded-md shadow-sm">
              <button
                  type="submit"
                  class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
              >
                {{ __('Confirm Password') }}
              </button>
            </span>
          </div>

          <div class="mt-6 flex justify-center">
            <div class="text-sm leading-5">
              @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                >
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
