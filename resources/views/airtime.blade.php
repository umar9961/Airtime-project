<!DOCTYPE html>
<html>
<head>
    <title>Buy Airtime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .box {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            margin-bottom: 15px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: green;
            color: white;
            border: none;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Buy Airtime</h2>

    <a href="/data">Go to Buy Data</a>

    <form method="POST" action="/pay">
        @csrf

        <label>Network</label>
        <select name="network" required>
            <option value="">Select Network</option>
            <option>MTN</option>
            <option>Airtel</option>
            <option>Glo</option>
            <option>9mobile</option>
        </select>

        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="08012345678" required>

        <label>Amount (₦)</label>
        <input type="number" name="amount" required>

        <button type="submit">Buy Airtime</button>
    </form>
</div>

</body>
</html>
