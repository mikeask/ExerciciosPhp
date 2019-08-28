<?php

namespace Galoa\ExerciciosPhp\TextWrap;
use Galoa\ExerciciosPhp\TextWrap\Resolucao;


class Page
{
    function home(){
        echo '<body bgcolor="black" />
        <font color="white">';

        $this->resolucao = new Resolucao();
        $this->resolucao->textWrap("Se  vi    mais longe  foi   por  estar   de pé  sobre   ombros  de  gigantes", 8);

        echo '</font>';
    }
}



?>