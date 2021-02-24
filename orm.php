 <?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '111';
         $dbname = 'roadmap';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

         if( $conn->connect_error ) {
            die('Could not connect: ' . $conn->connect_error);
         }
         $sql = 'SELECT * FROM checkpoint c ORDER BY c.index_nuber ASC';
         //return sql command result
         $result = $conn->query($sql);
         //Gets needed data
        $checkpoints = $result->fetch_all(MYSQLI_ASSOC);

         $conn->close();
      ?>