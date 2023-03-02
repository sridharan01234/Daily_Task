<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function fibbo($i)
    {
        if($i<=1) return $i;
        return fibbo($i-1)+fibbo(($i-2));
    }   

    $MyVar = 8; 
    $MyVar2 = 8; 
    echo fibbo($MyVar)."\n";
    //fibbo of 8 will be printed     
    echo fibbo($MyVar++)."\n";
    //fibbo of 8 will be printed  
    echo fibbo(++$MyVar2)."\n";
    $MyVar2 = 10;
    $MyVar = $MyVar2 += 10;
    echo $MyVar."\n";
    echo $MyVar2."\n";
    ?>
</body>

</html>