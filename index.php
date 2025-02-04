

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: white;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<header>
    <h1>Student Portal</h1>
</header>

<div class="container">
    <h2>Welcome, Student!</h2>
    <p>Here you can manage your course enrollments, check your attendance, and view your schedule.</p>

    <!-- Course Enrollment Section -->
    <h3>Your Enrolled Courses</h3>
    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Instructor</th>
                <th>Enrollment Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <?php foreach ($student['courses'] as $course): ?>
                    <tr>
                        <td><?php echo $course; ?></td>
                        <td><?php echo 'Instructor Name'; ?></td>
                        <td><?php echo date('Y-m-d'); ?></td>
                        <td><a href="#" class="btn">Unenroll</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Attendance Section -->
    <h3>Your Attendance</h3>
    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Attendance Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <?php foreach ($student['attendance'] as $course => $status): ?>
                    <tr>
                        <td><?php echo $course; ?></td>
                        <td><?php echo $status; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Schedule Section -->
    <h3>Your Schedule</h3>
    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Day</th>
                <th>Time</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Math 101</td>
                <td>Monday</td>
                <td>9:00 AM</td>
                <td>Room 101</td>
            </tr>
            <tr>
                <td>Science 101</td>
                <td>Wednesday</td>
                <td>11:00 AM</td>
                <td>Room 102</td>
            </tr>
            <tr>
                <td>History 101</td>
                <td>Friday</td>
                <td>2:00 PM</td>
                <td>Room 201</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>

