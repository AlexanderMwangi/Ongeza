<?php

/* 
Alexander Mwangi
alexandermwangi1@gmail.com
*/

//function to return the sum of the diagonal
function getDiagonalSum($matrix) 
{ 
    $diagonal = 0; 
    for ($i = 0; $i < sizeof($matrix); $i++)  
    { 
        $diagonal += $matrix[$i][$i]; 
    } 
  return $diagonal;
} 
// Function to return the count of all repeat rows 
function countRepeatRows($matrix) 
{ 
	$count = 0;
	for ($i = 0; $i < sizeof($matrix); $i++) 
	{ 
        if(count($matrix[$i]) != count(array_unique($matrix[$i])))
        {
            $count++; 
        }

	} 

	return $count; 
} 

//function to transpose matrix from columns to rows so as to use the row function
function transpose($matrix) 
{ 
    $transposed = array();
    for ($i = 0; $i < sizeof($matrix); $i++) 
        for ($j = 0; $j < sizeof($matrix); $j++) 
            $transposed[$i][$j] = $matrix[$j][$i]; 
    return $transposed;        
    
}
function processMatrix($arr)
{
    $result = array();
    $diagonal = getDiagonalSum($arr);
    $row = countRepeatRows($arr); 
    $transResult = transpose($arr);
    $col = countRepeatRows($transResult); 
    array_push($result,$diagonal,$row,$col);
    return json_encode($result);
}

$matrix = array(array(1, 2, 3, 4), 
           array(2, 1, 4, 3),  
           array(3, 4, 1, 2), 
           array(4, 3, 2, 1)); 
			
echo(processMatrix($matrix));

?>