<?php
class Admin
{
	public $model;
	function __construct()
	{
		if (!isset($_SESSION['admin_login']))
		{
			$_SESSION['flash']="Khong duoc phep truy cap...";

			//header('location:login.html');
			echo "Không được phép truy cập! ";
			echo "<a href=index.php?controller=Login&action=index>Đăng nhập</a>";
			exit;
		}
		$this->model = new Model_Game();
		$action = getIndex('action', 'index');
		//print_r($_GET);
		if (method_exists($this,$action)){
			$this->$action();
		}
		else {
			echo "Chua xd function {$this->action} "; 
			exit;
		}
	}

	function index()
	{
		$this->model= new Model_Game();
		$data = $this->model->getGame();
		$admin_sub_view='admin_index.php';
		include ROOT ."/View/admin_layout1.php";
	}
	function import()
	{
		$this->model= new Model_Game();
		$data = $this->model->getGame();
		include ROOT ."/View/subview/import.php";
	}
	function postImport()
	{
		
		$this->model= new Model_Game();
		$data = $this->model->getGame();
	
		if (isset($_POST["import"])) {
		    
		    $fileName = $_FILES["file"]["tmp_name"];
		    
		    if ($_FILES["file"]["size"] > 0) {
		        
		        $file = fopen($fileName, "r");
		       
		        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
		        	$arr = array();
		        	
		        	if(count($column) < 5){
		        		var_dump($column);
		            	break;
		        	}

		            $product_id = "";
		            if (isset($column[0])) {
		                $product_id = $column[0];
		            }
		            $arr[] 	= $product_id;
		            $pro_name = "";
		            if (isset($column[1])) {
		                $pro_name = $column[1];
		            }
		            $arr[] 	= $pro_name;
		            $price = "";
		            if (isset($column[2])) {
		                $price = $column[2];
		            }
		            $arr[] 	= $price;
		            $image = "";
		            if (isset($column[3])) {
		                $image = $column[3];
		            }
		            $arr[] 	= $image;
		            $producer = "";
		            if (isset($column[4])) {
		                $producer =$column[4];
		            }
		            $arr[] 	= $producer;
		            $quantity_available = "";
		            if (isset($column[5])) {
		                $quantity_available = $column[5];
		            }
		            $arr[] 	= $quantity_available;
		            $details = "";
		            if (isset($column[6])) {
		                $details = $column[6];
		            }
		            $arr[] 	= $details;
		            
		            $sqlInsert = "INSERT into game (product_id,pro_name,price,image,producer,quantity_available,details)
		                   values (?,?,?,?,?,?,?)";
		            
		            $insertId = $this->model->insertQuery($sqlInsert, $arr);
		        
		            if (! empty($insertId)) {
		                $type = "success";
		                $_SESSION['success'] = 'success';
		                $message = "CSV Data Imported into the Database";
		            } else {
		                $type = "error";
		                $message = "Problem in Importing CSV Data";
		            }
		        }
		    }
		}
		header("Location: http://localhost/PHP-MVC/index.php?controller=Admin&action=import");
		die();
		// include ROOT ."/View/subview/import.php";
	}
}