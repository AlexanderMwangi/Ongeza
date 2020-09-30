<?php

/* 
Alexander Mwangi
alexandermwangi1@gmail.com
*/

function reverseString($s)
{
    $new_str="";
    
    $exploded_str=explode(" ",$s);
    $count=count($exploded_str);
    
    for($i=$count-1;$i>=0;$i--){
    	//check if its empty character
        if($exploded_str[$i] != "")
        {
        	//concatenate string with word and add space
           $new_str .=$exploded_str[$i].=" ";
        }
    }
    
    return $new_str;
}

$str="  Bob    Loves  Alice   ";
$final_str = reverseString($str);
echo $final_str;

?>
