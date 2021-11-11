 <?php
 include('connection.php');
 $result=mysqli_query($conn,"select * from uploads");;
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['file']."</td>
                                      
                   </tbody>
                    "
                  ;
                }
            ?>