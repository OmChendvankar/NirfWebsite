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
                    <p class="text-center fs-4 ">Employer Data</p>
                </div>
                <div class="d-flex justify-content-center">

                <div class="p-2 flex-fill bd-highlight ml-2">
    
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
                            Total number of Sponsored Projects in all
                        </label>
                        <input type="number" name="tot_no_of_sponsored_projects" class="form-control" placeholder="Enter the total number of sponsored projects recieved in the academic year" required>
                    </div>
                </div>


                <div class="p-2 flex-fill bd-highlight">

                    <div class="mb-3">
                        <label class="form-label">
                            Total number of Sponsored Projects from agencies
                        </label>
                        <input type="number" name="tot_no_of_sponsored_projects_from_agencies" class="form-control" placeholder="Enter the number of sponsored projects recieved from agencies in the academic year" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">
                            Total amount recieved through the sponsored projects recieved from agencies (inINR)
                        </label>
                        <input type="number" name="tot_amount_recieved_from_sponsored_projects_agencies" class="form-control" placeholder="amount recieved to the department from sponsored projects from the industries in academic year" required>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">
                            Total number of Sponsored Projects from industries
                        </label>
                        <input type="number" name="tot_no_of_sponsored_projects_from_industries" class="form-control" placeholder="number of Sponsored Projects from industries" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Total amount recieved through the sponsored projects recieved from industries (inINR)
                        </label>
                         <input type="number" name="tot_amount_recieved_from_sponsored_projects_industries" class="form-control" placeholder="amount recieved to the department from sponsored projects from the industries in academic year" required>
                    </div>
                </div>
            </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>