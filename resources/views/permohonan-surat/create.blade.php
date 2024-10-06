<x-app-layout>
    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Buat Permohonan Surat Baru</h2>
            <form action="{{ route('permohonan-surat.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    {{-- Nama Pemohon Input --}}
                    <div class="sm:col-span-2">
                        <label for="nama_pemohon"
                            class="block mb-2 text-sm font-medium @error('nama_pemohon') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Nama
                            Pemohon</label>
                        <input type="text" name="nama_pemohon" id="nama_pemohon"
                            class="bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('nama_pemohon') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Ketik nama pemohon" value="{{ old('nama_pemohon') }}">
                        @error('nama_pemohon')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nomor Identitas Input --}}
                    <div class="sm:col-span-2">
                        <label for="nomor_identitas"
                            class="block mb-2 text-sm font-medium @error('nomor_identitas') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Nomor Identitas
                            Kependudukan (NIK)</label>
                        <input type="text" name="nomor_identitas" id="nomor_identitas"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('nomor_identitas') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Ketik nomor identitas pemohon" value="{{ old('nomor_identitas') }}">
                        @error('nomor_identitas')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nomoh HP Input --}}
                    <div class="sm:col-span-2">
                        <label for="phone-input"
                            class="block mb-2 text-sm font-medium @error('nomor_hp') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Nomor Telepon</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                    <path
                                        d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                </svg>
                            </div>
                            <input type="text" id="phone-input" aria-describedby="helper-text-explanation"
                                name="nomor_hp"
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 @error('nomor_hp') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="contoh: 081265657787" value="{{ old('nomor_hp') }}" />
                        </div>
                        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Ketik
                            nomor telepon</p>
                        @error('nomor_hp')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tempat lahir input --}} 
                    <div class="w-full">
                        <label for="tempat_lahir"
                            class="block mb-2 text-sm font-medium @error('tempat_lahir') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('tempat_lahir') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Ketik tempat lahir pemohon" value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- tanggal lahir input --}}
                    <div class="w-full">
                        <label for="datepicker-autohide"
                            class="block mb-2 text-sm font-medium @error('tanggal_lahir') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Tanggal Lahir</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="datepicker-autohide" datepicker datepicker-autohide type="text"
                                name="tanggal_lahir"
                                class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('tanggal_lahir') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                                placeholder="Pilih tanggal lahir pemohon" value="{{ old('tanggal_lahir') }}">
                        </div>
                        @error('tanggal_lahir')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jenis Kelamin Input --}}
                    <div>
                        <label for="jenis_kelamin"
                            class="block mb-2 text-sm font-medium @error('jenis_kelamin') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('jenis_kelamin') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror">
                            <option selected value="">Pilih jenis kelamin </option>
                            <option value="Laki-laki" @selected(old('jenis_kelamin') == "Laki-laki")>Laki-laki</option>
                            <option value="Perempuan" @selected(old('jenis_kelamin') == "Perempuan")>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- status perkawinan input --}}
                    <div>
                        <label for="status_perkawinan"
                            class="block mb-2 text-sm font-medium @error('status_perkawinan') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Status</label>
                        <select id="status_perkawinan" name="status_perkawinan"
                            class="bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('status_perkawinan') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror" >
                            <option selected value="">Pilih status </option>
                            <option value="Belum Kawin" @selected(old('status_perkawinan') == "Belum Kawin")>Belum Kawin</option>
                            <option value="Kawin" @selected(old('status_perkawinan') == "Kawin")>Kawin</option>
                            <option value="Janda" @selected(old('status_perkawinan') == "Janda")>Janda</option>
                            <option value="Duda" @selected(old('status_perkawinan') == "Duda")>Duda</option>
                        </select>
                        @error('status_perkawinan')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- agama input --}}
                    <div>
                        <label for="agama"
                            class="block mb-2 text-sm font-medium @error('agama') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Agama</label>
                        <select id="agama" name="agama"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500  @error('agama') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror">
                            <option selected value="">Pilih agama pemohon</option>
                            <option value="Islam" @selected(old('agama') == "Islam")>Islam</option>
                            <option value="Protestan" @selected(old('agama') == "Protestan")>Protestan</option>
                            <option value="Katolik" @selected(old('agama') == "Katolik")>Katolik</option>
                            <option value="Buddha" @selected(old('agama') == "Buddha")>Buddha</option>
                            <option value="Khonghucu" @selected(old('agama') == "Khonghucu")>Khonghucu</option>
                        </select>
                        @error('agama')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- kewarganegaraan input --}}
                    <div class="">
                        <label for="kewarganegaraan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                        <div class="flex" id="kewarganegaraan">
                            <div class="flex items-center me-4">
                                <input id="indonesia-nationality-radio" type="radio" value="Indonesia" @checked(old('kewarganegaraan') == "Indonesia")
                                    name="kewarganegaraan"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="indonesia-nationality-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Indonesia</label>
                            </div>
                            <div class="flex items-center me-4 gap-4">
                                <input id="custom_nationality_radio" type="radio" value="Other" @checked(old('kewarganegaraan') == "Other")
                                    name="kewarganegaraan"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="custom_nationality_radio" class="relative z-0">
                                    <input type="text" id="custom_nationality" name="custom_nationality"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " @error('custom_nationality') @else disabled @enderror value="{{ old('custom_nationality') ?? '' }}"/>
                                    <label for="custom_nationality"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Lainnya</label>
                                </label>
                            </div>

                        </div>
                        @error('kewarganegaraan')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                        @error('custom_nationality')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- pendidikan terakhir input --}}
                    <div>
                        <label for="pendidikan_terakhir"
                            class="block mb-2 text-sm font-medium @error('pendidikan_terakhir') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Pendidikan
                            Terakhir</label>
                        <select name="pendidikan_terakhir" id="pendidikan_terakhir"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('pendidikan_terakhir') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror">
                            <option selected value="">Pilih pendidikan terakhir </option>
                            <option value="SD" @selected(old('pendidikan_terakhir') == 'SD')>SD/Sederajat</option>
                            <option value="SLTP" @selected(old('pendidikan_terakhir') == 'SLTP')>SLTP/Sederajat</option>
                            <option value="SLTA" @selected(old('pendidikan_terakhir') == 'SLTA')>SLTA/Sederajat</option>
                            <option value="D1/D2" @selected(old('pendidikan_terakhir') == 'D1/D2')>D-1/D-2</option>
                            <option value="AK/D3/SM" @selected(old('pendidikan_terakhir') == 'AK/D3/SM')>Akademi/ D-3 </option>
                            <option value="S1/D4" @selected(old('pendidikan_terakhir') == 'S1/D4')>S-1/D-4</option>
                            <option value="S2" @selected(old('pendidikan_terakhir') == 'S2')>S-2</option>
                            <option value="S3" @selected(old('pendidikan_terakhir') == 'S3')>S-3</option>
                        </select>
                        @error('pendidikan_terakhir')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- pekerjaan input --}}
                    <div class="w-full">
                        <label for="pekerjaan"
                            class="block mb-2 text-sm font-medium @error('pekerjaan') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan"
                            class="bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('pekerjaan') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Ketik pekerjaan pemohon" value="{{ old('pekerjaan') }}">
                        @error('pekerjaan')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- alamat input --}}
                    <div class="sm:col-span-2">
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium @error('alamat') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('alamat') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Ketik alamat pemohon" value="{{ old('alamat') }}">
                        @error('alamat')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- keperluan input --}}
                    <div class="">
                        <label for="keperluan"
                            class="block mb-2 text-sm font-medium @error('keperluan') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Keperluan</label>
                        <select name="keperluan" id="keperluan"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('keperluan') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror">
                            <option selected value="" @selected(old('keperluan') == 'SD')>Pilih keperluan pemohon </option>
                            <option value="Surat domisili" @selected(old('keperluan') == 'Surat domisili')>Surat domisili</option>
                            <option value="Permohonan KTP" @selected(old('keperluan') == 'Permohonan KTP')>Permohonan KTP</option>
                            <option value="Permohonan KK" @selected(old('keperluan') == 'Permohonan KK')>Permohonan KK</option>
                            <option value="Permohonan KTP dan KK" @selected(old('keperluan') == 'Permohonan KTP dan KK')>Permohonan KTP dan KK</option>
                            <option value="Surat keterangan pindah" @selected(old('keperluan') == 'Surat keterangan pindah')>Surat keterangan pindah</option>
                            <option value="Surat keterangan" @selected(old('keperluan') == 'Surat keterangan')>Surat keterangan</option>
                            <option value="lainnya" @selected(old('keperluan') == 'lainnya')>Lainnya</option>
                        </select>
                        @error('keperluan')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- custom keperluan input  --}}
                    <div class="w-full" hidden id="custom-keperluan-input">
                        <label for="custom-keperluan"
                            class="block mb-2 text-sm font-medium @error('custom-keperluan') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Keperluan
                            Lainnya</label>
                        <input type="text" name="custom-keperluan" id="custom-keperluan"
                            class="bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('custom-keperluan') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Ketik keperluan pemohon" value="{{ old('custom-keperluan') }}" disabled>
                        @error('custom-keperluan')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- keterangan input --}}
                    <div class="sm:col-span-2">
                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium @error('keterangan') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Keterangan</label>
                        <textarea id="keterangan" name="keterangan" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('keterangan') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            placeholder="Jelaskan keterangan permohonan surat" >{{ old('keterangan') ?? ''}}</textarea>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">contoh :
                            permohonan KTP atas nama Lorem Ipsum</p>
                        @error('keterangan')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- unggah dokumen input --}}
                    <div class="sm:col-span-2">

                        <label class="block mb-2 text-sm font-medium @error('file_surat') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror"
                            for="file_input">Unggah Dokumen Pendukung</label>
                        <input
                            class="block w-full text-sm text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:placeholder-gray-400 @error('file_surat') dark:border-red-500 border-red-600 dark:focus:border-red-500 @else border-gray-300 dark:border-gray-600 @enderror"
                            aria-describedby="file_input_help" id="file_input" type="file" name="file_surat">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">KTP, KK dan
                            dokumen lainnya yang sudah digabungkan dalam 1 file PDF (Maks. 5MB)</p>
                        @error('file_surat')
                            <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-gray-800 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Simpan Permohonan
                </button>
            </form>
        </div>
    </section>

    <x-slot name="scripts">
        <script>
            console.log('Hello from blade');

            // code to modify nationality input based on radio button value selection
            const indonesiaRadio = document.getElementById('indonesia-nationality-radio');
            const otherRadio = document.getElementById('custom_nationality_radio');
            const customNationalityInput = document.getElementById('custom_nationality');

            // if "other" radio is selected, enable the custom nationality input
            otherRadio.addEventListener('click', function() {
                customNationalityInput.disabled = false;
                customNationalityInput.focus();
            });

            // if "indonesia" radio is selected, disable the custom nationality input
            indonesiaRadio.addEventListener('click', function() {
                customNationalityInput.disabled = true;
            });

            const keperluanInput = document.getElementById('keperluan');
            const keteranganInput = document.getElementById('keterangan');
            const customKeperluan = document.getElementById('custom-keperluan-input');
            const customKeperluanInput = document.getElementById('custom-keperluan');

            keperluanInput.addEventListener('change', function() {
                if (keperluanInput.value === 'lainnya') {
                    customKeperluan.hidden = false;
                    customKeperluanInput.disabled = false;
                    customKeperluanInput.focus();
                } else {
                    customKeperluan.hidden = true;
                    customKeperluanInput.disabled = true;
                }

                switch (keperluanInput.value) {
                    case 'Surat domisili':
                        keteranganInput.value = 'Permohonan surat domisili di ' + document.getElementById('alamat')
                            .value;
                        break;
                    case 'Permohonan KTP':
                        keteranganInput.value = 'Permohonan pembuatan KTP atas nama ' + document.getElementById(
                            'nama_pemohon').value;
                        break;
                    case 'Permohonan KK':
                        keteranganInput.value = 'Permohonan pembuatan KK';
                        break;
                    case 'Permohonan KTP dan KK':
                        keteranganInput.value = 'Permohonan pembuatan KTP atas nama [lengkapi nama] dan KK';
                        break;
                    case 'Surat keterangan pindah':
                        keteranganInput.value = 'Permohonan surat keterangan pindah ke [lengkapi alamat]';
                        break;
                    case 'Surat keterangan':
                        keteranganInput.value = 'menerangkan bahwa [lengkapi keterangan]';
                        break;
                    case 'lainnya':
                        keteranganInput.value = '';
                        break;
                    default:
                        keteranganInput.value = '';
                        break;
                }
            });
        </script>
    </x-slot>
</x-app-layout>
