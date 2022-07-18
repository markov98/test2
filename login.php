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
            Log In |
            <a href="signin.php">Sign Up</a>
          </nav>
      
     </br>
      
     <form action="action_page.php" method="post">

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
        </br>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
        </br>
          <button type="submit">Login</button>
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
        <div class="container">
        </br>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        </br>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </form>
    </body>
</HTML>