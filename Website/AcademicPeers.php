<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];
    
if (isset($_POST['submit'])){

    $Title=$_POST['Title'];
    $First_Name=$_POST['First_Name'];
    $Last_Name=$_POST['Last_Name'];
    $Job_Title=$_POST['Job_Title'];
    $Institution=$_POST['Institution'];
    $Department=$_POST['Department'];
    $Location=$_POST['Location'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $Type=$_POST['Type'];

    $query="INSERT INTO `academic_peers`(`A_YEAR`, `DEPT_ID`, `TITLE`, `FIRST_NAME`, `LAST_NAME`, `JOB_TITLE`, `INSTITUTION`, `DEPARTMENT`, `LOCATION`, `EMAIL_ID`, `PHONE`, `TY_PE`) 
    VALUES ('$A_YEAR', '$dept','$Title','$First_Name','$Last_Name', '$Job_Title',  '$Institution', '$Department', '$Location', '$Email', '$Phone', '$Type')";
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
                    <p class="text-center fs-4 ">Academic Peers</p>
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
                        Title
                    </label>
                    <input type="text" name="Title" class="form-control" placeholder="Enter Title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        First Name
                    </label>
                    <input type="text" name="First_Name" class="form-control" placeholder="Enter First Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Last Name
                    </label>
                    <input type="text" name="Last_Name" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Job Title
                    </label>
                    <input type="text" name="Job_Title" class="form-control" placeholder="Enter Job Title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Institution
                    </label>
                    <input type="text" name="Institution" class="form-control" placeholder="Enter Institution" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Department
                    </label>
                    <input type="text" name="Department" class="form-control" placeholder="Enter Department" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Location
                    </label>
                    <input type="text" name="Location" class="form-control" placeholder="Enter Location" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Email
                    </label>
                    <input type="email" name="Email" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Phone
                    </label>
                    <input type="number" name="Phone" class="form-control" placeholder="Enter Phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Type
                    </label>
                    <select name="Type" class="form-control">
                        <option value="INDIAN">INDIAN</option>
                        <option value="FOREIGN">FOREIGN</option>
                    </select>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





