<?php
    //Wilma Auraruna Khalif
    $jam = 7.00;

    echo "Jam saat ini: $jam.00\n";

    if ($jam >= 5.00 && $jam <= 10.59 ){
        echo"Itu pagi bos dari jam (05.00-10.59)\n";
    }else if ($jam >= 11.00 && $jam <= 14.59 ){
        echo "Siang mas, bangun. Makan dulu sana! (11.00 - 14.59)\n";
    }
     else if ($jam >= 15.00 && $jam <= 17.59){
        echo "Udah sore bang, pulang. (15.00-17.59)\n";
    }else if ($jam >= 18.00 && $jam <= 04.59){
        echo "Malem bang saatnya tidur. (18.00 - 04.59)\n";
    }
?>