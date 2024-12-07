function foo(array $arr): array {
    $keys = array_keys($arr);
    foreach ($keys as $key) {
        if ($arr[$key] === 'a') {
            unset($arr[$key]);
        }
    }
    return $arr;
}

$arr = ['a', 'b', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )

//Alternative solution using array_filter
function bar(array $arr): array {
    return array_filter($arr, fn($val) => $val !== 'a');
}
$arr = ['a', 'b', 'c', 'a'];
$result = bar($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )