<? 
// проверяем, есть ли данные и забрасываем их в переменные

// имя
if (isset($_POST['name'])) {$name = $_POST['name'];}
// телефон
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
// дата заезда
if (isset($_POST['start'])) {$start = $_POST['start'];}
// дата выезда
if (isset($_POST['end'])) {$end = $_POST['end'];}
// кол-во человек
if (isset($_POST['room_type'])) {$room_type = $_POST['room_type'];}
// кол-во багажа
if (isset($_POST['guest'])) {$guest = $_POST['guest'];}

// форматируем данные
$name = stripslashes($name);
$name = htmlspecialchars($name);

$phone = stripslashes($phone);
$phone = htmlspecialchars($phone);


$start = stripslashes($start);
$start = htmlspecialchars($start);

$end = stripslashes($end);
$end = htmlspecialchars($end);

$room_type = stripslashes($room_type);
$room_type = htmlspecialchars($room_type);

$guest = stripslashes($guest);
$guest = htmlspecialchars($guest);



$address = "mail@mail.com"; // ВАШ АДРЕС

$subject = "Письмо с Вашего сайта!"; // ТЕМА ПИСЬМА

$message = "С Вашего сайта поступило новое сообщение. Подробная информация ниже.<br>\n<b>Имя</b>: ".$name."\n<br><b>Телефон</b>: ".$phone."\n<br><b>Дата заезда</b>: ".$start."\n<br><b>Дата выезда</b>: ".$end."\n<br><b>Кол-во человек</b>: ".$room_type."\n<br><b>Кол-во багажа</b>: ".$guest."";

$verify = mail($address,$subject,$message,"Content-type:text/html; Charset=utf-8\r\n");


if ($verify == 'true')
{
echo "OK";
}
?>