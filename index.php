<?php 
    
$matrizArray = [[3,2,1],[1,2,3],[3,2,1]];

echo array_sum(array_map("array_sum", $matrizArray));

?>
