<!--cabeçalho-->
<?php
$header_title = "Sobre";
include("header.php");
?>

<!-- conteúdo do body -->
<main>
    <section class="container">
        <h2 id="sobre">Sobre a minha pessoa</h2>

        <figure id="luna">
            <img src="img/luna.png" alt="Luna">
            <figcaption>Luna</figcaption>
        </figure>

        <p>
            Ora então, sobre a minha pessoa.. Chamo-me <strong>Sérgio Oliveira</strong>, tenho apenas
            <?php print date('Y') - 1990; ?> e moro algures em <a href="#mapa">Rio Tinto</a> com a minha mulher e a nossa gatinha Luna!
        </p>
        <p>
            Como sou uma pessoa super interessante, tenho claramente muito a dizer sobre mim, como podem ver... Por isso é
            que estou a tentar fazer uma página com o tema de <strong>DragonBall</strong>.
        </p>
        <p>
            Não sabia o que criar, por isso aqui está o resultado da minha indecisão aliada à minha criativa, que está
            claramente assim num nível <strong>FANTÁSTICO!</strong>
        </p>
        <p>
            Ainda não te cansaste deste website incrível?! Então vai até aos <a href="hobbies.php">Hobbies</a>!!
        </p>
        <p>
            Ou então vê o <strong>SonGoku</strong> a mudar de forma aqui -> <a href="goku.php">Goku</a>
        </p>
        <p>
            Ainda aqui estás? Sabias que <strong>Luna</strong> é outro nome para <strong>Lua</strong>?! Nem eu sabia até a minha mulher escolher esse nome para a nossa gata. Eu queria chamá-la <strong>Minerva</strong>, porque desde que a trouxe para casa que ela só me enerva.
        </p>
    </section>

    <!-- Seção do mapa embed -->
    <section id="mapa" class="container my-4">
        <h3>Localização</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21403.39820159623!2d-8.574512295928772!3d41.176799833234966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd246393322f1351%3A0x6a3582dd52141d74!2sRio%20Tinto!5e0!3m2!1spt-PT!2spt!4v1751983738233!5m2!1spt-PT!2spt"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
</main>

<!--rodapé-->
<?php include("footer.php"); ?>