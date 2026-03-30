@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <div class="relative">

        <!-- IMAGE -->
        <img src="{{ asset('assets/images/home.jpg') }}" class="w-full h-112.5 md:h-125 object-cover">

        <!-- OVERLAY -->
        <div class="absolute inset-0"></div>
    </div>

    <!-- DESKRIPSI -->
    <div class="py-12 px-6 text-center max-w-3xl mx-auto">
        <p class="text-gray-900 dark:text-gray-300 text-lg leading-relaxed">
            Universitas Kristen Petra adalah tempat di mana pemimpin-pemimpin sosial global dibentuk dan ditempa
            berlandaskan nilai-nilai kristiani. Kami mengundangmu untuk menimba ilmu di universitas yang peduli dan global,
            untuk belajar di bawah staf pengajar yang teruji dan bergabung dengan para mahasiswa dengan visi yang
            sama—membawa dampak bagi dunia.
        </p>
    </div>
@endsection
