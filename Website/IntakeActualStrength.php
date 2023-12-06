<?php
include 'config.php';
require "header.php";

$dept = $_SESSION['dept_id'];

if (isset($_POST['submit'])){

    $p_code=$_POST['p_code'];
    $p_name=$_POST['p_name'];
    $duration=$_POST['duration'];
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
    
    $query="INSERT INTO `intake_actual_strength`(`A_YEAR`, `DEPT_ID`, `PROGRAM_CODE`, `PROGRAM_NAME`, `DURATION`, `NO_STUDENT_INTAKE`, `NO_MALE_STUDENT`, `NO_FEMALE_STUDENT`, `NO_STUDENT_WITHIN_STATE_MALE`, `NO_STUDENT_WITHIN_STATE_FEMALE`, `NO_STUDENT_OUTSIDE_STATE_MALE`, `NO_STUDENT_OUTSIDE_STATE_FEMALE`, `NO_STUDENT_OUTSIDE_COUNTRY_MALE`, `NO_STUDENT_OUTSIDE_COUNTRY_FEMALE`, `NO_STUDENT_ECONOMIC_BACKWARD_MALE`,`NO_STUDENT_ECONOMIC_BACKWARD_FEMALE`, `NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_MALE`, `NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_FEMALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_MALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_FEMALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_MALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_FEMALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_MALE`, `NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_FEMALE`) 
    VALUES ('$A_YEAR', '$dept', '$p_code', '$p_name', '$duration', '$Student_Intake','$Male_Students','$Female_Students','$Male_Students_within_state','$Female_Students_within_state', '$Male_Students_outside_state', '$Female_Students_outside_state', '$Male_Students_outside_country', '$Female_Students_outside_country', '$Male_Students_Economic_Backward', '$Female_Students_Economic_Backward', '$Male_Students_Social_Backward', '$Female_Student_Social_Backward', '$Male_Students_Receiving_scholarship_from_Government', '$Female_Students_Receiving_scholarship_from_Government', '$Male_Students_Receiving_scholarship_from_Institution', '$Female_Students_Receiving_scholarship_from_Institution', '$Male_Students_Receiving_scholarship_from_private_Bodies', '$Female_Students_Receiving_scholarship_from_private_Bodies')";
    // $q=mysqli_query($conn,$query);
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Data Entered.')</script>";
        echo '<script>window.location.href = "IntakeActualStrength.php";</script>';
    } else{
        echo "<script>alert('Woops! There was an error (Contact Admin if it continues).')</script>";    }
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
                    $sql = "SELECT * FROM `program_master`";
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
                        Program Name
                    </label>
                    <select name="p_name" class="form-control">
                    <?php 
                    $sql = "SELECT * FROM `program_master`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['PROGRAM_NAME'] == $p_name) {
                            echo '<option selected value="' . $row['PROGRAM_NAME'] . '">' . $row['PROGRAM_NAME'] . '</option>';
                        } else {
                            echo '<option value="' . $row['PROGRAM_NAME'] . '">' . $row['PROGRAM_NAME'] . '</option>';
                        }
                    }
                    ?>
                    </select>
                </div>     
                <div class="mb-3">
                    <label class="form-label">
                        Duration
                    </label>
                    <select name="duration" class="form-control">
                    <?php 
                    $sql = "SELECT * FROM `program_master`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['DURATION'] == $duration) {
                            echo '<option selected value="' . $row['DURATION'] . '">' . $row['DURATION'] . '</option>';
                        } else {
                            echo '<option value="' . $row['DURATION'] . '">' . $row['DURATION'] . '</option>';
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

       
        <div class="row my-5">
    <h3 class="fs-4 mb-3 text-center" id="msg">Data</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col">Program Code</th>
                    <th scope="col">Program Name</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Number of Students Intake</th>
                    <th scope="col">MALE Students</th>
                    <th scope="col">FEMALE Students</th>
                    <th scope="col">MALE Students within state</th>
                    <th scope="col">FEMALE Students within state</th>
                    <th scope="col">MALE Students outside state</th>
                    <th scope="col">FEMALE Students outside state</th>
                    <th scope="col">MALE Students outside state</th>
                    <th scope="col">FEMALE Students outside state</th>
                    <th scope="col">MALE Students outside country</th>
                    <th scope="col">FEMALE Students outside country</th>
                    <th scope="col">MALE Students Economic Backward</th>
                    <th scope="col">FEMALE Students Economic Backward</th>
                    <th scope="col">MALE Students Social Backward(SC/ST/OBC)</th>
                    <th scope="col">FEMALE Students Social Backward(SC/ST/OBC)</th>
                    <th scope="col">MALE Students Receiving scholarship from Government</th>
                    <th scope="col">FEMALE Students Receiving scholarship from Government</th>
                    <th scope="col">MALE Students Receiving scholarship from Institution</th>
                    <th scope="col">FEMALE Students Receiving scholarship from Institution</th>
                    <th scope="col">MALE Students Receiving scholarship from private Bodies</th>
                    <th scope="col">MALE Students Receiving scholarship from private Bodies</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $Record = mysqli_query($conn, "Select * from intake_actual_strength");
                while ($row = mysqli_fetch_array($Record)) {
                ?>
                <tr>
                        <td><?php echo $row['PROGRAM_CODE']?></td>
                        <td><?php echo $row['PROGRAM_NAME']?></td>
                        <td><?php echo $row['DURATION']?></td>
                        <td><?php echo $row['NO_STUDENT_INTAKE']?></td>
                        <td><?php echo $row['NO_MALE_STUDENT']?></td>
                        <td><?php echo $row['NO_FEMALE_STUDENT']?></td>
                        <td><?php echo $row['NO_STUDENT_WITHIN_STATE_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_WITHIN_STATE_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_OUTSIDE_STATE_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_OUTSIDE_STATE_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_OUTSIDE_COUNTRY_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_OUTSIDE_COUNTRY_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_ECONOMIC_BACKWARD_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_ECONOMIC_BACKWARD_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_SOCIAL_BACKWARD_SC_ST_OBC_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_RECEIVING_SCHOLARSHIP_GOVERN_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_RECEIVING_SCHOLARSHIP_INSTIT_FEMALE']?></td>
                        <td><?php echo $row['NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_MALE']?></td>
                        <td><?php echo $row['NO_STUDENT_RECEIVING_SCHOLARSHIP_PRIVATE_BODY_FEMALE']?></td>
                        <td><a class="dbutton" href="IntakeActualStrength.php?action=delete&PROGRAM_CODE=<?php echo $row['PROGRAM_CODE']?>">Delete</a></td>
                    </tr>
                <?php
                    }
                ?>                            
                </tbody>
            </table>
        </div>
</div>

<?php
require "footer.php";
?>          