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
                    <p class="text-center fs-4 ">Faculty Details</p>
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
                    <input type="number" name="department_Id" class="form-control" placeholder="Enter the Department ID" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Faculty Name
                    </label>
                    <input type="text" name="Faculty Name" class="form-control" placeholder="Enter Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Gender
                    </label>
                    <select name="gender" >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="other">other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Designation
                    </label>
                    <select name="designation" >
                        <option value="PROFESSOR">PROFESSOR</option>
                        <option value="ASSOCIATE PROFESSOR">ASSOCIATE PROFESSOR</option>
                        <option value="ASSISTANT PROFESSOR">ASSISTANT PROFESSOR</option>
                        <option value="ADJUNCT PROFESSOR">ADJUNCT PROFESSOR</option>
                        <option value="CHAIR PROFESSOR">CHAIR PROFESSOR</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Date of Birth
                    </label>
                    <input type="date" name="Date of Birth" class="form-control" placeholder="Enter DOB" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Age
                    </label>
                    <input type="number" name="Age" class="form-control" placeholder="Enter Age" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Qualification
                    </label>
                    <input type="text" name="qualification" class="form-control" placeholder="Enter Highest Qualification" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Experience
                    </label>
                    <input type="text" name="experience" class="form-control" placeholder="Enter Experience(in months)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        PAN Number
                    </label>
                    <input type="text" name="pan_number" class="form-control" placeholder="Enter PAN Number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Whether faculty is associated with the institute in previous academic year(2022-2023)?
                    </label>
                    <select name="designation" >
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Facuty Experience in the relevent subject Area(Teaching & Industrial)- 31 July-2023
                    </label>
                    <input type="text" name="Teaching" class="form-control" placeholder="Enter teaching exerience (in Months)" required>
                    <input type="text" name="Industrial" class="form-control" placeholder="Enter Industrial exerience (in Months)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Currently working with institution?
                    </label>
                    <input type="text" name="Date of joining" class="form-control" placeholder="Date of Joining the institute" required>
                    <input type="text" name="latest joining" class="form-control" placeholder="Latest Joining" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Association Type
                    </label>
                    <select name="Association Type" >
                        <option value="REGULAR">REGULAR</option>
                        <option value="CONTRACTUAL">CONTRACTUAL</option>
                        <option value="VISITING">VISITING</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Email ID of Faculty(Official Email ID)
                    </label>
                    <input type="email" name="Email ID of Faculty" class="form-control" placeholder="Enter Email ID" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                       Mobile Number of Faculty
                    </label>
                    <input type="number" name="Mobile Number of Faculty" class="form-control" placeholder="Enter Mobile number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                       Name of Award
                    </label>
                    <input type="text" name="Name of Award" class="form-control" placeholder="Enter Name of Award" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Level of Award
                    </label>
                    <select name="Level of Award" >
                        <option value="NATIONAL">NATIONAL</option>
                        <option value="INTERNATIONAL">INTERNATIONAL</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                       Name of Award Agency
                    </label>
                    <input type="text" name="Name of Award Agency" class="form-control" placeholder="Enter Name of Award Agency" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                       Address of Award Agency
                    </label>
                    <input type="text" name="Address of Award Agency" class="form-control" placeholder="Enter Address of Award Agency" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                       Year of Received Award
                    </label>
                    <input type="year" name="Year of Received Award" class="form-control" placeholder="Enter Year of Received Award" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Email ID of Agency
                    </label>
                    <input type="email" name="Email ID of Agency" class="form-control" placeholder="Enter Agency Email ID" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                       Contact of Agency
                    </label>
                    <input number="text" name="Contact of Agency" class="form-control" placeholder="Enter Mobile number" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





