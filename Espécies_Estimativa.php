  <!DOCTYPE html>
<html>
    <head>
        <title>Estimativa de sobrevivencia das espécies:</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                
                <tr>
                    <td> Maior número de espécies:</td>
                    <td><input type="text" name="maior_numero_de_especies"></td>
                </tr>                
                <tr>
                    <td>Maior estimativa:</td>
                    <td><input type="text" name="maior_estimativa"></td>
                </tr>
                <tr>
                <tr>
                    <td>Menor número de espécies:</td>
                    <td><input type="text" name="menor_numero_de_especies"></td>
                </tr>                
                <tr>
                    <td>Menor estimativa:</td>
                    <td><input type="text" name="menor_estimativa"></td>
                </tr>
                <tr>
                  
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{   

    $maior_estimativa =floatval($_POST["maior_estimativa"]); 
    $maior_numero_de_especies =floatval($_POST["maior_numero_de_especies"]);    
    $menor_estimativa =floatval($_POST["menor_estimativa"]); 
    $menor_numero_de_especies =floatval($_POST["menor_numero_de_especies"]);    
    
    
   
    $cenario_1=($maior_numero_de_especies*$maior_estimativa);
    $cenario_1=number_format($cenario_1,2,".");

    echo "<br>No melhor cenário levará  ".$cenario_1." de anos para o homem viver sozinho  com baratas e pernilongos.";   

    $cenario_2=($menor_numero_de_especies*$menor_estimativa);
    $cenario_2=number_format($cenario_2,2,".");

    echo "<br>No pior cenário levará  ".$cenario_2." de anos para o homem viver sozinho com baratas e pernilongos.";    

   
}
?>