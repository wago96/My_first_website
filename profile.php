<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Лихтен  C.O</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <div class="container">
        <div class="row nav_bar">
            <div class="col-3 nav_logo"></div>
            <div class="col-9">
               <div class="nav_text">Мой первый сайт!</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                 <h3>Я, Лихтен Станислав, прохожу крутой отбор на стажировку в Postive Technologies, 
                     представим, каким бы был Negative Technologies (хорошо его нет)  </h3>
            </div>
            <div class="positive col-6">
                <div class="row align-items-center title_p">
                    <div class="col-9 "><h3>Postive Technologies</h3></div>
                    <div class="col-3 p_photo"></div>
                </div>
                <div class="about">
                <p>Технологично предотвращаем недопустимое для бизнеса и государства</p>
                <p>Лучшие эксперты в области IT и ИБ</p>
                <p>Крупнейшая компания по защите информации в России</p>
                <p>PT START — даем шанс молодым специалистам проявить себя</p>
                </div>
            </div>
            <div class="negative col-6" >
                <div class="row align-items-center title_n">
                    <div class="col-9 "><h3>Negative Technologies</h3></div>
                    <div class="col-3 n_photo"  id="negative"></div>
                </div>
                <div class="about">
                <p>Технологии, не обещающие слишком много</p>
                <p>Мы делаем ваши проблемы видимыми!</p>
                <p>Мы не продаем ваши данные, кто вам сказал?!</p>
                <p>Опыт работы от 50-ти лет, стажеров не берем!!!</p>
                <p>Мы сделали бекап на бумаге, DROP DATABASE не страшен!)</p>
                </div>
            </div>
            <div class="col-11">
                <div class="row"><p class="title_text">Сделал Лихтен С.О.</p></div>
            </div>
        
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Delete Negative</button>
            </div>
        </div>
    </div>
    <div class='contrainer'>
        <div class = 'row'>
            <div class = 'col-12'>
                <h1 class = "hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class = 'col-12 hello'>
                <form method = "POST" class ="hello" action = "profile.php">
                    <input type="text" class="form" type="text"  name="title" placeholder="Заголовок вашего поста"></input>
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
                    <button type="submit" class="btn_red" id="myButton" name="submit">Сохранить пост!</button> 
                </form>
           </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>

<?php
require_once('db.php');

$link = mysqli_connect("127.0.0.1", 'root', 'kali', 'first');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if(!mysqli_query($link, $sql)) die("не удалось добавить пост");   
}
?>