{{-- CONTACT PAGE --}}

{{-- Main app page inheritance --}}
@extends('layouts.master')


{{-- Page Contents --}}
@section('content')
    <div class="flex justify-center bg-gray-100">
        {{-- CONTACT FORM --}}
        <form class="w-100 w-full rounded border bg-white p-5 shadow-lg" style="width: 80%;" action="{{ url('send-message') }}"
            method="POST">
            <x-section-title mainTitle="false">Contact Form</x-section-title>

            {{-- CSRF TOKEN --}}
            @csrf

            @php
                //Assign values to name and email
                $name = auth()->user() ? auth()->user()->name : '';
                $email = auth()->user() ? auth()->user()->email : '';
                $title = '';
                $message = '';
                if ($errors->any()) {
                    //Errors present after submitt
                    $name = old('name');
                    $email = old('email');
                    $title = old('title');
                    $message = old('message');
                } elseif (session('success') != null) {
                    //Success Message after submitt
                    // include 'layouts.alert-success';
                } else {
                    //First time to open the form
                    // $name = auth()->user() ? auth()->user()->name : '';
                    // $email = auth()->user() ? auth()->user()->email : '';
                }
            @endphp

            
            <div class="mb-6 grid gap-6 p-5 md:grid-cols-1"">

                {{-- Success Message after submitt --}}
                @include('layouts.alert-success')

                {{-- name --}}
                <div class="full-width mb-3">
                    <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Sender
                        name</label>
                    <input type="text" name="name"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Islam Abdelraouf" value="{{ $name ?? '' }}" />
                    <x-validation-errors errorName="name"> </x-validation-errors>{{-- name-related errors --}}
                </div>
                {{-- email --}}
                <div class="full-width mb-3">
                    <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Sender
                        email</label>
                    <input type="email" name="email"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="m.engineer.islam@gmail.com" value="{{ $email ?? '' }}" />
                    <x-validation-errors errorName="email"> </x-validation-errors>{{-- email-related errors --}}
                </div>
                {{-- Message title --}}
                <div class="full-width mb-3">
                    <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Message
                        title</label>
                    <input type="text" name="title"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Title" value="{{ $title ?? '' }}" />
                    <x-validation-errors errorName="title"> </x-validation-errors>{{-- title-related errors --}}
                </div>
                {{-- Message --}}
                <div class="full-width mb-3">
                    <label for="message" class="textkey: -gray-900 mb-2 block text-sm font-medium dark:text-white">Message
                        body</label>
                    <textarea
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        name="message" placeholder="Message text minimum 250 letters" rows="6">{{ $message ?? '' }}</textarea>
                    <x-validation-errors errorName="message"> </x-validation-errors>{{-- message-related errors --}}
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
    </div>
@endsection
