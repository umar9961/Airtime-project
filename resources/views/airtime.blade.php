<!DOCTYPE html>
<html>
<head>
    <title>Buy Airtime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial; background:#f5f5f5; padding:20px; }
        .box { background:#fff; padding:20px; max-width:400px; margin:auto; border-radius:8px; }
        input, select, button {
            width:100%; padding:10px; margin-top:10px;
        }
        button {
            background:#28a745; color:#fff; border:none;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Buy Airtime</h2>

    <form method="POST" action="/buy-airtime">
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
        <input type="text" name="phone" placeholder="080xxxxxxxx" required>

        <label>Amount (₦)</label>
        <input type="number" name="amount" placeholder="100" required>

        <button type="submit">Continue</button>
    </form>
</div>

</body>
</html>
