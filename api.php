<?php
    include 'classes/config.php';
    if (!isset($_GET['function'])) {
        die('some error ocuure');
    }
    function getProducts()
    {
        $result = $conn->query('SELECT * FROM `Productus`');
        $i = 0;
        $class = 'class="active"';
        $data = [];
        $j = 0;
        while ($row = $result->fetch()) {
            if ($i == 0) {
                $data[j] = '<li '.$class."><a data-toggle='tab' href='#tab1'>{$row['name']}</a></li>";
                ++$i;
                $class = '';
            } else {
                $data[j] = '<li '.$class."><a data-toggle='tab' href='#tab1'>{$row['name']}</a></li>";
            }
            ++$j;
        }
        $data = json_encode($data);
        echo $_Get['jsonCallback'].'('.$data.')';
    }
    if (function_exists($_GET['function'])) {
        $_GET['function']($connect);
    }
