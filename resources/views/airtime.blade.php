<!DOCTYPE html>
<html>
<head>
    <title>Airtime & Data</title>
</head>
<body>

<h1>Airtime & Data Purchase</h1>

<!-- AIRTIME FORM -->
<h2>Buy Airtime</h2>
<form method="POST" action="/buy-airtime">
    @csrf

    <label>Network</label><br>
    <select name="network" required>
        <option value="">Select Network</option>
        <option>MTN</option>
        <option>AIRTEL</option>
        <option>GLO</option>
        <option>9MOBILE</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" placeholder="080xxxxxxxx" required><br><br>

    <label>Amount (₦)</label><br>
    <input type="number" name="amount" required><br><br>

    <button type="submit">Buy Airtime</button>
</form>

<hr>

<!-- DATA FORM -->
<h2>Buy Data</h2>
<form method="POST" action="/buy-data">
    @csrf

    <label>Network</label><br>
    <select name="network" required>
        <option value="">Select Network</option>
        <option>MTN</option>
        <option>AIRTEL</option>
        <option>GLO</option>
        <option>9MOBILE</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" placeholder="080xxxxxxxx" required><br><br>

    <label>Data Plan</label><br>
    <select name="plan" required>
        <option value="">Select Plan</option>
        <option>500MB</option>
        <option>1GB</option>
        <option>2GB</option>
        <option>5GB</option>
    </select><br><br>

    <button type="submit">Buy Data</button>
</form>

</body>
</html>
