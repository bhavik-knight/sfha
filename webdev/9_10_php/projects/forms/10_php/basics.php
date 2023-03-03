<h1>registration form</h1>

<form action="uri.php" method="post">
    <div>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName">
        <label for="lastName">Last Name</label>
        <input type"text" name="lastName" id="lastName">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <label for="about">About me</label>
        <textarea type="text" name="about" id="about"></textarea>
    </div>

    <input type="submit" value="register">
</form>