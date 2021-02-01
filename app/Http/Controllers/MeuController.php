<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{

    public function pinturapiramide ($ab, $h, $tinta) {
        $calculo = sqrt(($ab * $ab) + ($h * $h));
        $base = ($ab * $ab) * 4;
        $areaTriangulo = $ab * $calculo;
        $areaTotal = $base + ($areaTriangulo* 4);
        $litros = $areaTotal/4.76;
        $latas = $litros/18;
        $volume = ($base * $h)/3;

        if ($tinta == 1) {
            $total = ceil ($latas)*127.90;
        }else if ($tinta == 2) {
            $total = ceil ($latas)*258.98;
        }else if ($tinta == 3) {
            $total = ceil ($latas)*344.34;
        }

        echo "ab: ".$ab."<br>";
        echo "h: ".$h."<br>";
        echo "a1: ".$calculo."<br>";
        echo "Área do Triângulo: ".$areaTriangulo."<br>";
        echo "Área da Base: ".$base."<br>";
        echo "Área Total: ".$areaTotal."<br>";
        echo "Tipo de Tinta: ".$tinta."<br>";
        echo "Litros: ".$litros."<br>";
        echo "Latas: ". ceil ($latas)."<br>";
        echo "Preço total: ".$total."<br>";
        echo "Volume: ".$volume."<br>";

    }
}
