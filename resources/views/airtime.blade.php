<!DOCTYPE html>
<html>
<head>
    <title>Airtime & Data</title>
</head>
<body>

<h2>Buy Airtime</h2>

<form method="POST" action="/buy-airtime">
    @csrf

    <label>Network</label><br>
    <select name="network">
        <option>MTN</option>
        <option>AIRTEL</option>
        <option>GLO</option>
        <option>9MOBILE</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone"><br><br>

    <label>Amount</label><br>
    <input type="number" name="amount"><br><br>

    <button type="submit">Buy Airtime</button>
</form>

<hr>

<h2>Buy Data</h2>

<form method="POST" action="/buy-data">
    @csrf

    <label>Network</label><br>
    <select name="network">
        <option>MTN</option>
        <option>AIRTEL</option>
        <option>GLO</option>
        <option>9MOBILE</option>
    </select><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone"><br><br>

    <label>Data Plan</label><br>
    <select name="plan">
        <option>500MB</option>
        <option>1GB</option>
        <option>2GB</option>
    </select><br><br>

    <button type="submit">Buy Data</button>
</form>

</body>
</html>
