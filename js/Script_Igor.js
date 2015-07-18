$(document).ready(function(e) { 
//ГЛАВНАЯ СТРАНИЦА

////КНОПКА РЕГИСТРАЦИИ

/*Закомментировано Сашей------------------------------------*/

/*$('.button-container_button--registration').click(f_form_reg);

function f_form_reg () {window.open('C:/Users/Игорь/Desktop/Проєкт Баллерт/Profil_page/registration_form.html')};*/


var for_f_1 = false; //переменная отвечает за показ дополнительного поля на главной странице

//// ДАЛЕЕ ЗАПИСАНІ ФУНКЦИИ, КОТОРІЕ ОТВЕЧАЮТ ЗА ПРОВЕРКУ ЧЕКБОКСОВ. ПРИШЛОСЬ СДЕЛАТЬ ПО ФУНКЦИИ НА КАЖДІЙ ЧЕКБОКС =(
//НА ЄТИХ СТРАНИЦАХ НЕ РАБОТАЮТ ФУНКЦИИ С ПЕРЕМЕННЫМИ (Я ПРОВЕРЯЛ ЭТИ ФУНКЦИИ НА СОЗДАННЫХ ЗАНОВО СТРАНИЦАХ, ОНИ РАБОТАЛИ) Я НЕ РАЗОБРАЛСЯ - ПОЧЕМУ ВСЕ ТАК
//ТАК СЧТО ПОКА В КОДЕ НАПИСАНО ПО 6 ФУНКЦИЙ
function prov_chek_1_0 () // функция для перенастройки значений ПЛАН
{
	if ($('#CheckboxGroup1_0').prop("checked")==true)
	{ var b = $('#CheckboxGroup1_0').attr('value')
		return (b);
	}
	else {return (0)}}
function prov_chek_1_1 () // функция для перенастройки значений ДЕЙСТВИЕ
{
	if ($('#CheckboxGroup1_1').prop("checked")==true)
	{ var b = $('#CheckboxGroup1_1').attr('value')
		return (b);
	}
	else {return (0)}}
	
function prov_chek_1_2 () // функция для перенастройки значений ОБУЧЕНИЕ
{
	if ($('#CheckboxGroup1_2').prop("checked")==true)
	{ var b = $('#CheckboxGroup1_2').attr('value')
		return (b);
	}
	else {return (0)}}
	
function prov_chek_1_3 () // функция для перенастройки значений ОТДЫХ
{
	if ($('#CheckboxGroup1_3').prop("checked")==true)
	{ var b = $('#CheckboxGroup1_3').attr('value')
		return (b);
	}
	else {return (0)}}
	
function prov_chek_1_4 () // функция для перенастройки значений УПРАЖНЕНИЯ
{
	if ($('#CheckboxGroup1_4').prop("checked")==true)
	{ var b = $('#CheckboxGroup1_4').attr('value')
		return (b);
	}
	else {return (0)}}
	
function prov_chek_1_5 () // функция для перенастройки значений МЫШЛЕНИЕ
{
	if ($('#CheckboxGroup1_5').prop("checked")==true)
	{ var b = $('#CheckboxGroup1_5').attr('value')
		return (b);
	}
	else {return (0)}}




/*var A_action = $('#CheckboxGroup1_1').attr('value');
var L_learning = $('#CheckboxGroup1_2').attr('value');
var E_exersise = $('#CheckboxGroup1_3').attr('value');
var R_relax = $('#CheckboxGroup1_4').attr('value');
var T_thinking = $('#CheckboxGroup1_5').attr('value');*/



$('#Save1').click(f_1); 
// Клик по кнопке "узнать эффективность" на главной странице



function f_1 () // функция, которая открывает дополнительный блок с диаграмами
{
	

	
	
	var B_plan = prov_chek_1_0 ();
var A_action = prov_chek_1_1 ();
var L_learning = prov_chek_1_2 ();
var E_exersise = prov_chek_1_3 ();
var R_relax = prov_chek_1_4 ();
var T_thinking = prov_chek_1_5 ();
if (for_f_1==false){
	$(this).after('<h3>Вставляем еще один div</h3><article><p>План = ' + B_plan  + ';</p> действие = ' + A_action + ';</p> обучение = ' + L_learning + ';</p> упражнения = ' + E_exersise + ';</p> отдых = ' + R_relax + ';</p> мышление = ' + T_thinking +'</p><div id="placeholder"></div></div></article>'); 
	for_f_1=true;}
}






//////////ФУНКЦИЯ ДЛЯ СТРАНИЦЫ ПРОФИЛЯ//////

//// ДАЛЕЕ ЗАПИСАНІ ФУНКЦИИ, КОТОРІЕ ОТВЕЧАЮТ ЗА ПРОВЕРКУ ЧЕКБОКСОВ. ПРИШЛОСЬ СДЕЛАТЬ ПО ФУНКЦИИ НА КАЖДІЙ ЧЕКБОКС =(
//НА ЄТИХ СТРАНИЦАХ НЕ РАБОТАЮТ ФУНКЦИИ С ПЕРЕМЕННЫМИ (Я ПРОВЕРЯЛ ЭТИ ФУНКЦИИ НА СОЗДАННЫХ ЗАНОВО СТРАНИЦАХ, ОНИ РАБОТАЛИ) Я НЕ РАЗОБРАЛСЯ - ПОЧЕМУ ВСЕ ТАК
//ТАК СЧТО ПОКА В КОДЕ НАПИСАНО ПО 6 ФУНКЦИЙ
function prov_chek_2_0 () // функция для перенастройки значений ПЛАН
{
	if ($('#CheckboxGroup2_0').prop("checked")==true)
	{ var b = $('#CheckboxGroup2_0').attr('value')
		return (parseInt(b,10));
	}
	else {return (0)}}
function prov_chek_2_1 () // функция для перенастройки значений ДЕЙСТВИЕ
{
	if ($('#CheckboxGroup2_1').prop("checked")==true)
	{ var b = $('#CheckboxGroup2_1').attr('value')
		return (parseInt(b,10));
	}
	else {return (0)}}
	
function prov_chek_2_2 () // функция для перенастройки значений ОБУЧЕНИЕ
{
	if ($('#CheckboxGroup2_2').prop("checked")==true)
	{ var b = $('#CheckboxGroup2_2').attr('value')
		return (parseInt(b,10));
	}
	else {return (0)}}
	
function prov_chek_2_3 () // функция для перенастройки значений ОТДЫХ
{
	if ($('#CheckboxGroup2_3').prop("checked")==true)
	{ var b = $('#CheckboxGroup2_3').attr('value')
		return (parseInt(b,10));
	}
	else {return (0)}}
	
function prov_chek_2_4 () // функция для перенастройки значений УПРАЖНЕНИЯ
{
	if ($('#CheckboxGroup2_4').prop("checked")==true)
	{ var b = $('#CheckboxGroup2_4').attr('value')
		return (parseInt(b,10));
	}
	else {return (0)}}
	
function prov_chek_2_5 () // функция для перенастройки значений МЫШЛЕНИЕ
{
	if ($('#CheckboxGroup2_5').prop("checked")==true)
	{ var b = $('#CheckboxGroup2_5').attr('value')
		return (parseInt(b,10));
	}
	else {return (0)}}



$('#Save2').click(f_2)

function f_2 () // функция, которая отарвляет значения на сервер
{var B_plan = prov_chek_2_0 ();
var A_action = prov_chek_2_1 ();
var L_learning = prov_chek_2_2 ();
var E_exersise = prov_chek_2_3 ();
var R_relax = prov_chek_2_4 ();
var T_thinking = prov_chek_2_5 ();
var For_server = B_plan + A_action + L_learning + E_exersise + R_relax +T_thinking;

	$(this).after('<h3>ЭТО ЗНАЧЕНИЕ ОТПРАВЛЯЕМ НА СЕРВЕР</h3><article><p>На сервер отправить число:'+ For_server + '</p><p>Где:</p><p>План = ' + B_plan  + ';</p> действие = ' + A_action + ';</p> обучение = ' + L_learning + ';</p> упражнения = ' + E_exersise + ';</p> отдых = ' + R_relax + ';</p> мышление = ' + T_thinking +'</p></article>'); 

}


//для вівода данных с сервера////////////////////
$('.btn_1 center-block').click(f_3)
function f_3 ()
{
var B_plan = 'Получено с сервера';
var A_action = 'Получено с сервера';
var L_learning = 'Получено с сервера';
var E_exersise = 'Получено с сервера';
var R_relax = 'Получено с сервера';
var T_thinking = 'Получено с сервера';


	$(this).after('<h3>Выводим статистику</h3><article><p>План = ' + B_plan  + ';</p> действие = ' + A_action + ';</p> обучение = ' + L_learning + ';</p> упражнения = ' + E_exersise + ';</p> отдых = ' + R_relax + ';</p> мышление = ' + T_thinking +'</p></article>'); 
	
}

});
