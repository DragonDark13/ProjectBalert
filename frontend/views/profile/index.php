
<section class="all profil_page container">

    <!--Заголовок приветствие-->

    <!--    класс right-button-responsive
    указывает что при средних и
    больших разрешениях экрана 
    кнопка 
    "выйти"
    устанавливается вправо 
    блока хедера-->
    <header
        class="header">

        <div class="row" >

            <!--      Блок с текстом-->
            <div class="header_header-text col-lg-9 col-md-6 col-sm-6  col-xs-12" >

                <h1>BAlert</h1>

                <!--  Привет,
		        
		            <?echo "Name"?>  -->

            </div>

            <!--      Блок с кнопками-->
            <div class="header_button-container col-lg-3 col-md-6 col-sm-6  col-xs-12">

                <form name="exit"
                      action="../php/exit.php"
                      method="post">

                    <button
                        type="submit"
                        class="header_button--exit btn_1">Выйти
                        <i class="fa fa-sign-out"></i>
                    </button>
                </form>

            </div>

        </div>
    </header>
    <!--Конец заголовка-->


    <!--  Информация о пользователе-->
    <div class="wrapper row">
        <div class="sidebarleft col-lg-4 col-md-4 col-sm-4  col-xs-12">
            <article class="profil-info" >

                <!--    Фото-->
                <div class="profil-info_foto col-lg-6 col-md-6 col-sm-12  col-xs-12">
                    <img src="../user_images/<? echo 'f'?>" alt=""/>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12  col-xs-12">

                    <!--    Информация-->
                    <!--Имя-->
                    <h4 class="name">
                        <?echo
                            "Ros". " "
                            . "Naz"?>

                        <form>
                            <button
                                type="submit"
                                class=" btn_1">
                                <i class="fa fa-cog" ></i>
                                Редактировать
                            </button>
                        </form>

                    </h4>

                </div>



                <h4 class="login">
                    <?echo
                        1;?>
                </h4>

                <!--  Когда ззаходил(а) последний раз-->
                <div >
                    <span>последний раз заходил(а):</span>
                    <span>12.04.2015</span>
                </div>

                <!--Город-->
                <div >
                    <span>Родной город:</span>
                    <span><?echo 'Kharkov'?></span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <!--Возраст-->
                <div >
                    <span>Ваш возраст:</span>
                    <span><?echo 19 ?> лет</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>



                <div >
                    <span>Место учебы:</span>
                    <span>Академия ШАГ</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <div >
                    <span>День рождения:</span>
                    <span>11 марта</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <div >
                    <span>Книги:</span>
                    <span>Питер Пэн, Шерлок Холмс, 
                    Над пропастью во ржи,
                    Три товарища, Парфюмер, 
                    Темная башня</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <div >
                    <span>Интересы:</span>
                    <span>Игра на гитаре, пианино. 
                    Люблю сочинять музыку.
                    Участвую в самодеятельность.
                    Рок музыка. Дэд метал.
                    Сальса. 3Д фильмы.</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <div >
                    <span>Отношение к алкоголю:</span>
                    <span>По праздникам мы неразлучны</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>

                <div  >
                    <span>Отношение к курению:</span>
                    <span>Только кальян</span>

                    <form>
                        <button
                            type="submit"
                            class=" btn_1">
                            <i class="fa fa-cog" ></i>
                            Редактировать
                        </button>
                    </form>

                </div>


            </article>

            <!--Друзья и подписчики-->
            <!--  <article 
             class="friends-subscriber profil_block--dotted">
             Друзья и подписчики
             </article> -->

        </div>

        <div class="col-lg-8 col-md-8 col-sm-8  col-xs-12">

            <!--Общая статистика пользователя по Балерт-->
            <?php
