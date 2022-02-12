<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class TwiscodeController extends Controller
{
    public function binarytodecimal(Request $request)
    {
        $bin = str_split($request->bin);
        $bin = array_reverse($bin);

        $i = 0;
        $dec = 0;
        foreach ($bin as $values) {
            $ans = $values * pow(2, $i);
            $dec += $ans;
            $i++;
        }

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'result' => $dec
        ]);
    }


    public function decimaltobinary(Request $request)
    {
        $dec = $request->dec;
        $binStr = '';
        while ($dec >= 1) {
            $bin = $dec % 2;
            $dec = round($dec / 2, 0, PHP_ROUND_HALF_DOWN);
            $binStr .= $bin;
        }
        $binStr = strrev($binStr);
        return response([
            'status' => 200,
            'message' => 'success',
            'result' => $binStr
        ]);
    }

    public function polindrome(Request $request)
    {
        $text = $request->text;
        $arr_kalimat = explode(" ", $text);

        for ($i = 0; $i <= count($arr_kalimat); $i++) {
            for ($j = 0; $j <= count($arr_kalimat); $j++) { {
                    $spil_text1 = str_split($arr_kalimat[$i]);
                    $spil_text2 = str_split($arr_kalimat[$j]);


                    for ($text1 = 0; $text1 < count($spil_text1); $text1++) {
                        for ($text2 = 0; $text2 < count($spil_text2); $text2++) {
                            if ($spil_text1[$text1] == $spil_text2[$text2]) {
                                $data[] = $spil_text1[$text1];
                            }
                        }
                    }
                }
            }
        }

        // $name = 'Diwa';
        // $split_text = str_split($name);

        dd($data);
    }
}
