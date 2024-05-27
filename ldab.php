<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $adServer = "ldap://192.168.172.3";
    $ldap = ldap_connect($adServer);

    if (!$ldap) {
        die("Could not connect to LDAP server.");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $ldaprdn = 'utility' . "\\" . ldap_escape($username, "", LDAP_ESCAPE_DN);

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);

    if ($bind) {
        $filter = "(sAMAccountName=" . ldap_escape($username, "", LDAP_ESCAPE_FILTER) . ")";
        $result = ldap_search($ldap, "dc=utility,dc=com", $filter);

        if ($result) {
            $info = ldap_get_entries($ldap, $result);

            if ($info["count"] > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['displayName'] = $info[0]["givenname"][0] . " " . $info[0]["sn"][0];
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "No entries found.";
            }
        } else {
            $error = "LDAP search failed.";
        }

        ldap_unbind($ldap);
    } else {
        $error = "Invalid username or password.";
    }
} else {
    $error = "Please enter username and password.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KE Unified Dashboard | Login :: Kaduna Electric</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Kaduna Electric Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design">
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="">KE Unified<span>Dashboard</span></a>
        </div>
        <div class="header-right">
            <img src="images/KE.jpg" style="width:50px; height:60px;">
        </div>
    </div>
</div>
<section>
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <h1>Log in</h1>
                </div>
                <div class="signin">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <form id="loginForm" method="POST" action="">
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="text" class="user" name="username" placeholder="Your Username" required />
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                                <input type="password" class="lock" name="password" placeholder="Password" required />
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" value="Log in">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="diff">
    <p class="text-center">&copy 2022 Kaduna Electric. All Rights Reserved | Design by <a href="https://kadunaelectric.com/" target="_blank">Kaduna Electric.</a></p>
</footer>
</body>
</html>
<?php

?>
