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

// dd($validate->name);

$data = array(
  'quem' => $validate->email,
  'para' => 'guizaomtz@gmail.com',
  'mensagem' => $validate->message,
  'assunto' => $validate->subject
);

if(send($data)){
  flash('message','Email enviado com sucesso','success');
  return redirect("Contato");
}