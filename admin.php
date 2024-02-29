<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin.css">
    <script src="scripts/script.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-text">
            <h1><b>ПАНЕЛЬ АДМИНИСТРАТОРА</b></h1>
        </div>
    </header>

    <main>
        <div id="buttons">
            <button onclick="openChangeIndex()">Открыть панель изменений</button>
            <button>Открыть редактирование пользователей</button>
        </div>
        
        <div class="inputs" id="div_inp" style="display: none;">
            <form action="">
                <label for="important"><b>Изменить 'Важное на сегодня'</b></label> <br>
                <input type="text" id="important" required placeholder="Введите текст для изменения">
                <button type="submit">Подтвердить изменения</button> <br> <br>
            </form>

            <form action="">
                <label for="changes"><b>Изменить 'Изменения в расписании'</b></label> <br>
                <input type="text" id="changes" required placeholder="Введите текст для изменения">
                <button type="submit">Подтвердить изменения</button> <br> <br>
            </form>

            <form action="">
                <label for="events"><b>Изменить 'События</b>'</label> <br>
                <input type="text" id="events" required placeholder="Введите текст для изменения">
                <button type="submit">Подтвердить изменения</button>
            </form>
            


            
        </div>
    </main>

    <footer>
        <div class="footer-img">
            <a href="index.php"><img class="fot_img" src="svgs/home.svg" alt=""></a>
            <a href="one.php"><img class="fot_img" src="svgs/raspisanie.svg" alt=""></a>
            <a href=""><img class="fot_img" src="svgs/chat.svg" alt=""></a>
            <a href="Group.php"><img class="fot_img" src="svgs/user.svg" alt=""></a>
        </div>
    </footer>
</body>
</html>