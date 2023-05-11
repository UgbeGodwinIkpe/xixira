



<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title><?php  echo $pagename;?> | PropertyPro.ng</title>



<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" type="image/ico" href="../assets/image/42484569b600758112d45bad3d876f78-favicon.ico" />
<meta name="keywords" content="property for sale in ikeja, property for sale in lekki, property for sale in ajah, property for sale in surulere, property for sale in maryland, property for sale in yaba, property for sale in victoria island, property for sale in ojota, property for sale in mende, property for sale in ojodu, property for sale in ogudu, property for sale in anthony village, property for sale in lagos, house for sale in surulere, house for sale in lekki, house for sale in ikeja, house for sale in yaba, real estate agent in lagos, house for sale in ikoyi, house for sale in ojota, house for sale shomolu, house for sale in ketu, house for sale in lagos, real estate in nigeria, flat for sale in lagos, land for sale in lagos, duplex for sale in lagos, office space for sale in lagos, house for sale in berger, nigeria property website, duplex for sale in lagos, house for sale in banana island, real estate agents in lagos, house for sale in nigeria" />
<meta name="description" content="PropertyPro.ng is Nigerian real estate and property listing website with property and houses in Nigeria for rent and for sale. We are the online real estate destination for property sales and rentals in Nigeria with properties including homes, houses, land, shops, offices and other commercial properties to buy or rent." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.propertypro.ng" />
<meta property="og:image" content="../assets/image/logo.png" />
<meta property="og:site_name" content="PropertyPro.ng" />
<link rel="canonical" href="#" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet" />

<link rel="stylesheet" href="../assets/assets/css/53292f0e9fcb8faa145cac1121d35aad-all.css" />
<link rel="stylesheet" href="../assets/assets/css/6c7994f6c7766d2c3b9693f0412a5a5c-custom.css" />


<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">




 <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets2/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets2/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets2/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets2/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />



  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>







      <script>
$(document).ready(function(){
     $('.pinm').hide();
      $('.hey').click(function() {
            $(".pinm").toggle();
    
      });
            
        $('#li-cid-for-sale').click(function() {
     
          $('#li-cid-for-sale').addClass("active");
         $("#li-cid-for-rent").removeClass("active");
         $("#li-cid-short-let").removeClass("active");
            
            var src="sale";
            $.post("backend.php", {"img": src});
            
        });
        
        
           $('#li-cid-for-rent').click(function() {
     
          $('#li-cid-for-rent').addClass("active");
             $("#li-cid-short-let").removeClass("active");
         $("#li-cid-for-sale").removeClass("active");
         
          var src="rent";
            $.post("backend.php", {"img": src});
            
        });
        
        
        
          $('#li-cid-short-let').click(function() {
     
          $('#li-cid-short-let').addClass("active");
             $("#li-cid-for-rent").removeClass("active");
         $("#li-cid-for-sale").removeClass("active");
            
            var src="short let";
            $.post("backend.php", {"img": src});
        });
        
        
});
    
    </script>
<style type="text/css">

            #ajaxWait {
                display: none;
                width: 100%;
                position: fixed;
                top: 100px;
                z-index: 1000000;

            }
            #ajaxWait .progress {
                width: 400px;
                margin: 0 auto;
                /* */
            }

            
        </style>


<noscript> 
  </noscript>
  
  <script src="js/modernizr.js"></script><!-- Modernizr -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=403202216515066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

                    
                                             <?php  


