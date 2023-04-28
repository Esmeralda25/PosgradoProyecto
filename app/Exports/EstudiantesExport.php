<?php

namespace App\Exports;

use App\Models\Estudiante;
use App\Models\Periodo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;

class EstudiantesExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function __construct(int $periodo_id)
    {
        $this->periodo_id = $periodo_id;
    }
    public function view(): View
    {
        return view('coordinador.generacion.periodo.ListaEstudiantes', [
            'estudiantes' => Estudiante::where('periodo_id',$this->periodo_id)->get()
        ]);
    }
}
