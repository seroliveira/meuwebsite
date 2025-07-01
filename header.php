<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $header_title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
    <!-- Conteúdo do header -->
    <header class="container position-relative py-4">
        <!-- Imagem de fundo aplicada via CSS no header -->

        <!-- Foto circular -->
        <img src="img/luna_e_eu.jpg" alt="Foto Luna e Eu" class="circular img-fluid position-absolute end-0 custom-circular-position">

        <!-- Nav Menu -->
        <nav class="nav-menu position-absolute end-0 bottom-0">
            <ul class="nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="hobbies.php" class="nav-link">Hobbies</a></li>
                <li class="nav-item"><a href="goku.php" class="nav-link">Goku</a></li>
                <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>