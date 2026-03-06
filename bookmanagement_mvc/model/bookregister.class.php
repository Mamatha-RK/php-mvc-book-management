<?php
class bookregister
{
	public function getbooklist($db)
	{

		$insertQry = "SELECT `Slno`,`bookNumber`,`bookName`,`author`, `publishedYear`, `copies`, `cost`, `description`  FROM `bookstore` WHERE 1";
		$stmt = $db->query($insertQry);
		$user = $stmt->fetchALL(PDO::FETCH_ASSOC);

		return $user;
	}



	public function insertBook($qry, $db)
	{
		$resultlist = $db->query($qry);
		return 1;
	}


	public function editbook($editqry, $db)
	{
		

		$resultlist = $db->query($editqry);
		return $resultlist;
	}

	public function updateBook($updateqry,$db){
		
		$resultlist = $db->query($updateqry);
		return 1;
	}

	public function deletebook($del, $db)
	{
		$resultlist = $db->query($del);
		return 1;
	}
}

?>