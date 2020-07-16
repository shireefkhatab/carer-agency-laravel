<style type="text/css">
    .btn {
        color: #fff;
        width: 100%;
        height: 50px;
        padding: 6px 25px;
        line-height: 36px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 8px;
        background: #23c0e9;
        font-size: 16px;
        border: #23c0e9 solid 1px;
    }

    .btn-primary {
        background-color: #212529;
        border-color: #212529;
    }
</style>


<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.partials.head')
    </head>
    <body class="sb-nav-fixed">
        <main>
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <h3 class="text-center font-weight-light my-4">Login</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login')}}">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                    <input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter Email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" />
                                                </div>
                                                <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                                    <button class="btn btn-primary" type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </main>
    </body>
</html>