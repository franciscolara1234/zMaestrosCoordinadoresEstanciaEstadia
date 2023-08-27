<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css
    ">
    <link href="/css/styleAsesorAcademico/inicioProcesoAsesorAcademicoStyle.css"rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

    <title>UPQROO</title>
</head>
<body>
    <header class="header">
        @extends('plantillas/coordinadores/plantillaCoordinadoresMenu')
        @section('headerStart')
        @endsection
    </header>

    <main class="main-container">
        {{-- seccionde barra de navegacion --}}
        <section class="barra-navegacion">
            <div class="items-navegacion">
                <a href="">INICIO</a>
                <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion">
                <a href="">PROCESOS ANTERIORES</a>
                <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion">
                <a href="">abrir aula</a>
                {{-- <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion">
                <a href="">201600069</a>
                <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion"> --}}
            </div>

        </section>
        <div class="buscador-matricula">

        </div>
        {{-- SECCION DEL BUSCADOR --}}
        {{-- method="post" target="_blank" --}}
            {{-- <form action="academicosinfoalumno"  class="buscador-matricula">
                <input type="search" name="buscador matricula" placeholder="matrícula   alumno" class="barra-buscador-matricula" size="9" minlength="9" maxlength="9" pattern="[0-9]+" required>
                <input type="submit" value="Buscar alumno" class="boton-buscador">
            </form>
         --}}
       {{-- seccion de informacion general --}}

        <div class="detalle-general-pagina">

                <h1 > <span class="nombre-pagina">abrir aula de periodo</span> </h1>


            {{-- <div class="informacion-general"> --}}
                {{-- <div class="contenido-informacion-general"> --}}

                    {{-- <div class="cantidad-alumnos">

                            <h3>alumnos</h3> --}}
                        {{-- <h2>{{$procesosAsignados->count()}} --}}
                        {{-- </h2>                        --}}
                        {{-- <h2>{{$contadorAlumnosProceso}}
                        </h2>                        --}}
                    {{-- </div> --}}
                    {{-- <div class="alumnos-con-empresa">
                            <h3>aprobados</h3> --}}
                        {{-- <h2>2</h2> --}}
                        {{-- <h2>{{$alumnosAprobados}}</h2> --}}
                    {{-- </div> --}}
                    {{-- <div class="alumnos-sin-empresa">
                        <h3>Reprobados</h3> --}}
                        {{-- <h2>3</h2> --}}
                        {{-- <h2>{{$alumnosReprobados}}</h2> --}}

                    {{-- </div> --}}
                    {{-- <div class="cantidad-empresas">
                        <h3>empresas</h3>
                        <h2>100</h2>
                    </div>
                    <div class="empresas-con-convenio">
                        <h3>con convenio</h3>
                        <h2>100</h2>
                    </div>
                    <div class="empresas-sin-convenio">
                        <h3>SIN CONVENIO</h3>
                        <h2>0</h2>
                    </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
{{--
        </div> --}}
        {{--  seccion del data table  --}}
        {{-- {{$proceso}} --}}
            {{-- <p>
                {{$procesos['id_asesor_academico']}}
                {{-- {{$proceso['id_carrera']}} --}}
            {{-- </p>  --}}
    {{-- <div class="card">
        <div class="card-body">

        </div>
    </div> --}}
        {{-- {{$datosTabla}} --}}
<section class="data-table">

    <section class="col-md-12 col-lg-12 d-flex justify-content-center align-items-center">
       {{-- method="post" target="_blank"  --}}
        <div class="card-body p-4 p-lg-5 text-black">


            <form method="POST" action="{{ route('CrearAulaProcesoAcademico')}}"        class="d-flex justify-content-center align-items-center">
                @csrf
                <div class="row">

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="tipo-proceso" class="form-label">Proceso Elegido</label>

                            <select id="tipoProceso"  class="form-control form-control-lg" name="select-tipo-proceso" reandoly>

                                @foreach ($procesosNombres as $item)
                                    <option value="{{$item['IdTipoProceso']}}">
                                        {{$item['nombreProceso']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="carrera" class="form-label">Carrera Elegida</label>

                            <select id="tipoProceso"  class="form-control form-control-lg" name="select-carrera" reandoly>
                                <option value="{{$carreraSeleccionada[0]->IdCarrera}}">{{$carreraSeleccionada[0]->NombreCarrera}}</option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-outline mb-4">
                                <label for="tipo-proceso" class="form-label">Elegir Al Asesor Académico Para El Proceso Elegido</label>

                                <select id="tipoProceso"  class="form-control form-control-lg" name="select-id-maestro" >
                                    @foreach ($maestros as $item)
                                    <option value="{{$item['id']}}">{{$item->aa_academico_user->Nombre}}  {{$item->aa_academico_user->APP}} {{$item->aa_academico_user->APM}}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>

                    {{-- <input type="submit"  value="seleccionar Proceso" class="boton-aprobar-cedula" disabled> --}}
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center align-items-center">
                                    <div class="pt-1 mb-4">
                                        <input type="submit"  value="Confirmar Proceso-Carrera" class="btn btn-dark btn-lg btn-block" onclick="return= confirmacion()">
                                    </div>

                                </div>

                </div>


            </form>

        </div>


</section>

            {{-- </section> --}}

{{-- </section> --}}

        <script src="./js/abrirAulaAsesorAcademicoSelectNoneBlock.js"></script>

    {{-- se llama a la plantilla que ocntiene todos los scrips con los cdns necesarios para cargar el data table --}}
    @extends('plantillas/plantillaJsDataTable')
    @section('scripstStart')
    @endsection

        </section>
    </main>

</body>

</html>











