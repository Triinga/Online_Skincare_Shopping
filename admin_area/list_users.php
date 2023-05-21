<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">

    <?php 
    include('../includes/connect.php');

    $get_payments="SELECT * FROM `user_table`";
    $result=mysqli_query($con, $get_payments);
    $row_count=mysqli_num_rows($result);
        
        if($row_count==0){
            echo "<h2 class='text-danger text-center mt-5'>No users yet</h2>";
        }else{
            echo " <tr>
            <th>Sl no</th>
            <th>Username</th>
            <th>User Email</th>
            <th>User Image</th>
            <th>User address</th>
            <th>User mobile</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody class='bg-secondary text-light'>";

            $number=0;
            while($row_data=mysqli_fetch_assoc($result)){
                $user_id=$row_data['user_id'];
                $username=$row_data['username'];
                $user_email=$row_data['email'];
                $user_image=$row_data['image'];
                // $user_address=$row_data['user_address'];
                $number++;
                echo " 
                <tr>
                <td>$number</td>
                <td class=''>$username</td>
                <td>$user_email</td>
                <td><img src='../users_area/user_images/$user_image' alt='$username' class='product_img'</td>
              
                <td>$user_email</td>
                <a href='index.php?delete_user=<?php echo $user_id; ?>' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a>

                </tr>";
            


            }
        }
    
    ?>
        
       
    </tbody>
</table>

