<?php echo 'TEST'; ?>

<?php
	include_once 'C:\xampp\htdocs\Joblister\templates\loginpage.php';
	include_once 'Database.php';
	include_once 'job.php';
	include_once 'Template.php';
	include_once 'C:\xampp\htdocs\Joblister\config\config.php';
	include_once 'C:\xampp\htdocs\Joblister\config\init.php';
	include_once 'C:\xampp\htdocs\Joblister\index.php';
	include_once 'C:\xampp\htdocs\Joblister\templates\frontpage.php';
	include_once 'C:\xampp\htdocs\Joblister\templates\inc\footer.php';
	include_once 'C:\xampp\htdocs\Joblister\templates\inc\header.php';
	
?>
<?php 
	class validate
	{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}
	}

 function test_input($id) { 
	
	$data = trim($data); 
	$data = stripslashes($data); 
	$data = htmlspecialchars($data);
	$data = $this->db->resultSet();
	return $data; 

if($data["REQUEST_METHOD"]== "POST") { 
	
	$adminname = test_input($_POST["adminname"]); 
	$password = test_input($_POST["password"]); 
	$stmt = $this->db->prepare("SELECT * FROM adminlogin"); 
	$stmt->execute(); 
	$users = $stmt->fetchAll();}
	
	foreach($users as $user) { 
		
		if(($user['adminname'] == $adminname) && 
			($user['password'] == $password))
		{ 
				header("Location: adminpage.php"); 
		}
	
		else 
		{ 
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die(); 
		}
	}
}
