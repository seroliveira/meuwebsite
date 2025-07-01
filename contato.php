<!--cabeçalho-->
<?php
$header_title = "Hobbies";
include("header.php");
?>

<!-- conteúdo do body -->
<form action="enviar.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required placeholder="Introduza o seu nome">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required placeholder="Introuduza o seu email">

    <label for="assunto">Assunto:</label>
    <input type="text" name="assunto" id="assunto" required placeholder="Assunto do seu contato">

    <label for="mensagem">Mensagem:</label>
    <textarea name="mensagem" id="mensagem" rows="5" cols="" required placeholder="Escreva a sua mensagem"></textarea>

    <button type="submit">Enviar</button>
</form>

<script>
    document.querySelector("form").addEventListener("submit", function (e) {
        e.preventDefault(); //impede envio imediato
        alert("Formulário enviado com sucesso!"); //simulação

        // aqui poderiamos enviar via AJAX, por exemplo
    });
</script>
<!--rodapé-->
<?php include("footer.php"); ?>