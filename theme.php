<?php
    require_once __DIR__ . '/php/db.php';

include __DIR__ . '/php/getTopic.php';
include __DIR__ . '/php/getTopicComments.php';

$topicComments = getTopicComments((int) $_GET['id']);

$topicInfo = getTopic((int) $_GET['id']);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Страница с темой </title>
    <link rel="stylesheet" href="./css/base.css">
</head>
<body>
    
    <!-- меню сайта -->
    <header class="header">
        <h1> <a href="index.php"> МИНИ-ФОРУМ </a>  </h1>

        <div class="menu-wrapper">
            <ul class="user-menu">
                <li> <a href="./index.php"> Главная </a> </li>
                <li> <a href="./my-themes.php"> Ваши темы </a> </li>
                <li> <a href="./register.php"> Выход </a> </li>
            </ul>

            <ul class="admin-menu">
                <li> <a href="all-themes.php"> Все темы </a> </li>
                <li> <a href="all-users.php"> Все пользователи </a> </li>
            </ul>
        </div>

    </header>
    <!-- конец меню сайта -->

    <!-- секция с ОДНОЙ темой -->
    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> <?=$topicInfo['title']?> </h2>
            <h2 class="additional"> Дата создания: <span> <?=$topicInfo['date']?> </span> </h2>
        </div>

        <!-- --- --> 

        <div class="theme">
            <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
        </div>

        <!-- --- --> 

        <div class="reply">
            <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
            <p class="reply-info"> ответил <span class="user-name"> user07 </span> в <span class="date"> 2020.10.14 17:51  </span> </p>
        </div>

        <!-- --- --> 

        <div class="reply">
            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas vitae quidem at blanditiis repellat voluptatibus cupiditate, laborum fugiat similique voluptate praesentium ratione neque illum expedita quaerat. Inventore tenetur nam eos.Possimus amet dolorem quam dolores nostrum? Tenetur tempora, corporis labore modi dolor, non sit vero sint inventore quos, culpa voluptatum praesentium cupiditate quasi saepe debitis! Consectetur ullam nulla autem eum? </p>
            <p class="reply-info"> ответил <span class="user-name"> user23 </span> в <span class="date"> 2020.10.14 17:52  </span> </p>
        </div>

        <!-- --- --> 

        <div class="reply">
            <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
            <p class="reply-info"> ответил <span class="user-name"> user03 </span> в <span class="date"> 2020.10.14 17:56  </span> </p>
        </div> 

        <!-- --- --> 
        
        <form class="form-reply" method="" action="">
            <textarea name=""> Введите сообщение </textarea>
            <button class="button" name=""> Отправить </button>
        </form>

    </div>
    <!-- конец секции одной темой-->
</body>
</html>