{include file="/var/www/html/adminPanel/app/views/Home/header.tpl" title="Login | SMP"}

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="/adminPanel/public/Home/login" method="POST" role="form">
                        <div id="invalid_message" style="display:none">
                            The username or password you entered is incorrect. Please try again.
                        </div><br />
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" id="username" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" id="password" type="password" required autofocus>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="/var/www/html/adminPanel/app/views/Home/footer.tpl"}