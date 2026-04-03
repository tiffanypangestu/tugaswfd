@extends('layouts.app')

@section('content')
    <div class="p-6 space-y-12 max-w-6xl mx-auto">

        @foreach ($facilities as $index => $facility)
            <div
                class="bg-white dark:bg-gray-800 shadow-lg rounded-xl p-6
            flex flex-col md:flex-row items-center gap-6
            {{ $index % 2 == 0 ? 'md:flex-row-reverse' : '' }}">

                <!-- IMAGE -->
                <img src="{{ asset('assets/images/' . $facility->foto) }}"
                    class="w-full md:w-1/2 h-64 object-cover rounded-lg">

                <!-- TEXT -->
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold mb-2 text-gray-900 dark:text-white">
                        {{ $facility->nama }}
                    </h2>

                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        {{ $facility->keterangan }}
                    </p>

                    <!-- LINK -->
                    <a href="{{ $facility->url }}" target="_blank" class="text-blue-500 hover:underline">
                        Lihat Selengkapnya →
                    </a>
                </div>

            </div>
        @endforeach

    </div>
@endsection
