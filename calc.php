<?php
$dateReg = $_POST['dateReg']; //Дата оформления вклада 
$summn = $_POST['depositAmount']; //Сумма вклада // Сумма на счете за месяц
// Расчитываем количество дней
$date = explode(".", "$dateReg"); // разделяем полученную дату 
$daysn  = (cal_days_in_month(CAL_GREGORIAN, $date[1], $date[2])) - $date[0]; //Количество дней в данном месяце на который приходится вклад
$percent  = 10; //Процентная ставка
$daysy = 365; //Количество дней в году

//проверка, что передает радиобатон
if($_POST['depositRepNo']){
	$summadd == 0;
}else{
	$summadd = $_POST['sumAmount']; //Сумма ежемесячного пополнения
}
	$summn = $summn-1 + ($summn-1 + $summadd)*$daysn*($percent / $daysy);
	echo($summn . ' руб');
// P.S. Все делал по вашей формуле, не понимаю почему такие числа странные
?>
