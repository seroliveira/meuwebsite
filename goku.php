<!--cabeçalho-->
<?php
$header_title = "Goku";
include("header.php");
?>

<!-- conteúdo do body -->
<main class="container">
    <h2>SonGoku e as suas Transformações</h2>
    <p>Vou incluir todas? Não, mas dá para se entreterem aqui um pouco</p>
    <form action="">
        <fieldset class="goku">
            <legend>Escolhe a transformação:</legend>

            <!-- Radios + Labels -->
            <input type="radio" name="transformacao" id="base" value="base" checked>
            <label for="base">Base</label>

            <input type="radio" name="transformacao" id="ss" value="ss">
            <label for="ss">SS Goku</label>

            <input type="radio" name="transformacao" id="ss2" value="ss2">
            <label for="ss2">SS2 Goku</label>

            <input type="radio" name="transformacao" id="ss3" value="ss3">
            <label for="ss3">SS3 Goku</label>

            <input type="radio" name="transformacao" id="ss4" value="ss4">
            <label for="ss4">SS4 Goku</label>

            <input type="radio" name="transformacao" id="ssgod" value="ssgod">
            <label for="ssgod">SSGod</label>

            <input type="radio" name="transformacao" id="ssgodblue" value="ssgodblue">
            <label for="ssgodblue">SSGod Blue</label>

            <input type="radio" name="transformacao" id="mui" value="mui">
            <label for="mui">MUI</label>

            <!-- Área da imagem abaixo -->
            <div class="imagem">
                <img id="img-base" src="img/goku.png" alt="base goku">
                <img id="img-ss" src="img/ssgoku.png" alt="ss goku">
                <img id="img-ss2" src="img/ss2goku.png" alt="ss2 goku">
                <img id="img-ss3" src="img/ss3goku.png" alt="ss3 goku">
                <img id="img-ss4" src="img/ss4 goku.png" alt="ss4 goku">
                <img id="img-ssgod" src="img/godgoku.png" alt="ssgod goku">
                <img id="img-ssgodblue" src="img/godbluegoku.png" alt="ssgodblue goku">
                <img id="img-mui" src="img/muigoku.png" alt="mui goku">
            </div>
        </fieldset>
    </form>
</main>

<!--rodapé-->
<?php include("footer.php"); ?>