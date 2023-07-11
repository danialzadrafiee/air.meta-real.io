<x-app-layout>
    @vite('resources/js/auth-start.js')
    <main class="relative w-screen h-screen flex items-center justify-center">

        <img src="{{ asset('img/background.jpg') }}" class="w-screen h-screen fixed top-0 right-0 -z-10 object-cover">
        <div class="scale-150">

            <w3m-core-button></w3m-core-button>
        </div>
    </main>
</x-app-layout>
