<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\ObjekPajak;
use App\Models\User;
use Maatwebsite\Excel\Concerns\Importable;

class ObjekPajakImport implements ToModel, WithHeadingRow
{
    use Importable;
    
    protected $users;
    public function __construct()
    {
        $this->users = User::select('id', 'nik')->get();
    }

    public function model(array $row)
    {
        $user = $this->users->where('nik', $row['nik'])->first();
        return new ObjekPajak([
            'user_id' => $user->id ?? NULL,
            'nopd' => $row['nopd'],
            'nama_usaha' => $row['nama_usaha'],
            'alamat' => $row['alamat'],
            'rt_rw' => $row['rt_rw'],
            'status' => $row['status']
        ]);
    }
}
