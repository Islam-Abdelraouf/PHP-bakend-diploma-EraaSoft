{{-- Main app page inheritance --}}
@extends('front.app')

{{-- Heading section --}}
@section('heading')
    Contact Form
@endsection

{{-- Page Contents --}}
@section('content')
    <!-- CONTACT FORM -->

    <form class="rounded-4 mx-auto mt-3 rounded border bg-white p-5 shadow-sm" style="width: 80%;"
        action="{{ url('send-message') }}" method="POST">

        {{-- CSRF TOKEN --}}
        @csrf

        {{-- Success Message --}}
        @if (session('success') != null)
            <div id="alert-border-3"
                class="mb-4 flex items-center border-t-4 border-green-300 bg-green-50 p-4 text-green-800 dark:border-green-800 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="h-4 w-4 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#63E6BE"
                        d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM404.4 276.7L324.4 404.7C320.2 411.4 313 415.6 305.1 416C297.2 416.4 289.6 412.8 284.9 406.4L236.9 342.4C228.9 331.8 231.1 316.8 241.7 308.8C252.3 300.8 267.3 303 275.3 313.6L302.3 349.6L363.7 251.3C370.7 240.1 385.5 236.6 396.8 243.7C408.1 250.8 411.5 265.5 404.4 276.8z" />
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="mb-6 grid gap-6 p-5 md:grid-cols-1"">
            {{-- name --}}
            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Islam Abdelraouf" value="{{ old('name') ?? '' }}" />
                {{-- name-related errors --}}
                <x-val-errors errorName="name"> </x-val-errors>
            </div>
            {{-- email --}}
            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email"key:
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="m.engineer.islam@gmail.com" value="{{ old('email') ?? '' }}" />
                {{-- email-related errors --}}
                <x-val-errors errorName="email"> </x-val-errors>
            </div>
            {{-- Message --}}
            <div>
                <label for="message"
                    class="textkey: -gray-900 mb-2 block text-sm font-medium dark:text-white">Message</label>
                <textarea
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    name="message" placeholder="Message text" rows="6">{{ old('message') ?? '' }}</textarea>
                {{-- message-related errors --}}
                <x-val-errors errorName="message"> </x-val-errors>
            </div>
            {{-- Submit Button --}}
            <div class="full-width mb-3">
                <button
                    class="full-width group relative me-2 mt-2 inline-flex items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-green-400 to-blue-600 p-0.5 text-sm font-medium text-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-green-200 group-hover:from-green-400 group-hover:to-blue-600 dark:text-white dark:focus:ring-green-800"
                    style="width: 100%;" value="send">
                    <span
                        class="relative rounded-md bg-white px-5 py-2.5 transition-all duration-75 ease-in group-hover:bg-transparent dark:bg-gray-900 group-hover:dark:bg-transparent"
                        style="width: 100%;">
                        Submit
                    </span>
                </button>

            </div>
        </div>
    </form>
@endsection
