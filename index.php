<h1><?php echo "bienvenue sur docker, nous utilisons la php : ". phpversion();?></h1>
<?php
$host = 'mysql' ;
$charset = "utf8";
$db = 'docker_database';
$user = 'root';
$password = '1234';
$conn = new mysqli($host , $user , $password , $db);
if($conn->connect_error){
	echo 'La connexion à mysql a échouée'. $conn->connect_error;
} else {
	echo 'La connextion mysql a reussit ! ;)';
}

$sql = 'SELECT * FROM Persons';

if($result = $conn->query($sql)) {
	while ($data = $result->fetch_object()) {
		$Persons[] = $data;
	}
}

foreach ($Persons as $person) {
    echo "<br>";
    echo $person->FirstName;
    echo "<br>";
}

?>
	
