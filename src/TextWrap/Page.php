<?php

namespace Galoa\ExerciciosPhp\TextWrap;
use Galoa\ExerciciosPhp\TextWrap\Resolucao;


class Page
{
    function home(){
        echo '<body bgcolor="black" />
        <font color="white">';

        // $text = $_GET['text'];
        $this->resolucao = new Resolucao();
        // echo $this->resolucao->textWrap($text, 50)[0][1];
        $this->resolucao->textWrap("a bbb cccc ddddd eeeeee ffffffff ggggggggggg hhhhhhhhhhhhh iiiiiiiiiiiiiiiiii jjjjjjjjjjjjjjjjjj", 25);

        echo '</font>';
    }
}



?>