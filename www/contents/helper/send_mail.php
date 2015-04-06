<!DOCTYPE HTML>
<html>
<head>
<title>GSgeodet</title>
<meta charset="utf-8">
</head>

<body>
<?php
// Function for basic field validation (present and neither empty nor only white space
function isBlankString($var){
    return (!isset($var) || trim($var)==='');
}

$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$mailAddress = 'info@gsgeodet.cz';

if (!isBlankString($_POST['submit']) && !isBlankString($name) && !isBlankString($from) && !isBlankString($message)) {
   /* Send the email */
   $headers = "From: {$from}\r\n";
   $headers.= 'Content-Type: text/plain;charset=utf-8\r\n';
   $subject = "=?utf-8?b?".base64_encode('Zpráva od uživatele ['.$name.']: '.$subject)."?=";
   $send=mail($mailAddress, $subject, $message, $headers);
   if($send){
     echo "<script>
             alert('Zpráva byla úspěšně odeslána.'); 
             window.location.href = '../../index.php#contactForm';
     </script>";
   } else{
     echo "<script>
             alert('Odeslání zprávy se nezdařilo.'); 
             window.history.go(-1);
     </script>";
   }
}else{
    echo "<script>
             alert('Zpráva nebyla odeslána jelikož nejsou vyplněna všechna povinná pole.'); 
             window.history.go(-1);
     </script>";
}
?>

</body>