<?php

    class projectApp {
        private $conn;

        public function __construct()
        {
            #database host, database user, database pass, database name
            #connection with database
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = "project";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn){
                die("Database Connection Error!");
            }
        }

        public function add_data($data) {
            $std_firstname = $data['firstName'];
            $std_lastname = $data['lastName'];
            $std_email = $data['email'];
            $std_phone = $data['phoneNo'];
            $std_item = $data['itemNo'];
            $std_description = $data['description'];


            $query = "INSERT INTO order_info (firstName,lastName,email,mobileNo,itemNo,des) VALUES
            ('$std_firstname','$std_lastname','$std_email',$std_phone,$std_item,'$std_description')";

        }

        public function display_data(){
            $query = "SELECT * FROM order_info";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                return $returndata;
            }
        }

        public function display_data_by_id($id){
            $query = "SELECT * FROM order_info WHERE ID=$id";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                $studentData = mysqli_fetch_assoc($returndata);
                return $studentData;
            }
        }

        public function update_data($data) {
            $std_firstname = $data['u-std-firstname'];
            $std_lastname = $data['u-std-lastname'];
            $id_no = $data['std_id'];
            $std_email = $data['u-std-email'];
            $std_phoneno = $data['u-std-phoneno'];
            $std_itemno = $data['u-std-itemno'];
            $std_description = $data['u-std-description'];


            $query = "UPDATE order_info SET firstName='$std_firstname',lastName='$std_lastname',email='$std_email',mobileNo='$std_phoneno',itemNo='$std_itemno',des='$std_description' WHERE ID=$id_no ";

            if(mysqli_query($this->conn, $query)) {
                return "Information Updated Successfully!";
            }
        }

        public function delete_data($id) {
            $catch_img = "SELECT * FROM order_info WHERE ID=$id";
            $delete_std_info = mysqli_query($this->conn, $query);
            $std_infoDelete = mysqli_fetch_all();

            $query = "DELETE FROM order_info WHERE ID=$id";
            if(mysqli_query($this->conn, $query)){
                return "Deleted Successfully";
            }
        }

    } 


?>