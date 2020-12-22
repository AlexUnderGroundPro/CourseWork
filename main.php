<?php

require_once "Connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">     
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:wght@700&family=Lato&family=Marck+Script&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:wght@700&family=Lato&family=Marck+Script&display=swap" rel="stylesheet">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
global $link;
$prodlist = mysqli_query($link,"SELECT * FROM `products`");
while ($prod = mysqli_fetch_assoc($prodlist))
    if ($prod['NAME_PRODUCT'] == "Milk")
        $m = $prod['NAME_PRODUCT'];

   elseif ($prod['NAME_PRODUCT'] == "Milk LF")
        $ml = $prod['NAME_PRODUCT'];

    elseif ($prod['NAME_PRODUCT'] == "Kefir")
        $k = $prod['NAME_PRODUCT'];

    elseif ($prod['NAME_PRODUCT'] == "Kefir LF")
        $kl = $prod['NAME_PRODUCT'];

    elseif ($prod['NAME_PRODUCT'] == "Cheese")
        $c = $prod['NAME_PRODUCT'];

    elseif ($prod['NAME_PRODUCT'] == "Cheese LF")
        $cl = $prod['NAME_PRODUCT'];




?>
       




<div class="conteiner">

    <div class="fixed-top">
        <div class="name">
            Lactozia Inc.
        </div>
        <nav class="menu-list">
            <a href="https://www.ekoniva-apk.ru/" class="menu-link">О нас</a>
            <a href="#nm" class="menu-link">Каталог</a>
            <a href="#zk" class="menu-link">Заказ</a>
        </nav>

        <span class="connect">Будь на связи:</span>
        
            <a href="https://ru.wikipedia.org/wiki/Facebook" class="social-link"><img src="images/facebook.svg" alt="Фейсбук"></a>
            <a href="https://www.instagram.com/" class="social-link"><img src="images/instagram.svg" alt="Инста"></a>
            <a href="https://twitter.com/?lang=ru" class="social-link"><img src="images/twitter.svg" alt="Твит"></a>
        
            <img src="images/cowlogo.png" alt="Лого Корова" class="logo">

    </div>

    <div class="cursive">
        <div class="cow1"><img src="images/cow.png" alt="Корова" class="logo"> </div>
        <div class="cow2"><img src="images/cow.png" alt="Корова" class="logo"> </div>
        <div class="cow1"><img src="images/cow.png" alt="Корова" class="logo"> </div>
        <div class="cow2"><img src="images/cow.png" alt="Корова" class="logo"> </div>
        <div class="cow1"><img src="images/cow.png" alt="Корова" class="logo"> </div>
        <div class="cow2"><img src="images/cow.png" alt="Корова" class="logo"> </div>
        <div class="span"><span>" Доставим заказ вовремя или вернем Вам деньги! "</span></div>
    </div>
    
    <div class="swiper-container">
   
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('./images/bestseller.png');">
                <span class="card-subtitle"></span>
                <h2 class="card-title"></h2>
            </div>

            <div class="swiper-slide" style="background-image: url('./images/cheese.jpg');">
                <span class="card-subtitle">Лучший</span>
                <h2 class="card-title">Сыр</h2>    
            </div>
            <div class="swiper-slide" style="background-image: url('./images/milk.jpg');">
                <span class="card-subtitle">Лучшее</span>
                <h2 class="card-title">Молоко</h2>
            </div>
            <div class="swiper-slide" style="background-image: url('./images/cheese.jpg');">
                <span class="card-subtitle">Сыр</span>
                <h2 class="card-title">Безлактозный</h2>
            </div>
            <div class="swiper-slide" style="background-image: url('./images/milk.jpg');">
                <span class="card-subtitle">Молоко</span>
                <h2 class="card-title">Безлактозное</h2>
               
            </div>
          
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        
    </div>
      
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      

        <div class="list-conteiner">

            <div class="list-1">
                 <img src="./images/icons/garanty.png" alt="">
                <span class="list">Гарантия качаства!</span>

            </div>
            <br>

            <div class="list-1">
                <img src="./images/icons/del.png" alt="">
               <span class="list">Быстрая доставка!</span>
               
           </div>
           <br>

                <div class="list-1">
                    <img src="./images/icons/diamond.png" alt="">
                <span class="list">Бонусы постоянным клиентам!</span>
                
            </div>
            <br>

                <div class="list-1">
                    <img src="./images/icons/bs.png" alt="">
                <span class="list">Топ-Селлер по стране!</span>
                    
            </div>
            <br>

                <div class="list-1">
                    <img src="./images/icons/cash.png" alt="">
                <span class="list">Выгодные цены. Экономия!</span>
                
            </div>
            <br>
           

            <div class="list-content">
               
            </div>
        </div>
        

    <div class="main">
            <div class="main-head">
                <h1>О продукции: </h1>
            </div>
       <hr>
       <div class="first-card">
            <img src="./images/LactoFREE/Milk-.jpg" class="im1" alt="">
            <div class="insider">
            <h1 class="milk-header">Молоко</h1>
            <em><span class="f-s">В той или иной форме молоко употребляет каждый житель нашей страны. Соответственно, данный бизнес можно отнести к категории высокорентабельных. Благодаря автоматизации производства, уже на начальном этапе работы можно выйти на существенные объемы, предлагая целый перечень полезных для здоровья и вкусных продуктов питания.
                Топленое молоко изготавливают из пастеризованного коровьего молока, которое подвергают равномерному нагреванию при температуре до 95ºС на протяжении 3-х и более часов. Благодаря этому молоко приобретает светло-коричневый оттенок и карамельный вкус.
                Для производства ряженки используют топленое молоко и закваску чистых культур молочнокислых бактерий. Из соображений экономии большинство йогуртов изготавливают из сухого молока с внесением подсластителей и ароматических добавок. Из-за сложности и дороговизны технологии заниматься производством натуральных йогуртов рентабельно лишь изготовителям органических продуктов.
                Технологическая схема линий по изготовлению молокопродуктов дает возможность планомерно расширять ассортимент, «достраивая» мощности завода. Одним из вариантов такого расширения может стать покупка оборудования для производства сухого молока, основными узлами которого являются вакуумная выпарная установка, агрегаты для кристаллизации и распылительной сушки.
            </span></em>
            <a name = "nm">.</a>
               </div>
       </div>

       <div class="first-card">
        <img src="./images/LactoFREE/Lactose-FreeMilk.jpg" class="im1" alt="" >
        <div class="insider">
        <h1 class="milk-header">Молоко без лактозы</h1>
        <span class="f-s">Технологии производства безлактозного молока делятся на две категории — традиционные и использующие ферментативное расщепление лактозы. При традиционном способе пастеризованную молочную смесь особого состава сквашивают кисломолочной закваской, при этом компоненты подбираются таким образом, чтобы максимально сохранить молочный вкус. При ферментативном расщеплении лактозы используется искусственное получение лактазы в промышленных масштабах из грибов Aspergillus niger и Aspergillus oryzae или экстрагировании из дрожжей Kluyveromyces fragilis и Kluyveromyces lactis и добавлении её в молоко.Безлактозное молоко (регламентное наименование — продукт переработки молока безлактозный) — продукт переработки питьевого молока, в котором лактоза гидролизована или удалена[1].

            Продукт предназначен для людей, страдающих непереносимостью лактозы. От обычного молока оно отличается только отсутствием или низким содержанием лактозы (например, по российскому регламенту допускается не более 0,1 г на 1 л готового к употреблению продукта). При этом производителями подбираются технологии, обеспечивающие сохранение продукту вкуса и прочих свойств питьевого молока.
            
            Производство безлактозных молочных продуктов освоено в большинстве стран Западной Европы, Аргентине, Австралии, Канаде, Японии, Малайзии, Новой Зеландии, США
        </span>
           </div>
   </div>

    <div class="first-card">
        <img src="./images/LactoFREE/Kefir-.jpg" class="im1" alt="">
        <div class="insider">
        <h1 class="milk-header">Кефир</h1>
        <span class="f-s">Характеристика продукции, сырья и полуфабрикатов. Кисломолочные напитки – жидкообразные продукты, образованные в результате коагуляции белков в закисшем вследствие брожения молока. Кисломолочные напитки помимо питательной ценности обладают диетическими и лечебными эффектами. В результате изменения свойств белков молока при сквашивании эти продукты усваиваются лучше и быстрее, чем питьевое молоко. Молочная кислота, содержащаяся в кисломолочных напитках, возбуждают аппетит, утоляет жажду, улучшает работу желудочно-кишечного тракта и почек человека. Кроме того, молочная кислота обладает антимикробными свойствами и оказывает благоприятное воздействие на микрофлору кишечника.

            В зависимости от вида микроорганизмов, вызывающих сквашивание молока и образующихся при этом продуктов, кисломолочные напитки имеют широкий ассортимент: различные виды простокваши, кефир, йогурт, ацидофилин. В некоторые группы кисломолочных напитков вводятся различные добавки: сахар, плодово-ягодные наполнители, ароматизаторы, витамин С и др.
            
            Кисломолочные напитки вырабатывают из молока не ниже второго сорта и кислотностью не более 19 °Т.
            
            Закваски для кисломолочных напитков готовят на чистых культурах микроорганизмов. Для кефира закваску можно также приготовить на естественном сочетании нескольких микроорганизмов – кефирных грибках. Для приготовления заквасок используют молоко не ниже первого сорта плотностью 1028 кг/м3.
            
            Сливки, обезжиренное и сухое молоко.</span>
        </div>
    </div>

    <div class="first-card">
        <img src="./images/LactoFREE/Kefir-LactFree.png" class="im1" alt="">
        <div class="insider">
        <h1 class="milk-header">Кефир без лактозы</h1>
        <span class="f-s">Молочные продукты, включая молоко, сыр и йогурты из коровьего, овечьего, козьего или буйволиного молока, могут являться основным компонентом сбалансированного здорового питания. Молочные продукты богаты белком, кальцием и витаминами, которые необходимы нашему организму для роста и поддержания сил. Напитки и продукты на основе молока сами по себе обладают прекрасным вкусом, а молочные ингредиенты можно найти во многих наших любимых рецептах пикантных и сладких блюд, от макаронов с сыром до мороженого. Питательные смеси на основе молочных продуктов также являются важными источниками питания для младенцев, в то время как порошкообразные и жидкие добавки представляют собой удобную обогащенную смесь для спортсменов или людей любого возраста с особыми диетическими потребностями

            Большинству людей ничего не стоит выпить стакан холодного молока или съесть любимый йогурт. Тем не менее, у некоторых людей при употреблении молочных продуктов возникают такие неприятные абдоминальные симптомы, как вздутие живота, тошнота, газы и диарея. Это связано с тем, что они не могут переваривать лактозу, которая является основным углеводом в молоке.</span>
           </div>
   </div>

            <div class="first-card">
                <img src="./images/LactoFREE/cheese-.jpg" class="im1" alt="">
                <div class="insider">
                <h1 class="milk-header">Сыр</h1>
                <span class="f-s">Благодаря огромному числу разнообразных традиций и культуре производства, в наши дни во всем мире насчитывает более двух тысяч видов молочных домашних сыров. Но при этом, сегодня не существует единственно верной классификации такого продукта, ввиду несогласованности в названиях и технологиях его приготовления в разных странах. Сыр делается из молока, поэтому он является концентратом всех его компонентов сухого типа. Такой продукт можно получить путем свертывания сырья в сырный сгусток, который впоследствии обрабатывают особым образом, и отправляют на созревание в холодное темное место. Пока сыр доходит, он приобретает особенные органолептические характеристики, что позволяет классифицировать его на виды. То есть, технология производства определяет параметры будущего продукта.
                    Однако далеко не всегда сырные продукты, приготовленные из одного вида молока и по единой технологии, имеют одинаковые вкусовые характеристики. Крайне много в данном случае зависит от качества сырья, на что влияет рацион самого животного, которое его дает. В итоге, молочные сыры приобретают совершенно разные вкусы, запах и цвет.
                        </span>
                </div>
            </div>

            <div class="first-card">
                <img src="./images/LactoFREE/cheese-lact.jpg" class="im1" alt="">
                <div class="insider">
                <h1 class="milk-header">Сыр без лактозы</h1>
                <span class="f-s">По разным данным от 30 до 50% россиян вынуждены отказываться от молочных продуктов в связи с непереносимостью лактозы - молочного сахара. К счастью, достижения науки позволяют наслаждаться натуральным молоком и молочными продуктами даже тем, кому нельзя молоко. Это стало возможным благодаря появлению безлактозного молока Valio Eila. Безлактозные сыры тоже существуют.Сначала выясним, что же такое «непереносимость лактозы». Это состояние, при котором в организме человека полностью или частично отсутствует фермент (лактаза), который необходим, чтобы переваривать молочный сахар (лактозу). Лактазная недостаточность может передаваться по наследству, возникать в результате заболеваний пищеварительной системы и даже неправильного питания. Если у вас после употребления молочных продуктов наблюдаются вздутие живота, тошнота, диарея, спазмы, то это является поводом для обращения к врачу, ведь только он сможет точно поставить диагноз.

                    Кроме того, важно знать, что непереносимость лактозы может быть полной и частичной. В первом случае врачи рекомендуют полностью исключить традиционные молочные продукты из рациона, во втором — перейти на низколактозные (кисломолочные) продукты, исключить только цельное молоко и сливки. В обоих случаях рекомендуется употреблять безлактозные продукты, в том числе — безлактозные сыры. Безлактозные продукты — это молочные продукты, содержание лактозы в которых естественным или технологическом путем снижено до уровня менее 0,01%.  </span>
                </div>
            </div>
            <a name = "zk">.</a>

    </div>
    <hr>
    <div class="nameform"> Заказ </div>

    <div class="phorm">
        <div class="padding">
        
        <form method="POST" name="form" action="Create.php" id='form'>


        <div class="stroka-1"> 
            <div>
            <input class="inp" type="text" inputmode="kana-name" id="qwe2">
            </div>
                <div>
                <label class="label"  for="number1"><?php echo"$m";?></label>
                </div>
                <div>
            <select name="number2" id="number2">
                <option value="Empty">Количество</option>
                <option value=1>1</option>
                <option value=5>5</option>
                <option value=10>10</option>
            </select></div>
        </div>




        <div class="stroka-2">
            <div>
               <input class="inp" type="text" readonly="readonly" id="qwe2">
            </div>
            <div>
                <label class="label"  for="number1"><?php echo"$ml";?></label>
            </div>
            <div>
            <select name="number2" id="number2">
                <option value="Empty">Количество</option>
                <option value="False">1</option>
                <option value="False">5</option>
                <option value="True">10</option>
            </select> </div>
           </div>




           <div class="stroka-3">
            <div>
               <input class="inp" type="text" readonly="readonly" id="qwe2">
            </div>
            <div>
                <label class="label"  for="number1"><?php echo"$k";?></label>
            </div>
            <div>
            <select name="number2" id="number2">
                <option value="Empty">Количество</option>
                <option value="False">1</option>
                <option value="False">5</option>
                <option value="True">10</option>
            </select></div>
           </div>

           <div class="stroka-4">
            <div>
            <input class="inp" type="text" readonly="readonly" id="qwe2">
            </div>
            <div>
             <label class="label"  for="number1"><?php echo"$kl";?></label>
            </div>
                <div>
         <select name="number2" id="number2">
             <option value="Empty">Количество</option>
             <option value="False">1</option>
             <option value="False">5</option>
             <option value="True">10</option>
         </select> </div>
           </div>

         <div class="stroka-5">
            <div>
            <input class="inp" type="text" readonly="readonly" id="qwe2">
            </div>
            <div>
             <label class="label"  for="number1"><?php echo"$c";?></label>
            </div>
            <div>
         <select name="number2" id="number2">
             <option value="Empty">Количество</option>
             <option value="False">1</option>
             <option value="False">5</option>
             <option value="True">10</option>
         </select> </div>
        
        </div>

        <div class="stroka-6">
            <div>
            <input class="inp" type="text" readonly="readonly" id="qwe2">
            </div>
            <div>
         
             <label class="label" for="number1"><?php echo"$cl";?></label>
            </div>
            <div>
         <select name="number2" id="number2"> 
            <option value="Empty">Количество</option>
             <option value="False">1</option>
             <option value="False">5</option>
             <option value="True">10</option>

             
         </select>
        </div>
         
         </div>

         <br>
         <br>
         <br>
         <div class="stroka-7">
            <div>
                <label class="labeli" >Ваше Имя:</label>
            </div>

            <div>
                <input class="inp1" type="text" inputmode="kana-name" id="qwe2">
            </div>
            <div>
                <input class="inp0" type="text" inputmode="kana-name" id="qwe2">
            </div>

           
        </div>




       




        <div class="stroka-7">
            <div>
                
                <label class="labeli" >Фамилия   :</label>
            </div>

            <div>
                <input class="inp1" type="text" inputmode="kana-name" id="qwe2">
            </div>
            <div>
                <input class="inp0" type="text" inputmode="kana-name" id="qwe2">
            </div>

        </div>


        <div class="stroka-7">
            <div>
                
                <label class="labeli" >Номер тел :</label>
            </div>
    

            <div>
                <input class="inp1" type="text" inputmode="kana-name" id="qwe2">
            </div>

            <div>
                
                <label class="labeli" >Доставка:</label>
            </div>

        </div>



        <div class="stroka-7">
            <div>
                <label class="labeli" >Ваш адрес:</label>
            </div>
            

            <div>
                 <input class="inp1" type="text" inputmode="email" id="qwe2">
            </div>

            <div>
                <input class="inp" type="text" readonly="readonly" id="qwe2">
           </div>

        </div>


        

       


        <div class="stroka-7">
            <div>
                <input class="inp0" type="text" inputmode="kana-name" id="qwe2">
            </div>

            <div>
                <input class="inp0" type="text" readonly="readonly" id="qwe2">
            </div>

            <div>
                <button class="calc" type="submit">Подсчитать</button>
                <button class="GO" onclick="check()"> Заказать </button>
               
                
            </div>

        </div>

        

    </div>


            


        </div>

        


       


         </form>


    </div>

           

</div>


<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="left">
                <span class="copyright">© 2020 Lactozia Inc. All right reserved.</span>
            </div>
            <div class="right">
                <nav class="footer-menu"> 
                    <a href="https://policies.google.com/privacy?hl=en-US" class="footer-link">Privacy Policy</a>
                    <a href="https://policies.google.com/terms?hl=en-US" class="footer-link">Terms of Service</a>
                    <a href="https://dictionary.cambridge.org/ru/%D1%81%D0%BB%D0%BE%D0%B2%D0%B0%D1%80%D1%8C/%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9/legal" class="footer-link">Legal</a>

                </nav>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="main.js"></script>
<script src="js/swiper.min.js"></script>   

</body>
</html>