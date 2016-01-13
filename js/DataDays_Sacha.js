// JavaScript Document
$.fx.speeds._default = 1000;

$(document).ready(function() { 


// /*Количество дней*/

// var details_allCountDays = 100 ;

// /*Выводим на страничку*/

// // $('.js-details_allCountDays').text(details_allCountDays);



// /*Количество пропущенных дней*/
// var details_CountMissDays = 5;

// /*Выводим на страничку*/
// // $('.js-details_CountMissDays').text(details_CountMissDays);



// /*Дата начала*/

// var details_DayBegins = "2015-03-02";

// /*Выводим на страничку*/

// // $('.js-details_DayBegins').text(details_DayBegins).attr("datetime",details_DayBegins);

// /*Дата окончания*/
// var details_DayCompletion = "2015-07-01";


// /*Выводим на страничку*/
// $('.js-details_DayCompletion ').text(details_DayCompletion).attr("datetime",details_DayCompletion);



// /*значения параметров*/

// var AllStatisticParametrMass = [50,76,54,80,87,75];


// /*План*/ 
// /*AllStatistic_1parametrSum*/

// /*действие*/ 
// /*AllStatistic_2parametrSum*/


// /*обучение*/ 
// /*AllStatistic_3parametrSum*/


// /*упражнения*/
// /*AllStatistic_4parametrSum*/


// /*отдых*/
// /*AllStatistic_5parametrSum*/


// /*мышление*/ 
// /*AllStatistic_6parametrSum*/



// Делим на количество дней и умножаем на 100%

// var allStatistic = [
// { Name: 'План' , parametrSum: (AllStatisticParametrMass[0] / 
// details_allCountDays) * 100  },


// {Name: 'Действие' , parametrSum: (AllStatisticParametrMass[1] / 
// details_allCountDays) * 100  },


// {Name: 'Обучение' , parametrSum: (AllStatisticParametrMass[2] / 
// details_allCountDays) * 100  },


// {Name: 'Упражнения' , parametrSum: (
// AllStatisticParametrMass[3] / 
// details_allCountDays) * 100  },


// {Name: 'Отдых' , parametrSum:(
// AllStatisticParametrMass[4] / 
// details_allCountDays) * 100  },


// {Name: 'Мышление' , parametrSum: (AllStatisticParametrMass[5] / 
// details_allCountDays) * 100    }
// ];

// /*Округляем и добавляем проценты*/
// $.template('simple', '<legend>${Name}</legend><div class="statistic_progressBar" ><div class="progressBar_progress"></div><span class="progressBar_value">${ Math.round(parametrSum) +"%"}</span></div>');

// /*Вставляем шаблон*/
//  //$.tmpl('simple', allStatistic).prependTo('.all-statistic');
 
//  $('<h4>Общая статистика пользователя по B-alert.</h4>').prependTo('.all-statistic');
 
 
 
/* Совершаем обход сех элементов указывающих проценты*/
 $('.progressBar_value').each(function(index, elem) {
	 
	/* Создаем переменную*/
	 var imgHeight =  $(elem).text();
	 
	 /*Делаем ширину прогресс бара равной процентам*/
	 
	 $(elem).prev().width(imgHeight);
	 });
	 


}); //Конец ready
