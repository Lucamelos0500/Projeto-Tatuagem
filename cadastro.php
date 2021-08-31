<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro - Agenda PHP</title>
        <!-- CSS do Bootstrap e CSS customizado -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        include_once "include/menu.php";
        ?>

        <div class="container">
            <div class="row">
                <div class="col"></div>

                <div class="col-lg-4">
                    <h3>Cadastro de Contato</h3>

                    <form>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Informe seu Nome">
                        </div>

                        <div class="form-group">
                            <label for="contato">contato</label>
                            <input type="text" class="form-control" id="contato" placeholder="Informe seu contato">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Informe uma Senha">
                        </div>

                        <div class="form-group">
                            <label for="cpf">Cpf</label>
                            <input type="text" class="form-control" id="cpf" placeholder="Informe seu cpf">
                        </div>

                        <div class="form-group">
                            <label for="dtNasc">Data De Nascimento</label>
                            <input type="date" class="form-control" id="dtNasc" placeholder="Informe sua Data de Nascimento">
                        </div>



                        <button type="button" class="btn btn-primary" id="cadastrar" onclick="cadastrarContato()">Cadastrar</button>
                        <button type="button" class="btn btn-primary" id="excluir" onclick="excluirContato()">Excluir</button>
                        <button type="button" class="btn btn-primary" id="editar" onclick="editarContato()">Editar</button>
                    </form>

                    <div id="status"></div>
                </div>

                <div class="col"></div>
            </div>
        </div> <!-- fecha /container -->

        <!-- jQuery (online) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- JavaScript customizado -->
        <script src="js/scripts.js"></script>
    </body>
</html>