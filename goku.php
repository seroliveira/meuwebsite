<!--cabeçalho-->
<?php
$header_title = "Hobbies";
include("header.php");
?>

<!-- conteúdo do body -->
<section class="container">
    <h2>SonGoku e as suas Transformações</h2>
    <p>Vou incluir todas? Não, mas dá para se entreterem aqui um pouco</p>

    <form action="">
        <fieldset class="goku">
            <legend>Escolhe a transformação:</legend>

            <input type="radio" name="transformacao" id="base" value="base" checked>Base
            <label for="base">
                <img src="img/goku.png" alt="base goku">
            </label>

            <input type="radio" name="transformacao" id="ss" value="ss" checked>SS Goku
            <label for="ss">
                <img src="img/ssgoku.png" alt="ss goku">
            </label>

            <input type="radio" name="transformacao" id="ss2" value="ss2" checked>SS2 Goku
            <label for="ss2">
                <img src="img/ss2goku.png" alt="ss2 goku">
            </label>

            <input type="radio" name="transformacao" id="ss3" value="ss3" checked>SS3 Goku
            <label for="ss3">
                <img src="img/ss3goku.png" alt="ss3 goku">
            </label>

            <input type="radio" name="transformacao" id="ss4" value="ss4" checked>SS4 Goku
            <label for="ss4">
                <img src="img/ss4 goku.png" alt="ss4 goku">
            </label>

            <input type="radio" name="transformacao" id="ssgod" value="ssgod" checked>SSGod Goku
            <label for="ssgod">
                <img src="img/godgoku.png" alt="ssgod goku">
            </label>

            <input type="radio" name="transformacao" id="ssgodblue" value="ssgodblue" checked>SSGod Blue Goku
            <label for="ssgodblue">
                <img src="img/godbluegoku.png" alt="ssgodblue goku">
            </label>

            <input type="radio" name="transformacao" id="mui" value="mui" checked>MUI Goku
            <label for="mui">
                <img src="img/muigoku.png" alt="mui goku">
            </label>
        </fieldset>
    </form>
</section>


<!--rodapé-->
<?php include("footer.php"); ?>