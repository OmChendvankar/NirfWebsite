<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];
    
if (isset($_POST['submit'])){

    $tot_no_of_consultancy_projects=$_POST['tot_no_of_consultancy_projects'];
    $tot_no_of_clients=$_POST['tot_no_of_clients'];
    $tot_amount_recieved=$_POST['tot_amount_recieved'];

    $query="INSERT INTO `consultancy_projects`(`A_YEAR`, `DEPT_ID`, `TOTAL_NO_OF_CP`, `TOTAL_NO_OF_CLIENT`, `TOTAL_AMT_RECEIVED`) 
    VALUES ('$A_YEAR', '$dept','$tot_no_of_consultancy_projects','$tot_no_of_clients','$tot_amount_recieved')";
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
                    <p class="text-center fs-4 ">Consultancy Projects</p>
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
                            Total number of consultancy projects
                        </label>
                        <input type="number" name="tot_no_of_consultancy_projects" class="form-control" placeholder="Enter the number of consultancy projects done in the academic year" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Total number of Clients for the consultancy projects
                        </label>
                        <input type="number" name="tot_no_of_clients" class="form-control" placeholder="Enter the number of clients recieved for the consultancy projects done in the academic year" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">
                            Total amount recieved through the consultancy projects 
                        </label>
                        <input type="number" name="tot_amount_recieved" class="form-control" placeholder="amount recieved to the department from consultancy projects done in the academic year" required>
                    </div>
                    
                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





