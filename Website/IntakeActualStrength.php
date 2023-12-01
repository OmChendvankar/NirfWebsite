<?php
include 'config.php';
require "header.php";

// $year= date("Y");
// $pyear= $year - 1;
// $A_YEAR= $pyear . '-' . $year;

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
                    <p class="text-center fs-4 ">Intake and Actual Strength </p>
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
                    <input type="number" name="Add Department ID" class="form-control" required>
                </div>   
                <div class="mb-3">
                    <label class="form-label">
                        Program Code
                    </label>
                    <input type="number" name="Add Program Code" class="form-control" required>
                </div>                
                <div class="mb-3">
                    <label class="form-label">
                        Total Number of Students Intake
                    </label>
                    <input type="number" name="Add Total Student Intake" placeholder="Enter Total Student Intake" class="form-control" required>
                </div>   
                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students 
                    </label>
                    <input type="number" name="total number of Male Students" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students 
                    </label>
                    <input type="number" name="total number of Female Students" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students within state
                    </label>
                    <input type="number" name="total number of Male Students within state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students within state
                    </label>
                    <input type="number" name="total number of Female Students within state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students outside state
                    </label>
                    <input type="number" name="total number of Male Students outside state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students outside state
                    </label>
                    <input type="number" name="total number of Female Students outside state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students outside country
                    </label>
                    <input type="number" name="total number of Male Students outside country" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students outside country
                    </label>
                    <input type="number" name="total number of Female Students outside country" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Economic Backward
                    </label>
                    <input type="number" name="total number of Male Students Economic Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Economic Backward
                    </label>
                    <input type="number" name="total number of Female Students Economic Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Social Backward(SC/ST/OBC)
                    </label>
                    <input type="number" name="total number of Male Students Social Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Social Backward(SC/ST/OBC)
                    </label>
                    <input type="number" name="total number of Female Students Social Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from Government
                    </label>
                    <input type="number" name="total number of Male Students Receiving scholarship from Government" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from Government
                    </label>
                    <input type="number" name="total number of Female Students Receiving scholarship from Government" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from Institution
                    </label>
                    <input type="number" name="total number of Male Students Receiving scholarship from Institution" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from Institution
                    </label>
                    <input type="number" name="total number of Female Students Receiving scholarship from Institution" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from private Bodies
                    </label>
                    <input type="number" name="total number of Male Students Receiving scholarship from private Bodies" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from private Bodies
                    </label>
                    <input type="number" name="total number of Female Students Receiving scholarship from private Bodies" placeholder="Enter Count" class="form-control" required>
                </div>
                
                <button type="submit" class="submit" onclick="return Validate()">Submit</button>
            </form>
        </div>
<?php
require "footer.php";
?>          