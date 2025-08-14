{{-- ADMIN AREA --}}
{{-- MESSAGES LISTING PAGE --}}


{{-- Main app page inheritance --}}
@extends('layouts.master')

{{-- Heading section --}}
@section('heading')
    <x-section-title mainTitle="true">Message Listing</x-section-title>
@endsection

{{-- Page Contents --}}
@section('content')
    {{-- ALL PRODUCTS LISTING --}}

    <div class="relative w-full overflow-x-auto text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
        <div class="relative overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Message id
                        </th>
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Sender name
                        </th>
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Sender email
                        </th>
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Message body
                        </th>
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Operations
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($messages); --}}
                    @foreach ($messages as $message)
                    {{-- @dd($message) --}}
                        <tr class="bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{ $message->id }}</td>
                            <td class="px-6 py-4">{{ $message->user->name }}</td>
                            <td class="px-6 py-4">{{ $message->email }}</td>
                            <td class="px-6 py-4">{{ $message->message }}</td>


                            {{-- Actions section --}}
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-row items-baseline justify-center">
                                    {{-- Reply href link --}}
                                    <a href="{{ Route('message.reply', $message->id) }}">
                                        <i class="fa-solid fa-reply flex" style="color: #15a217;"></i>
                                    </a>
                                    &nbsp;&nbsp;
                                    {{-- Delete button section --}}
                                    <form action="{{ route('messages.destroy', $message) }}" method="POST" class="flex">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this message?');">
                                            <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
