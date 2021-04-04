<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='../view/styles/style.css'>

    <title>Hello, world!</title>
</head>

<body>

    <header>
        
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Torneo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Municipios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../municipios/municipioscreate.php">Agregar municipios</a></li>
                                    <li><a class="dropdown-item" href="../municipios/municipiosindex.php">Ver municipios</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Equipos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../equipos/equiposcreate.php">Agregar equipos</a></li>
                                    <li><a class="dropdown-item" href="../equipos/equiposindex.php">Ver equipos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jugadores
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../jugadores/jugadorescreate.php">Agregar jugador</a></li>
                                    <li><a class="dropdown-item" href="../jugadores/jugadoresindex.php">Ver jugadores</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Posiciones
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../posiciones/posicionescreate.php">Agregar posiciones</a></li>
                                    <li><a class="dropdown-item" href="../posiciones/posicionesindex.php">Ver posiciones</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div style="color: wheat; margin-right: 40px;">
                        <?= $_SESSION["usuario"] ?>
                    </div>
                    <a class="nav-link btn btn-success" href="../cerrar.php" >Cerrar sesion</a>
                    
                </div>
                
                
            </nav>
        

    </header>

    