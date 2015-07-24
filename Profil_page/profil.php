<?session_start();
//require('../php/dbconnect.php');
//$db = new DbConnect;

//$login = $_GET["login"];
//$password = md5($_POST["password"]);

?>

<!DOCTYpE html>

<html lang="ru" >
<head>

 <meta charset="utf-8">
 <meta http-equiv="refresh" content="300" >
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">

 <title>Ваш профиль</title>

 <!--Стили jQuery-->
 <link href="../css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">

 <link href="../css/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">

 <link href="../css/jquery.ui.button.min.css" rel="stylesheet" type="text/css">

<!--Авторские стили-->
<link  rel= "stylesheet" href="../css/ballert_style.css" />


<!--Скрипты jquery-->

<script src="../js/jquery-1.8.3.min.js" type="text/javascript"></script>

<!--<script src="../jquery.min.js" ></script>-->

<script src="../js/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>

<script src="../js/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>

<script src="../js/jquery.tmpl.min.js" ></script>

<!--Мои скрипты-->
<script src="../js/Script_Sacha.js" ></script>

<script src="../js/DataDays_Sacha.js" ></script>

<!--Скрипты Игоря-->
<script src="../js/Script_Igor.js" ></script>


<!--[if lt IE 9]>
 <script>
  var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
  for (var i = 0; i < e.length; i++) {
    document.createElement(e[i]);
  }
 </script>
 <![endif]-->

</head>
<body  >
  <section class="all profil_page">

    <!--Заголовок приветствие-->
    
    <!--    класс right-button-responsive
    указывает что при средних и
    больших разрешениях экрана 
    кнопка 
    "выйти"
    устанавливается вправо 
    блока хедера-->
    <header
    class="header right-button-responsive">
        Привет,
        
            <?echo "$_SESSION[name]"?> 
   
       
      
      <form name="exit"
             action="exit.php" 
             method="post"> 
             
        <button
        type="submit"
        class="header_button--exit
        center-block btn_2">
            
                <i 
                class="
                header_button_icon-arrow-right">
                </i>
                
                <span>
              Выйти
                </span>
            
        </button>
    </form>
    </header>
    <!--Конец заголовка-->


    <!--  Информация о пользователе-->
    <article class="profil-info" >
    
        <!--    Фото-->
        <div class="profil-info_foto">
            <img src="../user_images/
            <? echo $_SESSION['foto']?>" alt=""/>
        </div>
        
        <!--    Информация-->
        <!--Имя-->
        <h4 class="name"> 
            <?echo 
            "$_SESSION[name]". " " 
            .$_SESSION['lastname']?>
        </h4>
        
        <!--  Когда ззаходил(а) последний раз-->
        <div >
            <span>последний раз заходил(а):</span>
            <span>12.04.2015</span>
        </div>
        
        <!--Город-->
        <div >
            <span>Родной город:</span>
            <span><?echo $_SESSION['city']?></span>
        </div>
        
        <!--Возраст-->
        <div > 
            <span>Ваш возраст:</span>
            <span><?echo $_SESSION['age']?> лет</span>
        </div>
        

        
        <div > 
            <span>Место учебы:</span>
            <span>Академия ШАГ</span>
        </div>
        
        <div > 
            <span>День рождения:</span>
            <span>11 марта</span>
        </div>
        
         <div > 
            <span>Книги:</span>
            <span>Питер Пэн, Шерлок Холмс, 
            Над пропастью во ржи,
             Три товарища, Парфюмер, 
             Темная башня</span>
        </div>
        
        <div > 
            <span>Интересы:</span>
            <span>Игра на гитаре, пианино. 
            Люблю сочинять музыку.
            Участвую в самодеятельность.
            Рок музыка. Дэд метал.
            Сальса. 3Д фильмы.</span>
        </div>
        
        <div > 
            <span>Отношение к алкоголю:</span>
            <span>По праздникам мы неразлучны</span>
        </div>
        
        <div  > 
            <span>Отношение к курению:</span>
            <span>Только кальян</span>
        </div>
      
      
    </article>
    
    <!--Друзья и подписчики-->
    <article 
    class="friends-subscriber profil_block--dotted">
     Друзья и подписчики
    </article>
    
    
    <!--Общая статистика пользователя по Балерт-->
    <article 
    class="all-statistic profil_block--dotted">
    
    
        <!--Сюда помещается статистика-->
        
 
        <div 
        class="statistic_details" 
        >
        С 
            <time 
            class="js-details_DayBegins
            inline-block">
            </time> 
            
            по 
            
            <time 
            class="js-details_DayCompletion 
            inline-block" >
            </time>
            .
            Количество дней про которые 
             Вы вносили информацию -
            
            <span 
            class="js-details_allCountDays 
            allCountDays
            inline-block" >
            </span> 
            
            . 
            Пропущено дней -
            
            <span 
            class="js-details_CountMissDays
            CountMissDays
            inline-block">
            </span> 
            
        </div>
    
    </article>

