<!DOCTYPE html>
<html>
<head>
    <title>Airtime Purchase</title>
</head>
<body>

<h2>Buy Airtime</h2>

<form method="POST" action="process.php">
    <label>Network</label><br>
    <select name="network" required>
        <option value="MTN">MTN</option>
        <option value="Airtel">Airtel</option>
        <option value="Glo">Glo</option>
        <option value="9mobile">9mobile</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Amount (₦)</label><br>
    <input type="number" name="amount" required><br><br>

    <button type="submit">Buy Airtime</button>
</form>

</body>
</html>
