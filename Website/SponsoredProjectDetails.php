<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];
    
if (isset($_POST['submit'])){

    $tot_no_of_sponsored_projects=$_POST['tot_no_of_sponsored_projects'];
    $tot_no_of_sponsored_projects_from_agencies=$_POST['tot_no_of_sponsored_projects_from_agencies'];
    $tot_amount_recieved_from_sponsored_projects_agencies=$_POST['tot_amount_recieved_from_sponsored_projects_agencies'];
    $tot_no_of_sponsored_projects_from_industries=$_POST['tot_no_of_sponsored_projects_from_industries'];
    $tot_amount_recieved_from_sponsored_projects_industries=$_POST['tot_amount_recieved_from_sponsored_projects_industries'];

    $query="INSERT INTO `sponsored_project_details`(`A_YEAR`, `DEPT_ID`, `TOTAL_SPONSORED_PROJECTS`, `TOTAL_SPONSORED_PROJECTS_AGENCIES`, `TOTAL_AMT_RECEIVED_AGENCIES`, `TOTAL_PROJECTS_SPONSORED_INDUSTRIES`, `TOTAL_AMT_RECEIVED_INDUSTRIES`) 
    VALUES ('$A_YEAR', '$dept','$tot_no_of_sponsored_projects','$tot_no_of_sponsored_projects_from_agencies','$tot_amount_recieved_from_sponsored_projects_agencies', '$tot_no_of_sponsored_projects_from_industries', '$tot_amount_recieved_from_sponsored_projects_industries')";
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
                    <p class="text-center fs-4 ">Sponsored Project Details</p>
                </div>
                <div class="d-flex justify-content-center">

                <div class="p-2 flex-fill bd-highlight ml-2">
    
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
                            Total number of Sponsored Projects in all
                        </label>
                        <input type="number" name="tot_no_of_sponsored_projects" class="form-control" placeholder="Enter the total number of sponsored projects recieved in the academic year" required>
                    </div>
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