<!--Блок - Новости на сегодня-->
    <article 
    class="profil_page_news profil_block--dotted" >
        <h2>Новости на сегодня</h2>
        <h3>  Чем вы занимались сегодня</h3>

          
          <div id="form_Checkboxes" class="clearfix">
           
           <input type="checkbox" 
           name="CheckboxGroup2"
           id="CheckboxGroup2_0">
           <label for="CheckboxGroup2_0">
             Планировали 
           </label>
           
           <input type="checkbox"
           name="CheckboxGroup2"
           id="CheckboxGroup2_1">
           <label for="CheckboxGroup2_1">
             Действовали 
           </label>
           
           <input type="checkbox" 
           name="CheckboxGroup2"
           id="CheckboxGroup2_2">
           <label for="CheckboxGroup2_2">
             Обучались 
           </label>
           
           <input type="checkbox"
           name="CheckboxGroup2"
           id="CheckboxGroup2_3">
           <label for="CheckboxGroup2_3">
             Делали упражнения
           </label>
           
           <input type="checkbox" 
           name="CheckboxGroup2"
           id="CheckboxGroup2_4">
           <label for="CheckboxGroup2_4">
             Отдыхали
           </label>
           
           <input type="checkbox"
           name="CheckboxGroup2"
           id="CheckboxGroup2_5">
           <label for="CheckboxGroup2_5">
             Думали позитивно
           </label>
         </div>
         
         <input type="button" 
         id="Save2"
         class="btn_1 center-block"
         value="Сохранить">
         
       </form>
     
     
    </article>
<!--Конец формы ввода про сегодняшний день-->


<!--Вывод статистики-->
    <article 
    class="profil_page_otput-statistic profil_block--dotted"  >
    <h3>Вывод статистики:</h3>
    
    
    <!--Таб для выбора временного диапазона-->  
    <div id="Tabs1" 
    class="otput-statistic_tabs--my-theme tabs--vertical">
        <ul>
            <li><a href="#tabs-1">День</a></li>
            <li><a href="#tabs-2">месяц</a></li>
            <li><a href="#tabs-3">год</a>
            <li><a href="#tabs-4">Ваш промежуток</a>
            </li>
        </ul>
        
        <!--  выбор дня-->       
        <div id="tabs-1" >
            <p>Содержимое 1</p>
            <form id="choice-day"  c>
            
                <input type="submit" 
                class="btn_1 center-block"
                value="Показать">
            </form>
        </div>
        
        
        <!--  выбор месяца--> 
        <div id="tabs-2">
            <p>Содержимое 2</p>
            <form id="choice-month">
            
                <input type="submit" 
                class="btn_1 center-block"
                value="Показать">
            </form>
        </div>
        
        <!--  выбор года-->   
        <div id="tabs-3">
            <p>Содержимое 3</p>
            <form id="choice-year">
            
                <input type="submit" 
                class="btn_1 center-block"
                value="Показать">
            </form>
        </div>
        
        
        <!--  промежуток который укажет пользователь-->   
        <div id="tabs-4">
        
            <p>Содержимое 4</p>
            <form id="choice-user-interval" >
            
            <input type="submit" 
            class="btn_1 center-block"
            value="Показать">
            </form>
        </div>
    
    </div>
    
    <div id="statistic2"></div>
    </article>

</section>
<footer>©2015 ITmandarin</footer>

</body>
</html>