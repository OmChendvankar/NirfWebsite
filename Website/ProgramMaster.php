<?php
include 'config.php';
require "header.php";
    
if (isset($_POST['submit'])){

    $p_code=$_POST['Program_Code'];
    $p_name=$_POST['Program_Name'];
    $duration=$_POST['Duration'];

    $query="INSERT INTO `program_master`(`PROGRAM_CODE`, `PROGRAM_NAME`, `DURATION`) 
    VALUES ('$p_code', '$p_name','$duration')";
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
                    <p class="text-center fs-4 ">Program Master </p>
                </div>
                <div class="mb-3">
                    <label class="form-label" >
                        Program Code
                    </label>
                    <input type="Text" name="Program_Code" class="form-control" placeholder="Enter Program Code" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Program Name
                    </label>
                    <select name="Program_Name" class="form-control">
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Certificate">Certificate</option>
                        <option value="Phd">Phd</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">
                        Duration
                    </label>
                    <select name="Duration" class="form-control">
                        <option value="1 Year">1 year</option>
                        <option value="2 Year">2 year</option>
                        <option value="3 Year">3 year</option>
                        <option value="4 Year">4 year</option>
                        <option value="5 Year">5 year</option>
                        <option value="6 Year">6 year</option>
                    </select>
                </div>
                
                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>
