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
    echo $textLength;
    echo "<br>";

    for ($i = 0; $i < $textLength; $i++) {

      if($i == $length){
        //echo "<br>";
        $length = $length + $oldLength;
        $newText = $newText."\n";
      }
      
      $newText = $newText.$text[$i];
      //echo $text[$i];
    }

    echo "<br><br> newText <br><br>";
    echo nl2br($newText);

    $str_arr = explode (" ", $text); 
    // substr_replace( $sentence, $string, $position, 0 );
    return [$str_arr];
  }

}
