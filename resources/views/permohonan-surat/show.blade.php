<x-app-layout>
    <x-slot name="breadcrumbs">
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <a href="{{ route('permohonan-surat.index') }}"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Riwayat
                    Permohonan</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <a href="#"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">{{ $surat->nomor_surat }}</a>
            </div>
        </li>
    </x-slot>

    <section class="bg-gray-100 dark:bg-gray-900 px-4 pb-4">
        <h2 class="lg:mb-8 mb-6 text-xl font-semibold leading-none text-gray-900 md:text-3xl dark:text-white mt-8">
            Detail Permohonan Surat
        </h2>
        <div class="max-w-full">
            {{-- <p class="mb-4 text-xl font-extrabold leading-none text-gray-900 md:text-2xl dark:text-white">$2999</p> --}}
            <div class="md:flex">
                <div class="flex-grow-1 lg:me-16">
                    <dl class="grid lg:grid-cols-2 items-center">
                        <div class="">
                            <dl>
                                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nama Pemohon
                                </dt>
                                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                    {{ $surat->nama_pemohon }}
                                </dd>
                            </dl>
                        </div>
                        <div class="">
                            <dl>
                                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nomor
                                    Identitas
                                    (NIK/Paspor)
                                </dt>
                                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                    {{ $surat->nomor_identitas }}</dd>
                            </dl>
                        </div>
                        <div>
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Tempat, Tanggal
                                Lahir</dt>
                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                {{ $surat->tempat_lahir . ', ' . $surat->tanggal_lahir }}</dd>
                        </div>
                        <div>
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Jenis Kelamin</dt>
                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                {{ $surat->jenis_kelamin }}
                            </dd>
                        </div>
                        <div>
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Kewarganegaraan
                            </dt>
                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                {{ $surat->kewarganegaraan }}
                            </dd>
                        </div>
                        <div>
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Agama</dt>
                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $surat->agama }}
                            </dd>
                        </div>
                        <div>
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Pekerjaan</dt>
                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $surat->pekerjaan }}
                            </dd>
                        </div>
                        <div>
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Status Perkawinan
                            </dt>
                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                {{ $surat->status_perkawinan }}
                            </dd>
                        </div>
                    </dl>
                    <dl>
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Pendidikan Terakhir
                        </dt>
                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                            {{ $surat->pendidikan_terakhir == 'AK/D3/SM' ? 'Akademi/D3' : $surat->pendidikan_terakhir }}
                        </dd>
                    </dl>
                    <dl>
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Alamat</dt>
                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $surat->alamat }}</dd>
                    </dl>
                </div>
                <div class="w-px bg-gray-300 mx-4"></div>
                <div class="flex-grow-1">
                    <dl>
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Keperluan Permohonan
                        </dt>
                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                            {{ $surat->perihal }}
                        </dd>
                    </dl>
                    <dl>
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Keterangan</dt>
                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $surat->keperluan }}
                        </dd>
                    </dl>
                    <a href="{{ asset('storage/public/lampiran/'. $surat->file_surat) }}" target="blank">
                        <button type=""
                            class="text-white inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Lihat Lampiran Dokumen
                        </button>
                    </a>
                </div>
            </div>

            {{-- <div class="flex items-center space-x-4 mt-3">
                <button type="button"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                        <path fill-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Edit
                </button>
                <button type="button"
                    class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Delete
                </button>
            </div> --}}
        </div>
    </section>

    <x-slot name="sripts">

    </x-slot>
</x-app-layout>
