<?php
$currentPage = basename($_SERVER['PHP_SELF']);  // ex: "index.php"
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php print $header_title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <?php
    function nav_link($page, $label)
    {
        global $currentPage;
        $activeClass = ($currentPage === $page) ? 'active" aria-current="page' : '';
        echo "<li class=\"nav-item\"><a class=\"nav-link $activeClass\" href=\"$page\">$label</a></li>";
    }
    ?>
    <header class="bg-light">
        <div class="header-content">
            <div class="header-left">
                <a href="index.php">
                    <img src="img/4star_logo.png" alt="DragonBall" style="height: 40px;" />
                </a>
            </div>

            <nav class="nav-menu">
                <ul>
                    <?php
                    nav_link("index.php", "Início");
                    nav_link("sobre.php", "Sobre");
                    nav_link("hobbies.php", "Hobbies");
                    nav_link("goku.php", "Goku");
                    nav_link("contato.php", "Contato");
                    ?>
                </ul>
            </nav>

            <div class="header-clock">
                <div id="clock"></div>
                <div id="date"></div>
            </div>
        </div>
    </header>