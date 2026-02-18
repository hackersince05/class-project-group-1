<?php
// Main Home Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Project - Group 1</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <h1 class="logo">Class Project - Group 1</h1>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="pages/payroll.php">Payroll</a></li>
                <li><a href="pages/gpa.php">GPA Calculator</a></li>
                <li><a href="pages/personal.php">Personal Details</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h2>Welcome to Our Class Project</h2>
            <p>Select a tab to navigate through different sections of the project.</p>

            <div class="home-section">
                <h3>Group Members & Courses</h3>
                
                <div class="info-box">
                    <h4>Members Information:</h4>
                    <table class="members-table">
                        <thead>
                            <tr>
                                <th>Matric Number</th>
                                <th>Name of Student</th>
                                <th>Courses Registered</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>23/0001</td>
                                <td>Egbu Roni</td>
                                <td>SENG401, SENG402, SENG403, SENG404</td>
                            </tr>
                            <tr>
                                <td>23/0002</td>
                                <td>Chris-Esezobor Ejodamen</td>
                                <td>SENG401, SENG402, SENG403, SENG404</td>
                            </tr>
                            <tr>
                                <td>23/0003</td>
                                <td>Alozie Favour</td>
                                <td>SENG401, SENG402, SENG403, SENG404</td>
                            </tr>
                            <tr>
                                <td>23/0004</td>
                                <td>Adenubi Gbenga</td>
                                <td>SENG401, SENG402, SENG403, SENG404</td>
                            </tr>
                            <tr>
                                <td>23/0005</td>
                                <td>Alo Oluwatobi</td>
                                <td>SENG401, SENG402, SENG403, SENG404</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="info-box">
                    <h4>Course Details:</h4>
                    <table class="courses-table">
                        <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Credit Units</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SENG401</td>
                                <td>Software Design & Implementation</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>SENG402</td>
                                <td>Database Systems for Software Engineers</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>SENG403</td>
                                <td>Software Testing & Quality Assurance</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>SENG404</td>
                                <td>Software Project Management</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Class Project Group 1. All rights reserved.</p>
    </footer>
</body>
</html>
