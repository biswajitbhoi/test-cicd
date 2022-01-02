<?php

$con = mysqli_connect('localhost','root','','test');
if(!$con){
    die("Error in connecting to database");
}else{
    echo "<H1>Database is connected, you can interact for the informations</H1> <br>";
}

echo "This is home page";

for($i=0 ;$i<=10; $i++){
    echo $i;
    echo "<br>";
}
?>

<a href='test2.php'>Click for internal page</a>