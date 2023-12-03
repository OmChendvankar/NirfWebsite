<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];
    
if (isset($_POST['submit'])){

    $First_Name=$_POST['First_Name'];
    $Last_Name=$_POST['Last_Name'];
    $Designation=$_POST['Designation'];
    $Type_of_Industry=$_POST['Type_of_Industry'];
    $Company=$_POST['Company'];
    $Location=$_POST['Location'];
    $Email_ID=$_POST['Email_ID'];
    $Phone_Number=$_POST['Phone_Number'];
    $type=$_POST['type'];

    $query="INSERT INTO `emp_details`(`A_YEAR`, `DEPT_ID`, `FIRST_NAME`, `LAST_NAME`, `DESIGNATION`, `TYPE_OF_IND`, `COMPANY`, `LOCATION`, `EMAIL_ID`, `PHONE`, `TYPE_INDIAN_FOREIGN`) 
    VALUES ('$A_YEAR', '$dept','$First_Name','$Last_Name','$Designation', '$Type_of_Industry', '$Company', '$Location', '$Email_ID', '$Phone_Number', '$type')";
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
                    <p class="text-center fs-4 ">Employee Details</p>
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
                        Designation
                    </label>
                    <input type="text" name="Designation" class="form-control" placeholder="Enter Designation" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Type of Industry
                    </label>
                    <input type="text" name="Type_of_Industry" class="form-control" placeholder="Enter Industry" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Company
                    </label>
                    <input type="text" name="Company" class="form-control" placeholder="Enter Company Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Location
                    </label>
                    <input type="text" name="Location" class="form-control" placeholder="Enter Location" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Email ID
                    </label>
                    <input type="email" name="Email_ID" class="form-control" placeholder="Enter Email ID" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Phone Number
                    </label>
                    <input type="number" name="Phone_Number" class="form-control" placeholder="Enter Mobile Number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Type(Indian/Foreign)
                    </label>
                    <select name="type" >
                        <option value="Indian">Indian</option>
                        <option value="Foreign">Foreign</option>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>





