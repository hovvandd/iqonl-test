
// подключили календарь для выбора дат
$(function() {
	$( "#datepicker" ).datepicker({
		dateFormat: 'dd.mm.yy' 
	});
});
// В поле сумма вклада и сумма пополнения можно вводить только числа
$(".depositAmount,.sumAmount").on('input', function(e){
  this.value = this.value.replace(/[^0-9\.\s]/g, '');
});
//переключатель в радиобатонах
$('input[type="radio"]').on('click', function(){

	if($('.yes').attr("checked") == 'checked'){
			$('.yes').removeAttr('checked');
			$('.no').attr('checked', 'checked');
			$('.no').css({"pointer-events": "none"});
			$('.yes').css({"pointer-events": "auto"});
			$('.sumAmount').prop('required', false); //убираю обязательный ввод суммы пополнения
			$('.sumAmount').val('') // очищаем поле
			
	}else{
			$('.no').removeAttr('checked');
			$('.yes').attr('checked', 'checked');
			$('.yes').css({"pointer-events": "none"});
			$('.no').css({"pointer-events": "auto"});
			$('.sumAmount').prop('required', true); // добавляю обязательный ввод суммы пополнения
	}
}); 


// настраиваю бегунки и передаю их значение
// Сумма вклада
$( ".slide1" ).slider({
    animate: "slow",
    range: "min",
    value: 1000,    
    min: 1000,
    max: 3000000,
        slide : function(event, ui) {    
            $(".depositAmount").val(ui.value);        
        }
});

	// Сумма пополнения вклада
$( ".slide2" ).slider({
    animate: "slow",
    range: "min",
    value: 1000,    
    min: 1000,
    max: 3000000,
        slide : function(event, ui) {    
            $(".sumAmount").val(ui.value);        
        }
});
// AJAX
$("#forma").submit(function (e) { // Устанавливаем событие отправки для формы с id=forma
           e.preventDefault();
            var formData = $(this).serialize(); // Собираем все данные из формы
            $.ajax({
                type: "POST", // Метод отправки
                url: "../../culc.php", // Путь до php файла отправителя
                data: formData,
                success: function (data) { 
                    // Код в этом блоке выполняется при успешной отправке сообщения
                    // alert("Ваше сообщение отправлено!");
                    $('.res').html(data);
                }
            });
        });
