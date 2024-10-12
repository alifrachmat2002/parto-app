<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nomor_surat');
            $table->foreignId('pemohon_id')->constrained('users');
            $table->string('perihal');
            $table->string('nama_pemohon');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('kewarganegaraan');
            $table->string('agama');
            $table->enum('status_perkawinan',[
                'Belum Kawin',
                'Kawin',
                'Janda',
                'Duda']);
            $table->enum('pendidikan_terakhir',[
                'Belum Sekolah',
                'SD',
                'SLTP', 'SLTA',
                'D1/D2', 'AK/D3/SM',
                'S1/D4',
                'S2',
                'S3']);
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nomor_identitas');
            $table->string('keperluan');
            $table->string('nomor_hp');
            $table->enum('status', ['Menunggu Diperiksa Ketua RT', 'Direvisi Ketua RT', 'Menunggu Diperiksa Ketua RW', 'Direvisi Ketua RW', 'Selesai'])->default('Menunggu Diperiksa Ketua RT');
            $table->string('file_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
