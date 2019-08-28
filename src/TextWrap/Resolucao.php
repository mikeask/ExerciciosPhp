<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   */
  public function textWrap(string $text, int $length): array {
    $oldLength = $length;
    $newText = "";
    $textLength = strlen($text);

    echo "Texto: \t".$text."\n Tamanho: ".$textLength;
    echo "<br>";

    $textArray = explode (" ", $text);
    $line = "";

    foreach ($textArray as &$word) {                    //percorre a lista de palavras
      if(strlen($word) > $oldLength){                   //se a palavra couber em uma linha
        $chars = str_split($word);                      //transforma a string $word em um array de chars $chars
        foreach($chars as $char){                       //percorre o array de chars $chars
          if(strlen($line) <= $oldLength){              //se a linha atual tiver seu tamanho menor que o máximo
            $line = $line.$char;                        //adiciona o char na linha
          }else{                                        //se a linha tiver um tamanho maior que o máximo
            $line = $line."\n";                         //quebra linha
            echo "<p> worldLine: ".$line."\n </p>";
            $newText = $newText.$line;                 //coloca a linha com a quebra no texto
            $line = "";                                 //limpa a linha para começar uma nova
            $line = $line.$char;                        //adiciona o caractere que não coube na outra linha na nova
          }
        }
      }else{
        if(strlen($line." ".$word) <= $oldLength){
          $line = $line." ".$word;
        }else{
          $line = $line."\n";
          echo "<p> line: ".$line."\n </p>";
          $newText = $newText.$line;
          $line = "";
        }
      }
    }

    echo "<br><br> newText <br><br>";
    echo nl2br($newText);

    return [$newText];
  }

}
