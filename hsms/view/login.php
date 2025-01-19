<?php include_once('head.php'); ?>

<style>
/* Background settings */
body {
    background: url('../uploads/bg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}




/* Glassmorphism effect for the login form */
.modal-content {
    background: rgba(255, 255, 255, 0.1);
    /* Light transparency */
    backdrop-filter: blur(15px);
    /* Blur effect */
    border-radius: 15px;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.2);
    padding: 20px;
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.modal-header {
    border-bottom: none;
    text-align: center;
}

.modal-header h1 {
    font-size: 36px;
    font-weight: bold;
    color: #fff;
    letter-spacing: 1px;
}

.form-control {
    background: transparent;
    border: none;
    border-bottom: 2px solid white;
    color: white;
    font-size: 18px;
    transition: border-color 0.3s ease;
    border-radius: 0;
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.form-control:focus {
    border-bottom: 2px solid #ffeb3b;
    box-shadow: none;
}

button {
    background: linear-gradient(45deg, #ff6b6b, #fbc531);
    border: none;
    padding: 10px 30px;
    border-radius: 50px;
    text-transform: uppercase;
    color: white;
    font-weight: bold;
    font-size: 16px;
    box-shadow: 0px 10px 20px rgba(255, 107, 107, 0.4);
    transition: all 0.4s ease;
}

button:hover {
    background: linear-gradient(45deg, #fbc531, #ff6b6b);
    transform: translateY(-3px);
    box-shadow: 0px 12px 25px rgba(251, 197, 49, 0.5);
}

.tooltip-inner {
    background-color: red;
    color: white;
}

.modal-body {
    padding: 30px 50px;
}

.modal-footer {
    border-top: none;
}

.bg {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
}

.box-footer {
    display: flex;
    /* Enable flexbox layout */
    justify-content: space-between;
    /* Space out the buttons to the left and right */
    align-items: left;
    /* Vertically center the buttons */
}

.box-footer .btn-home {
    margin-right: auto;
    /* Ensure no margin on the left side */
}

.box-footer .btn {
    margin-left: right;
    /* Push the Submit button to the rightmost side */
}
</style>

<body onLoad="login()">
    <div class="modal fade" id="loginFrom" tabindex="-1" role="dialog" aria-labelledby="loginFrom" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- School Logo -->
                    <div class="modal-logo text-center">
                        <img src='../uploads/logo3' alt="School Logo" style="max-width: 100px; max-height: 100px;">
                    </div>
                    <h1 class="text-center">LOGIN</h1>
                </div>

                <div class="modal-body">
                    <form role="form" action="../index.php" method="post">
                        <div class="form-group" id="divEmail">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email address"
                                name="email" autocomplete="off">
                        </div>
                        <div class="form-group" id="divPassword">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                name="password" autocomplete="off">
                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-home" id="btnHome"
                                onclick="window.location.href='http://localhost/HSMS/index.php';">Home</button>

                            <input type="hidden" name="do" value="user_login" />
                            <button type="submit" class="btn" id="btnSubmit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
    function login() {
        $('#loginFrom').modal({
            backdrop: 'static',
            keyboard: false
        });
        $('#loginFrom').modal('show');
    }

    $("form").submit(function(e) {
        var uname = $('#email').val();
        var password = $('#password').val();

        if (uname == '') {
            $("#btnSubmit").attr("disabled", true);
            $('#divEmail').addClass('has-error has-feedback');
            $('#divEmail').append(
                '<span id="spanEmail" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip" title="The user name is required"></span>'
            );
            $("#email").keydown(function() {
                $("#btnSubmit").attr("disabled", false);
                $('#divEmail').removeClass('has-error has-feedback');
                $('#spanEmail').remove();
            });
        }

        if (password == '') {
            $("#btnSubmit").attr("disabled", true);
            $('#divPassword').addClass('has-error has-feedback');
            $('#divPassword').append(
                '<span id="spanPassword" class="glyphicon glyphicon-remove form-control-feedback msk-set-color-tooltip" data-toggle="tooltip" title="The password is required"></span>'
            );
            $("#password").keydown(function() {
                $("#btnSubmit").attr("disabled", false);
                $('#divPassword').removeClass('has-error has-feedback');
                $('#spanPassword').remove();
            });
        }

        if (uname == '' || password == '') {
            $("#btnSubmit").attr("disabled", true);
            e.preventDefault();
            return false;
        } else {
            $("#btnSubmit").attr("disabled", false);
        }
    });
    </script>

    <div class="modal fade" id="login_error" tabindex="-1" role="dialog" aria-labelledby="insert_alert1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-red-active">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4>Information...!</h4>
                </div>
                <div class="modal-body">
                    <strong style="color:red; font-size:14px">Warning!</strong> Email or Password is Incorrect.
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_GET["do"])&&($_GET["do"]=="login_error")){
        $msg=$_GET['msg'];
        if($msg==1){
            echo"<script>
            var myModal = $('#login_error');
            myModal.modal('show');
            myModal.data('hideInterval', setTimeout(function(){
                myModal.modal('hide');
            }, 3000));
            </script>";
        }
    }
    ?>

    <script>
    (function(window, location) {
        history.replaceState(null, document.title, location.pathname + "#!/history");
        history.pushState(null, document.title, location.pathname);

        window.addEventListener("popstate", function() {
            if (location.hash === "#!/history") {
                history.replaceState(null, document.title, location.pathname);
                setTimeout(function() {
                    location.replace("../index.php");
                }, 0);
            }
        }, false);
    }(window, location));
    </script>
</body>
