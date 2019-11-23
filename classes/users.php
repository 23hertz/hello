<?php 


class Lists{


    public $db;
    private $Db_host = "localhost";
    private $Db_user = "root";
    private $Db_pass = "";
    private $Db_name = "todo";


    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host={$this->Db_host};dbname={$this->Db_name}",$this->Db_user,$this->Db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->db;   
             }

        catch (Exception $e) {
            echo "Connection Fail ...".$e->getMessage();
     }
    }


    public function todo_Insert($todo_title,$todo_description,$todo_date){

    	//$todo_date = date("d/m/y h:i:s");

        $stmt = $this->db->prepare("INSERT INTO todo (todo_title , todo_description,todo_date) VALUES (:todo_title , :todo_description, :todo_date)");

        $stmt->bindparam(":todo_title",$todo_title);
        $stmt->bindparam(":todo_description",$todo_description);
        $stmt->bindparam(":todo_date",$todo_date);
        
        $stmt->execute();

    }

    public function todo_Showall(){
    	$stmt = $this->db->prepare("SELECT * FROM todo");

    	$stmt->execute();

    	//check if there is a list or not

        if($stmt->rowCount() > 0){

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        	$getRow[] = $row; 

        }              


        }else{
        	echo "No row available";
        }

        return $getRow;
    	}

    	public function todo_Delete($id){

    		$stmt=$this->db->prepare("DELETE FROM todo WHERE id=:id");

    		$stmt->bindparam(":id",$id);

    		$stmt->execute();
    	}
   

		
   
}

?>