<?php
include_once('./assets/layouts/header.php');
if(isset($data))
{
    foreach($data as $table)
    {
        echo $table['name'];
        if($table['status']=='0')
            echo "Trống";
        echo "<br>";
    }
}
?>