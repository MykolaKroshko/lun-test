<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lun test</title>
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <link href="style/fonts.css" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="clearfix">
  <header class="col-lg-6 mainHeader">
    <div class="mainHeader_container">
      <nav class="mainHeader_nav">
        <a href="#" class="mainHeader_link disabled">Українською</a>
        <div class="dropdown">
           <button type="button" class="mainHeader_nav_dropdownToggle hasIcon" id="mainHeader_nav_drop" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Профиль</button>
           <ul class="dropdown-menu" aria-labelledby="mainHeader_nav_drop">
             <li><a href="#" class="mainHeader_nav_link hasIcon liked">Избранное</a></li>
             <li><a href="#" class="mainHeader_nav_link hasIcon watched">Просмотренные</a></li>
             <li><a href="#" class="mainHeader_nav_link hasIcon faq">Как разместить обьявление</a></li>
             <li><a href="#" class="mainHeader_nav_link hasIcon register">Регистрация</a></li>
             <li><a href="#" class="mainHeader_nav_link hasIcon login">Войти</a></li>
           </ul>
        </div>
      </nav>
      <div class="mainHeader_search">
        <div class="logo">
          <img src="img/lun-main__8-march-logo_transp.png" alt="holiday logo">
        </div>
        <p class="motto">Комфортный выбор квартир</p>
        <form class="search" action="#" method="post">
          <input type="search" class="search_input" name="search" placeholder="Поиск">
          <button type="reset" class="search_reset" name="reset"></button>
          <button type="submit" class="search_submit text-uppercase" name="button">Выбрать</button>
        </form>
      </div>
      <div class="mainHeader_contacts">
        <div class="contacts">
          <a href="#" class="mainHeader_link">
            <span class="mainHeader_contacts_icon mainHeader_contacts_question"></span>
            <span class="mainHeader_contact">Как разместить объявление</span>
          </a>
          <a href="#" class="mainHeader_link">
            <span class="mainHeader_contacts_icon mainHeader_contacts_mail"></span>
            <span class="mainHeader_contact">Связатся с ЛУН.ua</span>
          </a>
        </div>
        <div class="socials">
          <a href="#" class="mainHeader_link">
            <span class="mainHeader_contacts_icon mainHeader_contacts_facebook"></span>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="col-lg-6 content">
    <section class='row'>
      <h2 class='section_title'>Популярные новостройки</h2>
      <div class="post_wrapper">
        <article class="post">
          <a class='post_link' href="#">
            <figure>
              <img class='post_image' src="img/2894.jpg" alt="view">
              <figcaption class='post_description'>
                <p class='post_title'>Місто Квітів. Парковий квартал</p>
                <span class='post_cityName'>Киев</span>
              </figcaption>
            </figure>
          </a>
        </article>
        <article class="post">
          <a class='post_link' href="#">
            <figure>
              <img class='post_image' src="img/2894.jpg" alt="view">
              <figcaption class='post_description'>
                <p class='post_title'>Місто Квітів. Парковий квартал</p>
                <span class='post_cityName'>Киев</span>
              </figcaption>
            </figure>
          </a>
        </article>
        <article class="post">
          <a class='post_link' href="#">
            <figure>
              <img class='post_image' src="img/2894.jpg" alt="view">
              <figcaption class='post_description'>
                <p class='post_title'>Місто Квітів. Парковий квартал</p>
                <span class='post_cityName'>Киев</span>
              </figcaption>
            </figure>
          </a>
        </article>
        <article class="post">
          <a class='post_link' href="#">
            <figure>
              <img class='post_image' src="img/2894.jpg" alt="view">
              <figcaption class='post_description'>
                <p class='post_title'>Місто Квітів. Парковий квартал</p>
                <span class='post_cityName'>Киев</span>
              </figcaption>
            </figure>
          </a>
        </article>
      </div>
    </section>
    <footer class="footer row">
      <nav>
        <ul class="list-inline">
          <li class="footer_listItem"><a class="footer_link" href="#">О компании</a></li>
          <li class="footer_listItem"><a class="footer_link" href="#">Вакансии</a></li>
          <li class="footer_listItem"><a class="footer_link" href="#">Реклама</a></li>
          <li class="footer_listItem"><a class="footer_link" href="#">Партнерство</a></li>
          <li class="footer_listItem"><a class="footer_link" href="#">Новостройки</a></li>
        </ul>
      </nav>
      <div class="copyright_container">
        <span class="country">Украина</span>
        <span class="copyright">© 2008-2017 ЛУН.ua. Все права защищены.</span>
      </div>
    </footer>
  </div>
  <script src="script/jquery-3.1.1.min.js"></script>
  <script src="script/bootstrap.min.js"></script>
  <script src="script/script.js"></script>
</body>
</html>
