<?php
$manager = new MongoDB\Driver\Manager();

/* Insert some documents so that our query returns information */
$bulkWrite = new MongoDB\Driver\BulkWrite;
$bulkWrite->insert(['name' => 'Ceres', 'size' => 946, 'distance' => 2.766]);
$bulkWrite->insert(['name' => 'Vesta', 'size' => 525, 'distance' => 2.362]);
$manager->executeBulkWrite("test.asteroids", $bulkWrite);

/* Query for all the items in the collection */
$query = new MongoDB\Driver\Query( [] );

/* Query the "asteroids" collection of the "test" database */
$cursor = $manager->executeQuery("test.asteroids", $query);

/* $cursor now contains an object that wraps around the result set. Use
 * foreach() to iterate over all the result */
foreach($cursor as $document) {
    print_r($document);
}
?>