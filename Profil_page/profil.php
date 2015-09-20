<?session_start();
if(!$_SESSION['user_id']){
    header('Location:../index.html');
}

//$login = $_GET["login"];
//$password = md5($_POST["password"]);
require_once('../php/dbconnect.php');
$db = new DbConnect;
ini_set('error_reporting', E_ALL);
error_reporting(~E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
if (isset($_POST['plan'])) {
    $plan = $_POST['plan'];
}
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}
if (isset($_POST['learning'])) {
    $learning = $_POST['learning'];
}
if (isset($_POST['exercises'])) {
    $exercises = $_POST['exercises'];
}
if (isset($_POST['relax'])) {
    $relax = $_POST['relax'];
}
if (isset($_POST['thinking'])) {
    $thinking = $_POST['thinking'];
}
$user_id = $_SESSION['user_id'];
$date = date('Y-m-d');
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $query = "INSERT INTO statistics (plan,action,learning,exercises,relaxing,thinking,user_id,created_at)
                VALUES ('$plan','$action','$learning','$exercises','$relax','$thinking','$user_id','$date')";
    $result = $db->runQuery($query);
}


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
             action="../php/exit.php"
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
            <img src="../user_images/<? echo $_SESSION['foto']?>" alt=""/>
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
    <?php 
    $statistic = "SELECT * FROM statistics WHERE user_id = '$user_id'  ";
    $countDays = mysqli_num_rows($db->runQuery($statistic));
    if(!$countDays){
        $countDays = 1;
    }
    $balert[] = ['plan','action','learning','exercises','relaxing','thinking'];
    $name[] = ['План','Действие','Обучение','Физическая нагрузка','Отдых','Позитивное мышление'];
    $statistic = array();
    foreach ($balert as $value) {
        for($i=0;$i<=count($value);$i++) {
            //$key = $value[$i];
            $query = "SELECT SUM($value[$i]) FROM statistics WHERE user_id = '$user_id'";
            $result1 = $db->runQuery($query);
//            if (!$result1) {
//                printf("Error: %s\n", mysqli_error($db->conn));
//                exit();
//            }
            $SUM[] = mysqli_fetch_array($result1);
            //print_r($SUM[1][0]);
            $statistic[] = round(($SUM[$i][0]/$countDays)*100);
        }
        //return $SUM;
    }
    //print_r($name);


    ?>
    <article
    class="all-statistic profil_block--dotted">
    
    
        <!--Сюда помещается статистика-->
        <?php for($i=0;$i<count($name[0]);$i++) {?>
            <div>
                <legend><? echo $name[0][$i]?></legend>
                <div class="statistic_progressBar" >
                    <div class="progressBar_progress"></div>
                    <span class="progressBar_value"><? echo $statistic[$i].'%'?></span>
                </div>
            </div>
        <?php } ?>
        
 
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
      <?
      $date = date("Y-m-d");
      $query1 = "SELECT * FROM statistics WHERE user_id = '$user_id' AND created_at = '$date' ";
      $select = $db->runQuery($query1);
      //var_dump($select);
      $isDate = mysqli_num_rows($select);

      ?>
    <article 
    class="profil_page_news profil_block--dotted" >
        <h2>Новости на сегодня</h2>
        <h3>  Чем вы занимались сегодня</h3>

          
          <div id="form_Checkboxes" class="clearfix">
           <form method="post" name="statistic" action="">
           <input type="checkbox" 
           name="plan"
           value="1" 
           id="CheckboxGroup2_0">
           <label for="CheckboxGroup2_0">
             Планировали 
           </label>
           
           <input type="checkbox"
           name="action"
           value="1"
           id="CheckboxGroup2_1">
           <label for="CheckboxGroup2_1">
             Действовали 
           </label>
           
           <input type="checkbox" 
           name="learning"
           value="1"
           id="CheckboxGroup2_2">
           <label for="CheckboxGroup2_2">
             Обучались 
           </label>
           
           <input type="checkbox"
           name="exercises"
           value="1"
           id="CheckboxGroup2_3">
           <label for="CheckboxGroup2_3">
             Делали упражнения
           </label>
           
           <input type="checkbox" 
           name="relax"
           value="1"
           id="CheckboxGroup2_4">
           <label for="CheckboxGroup2_4">
             Отдыхали
           </label>
           
           <input type="checkbox"
           name="thinking"
           value="1"
           id="CheckboxGroup2_5">
           <label for="CheckboxGroup2_5">
             Думали позитивно
           </label>
         </div>
         
         <input type="submit" 
         id="Save2"
         class="btn_1 center-block"
         value="Сохранить"
         <?echo !($isDate > 0) ? '' :  "disabled"; ?>
         >
        
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