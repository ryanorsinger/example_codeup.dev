<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First Form</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li>Home</li>
            <li>Blog</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>

    <h1 class="navbar"><a href="">I am not a navbar</a></h1>

    <header>
        This is the header
    </header>

    <main>
        <section class="login_form">
            <h2>User Login</h2>
            <form method="POST" action="/my_first_form.php">
                <p>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Please input your username">
                </p>
                <p>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="text" placeholder="Gimme your secure password">
                </p>

                <label for="email_body">Message Body</label>
                <textarea id="email_body" name="email_body" rows="8" cols="40">Content Here</textarea>

                <p>
                    <button type="submit">Log in</button>
                </p>
            </form>
        </div>
        <hr>
        <div class="send_email_form">
            <h2>Compose an email!</h2>
            <form action="/my_first_form.php" method="POST">
                <label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>

                <p>
                    <label for="from">From</label>
                    <input id="from" name="from" type="text" placeholder="Who are you?">
                </p>
                <p>
                    <label for="to">To</label>
                    <input id="to" name="to" type="text" placeholder="Who do you want to email?">
                </p>
                <p>
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" placeholder="What's the subject?">
                </p>
                <p>
                    <label for="body">Body</label>
                    <br>
                    <textarea name="body" id="body" rows="5" cols="33" placeholder="Body of your message"></textarea>
                </p>
                <button type="submit">Send email</button>
            </form>
        </div>
    </main>
    <footer>
        copyright 2016
    </footer>

</body>
</html>
