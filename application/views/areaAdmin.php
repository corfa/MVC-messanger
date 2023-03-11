<div style="width: 50%; margin: 0 auto; border: solid;overflow-y: scroll;width: 800px;height: 1000px;text-align: center;font-size:20px;">
<h1>Все пользователи</h1>

<?php
 foreach ($data as $row) {
    echo "------------------";
    echo "<h3>". $row["username"] ."</h3>";
    echo "<br>";
   
}
?>

</div>