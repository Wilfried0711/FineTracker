<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="number" name="revenue_amount" placeholder="Revenue Amount" step="0.01" min="0" required>
    <input type="text" name="revenue_description" placeholder="Description">
    <input type="date" name="revenue_date" placeholder="Revenue Date" required>
    <button type="submit">Register</button>
</form>