require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if( !($detect->isMobile())  ){?>
<body style="overflow-y:scroll;">
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=323589272227711&amp;ev=PageView&amp;noscript=1" />



<?php  }else{?>

<body class="nex-container" style="overflow-y:scroll;"><div class="nex-bar" style="background:black;position:fixed;top:0;left:0"><a href="#" class="nexmenu-reveal hey" style="right:5px;left:auto;"><span style="background:white"></span><span style="background:white"></span><span style="background:white"></span></a><div class="brand-bar" style="display:block; position:absolute;left:5px;right:auto;"><a href="index.php"><img src="../assets/assets/img/home/15b021aacebfb607b0032708293cb00f-logo.svg" alt="logo"></a></div><nav class="nex-nav">
<ul style="display:none;" class="pinm">
<li style="font-family:Roboto;"><a href="forsale.php">For Sale</a></li>
<li style="font-family:Roboto;"><a href="https://xixira.com/sites/pro/office/search.php?ps=0&type=All%20Types&bedrooms=All%20Types&minprice=0&maxprice=0&furnished=All%20Types&king=1&serviced=All%20Types&shared=All%20Types&sea=yes&ptry=rent">For Rent</a></li>
<li style="font-family:Roboto;"><a href="https://xixira.com/sites/pro/office/search.php?ps=0&type=All%20Types&bedrooms=All%20Types&minprice=0&maxprice=0&furnished=All%20Types&king=1&serviced=All%20Types&shared=All%20Types&sea=yes&ptry=short let">Short Let</a></li>
<li style="font-family:Roboto;"><a href="#">Agents</a></li>
<li style="font-family:Roboto;"><a href="#">Blog</a></li>
<li style="font-family:Roboto;"><a href="#">Prestige</a></li>
<li style="font-family:Roboto;"><a style="font-family:Roboto;" href="#">Post A Property <span>Free</span></a></li>
<li style="font-family:Roboto;"><a style="font-family:Roboto;" href="login.php" >Login</a></li>
<li style="font-family:Roboto;" class="nex-last"><a style="font-family:Roboto;" href="signup.php">Sign Up</a></li>
</ul>
</nav></div><div class="go-top"><span id="top"><img src="https://xixira.com/sites/pro/assets/assets/img/common/scroll-to-top.svg" alt="topdd"></span></div>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=323589272227711&amp;ev=PageView&amp;noscript=1">

<?php  }?>
<style>
.listings-property .single-room-img-a {
    display: block;
    width: inherit;
}
.listings-property .listings-img {
    display: block;
    margin: 0 auto;
    width: auto;
   max-width: inherit;
}
@media (max-width: 991px) {
    .listings-property .listings-img {
        width: auto;
    }
}

@media (max-width: 767px) {
    .listings-property .listings-img {
        width: auto;
    }
}

.single-room-text h4 {
   margin-top:0;
}
#banner-link {
    position: absolute;
    width: 200px;
    height: 100%;
    right: 0px;
    top: 0px;
    cursor: pointer;
}
@media only screen and (max-width: 600px) {
#banner-link {
display: none
}
}
.simg {
 width: 100% !important;
display: block;
margin: 0 auto
}
#home-popup .modal-dialog {
margin-top: 100px;
}
#home-popup .modal-content {
background-color: transparent !important;
}
#home-popup .modal-body {
margin: 0; padding: 0;
}
#home-popup button {
    background-color: #fff;
    border-radius: 100%;
    padding: 1px 6px;
    display: block;
    margin-bottom: -10px;
    margin-right: -15px;
}
#home-popup img  {
width: 500px;
cursor: pointer;
}
</style>

<script type="4cabe4faae47762e52cd26f3-text/javascript">
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1001447,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script type="application/ld+json">
         {
            "logo":"../assets/app2/img/propertypro.png",
            "@context":"http://schema.org",
            "url":"https://www.propertypro.ng",
            "name":"PropertyPro.ng",
            "sameAs" : [
                "https://www.facebook.com/propertyprong",
                "https://www.twitter.com/propertyprong",
                "https://instagram.com/propertyprong"
            ],
            "@type":"Organization"
        }
    </script>
<script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "PropertyPro",
            "url": "https://www.propertypro.ng/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.propertypro.ng/property-for-sale?search={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
<script type="application/ld+json">
        [
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Rent",
                "url": "https://www.propertypro.ng/property-for-rent"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Sale",
                "url": "https://www.propertypro.ng/property-for-sale"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for ShortLet",
                "url": "https://www.propertypro.ng/shortlet"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Real Estate Agents",
                "url": "https://www.propertypro.ng/agents"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Real Estate Blog",
                "url": "https://www.propertypro.ng/blog"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Rent in Lagos",
                "url": "https://www.propertypro.ng/property-for-rent/in/lagos"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Sale in Lagos",
                "url": "https://www.propertypro.ng/property-for-sale/in/lagos"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Rent in Abuja",
                "url": "https://www.propertypro.ng/property-for-rent/in/abuja"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Sale in Abuja",
                "url": "https://www.propertypro.ng/property-for-sale/in/abuja"
            }
        ]
    </script>
<style type="text/css">

    </style>
<noscript> 
   <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW3LXRX" height="0" width="0" style="display:none;visibility:hidden"> </iframe> 
  </noscript>
<div id="top_desktop_strip" class="top_strip">
<i class="fa fa-close strip_close"></i>
<div class="strip_content"></div>
</div>
<div id="ajaxWait">
<div class="progress">
<div id="progressBar" class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
Please Wait....
</div>
</div>
</div>
<nav class="desk-nav light-bg" id="nav">
<div class="container container-">
<div class="row">
<div class="col-12">
                                             <?php  


