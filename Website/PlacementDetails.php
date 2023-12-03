<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];

if (isset($_POST['submit'])){

    $p_code=$_POST['p_code'];
    $no_of_students=$_POST['no_of_students'];
    $no_of_students_late_entry=$_POST['no_of_students_late_entry'];
    $no_of_students_graduted=$_POST['no_of_students_graduted'];
    $no_of_students_placed=$_POST['no_of_students_placed'];
    $no_of_students_higher_studies=$_POST['no_of_students_higher_studies'];

    $query="INSERT INTO `placement_details`(`A_YEAR`, `DEPT_ID`, `PROGRAM_CODE`, `TOTAL_NO_OF_STUDENTS`, `NUM_OF_STUDENTS_ADMITTED_LATERAL_ENTRY`, `TOTAL_NUM_OF_STUDENTS_GRADUATED`, `TOTAL_NUM_OF_STUDENTS_PLACED`, `NUM_OF_STUDENTS_IN_HIGHER_STUDIES`) 
    VALUES ('$A_YEAR', '$dept','$p_code','$no_of_students','$no_of_students_late_entry', '$no_of_students_graduted', '$no_of_students_placed', '$no_of_students_higher_studies')";
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
                    <p class="text-center fs-4 ">Placement Details</p>
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
                        Program Code
                    </label>
                    <select name="p_code" class="form-control">
                    <?php 
                    $sql = "SELECT * FROM `program_master` WHERE DEPT_ID= '$dept'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['PROGRAM_CODE'] == $p_code) {
                            echo '<option selected value="' . $row['PROGRAM_CODE'] . '">' . $row['PROGRAM_CODE'] . '</option>';
                        } else {
                            echo '<option value="' . $row['PROGRAM_CODE'] . '">' . $row['PROGRAM_CODE'] . '</option>';
                        }
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Total No. of Students
                    </label>
                    <input type="text" name="no_of_students" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Students Admitted through Lateral Entry
                    </label>
                    <input type="text" name="no_of_students_late_entry" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Students Graduated (PASSED)
                    </label>
                    <input type="text" name="no_of_students_graduted" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Students Placed
                    </label>
                    <input type="text" name="no_of_students_placed" class="form-control" placeholder="Enter Count" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        No. of Students in Higher Studies
                    </label>
                    <input type="text" name="no_of_students_higher_studies" class="form-control" placeholder="Enter Count" required>
                </div>
           
                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>
