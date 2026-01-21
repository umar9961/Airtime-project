<!DOCTYPE html>
<html>
<head>
    <title>Buy Airtime</title>
</head>
<body>

<h1>Buy Airtime</h1>

<form method="POST" action="/pay">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <p>
        Network:<br>
        <select name="network">
            <option value="">Select Network</option>
            <option value="MTN">MTN</option>
            <option value="Airtel">Airtel</option>
            <option value="Glo">Glo</option>
            <option value="9mobile">9mobile</option>
        </select>
    </p>

    <p>
        Phone Number:<br>
        <input type="text" name="phone">
    </p>

    <p>
        Amount (₦):<br>
        <input type="number" name="amount">
    </p>

    <button type="submit">Buy Airtime</button>
</form>

</body>
</html>
