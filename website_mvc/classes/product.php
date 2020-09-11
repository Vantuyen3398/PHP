<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
	/**
	 * 
	 */
	class product 
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db =new Database();
			$this->fm =new Format();
		}
		public function insert_product($data,$files){


			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$category = mysqli_real_escape_string($this->db->link, $data['category']);
			$brand = mysqli_real_escape_string($this->db->link, $data['brand']);
			$product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);
			// Upload image
			$permited = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if($productName=="" || $category=="" || $brand=="" || $product_desc=="" || $price=="" || $type=="" || $file_name=="" ){
				$alert = "<span class='success'>Fields must be not empty</span>";
				return $alert;
			}else{
				move_uploaded_file($file_temp, $uploaded_image);
				$query ="INSERT INTO tbl_product(productName, catId, brandId, product_desc, price, image, type) VALUES ('$productName', '$category', '$brand', '$product_desc', '$price', '$unique_image', '$type')" ;
				$result = $this->db->insert($query);
				if($result){
					$alert ="<span class='success'>Insert product Successfully</span>";
					return $alert;
				}else{
					$alert ="<span class='success'>Insert product not Successfully</span>";
					return $alert;
				}
			}
		}
		public function show_product(){
				$query = "
							SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName FROM tbl_product 
							INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId 
							INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId 
							ORDER BY tbl_product.productId desc";
				// $query = "
				//  			SELECT p.*, c.catName, b.brandName FROM tbl_product as p, tbl_category as c, tbl_brand as b 
				//  			WHERE p.catId=c.catId AND p.brandId=b.brandId
				//  			ORDER BY p.productId desc";
				$result = $this->db->select($query);
				return $result;
		}
		public function getproductbyId($id){
			$query ="SELECT * FROM tbl_product WHERE productId ='$id'" ;
			$result = $this->db->select($query);
			return $result;
		}
		public function update_product($date,$files,$id){

			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$category = mysqli_real_escape_string($this->db->link, $data['category']);
			$brand = mysqli_real_escape_string($this->db->link, $data['brand']);
			$product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);
			// Upload image
			$permited = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if($productName=="" || $category=="" || $brand=="" || $product_desc=="" || $price=="" || $type==""){
				$alert = "<span class='success'>Fiels must be not empty</span>";
				return $alert;
			}else{

				//Nếu người dùng chọn ảnh
				if(!empty($file_name)){

					if($file_size > 2048){

						$alert ="<span class='error'>Image size should be less then 2MB!</span>";
						return $alert;

					}elseif (in_array($file_ext, $permited) === false) {

						//echo "<span class = 'error'>You can upload only:-",implode(',' $permited)."</span>";
						$alert ="<span class='error'>You can upload only:-".implode(',', $permited)."</span>";
						return $alert;
					}
					move_uploaded_file($file_temp, $uploaded_image);
					$query ="UPDATE tbl_product SET 
							productName = '$productName',
							catId = '$category',
							brandId = '$brand',
							product_desc = '$product_desc',
							price = '$price',
							image = '$unique_image',
							type = '$type',
							WHERE productId = '$id'";
							$result = $this->db->update($query);
							if($result){
								$alert ="<span class='success'>Update product Successfully</span>";
								return $alert;
							}else{
								$alert ="<span class='success'>Update product not Successfully</span>";
								return $alert;
							}
				}else{
					//Nếu người dùng không chọn ảnh
					$query ="UPDATE tbl_product SET 
							productName = '$productName',
							catId = '$category',
							brandId = '$brand',
							product_desc = '$product_desc',
							price = '$price',
							type = '$type',
							WHERE productId = '$id'";
					}
					$result = $this->db->update($query);
					if($result){
						$alert ="<span class='success'>Update product Successfully</span>";
						return $alert;
					}else{
						$alert ="<span class='success'>Update product not Successfully</span>";
						return $alert;
						}
				}
		}
		public function del_product($id){
			$query ="DELETE FROM tbl_product WHERE productId ='$id'" ;
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Delete product Successfully</span>";
				return $alert;
			}else{
					$alert ="<span class='success'>Delete product not Successfully</span>";
					return $alert;
				}
		}
		//END BACKEND
		public function getproduct_feathered(){
			$query ="SELECT * FROM tbl_product WHERE type ='0'" ;
			$result = $this->db->select($query);
			return $result;
		}
		public function getproduct_new(){
			$query ="SELECT * FROM tbl_product ORDER BY productId DESC LIMIT 4" ;
			$result = $this->db->select($query);
			return $result;
		}
		public function get_details($id){
			$query = "
						SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName FROM tbl_product 
						INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId 
						INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId 
						WHERE tbl_product.productId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function getLastestDell(){
			$query ="SELECT * FROM tbl_product WHERE brandId = '6' ORDER BY productId DESC LIMIT 1" ;
			$result = $this->db->select($query);
			return $result;
		}
		public function getLastestOppo(){
			$query ="SELECT * FROM tbl_product WHERE brandId = '7' ORDER BY productId DESC LIMIT 1" ;
			$result = $this->db->select($query);
			return $result;
		}
		public function getLastestApple(){
			$query ="SELECT * FROM tbl_product WHERE brandId = '2' ORDER BY productId DESC LIMIT 1" ;
			$result = $this->db->select($query);
			return $result;
		}
		public function getLastestSamsung(){
			$query ="SELECT * FROM tbl_product WHERE brandId = '3' ORDER BY productId DESC LIMIT 1" ;
			$result = $this->db->select($query);
			return $result;
		}
	}
?>
