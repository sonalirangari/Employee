<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Data</title>
    </head>
    <body style="margin-top: 100px;background-color: grey;color:white;">
        <?php
            include './DAL/DBconnection.php';
            ?>
        <div>
            <a href="add_data.php">Add Data</a>
        </div>
        <div>
            <?php
            $obj=new DBConnect();
            $res=$obj->view_all();
            
            
            ?>
            
           <center>

            <table>
                <thead>
                    <tr>
                        <th>Student View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Contact No</td>
                        <td>Address</td>
                        <td>City</td>
                        <td>Education</td>
                        <td>Action</td>
                    </tr>
                    <?php
                               while ($row = mysqli_fetch_array($res)) {
                            
                    ?>
                    <tr>
                        <td><?php echo $row['student_id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['contact_no']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['city']?></td>
                        <td><?php echo $row['education']?></td>
                        <td>
                            <a href="view1student.php?id=<?php $row['student_id'];?>">View</a>
                            <a href="BAL/upadte_student.php?id=<?php $row['student_id'];?>">Update</a>
                            <a href="BAL/delet_student.php?id=<?php echo $row['student_id'];?>">Delete</a>
                              
                        </td>
                        
                    </tr>
                    <?php
                     }
                    ?>
                </tbody>
            </table>
                               </center>

            
        </div>
        
    </body>
</html>
