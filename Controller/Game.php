<?php

class Game
{
	public  $model, $action;
	public $dataCat, $dataPub;
	function __construct()
	{
		$this->model = new Model_Game();
		$action = getIndex('action', 'index');
		//print_r($_GET);
		if (method_exists($this,$action)){
			$this->$action();
		}
		else {
			echo "Chua xd function {$this->action} "; exit;
		}
		
	}

/**
 * [index description]
 * @return [type] [description]
 */
function index()
	{
		$data = $this->model->getnGame(8);
		$subview = 'game_index.php';
		include "View/trangchu.php";
	}
function cart()
{
	$this->model = new Model_Game();

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>alert("Product is Added to Cart")</script>';
                echo '<script>window.location="index.php?controller=Game&action=cart"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="index.php?controller=Game&action=cart"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
            echo '<script>alert("Product is Added to Cart")</script>';
        }
    }

    if (isset($_GET["action2"])){
        if ($_GET["action2"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="index.php?controller=Game&action=cart"</script>';
                }
            }
        }
    }
    $data = $this->model->getnGame(8);
		$subview = 'game_index.php';

		include "View/trangchu.php";
}

	function detail()
	{
		//print_r($_GET);exit;
		$product_id=getIndex('id');
		if ($product_id !='')
		{
			$data =$this->model->detail($product_id);
			
		}

		$subview = 'product_detail.php';
		include "View/trangchu.php";
	}

	

	function insert()
	{

		$_SESSION['info']='';
		$arr = array();
		$arr[] = postIndex('pro_name');
		/*if ($this->EXISTS_ID('book', 'book_id', $arr['book_id'] ))
		{
			return -1;//da co book_id trong table sach
		}*/

		$arr[] 	= postIndex('price');
		$arr[] = postIndex('producer');
		$arr[] 		= postIndex('quantity_available');
		$arr[] 		= postIndex('details');
		$sql="insert into game(pro_name, price, producer, quantity_available, details ";
		if ($_FILES['img']['error'] ==0)
		{
			move_uploaded_file($_FILES['img']['tmp_name'], UPLOAD_IMG .$_FILES['img']['name']);
			$arr[] 		= $_FILES['img']['name'];
			$sql .=", image ";
		}

		$sql .=")";
		
		if (Count($arr)==6)
		$sql .=" values(?, ?, ?, ?, ?, ?)";
		else
		$sql .=" values(?, ?, ?, ?, ?, ?, ?)";
		$n= $this->model->updateQuery($sql, $arr);
		if ($n==1)
		{
			$_SESSION['info']="Đã thêm  ". $arr[0];
			header('location:index.php?controller=Admin');
			exit;
		}
		else
			{
			$_SESSION['info']="Lỗi thêm... ". $arr[0];

	
		}

	}

	
	
}