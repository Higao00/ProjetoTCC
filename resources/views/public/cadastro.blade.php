<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <title>Register Sport for life</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />


    <link href="../assets/css/default/app.min.css" rel="stylesheet" />
</head>
<body class="pace-top">
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>

    <div id="page-container" class="fade">
        <div class="register register-with-news-feed">
            <div class="news-feed">
                <a href="/">
                    <div class="news-image" style="background-image: url(../assets/img/login-bg/register.jpg)"></div>
                </a>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Sport</b> Beasts</h4>
                    <p>
                        The best places for you to play what you like.et, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <div class="right-content">
                <h1 class="register-header">
                    Sign Up
                    <small>Register to be able to enjoy everything.</small>
                </h1>
                <div class="register-content">
                    <form action="{{ route('user.store')}}" method="POST" class="margin-bottom-0">
                        @csrf 
                        <label class="control-label">Full name<span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12 m-b-15">
                                <input type="text" class="form-control" name="name" placeholder="First name" required />
                            </div>
                        </div>

                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" placeholder="Email" required />
                            </div>
                        </div>

                        <label class="control-label">Document <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="document" placeholder="Cpf document" required />
                            </div>
                        </div>

                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required />
                            </div>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-indigo btn-block btn-lg">Sign Up</button>
                        </div>
                        <div class="m-t-30 m-b-30 p-b-30">
                            Already a member? Click <a href="/login">here</a> to login.
                            Or return to the <a href="/">site. </a>
                        </div>
                        <hr />
                        <p class="text-center mb-0">
                            &copy; Sport for life 2020
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>

    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/theme/default.min.js"></script>
</body>

</html>
