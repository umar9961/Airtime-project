<!DOCTYPE html>
<html>
<head>
    <title>Buy Airtime</title>
</head>
<body>

<h1>Buy Airtime</h1>

<form method="POST" action="/pay">
    @csrf

    <label>Network:</label><br>
    <select name="network" required>
        <option value="">Select Network</option>
        <option value="MTN">MTN</option>
        <option value="AIRTEL">Airtel</option>
        <option value="GLO">Glo</option>
        <option value="9MOBILE">9mobile</option>
    </select>
    <br><br>

    <label>Phone Number:</label><br>
    <input type="text" name="phone" placeholder="080xxxxxxxx" required>
    <br><br>

    <label>Amount (₦):</label><br>
    <input type="number" name="amount" required>
    <br><br>

    <button type="submit">Buy Airtime</button>
</form>

</body>
</html>
