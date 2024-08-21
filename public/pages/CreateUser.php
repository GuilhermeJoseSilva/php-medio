<h2>Cadastro</h2>

<?= get('message'); ?>
<form action="pages/forms/CreateUserForm.php" method="post" role="form">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="Informe seu Nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" placeholder="Informe seu Sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Informe seu E-mail">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" name="password" class="form-control" placeholder="Informe sua Senha">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>