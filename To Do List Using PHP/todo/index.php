<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
 <nav>
    
    </nav>
<div id="register">
<input type="checkbox" id="show">
    <label for="show" class="show-btn">Register</label>
<div class="container">
        <h1>Register</h1>
<form method="post" action="connect.php">
				Username : <input type="text" name="username"><br>
                email: <input type="email" name="email"><br>
				Password : <input type="password" name="password"><br>
				<button>Register</button>
                <br>
                <div>Already register...  <a href="login.html">Login</a></div>
            <closeform></closeform></form>
    </div>
</div>
<script>
    function login() {
              alert("Please login first.");
}
</script>
</body>
</html>
