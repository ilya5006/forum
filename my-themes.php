<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ваши темы </title>
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

    <!-- секция со своими -->
    <div class="themes">

        <div class="heading_wrapper">
            <h2 class="heading"> Ваши темы </h2>
            <a href="./create-theme.php" class="button additional"> Создать новую тему </a>
        </div>

        <!-- --- --> 

        <div class="theme">
            <h3> Заголовок темы 1 </h3>
            <p class="theme-status"> Статус темы: <span>Ожидает модерацию</span> </p>
            <p class="theme-date"> Дата создания: <span>14-10-2020 14:35:28</span> </p>
            <p class="pretext"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
        </div>

        <!-- --- --> 

        <div class="theme">
            <h3> <a href="theme.php"> Заголовок темы 2 </a> </h3>
            <p class="theme-status"> Статус темы: <span>Прошла модерацию</span> </p>
            <p class="theme-date"> Дата создания: <span>14-10-2020 14:35:28</span> </p>
            <p class="reply-count"> Количество ответов в теме: <span>14</span> </p>
            <p class="pretext"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
        </div>

        <!-- --- --> 

        <div class="theme">
            <h3> Заголовок темы 3 </h3>
            <p class="theme-status"> Статус темы: <span>Отклонена</span> </p>
            <p class="theme-date"> Дата создания: <span>14-10-2020 14:35:28</span> </p>
            <p class="pretext"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusantium consequatur aut tempore exercitationem maiores adipisci ea voluptatum deleniti quisquam, neque quod. Repellendus aliquam incidunt tempore mollitia beatae non repudiandae! </p>
        </div>
        
    </div>
    <!-- конец секции со своими темами -->



</body>
</html>