<?php

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email_id']) and isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email_id'];
    $phone = $_POST['phone'];
    $error =User::sign_up($username, $password, $email, $phone);
    $signup = true;
}

?>
<?php
if ($signup) {
    if (!$error) {
        ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Signup Success</h1>
        <p class="lead">Now you can login from login page
            <a href="login.php">here</a>
        </p>

    </div>
</main>
<?php
    } else {
        ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Signup Fail</h1>
        <p class="lead">Something went wrong</p>
        <p> <?=$error?>
        </p>
    </div>
</main>
<?php
    }
} else {
    ?>

<main class="form-signup">
    <form method="post" action="signup.php">
        <img class="hvr-grow" src="https://www.svgrepo.com/show/76697/outer-space-alien.svg" alt="" width="300"
            height="125">
        <h2></h2>
        <h1 class="h3 mb-3 fw-normal">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign up
        </h1>
        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInputUsername"
                placeholder="name@example.com">
            <label for="floatingInputUsername">Username</label>
        </div>
        <div class="form-floating">
            <input name="phone" type="text" class="form-control" id="floatingInputUsername"
                placeholder="name@example.com">
            <label for="floatingInputUsername">Phone</label>
        </div>
        <div class="form-floating">
            <input name="email_id" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <p></p>
        <button class="w-100 btn hvr-shrink btn-primary" type="submit">Sign up</button>
    </form>
</main>
<?php
}
