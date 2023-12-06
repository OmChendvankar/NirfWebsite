<?php
include 'config.php';
require "header.php";
    
$dept = $_SESSION['dept_id'];

if (isset($_POST['submit'])){

    $Research_staff_male=$_POST['Research_staff_male'];
    $Research_Staff_Female=$_POST['Research_Staff_Female'];
    $Agency_sponsoring=$_POST['Agency_sponsoring'];
    $Amount_received=$_POST['Amount_received'];

    $query="INSERT INTO `research_staff`(`A_YEAR`, `DEPT_ID`, `TOTAL_NUM_OF_RESEARCH_STAFF_MALE`, `TOTAL_NUM_OF_RESEARCH_STAFF_FEMALE`, `AGENCY_SPONSORING`, `AMOUNT_RECEIVED`) 
    VALUES ('$A_YEAR', '$dept','$Research_staff_male','$Research_Staff_Female','$Agency_sponsoring', '$Amount_received')";
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
                    <p class="text-center fs-4 ">Research Staff</p>
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
                        Total Number of Research Staff (Male)
                    </label>
                    <input type= number name="Research_staff_male" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Total Number Of Research Staff (Female)
                    </label>
                    <input type= number name="Research_Staff_Female" class="form-control" placeholder="Enter count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Agency Sponsoring
                    </label>
                    <input type= number name="Agency_sponsoring" class="form-control" placeholder="Enter count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Amount Received
                    </label>
                    <input type= number name="Amount_received" class="form-control" placeholder="Enter Amount" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>

