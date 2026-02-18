<?php
session_start();

// Sample payroll data
$payroll_data = [
    ['emp_id' => 'EMP001', 'name' => 'John Okonkwo', 'hourly_rate' => 5000, 'hours_worked' => 160],
    ['emp_id' => 'EMP002', 'name' => 'Mary Adeyemi', 'hourly_rate' => 5500, 'hours_worked' => 160],
    ['emp_id' => 'EMP003', 'name' => 'David Okafor', 'hourly_rate' => 6000, 'hours_worked' => 155],
    ['emp_id' => 'EMP004', 'name' => 'Grace Hassan', 'hourly_rate' => 5200, 'hours_worked' => 160],
    ['emp_id' => 'EMP005', 'name' => 'Samuel Eze', 'hourly_rate' => 5800, 'hours_worked' => 158],
    ['emp_id' => 'EMP006', 'name' => 'Linda Nwosu', 'hourly_rate' => 5500, 'hours_worked' => 160],
    ['emp_id' => 'EMP007', 'name' => 'Michael Oluwaseun', 'hourly_rate' => 6200, 'hours_worked' => 160],
    ['emp_id' => 'EMP008', 'name' => 'Amina Abdullahi', 'hourly_rate' => 5300, 'hours_worked' => 157],
    ['emp_id' => 'EMP009', 'name' => 'Chidi Okoro', 'hourly_rate' => 5900, 'hours_worked' => 160],
    ['emp_id' => 'EMP010', 'name' => 'Zainab Ibrahim', 'hourly_rate' => 5400, 'hours_worked' => 159],
];

// Add more employees with real Nigerian names
$more_names = [
    'Chioma Okonkwo', 'Oluwaseun Adebayo', 'Nkechi Iheanacho', 'Emeka Okoro', 'Amarachi Eze',
    'Tunde Oladele', 'Zainab Hassan', 'Adanna Nwankwo', 'Ifeanyi Uchenna', 'Hauwa Ibrahim',
    'Chinedu Obi', 'Toyin Okafor', 'Blessing Ezeoke', 'Segun Owolabi', 'Amara Njoku',
    'Femi Akintunde', 'Ifeoma Okeke', 'Adebayo Ogunniyi', 'Nonso Ekwensi', 'Ayo Oladele',
    'Chidi Mba', 'Adaeze Okafor', 'Kolade Olatunde', 'Titilola Adekunle', 'Ivor Okonkwo',
    'Anthonia Okafor', 'Adekunle Oseni', 'Onyinyechi Momah', 'Abimbola Adeniyi', 'Kaycee Onuora',
    'Odunayo Bello', 'Chidinma Azubuike', 'Seyi Okonkwo', 'Folasade Oladiji', 'Ifeanyi Okoro',
    'Ijeoma Ayogu', 'Adewale Oladele', 'Chukwuemeka Okoro', 'Yetunde Okafor', 'Amara Hassan',
    'Olufemi Adeniyi', 'Kelechi Okafor', 'Ebube Okeke', 'Tonia Osita', 'Emeka Nwankwo',
    'Zainab Suleiman', 'Fauzy Oluwafemi', 'Adanna Eze', 'Kolawole Olademeji', 'Chinedu Okafor'
];

for ($i = 11; $i <= 55; $i++) {
    $payroll_data[] = [
        'emp_id' => 'EMP' . str_pad($i, 3, '0', STR_PAD_LEFT),
        'name' => $more_names[$i - 11],
        'hourly_rate' => 5000 + rand(0, 2000),
        'hours_worked' => 155 + rand(0, 8)
    ];
}

// Calculate payroll
function calculatePayroll($hourly_rate, $hours_worked, $deduction_percentage = 10) {
    $gross_pay = $hourly_rate * $hours_worked;
    $deduction = ($gross_pay * $deduction_percentage) / 100;
    $net_pay = $gross_pay - $deduction;
    
    return [
        'gross_pay' => $gross_pay,
        'deduction' => $deduction,
        'net_pay' => $net_pay
    ];
}

$deduction_rate = isset($_POST['deduction_rate']) ? floatval($_POST['deduction_rate']) : 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <h1 class="logo">Class Project - Group 1</h1>
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="payroll.php" class="active">Payroll</a></li>
                <li><a href="gpa.php">GPA Calculator</a></li>
                <li><a href="personal.php">Personal Details</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h2>Payroll System</h2>
            <p>Small Company Payroll Calculator for <?php echo count($payroll_data); ?> Employees</p>

            <div class="payroll-section">
                <form method="POST" class="payroll-form">
                    <label for="deduction_rate">Deduction Rate (%):</label>
                    <input type="number" id="deduction_rate" name="deduction_rate" value="<?php echo $deduction_rate; ?>" min="0" max="100" step="0.1">
                    <button type="submit" class="btn">Update Payroll</button>
                </form>

                <div class="info-box">
                    <h3>Employee Payroll Details</h3>
                    <table class="payroll-table">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Hourly Rate (₦)</th>
                                <th>Hours Worked</th>
                                <th>Gross Pay (₦)</th>
                                <th>Deduction (<?php echo $deduction_rate; ?>%)</th>
                                <th>Net Pay (₦)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total_gross = 0;
                            $total_deduction = 0;
                            $total_net = 0;

                            foreach ($payroll_data as $employee) {
                                $payroll = calculatePayroll($employee['hourly_rate'], $employee['hours_worked'], $deduction_rate);
                                $total_gross += $payroll['gross_pay'];
                                $total_deduction += $payroll['deduction'];
                                $total_net += $payroll['net_pay'];
                                ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($employee['emp_id']); ?></td>
                                    <td><?php echo htmlspecialchars($employee['name']); ?></td>
                                    <td>₦<?php echo number_format($employee['hourly_rate'], 2); ?></td>
                                    <td><?php echo $employee['hours_worked']; ?></td>
                                    <td>₦<?php echo number_format($payroll['gross_pay'], 2); ?></td>
                                    <td>₦<?php echo number_format($payroll['deduction'], 2); ?></td>
                                    <td>₦<?php echo number_format($payroll['net_pay'], 2); ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr class="total-row">
                                <td colspan="4"><strong>TOTAL</strong></td>
                                <td><strong>₦<?php echo number_format($total_gross, 2); ?></strong></td>
                                <td><strong>₦<?php echo number_format($total_deduction, 2); ?></strong></td>
                                <td><strong>₦<?php echo number_format($total_net, 2); ?></strong></td>
                            </tr>
                        </tfoot>
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
