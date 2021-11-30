<?php

$sorteio = rand(2,2);

echo "Valor sorteado: " . $sorteio;
switch($sorteio){
   case 1:
   case 2:
         echo " => Você perdeu 1 ponto";
         break;
   case 3:
         echo " => Você ganhou um bônus! parabéns ganhou 3 pontos";
         break;
   default:
         echo " => Jogue novamente";
         break;
}




//  switch (expressão) {
// 	case valor1:
// 	case valor2:
// 	case valor3:
// 	   //primeiro código
// 	   break;
// 	case valor3:
// 	   //segundo código
// 	   break;
// }