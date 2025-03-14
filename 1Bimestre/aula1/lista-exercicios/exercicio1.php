<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $cores = array("yellow","blue","black","green","red","purple","grey","brown");?>
    <div style="display:flex;justify-content:center;">
        <?php 
        foreach ($cores as $key => $cor) {
            echo "<div style='background-color: {$cor}; width: 100px; height: 100px;border: 1px black solid'></div>";
        }
        
        ?>
    
    </div>
    

</body>
</html>