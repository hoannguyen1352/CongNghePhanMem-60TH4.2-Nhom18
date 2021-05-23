<?php
echo '</br>';
echo '<a href="./index.php?controller=customers&action=create" role="button">create</a>';
if(isset($data))
{
    foreach($data as $customers)
    {
        echo "</br> </br> id ".$customers['id']."</br>";
        echo "name: ".$customers['name']."</br>";
        echo "phone: ".$customers['phone']."</br>";
        echo "total: ".$customers['total']."</br>";
        echo '<a href="./index.php?controller=customers&action=update" role="button">update</a>';
    }
}
?>