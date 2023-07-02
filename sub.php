<? 
// проверяем, есть ли данные и забрасываем их в переменные
if (isset($_POST['contact_method'])) {$contact_method = $_POST['contact_method'];}

// форматируем данные
$contact_method = stripslashes($contact_method);
$contact_method = htmlspecialchars($contact_method);


$address = "mail@mail.com"; // ВАШ АДРЕС

$subject = "Заказ обратного звонка с Вашего сайта!"; // ТЕМА ПИСЬМА

$message = "С Вашего сайта поступило новое сообщение, заказ обратного звонка. Подробная информация ниже.<br>\n<b>Телефон</b>: ".$contact_method."";

$verify = mail($address,$subject,$message,"Content-type:text/html; Charset=utf-8\r\n");


if ($verify == 'true')
{
echo "OK";
}
?>