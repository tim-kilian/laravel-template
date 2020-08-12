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
        {{ __('Verify Your Email Address') }}
      </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

        @if (session('resent'))
          <div class="rounded-md bg-blue-50 p-4 text-sm leading-5 text-blue-700 my-3" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
          </div>
        @endif

        <div>
          {{ __('Before proceeding, please check your email for a verification link.') }}
          {{ __('If you did not receive the email') }},
        </div>

        <form method="POST" action="{{ route('verification.resend') }}">
          @csrf

          <div class="mt-6">
            <span class="block w-full rounded-md shadow-sm">
              <button
                  type="submit"
                  class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
              >
                {{ __('click here to request another') }}
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
