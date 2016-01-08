$.fx.speeds._default = 1000;

$(document).ready(function() { 

/*СКРИПТЫ ДЛЯ ГЛАВНОЙ*/
<!--Выпадающий блок-->

<!--Вставляем Блок- тень-->
// var overlay =  $('<div class="bt-overlay"></div>');
// $(overlay).appendTo(".main").hide();

/*Присваевает форме возможность "выпадать"*/
$('.reg').addClass("js-reg");


<!--нажатие на нижнюю кнопку-->
// $('.entrance_button--registration').click(function(e) {
// 	e.preventDefault();
// 	$('.js-reg').removeClass('hidden_Block').removeClass("reg_top-place").addClass("reg_bottom-place");
// 	$(overlay).hide().fadeIn(0);
// 	});

<!--нажатие на верхнюю кнопку-->

// $('.button-container_button--registration').click(function() {
// 	$('.js-reg').removeClass('hidden_Block').removeClass("reg_bottom-place").addClass("reg_top-place");
// 	$(overlay).hide().fadeIn(0);
// 	});


<!--Скрытие блока-->
// $('.bt-overlay').click(function() {
// 	$('.js-reg').addClass('hidden_Block');
// 	$(overlay).fadeOut(500);
// });	



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



/*Вставлякм кнопку Подробнее/Скрыть в Профиль-Общая статистика*/
// $(".statistic_details").before('<!--Кнопка подробней--><div class="statistic_detailsButton btn_1 inline-block icon_append switchText"><span class="inline-block switchText_text">Подробней</span><span class="inline-block switchText_text" >Скрыть</span><i class="icon-min"></i></div><!--Количество дней-->');


/*Вставляем кнопки "Показать скрыть доп инфу" и "Редактировать" в Профиль - Персональная информация*/
// $(".profil-info").append('<!--Кнопка подробней--><p class="switchText profil-info_other-inf btn_1 inline-block icon_append" ><span class="inline-block switchText_text">Дополнительно</span><span class="inline-block switchText_text">Основное</span><i class="icon-min" ></i></p><!--Кнопка редактировать инфу--><p class="profil-info_edit btn_1 inline-block icon_append" ><span >Редактировать</span></p>');

/*Скрываем блоки с деталями Профиль - Персональная информация после конпки переключателя*/
/*Скрываем блок с деталямми Профиль-Общая статистика*/
// $(".statistic_details, .profil-info>div:nth-child(5) ~ div").hide();


/*Переключает классы при нажатии на кнопки*/
// $(".profil-info_other-inf, .statistic_detailsButton").click(function() {
/*Выделяем кнопку	*/
// $(this).toggleClass("btn_active");
// });

/*Переключение информации в Профиль - Персональная информация*/
// $(".profil-info_other-inf").click(function() {
/*Скрывает открывает блок*/
// $(".profil-info>div:nth-child(5) ~ div").toggle( );
// });


/*Переключение информации в Профиль-Общая статистика*/
// $(".statistic_detailsButton").click(function() {
/*Скрывает открывает блок*/
// $(".statistic_details").toggle();
// });


/*Кнопка  с переключающимися надписями 
(Профиль-общая статистика-подробнее, 
Профиль-Персональная информация,)
*/

/*Скрываем первую надпись*/
// $(".switchText .switchText_text:nth-child(2)").hide();

/*Переключаем надписи при нажатии на кнопку*/
// $(".switchText ").click(function() {
// $(this).children(".switchText_text").toggle();	
// });



/*Вызываем табы*/

	// $( "#Tabs1" ).tabs(); 
	
/*Вызываем набор кнопок*/
	// $( "#form_Checkboxes" ).buttonset(); 

/*Вставляет в чекбоксы блоки для изображений*/
    // $( "#form_Checkboxes label" ).prepend('<i class="icon-min" ></i>');

    var $start = $('#start'),
	$end = $('#end');

	$start.datepicker({
		onSelect: function (fd, date) {
			$end.data('datepicker')
				.update('minDate', date)
		}
	})

	$end.datepicker({
		onSelect: function (fd, date) {
			$start.data('datepicker')
				.update('maxDate', date)
		}
	})

}); //Конец ready