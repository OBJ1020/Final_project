<?php
require_once 'RestaurantDatabase.php';

$db = new RestaurantDatabase();
$reservations = $db->getAllReservations();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Reservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            display: block;
            text-align: center;
            margin: 20px auto;
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>All Reservations</h1>

    <?php if (!empty($reservations)): ?>
    <table>
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Customer ID</th>
                <th>Reservation Time</th>
                <th>Number of Guests</th>
                <th>Special Requests</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= htmlspecialchars($reservation['reservationId']) ?></td>
                <td><?= htmlspecialchars($reservation['customerId']) ?></td>
                <td><?= htmlspecialchars($reservation['reservationTime']) ?></td>
                <td><?= htmlspecialchars($reservation['numberOfGuests']) ?></td>
                <td><?= htmlspecialchars($reservation['specialRequests']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p style="text-align: center;">No reservations found.</p>
    <?php endif; ?>

    <a href="home.php">Back to Home</a>
</body>
</html>
