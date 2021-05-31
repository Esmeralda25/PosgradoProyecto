@extends('layouts.master');

@section('content')
<div class="main container mt-10"></div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Crear Registros</h2>

                <form action="/pes" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="Programa" class="form-label">Programa Educativo</label>
                        <input id="Programa" type="text" name="Programa"  class="form-control" tabindex="2">
                    </div>
                    <div class="mb-3">
                        <label for="Nivel" class="form-label">Nivel</label>
                        <input id="Nivel" type="text" name="Nivel"  class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="Rubrica" class="form-label">Rubricas</label>
                        <input id="Rubrica" type="text" name="Rubrica"  class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="Entregable" class="form-label">Entregables</label>
                        <input id="Entregable" type="text" name="Entregable"  class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="Porcentaje" class="form-label">Porcetajes</label>
                        <input id="Porcentaje" type="text" name="Porcentaje"  class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="Periodo" class="form-label">Periodos</label>
                        <input id="Periodo" type="text" name="Periodo"  class="form-control" tabindex="3">
                    </div>

                    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <input type="submit" value="Enviar">
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </form>

        </div>
    </div>
</div>    

@endsection