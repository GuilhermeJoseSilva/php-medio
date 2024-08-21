<?php
require "./bootstap.php";

$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
  flash('message', 'Preencha todos os campos');
//  return redirect('?page=Contato);
    return redirect("EditUser&id=".$id);

}

$validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e'
]);

 $atualizado = update('users',$validate,['id', $id]);



if($atualizado){
    flash('message','Atualizado com sucesso','success');

    return redirect("EditUser&id=".$id);
}
    flash('message','Erro ao atualizar');
    return redirect("EditUser&id=".$id);