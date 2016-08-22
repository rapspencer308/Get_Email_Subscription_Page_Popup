<!DOCTYPE html>
<html>
<head>
    <title>Popup Form - Free Trial</title>
    <link href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="freeTrial.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js">
    </script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js">
    </script>
    <script type="text/javascript">
    </script>
    <style type="text/css">
    </style>
</head>
<body>
    <div class="show" id="checkout-wrapper">
        <div id="checkout-wrapper-container">
            <div class="checkout-popup-window show" id="checkout-popup-step1">
                <span class="checkout-close i-wpmudev-x"><a class="close-thik" href="#"></a></span>
                <div class="checkout-container">
                    <h1>100+ PREMIUM PLUGINS &amp; THEMES FOR FREE?</h1>
                    <p>That's right! A WPMU DEV membership gives you access to 100+ premium plugins &amp; themes, 24/7 WordPress support, a whole bunch of cool services and a private community of awesome WordPress developers.</p>
                    <p><strong>Try a WPMU DEV membership (<em>usually $49/mo</em>) free for 14 days!</strong></p>
                    <form action="" id="form-step1" method="post" name="form-step1">
                        <input class="focus" name="email" placeholder="Your email address" type="email"> <button class="submit" type="submit">Start free trial</button> <a class="no-thanks" href="#">No thanks</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
$("#checkout-wrapper.show, #checkout-wrapper-container").css({
    "display": "none"
});

function loadPopUp(t) {
    //alert("started");
    var time = t * 1000;
    setTimeout(function() {
        $("#checkout-wrapper.show, #checkout-wrapper-container").css({
            "display": "block"
        });
    }, time);
}


/**
 * When page loads this function starts
 * variable t, set in seconds

 */
$(function() {
    var t = 2; // Number of seconds to delay popup.
    loadPopUp(t);
    $("a.close-thik").click(function() {
        $("#checkout-wrapper.show, #checkout-wrapper-container").css({
            "display": "none"
        });
    })
    $("button.submit").click(function() {
        $("#checkout-wrapper.show, #checkout-wrapper-container").css({
            "display": "none"
        });
        alert("Check Your Email");
    })
});
    </script>
</body>
</html>