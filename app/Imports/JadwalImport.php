<?php

namespace App\Imports;

use App\Jadwalfh;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; //TAMBAHKAN CODE INI
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use DateTime;

class JadwalImport implements ToModel, WithHeadingRow, WithMultipleSheets // USE CLASS YANG DIIMPORT
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }

    public function model(array $row)
    {
        $jam = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['jam'])->format('H:i:s');
        $jam_selesai = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['jam_selesai'])->format('H:i:s');

        return new Jadwalfh([
            'id_tahunajaran' => $row['id_tahunajaran'],
            'prodi' => $row['prodi'],
            'program' => $row['program'],
            'kode_matkul' => $row['kode_matkul'],
            'nama_matkul' => $row['nama_matkul'],   
            'sks' => $row['sks'], 
            'kelas' => $row['kelas'],
            'semester' => $row['semester'],
            'hari' => $row['hari'],  
            'jam' => $jam,
            'jam_selesai' => $jam_selesai,
            'ruangan' => $row['ruangan'],
            'dosen1' => $row['dosen1'],
            'dosen2' => $row['dosen2'],
            'dosen3' => $row['dosen3'],
            'dosen4' => $row['dosen4'],
            'dosen5' => $row['dosen5'],
            'dosen6' => $row['dosen6'],
            'jumlah_mahasiswa' => $row['jumlah_mahasiswa']
        ]);
    }
  
}