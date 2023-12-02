<?php
include 'config.php';
require "header.php";
    
if (isset($_POST['submit'])){

    $dpt_id=$_POST['department_id'];
    $male=$_POST['male_faculty'];
    $female=$_POST['female_faculty'];

    $query="INSERT INTO `f_count`(`A_YEAR`,`DEPT_ID`,`MALE_F`, `FEMALE_F`) 
    VALUES ('$A_YEAR','$dpt_id','$male', '$female')";
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
                    <input type="number" name="department_id" class="form-control" placeholder="Enter Enter the Department ID" required>
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
                    <input type="Text" name="Program_Name" class="form-control" placeholder="Enter the number of registered international faculty members (Other)">
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





