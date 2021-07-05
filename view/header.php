<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Galería de Arte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
            <li class="nav-item active">
                    <a class="nav-link" href="INDEX.PHP">Inicio <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?c=ObjetoArte">Objetos de Arte</a>
                    <a class="dropdown-item" href="?c=Artista">Artistas</a>
                    <a class="dropdown-item" href="?c=colpermanente">Coleccion Permanente</a>
                    <a class="dropdown-item" href="?c=colprestamo">Coleccion Prestamo</a>
                    <a class="dropdown-item" href="?c=Escultura">Escultura</a>
                    <a class="dropdown-item" href="?c=Estatua">Estatua</a>
                    <a class="dropdown-item" href="?c=Exhibicion">Exhibicion</a>
                    <a class="dropdown-item" href="?c=Pintura">Pintura</a>
                    <a class="dropdown-item" href="?c=Otro">Otro</a>
                    
                    </div>
            </li>
                
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agregar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?c=ObjetoArte&a=FormAgregar">Objetos de Arte</a>
                    <a class="dropdown-item" href="?c=Artista&a=FormAgregar">Artistas</a>
                    <a class="dropdown-item" href="?c=colpermanente&a=FormAgregar">Coleccion Permanente</a>
                    <a class="dropdown-item" href="?c=colprestamo&a=FormAgregar">Coleccion Prestamo</a>
                    <a class="dropdown-item" href="?c=Escultura&a=FormAgregar">Escultura</a>
                    <a class="dropdown-item" href="?c=Estatua&a=FormAgregar">Estatua</a>
                    <a class="dropdown-item" href="?c=Exhibicion&a=FormAgregar">Exhibicion</a>
                    <a class="dropdown-item" href="?c=Pintura&a=FormAgregar">Pintura</a>
                    <a class="dropdown-item" href="?c=Otro&a=FormAgregar">Otro</a>
                    </div>
            </li>
                
            <li class="nav-item">
                    <a class="nav-link" href="?c=bitacora">Bitacora <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="respaldo.php">Recuperacion <span class="sr-only">(current)</span></a>
            </li>

            </ul>


            <div class="btn-group dropleft">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-lg fa-user"></i>
                </button>
                <div class="dropdown-menu login">
                    <a class="dropdown-item" href="#">Salir</a>
                </div>
            </div>
        </div>
    </nav>
</header>