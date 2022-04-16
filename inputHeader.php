<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Site1</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <!-- header -->
      <div class="row">
          <header class="p-3 bg-dark text-white">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <?php
              include_once "pages/header.php";                                        //вставляем классовый компонент header              
                $addHeader = new Header();                                            //вызываем класс Header()
                $addHeader -> AddToArray(array("Home", "Gallery", "Menu", "Registration", "Input"));                 //вставляем значения строк списка
                $addHeader -> setHtml();                  //вызываем функцию класса Header() для вывода html 
            ?>
          </header>      
      </div>

      <!-- nav-menu -->
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">   
              <?php           
                include_once "pages/nav.php";                           //вызываем классовый компонент nav
                $newNav = new Nav();                                    //вызываем класс Nav()
                $newNav -> AddToArray(array("корзина", "вход", "личный кабинет","регистрация"));                //вставляем значения строк списка
                $newNav -> addLi(array(['clean','rebuild'],['phone','email'],['read'],['yandex','google']));    //вставляем значения дочерних строк li списка
                $newNav -> listOutput();                                //выводим список на экран
              ?>
          </div>
      </div>

      <!-- content -->
      <div class="b-example-divider"></div>
<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">Custom cards</h2>
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <?php
      include_once "pages/content.php";
      $newContent = new Cont();
      $newContent -> AddToArray(array(
        [
          'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhzGIDyefuKsZ1bwft8g8mf_sZQxVJ7dObIw&usqp=CAU', 
          'Short title, long jacket',
          "https://github.com/twbs.png",
          "Earth",
          "3d"
        ],
        [
          'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv16Hecu2X_z_uz9_Y1u-QKLZDaoWqVVG7xw&usqp=CAU',
          "Much longer title that wraps to multiple lines",
          "https://github.com/twbs.png",
          "Pakistan",
          "4d"
        ],
        [
          'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDz-IunZq8LOpEUUxq8hq2ocyLcbtiKKbjnkxyd0BR8bJoc_zm-swjXcfNSKOI0G8nHGY&usqp=CAU',
          "Another longer title belongs here",
          "https://github.com/twbs.png",
          "California",
          "5d"
        ]));
      $newContent -> listOutput();
    ?>
  </div>
</div>

      <!-- footer -->
      <div class="container">          
        <?php
          include_once "pages/footer.php";
          $newFooter = new Footer();
          $newFooter -> addTrademark('&copy; 2021 Company, Inc');
          $newFooter -> AddToArray(array("Home", "Features", "Pricing","FAQs", "About"));
          $newFooter -> listOutput();                                //выводим список на экран
        ?>
      </div>


   
  </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

