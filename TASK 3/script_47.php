<?php

function myfunction($num)
{
  return($num*$num);
}

$no=array(4,5,6,8,7);
print_r(array_map("myfunction",$no));

?>