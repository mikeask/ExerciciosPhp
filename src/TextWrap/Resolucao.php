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

    if($text == null || $text=="" || $text == " "){   //se a string de entrada for vazia, retorna null
      return [null];
    }

    $newText = "";

    $oldText = $text;
    $text = trim(preg_replace('/\s+/', ' ', $oldText)); //substitui todos os espaços por um espaço e retira espaços nas pontas
    
    $textArray = explode (" ", $text);             //separa a string $text por espaço " ", salvando as palavras em um array de strings      
    
    $line = "";

    for($i=0;$i<strlen($text);$i++){
      if($text[$i]==" "){
        if($text[$i+1]==" "){
          
        }
      }
    }

    foreach ($textArray as &$word) {               //percorre a lista de palavras
      echo ".".$word;
      if(strlen($word) > $length){                  //se a palavra couber em uma linha
        if(strlen($line) > 0){                          //se a linha tiver algum conteudo
          $line = $line."\n";                            //quebra linha
          $newText = $newText.$line;                     //coloca a linha com a quebra no texto
          $line = "";                                    //limpa a linha para começar uma nova
        }
        $chars = str_split($word);                     //transforma a string $word em um array de chars $chars
        foreach($chars as &$char){                      //percorre o array de chars $chars
          if(strlen($line) < $length){               //se a linha atual tiver seu tamanho menor que o máximo
            $line = $line.$char;                          //adiciona o char na linha
          }else{                                        //se a linha tiver um tamanho maior que o máximo
            $line = $line."\n";                           //quebra linha
            $newText = $newText.$line;                    //coloca a linha com a quebra no texto
            $line = "";                                   //limpa a linha para começar uma nova
            $line = $line.$char;                          //adiciona o caractere que não coube na outra linha na nova
          }
        }
      }else{                                            //se a palavra NÃO for maior que o limite por linha
        if(strlen($line." ".$word) <= $length){        //verifica há espaço para a palavra na linha
          if(strlen($line) > 0){                            //verifica se há conteudo salvo na linha
            $line = $line." ".$word;                           //adiciona a palavra na linha pulando um espaço
          }else{                                            //se não houver conteudo na linha
            $line = $word;                                     //coloca a palavra na linha (que estava vazia)
          }
          

        }else{                                         //se não houver espaço para a palavra na linha
          $line = $line."\n";                           //adiciona quebra de linha na linha
          $newText = $newText.$line;                    //grava a linha no texto
          $line = "";                                   //limpa a linha
          $line = $line.$word;                          //salva a palavra na "nova" linha
        }
      }
 
    }
    if(strlen($line)>0){                                //ao acabar o foreach de palavras e houver conteúdo na linha, gravar no texto
      $newText = $newText.$line;    
    }

    $textArray = explode ("\n", $newText);              //separa a string $newText por "\n" em um array de strings (palavras)
    
    return $textArray;                                  //retorna o array com as palavras
  }

}
