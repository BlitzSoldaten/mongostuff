function mongoStuff()
{
    <?php

$manager = new MongoDB\Driver\Manager();

$query = new MongoDB\Driver\Query([]);

$rows = $manager->executeQuery("test.asteroids", $query);



//foreach ($rows as $row) {
//    
//    echo "$row->name : $row->size<br>";
//}


?>;
}