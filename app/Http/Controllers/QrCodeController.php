<?php

namespace App\Http\Controllers;

class QrCodeController extends Controller
{
    public function index()
    {
        // Lanchonete Sauna
        $qtdeLS = 150;
        // Lanchonente Piscina
        $qtdeLP = 60;
        // Lanchonete Tênis
        $qtdeLT = 70;
        // Beach Tennis
        $qtdeBT = 30;
        // Peteca
        $qtdePE = 20;
        // Mangueiras
        $qtdeMA = 30;
        // Tiro
        $qtdeTI = 45;
        // Basquete
        $qtdeBQ = 20;
        // Espaço Eventos
        $qtdeEE = 30;
        // Bar Apoio
        $qtdeBA = 60;
        // Drinkeria
        $qtdeDR = 10;

        $totalQrCodes = $qtdeLS + $qtdeLP + $qtdeLT +
            $qtdeBT + $qtdePE + $qtdeMA +
            $qtdeTI + $qtdeBQ + $qtdeEE +
            $qtdeBA + $qtdeDR;
        $s            = '';
        $qrCodes      = [];

        for ($i = 1; $i <= $qtdeLS; $i++) {
            $s = 'LS' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeLP; $i++) {
            $s = 'LP' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeLT; $i++) {
            $s = 'LT' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeBT; $i++) {
            $s = 'BT' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdePE; $i++) {
            $s = 'PE' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeMA; $i++) {
            $s = 'MA' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeTI; $i++) {
            $s = 'TI' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeBQ; $i++) {
            $s = 'BQ' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeEE; $i++) {
            $s = 'EE' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeBA; $i++) {
            $s = 'BA' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        for ($i = 1; $i <= $qtdeDR; $i++) {
            $s = 'DR' . sprintf('%04d', $i);
            array_push($qrCodes, $s);
        }

        return view('qrcode', [
            'qrCodes'      => $qrCodes,
            'totalQrCodes' => $totalQrCodes
        ]);
    }
}
