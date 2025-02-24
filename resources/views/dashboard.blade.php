<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">Halo, {{ Auth::user()->name }}!</h3>
                    <p>Selamat datang di dashboard.</p>

                    <!-- Menampilkan daftar layanan -->
                    <div class="mt-6">
                        <h4 class="text-md font-semibold mb-2">Daftar Layanan:</h4>
                        <ul class="bg-gray-700 p-4 rounded-lg">
                        <pre>{{ print_r($services->toArray(), true) }}</pre>
                            @forelse ($services as $service)
                                <li class="mb-2 p-2 bg-gray-600 rounded">
                                    {{ $service->name }} - Rp{{ number_format($service->price, 0, ',', '.') }}
                                </li>
                            @empty
                                <p class="text-gray-400">Belum ada layanan tersedia.</p>
                            @endforelse
                        </ul>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="mt-6">
                        <a href="{{ route('services.index') }}" 
                           class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                            Lihat Semua Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
