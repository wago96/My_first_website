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
<div class='contrainer'>
        <div class = 'row'>
            <div class = 'col-12'>
                <h1 class = "hello">
                    ПриБляявет, <?php echo $_COOKIE['User']; ?>
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
    </body>
</html>