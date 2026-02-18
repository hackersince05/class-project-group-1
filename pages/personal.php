<?php
session_start();

// Personal details of group members
$members = [
    [ 'matric' => '23/0038', 'name' => 'ADEBAJO OLUWATONI ESTHER', 'blood_group' => 'O+', 'state_of_origin' => 'Oyo', 'phone_number' => '+234 802 345 6738', 'hobbies' => ['Volunteering','Reading','Basketball'] ],
    [ 'matric' => '23/0281', 'name' => 'ADENUBI GBENGA ISAIAH', 'blood_group' => 'A+', 'state_of_origin' => 'Lagos', 'phone_number' => '+234 803 456 6781', 'hobbies' => ['Coding','Photography','Football'] ],
    [ 'matric' => '22/0129', 'name' => 'ADEOLA ENITAN-AYO OLUWASEUN', 'blood_group' => 'B+', 'state_of_origin' => 'Ondo', 'phone_number' => '+234 804 567 6129', 'hobbies' => ['Design','Blogging','Traveling'] ],
    [ 'matric' => '22/0259', 'name' => 'AGOMUO WISDOM CHIEMEZIE', 'blood_group' => 'O-', 'state_of_origin' => 'Enugu', 'phone_number' => '+234 805 678 7259', 'hobbies' => ['Gaming','Music','Programming'] ],
    [ 'matric' => '22/0166', 'name' => 'ALABI REUBEN OSIGBODI', 'blood_group' => 'AB+', 'state_of_origin' => 'Edo', 'phone_number' => '+234 806 789 7166', 'hobbies' => ['Chess','Reading','Coding'] ],
    [ 'matric' => '23/0076', 'name' => 'ALO OLUWATOBI PETER', 'blood_group' => 'A-', 'state_of_origin' => 'Imo', 'phone_number' => '+234 807 890 7076', 'hobbies' => ['Volleyball','Coding','Hiking'] ],
    [ 'matric' => '23/0219', 'name' => 'ALOZIE FAVOUR CHIZURUOKE', 'blood_group' => 'B-', 'state_of_origin' => 'Anambra', 'phone_number' => '+234 808 901 7219', 'hobbies' => ['Dancing','Singing','Drawing'] ],
    [ 'matric' => '22/2227', 'name' => 'APAGU DAVID', 'blood_group' => 'O+', 'state_of_origin' => 'Delta', 'phone_number' => '+234 809 012 2227', 'hobbies' => ['Football','Cooking','Traveling'] ],
    [ 'matric' => '23/0287', 'name' => 'CHRIS-ESEZOBOR EJODAMEN GEORGE', 'blood_group' => 'A+', 'state_of_origin' => 'Rivers', 'phone_number' => '+234 810 123 8287', 'hobbies' => ['Music Production','Basketball','Photography'] ],
    [ 'matric' => '23/0268', 'name' => 'EGBU PRINCESS RONI', 'blood_group' => 'AB-', 'state_of_origin' => 'Anambra', 'phone_number' => '+234 811 234 6268', 'hobbies' => ['Fashion','Blogging','Photography'] ],
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
