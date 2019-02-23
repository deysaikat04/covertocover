<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 20-08-2017
 * Time: 10:51
 */
class BookModel extends CI_Model{   
    
    //write your functions here and mention the module with a comment
    // a sample function for your help
    /*public function get_hotel($loc){
        $query = $this->db->query("SELECT * FROM hotel_tb h, image_tb i where h.id = i.h_id AND i.is_cover=1 AND city = '$loc'");
        $result = $query->result();
        return $result;
    }*/

    //insert seller details to employee table
    public function insertEmployee($data){
        
        return $this->db->insert('user',$data);
      
    }

    public function getCoverImage($id){
        $sql = "SELECT path FROM  image_tb  where bookid = $id AND is_cover=1 ";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }

    // checking user exists
    public function checkUserExist($mail)
    {
        $this->db->where('email',$mail);
        $this->db->from('customer');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return $query->result();
            #return false;
        }


    }

    // registering a customer
    public function addCustomer($customerData)
    {
        if ($this->db->insert('customer', $customerData)) {
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }
    }
		// customer log in check
		public function getRows($mail)
		{
				$sql = "select * from customer where email = '$mail'";
        $query = $this->db->query($sql);
        $data = $query->result_array();
       /* $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }*/
				return $data;
		}

    public function getToptenId()
    {
        $sql = "SELECT * FROM `topten` order by id DESC";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getBooks()
    {
        $sql = "select * from books where status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getBooksSearch($name)
    {
        $sql = "select * from books where name LIKE '%$name%' and status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
    public function getDiscount($id)
    {
        $sql = "select * from discount where id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getCustomerData($id)
    {
        $sql = "select * from customer where id = $id and status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
    public function updateCustomerData($where, $customerData)
		 {
        $this->db->where($where);
        if($this->db->update('customer', $customerData)){
            $lastDataId = $this->db->insert_id();

            return 1;
        } else {
            return false;
        }
    }
	/****************************************  Joining  ****************************************************/
	
		public function getBookIdBySeller($id)
    {
        $sql = "select * from discount where sellerid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getSellerIdByBookId($id)
    {
        $sql = "select * from discount where bookid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getEditionIdByBook($id)
    {
        $sql = "select * from bookstoedition where bookid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function geAuthPubIdByEdition($id)
    {
        $sql = "select * from editiontoauthor where editionid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getOrderOfCustomer($id)
    {
        $sql = "select * from order_tb where customerid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	/***********************************************************/
		public function categoryName($name)
		{
			 $sql = "select id from category where name = '$name'";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
		}
		public function bookDataByCat($id)
		{
			 $sql = "select * from books where category = $id and status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
		}
		// get bookdata 
		public function getBookData($id)
    {
        $sql = "select * from books where id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getBookDataRecomm($id)
    {
        $sql = "select * from books where id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
       /* $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }*/
			return $data;
    }
		public function getBookDiscount($id)
    {
        $sql = "select discount from discount where bookid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	
		// get edition data 
		public function getEditionData($id)
    {
        $sql = "select * from bookedition where id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		// get authordata 
		public function getAuthorData($id)
    {
        $sql = "select name from author where id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getAuthorDataByEdition($aid, $eid)
    {
        $sql = "select a.name from author a, editiontoauthor e where e.editionid = $eid and e.authorid = a.$aid and ";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	// get publisher data 
		public function getPublisherData($id)
    {
        $sql = "select * from publisher where id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	
    public function getAlbumDetailsbyId($id)
    {
        $sql = "select * from books a where a.id = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	 public function getImageData($id)
    {
        $sql = "select path from `image_tb` where bookid = $id";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	
		public function count() 
    {
        $query = $this->db->query("select * from books WHERE status=1");
        $row_count = $query->num_rows();
        return $row_count;
    }  
		public function fetch_data($limit, $start)
    {
      $results = array();
      //if (!$start) { $start = 1; }
        $start_from = ($start-1) * $limit;      
 
        $query = $this->db->query("select * from books p, image_tb i where p.status=1 AND i.is_cover = 1 AND i.bookid = p.id order by p.id LIMIT $limit OFFSET $start_from");
                
         if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;

            }
            return $data;
        }
        return false;
    }
	
		 public function addToCart($cartData)
		 {
        if($this->db->insert('cart', $cartData)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }
    }
		public function updateCart($where,$array)
		 {
        $this->db->where($where);
        if($this->db->update('cart', $array)){
            $lastDataId = $this->db->insert_id();

            return 1;
        } else {
            return false;
        }
    }
		
	public function InsertOrder($Data)
	{
		 if($this->db->insert('order_tb', $Data)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }
	}
	public function InsertRating($Data)
	{
		 if($this->db->insert('rating', $Data)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }
	}
	
	public function updateCartAfterOrder($where,$array)
	 {
			$this->db->where($where);
			if($this->db->update('cart', $array)){
					$lastDataId = $this->db->insert_id();

					return 1;
			} else {
					return false;
			}
	}
	public function updateBooksAfterOrder($where,$array)
		 {
        $this->db->where($where);
        if($this->db->update('books', $array)){
            $lastDataId = $this->db->insert_id();

            return 1;
        } else {
            return false;
        }
    }
		public function getCartCountByUser($id)
    {
        $sql = "select count(id) as no from `cart` where customerid = $id AND status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getCartByUser($id)
    {
        $sql = "select * from `cart` where customerid = $id AND status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getCartByUserZero($id)
    {
        $sql = "select * from `cart` where customerid = $id AND status = 0";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getAllCartByUser($id)
    {
        $sql = "select * from `cart` where customerid = $id ";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getDiscountData($id)
    {
        $sql = "select * from `discount` where bookid = $id ";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
	  public function removeFromCart($bookid, $id)
    {
        $sql = "UPDATE `cart` SET status = 0 where bookid = $bookid AND customerid = $id ";
        $query = $this->db->query($sql);
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
	
		public function allBooksRateAfterOrder($id)
    {
        $sql = "SELECT count(id) as no, SUM(rating) as sum FROM `rating` WHERE `bookid` = $id order by rating";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        
        return $data;        
    }
		public function updateRatingAfterOrder($where,$array)
		 {
        $this->db->where($where);
        if($this->db->update('books', $array)){
            $lastDataId = $this->db->insert_id();

            return 1;
        } else {
            return false;
        }
    }
	 public function getCusFromCart()
    {
        $sql = "SELECT DISTINCT customerid FROM `cart`";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getOrderSummary($id)
    {
        $sql = "select * from order_tb where customerid = $id and paymentStatus = 0";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function updateOrderPayment($where,$array)
		 {
        $this->db->where($where);
        if($this->db->update('order_tb', $array)){
            $lastDataId = $this->db->insert_id();

            return 1;
        } else {
            return false;
        }
    }
	
	//***************************************************************************************

	public function similarityDistance($preferences, $person1, $person2)
    {
        $similar = array();
        $sum = 0;
    
        foreach($preferences[$person1] as $key=>$value)
        {
            if(array_key_exists($key, $preferences[$person2]))
                $similar[$key] = 1;
        }
        
        if(count($similar) == 0)
            return 0;
        
        foreach($preferences[$person1] as $key=>$value)
        {
            if(array_key_exists($key, $preferences[$person2]))
                $sum = $sum + pow($value - $preferences[$person2][$key], 2);
        }
        
        return  1/(1 + sqrt($sum));     
    }
    
    
    public function matchItems($preferences, $person)
    {
        $score = array();
        
            foreach($preferences as $otherPerson=>$values)
            {
                if($otherPerson !== $person)
                {
                    $sim = $this->similarityDistance($preferences, $person, $otherPerson);
                    
                    if($sim > 0)
                        $score[$otherPerson] = $sim;
                }
            }
        
        array_multisort($score, SORT_DESC);
        return $score;
    
    }
    
    
    public function transformPreferences($preferences)
    {
        $result = array();
        
        foreach($preferences as $otherPerson => $values)
        {
            foreach($values as $key => $value)
            {
                $result[$key][$otherPerson] = $value;
            }
        }
        
        return $result;
    }
    
    
    public function getRecommendations($preferences, $person)
    {
        $total = array();
        $simSums = array();
        $ranks = array();
        $sim = 0;
        
        foreach($preferences as $otherPerson=>$values)
        {
            if($otherPerson != $person)
            {
                $sim = $this->similarityDistance($preferences, $person, $otherPerson);
            }
            
            if($sim > 0)
            {
                foreach($preferences[$otherPerson] as $key=>$value)
                {
                    if(!array_key_exists($key, $preferences[$person]))
                    {
                        if(!array_key_exists($key, $total)) {
                            $total[$key] = 0;
                        }
                        $total[$key] += $preferences[$otherPerson][$key] * $sim;
                        
                        if(!array_key_exists($key, $simSums)) {
                            $simSums[$key] = 0;
                        }
                        $simSums[$key] += $sim;
                    }
                }
                
            }
        }

        foreach($total as $key=>$value)
        {
            $ranks[$key] = $value / $simSums[$key];
        }
        
    array_multisort($ranks, SORT_DESC);    
    return $ranks;
        
    }
	
		public function getRecommBookData($bookname, $bookrating)
    {
        $sql = "SELECT * FROM `books` WHERE `name`= '$bookname' AND `rating` = $bookrating LIMIT 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		
}