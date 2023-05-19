<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REHLA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'DM Sans', sans-serif;
        }

        body {
            width: 100%;
            height: auto;
        }

        main section.section-login {
            width: 100%;
            height: 100%;
            background: url(https://rvs-gradie-signup-page.vercel.app/Assets/Background.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main section.section-login .section-main {
            width: 60%;
            height: auto;
            display: flex;
        }

        main section.section-login .section-main .section-login-1,
        main section.section-login .section-login-2 {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #013243;
        }

        main section.section-login .section-main .section-login-1 .section-login-1-main {
            width: 100%;
            /* height: 100%; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-top: 50px;
        }

        main section.section-login .section-main .section-login-1 .section-login-1-main .section-login-1-title {
            font-size: 32px;
            color: #fff;
        }

        main section.section-login .section-main .section-login-1 .section-login-1-main .section-login-1-text {
            color: #ffffff94;
            font-size: 18px;
        }

        main section.section-login .section-main .section-login-1 .section-login-1-main .section-login-1-img {
            width: 100%;
        }

        main section.section-login .section-main .section-login-1 .section-login-1-main .section-login-1-img img {
            width: 100%;
            display: block;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main {
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-title {
            font-size: 32px;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            row-gap: 20px;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-1,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-2,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-3 {
            display: flex;
            flex-direction: column;
            row-gap: 8px;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-1 label,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-2 label,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-3 label {
            font-weight: 500;
            font-size: 15px;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-1 input,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-2 input,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-3 input {
            padding: 12px 15px;
            border: 1px solid #e9e6e6;
            border-radius: 4px;
            outline: none;
            font-size: 16px;
            width: 100%;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-4 {
            display: flex;
            column-gap: 7px;
            align-items: center;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-4 p,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-5 p {
            font-size: 14px;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-4 p a,
        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-5 p a {
            font-weight: bold;
            color: #5a1fe0;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-submit-btn button {
            /* background: #5a1fe0; */
            background: #5a1fe096;
            padding: 14px;
            width: 100%;
            color: #fff;
            outline: none;
            border: 0px;
            border-radius: 5px;
            font-size: 14px;
            cursor: auto;
        }

        main section.section-login .section-main .section-login-2 .section-login-2-main .section-login-2-form .login-form-5 p {
            text-align: center;
        }

        @media only screen and (max-width: 1200px) {

            /* login page */
            main section.section-login .section-login-1 .section-login-1-main,
            main section.section-login .section-login-2 .section-login-2-main {
                width: 85%;
            }

            main section.section-login .section-login-1 .section-login-1-main .section-login-1-title,
            main section.section-login .section-login-1 .section-login-1-main .section-login-1-form {
                margin-top: 35px;
            }

            main section.section-login .section-main {
                width: 75%
            }
        }

        @media only screen and (max-width: 900px) {

            /* login page */
            main section.section-login .section-main {
                padding: 35px 0px;
            }

            main section.section-login .section-login-1 .section-login-1-main,
            main section.section-login .section-login-2 .section-login-2-main {
                width: 90%;
            }

            main section.section-login .section-login-1 .section-login-1-main {
                height: 90%;
            }

            main section.section-login .section-login-1 .section-login-1-main .section-login-1-title,
            main section.section-login .section-login-1 .section-login-1-main .section-login-1-form {
                margin-top: 25px;
            }

            main section.section-login .section-main {
                flex-direction: column;
                width: 75%;
                padding: 50px 0px;
            }

            main section.section-login .section-main .section-login-1,
            main section.section-login .section-login-2 {
                width: 100%;
            }

            main section.section-login {
                height: unset;
            }
        }

        @media only screen and (max-width: 600px) {
            main section.section-login .section-main {
                width: 100%;
                padding: 0px;
            }

            main section.section-login .section-main .section-login-2 .section-login-2-main {
                padding: 35px 25px;
            }
        }
    </style>
</head>

<body>
    <main>
        <section class="section-login">
            <div class="section-main">
                <div class="section-login-1">
                    <div class="section-login-1-main">

                        <h1 class="section-login-1-title">Gradie</h1>
                        <p class="section-login-1-text">Beautiful gradients in seconds.</p>
                        <div class="section-login-1-img">
                            <img src="https://rvs-gradie-signup-page.vercel.app/Assets/iPhone-Mockup.png"
                                alt="">
                        </div>

                    </div>
                </div>
                <div class="section-login-2">
                    <div class="section-login-2-main">
                        <h1 class="section-login-2-title">تسجيل الدخول</h1>
                        <form action="{{ route('register.store') }}" method="POST" class="section-login-2-form">
                            @csrf
                            <div class="login-form-1">
                                <label for="input-text">الاسم</label>
                                <input type="text" name="name" id="input-text" placeholder="Name"
                                    class="is-invalid">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="login-form-1">
                                <label for="input-email">البريد الالكتروني</label>
                                <input type="text" name="email" id="input-email" placeholder="john@example.com"
                                    class="is-invalid">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="login-form-1">
                                <label for="input-text">العنوان</label>
                                <input type="text" name="location" id="input-text" placeholder="Location"
                                    class="is-invalid">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="login-form-3">
                                <label for="input-password">الباسورد</label>
                                <input type="password" name="password" id="input-password"
                                    placeholder="At least 8 characters" class="is-invalid">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="login-form-3">
                                <label for="input-password">تاكيد الباسورد</label>
                                <input type="password" name="password_confirmation" id="input-password"
                                    placeholder="Password Confirmation" class="is-invalid">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="login-form-4">
                                <input type="checkbox" id="input-checkbox">
                                <p>من خلال إنشاء حساب ، فإنك توافق على <a href="#"> الشروط والأحكام.</a>
                                </p>
                            </div>
                            <div class="login-form-submit-btn">
                                <button id="submit" type="submit" disabled="disabled">تسجيل الدخول</button>
                            </div>
                            <div class="login-form-5">
                                <p>هل لديك حساب؟ <a href="{{ route('login') }}">تسجيل الدخول</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('#input-checkbox').change(function(e) {
            e.preventDefault();
            var button = $('#submit');
            if ($('#input-checkbox').is(":checked")) {
                button.removeAttr('disabled').css({
                    'background-color': '#5a1fe0',
                    'cursor': 'pointer'
                });
            } else {
                button.attr('disabled', 'disabled').css({
                    'background-color': '#5a1fe096',
                    'cursor': 'auto'
                });
            }
        });
    </script>

</body>

</html>
