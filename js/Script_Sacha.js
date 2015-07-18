$.fx.speeds._default = 1000;

$(document).ready(function() { 

/*СКРИПТЫ ДЛЯ ГЛАВНОЙ*/
<!--Выпадающий блок-->

<!--Вставляем Блок- тень-->
var overlay =  $('<div class="bt-overlay"></div>');
$(overlay).appendTo(".main").hide();

/*Присваевает форме возможность "выпадать"*/
$('.reg').addClass("js-reg");


<!--нажатие на нижнюю кнопку-->
$('.entrance_button--registration').click(function(e) {
	e.preventDefault();
	$('.js-reg').removeClass('hidden_Block').removeClass("reg_top-place").addClass("reg_bottom-place");
	$(overlay).hide().fadeIn(0);
	});

<!--нажатие на верхнюю кнопку-->

$('.button-container_button--registration').click(function() {
	$('.js-reg').removeClass('hidden_Block').removeClass("reg_bottom-place").addClass("reg_top-place");
	$(overlay).hide().fadeIn(0);
	});


<!--Скрытие блока-->
$('.bt-overlay').click(function() {
	$('.js-reg').addClass('hidden_Block');
	$(overlay).fadeOut(500);
});	



/*Скрипт для элемента заменителя кнопки  "прикрепить файл"
*/
 

 // .change() в конце для того чтобы событие сработало при обновлении страницы

	
	
<!-- Плавная прокрутка ---------------------------------------------------------------------------------->
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		
		var target = this.hash,
		$target = $(target);
		
		$('html, body').stop().animate({
		'scrollTop': $target.offset().top
		}, 700, 'swing', function () {
		window.location.hash = target;
		});
	});	
	

/*СКРИПТЫ ДЛЯ СТРАНИЦЫ ПРОФИЛЯ*/

/*Кнопка открытия скрытия доп информации в разделе общая статистикка*/

/*Скрываем блок с деталямми Профиль-Общая статистика*/
$(".statistic_details").hide();



/*Вставлякм кнопку Подробнее/Скрыть в Профиль-Общая статистика*/
$(".statistic_details").before('<!--Кнопка подробней--><div class="statistic_detailsButton btn_1 inline-block icon_append switchText"><span class="inline-block switchText_text">Подробней</span><span class="inline-block switchText_text" >Скрыть</span><i></i></div><!--Количество дней-->');


/*Вставляем кнопку Показать скрыть доп инфу в Профиль - Персональная информация*/
$(".profil-info>div:nth-of-type(4)").after('<!--Кнопка подробней--><p class="switchText profil-info_other-inf" ><span class="inline-block switchText_text">Дополнительная информация</span><span class="inline-block switchText_text">Основная информация</span></p>');

/*Скрываем блоки с деталями Профиль - Персональная информация после конпки переключателя*/
$(".profil-info_other-inf ~ div").hide();

/*Переключение информации в Профиль - Персональная информация*/
$(".profil-info_other-inf").click(function() {
/*Скрывает открывает блок*/
$(".profil-info_other-inf ~ div").toggle( );
});


/*Переключение информации в Профиль-Общая статистика*/
$(".statistic_detailsButton").click(function() {
/*Выделяем кнопку	*/
$(this).toggleClass("statistic_details_active");
/*Скрывает открывает блок*/
$(".statistic_details").toggle();
});

/*Кнопка  с переключающимися надписями 
(Профиль-общая статистика-подробнее)*/

/*Скрываем первую надпись*/
$(".switchText .switchText_text:nth-child(2)").hide();

/*Переключаем надписи при нажатии на кнопку*/
$(".switchText ").click(function() {
$(this).children(".switchText_text").toggle();	
});



/*Вызываем табы*/

	$( "#Tabs1" ).tabs(); 
	
/*Вызываем набор кнопок*/
	$( "#form_Checkboxes" ).buttonset(); 


}); //Конец ready