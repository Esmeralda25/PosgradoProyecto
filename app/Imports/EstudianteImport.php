<?php

namespace App\Imports;

use App\Models\Estudiante;
use App\Models\Pe;
use App\Models\Periodo;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EstudianteImport implements ToModel, WithHeadingRow
{
    use Importable;
    private $pe;
    private $periodo;
    public function __construct(int $periodo_id, int $pe)
    {
        $this->pe = $pe;
        $this->periodo = $periodo_id;
        
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Estudiante([
            'nombre'     => $row['nombre'],
            'correo'    => $row['correo'], 
            'password' => Hash::make($row['password']),
            'pe_id' => $this->pe,
            'periodo_id' => $this->periodo
        ]);
    }
}
