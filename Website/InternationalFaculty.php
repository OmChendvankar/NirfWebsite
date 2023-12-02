<?php
include 'config.php';
require "header.php";
    
// if (isset($_POST['submit'])){

//     $categories=$_POST['categories'];
//     $sub_categories=$_POST['sub_categories'];
//     $title=$_POST['title'];
//     $image=$_FILES['image'];
//     $brief_desc=$_POST['brief_desc'];
//     $description=$_POST['description'];
//     $image_loc = $_FILES['image']['tmp_name'];
//     $image_name = $_FILES['image']['name'];
//     $img_des="img/".$image_name;
//     move_uploaded_file($image_loc,"img/".$image_name);

//     $query="INSERT INTO `article`(`cat_id`, `sub_cat_id`, `title`, `image`, `brief_desc`, `description`) 
//     VALUES ('$categories', '$sub_categories','$title','$img_des','$brief_desc', '$description')";
//     // $q=mysqli_query($conn,$query);
//     if(mysqli_query($conn, $query)){
//         echo "Records inserted successfully.";
//     } else{
//         echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
//     }
// }    
?>
        <div class="div">
            <form class="fw-bold" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center fs-4 ">International Faculty</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="year" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Dept ID
                    </label>
                    <input type="number" name="Enter Dept ID" class="form-control" placeholder="Dept ID" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total MALE Faculty Inbound
                    </label>
                    <input type="number" name="total number of Male Faculty Inbound" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total FEMALE Faculty Inbound
                    </label>
                    <input type="number" name="total number of Female Faculty Inbound" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total MALE Faculty Outbound
                    </label>
                    <input type="number" name="total number of Male Faculty Outbound" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total FEMALE Faculty Outbound
                    </label>
                    <input type="number" name="total number of Female Faculty Outbound" class="form-control"  required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>
