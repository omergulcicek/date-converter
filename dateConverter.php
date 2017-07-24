<?php

function dateConverter ($date)
{
    //Parametre olarak gelen tarihi '-'lere göre ayırıp, elemanları bir diziye atar.
    //Separates the incoming date by '-' parameter and assigns elements as a sequence.
    $date = explode("-", $date);

    //Gün değerini alır.
    //Get the day value.
    $day = $date[2];

    //Ay değerini alır.
    //Get the month value.
    $month = $date[1]);

    //Yıl değerini alır.
    //Get the year value.
    $year = $date[0];

    //Ay değerini Türkçe ismiyle değiştirir.
    //Change month value to Turkish name.
    switch ($month)
    {
        case '1': $month = "Ocak"; break;
        case '2': $month = "Şubat"; break;
        case '3': $month = "Mart"; break;
        case '4': $month = "Nisan"; break;
        case '5': $month = "Mayıs"; break;
        case '6': $month = "Haziran"; break;
        case '7': $month = "Temmuz"; break;
        case '8': $month = "Ağustos"; break;
        case '9': $month = "Eylül"; break;
        case '10': $month = "Ekim"; break;
        case '11': $month = "Kasım"; break;
        case '12': $month = "Aralık"; break;
        default: break;
    }

    //Gün ay yıl (25 Temmuz 2017) olarak çıktı verir.
    //Outputs the day, mounth and year value (25 Temmuz 2017).
    echo "$day $month $year";
}

?>
