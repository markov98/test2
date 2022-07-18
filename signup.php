<HTML>
    <head>
    <HTML>
    <head>
        <title>Markov's Corner</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <meta charset="utf8">
    <body>

    <h1>Markov's Corner</h1>
        <nav>
            <a href="index.html">Home</a> |
            <a href="aboutme.html">About Me</a> |
            <a href="login.php">Log In</a> |
            Sign Up
        </nav>

    <form action="action_page.php">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
        </div>

    </div>
    </form> 
    </body>
</HTML>