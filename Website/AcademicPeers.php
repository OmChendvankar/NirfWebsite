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
                    <p class="text-center fs-4 ">Academic Peers</p>
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
                        <input type="number" name="department_id" placeholder="enter the department ID" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Title
                    </label>
                    <input type="text" name="Title" class="form-control" placeholder="Enter Title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        First Name
                    </label>
                    <input type="text" name="First Name" class="form-control" placeholder="Enter First Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Last Name
                    </label>
                    <input type="text" name="Last Name" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Job Title
                    </label>
                    <input type="text" name="Job Title" class="form-control" placeholder="Enter Job Title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Institution
                    </label>
                    <input type="text" name="Institution" class="form-control" placeholder="Enter Institution" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Department
                    </label>
                    <input type="text" name="Department" class="form-control" placeholder="Enter Department" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Location
                    </label>
                    <input type="text" name="Location" class="form-control" placeholder="Enter Location" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Email
                    </label>
                    <input type="text" name="Email" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Phone
                    </label>
                    <input type="number" name="Phone" class="form-control" placeholder="Enter Phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Type
                    </label>
                    <select name="Type" >
                        <option value="INDIAN">INDIAN</option>
                        <option value="FOREIGN">FOREIGN</option>
                    </select>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





