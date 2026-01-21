<!DOCTYPE html>
<html>
<head>
    <title>Airtime & Data VTU</title>
</head>
<body>

<h2>Buy Airtime</h2>

<form method="POST" action="/buy-airtime">
    @csrf

    <label>Network</label><br>
    <select name="network" required>
        <option value="">Select Network</option>
        <option value="MTN">MTN</option>
        <option value="AIRTEL">Airtel</option>
        <option value="GLO">Glo</option>
        <option value="9MOBILE">9mobile</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" placeholder="080xxxxxxxx" required><br><br>

    <label>Amount (₦)</label><br>
    <input type="number" name="amount" required><br><br>

    <button type="submit">Buy Airtime</button>
</form>

<hr>

<h2>Buy Data</h2>

<form method="POST" action="/buy-data">
    @csrf

    <label>Network</label><br>
    <select name="network" required>
        <option value="">Select Network</option>
        <option value="MTN">MTN</option>
        <option value="AIRTEL">Airtel</option>
        <option value="GLO">Glo</option>
        <option value="9MOBILE">9mobile</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" placeholder="080xxxxxxxx" required><br><br>

    <label>Data Plan</label><br>
    <select name="plan" required>
        <option value="500MB">500MB</option>
        <option value="1GB">1GB</option>
        <option value="2GB">2GB</option>
    </select><br><br>

    <button type="submit">Buy Data</button>
</form>

</body>
</html>
