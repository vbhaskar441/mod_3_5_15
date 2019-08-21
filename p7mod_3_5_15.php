<?php 
function check_mod_val($val,$mul_a,$mul_b,$string_val){
  try {
    if (($val%$mul_a==0) && ($val%$mul_b==0) && is_numeric($val)){
      return $string_val;
    } 
    return $val;
  }
  catch(Exception $e){
    return $e; 
  }
}

function get_range_of_mods_strings($start_range,$end_range){
  $str = array();
  for ($i=$start_range;$i<=$end_range;$i++){
    $j = $i;
    $j = check_mod_val($j,5,3,'Linianos');
    $j = check_mod_val($j,3,1,'Linio');
    $j = check_mod_val($j,5,1,'IT');
    $str[] =$j;
  }
  return implode(',',$str);
}

function PUnitTest() {
  $expectedValue = "1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,13,14,Linianos,16,17,Linio,19,IT,Linio,22,23,Linio,IT,26,Linio,28,29,Linianos,31,32,Linio,34,IT,Linio,37,38,Linio,IT,41,Linio,43,44,Linianos,46,47,Linio,49,IT,Linio,52,53,Linio,IT,56,Linio,58,59,Linianos,61,62,Linio,64,IT,Linio,67,68,Linio,IT,71,Linio,73,74,Linianos,76,77,Linio,79,IT,Linio,82,83,Linio,IT,86,Linio,88,89,Linianos,91,92,Linio,94,IT,Linio,97,98,Linio,IT";
  return (get_range_of_mods_strings(1,100) === $expectedValue);
}
$result_arr= array('1'=>'Passed','0'=>'Failed',''=>'failed');

echo "Test : ".$result_arr[PUnitTest()].'<br/>';
echo get_range_of_mods_strings(1,100);
?>