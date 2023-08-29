<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/styleAsesorAcademico/plantillaMenu.css"rel="stylesheet" >
    <link href="/css/styleAsesorAcademico/PlantillaMenuMovil.css" rel="stylesheet" media="screen and (max-width:600px)">

    <title>Document</title>
</head>
<body>

    <header class="header">
        @yield('headerStart')

        <div id="opacity-id" class="opacity-container"></div>
            <div class="contenido-nav" >

                <div id="sidemenu" class="menu-collapsed">
                        <!-- header -->

                        <div id="header">
                        <!-- <span>vida MMR</span> -->
                            <div id="title">
                                {{-- <a href="" id="link-logo"> --}}
                                    <img src="/icons/logo-Upqroo.png" type=""
                                     alt="logo Universidad politecnica de Quintana Roo" class="logo-upqroo">
                                {{-- </a> --}}
                            </div>
                            <div id="menu-btn">

                                <img src="/icons/menu.png" alt="imagen de menu">

                            </div>
                        </div>
                    <!-- profile -->
                        <div id="profile">
                            <a href=""  title="PERFIL">
                                <div id="photo"><img src="/icons/usuario-ESTADIAS.png" alt=""></div>
                            </a>
                            <a href="">
                                <div id="name"><span>{{ auth()->user()->name }}</span></div>
                            </a>
                        </div>
                    <!-- menu items -->
                    <div class= "cont-items-menu">
                        <div class="item separator">  </div>

                        <div id="menu-items">

                            {{-- aqui es procesos anteriores --}}

