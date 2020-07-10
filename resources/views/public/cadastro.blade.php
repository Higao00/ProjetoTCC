<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <title>Register Sport for life</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../assets/css/default/app.min.css" rel="stylesheet" />

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

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

                @if($errors->any())
                <!-- #modal-dialog -->
                <a href="#modal-alert" id='model_error' data-toggle="modal"></a>
                <div class="modal fade" id="modal-alert">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Alert Error</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger m-b-0">
                                    @foreach($errors->all() as $error)
                                    <h5><i class="fa fa-info-circle"></i> {{ $error }}.</h5>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="register-content">
                    <form action="{{ route('user.store')}}" method="POST" class="margin-bottom-0">
                        @csrf
                        <label class="control-label">Full name<span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12 m-b-15">
                                <input type="text" class="form-control" name="nome" value='{{ old('nome') }}' placeholder="First name" required />
                            </div>
                        </div>

                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" value='{{ old('email') }}' placeholder="Email" required />
                            </div>
                        </div>

                        <label class="control-label">Document <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="documento" value='{{ old('documento') }}' placeholder="Cpf document" required />
                            </div>
                        </div>

                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="senha" value='{{ old('senha') }}' placeholder="Password" />
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

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="../assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/demo/ui-modal-notification.demo.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $('#model_error').trigger('click');

    </script>

</body>

</html>
