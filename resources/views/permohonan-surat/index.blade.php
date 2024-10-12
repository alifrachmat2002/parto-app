<x-app-layout>
    <x-slot name="breadcrumbs">
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <a href="#"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Riwayat
                    Permohonan</a>
            </div>
        </li>
    </x-slot>

    <section class="bg-gray-100 dark:bg-gray-900 px-4">
        <h2 class="mb-4 text-xl font-semibold leading-none text-gray-900 md:text-3xl dark:text-white mt-8">
            Riwayat Permohonan Surat
        </h2>

        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400" data-tabs-toggle="#suratTab" role="tablist" data-tabs-active-classes="text-white bg-blue-600">
            <li class="me-2" role="presentation">
                <a href="#" class="inline-block px-3 py-2 rounded-lg active" id="" data-tabs-target="#pendingSuratTab" type="button" role="tab" aria-controls="pendingSuratTab" aria-selected="false"
                    aria-current="page">Berjalan</a>
            </li>
            <li class="me-2" role="presentation">
                <a href="#"
                    class="inline-block px-3 py-2 rounded-lg " id="profile-tab" data-tabs-target="#acceptedSuratTab" type="button" role="tab" aria-controls="acceptedSuratTab" aria-selected="false">Selesai</a>
            </li>

        </ul>
        <div id="suratTab">
            <div class="py-4 lg:py-6 grid md:grid-cols-2 lg:grid-cols-3  gap-4" id="acceptedSuratTab" role="tabpanel">
                @forelse ($acceptedSurats as $acceptedSurat)
                    <a href="{{ route('permohonan-surat.show', $acceptedSurat->id) }}"
                        class="block max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $acceptedSurat->perihal }}</h5>

                        <p class="font-normal text-sm text-gray-500 dark:text-gray-400 mt-0 p-0 mb-4">
                            {{ $acceptedSurat->created_at->diffForHumans() }}
                        </p>
                        <p class="font-normal text-gray-700 dark:text-gray-400 mb-4">{{ $acceptedSurat->keperluan }}</p>
                        <span
                            class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full "></span>
                            {{ $acceptedSurat->status }}
                        </span>

                    </a>
                @empty
                    
                @endforelse


            </div>
            <div class="py-4 lg:py-6 grid md:grid-cols-2 lg:grid-cols-3  gap-4" id="pendingSuratTab" role="tabpanel">
                @forelse ($pendingSurats as $pendingSurats)
                    <a href="{{ route('permohonan-surat.show', $pendingSurats->id) }}"
                        class="block max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $pendingSurats->perihal }}</h5>

                        <p class="font-normal text-sm text-gray-500 dark:text-gray-400 mt-0 p-0 mb-4">
                            {{ $pendingSurats->created_at->diffForHumans() }}
                        </p>
                        <p class="font-normal text-gray-700 dark:text-gray-400 mb-4">{{ $pendingSurats->keperluan }}</p>
                        <span
                            class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full "></span>
                            {{ $pendingSurats->status }}
                        </span>

                    </a>
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>

    <x-slot name="sripts">

    </x-slot>
</x-app-layout>
