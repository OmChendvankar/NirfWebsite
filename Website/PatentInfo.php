<?php
include 'config.php';
require "header.php";
    
$dept = $_SESSION['dept_id'];

if (isset($_POST['submit'])){

    $Patent_Filed_1st_Year=$_POST['Patent_Filed_1st_Year'];
    $Patent_Filed_2nd_Year=$_POST['Patent_Filed_2nd_Year'];
    $Patent_Filed_3rd_Year=$_POST['Patent_Filed_3rd_Year'];
    $Patent_Published_1st_Year=$_POST['Patent_Published_1st_Year'];
    $Patent_Published_2nd_Year=$_POST['Patent_Published_2nd_Year'];
    $Patent_Published_3rd_Year=$_POST['Patent_Published_3rd_Year'];
    $Patent_Granted_1st_Year=$_POST['Patent_Granted_1st_Year'];
    $Patent_Granted_2nd_Year=$_POST['Patent_Granted_2nd_Year'];
    $Patent_Granted_3rd_Year=$_POST['Patent_Granted_3rd_Year'];
    $Total_Amount_Granted=$_POST['Total_Amount_Granted'];

    $query="INSERT INTO `patent_info`(`A_YEAR`, `DEPT_ID`, `NO_OF_PATENT_FILLED_1_YEAR`, `NO_OF_PATENT_FILLED_2_YEAR`, `NO_OF_PATENT_FILLED_3_YEAR`, `NO_OF_PATENT_PUBLISHED_1_YEAR`, `NO_OF_PATENT_PUBLISHED_2_YEAR`, `NO_OF_PATENT_PUBLISHED_3_YEAR`, `NO_OF_PATENT_GRANTED_1_YEAR`, `NO_OF_PATENT_GRANTED_2_YEAR`, `NO_OF_PATENT_GRANTED_3_YEAR`, `TOTAL_AMT_GRANTED`) 
    VALUES ('$A_YEAR', '$dept','$Patent_Filed_1st_Year','$Patent_Filed_2nd_Year','$Patent_Filed_3rd_Year', '$Patent_Published_1st_Year', '$Patent_Published_2nd_Year', '$Patent_Published_3rd_Year', '$Patent_Granted_1st_Year', '$Patent_Granted_2nd_Year', '$Patent_Granted_3rd_Year', '$Total_Amount_Granted')";
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
                    <p class="text-center fs-4 ">Patent Info</p>
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
                        No of Patent Filed 1st Year
                    </label>
                    <input type="number" name="Patent_Filed_1st_Year" class="form-control" placeholder="Enter the No of Patent Filed 1st Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Filed 2nd Year
                    </label>
                    <input type="number" name="Patent_Filed_2nd_Year" class="form-control" placeholder="Enter the No of Patent Filed 2nd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Filed 3rd Year
                    </label>
                    <input type="number" name="Patent_Filed_3rd_Year" class="form-control" placeholder="Enter the No of Patent Filed 3rd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Published 1st Year
                    </label>
                    <input type="number" name="Patent_Published_1st_Year" class="form-control" placeholder="Enter the  No of Patent Published 1st Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Published 2nd Year
                    </label>
                    <input type="number" name="Patent_Published_2nd_Year" class="form-control" placeholder="Enter the No of Patent Published 2nd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Published 3rd Year
                    </label>
                    <input type="number" name="Patent_Published_3rd_Year" class="form-control" placeholder="Enter the No of Patent Published 3rd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Granted 1st Year
                    </label>
                    <input type="number" name="Patent_Granted_1st_Year" class="form-control" placeholder="Enter the  No of Patent Granted 1st Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Granted 2nd Year
                    </label>
                    <input type="number" name="Patent_Granted_2nd_Year" class="form-control" placeholder="Enter the  No of Patent Granted 2nd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Granted 3rd Year
                    </label>
                    <input type="number" name="Patent_Granted_3rd_Year" class="form-control" placeholder="Enter the  No of Patent Granted 3rd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total Amount Granted (INR)
                    </label>
                    <input type="number" name="Total_Amount_Granted" class="form-control" placeholder="Enter the Total Amount Granted (INR)" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>