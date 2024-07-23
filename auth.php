<?php 
    require_once("templates/header.php");
?>
<div id="main-container" class="main-container">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Sua senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class=" card-btn">Entrar</button>
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar conta</h2>
                <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobre nome</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite sobre nome">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmar senha</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirme sua senha">
                    </div>
                    <button type="submit" class="    card-btn">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    require_once("templates/footer.php");
?>