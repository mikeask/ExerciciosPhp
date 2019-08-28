<?php

namespace Galoa\ExerciciosPhp\TextWrap;
use Galoa\ExerciciosPhp\TextWrap\Resolucao;


class Page
{
    function home(){
        echo '<body bgcolor="black" />
        <font color="white">';

        $this->resolucao = new Resolucao();
        $this->resolucao->textWrap("a bbb cccc ddddd eeeeee ffffffff ggggggggggg hhhhhhhhhhhhh iiiiiiiiiiiiiiiiii jjjjjjjjjjjjjjjjjj ggggggggggg ddddd hhhhhhhhhhhhh", 5);

        echo '</font>';
    }
}



?>