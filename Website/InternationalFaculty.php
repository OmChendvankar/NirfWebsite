<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];

if (isset($_POST['submit'])){

    $Male_Faculty_Inbound=$_POST['Male_Faculty_Inbound'];
    $Female_Faculty_Inbound=$_POST['Female_Faculty_Inbound'];
    $Male_Faculty_Outbound=$_POST['Male_Faculty_Outbound'];
    $Female_Faculty_Outbound=$_POST['Female_Faculty_Outbound'];

    $query="INSERT INTO `inter_faculty`(`A_YEAR`, `DEPT_ID`, `TOTAL_NO_INBOUND_FAC_MALE`, `TOTAL_NO_INBOUND_FAC_FEMALE`, `TOTAL_NO_OUTBOUND_FAC_MALE`, `TOTAL_NO_OUTBOUND_FAC_FEMALE`) 
    VALUES ('$A_YEAR', '$dept','$Male_Faculty_Inbound','$Female_Faculty_Inbound','$Male_Faculty_Outbound', '$Female_Faculty_Outbound')";
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
                    <p class="text-center fs-4 ">International Faculty</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="text" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Dept ID
                    </label>
                    <input type="text" name="dpt_id" value="<?php echo $dept?>" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total MALE Faculty Inbound
                    </label>
                    <input type="number" name="Male_Faculty_Inbound" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total FEMALE Faculty Inbound
                    </label>
                    <input type="number" name="Female_Faculty_Inbound" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total MALE Faculty Outbound
                    </label>
                    <input type="number" name="Male_Faculty_Outbound" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                    Total FEMALE Faculty Outbound
                    </label>
                    <input type="number" name="Female_Faculty_Outbound" class="form-control"  required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>
