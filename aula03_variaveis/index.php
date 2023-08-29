<?php
  $meuPrimeiroTexto = "Batman";
  $meuPrimeiroInteiro = 85;
  $meuPrimeiroReal = 1.95;
  $meuPrimeiroLogico = true;
  // Declarando uma constante
  // define("minhaconstante", 10);

  // Template strings;
  echo "$meuPrimeiroTexto tem $meuPrimeiroInteiro anos de idade e $meuPrimeiroReal de altura";
  echo "<br/>";
  // var_dump(minhaconstante);  
  // Operadores de atribuição
  
  $numero = 10;  
  $numero+=2;
  echo $numero;
    echo "<br/>";  
  $numero = $numero + 2;
  echo $numero;  
  $textoconcatenado = 1;  
  $textoconcatenado.=2;
  echo "<br/>";
  echo $textoconcatenado;

?>