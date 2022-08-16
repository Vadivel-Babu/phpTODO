<?php



$todoName = $_POST['todo'] ?? "";
$todoName = trim($todoName);
 if($todoName){
    if(file_exists('todo.json')){
        $json = file_get_contents('todo.json');
        $jsonArr = json_decode($json,true);
    }else{
        $jsonArr = [];
    }
     $jsonArr[$todoName] = ['completed' => false];
     file_put_contents('todo.json',json_encode($jsonArr,JSON_PRETTY_PRINT));
 }

 header('Location:index.php');
?>