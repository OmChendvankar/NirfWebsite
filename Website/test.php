<?php
include 'config.php';
require "header.php";

if (isset($_POST['submit'])){

    $dpt_id=$_POST['dpt_id'];
    $p_code=$_POST['p_code'];
    $feild1=$_POST['feild1'];
    $feild2=$_POST['feild2'];
    $feild3=$_POST['feild3'];
    $feild4=$_POST['feild4'];
    $feild5=$_POST['feild5'];
    $feild6=$_POST['feild6'];
    $feild7=$_POST['feild7'];
    $feild8=$_POST['feild8'];
    $feild9=$_POST['feild9'];
    $feild10=$_POST['feild10'];
    $feild11=$_POST['feild11'];
    $feild12=$_POST['feild12'];
    $feild13=$_POST['feild13'];
    $feild14=$_POST['feild14'];
    $feild15=$_POST['feild15'];
    $feild16=$_POST['feild16'];
    $feild17=$_POST['feild17'];
    $feild18=$_POST['feild18'];
    $feild19=$_POST['feild19'];
    
    $query="INSERT INTO `intake_actual_strength`(`A_YEAR`, `DEPT_ID`, `p_code`, `STUDENT_INTAKE`, `MALE_STUDENT`, `FEMALE_STUDENT`, `WITHIN_STATE_MALE`, `WITHIN_STATE_FEMALE`, `OUTSIDE_STATE_MALE`, `OUTSIDE_STATE_FEMALE`, `OUTSIDE_COUNTRY_MALE`, `OUTSIDE_COUNTRY_FEMALE`, `ECONOMIC_BACKWARD_MALE`, `ECONOMIC_BACKWARD_FEMALE`, `SOCIAL_BACKWARD_SC_ST_OBC_MALE`, `SOCIAL_BACKWARD_SC_ST_OBC_FEMALE`, `RECEIVING_SCHOLARSHIP_GOVERN_MALE`, `RECEIVING_SCHOLARSHIP_GOVERN_FEMALE`, `RECEIVING_SCHOLARSHIP_INSTIT_MALE`, `RECEIVING_SCHOLARSHIP_INSTIT_FEMALE`, `RECEIVING_SCHOLARSHIP_PRIVATE_BODY_MALE`, `RECEIVING_SCHOLARSHIP_PRIVATE_BODY_FEMALE`) 
    VALUES ('$A_YEAR', '$dpt_id', '$p_code','$feild1', '$feild2', '$feild3', '$feild4', '$feild5', '$feild6', '$feild7', '$feild8', '$feild9', '$feild10', '$feild11', '$feild12', '$feild13', '$feild14', '$feild15', '$feild16', '$feild17', '$feild18', '$feild19')";
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
                    <input type="text" name="year" value="<?php echo $A_YEAR?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Department ID
                    </label>
                    <input type="number" name="dpt_id" class="form-control" >
                </div>   
                <div class="mb-3">
                    <label class="form-label">
                        Program Code
                    </label>
                    <input type="number" name="p_code" class="form-control" >
                </div>                
                <div class="mb-3">
                    <label class="form-label">
                        Total Number of Students Intake
                    </label>
                    <input type="number" name="feild1" placeholder="Enter Total Student Intake" class="form-control" required>
                </div>   
                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students 
                    </label>
                    <input type="number" name="feild2" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students 
                    </label>
                    <input type="number" name="feild3" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students within state
                    </label>
                    <input type="number" name="feild4" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students within state
                    </label>
                    <input type="number" name="feild5" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students outside state
                    </label>
                    <input type="number" name="feild6" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students outside state
                    </label>
                    <input type="number" name="feild7" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students outside country
                    </label>
                    <input type="number" name="feild8" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students outside country
                    </label>
                    <input type="number" name="feild9" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Economic Backward
                    </label>
                    <input type="number" name="feild10" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Economic Backward
                    </label>
                    <input type="number" name="feild11" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Social Backward(SC/ST/OBC)
                    </label>
                    <input type="number" name="feild12" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Social Backward(SC/ST/OBC)
                    </label>
                    <input type="number" name="feild13" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from Government
                    </label>
                    <input type="number" name="feild14" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from Government
                    </label>
                    <input type="number" name="feild15" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from Institution
                    </label>
                    <input type="number" name="feild16" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from Institution
                    </label>
                    <input type="number" name="feild17" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total MALE Students Receiving scholarship from private Bodies
                    </label>
                    <input type="number" name="feild18" placeholder="Enter Count" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total FEMALE Students Receiving scholarship from private Bodies
                    </label>
                    <input type="number" name="feild19" placeholder="Enter Count" class="form-control" required>
                </div>
                
                <button type="submit" name="submit" class="submit">Submit</button>
            </form>
        </div>
<?php
require "footer.php";
?>          