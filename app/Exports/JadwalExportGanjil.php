<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Jadwalfh;
use App\Jadwalguest;
use App\tahun_ajaran;
Use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
class JadwalExportGanjil implements FromView, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($id)
    {
        $this->id = $id;
       
    }

    public function registerEvents(): array
    {
        return [

            AfterSheet::class    => function(AfterSheet $event) {
            $a = DB::table('jadwalfh')->where('id_tahunajaran', $this->id)->count();
           
                $event->sheet->styleCells(
                    'A4:M'.$a,
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['argb' => '000'],
                            ],
                        ]
                    ]
                );
            },
        ];
    }

    public function view(): View
    {
        return view('jadwalfhexcelganjil', [
            'jadwalfh1' => Jadwalfh::where('id_tahunajaran', $this->id)->where('hari','Senin')->get(),
            'jadwalfh2' => Jadwalfh::where('id_tahunajaran', $this->id)->where('hari','Selasa')->get(),
            'jadwalfh3' => Jadwalfh::where('id_tahunajaran', $this->id)->where('hari','Rabu')->get(),
            'jadwalfh4' => Jadwalfh::where('id_tahunajaran', $this->id)->where('hari','Kamis')->get(),
            'jadwalfh5' => Jadwalfh::where('id_tahunajaran', $this->id)->where('hari','Jumat')->get(),
            'id_tahunajaran' => tahun_ajaran::where('id_tahunajaran', $this->id)->first(),
            'jadwalguest' => Jadwalguest::where('id', 1)->first()  
        ]);
    }
}