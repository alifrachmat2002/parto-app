<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surat>
 */
class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pemohon = $this->faker->name();
        $alamat = $this->faker->address();
        $perihal = $this->faker->randomElement([
            'Permohonan KTP',
            'Permohonan KK',
            'Permohonan KTP dan KK',
            'Surat domisili',
            'Surat keterangan pindah',
            'Surat keterangan',
            // 'Pembuatan Akta Kelahiran',
            // 'Pembuatan Akta Kematian',
            // 'Pembuatan Surat Keterangan Belum Menikah',
            // 'Pembuatan Surat Keterangan Menikah',
            // 'Pembuatan Surat Keterangan Cerai',
            // 'Pembuatan Surat Keterangan Kematian',
            // 'Pembuatan Surat Keterangan Usaha',
            // 'Pembuatan Surat Keterangan Domisili'
            ]);
        
            switch($perihal) {
                case 'Permohonan KTP':
                    $keterangan = 'Permohonan pembuatan KTP atas nama ' . $pemohon;
                    break;
                case 'Surat domisili' :
                    $keterangan = 'Permohonan surat domisili di ' . $alamat;
                    break;
                case 'Permohonan KK' :
                    $keterangan = 'Permohonan pembuatan KK';
                    break;
                case 'Surat keterangan pindah':
                    $keterangan = 'Permohonan surat keterangan pindah ke [lengkapi alamat]';
                    break;
                case 'Surat keterangan':
                    $keterangan = 'menerangkan bahwa [lengkapi keterangan]';
                    break;
                case 'lainnya':
                    $keterangan = '';
                    break;
                default:
                    $keterangan = '';
                    break;
            }
                
        return [
            'perihal' => $perihal,
            'nama_pemohon' => $pemohon,
            'pemohon_id' => User::inRandomOrder()->first()->id,
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'kewarganegaraan' => $this->faker->country(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'status_perkawinan' => $this->faker->randomElement(['Belum Kawin', 'Kawin', 'Janda', 'Duda']),
            'pendidikan_terakhir' => $this->faker->randomElement(['Belum Sekolah', 'SD', 'SLTP', 'SLTA', 'D1/D2', 'AK/D3/SM', 'S1/D4', 'S2', 'S3']),
            'pekerjaan' => $this->faker->jobTitle(),
            'alamat' => $alamat,
            'nomor_identitas' => $this->faker->nik(),
            'keperluan' => $keterangan,
            'nomor_hp' => $this->faker->phoneNumber(),
            'file_surat' => $this->faker->word,
            'status' => $this->faker->randomElement(['Menunggu Diperiksa Ketua RT', 'Direvisi Ketua RT', 'Menunggu Diperiksa Ketua RW', 'Direvisi Ketua RW', 'Selesai']),
        ];
    }
}
