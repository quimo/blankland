<!doctype html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link rel="stylesheet" href="style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/init.js"></script>

        <!-- Slick -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 'PIXEL_ID_CODE'); // Insert your pixel ID here.
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=PIXEL_ID_CODE&ev=PageView&noscript=1"
        /></noscript>

        <!-- Facebook Pixel Code - tracciamento eventi sui pulsanti -->
        <script>
        jQuery('.cabi_block__cta').click(function() {
            fbq('trackCustom', 'EVENT_NAME', {
                id: 'cta_click',
                value: 0.5,
                currency: 'EUR'
            });
        });
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-XXXXXXXX-X', { 'anonymize_ip': true });
        </script>

        <title>Title</title>
    </head>

    <body>

        <?php
        $message = '';
        foreach ($_POST as $key => $value) {
            $message .= "{$key}: {$value}\n";
        }
        mail('simone@cabiria.net', 'Form di contatto da landing page', $message);
        ?>
            
        <footer class="cabi_block cabi_block--footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Cabiria Soc. Coop.</h3>
                        <address>Via Minozzi 10/a - 43122 Parma (PR)</address>
                        <p>Tel. 0521 282278 | Email <a href="mailto:info@cabiria.net">info@cabiria.net</a></p>
                    </div>
                    <div class="col-md-6 cabi_block__social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </body>

</html>