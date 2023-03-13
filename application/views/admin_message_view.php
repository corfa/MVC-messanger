<link rel="stylesheet" type="text/css" href="/css/area.css" />
<br>
<br>
<br>
<br>
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

