<pre>
<?php

for($i=1; $i<10; $i++) {
    $br[] = $i*$i;
}
print_r($br);
echo '<br>';

array_push($br, 100, 101);
print_r($br);

echo implode(',', $br). '<br>';


// echo $br; //不要把陣列直接轉換為字串



?>
</pre>