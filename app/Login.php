<?php

namespace KCSG;

class Login
{
    function login()
    {
        echo "<div class=\"container\">
              <div class=\"formated-login\">
              <div class=\"row main\">
              <div class=\"panel-heading\">
            <div class=\"main-login main-center\">
                <form class=\"form-horizontal\" method='post' action='/login.php'>                            
                <div class=\"form-group\">
                    <label for=\"username\" class=\"cols-sm-2 control-label\">Username</label>
                    <div class=\"cols-sm-10\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
                        <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\"  placeholder=\"Enter your Username\"/>
                    </div>
                    </div>
                </div>       
                <div class=\"form-group\">
                    <label for=\"password\" class=\"cols-sm-2 control-label\">Password</label>
                    <div class=\"cols-sm-10\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\"  placeholder=\"Enter your Password\"/>
                    </div>
                    </div>
                </div>               
                <div class=\"form-group \">
                    <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block login-button\" routerLink=\"/gmaps\" routerLinkActive=\"\">Login</button>
                </div>    
                    <div class=\"login-register\">
                <a href='/register.php'>Not Registered yet?</a>
                 </div>      
                </form>
            </div>
            </div>
        </div>
    </div>
</div>";
    }
}