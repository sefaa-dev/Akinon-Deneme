<?php

function factorial($n)
{
    if ($n == 0)
        return 1;
    return $n * factorial($n - 1);
}

$result = factorial($_GET['n']);

echo json_encode(['response' => $result]);

?>