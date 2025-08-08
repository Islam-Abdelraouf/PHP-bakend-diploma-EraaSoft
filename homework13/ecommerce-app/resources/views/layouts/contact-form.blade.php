{{-- CONTACT FORM HTML SECTION --}}




    <form class="rounded-4 mx-auto mt-3 rounded border bg-white p-5 shadow-sm" style="width: 80%;"
        action="{{ url('send-message') }}" method="POST">

        {{-- CSRF TOKEN --}}
        @csrf

        {{-- Success Message --}}
        @if (session('success') != null)
            @include('layouts.save-message-success')
        @endif

        <div class="mb-6 grid gap-6 p-5 md:grid-cols-1"">
            <div>{{-- name --}}
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="Islam Abdelraouf" value="{{ old('name') ?? '' }}" />
                <x-validation-errors errorName="name"> </x-validation-errors>{{-- name-related errors --}}
            </div>
            <div>{{-- email --}}
                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email"key:
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="m.engineer.islam@gmail.com" value="{{ old('email') ?? '' }}" />
                <x-validation-errors errorName="email"> </x-validation-errors>{{-- email-related errors --}}
            </div>
            <div>{{-- Message --}}
                <label for="message"
                    class="textkey: -gray-900 mb-2 block text-sm font-medium dark:text-white">Message</label>
                <textarea
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    name="message" placeholder="Message text" rows="6">{{ old('message') ?? '' }}</textarea>
                <x-validation-errors errorName="message"> </x-validation-errors>{{-- message-related errors --}}
            </div>
            <div class="full-width mb-3">{{-- Submit Button --}}
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
