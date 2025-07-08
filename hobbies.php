<!--cabeçalho-->
<?php
$header_title = "Hobbies";
include("header.php");
?>

<!-- conteúdo do body -->
<main class="container">
    <h2>Uma tabela? Ah pois é!!</h2>
    <p>O que vou colocar aqui? Não faço ideia. Neste momento só quero ter mais conteúdo no website e decidi implementar algo que demos numa aula sobre tabelas.</p>
    <p>Está bonito? Não! Também, nunca fui bom a design. Mas o conteúdo está cá!</p>
    <table class="hobbies">
        <thead>
            <tr>
                <th colspan="3">Hoobies</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Música</td>
                <td>Rock</td>
                <td></td>
            </tr>
            <tr>
                <td>Gaming</td>
                <td>RPG / J-RPG</td>
                <td></td>
            </tr>
            <tr>
                <td>Programar</td>
                <td>Ainda muito verde</td>
                <td></td>
            </tr>
            <tr>
                <td>Comédia</td>
                <td>Da boa? Não... <a href="#tiktokCarousel">Mas podes julgar</a>!</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <p>Como assim, não chega?</p>
    <p>Querias ver o quê? Uma pirâmide? Estranho mas.. ok!</p>

    <table class="piramide">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
        </tr>
        <tr>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
            <td></td>
            <td><img src="img/cromo.png" alt="cromo"></td>
        </tr>
    </table>

    <p>Não gostas de pirâmides?</p>
    <p>Então pega lá uns vídeos feitos aqui <strong>pour moi</strong> para passar o tempo!</p>

    <div id="tiktokCarousel" class="carousel slide">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@jogadorcoco/video/7489500849727655190" data-video-id="7489500849727655190" style="max-width: 605px;min-width: 325px;">
                    <section> <a target="_blank" title="@jogadorcoco" href="https://www.tiktok.com/@jogadorcoco?refer=embed">@jogadorcoco</a> Dá que pensar 🤔 <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a title="humor" target="_blank" href="https://www.tiktok.com/tag/humor?refer=embed">#humor</a> <a title="pensamentos" target="_blank" href="https://www.tiktok.com/tag/pensamentos?refer=embed">#pensamentos</a> <a title="cerebro" target="_blank" href="https://www.tiktok.com/tag/cerebro?refer=embed">#cerebro</a> <a target="_blank" title="♬ som original - JogadorCocó" href="https://www.tiktok.com/music/som-original-7489500829251406614?refer=embed">♬ som original - JogadorCocó</a> </section>
                </blockquote>
            </div>

            <div class="carousel-item">
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@jogadorcoco/video/7475446210145307926" data-video-id="7475446210145307926" style="max-width: 605px;min-width: 325px;">
                    <section> <a target="_blank" title="@jogadorcoco" href="https://www.tiktok.com/@jogadorcoco?refer=embed">@jogadorcoco</a> Eu quando era puto queria ser tanta coisa que agora não sou nada 🤣 <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a title="comedia" target="_blank" href="https://www.tiktok.com/tag/comedia?refer=embed">#comedia</a> <a title="arqueologo" target="_blank" href="https://www.tiktok.com/tag/arqueologo?refer=embed">#arqueologo</a> <a title="humor" target="_blank" href="https://www.tiktok.com/tag/humor?refer=embed">#humor</a> <a target="_blank" title="♬ som original - JogadorCocó" href="https://www.tiktok.com/music/som-original-7475446229250509570?refer=embed">♬ som original - JogadorCocó</a> </section>
                </blockquote>
            </div>

            <!-- Adicionar mais vídeos aqui -->

        </div>

        <!-- Botões -->
        <!-- Botão Anterior -->
        <button class="carousel-control-prev" type="button" data-bs-target="#tiktokCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <!-- Botão Seguinte -->
        <button class="carousel-control-next" type="button" data-bs-target="#tiktokCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Carrega o script do TikTok apenas uma vez -->
    <script async src="https://www.tiktok.com/embed.js"></script>
</main>


<!--rodapé-->
<?php include("footer.php"); ?>

<script>
    const myCarousel = document.querySelector('#tiktokCarousel');
    const carousel = new bootstrap.Carousel(myCarousel, {
        interval: false,
        ride: false,
        pause: true,
        wrap: true
    });
</script>