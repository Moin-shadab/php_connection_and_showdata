<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db = "student";
          $conn = mysqli_connect($servername, $username, $password,$db);
          // $database = mysqli_select_db($conn,$db);
          if($conn){
            echo "Connected Successfully";
          }
          else {
            // echo "Not Connected";
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $sql = 'select * from student';
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
          while($row = mysqli_fetch_assoc($result)){
            // $row = mysqli_fetch_assoc($result);
            // echo var_dump($row);
            echo $row['student_id'].$row['first_name'].$row['last_name'].$row['class'].$row['city'];
            echo '<br>';
          echo "<tr align='center'>";
            echo "<td>" . $row['student_id'] . "</td>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['last_name']."</td>";
            echo "<td>".$row['class']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "</tr>";
          }
 ?>
