<?php
include 'config.php';
require "header.php";
    
if (isset($_POST['submit'])){

    $dpt_id=$_POST['dpt_id'];
    $Male_Students_FT=$_POST['Male_Students_FT'];
    $Female_Students_FT=$_POST['Female_Students_FT'];
    $Male_Students_PT=$_POST['Male_Students_PT'];
    $Female_Students_PT=$_POST['Male_Students_PT'];
    $Male_Students_AWD_FT=$_POST['Male_Students_AWD_FT'];
    $Female_Students_AWD_FT=$_POST['Female_Students_AWD_FT'];
    $Male_Students_AWD_PT=$_POST['Male_Students_AWD_PT'];
    $Female_Students_AWD_PT=$_POST['Female_Students_AWD_PT'];

    $query="INSERT INTO `phd_details`(`A_YEAR`, `DEPT_ID`, `FULL_TIME_MALE_STUDENTS`, `FULL_TIME_FEMALE_STUDENTS`, `PART_TIME_MALE_STUDENTS`, `PART_TIME_FEMALE_STUDENTS`, `PHD_AWARDED_MALE_STUDENTS_FULL`, `PHD_AWARDED_FEMALE_STUDENTS_FULL`, `PHD_AWARDED_MALE_STUDENTS_PART`,`PHD_AWARDED_FEMALE_STUDENTS_PART`) 
    VALUES ('$A_YEAR', '$dpt_id','$Male_Students_FT','$Female_Students_FT','$Male_Students_PT', '$Female_Students_PT', '$Male_Students_AWD_FT', '$Female_Students_AWD_FT', '$Male_Students_AWD_PT', '$Female_Students_AWD_PT')";
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
                    <p class="text-center fs-4 ">PHD Details </p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="text" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Department ID
                    </label>
                    <input type="text" name="dpt_id" class="form-control" placeholder="Enter Department ID" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Male Students (FULL TIME)
                    </label>
                    <input type="text" name="Male_Students_FT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Female Students (FULL TIME)
                    </label>
                    <input type="text" name="Female_Students_FT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Male Students (PART TIME)
                    </label>
                    <input type="text" name="Male_Students_PT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Female Students (PART TIME)
                    </label>
                    <input type="text" name="Male_Students_PT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Male Students awarded Ph.D. (FULL TIME)
                    </label>
                    <input type="text" name="Male_Students_AWD_FT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Female Students awarded Ph.D. (FULL TIME)
                    </label>
                    <input type="text" name="Female_Students_AWD_FT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Male Students awarded Ph.D. (PART TIME)
                    </label>
                    <input type="text" name="Male_Students_AWD_PT" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Female Students awarded Ph.D. (PART TIME)
                    </label>
                    <input type="text" name="Female_Students_AWD_PT" class="form-control" placeholder="Enter Count" required>
                </div>

                
                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>
