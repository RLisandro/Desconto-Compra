<?php
$Valor=$_POST['valor'];
$desconto=($Valor * 7) /100;
$calculo =$Valor - $desconto;
echo"<br><br> O valor do produto é R$ ".$Valor. "<br><br>Seu desconto foi de "
.$desconto. "%"."<br><br>O produto com desconto de 7% é R$: ".$calculo;