{{-- <div class="item">
    <a href="{{ route('homeAcademico', 1)}}"  title="Procesos Anteriores" >
        <div class="icon"><img src="/icons/anteriorPro.png" alt="Procesos Anteriores"></div>
        <div class="title"><span>Procesos Anteriores</span></div>
    </a>
</div> --}}
                        <div id="menu-items">
                            <!-- separador de los items -->
                        
                            <div class="item">
                                {{-- 
                                --}}
                                <ul class="menu-estancia1">
                                    <div class="icon"><img src="/icons/anteriorPro.png" alt=""></div>
                                    <div class="title"><span>Procesos Anteriores</span>
                                    
                                    </div>
                                    <li class="menu-item-estancia1">
                                        <a href="{{ route('inicioProcesosAnteriores', 1)}}"  title="estancia 1">
                                            <div class="icon"><img src="/icons/antProceso.png" alt=""></div>
                                            <div class="title"><span>Estancia 1</span>
                                            
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item-estancia1">
                                        <a href="{{ route('inicioProcesosAnteriores', 2)}}" title="ESTANCIA 2">
                                            <div class="icon"><img src="/icons/antProceso.png" alt=""></div>
                                            <div class="title"><span>Estancia 2</span>
                                            
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item-estancia1">
                                        <a href="{{ route('inicioProcesosAnteriores', 3)}}"  title="ESTADIA">
                                            <div class="icon"><img src="/icons/antProceso.png" alt=""></div>
                                            <div class="title"><span>Estadías</span>
                                            
                                            </div>
                                        </a>
                                    </li>
                                    <li  class="menu-item-estancia1">
                                        <a href="{{ route('inicioProcesosAnteriores', 4)}}"  title="Servicio Social">
                                            <div class="icon"><img src="/icons/antProceso.png" alt=""></div>
                                            <div class="title"><span>Servicio Social</span>
                                            
                                            </div>
                                        </a>
                                    </li>
                                    <li  class="menu-item-estancia1">
                                        <a href="{{ route('inicioProcesosAnteriores', 5)}}"  title="ESTADIAS NACIONALES">
                                            <div class="icon"><img src="/icons/antProceso.png" alt="ESTADIAS NACIONALES"></div>
                                            <div class="title"><span>Estadías Nacionales</span>
                                            
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <div class="item separator">  </div>
{{-- aqui termina procesos anteriores --}}

                            <!-- separador de los items -->
                            {{-- <div class="item">
                                <a href="{{ route('inicioProcesosAnteriores')}}"  title="Procesos Anteriores" >
                                    <div class="icon"><img src="/icons/anteriorPro.png" alt="Procesos Anteriores"></div>
                                    <div class="title"><span>Procesos Anteriores</span></div>
                                </a>
                            </div> --}}
                            {{-- <div class="item separator">  </div> --}}
                            
                            <div id="menu-items">
                                <div class="item">
                                    {{-- 
                                       --}}
                                    <ul class="menu-estancia1">
                                        <div class="icon"><img src="/icons/aulas.png" alt=""></div>
                                        <div class="title"><span>Aulas Abiertas</span>
                                        </div>
                                        <li class="menu-item-estancia1">
                                            <a href="{{ route('AsignarMaestroAulaCoordinacion')}}" title="Abrir Aula">
                                                <div class="icon"><img src="/icons/abrirAula.png" alt=""></div>
                                                <div class="title"><span>Abrir Aulas Del Período</span>
                                                
                                                </div>
                                            </a>
                                        </li>
                                        <li  class="menu-item-estancia1">
                                            <a href="{{ route('aulasDisponibles')}}"  title="Aulas Disponible">
                                                <div class="icon"><img src="/icons/aulasAbiertas.png" alt=""></div>
                                                <div class="title"><span>Aulas Disponibles</span>
                                                
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="item separator">  </div>
                            
                            <div id="menu-items">
                                <div class="item">
                                    {{-- 
                                       --}}
                                    <ul class="menu-estancia1">
                                        <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                        <div class="title"><span>Estancia1</span>
                                        
                                        </div>
                                        <li class="menu-item-estancia1">
                                            <a href="{{ route('progresoCoordinacion', $identificadorProceso = 1)}}" title="Progreso Vinculacion">
                                                <div class="icon"><img src="/icons/progresoDoc.png" alt=""></div>
                                                <div class="title"><span>Progreso Vinculación</span>
                                                
                                                </div>
                                            </a>
                                        </li>
                                        {{-- <li  class="menu-item-estancia1">
                                            <a href="{{ route('homeAcademico')}}"  title="proceso">
                                                <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                                <div class="title"><span>Calificaciones</span>
                                                
                                                </div>
                                            </a>
                                        </li> --}}
                                    </ul>

                                </div>
                            </div>

                            <div class="item separator">  </div>

                            <div id="menu-items">
                                <!-- separador de los items -->
                               
                                <div class="item">
                                    {{-- 
                                       --}}
                                    <ul class="menu-estancia1">
                                        <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                        <div class="title"><span>Estancia2</span>
                                        
                                        </div>
                                        <li class="menu-item-estancia1">
                                            <a href="{{ route('progresoCoordinacion', $identificadorProceso = 2)}}"  title="Progreso Vinculacion">
                                                <div class="icon"><img src="/icons/progresoDoc.png" alt=""></div>
                                                <div class="title"><span>Progreso Vinculación</span>
                                                
                                                </div>
                                            </a>
                                        </li>
                                        {{-- <li  class="menu-item-estancia1">
                                            <a href="{{ route('homeAcademico')}}"  title="proceso">
                                                <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                                <div class="title"><span>Calificaciones</span>
                                                
                                                </div>
                                            </a>
                                        </li> --}}
                                    </ul>

                                </div>
                            </div>
                            <div class="item separator">  </div>
                            
                            <div id="menu-items">
                                <!-- separador de los items -->
                               
                                <div class="item">
                                    {{-- 
                                       --}}
                                    <ul class="menu-estancia1">
                                        <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                        <div class="title"><span>Estadías</span>
                                        
                                        </div>
                                        <li class="menu-item-estancia1">
                                            <a href="{{ route('progresoCoordinacion', $identificadorProceso = 3)}}"  title="Progreso Vinculacion">
                                                <div class="icon"><img src="/icons/progresoDoc.png" alt=""></div>
                                                <div class="title"><span>Progreso Vinculación</span>
                                                
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="item separator">  </div>
                            
                            <div id="menu-items">
                                <!-- separador de los items -->
                               
                                <div class="item">
                                    {{-- 
                                       --}}
                                    <ul class="menu-estancia1">
                                        <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                        <div class="title"><span>Servicio Social</span>
                                        
                                        </div>
                                        <li class="menu-item-estancia1">
                                            <a href="{{ route('progresoCoordinacion', $identificadorProceso = 4)}}"  title="Progreso Vinculacion">
                                                <div class="icon"><img src="/icons/progresoDoc.png" alt=""></div>
                                                <div class="title"><span>Progreso Vinculación</span>
                                                
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                            <div class="item separator">  </div>

                            <div id="menu-items">
                                <!-- separador de los items -->
                               
                                <div class="item">
                                    {{-- 
                                       --}}
                                    <ul class="menu-estancia1">
                                        <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                        <div class="title"><span>Estadías Nacionales</span>
                                        
                                        </div>
                                        <li class="menu-item-estancia1">
                                            <a href="{{ route('progresoCoordinacion', $identificadorProceso = 5)}}"  title="Progreso Vinculacion">
                                                <div class="icon"><img src="/icons/progresoDoc.png" alt=""></div>
                                                <div class="title"><span>Progreso Vinculación</span>
                                                
                                                </div>
                                            </a>
                                        </li>
                                        {{-- <li  class="menu-item-estancia1">
                                            <a href="{{ route('homeAcademico')}}"  title="proceso">
                                                <div class="icon"><img src="/icons/alumno-ADMINISTRATIVO.png" alt=""></div>
                                                <div class="title"><span>Calificaciones</span>
                                                
                                                </div>
                                            </a>
                                        </li> --}}

                                    </ul>

                                </div>
                            </div>
                            <div class="item separator">  </div>
                            {{-- <div id="menu-items"> --}}
                                <!-- separador de los items -->
{{-- 
                                    <div class="item">
                                    <a href="{{ route('cedulas')}}"  title="ESTADIAS">
                                        <div class="icon"><img src="/icons/CEDULA-PROF.png" alt=""></div>
                                        <div class="title"><span>cedulas</span></div>
                                    </a>
                                    </div>
                                    
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item separator">  </div>

                                <div id="menu-items">
                                    <div class="item">
                                        <a href="{{ route('calificaciones')}}"  title="EMPRESAS">
                                            <div class="icon"><img src="/icons/CALIFICAR-ALUMNO.png" alt=""></div>
                                            <div class="title"><span>calificar</span></div>
                                        </a>
                                    </div>
                                </div> --}}
                    </div>

                        
                    <!-- cerrar sesion -->

                    <!-- final -->
                    
            </div>
            <div class="closed-profile">
                <div class="closed-item">
                    <a href="{{ route('login.destroy') }}" >
                        <div class="closed-icon" ><img src="/icons/power-on.png" alt=""></div>
                        <div class="closed-title"><span>Cerrar sesion</span></div>
                    </a>
                </div>
            </div>

    <!-- final del header -->

    <script>
        const btn = document.querySelector('#menu-btn')
        const menu = document.querySelector('#sidemenu')
        const opacidadBody = document.querySelector('#opacity-id')

        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        });
        opacidadBody.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
    </header>
    @yield('headerEnd')



    
    {{-- <main class="main-container">
        <a href="">
            <div class="main-secundari">Contenido </div>
        </a>
    </main> 
</body>
</html> --}}