require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if( !($detect->isMobile())  ){?>
<div id="brand">
<a href="index.php"> <img src="../assets/assets/img/home/15b021aacebfb607b0032708293cb00f-logo.svg" alt="logo" /> </a>
</div>
<?php }?>

<div class="nex-menu">
<ul class="navbar-menu">
<li style="font-family:Roboto;"><a class="onepage" href="https://xixira.com/sites/pro/office/search.php?ps=0&type=All%20Types&bedrooms=All%20Types&minprice=0&maxprice=0&furnished=All%20Types&king=1&serviced=All%20Types&shared=All%20Types&sea=yes&ptry=sale">For Sale</a></li>
<li style="font-family:Roboto;"><a class="onepage" href="https://xixira.com/sites/pro/office/search.php?ps=0&type=All%20Types&bedrooms=All%20Types&minprice=0&maxprice=0&furnished=All%20Types&king=1&serviced=All%20Types&shared=All%20Types&sea=yes&ptry=rent">For Rent</a></li>
<li style="font-family:Roboto;"><a class="onepage" href="https://xixira.com/sites/pro/office/search.php?ps=0&type=All%20Types&bedrooms=All%20Types&minprice=0&maxprice=0&furnished=All%20Types&king=1&serviced=All%20Types&shared=All%20Types&sea=yes&ptry=short let">Short Let</a></li>
<li style="font-family:Roboto;"><a class="onepage" href="#">Agents</a></li>
<li style="font-family:Roboto;"><a class="onepage" href="#">Blog</a></li>
<li style="font-family:Roboto;"><a class="onepage" href="#">Prestige</a></li>
<!--<li style="font-family:Roboto;"><a class="post-free white-menu" style="font-family:Roboto;" href="#">Post A Property <span>Free</span></a></li>
<li style="font-family:Roboto;"><a class="login white-menu" style="font-family:Roboto;" href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
<li style="font-family:Roboto;"><a class="sign Up white-menu" style="font-family:Roboto;" href="#">Sign Up</a></li>-->
</ul>
</div>
</div>
</div>
</div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="font-family:Roboto;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">Close</span> </button>
</div>
<div class="modal-body  sign-up-form">
<div class="form-title sign-up-form-title text-center">
<h4>Sign in</h4>
</div>
<div class="d-flex flex-column text-center sign-form">
<form method="post" action="#">
<div class="form-group mrb-45">
<input name="email" type="email" class="form-control" id="email1" placeholder="Enter your email" />
</div>
<div class="form-group">
<input name="password" type="password" class="form-control" id="password1" placeholder="Enter your password" />
</div>
<div class="forget-pass">
<a href="#">Forgot Password?</a>
</div>
<button type="submit" class="btn-block btn-round">Login</button>

</form>
</div>
</div>
<div class="text-center creat-account">
<a href="#" class="reg-yet">Not registered yet?</a>
<a href="#" class="creat-acc">Create account</a>
</div>
</div>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body register-modal-form sign-up-form">
<div class="form-title sign-up-form-title register-modal-form-title">
<h4>Register</h4>
</div>
<button type="button" class="close signup-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
<div class="d-flex flex-column text-center register-modal sign-form">
<form>
<div class="form-group mrb-45">
<input type="text" class="form-control" id="name" placeholder="Enter name" />
</div>
<div class="form-group mrb-45">
<input type="email" class="form-control" id="email1" placeholder="Enter email address" />
</div>
<div class="form-group mrb-45">
<input type="text" class="form-control" id="phone" placeholder="Enter phone number" />
</div>
<div class="form-group  mrb-45">
<input type="password" class="form-control" id="password1" placeholder="Enter password" />
</div>
<div class="form-group  mrb-45">
<input type="password" class="form-control" id="password2" placeholder="Confirm password" />
</div>
<div class="register-check-btn">
<div class="register-radio  justify-block">
<div class="selection">
<input id="radio1" name="agent" type="radio" />
<label for="radio1">Agent</label>
</div>
<div class="selection">
<input id="radio23" name="developer" type="radio" />
<label for="radio23">Developer</label>
</div>
<div class="selection">
<input id="radio3" name="landlord" type="radio" />
<label for="radio3">Landlord</label>
</div>
<div class="selection">
<input id="radio4" name="user" type="radio" />
<label for="radio4">User</label>
</div>
</div>
</div>
<div class="terms-text">
<a href="#">By clicking create account you confirm that you to our website <span>Terms of use</span></a>
</div>
<button type="button" class="btn-block btn-round">Create account</button>
</form>
</div>
</div>
<div class="text-center creat-account">
<a href="#" class="reg-yet">Already registered?</a>
<a href="#" class="creat-acc">Sign in</a>
</div>
</div>
</div>
</div>