<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- ✅ THIS FIXES MOBILE CLICK ISSUE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buy Airtime</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:active {
            background: darkgreen;
        }
    </style>
</head>
<body>

<h2>Buy Airtime</h2>

<form method="POST" action="/pay">
    @csrf

    <label>Network</label>
    <select name="network" required>
        <option value="">Select Network</option>
        <option value="MTN">MTN</option>
        <option value="Airtel">Airtel</option>
        <option value="Glo">Glo</option>
        <option value="9mobile">9mobile</option>
    </select>

    <label>Phone Number</label>
    <input type="tel" name="phone" placeholder="08012345678" required>

    <label>Amount (₦)</label>
    <input type="number" name="amount" placeholder="100" required>

    <button type="submit">Buy Airtime</button>
</form>

</body>
</html>
