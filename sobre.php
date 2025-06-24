<!--cabeçalho-->
<?php
$header_title = "Sobre";
include("header.php");
?>

<!-- conteúdo do body -->
 <section class="container">
            <h2 id="sobre">Sobre a minha pessoa</h2>
            <p>
                Ora então, sobre a minha pessoa.. Chamo-me <strong>Sérgio Oliveira</strong>, tenho apenas <?php print date('Y') - 1990; ?> e moro algures em <a href="https://www.google.com/maps?q=Rio+Tinto"
                    target="_blank">Rio Tinto</a> com a minha mulher e a nossa gatinha Luna!
            </p>
            <p>
                Como sou uma pessoa super interessante, tenho claramente muito a dizer sobre mim, como podem ver... Estou a fazer este website porque me foi pedido e aparentemente tenho de ser avaliado nesta UFCD.
            </p>
            <p>
                Não sabia o que criar, por isso aqui está o resultado da minha indecisão aliada à minha criativa, que está claramente assim num nível FANTÁSTICO!
            </p>

            <figure id="luna">
                <img src="img/luna.png" alt="Luna">
                <figcaption>Luna</figcaption>
            </figure>

    </section>

<!--rodapé-->
<?php include("footer.php"); ?>