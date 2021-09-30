<?php

$rez = array ( 0   => array ("Автор", "Название", "Страницы"),
               1   => array ("С. Кинг", "Жребий", 477),
               2   => array ("А. Атеев", "Карты Люцифера", 451),
               3   => array ("Э. Райс", "Интервью с вампиром", 445),
               4   => array ("Г. Лавкрафт", "Дагон", 9)
            );

$table = '<table style="border: 2px solid grey; ">';

foreach ($rez as $key => $rez_col){
    
        if($key === 0 ) $table .= '<tr style="background: red; text-align: center;">';
        else $table .= '<tr style="background: yellow;">';

        foreach ($rez_col as $sValue){
                $table .= "<td style='border: 2px solid grey;'>${sValue}</td>";
        }

        $table .= "</tr>";
}

$table .= '</table>';

echo $table;

?>