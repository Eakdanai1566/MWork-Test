<?php
    
    class Access{    
        
        private function access_data($sql){
            require("conn.php");

            $result = $conn->query($sql);
            
            return $result;
        }

        public function show_data($sql ,$col){
            $res = $this->access_data($sql);
            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                  echo $row[$col];
                }
            }else{
                echo "0 results";
            }
        }
    }

?>