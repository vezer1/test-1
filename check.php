<?php
 //print_r($_POST);
 $email = $_POST['email'];
 $message = $_POST['message'];
 $error='';
 if(trim($email) == '')
   $error='Email для обратной связи не указан';
 else if (trim($message) == '')
   $error='Введите сообщение';
 else if (strlen($message) < 3)
   $error='Сообщение должно содержать более 3 символов';
 if ($error !=''){
   echo $error;
   exit;
 }
 $subject ="=?utf-8?B?".base64_encode("Обращение к Аптека Мир")."?=";
 $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
 mail('kakosha237@gmail.com', $subject, $message, $headers);
 header('Location: /help.php');
?>
