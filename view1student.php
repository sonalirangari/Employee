<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Form</title>
    </head>
    <body style="margin-top: 100px;background-color: grey;">
        <?php
         include './DAL/DBconnection.php';
        ?>
        <div >
            <?php
            $obj= new DBConnect();
            
            $res= $obj->view_single($id);
            $row = mysqli_fetch_array($res)
            ?>
            <form method="post" action="BAL/addStudent.php" >
                <center>
                <table>
                    <thead>
                    <th>Student Data</th>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <th>
                                <input type="text" name="name" value="<?php echo$row['name'];?>" >
                            </th>
                        </tr>
                        <tr>
                            <td>
                               <label>Email</label>
                            </td>
                            <th>
                                <input type="email" name="email" value="<?php echo$row['email'];?>">
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Contact No</label>
                            </td>
                            <th>
                                <input type="telephone" name="contact" value="<?php echo$row['contact_no'];?>">
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label>Address</label>
                            </td>
                            <th>
                                <input type="text" name="address" value="<?php echo$row['address'];?>">
                            </th>
                        </tr>
                        <tr>
                            <td>
                               <label>City</label>
                            </td>
                            <th>
                                <input type="text" name="city" value="<?php echo$row['city'];?>">
                            </th>
                        </tr>
                        <tr>
                            <td>
                               <label>Education</label>
                            </td>
                            <th>
                                <input type="text" name="education" value="<?php echo$row['education'];?>">
                            </th>
                        </tr>
                        
                    </tbody>
                </table>
                    <button>Submit</button>
                <button>Reset</button>
                </center>
                
            </form>
        </div>
    </body>
</html>
