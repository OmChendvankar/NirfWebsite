<?php
include 'config.php';
require "header.php";
    
$dept = $_SESSION['dept_id'];

if (isset($_POST['submit'])){

    $patent_application_number=$_POST['patent_application_number'];
    $status_of_patent=$_POST['status_of_patent'];
    $Inventors_name=$_POST['Inventors_name'];
    $Title_of_the_patent=$_POST['Title_of_the_patent'];
    $Applicant_Name=$_POST['Applicant_Name'];
    $Patent_Filed=$_POST['Patent_Filed'];
    $Patent_published_date=$_POST['Patent_published_date'];
    $Patent_publication_number=$_POST['Patent_publication_number'];
    $Assignee_Name=$_POST['Assignee_Name'];
    $URL=$_POST['URL'];

    $query="INSERT INTO `patent_details`(`A_YEAR`, `DEPT_ID`, `PATENT_APPLICATION_NO`, `STATUS_OF_PATENT`, `INVENTOR_NAME`, `TITLE_OF_PATENT`, `APPLICANT_NAME`, `PATENT_DATE`, `PATENT_NUMBER`, `PATENT_AMT`, `ASIGNEES_NAME`, `URL`) 
    VALUES ('$A_YEAR', '$dept','$patent_application_number','$status_of_patent','$Inventors_name', '$Title_of_the_patent', '$Applicant_Name', '$Patent_Filed', '$Patent_published_date', '$Patent_publication_number', '$Assignee_Name', '$URL')";
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
                    <p class="text-center fs-4 ">Research Staff</p>
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
                        Patent Application Number
                    </label>
                    <input type="text" name="patent_application_number" class="form-control" placeholder="Enter patent application number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Status of patent
                    </label>
                    <select name="status_of_patent" class="form-control">
                        <option value="FILED">FILED</option>
                        <option value="GRANTED">GRANTED</option>
                        <option value="PUBLISHED">PUBLISHED</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Inventor's Name
                    </label>
                    <input type= "text" name="Inventors_name" class="form-control" placeholder="Enter Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Title of the patent
                    </label>
                    <input type="text" name="Title_of_the_patent" class="form-control" placeholder="Enter title of the patent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Applicant Name
                    </label>
                    <input type="text" name="Applicant_Name" class="form-control" placeholder="Enter applicant name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent Filed Date
                    </label>
                    <input type="date" name="Patent_Filed" class="form-control" placeholder="Enter patent filed date " required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent published date
                    </label>
                    <input type="date" name="Patent_published_date" class="form-control" placeholder="Enter patent published date " required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent publication number
                    </label>
                    <input type= "Number" name="Patent_publication_number" class="form-control" placeholder="Enter patent publication number " required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Assignee's Name
                    </label>
                    <input type= "text" name="Assignee_Name" class="form-control" placeholder="Enter Assignee's Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        URL
                    </label>
                    <input type= "text" name="URL" class="form-control" placeholder="Enter URL or website's link" required>
                </div>

                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>

