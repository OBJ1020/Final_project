<?php

echo "<h1>Add a New Customer</h1>";

echo '<form method="POST" action="processCustomer.php">
    <label for="customerName">Customer Name:</label>
    <input type="text" id="customerName" name="customerName" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phoneNumber">Phone Number:</label>
    <input type="text" id="phoneNumber" name="phoneNumber" required><br><br>

    <button type="submit">Add Customer</button>
</form>';
?>
