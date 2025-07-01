<!--cabeçalho-->
<?php
$header_title = "Processamento de dados";
include("header.php");
?>

<!-- Cabeçalho de agradecimento -->
<div class="container py-5">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Obrigado pelo seu contato!</h1>
            <p class="fs-5">Entrarei em contato o mais rápido possível.</p>
        </div>
    </div>
</div>

<!-- Card com os dados -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title mb-0">Os seus dados</h2>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9"><?= htmlspecialchars($_POST['nome']) ?></dd>

                <dt class="col-sm-3">Cidade</dt>
                <dd class="col-sm-9"><?= htmlspecialchars($_POST['cidade']) ?></dd>

                <dt class="col-sm-3">Data Nascimento</dt>
                <dd class="col-sm-9"><?= htmlspecialchars($_POST['data']) ?></dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9"><?= htmlspecialchars($_POST['email']) ?></dd>

                <dt class="col-sm-3">Cor Favorita</dt>
                <dd class="col-sm-9">
                    <span style="display:inline-block; width:30px; height:30px; background:<?= htmlspecialchars($_POST['cor']) ?>; border:1px solid #ccc;"></span>
                    <?= htmlspecialchars($_POST['cor']) ?>
                </dd>

                <dt class="col-sm-3">Assunto</dt>
                <dd class="col-sm-9"><?= htmlspecialchars($_POST['assunto']) ?></dd>

                <dt class="col-sm-3">Mensagem</dt>
                <dd class="col-sm-9"><?= nl2br(htmlspecialchars($_POST['mensagem'])) ?></dd>
            </dl>
        </div>
    </div>
</div>

</body>

<!--rodapé-->
<?php include("footer.php"); ?>

</html>