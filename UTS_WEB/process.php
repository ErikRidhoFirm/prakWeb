<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputs = array_map('intval', $_POST['input']);
    sort($inputs);
    $result = array_merge(array_slice($inputs, 0, 2), array_slice($inputs, -2));
    sort($result);
    echo implode(", ", $result);
}
?>
