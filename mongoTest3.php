<html>
<title>Testing Stuff</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>


<script>
function mongoStuff()
{

var x = "<?php

$manager = new MongoDB\Driver\Manager();

$query = new MongoDB\Driver\Query([]);

$rows = $manager->executeQuery("test.asteroids", $query);

//$quack = "hi";

foreach ($rows as $row) {
    
    echo "<table><tr><th>Planet Name</th><th>Planet Size</th></tr><tr><td>$row->name</td><td>$row->size</td>";
}
?>";
document.getElementById("test").innerHTML = x;
}
</script>
<body>
<h1>
Testing this in a table
</h1>


<p>Because I can</p>

<h2 id ="test">
</h2>




<button onclick="mongoStuff()">Try it</button>
</body>
</html>