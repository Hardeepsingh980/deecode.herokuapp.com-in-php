<?php


    function convertToCode($word) {

        $result = [];

        for ($i=0; $i < strlen($word); $i++) {
            $curWord = strtoupper($word[$i]);
            if ($curWord == "A") {
                array_push($result, "2");
            } else if ($curWord == "B") {
                array_push($result, "22");
            } else if ($curWord == "C") {
                array_push($result, "222");
            } else if ($curWord == "D") {
                array_push($result, "3");
            } else if ($curWord == "E") {
                array_push($result, "33");
            } else if ($curWord == "F") {
                array_push($result, "333");
            } else if ($curWord == "G") {
                array_push($result, "4");
            } else if ($curWord == "H") {
                array_push($result, "44");
            } else if ($curWord == "I") {
                array_push($result, "444");
            } else if ($curWord == "J") {
                array_push($result, "5");
            } else if ($curWord == "K") {
                array_push($result, "55");
            } else if ($curWord == "L") {
                array_push($result, "555");
            } else if ($curWord == "M") {
                array_push($result, "6");
            } else if ($curWord == "N") {
                array_push($result, "66");
            } else if ($curWord == "O") {
                array_push($result, "666");
            } else if ($curWord == "P") {
                array_push($result, "7");
            } else if ($curWord == "Q") {
                array_push($result, "77");
            } else if ($curWord == "R") {
                array_push($result, "777");
            } else if ($curWord == "S") {
                array_push($result, "7777");
            } else if ($curWord == "T") {
                array_push($result, "8");
            } else if ($curWord == "U") {
                array_push($result, "88");
            } else if ($curWord == "V") {
                array_push($result, "888");
            } else if ($curWord == "W") {
                array_push($result, "9");
            } else if ($curWord == "X") {
                array_push($result, "99");
            } else if ($curWord == "Y") {
                array_push($result, "999");
            } else if ($curWord == "Z") {
                array_push($result, "9999");
            } else if ($curWord == " ") {
                array_push($result, "0");
            }
        }

        return join(',', $result);
        
    }


    function deeCode($codestr) {
        $code = explode(',',$codestr);
        $result = [];
        for ($i=0; $i < sizeof($code); $i++) {
            if ($code[$i] == "2") {
                array_push($result, "A");
            } else if ($code[$i] == "22") {
                array_push($result, "B");
            } else if ($code[$i] == "222") {
                array_push($result, "C");
            } else if ($code[$i] == "3") {
                array_push($result, "D");
            } else if ($code[$i] == "33") {
                array_push($result, "E");
            } else if ($code[$i] == "333") {
                array_push($result, "F");
            } else if ($code[$i] == "4") {
                array_push($result, "G");
            } else if ($code[$i] == "44") {
                array_push($result, "H");
            } else if ($code[$i] == "444") {
                array_push($result, "I");
            } else if ($code[$i] == "5") {
                array_push($result, "J");
            } else if ($code[$i] == "55") {
                array_push($result, "K");
            } else if ($code[$i] == "555") {
                array_push($result, "L");
            } else if ($code[$i] == "6") {
                array_push($result, "M");
            } else if ($code[$i] == "66") {
                array_push($result, "N");
            } else if ($code[$i] == "666") {
                array_push($result, "O");
            } else if ($code[$i] == "7") {
                array_push($result, "P");
            } else if ($code[$i] == "77") {
                array_push($result, "Q");
            } else if ($code[$i] == "777") {
                array_push($result, "R");
            } else if ($code[$i] == "7777") {
                array_push($result, "S");
            } else if ($code[$i] == "8") {
                array_push($result, "T");
            } else if ($code[$i] == "88") {
                array_push($result, "U");
            } else if ($code[$i] == "888") {
                array_push($result, "V");
            } else if ($code[$i] == "9") {
                array_push($result, "W");
            } else if ($code[$i] == "99") {
                array_push($result, "X");
            } else if ($code[$i] == "999") {
                array_push($result, "Y");
            } else if ($code[$i] == "9999") {
                array_push($result, "Z");
            } else if ($code[$i] == "0") {
                array_push($result, " ");
            }   
        }

        return join('', $result);
    }


?>





