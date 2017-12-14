
<?php


/**
* Post Controller
*/
class Post
{
	// CRUD
	// ---------
	
	// Create
	public function create($title , $body){
		global $pdo;
		$stmt = $pdo->prepare("INSERT INTO post (title , body) VALUES (:title , :body)");
		$stmt->execute([
			':title' => $title,
			':body' => $body,
		]);

		return $pdo->lastInsertId();
	}
	
	// Read
	public function getPost($fetchStyle = PDO::FETCH_ASSOC){
		global $pdo;
		$stmt = $pdo->query("select * from post ORDER BY id DESC");

		return $stmt->fetch($fetchStyle);

	}
	public function getPostAll($fetchStyle = PDO::FETCH_ASSOC){
		global $pdo;
		$stmt = $pdo->query("select * from post ORDER BY id DESC");

		return $stmt->fetchAll($fetchStyle);
	}
	public function getPostById($id , $fetchStyle = PDO::FETCH_ASSOC){
		global $pdo;
		$stmt = $pdo->prepare("select * from post WHERE id = ?");
		$stmt->execute([ $id ]);

		return $stmt->fetch($fetchStyle);
	}
	
	// Update
	public function update($id , $newtitle , $newbody){
		global $pdo;
		$stmt = $pdo->prepare("UPDATE post SET title = ? , body = ? WHERE id = ?");
		$stmt->execute([ $newtitle , $newbody , $id ]);
	}
	
	// Delete
	public function delete($id){
		global $pdo;
		$stmt = $pdo->prepare("DELETE FROM post WHERE id = ?");
		$stmt->execute([ $id ]);
	}
}