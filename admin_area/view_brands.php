<h3 class="text-center text-success">All Brands</h3>
<!-- <table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>Slno</th>
            <th>Brand title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead> -->
    <!-- <tbody class="bg-secondary text-light"> -->
    <div class="card mt-5">
  <div class="card-header bg-info text-white">
    Categories
  </div>
  <div class="card-body">
    <div class="row">
        <?php
        $select_brand="SELECT * FROM `brands`";
        $result=mysqli_query($con, $select_brand);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $brand_id=$row['brand_id'];
            $brand_title=$row['brand_title'];
            $number++;

        ?>
      
          
            <!-- <td><a href='' class='text-light'><i class='fas fa-pen'></i></a></td>
        <td><a href='index.php?delete_brands=<?php echo $brand_id?>' 
        type="button" class=" text-light" data-toggle="modal" data-target="#exampleModal"
        class=''><i class='fas fa-trash'></i></a></td>
        </tr> -->
        
        <div class="col-md-3">
        <div class="card  mb-2">
          <div class="card-body ">
            <h5 class="card-title"><?php echo $brand_title; ?></h5>
            <a href='index.php?delete_brands=<?php echo $brand_id; ?>' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-body">
        <h4>Are you sure you want to delete it</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" 
        data-dismiss="modal"> <a href="./index.php?view_brands" 
        class='text-light text-decoration-none'>No</a></button>
        <button type="button" class="btn btn-primary"><a  href='index.php?
        delete_brands=<?php echo $brand_id?>' class=" text-light text-decoration-none" >Yes</a></button>
      </div>
    </div>
  </div>
</div>




   
     
     
