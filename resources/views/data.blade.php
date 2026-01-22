<!DOCTYPE html>
<html>
<head>
    <title>Buy Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Buy Data</h2>

<a href="/">Go to Buy Airtime</a>
<br><br>

<form method="POST" action="/buy-data">
    @csrf

    <label>Network</label><br>
    <select name="network" required>
        <option value="">Select Network</option>
        <option value="MTN">MTN</option>
        <option value="Airtel">Airtel</option>
        <option value="Glo">Glo</option>
        <option value="9mobile">9mobile</option>
    </select>
    <br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" placeholder="08012345678" required>
    <br><br>

    <label>Data Plan</label><br>
    <select name="plan" required>
        <option value="500MB">500MB</option>
        <option value="1GB">1GB</option>
        <option value="2GB">2GB</option>
    </select>
    <br><br>

    <button type="submit">Buy Data</button>
</form>

</body>
</html>
