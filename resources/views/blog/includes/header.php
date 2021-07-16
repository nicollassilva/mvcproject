<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= isset($pageTitle) ? $pageTitle : 'Página' ?> - Blog MVC</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css?t=<?= time() ?>">
    <link rel="stylesheet" href="/css/appMedia.css?t=<?= time() ?>">
</head>

<body>
    <header>
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="link-secondary" href="#">Inscrever</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="#">Blog MVC</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="link-secondary" href="#" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                                <title>Pesquisa</title>
                                <circle cx="10.5" cy="10.5" r="7.5" />
                                <path d="M21 21l-5.2-5.2" />
                            </svg>
                        </a>
                        <a class="btn btn-sm btn-outline-secondary" href="<?= route('users.users.create') ?>">Cadastrar</a>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-center">
                    <a class="p-2 link-secondary" href="#">Página Inicial</a>
                    <a class="p-2 link-secondary" href="#">Sobre nós</a>
                    <a class="p-2 link-secondary" href="#">Equipe</a>
                    <a class="p-2 link-secondary" href="#">Contate-nos</a>
                </nav>
            </div>
        </div>
    </header>