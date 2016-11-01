<?php

$names[] = 'Christopher';
$names[] = 'Dewy';
$names[] = 'Scott';
$names[] = 'Mike';
$names[] = 'Robert';
$names[] = 'Aristotle';
$count   = 1;
foreach($names as $name)
{
    if($_REQUEST['name'] == $name ){
        echo $_REQUEST['name']. ' is available.';
    }
}


