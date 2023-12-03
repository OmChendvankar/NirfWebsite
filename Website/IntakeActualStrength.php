<?php
include 'config.php';
require "header.php";

if (isset($_POST['submit'])){

    $dpt_id=$_POST['dpt_id'];
    $p_code=$_POST['p_code'];
    $Student_Intake=$_POST['Add_Total_Student_Intake'];
    $Male_Students=$_POST['Total_number_of_Male_Students'];
    $Female_Students=$_POST['Total_number_of_Female_Students'];
    $Male_Students_within_state=$_POST['Total_number_of_Male_Students_within_state'];
    $Female_Students_within_state=$_POST['Total_number_of_Female_Students_within_state'];
    $Male_Students_outside_state=$_POST['Male_Students_outside_state'];
    $Female_Students_outside_state=$_POST['Female_Students_outside_state'];
    $Male_Students_outside_country=$_POST['Male_Students_outside_country'];
    $Female_Students_outside_country=$_POST['Female_Students_outside_country'];
    $Male_Students_Economic_Backward=$_POST['Male_Students_Economic_Backward'];
    $Female_Students_Economic_Backward=$_POST['Female_Students_Economic_Backward'];
    $Male_Students_Social_Backward=$_POST['Male_Students_Social_Backward'];
    $Female_Student_Social_Backward=$_POST['Female_Student_Social_Backward'];
    $Male_Students_Receiving_scholarship_from_Government=$_POST['Male_Students_Receiving_scholarship_from_Government'];
    $Female_Students_Receiving_scholarship_from_Government=$_POST['Female_Students_Receiving_scholarship_from_Government'];
    $Male_Students_Receiving_scholarship_from_Institution=$_POST['Male_Students_Receiving_scholarship_from_Institution'];
    $Female_Students_Receiving_scholarship_from_Institution=$_POST['Female_Students_Receiving_scholarship_from_Institution'];
    $Male_Students_Receiving_scholarship_from_private_Bodies=$_POST['Male_Students_Receiving_scholarship_from_private_Bodies'];
    $Female_Students_Receiving_scholarship_from_private_Bodies=$_POST['Female_Students_Receiving_scholarship_from_private_Bodies'];
    
    $query="INSERT INTO `intake_actual_strength`(`A_YEAR`, `DEPT_ID`, `PROGRAM_CODE`, `NO_STUDENT_INTAKE`, `NO_MALE_STUDENT`, `NO_FEMALE_STUDENT`, `NO_STUDENT_WITHIN_STATE_MALE`, `NO_STUDENT_WITHIN_STATE_FEMALE`, `NO_STUDENT_OUTSIDE_STATE_MALE`, `NO_STUDENT_OUTSIDE_STATE_FEMALE`, `NO_STUDENT_OUTSIDE_COUNTRY_MALE`, `NO_STUDENT_OUTSIDE_COUNTRY_FEMALE`, `NO_STUDENT_ECONOMIC_BACKWARD_MALE`,`NO_STUDENT_ECONOMIC_BACKWARD_FEMALE`, `NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_MALE`, `NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_FEMALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_MALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_FEMALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_MALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_FEMALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_MALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_FEMALE`) 
    VALUES ('$A_YEAR', '$dpt_id', '$p_code', '$Student_Intake','$Male_Students','$Female_Students','$Male_Students_within_state','$Female_Students_within_state', '$Male_Students_outside_state', '$Female_Students_outside_state', '$Male_Students_outside_country', '$Female_Students_outside_country', '$Male_Students_Economic_Backward', '$Female_Students_Economic_Backward', '$Male_Students_Social_Backward', '$Female_Student_Social_Backward', '$Male_Students_Receiving_scholarship_from_Government', '$Female_Students_Receiving_scholarship_from_Government', '$Male_Students_Receiving_scholarship_from_Institution', '$Female_Students_Receiving_scholarship_from_Institution', '$Male_Students_Receiving_scholarship_from_private_Bodies', '$Female_Students_Receiving_scholarship_from_private_Bodies')";
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
                    <p class="text-center fs-4 ">Intake and Actual Strength </p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Academic Year
                    </label>
                    <input type="year" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Department ID
                    </label>
                    <select name="dpt_id" class="form-control">
                    <?php
                    $sql = "SELECT * FROM department_master";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['DEPT_ID'] == $dpt_id) {
                            echo '<option selected value="' . $row['DEPT_ID'] . '">' . $row['DEPT_NAME'] . '</option>';
                        } elseif($row['DEPT_ID'] == $_GET['cat']){
                            echo '<option selected value="' . $row['DEPT_ID'] . '">' . $row['DEPT_NAME'] . '</option>';    
                        } else {
                            echo '<option value="' . $row['DEPT_ID'] . '">' . $row['DEPT_NAME'] . '</option>';
                        }
                    }
                    ?>
                    </select>
                </div>   
                <div class="mb-3">
                    <label class="form-label">
                        Program Code
                    </label>
                    <select name="p_code" class="form-control">
                    <?php
                    $sql = "SELECT * FROM program_master";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['PROGRAM_CODE'] == $p_code) {
                            echo '<option selected value="' . $row['PROGRAM_CODE'] . '">' . $row['PROGRAM_CODE'] . '</option>';
                        } elseif($row['DEPT_ID'] == $_GET['cat']){
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
                        Total Number of Students Intake
                    </label>
                    <input type="number" name="Add_Total_Student_Intake" placeholder="Enter Total Student Intake" class="form-control" required>
                </div>   
                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students 
                    </label>
                    <input type="number" name="Total_number_of_Male_Students" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students 
                    </label>
                    <input type="number" name="Total_number_of_Female_Students" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students within state
                    </label>
                    <input type="number" name="Total_number_of_Male_Students_within_state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students within state
                    </label>
                    <input type="number" name="Total_number_of_Female_Students_within_state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students outside state
                    </label>
                    <input type="number" name="Male_Students_outside_state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students outside state
                    </label>
                    <input type="number" name="Female_Students_outside_state" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students outside country
                    </label>
                    <input type="number" name="Male_Students_outside_country" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students outside country
                    </label>
                    <input type="number" name="Female_Students_outside_country" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Economic Backward
                    </label>
                    <input type="number" name="Male_Students_Economic_Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Economic Backward
                    </label>
                    <input type="number" name="Female_Students_Economic_Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Social Backward(SC/ST/OBC)
                    </label>
                    <input type="number" name="Male_Students_Social_Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Social Backward(SC/ST/OBC)
                    </label>
                    <input type="number" name="Female_Student_Social_Backward" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from Government
                    </label>
                    <input type="number" name="Male_Students_Receiving_scholarship_from_Government" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from Government
                    </label>
                    <input type="number" name="Female_Students_Receiving_scholarship_from_Government" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from Institution
                    </label>
                    <input type="number" name="Male_Students_Receiving_scholarship_from_Institution" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from Institution
                    </label>
                    <input type="number" name="Female_Students_Receiving_scholarship_from_Institution" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from private Bodies
                    </label>
                    <input type="number" name="Male_Students_Receiving_scholarship_from_private_Bodies" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from private Bodies
                    </label>
                    <input type="number" name="Female_Students_Receiving_scholarship_from_private_Bodies" placeholder="Enter Count" class="form-control" required>
                </div>
                
                <button type="submit" class="submit" name="submit" onclick="return Validate()">Submit</button>
            </form>
        </div>
<?php
require "footer.php";
?>          