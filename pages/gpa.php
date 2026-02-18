<?php
session_start();

// Student grades for first semester
$students = [
    [
        'matric' => 'MTN001',
        'name' => 'Chukwu Obinna',
        'courses' => [
            ['code' => 'WEB101', 'title' => 'Introduction to Web Development', 'score' => 78, 'units' => 3],
            ['code' => 'DB101', 'title' => 'Database Management Systems', 'score' => 85, 'units' => 3],
            ['code' => 'SE101', 'title' => 'Software Engineering Principles', 'score' => 88, 'units' => 4],
        ]
    ],
    [
        'matric' => 'MTN002',
        'name' => 'Adeyemi Toluwani',
        'courses' => [
            ['code' => 'WEB101', 'title' => 'Introduction to Web Development', 'score' => 82, 'units' => 3],
            ['code' => 'DB101', 'title' => 'Database Management Systems', 'score' => 79, 'units' => 3],
            ['code' => 'SE101', 'title' => 'Software Engineering Principles', 'score' => 92, 'units' => 4],
        ]
    ],
    [
        'matric' => 'MTN003',
        'name' => 'Okafor Chioma',
        'courses' => [
            ['code' => 'WEB101', 'title' => 'Introduction to Web Development', 'score' => 90, 'units' => 3],
            ['code' => 'DB101', 'title' => 'Database Management Systems', 'score' => 87, 'units' => 3],
            ['code' => 'SE101', 'title' => 'Software Engineering Principles', 'score' => 85, 'units' => 4],
        ]
    ],
    [
        'matric' => 'MTN004',
        'name' => 'Hassan Muhammad',
        'courses' => [
            ['code' => 'WEB101', 'title' => 'Introduction to Web Development', 'score' => 76, 'units' => 3],
            ['code' => 'DB101', 'title' => 'Database Management Systems', 'score' => 81, 'units' => 3],
            ['code' => 'SE101', 'title' => 'Software Engineering Principles', 'score' => 79, 'units' => 4],
        ]
    ],
    [
        'matric' => 'MTN005',
        'name' => 'Eze Ngozi',
        'courses' => [
            ['code' => 'WEB101', 'title' => 'Introduction to Web Development', 'score' => 88, 'units' => 3],
            ['code' => 'DB101', 'title' => 'Database Management Systems', 'score' => 91, 'units' => 3],
            ['code' => 'SE101', 'title' => 'Software Engineering Principles', 'score' => 89, 'units' => 4],
        ]
    ]
];

// Calculate GPA
function calculateGPA($courses) {
    $total_points = 0;
    $total_units = 0;
    
    foreach ($courses as $course) {
        $score = $course['score'];
        $units = $course['units'];
        
        // Grade calculation: 4.0 scale
        if ($score >= 90) $grade_point = 4.0;
        elseif ($score >= 80) $grade_point = 3.5;
        elseif ($score >= 70) $grade_point = 3.0;
        elseif ($score >= 60) $grade_point = 2.0;
        else $grade_point = 0.0;
        
        $total_points += ($grade_point * $units);
        $total_units += $units;
    }
    
    $gpa = $total_units > 0 ? round($total_points / $total_units, 2) : 0;
    return $gpa;
}

function getLetterGrade($score) {
    if ($score >= 90) return 'A';
    elseif ($score >= 80) return 'B';
    elseif ($score >= 70) return 'C';
    elseif ($score >= 60) return 'D';
    else return 'F';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <h1 class="logo">Class Project - Group 1</h1>
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="payroll.php">Payroll</a></li>
                <li><a href="gpa.php" class="active">GPA Calculator</a></li>
                <li><a href="personal.php">Personal Details</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h2>GPA Calculator - First Semester</h2>
            <p>Grade Point Average for Group Members</p>

            <div class="gpa-section">
                <?php
                $avg_gpa = 0;
                $highest_gpa = 0;
                $lowest_gpa = 5.0;
                $gpa_list = [];

                foreach ($students as $student) {
                    $gpa = calculateGPA($student['courses']);
                    $gpa_list[] = $gpa;
                    $avg_gpa += $gpa;
                    if ($gpa > $highest_gpa) $highest_gpa = $gpa;
                    if ($gpa < $lowest_gpa) $lowest_gpa = $gpa;
                    ?>
                    <div class="info-box">
                        <h3><?php echo htmlspecialchars($student['name']); ?> (<?php echo htmlspecialchars($student['matric']); ?>)</h3>
                        <table class="gpa-table">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Title</th>
                                    <th>Units</th>
                                    <th>Score</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($student['courses'] as $course) {
                                    ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($course['code']); ?></td>
                                        <td><?php echo htmlspecialchars($course['title']); ?></td>
                                        <td><?php echo $course['units']; ?></td>
                                        <td><?php echo $course['score']; ?></td>
                                        <td class="grade-<?php echo strtolower(getLetterGrade($course['score'])); ?>">
                                            <?php echo getLetterGrade($course['score']); ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="gpa-result">
                            <h4>First Semester GPA: <span class="gpa-value"><?php echo $gpa; ?>/4.0</span></h4>
                        </div>
                    </div>
                    <?php
                }

                $avg_gpa = count($students) > 0 ? round($avg_gpa / count($students), 2) : 0;
                ?>

                <div class="info-box summary">
                    <h3>GPA Summary</h3>
                    <div class="summary-stats">
                        <div class="stat">
                            <h4>Average GPA</h4>
                            <p class="stat-value"><?php echo $avg_gpa; ?>/4.0</p>
                        </div>
                        <div class="stat">
                            <h4>Highest GPA</h4>
                            <p class="stat-value"><?php echo $highest_gpa; ?>/4.0</p>
                        </div>
                        <div class="stat">
                            <h4>Lowest GPA</h4>
                            <p class="stat-value"><?php echo $lowest_gpa; ?>/4.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Class Project Group 1. All rights reserved.</p>
    </footer>
</body>
</html>
