<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $incrementing = false;

    // a function to convert month number to Roman letters
    private static function monthToRoman($monthNumber)
    {
        $map = [
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X',
            11 => 'XI',
            12 => 'XII',
        ];
        return $map[$monthNumber];
    }

    public static function romanToMonth($romanMonth) {
        $map = [
            'I' => '1',
            'II' => '2',
            'III' => '3',
            'IV' => '4',
            'V' => '5',
            'VI' => '6',
            'VII' => '7',
            'VIII' => '8',
            'IX' => '9',
            'X' => '10',
            'XI' => '11',
            'XII' => '12',
        ];
        return $map[$romanMonth];
    }   

    // when we create a new Surat, create custom id that obeys the following rule
    // 1. The id must be a string
    // 2. The id must be unique
    // 3. The id begins with the prefix '15.'
    // 4. The id is followed by the current incrementing number, ex '15.001', '15.002', '15.003', etc
    // 5. The id is followed by "RT", ex '15.001/RT', '15.002/RT', '15.003/RT', etc
    // 6   The id is followed by the current month written in Roman letters, ex '15.001/RT/V', '15.002/RT/V', '15.003/RT/V', etc
    // 7. The id is followed by the current year, ex '15.001/RT/V/2024', '15.002/RT/V/2024', '15.003/RT/V/2024', etc
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $latestSurat = Surat::latest()->first();

            if ($latestSurat) {
                $latestSuratId = $latestSurat->id;
                $latestSuratIdExploded = explode('/', $latestSuratId);
                $latestSuratNumber = explode('.', $latestSuratIdExploded[0]);
                $latestSuratNumber = intval($latestSuratNumber[1]);
                $latestSuratMonth = Surat::romanToMonth($latestSuratIdExploded[2]);

                if ($latestSuratMonth != date('n')) {
                    $latestSuratNumber = 0;
                }

                $latestSuratNumber++;
            } else {
                $latestSuratNumber = 1;
            }

            $model->id = '15.' . str_pad($latestSuratNumber, 3, '0', STR_PAD_LEFT) . "/" . "RT/" . Surat::monthToRoman(date('n')) . '/' . date('Y');
        });
    }
}
