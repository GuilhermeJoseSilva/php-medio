<a href="?page=CreateUser">Cadastrar User</a>

<h2>Página inicial</h2>

<?= get('message')?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            $users = all('users');
            foreach ($users as $user):
        ?>
        <tr>
            <td><?= $user->id;?></td>
            <td><?= $user->name;?></td>
            <td><?= $user->email;?></td>
            <td>
                <a class="btn btn-success" href="?page=EditUser&id=<?=$user->id;?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger" href="?page=DeleteUser&id=<?=$user->id;?>">Deletar</a>
            </td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>