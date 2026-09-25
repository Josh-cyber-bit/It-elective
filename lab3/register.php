<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <main class="register-page container py-4 py-md-5">
        <section class="register-card card border-0 shadow-sm mx-auto">
            <div class="top-accent"></div>

            <header class="register-header text-center">
                <h1 class="h3 fw-bold">Create an account</h1>
                <p class="text-secondary mb-0">Fill in the form below.</p>
            </header>

            <form class="register-form" action="register_process.php" method="post">
                <fieldset class="form-section border-0 p-0">
                    <legend>Personal information</legend>

                    <div class="row g-3">
                        <div class="field col-md-6">
                            <label class="form-label" for="fname">First name</label>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="Juan" required>
                        </div>
                        <div class="field col-md-6">
                            <label class="form-label" for="lname">Last name</label>
                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Dela Cruz" required>
                        </div>
                    </div>

                    <div class="field mt-3">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="you@email.com" required>
                    </div>
                </fieldset>

                <fieldset class="form-section border-0 p-0">
                    <legend>Security</legend>

                    <div class="field">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="5–20 characters" minlength="5" maxlength="20" required>
                            <button class="password-toggle btn btn-outline-secondary" type="button" data-target="password">Show</button>
                        </div>
                        <div class="form-text">Use uppercase, lowercase, and a number.</div>
                    </div>

                    <div class="field">
                        <label class="form-label" for="cpassword">Confirm password</label>
                        <div class="input-group">
                            <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Repeat your password" minlength="5" maxlength="20" required>
                            <button class="password-toggle btn btn-outline-secondary" type="button" data-target="cpassword">Show</button>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-section border-0 p-0 mb-0">
                    <legend>Additional details</legend>

                    <div class="row g-3">
                        <div class="field col-md-6">
                            <label class="form-label" for="birthday">Birthday</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" required>
                        </div>
                        <div class="field col-md-6">
                            <label class="form-label" for="course">Course</label>
                            <select id="course" name="course" class="form-select" required>
                                <option value="" selected disabled>Select course</option>
                                <option value="Bachelor of Information Technology">BSIT</option>
                                <option value="Bachelor of Education">BSED</option>
                                <option value="Criminology">BSCRIM</option>
                                <option value="Bachelor of Computer Science">BSCS</option>
                            </select>
                        </div>
                    </div>

                    <div class="field mt-3">
                        <span class="form-label d-block">Gender</span>
                        <div class="choice-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="Male" required>
                                <label class="form-check-label" for="gender-male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-female" value="Female">
                                <label class="form-check-label" for="gender-female">Female</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-other" value="Other">
                                <label class="form-check-label" for="gender-other">Other</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <button class="submit-button btn btn-primary w-100 mt-4 py-2" type="submit">Create account</button>
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
