<?php
require "./bootstap.php";

if(isEmpty()){
  flash('message', 'Preencha todos os campos');
//  return redirect('?page=Contato);
    return redirect("CreateUser");

}

$validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's'
]);

 $cadastrado = create('users',$validate);

//  dd($cadastrado);

if($cadastrado){
    flash('message','Cadastrado com sucesso','success');

    return redirect("CreateUser");
}
    flash('message','Erro ao cadastrar');
    return redirect("CreateUser");