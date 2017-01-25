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
            <?php
                
            for ($basic =0; $basic <=5; basic+1){
                $number = mt_rand(0, 15);
                switch($number){
                    case 10:
                        $number = "A";
                            break;
                    case 11:
                        $number = "B";
                            break;
                    case 12:
                        $number = "C";
                            break;
                    case 13:
                        $number = "D";
                            break;
                    case 14:
                        $number = "E";
                            break;
                    case 15:
                        $number = "F";
                            break;
                }
                $color = $number;
                $hexColor = '#'.$color;
            }
            
            
            

            ?>
                
             
             
                    <td style="background-color:<?php echo $hexColor; ?>"> <?php echo $hexColor; ?> <br /><span style="color:#ffffff"> <?php echo $hexColor; ?> </span></td>
               
            <?php endfor; ?>                
                </tr>
            <?php endfor; ?>
        </table>


    </body>
</html>
