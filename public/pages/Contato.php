
<h2>Contato</h2>

<?= get('message'); ?>
<form action="pages/forms/ContatoForm.php" method="POST">
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" placeholder="Digite seu nome" class="form-control">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" name="email" class="form-control" placeholder="Digite seu E-mail">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" name="subject" placeholder="Digite o Assunto" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>