<?php  
 $connect = mysqli_connect("localhost", "root", "", "jobPortal");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM skills WHERE skillName LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["skillName"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Skill Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  