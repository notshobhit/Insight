<?php
    /*     TIME OF POST    */

    $time = explode(' ', $row['time']);;

    $dateOfPost = explode('-', $time[0]);
    $timeOfPost = explode(':', $time[1]);


    $hh = (int)$timeOfPost[0];
    $am_pm = ($hh >= 12) ? "pm" : "am";
    $hh = ($hh == 12) ? 12 : $timeOfPost[0] % 12;
    $min = (int)$timeOfPost[1];


    $dd = (int)$dateOfPost[2];
    $mm = (int)$dateOfPost[1];
    $yyyy = (int)$dateOfPost[0];

    $yyyy = ($yyyy == 2015) ? "" : $yyyy;

    switch ($mm) {
        case 1:
        $mm = "January";
        break;

        case 2:
        $mm = "February";
        break;

        case 3:
        $mm = "March";
        break;

        case 4:
        $mm = "April";
        break;

        case 5:
        $mm = "May";
        break;

        case 6:
        $mm = "June";
        break;

        case 7:
        $mm = "July";
        break;

        case 8:
        $mm = "August";
        break;

        case 9:
        $mm = "September";
        break;

        case 10:
        $mm = "October";
        break;

        case 11:
        $mm = "November";
        break;

        case 12:
        $mm = "December";
        break;
    }


    $displayTimeFormat = sprintf("%02d:%02d %s, %d %s %s", $hh, $min, $am_pm, $dd, $mm, $yyyy);

?>