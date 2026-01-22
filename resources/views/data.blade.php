<!DOCTYPE html>
<html>
<head>
    <title>Buy Data</title>
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
            background: blue;
            color: white;
            border: none;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Buy Data</h2>

    <a href="/">Go to Buy Airtime</a>

    <form method="POST" action="/buy-data">
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

        <label>Data Plan</label>
        <select name="plan">
            <option>500MB</option>
            <option>1GB</option>
            <option>2GB</option>
        </select>

        <button type="submit">Buy Data</button>
    </form>
</div>

</body>
</html>
