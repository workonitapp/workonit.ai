<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="facebook-domain-verification" content="mat5ybp55tf7qbx31hb214p7rcfn6a" />
    <link rel="stylesheet" href="{{ url('assest/style.css') }}" />
</head>

<body class="_widget-auto-layout">
    <div class="oai-wrapper">
        <header class="oai-header"></header>
        <main class="_widget login-id">
            <section class="cf93c37e0 _prompt-box-outer c0ccc2e41">
                <div class="cbeab5b12 cc55737ca">
                    <div class="c29e7b4da">
                        <header class="c8a98d04c c38e24e0e">
                            <h1 class="c3f16bbb8 c15aaf151">Welcome back</h1>
                            <div class="c72fb3216 c23d69759">
                                <p class="c192ddc3e cfcd4ae5f">
                                    Log in to WorkOnIt to continue to Apps Client.
                                </p>
                            </div>
                        </header>
                        <div class="cdf8ec7e1 c546fd776">
                            <div class="c8822552e cfa4fc908">
                                <div class="c1a1eca04">
                                    <form method="POST" action="{{ url('/login') }}">
                                        @csrf
                                        <input type="hidden" name="state"
                                            value="hKFo2SAwSTA3VHJCVVFOSGNoUElaZVAtMGN4ZjVqcXhPTExSOKFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIDJSY25sSTVOOWgxOWZnSi1VSWJ5UzRJajlUQVR5b3FJo2NpZNkgVGRKSWNiZTE2V29USHROOTVueXl3aDVFNHlPbzZJdEc" />

                                        <div class="c8822552e cfa4fc908">
                                            <div class="c1a1eca04">
                                                <div class="input-wrapper _input-wrapper">
                                                    <div class="ccaa5e013 cc158b895 text caeeb774a cb5f4882f"
                                                        data-action-text="" data-alternate-action-text="">
                                                        <input class="input cb8b8ac5f c24cfebe5" name="email"
                                                            id="username" type="text" value="" />
                                                        <div class="c752698fd js-required c4d626e37 cb41e194c">
                                                            Email address
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c1a1eca04" style="margin-top:3% ">
                                                <div class="input-wrapper _input-wrapper">
                                                    <div class="ccaa5e013 cc158b895 text caeeb774a cb5f4882f">
                                                        <input class="input cb8b8ac5f c24cfebe5" name="password"
                                                            id="username" type="text" value="" />
                                                        <div class="c752698fd js-required c4d626e37 cb41e194c"
                                                            aria-hidden="true">
                                                            Password
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c3fc7dc62">
                                            <button type="submit" name="action" value="default"
                                                class="c64e877fc c55256a89 c283fdb19 c26d7a986 _button-login-id"
                                                data-action-button-primary="true">
                                                Continue
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="ulp-alternate-action _alternate-action __s16nu9">
                                <p class="c192ddc3e cfcd4ae5f c87f0cc8e">
                                    Don't have an account?
                                    <a class="c72dde48d c36964393" href="{{ url('/signup') }}" aria-label="">Sign
                                        up</a>
                                </p>
                            </div>

                            <div class="c715d18fd cdf15c565">
                                <span>Or</span>
                            </div>

                            <div class="c4d7fa6ff cc0c2fa7c">
                                <form method="post" data-provider="windowslive" class="c0403f43c c8c6ba0db cc2a75ce7"
                                    data-form-secondary="true">
                                    <input type="hidden" name="state"
                                        value="hKFo2SAwSTA3VHJCVVFOSGNoUElaZVAtMGN4ZjVqcXhPTExSOKFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIDJSY25sSTVOOWgxOWZnSi1VSWJ5UzRJajlUQVR5b3FJo2NpZNkgVGRKSWNiZTE2V29USHROOTVueXl3aDVFNHlPbzZJdEc" />

                                    <input type="hidden" name="connection" value="windowslive" />

                                    <button type="submit" class="c829a69f7 c0263e40f ce1e3dbfe"
                                        data-provider="windowslive" data-action-button-secondary="true">
                                        <span class="cb3201224 c668e3005" data-provider="windowslive"></span>

                                        <span class="cfe625857">Continue with Microsoft Account</span>
                                    </button>
                                </form>

                                <form method="post" data-provider="google" class="c0403f43c c8c6ba0db c6c29d59c"
                                    data-form-secondary="true">
                                    <input type="hidden" name="state"
                                        value="hKFo2SAwSTA3VHJCVVFOSGNoUElaZVAtMGN4ZjVqcXhPTExSOKFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIDJSY25sSTVOOWgxOWZnSi1VSWJ5UzRJajlUQVR5b3FJo2NpZNkgVGRKSWNiZTE2V29USHROOTVueXl3aDVFNHlPbzZJdEc" />

                                    <input type="hidden" name="connection" value="google-oauth2" />

                                    <button type="submit" class="c829a69f7 c0263e40f c743f0739" data-provider="google"
                                        data-action-button-secondary="true">
                                        <span class="cb3201224 c668e3005" data-provider="google"></span>

                                        <span class="cfe625857">Continue with Google</span>
                                    </button>
                                </form>

                                <form method="post" data-provider="apple" class="c0403f43c c8c6ba0db c242abf60"
                                    data-form-secondary="true">
                                    <input type="hidden" name="state"
                                        value="hKFo2SAwSTA3VHJCVVFOSGNoUElaZVAtMGN4ZjVqcXhPTExSOKFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIDJSY25sSTVOOWgxOWZnSi1VSWJ5UzRJajlUQVR5b3FJo2NpZNkgVGRKSWNiZTE2V29USHROOTVueXl3aDVFNHlPbzZJdEc" />

                                    <input type="hidden" name="connection" value="apple" />

                                    <button type="submit" class="c829a69f7 c0263e40f c917feb83"
                                        data-provider="apple" data-action-button-secondary="true">
                                        <span class="cb3201224 c668e3005" data-provider="apple"></span>

                                        <span class="cfe625857">Continue with Apple</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
