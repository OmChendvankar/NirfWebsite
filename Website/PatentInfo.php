<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
//Normal year wise logic
$year= date("Y");
$pyear= $year - 1;
$A_YEAR= $pyear . '-' . $year;
?>
                <h1 class="center">Patent Info</h1>
                
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
                    <input type="number" name="Department ID" class="form-control" placeholder="Add Department ID" required>
                </div>                
                
                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Filed 1st Year
                    </label>
                    <input type="number" name="No of Patent Filed 1st Year" class="form-control" placeholder="Enter the No of Patent Filed 1st Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Filed 2nd Year
                    </label>
                    <input type="number" name="No of Patent Filed 2nd Year" class="form-control" placeholder="Enter the No of Patent Filed 2nd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Filed 3rd Year
                    </label>
                    <input type="number" name="No of Patent Filed 3rd Year" class="form-control" placeholder="Enter the No of Patent Filed 3rd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Published 1st Year
                    </label>
                    <input type="number" name=" No of Patent Published 1st Year" class="form-control" placeholder="Enter the  No of Patent Published 1st Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Published 2nd Year
                    </label>
                    <input type="number" name="No of Patent Published 2nd Year" class="form-control" placeholder="Enter the No of Patent Published 2nd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Published 3rd Year
                    </label>
                    <input type="number" name="No of Patent Published 3rd Year" class="form-control" placeholder="Enter the No of Patent Published 3rd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Granted 1st Year
                    </label>
                    <input type="number" name=" No of Patent Granted 1st Year" class="form-control" placeholder="Enter the  No of Patent Granted 1st Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Granted 2nd Year
                    </label>
                    <input type="number" name=" No of Patent Granted 2nd Year" class="form-control" placeholder="Enter the  No of Patent Granted 2nd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        No of Patent Granted 3rd Year
                    </label>
                    <input type="number" name=" No of Patent Granted 3rd Year" class="form-control" placeholder="Enter the  No of Patent Granted 3rd Year" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Total Amount Granted (INR)
                    </label>
                    <input type="number" name="Total Amount Granted (INR)" class="form-control" placeholder="Enter the Total Amount Granted (INR)" required>
                </div>

              