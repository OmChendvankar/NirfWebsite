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
                    <p class="text-center fs-4 ">Financial Expenditure</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="year" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    <h5><b>Financial Resources: Utilised Amount for the Capital & Operational expenditure</b></h5>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    <h5 style="color:red;"><b> i) Annual Capital Expenditure on Academic Activities and Resources (excluding expenditure on buildings)</b></h5>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    <h5 style="color:red;"><b> Financial Year 2022-23</b></h5>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Library
                    </label>
                    <input type="number" name="library" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    New Equipement for Laborities
                    </label>
                    <input type="number" name="laboratory" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Engineering Workshops
                    </label>
                    <input type="number" name="Engineering Workshops" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Studios
                    </label>
                    <input type="number" name="studios" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Other expenditure on creation of Capital Assets (excluding expenditure on Land and Building)
                    </label>
                    <input type="number" name="other expenditure" class="form-control" placeholder="Enter Amount spent" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">
                    <h5 style="color:red;"><b>  ii) Annual Operational Expenditure</b></h5>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    <h5 style="color:red;"><b> Financial Year 2022-23</b></h5>
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Salaries (Teaching and Non Teaching staff)
                    </label>
                    <input type="number" name="salary" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Maintenance of Academic Infrastructure or consumables,  running expenditures etc. (excluding maintenance of hostels and allied services)
                    </label>
                    <input type="number" name="Maintenance of Academic" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Seminars/Conferences/Workshops
                    </label>
                    <input type="number" name="Seminars/Conferences/Workshops" class="form-control" placeholder="Enter Amount spent" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>