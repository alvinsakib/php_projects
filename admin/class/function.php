<?php  

    class blog{
        private $conn;

        public function __construct()
        {
            #database host, database user, database pass, database name
            #connection with database
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = "blogproject";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn){
                die("Database Connection Error!");
            }
        }

        public function admin_login($data){
            $email = $data['admin-email'];
            $password = md5($data['admin-pass']);

            $query = "SELECT * FROM admin_info WHERE admin_email='$email' AND admin_pass='$password'";

            if(mysqli_query($this->conn, $query)){
                $admin_info = mysqli_query($this->conn, $query);

                if($admin_info){
                    header("location:dashboard.php");
                    $admin_data = mysqli_fetch_assoc($admin_info);
                    session_start();
                    $_SESSION['adminID']=$admin_data['id'];
                    $_SESSION['adminName']=$admin_data['admin_name'];

                }
            }
        }
    }












?>