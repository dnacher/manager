<?php
/**********************************************************
* File: signIn.php
* Author: Br. Burton
* 
* Description: This page has a form for the user to sign in.
*
* In this case, to show another approach, we will have this
* page have two purposes, it will have the form for signing
* in, but it will also have the logic to check a username
* and password and redirect the user to the home page if
* everything checks out. Thus it will post to itself.
***********************************************************/
// If you have an earlier version of PHP (earlier than 5.5)
// You need to download and include password.php.
//require("password.php"); // used for password hashing.
session_start();
/*$badLogin = false;
// First check to see if we have post variables, if not, just
// continue on as always.


if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
    // they have submitted a username and password for us to check
    $username = $_POST['txtUser'];
    $password = $_POST['txtPassword'];
    // Connect to the DB
    require("dbConnect.php");
    $db = get_db();
    $query = 'SELECT password FROM login WHERE username=:username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $result = $statement->execute();
    if ($result)
    {
        $row = $statement->fetch();
        $hashedPasswordFromDB = $row['password'];
        // now check to see if the hashed password matches
        if (password_verify($password, $hashedPasswordFromDB))
        {
            // password was correct, put the user on the session, and redirect to home
            $_SESSION['username'] = $username;*/
            header("Location: home.php");
       /*     die(); // we always include a die after redirects.
        }
        else
        {
            $badLogin = true;
        }
    }
    else
    {
        $badLogin = true;
    }
}*/
// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<?php
if ($badLogin)
{
    echo "Incorrect username or password!<br /><br />\n";
}
?>

<h1>Please sign in below:</h1>
        <form action="controller.php" method="post">
            <img src="mainlogo.png" alt="mainlogo">
            <h2> Sign up <h2>
                <input type="text" placeholder="User name" name="user" required>                
                <input name="password" placeholder="&#128272; Password" required="required" type="password" id="password" />            
                <input name="password_confirm" placeholder="&#128272; confirm Password" required="required" type="password" id="password_confirm" oninput="check(this)" />
                <script language='javascript' type='text/javascript'>
                    function check(input) {
                        if (input.value != document.getElementById('password').value) {
                            input.setCustomValidity('Password Must be Matching.');
                        } else {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
                    }
                </script>               
                <input type="submit" value="Sign up" value="Login">
                <a href="login.php">I already have an account</a>
        </form>
</body>
</html>