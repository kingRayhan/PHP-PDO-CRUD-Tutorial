
<?php


/**
* Post Controller
*/
class Post
{
	// CRUD
	// ---------
	
	// Create
	
	// Read
	public function getPost($fetchStyle = PDO::FETCH_ASSOC){
		global $pdo;
		$stmt = $pdo->query("select * from post");

		return $stmt->fetch($fetchStyle);

	}
	public function getPostAll($fetchStyle = PDO::FETCH_ASSOC){
		global $pdo;
		$stmt = $pdo->query("select * from post");

		return $stmt->fetchAll($fetchStyle);
	}
	public function getPostById($id , $fetchStyle = PDO::FETCH_ASSOC){
		global $pdo;
		$stmt = $pdo->prepare("select * from post WHERE id = ?");
		$stmt->execute([ $id ]);

		return $stmt->fetch($fetchStyle);
	}
	
	// Update
	
	// Delete
}