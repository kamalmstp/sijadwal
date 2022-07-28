<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Jadwalfh;
use App\Jadwalguest;
use App\tahun_ajaran;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
class JadwalExport implements FromView, WithEvents
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
                $hari = array( 1 => 'Senin',
                            'Selasa',
                            'Rabu',
                            'Kamis',
                            'Jumat'
                        );
                $no = 5;
                $s = 6;
                for($i=1;$i<=5;$i++){
                    $x = Jadwalfh::where('id_tahunajaran', $this->id)->where('hari', $hari[$i])->get(['hari']);
                    $event->sheet->mergeCells('A'.$s.':A'.($x->count()+$s));
                    
                    $jam = Jadwalfh::where('id_tahunajaran', $this->id)->where('hari', $hari[$i])->groupBy('jam')->orderBy('jam')->get(['jam']);
                    foreach ($jam as $j){
                        $jam1 = Jadwalfh::where('id_tahunajaran', $this->id)->where('hari', $hari[$i])->where('jam',$j->jam)->get();
                        foreach ($jam1 as $r){
                            $no++;
                            $s++;
                        }
                        $no++;
                        $s++;
                    }
                    $event->sheet->mergeCells('A'.$s.':A'.($x->count()+$s));
                    
                }
                $event->sheet->styleCells(
                    'A5:G'.$no,
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['argb' => '000'],
                            ]   ,
                        ]
                    ]
                );

                $event->sheet->mergeCells('A1:G1');
                $event->sheet->mergeCells('A2:G2');
                $event->sheet->mergeCells('A3:G3');
            },
        ];
    }

    public function view(): View
    {
        return view('jadwalfhexcel', [
            'jadwalfh' => Jadwalfh::where('id_tahunajaran', $this->id)->get(),
            'id_tahunajaran' => tahun_ajaran::where('id_tahunajaran', $this->id)->first(),
            'jadwalguest' => Jadwalguest::where('id', 1)->first()            
        ]);
    }
}
