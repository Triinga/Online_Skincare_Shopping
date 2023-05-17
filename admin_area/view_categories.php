<h3 class="text-center text-success">All Categories</h3>
<!-- <table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>Slno</th>
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light"> -->

    <div class="card mt-5">
  <div class="card-header bg-info text-white">
    Categories
  </div>
  <div class="card-body">
    <div class="row">
        <?php
        $select_cat="SELECT * FROM `categories`";
        $result=mysqli_query($con, $select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];
            $number++;

        ?>
        <!-- <tr class="text-center">
            <td><?php echo $number; ?></td>
            <td><?php echo $category_title; ?></td>
            <td><a href='' class='text-light'><i class='fas fa-pen'></i></a></td>
        <td><a href='' class='text-light'><i class='fas fa-trash'></i></a></td>
        </tr> -->

        <div class="col-md-3">
        <div class="card  mb-2">
          <div class="card-body ">
            <h5 class="card-title"><?php echo $category_title; ?></h5>
            <!-- <a href="index.php?edit_category=<?php echo $product_id; ?>" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>  -->
            <a href='index.php?delete_category=<?php echo $category_id; ?>' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a>
          </div>
        </div>
      </div>
        
        <?php
        
    }
        ?>
<!-- 
    </tbody>
</table> -->

</div>
  </div>
</div>