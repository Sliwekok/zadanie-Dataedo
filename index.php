<?php

$statuses = [
	7 => 'DECLINED',
	5 => 'ACTIVE',
	3 => 'PAUSED',
	9 => 'ACTIVE',
];

$databases = [
	['status' => 5, 'name' => 'MSSQL'],	
	['status' => 3, 'name' => 'MySQLL'],	
	['status' => 5, 'name' => 'PostgreSQL'],	
	['status' => 7, 'name' => 'MariaDB'],	
	['status' => 9, 'name' => 'MongoDB'],	
	['status' => 5, 'name' => 'Cassandra'],	
	['status' => 3, 'name' => 'Snowflake'],	
	['status' => 5, 'name' => 'Oracle'],	
	['status' => 5, 'name' => 'Salesforce'],	
];


$activeDatabases = [];

// copy ACTIVE $databases to $activeDatabases

$i = 0;
// iterate through array 
foreach($databases as $db){
	// chceck if status code is 9 - ACTIVE
	if($db['status'] == 9){
        // merge global array with current database array, add index active database
        $activeDatabases = array_merge($activeDatabases, array($i => $db));
        $i++;
	}
}

var_dump($activeDatabases);

?>
