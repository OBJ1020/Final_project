<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Restaurant Reservation</h1>
    <p style="text-align: center;">Manage reservations, customers, and preferences easily.</p>
    <ul>
        <li><a href="index.php?action=addReservation">Add a Reservation</a></li>
        <li><a href="index.php?action=viewReservations">View All Reservations</a></li>
        <li><a href="index.php?action=addCustomer">Add a New Customer</a></li>
        <li><a href="index.php?action=managePreferences">Manage Customer Preferences</a></li>
    </ul>
</body>
</html>
