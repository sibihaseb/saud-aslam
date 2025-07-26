@extends('layouts.front-header')

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Contact Us</h2>
        <p class="text-gray-600 mb-6">Your thoughts matter to us! Share them using the form below.</p>

        @if (session('success'))
            <div id="successMessage" class="bg-green-100 text-green-800 border border-green-300 px-4 py-3 rounded mb-6">
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                <textarea id="message" name="message" rows="4" required
                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button type="submit"
                class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                Send Message
            </button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        setTimeout(function() {
            const message = document.getElementById('successMessage');
            if (message) {
                message.classList.add('transition-opacity', 'duration-500', 'opacity-0');
                setTimeout(() => message.remove(), 500);
            }
        }, 5000);
    </script>
@endpush
