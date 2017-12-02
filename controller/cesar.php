<?php

function cesar($str, $shift) {
    $char = range('a', 'z');
    $flip = array_flip($char);

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(strtolower($str{$i}), $char)) {
            $ord = $flip[strtolower($str{$i})];

            $ord = ($ord + $shift) % 26;

            if ($ord < 0)
                $ord += 26;

            $str{$i} = ($str{$i} == strtolower($str{$i})) ? $char[$ord] : strtoupper($char[$ord]);
        }
    }
    return $str;
}
