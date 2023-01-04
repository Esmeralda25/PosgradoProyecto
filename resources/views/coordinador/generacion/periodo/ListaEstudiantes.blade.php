
                                <table class="table table-striped mt-4">
                                    <thead class="table table-dark">
                                        <tr>
                                            <th style="font-weight:500" scope="col">Nombre</th>
                                            <th style="font-weight:500" scope="col">Correo</th>
                                            <th style="font-weight:500" scope="col">Programa Educativo</th>
                                            <th style="font-weight:500" scope="col">Periodo</th>
                                        <tr>
                                    </thead>
                                    <tbody>
                                    @foreach($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ $estudiante->nombre }}</td>
                                            <td>{{ $estudiante->correo }}</td>
                                            <td>{{ $estudiante->pe->nombre }}</td>
                                            <td>{{ $estudiante->periodo->nombre }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
