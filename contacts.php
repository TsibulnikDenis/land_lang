<?
if (array_key_exists('inputEmail', $_POST)) {
   $to = 'irina.tzybulnik@yandex.ru';
    $from = 'info@ieltskrasnodar.ru';
   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['inputName']."
   \nФамилия: ".$_POST['inputFamily']."
   \nIP: ".$_SERVER['REMOTE_ADDR']."
   \nТелефон: ".$_POST['inputPhone']."
   \nEmail: ".$_POST['inputEmail'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "From: Заявка с сайта <info@ieltskrasnodar.ru>\r\n"; 
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   if(mail($to, $subject, $message, $headers)){
} else { 
    echo "some error happen";   
   };
   echo $_POST['inputName'];
}
?>