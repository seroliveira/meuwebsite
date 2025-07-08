<!--cabeçalho-->
<?php
$header_title = "Contato";
include("header.php");
?>


<!-- conteúdo do body -->
<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-9">
            <form class="contato" action="processar.php" method="post">
                <div class="row">
                    <fieldset class="col-md-6">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" required placeholder="Introduza o seu nome" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" list="cidades" name="cidade" id="cidade" class="form-control" autocomplete="on">
                            <datalist id="cidades">
                                <option value="Porto">Porto</option>
                                <option value="Braga">Braga</option>
                                <option value="Vila Real">Vila Real</option>
                                <option value="Coimbra">Coimbra</option>
                                <option value="Aveiro">Aveiro</option>
                                <option value="Lisboa">Lisboa</option>
                            </datalist>
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label">Data de Nascimento</label>
                            <input type="date" name="data" id="data" class="form-control">
                        </div>
                    </fieldset>

                    <fieldset class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email@exemplo.com" aria-label="Email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="cor" class="form-label">Cor Favorita</label>
                            <input type="color" name="cor" id="cor" class="form-control form-control-color">
                        </div>
                    </fieldset>
                </div>

                <div class="row">
                    <fieldset class="col-md-12">
                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto</label>
                            <input type="text" name="assunto" id="assunto" class="form-control" required placeholder="Assunto do seu contato">
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" class="form-control" rows="5" required placeholder="Escreva a sua mensagem"></textarea>
                        </div>
                    </fieldset>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </form>
        </div>
    </div>
</main>

<!--rodapé-->
<?php include("footer.php"); ?>