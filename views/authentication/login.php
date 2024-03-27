<?php $this->layout('layout/parent', ['title' => 'Home']) ?>

<section class="account-page">
        <div class="container">
            <div class="row">

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Sign in</span>
                            <span onclick="register()">Sign Up</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="auth/login" methode="post">
                            <h3>Welcome Back!👋</h3>
                            <br>
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="password">
                            <br>
                            <a href="">Forgot password?</a> <br>
                            <button type="submit" class="btn">Login</button>
                            <br>
                            <a href=""><u>Don't have an account? Sign Up</u></a>
                        </form>
                        <form id="RegForm" action="auth/register" methode="post">
                            <h3> Create new account</h3>
                            <br>
                            <input type="text" autocomplete="off" placeholder="Username">
                            <input type="email" autocomplete="off" placeholder="Email">
                            <input type="password" autocomplete="off" placeholder="password">
                            <button type="submit" class="btn">Create Account</button>
                            <br>
                            <a href=""><u>Already have an account? Sign in</u></a>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translatex(0px)";
            Indicator.style.transform = "translatex(100px)";
        }
        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translatex(300px)";
            Indicator.style.transform = "translatex(0px)";
        }


    </script>
    <script src="/phpCrud/web/assets/js/script.js">
    </script>