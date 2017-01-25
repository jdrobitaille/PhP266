<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include './dbconnect.php';
        include './functions.php';
        
        $db = getDatabase();
        
        $id = filter_input(INPUT_GET, 'id');
        
        $result = viewOneFromTest($id);
        
        $binds = array(
                ":id" => $id
                 
                );
        
       ?>
       
        <h1> Record <?php echo $id; ?>
            
    </body>
</html>
