<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="register-page">
        <section class="register-card">
            <div class="top-accent"></div>

            <header class="register-header">
                <h1>Create an account</h1>
                <p>Fill in the form below.</p>
            </header>

            <form class="register-form" action="register_process.php" method="post">
                <section class="form-section">
                    <h2>Personal information</h2>

                    <div class="field-pair">
                        <div class="field">
                            <label for="fname">First name</label>
                            <input type="text" id="fname" name="fname" class="input" placeholder="Juan" required>
                        </div>
                        <div class="field">
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" name="lname" class="input" placeholder="Dela Cruz" required>
                        </div>
                    </div>

                    <div class="field">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" class="input" placeholder="you@email.com" required>
                    </div>
                </section>

                <section class="form-section">
                    <h2>Security</h2>

                    <div class="field">
                        <label for="password">Password</label>
                        <div class="password-wrap">
                            <input type="password" id="password" name="password" class="input" placeholder="5–20 characters" minlength="5" maxlength="20" required>
                            <button class="password-toggle" type="button" data-target="password">Show</button>
                        </div>
                        <small class="field-note">Use uppercase, lowercase, and a number.</small>
                    </div>

                    <div class="field">
                        <label for="cpassword">Confirm password</label>
                        <div class="password-wrap">
                            <input type="password" id="cpassword" name="cpassword" class="input" placeholder="Repeat your password" minlength="5" maxlength="20" required>
                            <button class="password-toggle" type="button" data-target="cpassword">Show</button>
                        </div>
                    </div>
                </section>

                <section class="form-section">
                    <h2>Additional details</h2>

                    <div class="field-pair">
                        <div class="field">
                            <label for="birthday">Birthday</label>
                            <input type="date" id="birthday" name="birthday" class="input" required>
                        </div>
                        <div class="field">
                            <label for="course">Course</label>
                            <select id="course" name="course" class="input" required>
                                <option value="" selected disabled>Select course</option>
                                <option value="Bachelor of Information Technology">BSIT</option>
                                <option value="Bachelor of Education">BSED</option>
                                <option value="Criminology">BSCRIM</option>
                                <option value="Bachelor of Computer Science">BSCS</option>
                            </select>
                        </div>
                    </div>

                    <fieldset class="field gender-field">
                        <legend>Gender</legend>
                        <div class="choice-group">
                            <label class="choice-option">
                                <input type="radio" name="gender" value="Male" required>
                                <span>Male</span>
                            </label>
                            <label class="choice-option">
                                <input type="radio" name="gender" value="Female">
                                <span>Female</span>
                            </label>
                            <label class="choice-option">
                                <input type="radio" name="gender" value="Other">
                                <span>Other</span>
                            </label>
                        </div>
                    </fieldset>
                </section>

                <button class="submit-button" type="submit">Create account</button>
            </form>
        </section>
    </main>

    <script>
        document.querySelectorAll(".password-toggle").forEach(function (button) {
            button.addEventListener("click", function () {
                var input = document.getElementById(button.dataset.target);

                if (input.type === "password") {
                    input.type = "text";
                    button.textContent = "Hide";
                } else {
                    input.type = "password";
                    button.textContent = "Show";
                }
            });
        });
    </script>
</body>
</html>
