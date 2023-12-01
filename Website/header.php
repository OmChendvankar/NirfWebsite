<?php
session_start();
include 'config.php';

//Normal year wise logic
$year= date("Y");
$pyear= $year - 1;
$A_YEAR= $pyear . '-' . $year;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <title>Admin Page</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    ></i>Nirf</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Dashboard</a>
                <a href="ProgramMaster.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Program Master</a>
                <a href="DepartmentMaster.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Department Master</a>
                <a href="CountryMaster.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Country Master</a>
                <a href="IntakeActualStrength.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Student Intake & Acutual Strength</a>
                <a href="phd.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>PHD Details</a>
                <a href="PlacementDetails.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Placement Details</a>
                <a href="FacultyCount.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Faculty Count</a>
                <a href="FacultyDetails.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Faculty Details</a>
                <a href="InternationalFaculty.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>International Faculty</a>
                <a href="SponsoredProjectDetails.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Sponsored Project Details</a>
                <a href="ResearchStaff.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Research  Staff</a>
                <a href="PatentDetails.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Patent Details</a>
                <a href="ExecutiveDevelopment.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Executive Development</a>
                <a href="ConsultancyProjects.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Consultancy Projects</a>
                <a href="EmployeeDetails.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Employee Details</a>
                <a href="AcademicPeers.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>Academic Peers</a>
                <a href="FinancialExpenditure.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        ></i>FinancialExpenditure</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                       ></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['admin_username']?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
