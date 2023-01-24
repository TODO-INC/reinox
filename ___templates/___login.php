<?php

$username=$_POST["username"];
$password=$_POST["password"];

$result=User::login($username, $password);

if ($result) {
    // Session::set("is_loggedin", true);
    // Session::set("session_user", $username);
    // print("Login success");?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Login Success</h1>
    </div>
</main>
<?php
} else {
        ?>

<main class="form-signin">
    <form method="post" action="login.php">
        <p>&nbsp;</p>

        <img class="hvr-grow" src="https://www.svgrepo.com/show/76697/outer-space-alien.svg" alt="" width="300"
            height="125">
        <h2></h2>
        <h1 class="h3 mb-3 fw-normal">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign in
        </h1>

        <div class="form-floating">
            <input type="username" class="form-control" id="floatingInput" placeholder="name@example.com"
                name="username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn hvr-shrink btn-primary" type="submit">Sign in</button>

    </form>
</main>
<?php
    }
