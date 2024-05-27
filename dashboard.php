<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ldab.php");
    exit();
}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KE Unified Dashboard | Home :: Kaduna Electric</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->    
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
            $( document ).ready( function() {
                $( '.uls-trigger' ).uls( {
                    onSelect : function( language ) {
                        var languageName = $.uls.data.getAutonym( language );
                        $( '.uls-trigger' ).text( languageName );
                    },
                    quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
                } );
            } );
        </script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="">KE Unified<span>Dashboard</span></a>
            </div>
            <div class="header-right">
            <a href="ldab.php" class="btn btn-danger">Logout</a>
    </div>
            <div class="graphs">
            
           
            <!-- Add your dashboard content here -->
        </div>
            <div class="header-right">
                <img src="images/KE.jpg" style="width:50px; height:60px;">
                <!-- Large modal -->
                <script>
                $('#myModal').modal('');
                </script>
            </div>
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['displayName']); ?>!</h1>
        </div>
    </div>
    
    <!-- content-starts-here -->
    <div class="content">
        <div class="categories">
            <div class="container">
                <div class="col-md-2 focus-grid">
                    <a href="https://kadunaelectric.com/epay/web" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-mobile"></i></div>
                                <h4 class="clrchg">KE Pay</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 focus-grid">
                    <a href="http://192.168.172.16:7777/access/login.php" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-laptop"></i></div>
                                <h4 class="clrchg">Neighbourhood Vending</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 focus-grid">
                    <a href="">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-car"></i></div>
                                <h4 class="clrchg">Fleet Management App</h4>
                            </div>
                        </div>
                    </a>
                </div>    
                <div class="col-md-2 focus-grid">
                    <a href="https://safety.kadunaelectric.com" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-motorcycle"></i></div>
                                <h4 class="clrchg">Safety App</h4>
                            </div>
                        </div>
                    </a>
                </div>    
                <div class="col-md-2 focus-grid">
                    <a href="https://store.kadunaelectric.com" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                                <h4 class="clrchg">STOMS</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 focus-grid">
                    <a href="https://enforcement.kadunaelectric.com/web/index.php" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-paw"></i></div>
                                <h4 class="clrchg">Enforcement App</a>
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>    
                
                <div class="col-md-2 focus-grid">
                    <a href="http://192.168.172.16:7777/BPE/login2.php" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-book"></i></div>
                                <h4 class="clrchg">BPE</h4>
                            </div>
                        </div>
                    </a>
                </div>    
                <div class="col-md-2 focus-grid">
                    <a href="https://kadunaelectric.com/supports/scp/login.php" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                                <h4 class="clrchg">CRM</a>
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>    
                <div class="col-md-2 focus-grid">
                    <a href="https://kadunaelectric.net:8069" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                                <h4 class="clrchg">ERP</a>
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>    
                <div class="col-md-2 focus-grid">
                    <a href="https://meterreading.kadunaelectric.com" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-shield"></i></div>
                                <h4 class="clrchg">Meter Readings App</a>
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 focus-grid">
                    <a href="https://webmail.kadunaelectric.com/" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-at"></i></div>
                                <h4 class="clrchg">Webmail</a>
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 focus-grid">
                    <a href="https://kadunaelectric.com/quizcv" target="_blank">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-home"></i></div>
                                <h4 class="clrchg">CBT</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="trending-ads">
            <div class="container">
        
</body>
</html>
