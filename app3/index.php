<?php

//funçao para converter uma sring para binario
function stringParaBinario($string) {
  //A funçao str_split divide a string em um array de caracteres
  //A funçao ord pega o valor ASCII de cada carat=ctere
//A funçao de decblin converte o valor de ASCII em binario
 $binario = '';
  foreach (str_split($string) as $char) {
    //converte o caractre para o valor binario de 8 bits
  $binario .= str_pad(decbin(ord($char)), 8, '0',STR_PAD_LEFT) . ' ';
  }
  return $binario;
}

//Exemplo de uso
$frase = "Livia Maria Tozoni Dos Santos";
$fraseBinario = stringParaBinario($frase);

//Exibindo a frase original e sua versao binaria
echo "Frase original: " . $frase . "<br>";
echo "Frase em binario: " . $fraseBinario;
?>
