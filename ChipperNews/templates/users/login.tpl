    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-signin" action="{$BASE_URL}actions/users/login.php" method="post">
                        <label for="inputEmail " class="sr-only ">Email address</label>
                        <input type="email " id="inputEmail " class="form-control " placeholder="Email address " required=" " autofocus=" ">
                        <label for="inputPassword " class="sr-only ">Password</label>
                        <input type="password " id="inputPassword " class="form-control " placeholder="Password " required=" ">
                        <div class="checkbox">
                            <label>
                        <input type="checkbox" value="remember-me "> Remember me
                    </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block " type="submit ">Sign in</button>
                        <a class="btn btn-block btn-social btn-facebook ">
                            <span class="fa fa-facebook "></span> Sign in with Facebook
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>