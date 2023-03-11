<link rel="stylesheet" type="text/css" href="/css/area.css" />
<form action="user/exit/" style="float:right">
<input type="submit" value="Выход" style="width: 200px;height: 50px;font-size: 16px;">
</form>


<center><h1>Личный кабинет</h1></center>

<div class="container_message">
<div class="centered-box">
<h2>Написать сообщение</h2>
    <div style="margin-bottom: 50px; border: solid;   display: inline-block; padding:10px">
    <form method="POST" action="/area/sendMessage">
    <p>логин получателя: <input type="text" name="recipient" /></p>
    <p>Заголовок: <input type="text" name="title" /></p>
    <p>текст письма: <textarea name="text_message"> </textarea></p>
    <input type="submit" value="отправить" name="send_message">
    </form>
</div>
</div>
<div class="container"> 
    <div class="box1">
        <h1>Отправленные</h1>
        <?php
            $send_messages=$data[0];
            for ($i = 0; $i < count($send_messages[0]); $i++) {
                echo "<p> Сообщение пользователю : " . $send_messages[1][$i] . "</p>";
                echo "<h3> Тема : " . $send_messages[0][$i] . "</h3>";
                echo "<h4> Текст : " . $send_messages[2][$i] . "</h4>";
                echo "-----------";
            }
        ?>
    </div>
    <div class="box2">
    <h1>Полученные</h1>
                <?php
                    $recipient_messages=$data[1];
                    for ($i = 0; $i < count($recipient_messages[0]); $i++) {
                        echo "<p> Сообщение от пользователя : " . $recipient_messages[1][$i] . "</p>";
                        echo "<h3> Тема : " . $recipient_messages[0][$i] . "</h3>";
                        echo "<h4> Текст : " . $recipient_messages[2][$i] . "</h4>";
                        echo "-----------";
                    }
                    
                ?>
    </div>
</div>
