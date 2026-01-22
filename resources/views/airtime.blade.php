<form method="POST" action="/buy-airtime">
    @csrf

    <label>Phone Number</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Amount</label><br>
    <input type="number" name="amount" min="50" required><br><br>

    <button type="submit">Buy Airtime</button>
</form>
