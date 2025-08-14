<a href="{{ route('products.listing') }}"
    class="{{ request()->is('products') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
    Products
</a>
{{-- USERS CONTACT FORM --}}
<a href="{{ route('contact.form') }}"
    class="{{ request()->is('contact') ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : 'bg-gray-800 text-white hover:text-gray-400 hover:bg-gray-800' }} rounded-md px-3 py-2 text-sm font-medium">
    Contact
</a>