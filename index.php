<?php 
require_once("maxWhois.class.php"); 
$whois = new maxWhois();
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
				
<!-- Start Open Web Analytics Tracker -->
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.quick-space.de/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '4']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="https://analytics.quick-space.de/matomo.php?idsite=4&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
<!-- End Open Web Analytics Code -->
				
		
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Quick-Space.de - Domain Check</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <link href="style/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="style/coockie_message/cookieconsent.min.css">
   <link href="style/font-awesome_6.1.1/css/all.min.css" rel="stylesheet" type="text/css" />
   <script src="style/js/jquery-3.6.0.min.js"></script>
   <script src="style/js/bootstrap.min.js"></script>
   <script src="style/font-awesome_6.1.1/js/all.min.js"></script>
   <script src="style/coockie_message/cookieconsent.min.js"></script>
</head>

<body>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#000"
                },
                "button": {
                    "background": "#f1d600"
                }
            },
            "theme": "edgeless",
            "position": "top",
            "content": {
                "message": "Unsere Webseite setzt Cookies für die statistische Auswertung von Webseitenbesuchen ein.<br> Informationen über die eingesetzten Cookies und wie Sie diese unterbinden oder löschen können, finden Sie in unseren Datenschutzhinweisen.",
                "dismiss": "Ok, verstanden",
                "link": "mehr Infos",
                "href": "https://www.hchristo.de/includes/sites/datenschutzbestimmungen.htm"
            }
        })});
</script>
<?php
    $whois->processWhois();
?>
</body>   