<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Alpha Alpha
        </title>
    </head>
    <body>
        <h1>This is a PHP page</h1>
    <?php
        for ($i = 0; $i < 10; $i++)
        {
            if ($i % 2){
            echo "<div id='div$i' style='background-color:red'>";
            echo "ALPHA";
            echo "</div>";
            }
            else {
            echo "<div id='div$i'>";
            echo "ALPHA";
            echo "</div>";
            }
        }
    ?>
    </body>
</html> 