<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $num= filter_input(INPUT_POST, "number_1");
        $num2= filter_input(INPUT_POST, "number_2");
        if(isset($_POST['operacao'])){
            
    ?>

    <h2>
        <?php
        if($_POST['operacao']=="soma"){
            echo(soma($num, $num2));
       
        }elseif($_POST['operacao']=="multiplicacao"){
            echo(multiplicacao($num, $num2));

        }elseif($_POST['operacao']=="subtracao"){
            echo(subtracao($num, $num2));
        
        }elseif($_POST['operacao']=="divisao"){
            echo(divisao($num, $num2));
        }
        
    }else{
            echo("operaçao nao selecionada");
        }
            function soma($num, $num2){
                $resultado= $num+$num2;
                return $resultado;
            }

            function subtracao($num, $num2){
                $resultado= $num-$num2;
                return $resultado;
            }

            function multiplicacao($num, $num2){
                $resultado= $num*$num2;
                return $resultado;
            }

            function divisao($num, $num2){
                if($num2==0){
                    echo("nao foi possivel fazer o calculo");
                }else{
                    $resultado= $num/$num2;
                    return $resultado;
                }
            }
        ?>
    </h2>


</body>
</html>