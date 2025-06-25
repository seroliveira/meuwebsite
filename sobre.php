<!--cabeçalho-->
<?php
$header_title = "Sobre";
include("header.php");
?>

<!-- conteúdo do body -->
<section class="container">
    <h2 id="sobre">Sobre a minha pessoa</h2>

    <figure id="luna">
        <img src="img/luna.png" alt="Luna">
        <figcaption>Luna</figcaption>
    </figure>

    <p>
        Ora então, sobre a minha pessoa.. Chamo-me <strong>Sérgio Oliveira</strong>, tenho apenas
        <?php print date('Y') - 1990; ?> e moro algures em <a href="https://www.google.com/maps?q=Rio+Tinto"
            target="_blank">Rio Tinto</a> com a minha mulher e a nossa gatinha Luna!
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
        Ainda não te cansaste deste website incrível?! Então vai até aos <a href="hobbies.php">Hobbies</a> ou então vê o SonGoku a mudar de forma aqui -> <a href="goku.php">Goku</a>
    </p>
    <p>
        Ainda aqui estás? Sabias que Luna é outro nome para Lua?! Nem eu sabia até a minha mulher escolher esse nome para a nossa gata. Eu queria chamá-la Minerva, porque desde que a trouxe para casa que ela só me enerva.
    </p>
</section>

<!--rodapé-->
<?php include("footer.php"); ?>