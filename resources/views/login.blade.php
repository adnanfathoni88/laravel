<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        />

        <title>Laravel | Login</title>
    </head>
    <body>
        <div>
            <section class="vh-100" style="background-color: #508bfc">
                <div class="container py-5 h-500">
                    <div
                        class="row d-flex justify-content-center align-items-center h-100"
                    >
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div
                                class="card shadow-2-strong"
                                style="border-radius: 1rem"
                            >
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="card-body p-5">
                                        <center>
                                            <h3 class="mb-5">Login</h3>
                                        </center>
                                        <div>
                                            <div>
                                                @if(Session::has('login'))
                                                <div
                                                    class="alert alert-danger mt-1"
                                                >
                                                    {{Session::get('error')}}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="email">Email</label>
                                            <input
                                                class="form-control form-control-lg"
                                                type="email"
                                                name="email"
                                                autofocus
                                            />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="password"
                                                >Password</label
                                            >
                                            <input
                                                type="password"
                                                class="form-control form-control-lg"
                                                name="password"
                                            />
                                        </div>

                                        <button
                                            class="btn btn-primary btn-lg btn-block"
                                            type="submit"
                                            name="submit"
                                        >
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
