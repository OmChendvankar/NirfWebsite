<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];
    
if (isset($_POST['submit'])){

    $Executive_Programs=$_POST['Executive_Programs'];
    $Total_Participants=$_POST['Total_Participants'];
    $Total_Income=$_POST['Total_Income'];

    $query="INSERT INTO `exec_dev`(`A_YEAR`, `DEPT_ID`, `NO_OF_EXEC_PROGRAMS`, `TOTAL_PARTICIPANTS`, `TOTAL_INCOME`) 
    VALUES ('$A_YEAR', '$dept','$Executive_Programs','$Total_Participants','$Total_Income')";
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
                    <p class="text-center fs-4 ">Executive Development</p>
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
                    <input type="text" name="dpt_id" value="<?php echo $dept?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Number of Executive Programs
                    </label>
                    <input type= number name="Executive_Programs" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Total Participants
                    </label>
                    <input type= number name="Total_Participants" class="form-control" placeholder="Enter count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Total Income	
                    </label>
                    <input type= number name="Total_Income" class="form-control" placeholder="Enter count" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>

