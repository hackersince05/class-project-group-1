# Class Project - Group 1

A comprehensive web-based application built with PHP using the XAMPP stack to manage group information, payroll, GPA calculations, and personal details.

## Features

### 1. **Home Page**
- Displays group members with matriculation numbers and registered courses
- Shows course details including course codes, titles, and credit units
- Clean tabular layout of all group information

### 2. **Payroll System**
- Calculate payroll for 50+ employees
- Features include:
  - Hourly rate and hours worked
  - Automatic gross pay calculation
  - Configurable deduction percentage
  - Net pay computation
  - Complete payroll summary with totals
  - Currency formatted in Nigerian Naira (₦)

### 3. **GPA Calculator**
- Calculate Grade Point Average for all group members
- First semester grades for three courses:
  - WEB101: Introduction to Web Development
  - DB101: Database Management Systems
  - SE101: Software Engineering Principles
- Features:
  - Letter grades (A, B, C, D, F) based on numerical scores
  - Individual course grades and units
  - GPA summary statistics (Average, Highest, Lowest)
  - 4.0 GPA scale

### 4. **Personal Details**
- Display detailed personal information for each group member:
  - Full name
  - Matriculation number
  - Blood group and blood type
  - State of origin
  - Phone number (clickable for calling)
  - List of hobbies

## Project Structure

```
class group project/
├── index.php                    # Home page
├── pages/
│   ├── payroll.php            # Payroll system
│   ├── gpa.php                # GPA calculator
│   └── personal.php           # Personal details
├── assets/
│   └── css/
│       └── style.css          # Main stylesheet
└── README.md                  # This file
```

## Installation & Setup

### Prerequisites
- XAMPP installed and running
- PHP 7.0 or higher
- A web browser

### Step-by-Step Installation

1. **Copy Project Files**
   - Ensure all project files are in: `C:\xampp\htdocs\class group project\`

2. **Start XAMPP**
   - Open XAMPP Control Panel
   - Click "Start" next to Apache and MySQL

3. **Access the Application**
   - Open your web browser
   - Navigate to: `http://localhost/class%20group%20project/`
   - Or: `http://localhost/class%20group%20project/index.php`

4. **Navigate Between Pages**
   - Use the navigation bar at the top to switch between:
     - Home
     - Payroll
     - GPA Calculator
     - Personal Details

## Features Explained

### Payroll System
- **Deduction Rate**: Adjustable percentage (default: 10%)
- **Calculations**:
  - Gross Pay = Hourly Rate × Hours Worked
  - Deduction = Gross Pay × Deduction Rate
  - Net Pay = Gross Pay - Deduction
- Sample data includes 55 employees

### GPA Calculation
- **Grade Scale**:
  - 90-100: A (4.0 points)
  - 80-89: B (3.5 points)
  - 70-79: C (3.0 points)
  - 60-69: D (2.0 points)
  - Below 60: F (0.0 points)
- **GPA Formula**: (Sum of (Grade Points × Course Units)) / Total Units

### Responsive Design
- The application is fully responsive
- Works on desktop, tablet, and mobile devices
- Mobile navigation optimized for small screens

## Browser Compatibility
- Chrome 60+
- Firefox 55+
- Safari 11+
- Edge 79+

## Customization

### Adding More Students
Edit the respective PHP files to add more student data:
- `index.php` - Add to the members table
- `pages/gpa.php` - Add to the `$students` array
- `pages/personal.php` - Add to the `$members` array

### Changing Colors
Edit `assets/css/style.css` to modify:
- Primary color: `#667eea` (purple-blue)
- Secondary color: `#764ba2` (purple)
- Background colors and gradients

### Adding New Courses
Update the course information in `index.php` to add/remove courses

## Technical Details

### Technologies Used
- **Backend**: PHP 7.0+
- **Frontend**: HTML5, CSS3
- **Database**: Not required (uses PHP arrays for demo data)
- **Server**: Apache (via XAMPP)

### PHP Features Implemented
- Session handling
- Array manipulation
- Mathematical calculations (GPA, Payroll)
- String functions and formatting
- HTML output generation
- Security: htmlspecialchars() for output escaping

## File Descriptions

| File | Purpose |
|------|---------|
| `index.php` | Home page with member and course listings |
| `pages/payroll.php` | Payroll calculation system |
| `pages/gpa.php` | Grade point average calculator |
| `pages/personal.php` | Personal information cards |
| `assets/css/style.css` | Complete styling and responsive design |

## Error Handling

The application includes:
- Session initialization for security
- HTML entity encoding to prevent XSS attacks
- Safe numeric conversions for calculations
- Responsive error-free design

## Future Enhancements

Potential features for future versions:
- Database integration (MySQL)
- User authentication and login system
- File upload functionality
- PDF export for payroll/GPA reports
- Email notifications
- Admin panel for data management
- Search and filter functionality
- Data validation on forms

## Support

For issues or questions:
1. Ensure XAMPP is running properly
2. Check that all files are in the correct directory
3. Clear browser cache and refresh
4. Verify PHP version compatibility

## License

This project is created for educational purposes as part of a class assignment.

## Author

Class Project Group 1 - 2026

---

**Last Updated**: February 2026
