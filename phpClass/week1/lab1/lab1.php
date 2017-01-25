<!DOCTYPE html>

<html>
    <head>
        
        <title>Lab1 Random Colors</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <table border = "1">
            <?php $rows = "10";
                  $cols = "10";
             ?>
           
            <!-- Row loop-->
            <?php for ($tr = 1; $tr <= $rows; $tr++): ?>
                <tr>
            <!-- Column loop -->
            <?php for ($td = 1; $td < $cols; $td++): ?>
                        
             
<!-- Random Color -->
                <?php $randColor = '#'.strtoupper(dechex(rand(0x000000, 0xFFFFFF))); ?>
                       
                <td style="background-color: <?php echo $randColor; ?>"> <?php echo $randColor; ?> <br /><span style="color:#ffffff"> <?php echo $randColor; ?> </span></td>
                
            <?php endfor; ?>                
                </tr>
            <?php endfor; ?>
        </table>


    </body>
</html>
