<?php

// multy dimesional array 
 $sm = array(
  'as' => 'aaa',
  'name' => 'suraj',
  'product' => array(
       'product_name' => 'mango',
       'product_rate' => '10'
    ),
  'sales' => array(
       'product_name' => 'mango',
       'product_rate' => '10'
    ),
  'field' => array(
       'product_name' => 'mango',
       'product_rate' => '10'
    ),
  'hospital' => array(
       'product_name' => 'mango',
       'product_rate' => '10'
    ),
);



//  while loop 
$keys = array_keys($sm);
$i = 0;

while ($i < count($keys)) {
    $key = $keys[$i];
    $value = $sm[$key];
    
    if (is_array($value)) {
        echo "Key: $key\n";
        $subKeys = array_keys($value);
        $j = 0;
        while ($j < count($subKeys)) {
            $subKey = $subKeys[$j];
            $subValue = $value[$subKey];
            echo "$subKey: $subValue\n";
            $j++;
        }
    } else {
        echo "Key: $key, Value: $value\n";
    }
    
    $i++;
}




// for each

foreach ($sm as $key => $value) {
    if (is_array($value)) {
        echo "Key: $key\n";
        foreach ($value as $subKey => $subValue) {
            echo "$subKey: $subValue\n";
        }
    } else {
        echo "Key: $key, Value: $value\n";
    }
}

// for loop

$keys = array_keys($sm);

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    $value = $sm[$key];
    
    if (is_array($value)) {
        echo "Key: $key\n";
        $subKeys = array_keys($value);
        for ($j = 0; $j < count($subKeys); $j++) {
            $subKey = $subKeys[$j];
            $subValue = $value[$subKey];
            echo "$subKey: $subValue\n";
        }
    } else {
        echo "Key: $key, Value: $value\n";
    }
}


// associative array

$sm = array(
  'as' => 'aaa',
  'name' => 'suraj'
);

// while loop

$keys = array_keys($sm);
$i = 0;

while ($i < count($keys)) {
    $key = $keys[$i];
    $value = $sm[$key];
    echo "Key: $key, Value: $value\n";
    $i++;
}

// for each loop
foreach ($sm as $key => $value) {
    echo "Key: $key, Value: $value\n";
}

// for loop

$keys = array_keys($sm);

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    $value = $sm[$key];
    echo "Key: $key, Value: $value\n";
}


?>
