<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];


if (isset($_POST['submit'])){

    $male=$_POST['male_faculty'];
    $female=$_POST['female_faculty'];
    $other=$_POST['other'];

    $query="INSERT INTO `faculty_count`(`A_YEAR`, `DEPT_ID`, `NUM_OF_INTERN_MALE_FACULTY`, `NUM_OF_INTERN_FEMALE_FACULTY`, `NUM_OF_INTERN_OTHER_FACULTY`) 
    VALUES ('$A_YEAR','$dept','$male', '$female', '$other')";
    // $q=mysqli_query($conn,$query);
    if(mysqli_query($conn, $query)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}    
?>
        <div class="div">
            <form class="fw-bold" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center fs-4 ">Faculty Count</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="text" name="year1" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                       Department ID
                    </label>
                    <input type="text" name="dpt_id" value="<?php echo $dept?>" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total number of<b> MALE </b> International Faculty 
                    </label>
                    <input type="number" name="male_faculty" class="form-control" placeholder="Enter the number of registered international faculty members (male)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total number of<b> Female </b> International Faculty 
                    </label>
                    <input type="number" name="female_faculty" class="form-control" placeholder="Enter the number of registered international faculty members (female)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total number of International Faculty other
                    </label>
                    <input type="Text" name="other" class="form-control" placeholder="Enter the number of registered international faculty members (Other)">
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





