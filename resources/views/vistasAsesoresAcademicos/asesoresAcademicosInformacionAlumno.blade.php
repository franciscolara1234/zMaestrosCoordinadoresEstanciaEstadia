<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/styleAsesorAcademico/asesoresAcademicosInformacionAlumnoStyle.css"rel="stylesheet" >

    <title>UPQROO</title>
</head>
<body>
    <header class="header">
        @extends('plantillas/asesoresAcademicos/plantillaAsesorAcademicoMenu')
        @section('headerStart')
        @endsection
    </header>

    <main class="main-container">
        {{-- seccionde barra de navegacion --}}
        <section class="barra-navegacion"> 
            <div class="items-navegacion">
                <a href="">{{$informacionProcesoElejido[0]->tipo_procesos_proceso->nombreProceso}}</a>
                <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion">
                <a href="">ALUMNOS</a>
                
                <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion">
                <a href="">progreso documentación</a>

                <img src="/icons/simbolo-mayor-que.png" type=""
                alt="barra de navegacion" class="separador-navegacion">

                {{$informacionProcesoElejido[0]->user_proceso->Matricula}}

            </div>

        </section>
        {{-- SECCION DEL BUSCADOR --}}
        {{-- method="post" target="_blank" --}}
            {{-- <form action="academicosinfoalumno" class="buscador-matricula">
                <input type="search" name="buscador matricula" placeholder="matrícula   alumno" class="barra-buscador-matricula" size="9" minlength="9" maxlength="9" pattern="[0-9]+" required>
                <input type="submit"  value="Buscar alumno" class="boton-buscador">
            </form> --}}
        
       {{-- seccion de informacion general --}}

        <div class="detalle-general-pagina">
            
                <h1 > <span class="nombre-pagina">Progreso Documentación </span> </h1>

                <div class="contenedor-informacion-alumno">
                    <div class="contenedor-items-alumno">
                        <div class="contenedor-asignatura-alumno">
                            <div class="imagen-proceso-asignatura">
                                <img class="imagen-proceso" src="/icons/usuario-ESTADIAs.png" alt="">
                            </div >
                            <div>
                                <p class="nombre-proceso-asignatura">
                                    {{$informacionProcesoElejido[0]->tipo_procesos_proceso->nombreProceso}} {{$informacionProcesoElejido[0]->periodo_proceso->Periodo}}  

                                </p>
                            </div>
                     
                          
                        </div>
                        <div class="contenedor-nombre-alumno">
                             <p class="nombre-alumno">nombre:
                                {{$informacionProcesoElejido[0]->user_proceso->alumno_perfil_user->Nombre}}
                                {{$informacionProcesoElejido[0]->user_proceso->alumno_perfil_user->APP}}
                                {{$informacionProcesoElejido[0]->user_proceso->alumno_perfil_user->APM}}
                                {{-- {{$datosAlumno[0]->nombres}} 
                                {{$datosAlumno[0]->ape_paterno}}
                                {{$datosAlumno[0]->ape_materno}} --}}
                            </p>
                        </div>
                        <div class="contenedor-matricula-alumno">
                            <p class="matricula-alumno">matrícula:
                                {{$informacionProcesoElejido[0]->user_proceso->Matricula}}
                                  {{-- {{$datosAlumno[0]->matricula}} --}}
                            </p>
                        </div>
                        <div class="contenedor-carrera-alumno">
                            <p class="carrera-alumno">carrera: {{$informacionProcesoElejido[0]->user_proceso->carrera_user->NombreCarrera}}
   
                                  {{-- {{$datosAlumno[0]->nombre_carrera}} --}}
                            </p>
                        </div>
                        <div class="contenedor-empresa-alumno">
                            <p class="empresa-alumno">empresa: 
                                {{-- {{$datosAlumno[0]->nombre_emp}} --}}
                            </p>
                        </div>
                        <div class="contenedor-empresa-convenio-alumno">
                            <p class="empresa-convenio-alumno">Profesor(a):  {{$informacionProcesoElejido[0]->aa_academico_procesos[0]->aa_academico->Nombre}} {{$informacionProcesoElejido[0]->aa_academico_procesos[0]->aa_academico->APP}} {{$informacionProcesoElejido[0]->aa_academico_procesos[0]->aa_academico->APM}}</p>
                        </div>
                        <div class="contenedor-calificacion-alumno">
                            @if (empty($informacionProcesoElejido[0]->calificaciones_proceso[0]))
                                
                                <p class="calificacion-alumno">calificación: N/A</p> 
                            
                                
                            @else
                                @if (($informacionProcesoElejido[0]->calificaciones_proceso[0]->TipoCalificaciones)==1)

                                <a class="calificacion-alumno" href="{{ route('anteriorCalificacion',[$procesoAlumno  = $informacionProcesoElejido[0]->IdProceso , $identificacdorProceso =  $informacionProcesoElejido[0]->IdTipoProceso ])}}">
                                    calificacion final: {{$informacionProcesoElejido[0]->calificaciones_proceso[0]->cal_final}}   
                                </a>


                                 
                                @elseif(($informacionProcesoElejido[0]->calificaciones_proceso[1]->TipoCalificaciones)==1)

                                <a class="calificacion-alumno" href="{{ route('anteriorCalificacion',[$procesoAlumno  = $informacionProcesoElejido[0]->IdProceso , $identificacdorProceso =  $informacionProcesoElejido[0]->IdTipoProceso ])}}">
                                    calificación final: {{$informacionProcesoElejido[0]->calificaciones_proceso[1]->cal_final}}   
                                </a>
                                @endif

                                
                            
                            @endif

                        </div>
                    </div>
                </div>

        </div>
        {{--  seccion del avance documentacion   --}}
        <section class="contenedor-avance-documentacion-alumno">
            <h2 class="titulo-documentacion-avances"><span >Documentación vinculación</span></h2>
            <div class="contenedor-items-codigo-colores">
                <div class="documentacion-sin-intento">
                    <p class="texto-sin-intento">sin intento</p>
                </div>
                <div class="documentacion-pendiente-revision">
                    <p class="texto-sin-intento">Pendiente Revisión</p>
                </div>
                <div class="documentacion-aceptada">
                    <p class="texto-aceptado">aceptada</p>
                </div>
                <div class="documentacion-rechazada">
                    <p class="texto-rechazado">rechazada</p>
                </div>
            </div>
            <div class="contenedor-items-documentacion">

                <div  class="carga-horaria-alumno" style="background-color:{{$document1}}">
                    <p class="primer-documento">1</p>
                    <p class="nombre-primer-documento">carta presentación</p>
                </div>
                <div class="constancia-vigencia-seguro" style="background-color:{{$document2}}">
                    <p class="segundo-documento">2</p>
                    <p class="nombre-segundo-documento">carta aceptación</p>
                </div>
                <div class="carta-exclusion-responsabilidad" style="background-color:{{$document3}}">
                    <p class="tercer-documento">3</p>
                    <p class="nombre-tercer-documento">cédula registro</p>

                </div>

                <div class="carta-presentacion" style="background-color:{{$document4}}">
                    <p class="cuarto-documento">4</p>
                    <p class="nombre-cuarto-documento">Definición de proyecto</p>
                </div>
                {{-- @dump($document1,$document2,$document3,$document4,$document5) --}}
                <div class="cedula-registro" style="background-color:{{$document5}}">
                    <p class="quinto-documento">5</p>
                    <p class="nombre-quinto-documento">Carta de Liberación</p>
                </div>
                {{-- <div class="carta-aceptacion" style="background-color:{{$document6}}">

                    <p class="sexto-documento">6</p>
                    <p class="nombre-sexto-documento">carta liberación</p>
                </div>
                <div class="definicion-proyecto" style="background-color:{{$document7}}">
                    <p class="septimo-documento">7</p>
                    <p class="nombre-septimo-documento"></p>
                </div>
                <div class="carta-liberacion" style="background-color:{{$document8}}">
                    <p class="octavo-documento">8</p>
                    <p class="nombre-octavo-documento"></p>

                </div> --}}
                {{-- <div class="reporte-evaluacion" style="background-color:{{$document9}}; " style="display: null " >
                    <p class="noveno-documento" >9</p>
                    <p class="nombre-noveno-documento">reporte evaluación</p>
                </div> --}}
            </div>
           
        </section>
    </main>
    
</body>
</html>