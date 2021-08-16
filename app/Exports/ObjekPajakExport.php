<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\ObjekPajak;

class ObjekPajakExport implements FromView
{
    use Exportable;
    
    public function view(): View
    {
        return view('excel.objek_pajak', [
            'objek_pajak' => ObjekPajak::all()
        ]);
    }
}
