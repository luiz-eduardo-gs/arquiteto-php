<?php

namespace Arquiteto\PHP\Service;

use Arquiteto\PHP\Model\AluraMais;
use Arquiteto\PHP\Model\Curso;

class Assistidor
{
    public function assisteCurso(Curso $curso)
    {
        foreach ($curso->recuperarVideos() as $video) {
            $video->assistir();
        }
    }

    public function assisteAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->assistir();
    }
}
