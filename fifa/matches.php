<?php

include 'db.php';



class Matches {



function getMatches(){

	

	$sql = "SELECT * FROM game ORDER BY game_id";                     	

  try {

	$db = getDB();

	$stmt = $db->query($sql);  

	$users = $stmt->fetchAll(PDO::FETCH_OBJ);

	return '{"matches": ' . json_encode($users). '}';

	} catch(PDOException $e) {

			

		echo '{"error":{"text1":'. $e->getMessage() .'}}'; 

	}

}

}	
