<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?php echo $title; ?></title>

        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link href="/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/custom.css" rel="stylesheet" />

        <script src="/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Mes exercices</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Accueil</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Php</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/exercice1">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="/exercice2">Exercice 2</a></li>
                                <li><a class="dropdown-item" href="/exercice3">Exercice 3</a></li>
                                <li><a class="dropdown-item" href="/exercice4">Exercice 4</a></li>
                                <li><a class="dropdown-item" href="/exercice5">Exercice 5</a></li>
                                <li><a class="dropdown-item" href="/exercice6">Exercice 6</a></li>
                                <li><a class="dropdown-item" href="/exercice7">Exercice 7</a></li>
                                <li><a class="dropdown-item" href="/exercice8">Exercice 8</a></li>
                                <li><a class="dropdown-item" href="/exercice9">Exercice 9</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"><?php echo $title; ?></h1>
                    <p class="lead fw-normal text-white-50 mb-0">Projet développement web</p>
                </div>
            </div>
        </header>
        <section id="content" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    if(!empty($errorMessage)){
                        include('error.php');
                    }
                    ?>
                    <div>
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </section>
        <footer class="mt-auto py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Exercices Php 2021-2022</p></div>
        </footer>
    </body>
</html>