//            $statistic = "SELECT * FROM statistics WHERE user_id = '$user_id'  ";
//            $countDays = mysqli_num_rows($db->runQuery($statistic));
//            if(!$countDays){
//                $countDays = 1;
//            }
//            $balert[] = ['plan','action','learning','exercises','relaxing','thinking'];
//            $name[] = ['План','Действие','Обучение','Физическая нагрузка','Отдых','Позитивное мышление'];
//            $statistic = array();
//            foreach ($balert as $value) {
//                for($i=0;$i<=count($value);$i++) {
//                    $query = "SELECT SUM($value[$i]) FROM statistics WHERE user_id = '$user_id'";
//                    $result1 = $db->runQuery($query);
//                    $SUM[] = mysqli_fetch_array($result1);
//                    $statistic[] = round(($SUM[$i][0]/$countDays)*100);
//                }
//            }
            ?>

            <article
                class="all-statistic profil_block--dotted">

                <h3>Общая статистика пользователя по B-alert</h3>

                <?php for($i=0;$i<10;$i++) {?>

                    <!-- Блок с прогресс барами -->
                    <div class="row">

                        <span class="label label-success col-lg-3 col-md-3 col-sm-12  col-xs-12">
                            <?php echo $num = $i + 10?>
                        </span>

                        <div class="col-lg-8 col-md-8 col-sm-11  col-xs-10">
                            <div class="progress  ">
                                <div class="progress-bar progress-bar-success" style="width : <?php echo $num + $i .'%'?>" aria-valuemax="100" aria-valuemin="0" aria-valuenow="4" role="progressbar">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>

                        <span class="badge col-lg-1 col-md-1 col-sm-1  col-xs-2">
                            <?php echo $num + $i . '%'?>
                        </span>
                    </div>
                    <!-- Конец блока с прогрессбарами -->

                <?php } ?>

                <!-- Дополнительная информация -->

                <div
                    class="statistic_details"
                >
                    Статистика с
                    <time
                        class="js-details_DayBegins
                    ">
                    </time>

                    по

                    <time
                        class="js-details_DayCompletion 
                    " >
                    </time>
                    .

                    Количество дней про которые
                    Вы вносили информацию -
                    
                    <span
                        class="js-details_allCountDays 
                    allCountDays
                    " >
                    </span>

                    .
                    Пропущено дней -
                    
                    <span
                        class="js-details_CountMissDays
                    CountMissDays
                    ">
                    </span>

                </div>

            </article>

            <!--Блок - Новости на сегодня-->
            <article
                class="profil_page_news profil_block--dotted" >

                <h3>  Чем вы занимались сегодня?</h3>


                <div  class="clearfix">

                    <form method="post" name="statistic" action="" class="todays_news">

                        <ul class="row" >
                            <li class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <input type="checkbox"
                                       name="plan"
                                       value="1"
                                       id="CheckboxGroup2_0">
                                <label for="CheckboxGroup2_0" class="btn_1">
                                    Планировали
                                </label>
                            </li>

                            <li class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <input type="checkbox"
                                       name="action"
                                       value="1"
                                       id="CheckboxGroup2_1">
                                <label for="CheckboxGroup2_1" class="btn_1">
                                    Действовали
                                </label>
                            </li>

                            <li class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <input type="checkbox"
                                       name="learning"
                                       value="1"
                                       id="CheckboxGroup2_2">
                                <label for="CheckboxGroup2_2" class="btn_1">
                                    Обучались
                                </label>
                            </li>

                            <li class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <input type="checkbox"
                                       name="exercises"
                                       value="1"
                                       id="CheckboxGroup2_3">
                                <label for="CheckboxGroup2_3" class="btn_1">
                                    Делали упражнения
                                </label>
                            </li>

                            <li class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <input type="checkbox"
                                       name="relax"
                                       value="1"
                                       id="CheckboxGroup2_4">
                                <label for="CheckboxGroup2_4" class="btn_1">
                                    Отдыхали
                                </label>
                            </li>

                            <li class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
                                <input type="checkbox"
                                       name="thinking"
                                       value="1"
                                       id="CheckboxGroup2_5">
                                <label for="CheckboxGroup2_5" class="btn_1">
                                    Думали позитивно
                                </label>
                            </li>
                        </ul>

                        <button type="submit"
                                id="Save2"
                                class="btn_1 center-block"
                                value="Сохранить"
                            Сохранить
                            <i class="fa fa-save"></i>
                        </button>

                    </form>

                </div>


            </article>
            <!--Конец формы ввода про сегодняшний день-->


            <!--Вывод статистики-->
            <article
                class="profil_page_otput-statistic profil_block--dotted"  >
                <h3>Вывод статистики за:</h3>

                <!--Таб для выбора временного диапазона-->
                <ul class="nav nav-tabs" id="myTab1">
                    <li class=""><a data-toggle="tab" href="#tab1" aria-expanded="false" >Месяц</a></li>
                    <li class="active"><a data-toggle="tab" href="#tab2" aria-expanded="true">День</a></li>
                    <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Ваш промежуток</a></li>
                    <li class=""><a data-toggle="tab" href="#tab4" aria-expanded="false">Год</a></li>
                </ul>

                <div class="tab-content" id="myTabContent1">

                    <div id="tab1" class="tab-pane fade">

                        <form id="choice-month">
                            <div
                                class="datepicker-here"
                                data-min-view="months"
                                data-view="months"
                                data-date-format="MM yyyy" ></div>
                            <input class="btn_1 center-block" value="Показать" type="submit">
                        </form>
                    </div>

                    <div id="tab2" class="tab-pane fade active in">

                        <form id="choice-day" c="">
                            <div class="datepicker-here"></div>
                            <input class="btn_1 center-block" value="Показать" type="submit">
                        </form>
                    </div>

                    <div id="tab3" class="tab-pane ">

                        <form id="choice-user-interval" class="row">
                            <div class="range-example">
                                <div id="start"  class="col-lg-6 col-md-6 col-sm-12  col-xs-12" >
                                    <p>Начало</p>
                                </div>
                                <!--   <span>&ndash;</span> -->
                                <div  id="end" class="col-lg-6 col-md-6 col-sm-12  col-xs-12"  >
                                    <p>Конец</p>
                                </div>
                            </div>
                            <input class="btn_1 center-block" value="Показать" type="submit">
                        </form>
                    </div>

                    <div id="tab4" class="tab-pane fade ">

                        <form id="choice-year">
                            <div
                                class="datepicker-here"
                                data-min-view="years"
                                data-view="years"
                                data-date-format="yyyy" ></div>
                            <input class="btn_1 center-block" value="Показать" type="submit">
                        </form>

                    </div>

                </div>

                <div id="statistic2"></div>

            </article>

        </div>



    </div>

</section>