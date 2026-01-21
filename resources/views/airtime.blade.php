<!DOCTYPE html>
<html>
<head>
    <title>Buy Airtime</title>
</head>
<body>

<h3>Your Wallet Balance</h3>
<p>
₦{{ number_format(\App\Models\Wallet::first()->balance) }}
</p>

<hr>

<h1>Buy Airtime</h1>

<form method="POST" action="/pay">
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
<input type="text" name="phone" required>
<br><br>

<label>Amount</label><br>
<input type="number" name="amount" required>
<br><br>

<button type="submit">Buy Airtime</button>
</form>

</body>
</html>
