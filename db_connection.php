<?php
class Database
{
     private $conn = NULL;
    private $result = NULL;
        
     public function connect()
     {
       
         $this->conn = mysqli_connect("fdb1033.awardspace.net", "4424305_smartdoor",
                       "Toan13009020030@", "4424305_smartdoor", "3306");
        if (!$this->conn) {
            echo "Ket noi that bai";
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
     }

    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    public function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }
	public function getAllData()
    {
        $sql = "SELECT username, id_card, status, date FROM action ORDER BY date DESC";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
   }
        
 public function insertData($username, $id_card, $status, $date)
    {
        $sql = 'INSERT INTO `action`(`username`, `id_card`, `status`, `date`)
        VALUES 
        ("' . $username . '","' . $id_card . '","' . $status . '","' . $date .'")';
        return $this->execute($sql);
    }
   public function getUser($id_card)
{
    $sql = "SELECT `username` FROM account WHERE id_card = '$id_card'";
    $result = $this->conn->query($sql);

    // Kiểm tra xem truy vấn có lỗi hay không
    if (!$result) {
        die("Lỗi truy vấn: " . $this->conn->error);
    }

    // Lấy một hàng từ kết quả truy vấn
    $row = $result->fetch_assoc();

    // Trả về giá trị username hoặc null nếu không có dữ liệu
    return ($row !== null) ? $row['username'] : null;
}
     
         public function checkUser($username, $password, $table)
    {
        $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }
}

?>
