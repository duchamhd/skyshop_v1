<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link href="{{asset('socialLogin/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    </head>
    <body>
        <div class="wrap">
            <!-- strat-contact-form -->	
            <div class="contact-form">
                <!-- start-form -->
                <form class="contact_form" action="#" method="post" name="contact_form">
                    <h1>Login Into Your Account</h1>
                    <ul>
                        <li>
                            <input type="email" class="textbox1" name="email"  required />
                            <span class="form_hint">Enter a valid email</span>
                            <p><img src="{{asset('socialLogin/images/contact.png')}}" alt=""></p>
                        </li>
                        <li>
                            <input type="password" name="website" class="textbox2">
                            <p><img src="{{asset('socialLogin/images/lock.png')}}" alt=""></p>
                        </li>
                    </ul>
                    <input type="submit" name="Sign In" value="Sign In"/>
                    <div class="clear"></div>	
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label>
                    <div class="forgot">
                        <a href="#">forgot password?</a>
                    </div>	
                    <div class="clear"></div>	
                </form>
                <!-- end-form -->
                <!-- start-account -->
                <div class="account">
                    <h2><a href="#">Don' have an account? Sign Up!</a></h2>
                    <div class="span"><a href="auth/facebook"><img src="{{asset('socialLogin/images/facebook.png')}}" alt=""/><i>Sign In  Facebook</i><div class="clear"></div></a></div>
                    
                    
                    <div class="span2"><a href="auth/google"><img src="{{asset('socialLogin/images/gplus.png')}}" alt=""/><i>Sign In with Google+</i><div class="clear"></div></a></div>
                </div>	
                <!-- end-account -->
                <div class="clear"></div>	
            </div>
            <!-- end-contact-form -->

        </div>
    </body>
</html>