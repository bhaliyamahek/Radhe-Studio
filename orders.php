<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Radhe Studio</title>
    <style>
        /* Basic Reset */
        body, h2, p, input, select, textarea {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Page background */
        body {
            background-image: url('images/cemera.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
            font-family: Arial, sans-serif;
        }

        /* Main container */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* White with slight transparency */
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Contact form title */
        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        /* Form Fields */
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* Table styles for displaying contact details */
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Responsive design for mobile devices */
        @media screen and (max-width: 768px) {
            .container {
                padding: 10px;
                margin: 10px;
            }
        }

    </style>
</head>

<body>
    <!-- Table for displaying orders -->
    <div class="container">
        <h3>Recent Orders</h3>
        <table>
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event Date</th>
                    <th>Event Type</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $conn=mysqli_connect("localhost","root","","raphotodb");
                    $res=mysqli_query($conn,"select * from order_detalis");
                    while ($row=mysqli_fetch_row($res)) {
                        
               ?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[2];?></td>
                </tr>
                <?php
                    }
                ?>               
            </tbody>
        </table>
    </div>

</body>

</html>

