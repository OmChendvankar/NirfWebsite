<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <h1 class="center">Patent Details Individual</h1>
                
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
                    <input type= number name="department ID" class="form-control" placeholder="Enter Department ID" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent Application Number
                    </label>
                    <input type= number name="patent application number" class="form-control" placeholder="Enter patent application number" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Status of patent
                    </label>
                    <select name="status of patent" >
                        <option value="FILED">FILED</option>
                        <option value="GRANTED">GRANTED</option>
                        <option value="PUBLISHED">PUBLISHED</option>
                    </select>
                    <input type= text name="patent application number" class="form-control"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Inventor's Name
                    </label>
                    <input type= text name="Inventor's name" class="form-control" placeholder="Enter Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Title of the patent
                    </label>
                    <input type= text name="Title of the patent" class="form-control" placeholder="Enter title of the patent" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Applicant Name
                    </label>
                    <input type= text name="Applicant Name" class="form-control" placeholder="Enter applicant name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent Filed Date
                    </label>
                    <input type= date name="Patent Filed" class="form-control" placeholder="Enter patent filed date " required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent published date
                    </label>
                    <input type= date name="Patent published date" class="form-control" placeholder="Enter patent published date " required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Patent publication number
                    </label>
                    <input type= Number name="Patent publication number" class="form-control" placeholder="Enter patent publication number " required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Assignee's Name
                    </label>
                    <input type= text name="Assignee's Name" class="form-control" placeholder="Enter Assignee's Name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        URL
                    </label>
                    <input type= text name="URL" class="form-control" placeholder="Enter URL or website's link" required>
                </div>

