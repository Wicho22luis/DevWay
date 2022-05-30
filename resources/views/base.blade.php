<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myStyles.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logoDW.svg') }}" alt="" width="30" height="30"
                    class="d-inline-block align-text-top fw-bold">DevWay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/desarrolladores">Desarrolladores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/proyectos">Proyectos</a>
                    </li>
                    
                   
            
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    <div class="btn-group ms-2">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Luis Jasso
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mi Cuenta</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Ayuda</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <ul class="nav justify-content-center">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/agregarCliente">Agregar Cliente</a></li>
        <li class="nav-item"><a class="nav-link" href="/agregarTarea">Agregar Tarea</a></li>
        <li class="nav-item"><a class="nav-link" href="/agregarEvento">Agregar Evento</a></li>
    </ul>

        @yield('contenido')
    
    <section class="">
        <!-- Footer -->
        <footer class="text-center text-dark bg-light">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Planeación de proyectos</span>
                        <button type="button" class="btn btn-outline-primary btn-rounded">
                            Acción prueba
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-primary" href="https://www.instagram.com/luis_jasso22/">Picale aqui</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>