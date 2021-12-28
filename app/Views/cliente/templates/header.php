<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pizzaria Piratas do Karibe</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />
    <script src="assests/js/bootstrap.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/pricing.css" rel="stylesheet" />
</head>

<body>
    <h1><?= esc($title) ?></h1>
    <header>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
            <symbol id="check" viewBox="0 0 16 16">
                <title>Check</title>
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </symbol>
        </svg>

        <div class="container py-3">
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="assets/brand/logo_v1.png" alt="" width="150" height="75" class="d-inline-block align-text-top me-3 border-end border-bottom rounded" />
                    <span class="fs-4">Piratas do Karibe</span>
                </a>
                <!-- menu -->
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href='planos'>Planos</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="empresa">Empresa</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="cadastro">Cadastro</a>
                    <a class="py-2 text-dark text-decoration-none" href="#">Login</a>
                </nav>
                <!-- menu -->
            </div>
        </div>
    </header>