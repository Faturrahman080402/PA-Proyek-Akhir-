<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../CSS/LR.css" />
    <title></title>
</head>

<body>
    <script src="../JS/register.js"></script>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="/register.php">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="name" required />
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" name="username" required />
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required />
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required />
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="confirm-password" required />
                        <label for="">Confirm Password</label>
                    </div>
                    <button type="submit"><a href="/log-in.html">Register</a></button>
                    <div class="register">
                        <p>Already have an account? <a href="../PHP/login.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>