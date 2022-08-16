<?php
$todos =[];
if(file_exists('todo.json')){
    $json = file_get_contents('todo.json');
    $todos = json_decode($json,true);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="../js/index.js" defer></script>
    <link rel="stylesheet" href="../css/style.css"> -->
    <title>Document</title>
</head>
<body>
    
    <div class="wraper">
        <div class="todo">
            <form action="todo.php" method="post">
                <input type="text" name="todo" id="">
                <button type="submit" name="submit_btn" class="add">add</button>
            </form>
        </div>
        <!-- <form action="api.php?api-name=subscribe" method="post">
            <h3>Subscribe</h3>
            <label for="">Email</label>
            <input type="email" name="subscriber_email" />
            <button type="submit" name="submit_btn" >subscribe</button>
          </form><br> -->

          <!-- <form action="api.php" method="post">
            <input type="email" name="email" />
            <button type="submit" name="submit_btn" >subscribe</button>
          </form> -->
          <?php foreach($todos as $todoName => $todo):?>
            <div>
                <?php echo $todoName  ?>
                <button>delete</button>
            </div>
          <?php endforeach; ?>
       <div class="todolist">
        
       </div>
    </div>
    
</body>
</html>