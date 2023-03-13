<div style="width: 50%; margin: 0 auto; border: solid;overflow-y: scroll;width: 800px;height: 1000px;text-align: center;font-size:20px;">
<h1>Все пользователи</h1>

<?php
 foreach ($data as $row) {
    echo "------------------";
    echo "<h3>". $row["username"] ."</h3>";
    echo "<a href='/areaAdmin/delUser/?id_user=".$row["id"] . "'>удалить пользователя</a>";
    echo "<br>";
    echo "<a href='/areaAdmin/showUserMessage/?id_user=".$row["id"] . "'>показать сообщения пользователя</a>";
    echo "<br>";
   
}
?>

</div>