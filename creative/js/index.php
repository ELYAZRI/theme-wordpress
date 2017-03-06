<!DOCTYPE html>
<html class="no-js" lang="fr">
    <head>
        <title>Google Maps</title>        
        <meta charset="UTF-8" />
    </head>
 
    <body onload="_init();">
        <!-- C'est dans cette div#map que la carte sera contenue -->
        <div id="map" style="height:400px; width:400px;"></div>
 
        <script>
        var map;
 
        /**
         * Initialisation du script Google Maps
        */
        function _init()
        {
            // Insertion du script Google Maps + Création map
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyBunKA-yt5mw5sqqdN-cnSFbK-1-ms_ItU&sensor=false&callback=_initMap";
            document.body.appendChild(script);
        }
        /**
         * Initialisation de la map
        */
        function _initMap()
        {    
            // Options de la map
            var mapOptions = {
                zoom: 12,
                center: new google.maps.LatLng(48.858927, 2.294254),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
 
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }
        </script>
    </body>
</html>