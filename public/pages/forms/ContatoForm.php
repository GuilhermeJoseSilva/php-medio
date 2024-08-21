<?php
require "./bootstap.php";

if(isEmpty()){
  flash('message', 'Preencha todos os campos');
//  return redirect('?page=Contato);
    return redirect("Contato");

}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

dd($validate->name);