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
                    <p class="text-center fs-4 ">Research Staff</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="year" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Department ID
                    </label>
                    <input type= number name="Department ID" class="form-control" placeholder="Enter Department ID" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Total Number of Research Staff (Male)
                    </label>
                    <input type= number name="Total number of research staff male" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Total Number Of Research Staff (Female)
                    </label>
                    <input type= number name="Total Number Of Research Staff (Female)" class="form-control" placeholder="Enter count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Agency Sponsoring
                    </label>
                    <input type= number name="Agency sponsoring" class="form-control" placeholder="Enter count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Amount Received
                    </label>
                    <input type= number name="Amount received" class="form-control" placeholder="Enter Amount" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>

