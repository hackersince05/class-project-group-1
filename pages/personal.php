<?php
session_start();

// Personal details of group members
$members = [
    [
        'matric' => '23/0001',
        'name' => 'Egbu Roni',
        'blood_group' => 'O+',
        'state_of_origin' => 'Enugu',
        'phone_number' => '+234 802 345 6701',
        'hobbies' => ['Programming', 'Reading', 'Gaming', 'Football']
    ],
    [
        'matric' => '23/0002',
        'name' => 'Chris-Esezobor Ejodamen',
        'blood_group' => 'A+',
        'state_of_origin' => 'Lagos',
        'phone_number' => '+234 803 456 7802',
        'hobbies' => ['Music Production', 'Basketball', 'Photography', 'Drawing']
    ],
    [
        'matric' => '23/0003',
        'name' => 'Alozie Favour',
        'blood_group' => 'B+',
        'state_of_origin' => 'Anambra',
        'phone_number' => '+234 804 567 8903',
        'hobbies' => ['Design', 'Cooking', 'Painting', 'Badminton']
    ],
    [
        'matric' => '23/0004',
        'name' => 'Adenubi Gbenga',
        'blood_group' => 'AB+',
        'state_of_origin' => 'Kano',
        'phone_number' => '+234 805 678 9004',
        'hobbies' => ['Web Development', 'Cycling', 'Movies', 'Teaching']
    ],
    [
        'matric' => '23/0005',
        'name' => 'Alo Oluwatobi',
        'blood_group' => 'O-',
        'state_of_origin' => 'Imo',
        'phone_number' => '+234 806 789 0105',
        'hobbies' => ['Coding', 'Volleyball', 'Writing', 'Traveling']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <h1 class="logo">Class Project - Group 1</h1>
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="payroll.php">Payroll</a></li>
                <li><a href="gpa.php">GPA Calculator</a></li>
                <li><a href="personal.php" class="active">Personal Details</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h2>Personal Details</h2>
            <p>Information about Group Members</p>

            <div class="personal-section">
                <?php
                foreach ($members as $member) {
                    ?>
                    <div class="member-card">
                        <div class="card-header">
                            <h3><?php echo htmlspecialchars($member['name']); ?></h3>
                            <p class="matric"><?php echo htmlspecialchars($member['matric']); ?></p>
                        </div>
                        <div class="card-body">
                            <div class="detail-row">
                                <span class="label">Name of Student:</span>
                                <span class="value"><?php echo htmlspecialchars($member['name']); ?></span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Blood Group:</span>
                                <span class="value"><?php echo htmlspecialchars($member['blood_group']); ?></span>
                            </div>
                            <div class="detail-row">
                                <span class="label">State of Origin:</span>
                                <span class="value"><?php echo htmlspecialchars($member['state_of_origin']); ?></span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Phone Number:</span>
                                <span class="value"><a href="tel:<?php echo str_replace(' ', '', $member['phone_number']); ?>"><?php echo htmlspecialchars($member['phone_number']); ?></a></span>
                            </div>
                            <div class="detail-row hobbies">
                                <span class="label">List of Hobbies:</span>
                                <div class="hobbies-list">
                                    <?php
                                    foreach ($member['hobbies'] as $hobby) {
                                        ?>
                                        <span class="hobby-tag"><?php echo htmlspecialchars($hobby); ?></span>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Class Project Group 1. All rights reserved.</p>
    </footer>
</body>
</html>
