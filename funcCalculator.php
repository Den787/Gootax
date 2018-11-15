<?php

        function calc($a,$znak,$b)
        {



            switch ($znak) {

                case '-' :
                    $x = $a - $b;
                    return $x;
                case '+' :
                    $x = $a + $b;

                    return $x;
                case '*' :
                    $x = $a * $b;

                    return $x;
                case '/' :
                    if ($b != 0) {
                        $x = $a / $b;
                        return $x;
                    }
                    else {
                        echo "На ноль делить нельзя";
                        break;
                    }


                    }
            }














