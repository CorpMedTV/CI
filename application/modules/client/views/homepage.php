

<link rel="stylesheet" href="<?= base_url('assets/css/client_homepage.css') ?>">

<body>
    <section class="wrapper">
        <div class="form signup">
            <header>Signup</header>
            <form action="#">
                <input type="text" placeholder="Full name" required />
                <input type="text" placeholder="Email address" required />
                <input type="password" placeholder="Password" required />
                <div class="checkbox">
                    <input type="checkbox" id="signupCheck" />
                    <label for="signupCheck">I accept all terms & conditions</label>
                </div>
                <input type="submit" value="Signup" />
            </form>
        </div>
        <div class="form login">
            <header>Login</header>
            <form action="#">
                <input type="text" placeholder="Email address" required />
                <input type="password" placeholder="Password" required />
                <a href="#">Forgot password?</a>
                <input type="submit" value="Login" />
            </form>
        </div>
        <script>
            const wrapper = document.querySelector(".wrapper"),
                signupHeader = document.querySelector(".signup header"),
                loginHeader = document.querySelector(".login header");
            loginHeader.addEventListener("click", () => {
                wrapper.classList.add("active");
            });
            signupHeader.addEventListener("click", () => {
                wrapper.classList.remove("active");
            });
        </script>
    </section>
</body>

</html>