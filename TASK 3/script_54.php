<?php

$a = array(
    array(
      'id' => 101,
      'first_name' => 'avani',
      'last_name' => 'viramgama',
    ),
    array(
      'id' => 4767,
      'first_name' => 'jay',
      'last_name' => 'kanani',
    ),
    array(
      'id' => 3809,
      'first_name' => 'manth',
      'last_name' => 'Patel',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);

?>