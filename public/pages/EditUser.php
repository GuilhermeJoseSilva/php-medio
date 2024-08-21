<h2>Editar</h2>

<?php $user = find('users','id',$_GET['id']);?>

<?= get('message'); ?>
<form action="pages/forms/UpdateUserForm.php" method="post" role="form">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="Informe seu Nome" value="<?= $user->name?>">
    </div>

    <input type="hidden" name="id" value="<?=$user->id?>">

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" placeholder="Informe seu Sobrenome" value="<?= $user->sobrenome?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Informe seu E-mail" value="<?= $user->email?>">
    </div>



    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>