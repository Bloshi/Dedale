<?php

    namespace App\Cls;

    class Proper
    {
        static function ProperFileName($str)
        {
            $str = str_replace(" ", "", $str);
            $str = strtolower($str);

            $str = preg_replace('#Ç#', 'C', $str);
            $str = preg_replace('#ç#', 'c', $str);
            $str = preg_replace('#è|é|ê|ë#', 'e', $str);
            $str = preg_replace('#È|É|Ê|Ë#', 'E', $str);
            $str = preg_replace('#à|á|â|ã|ä|å#', 'a', $str);
            $str = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $str);
            $str = preg_replace('#ì|í|î|ï#', 'i', $str);
            $str = preg_replace('#Ì|Í|Î|Ï#', 'I', $str);
            $str = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $str);
            $str = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $str);
            $str = preg_replace('#ù|ú|û|ü#', 'u', $str);
            $str = preg_replace('#Ù|Ú|Û|Ü#', 'U', $str);
            $str = preg_replace('#ý|ÿ#', 'y', $str);
            $str = preg_replace('#Ý#', 'Y', $str);

            $str = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $str);
            $str = mb_ereg_replace("([\.]{2,})", '', $str);

            return $str;
        }
    }
