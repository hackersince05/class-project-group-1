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
                                <td>MTN001</td>
                                <td>Chukwu Obinna</td>
                                <td>WEB101, DB101, SE101</td>
                            </tr>
                            <tr>
                                <td>MTN002</td>
                                <td>Adeyemi Toluwani</td>
                                <td>WEB101, DB101, SE101</td>
                            </tr>
                            <tr>
                                <td>MTN003</td>
                                <td>Okafor Chioma</td>
                                <td>WEB101, DB101, SE101</td>
                            </tr>
                            <tr>
                                <td>MTN004</td>
                                <td>Hassan Muhammad</td>
                                <td>WEB101, DB101, SE101</td>
                            </tr>
                            <tr>
                                <td>MTN005</td>
                                <td>Eze Ngozi</td>
                                <td>WEB101, DB101, SE101</td>
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
                                <td>WEB101</td>
                                <td>Introduction to Web Development</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>DB101</td>
                                <td>Database Management Systems</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>SE101</td>
                                <td>Software Engineering Principles</td>
                                <td>4</td>
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
