<?php opcache_reset(); ?>
<!DOCTYPE html>
<html lang="pl" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>SDK for JavaScript</title>
    <script async src="http://magento-systest.inpost.nmediasystems.com/geowidget-with-file/sdk-for-javascript.js"></script>
    <script type="text/javascript">
        window.easyPackAsyncInit = function () {
            easyPack.init({
                defaultLocale: 'uk',
                instance: 'uk',
                filters: true,
                apiEndpoint: 'https://api-uk-points.easypack24.net/v1',
                closeTooltip: false,
                points: {
                    types: ['parcel_locker']
                },
                map: {
                    initialTypes: ['parcel_locker'],
                    defaultLocation: [51.507351, -0.127758]
                }
            });
            var map = easyPack.mapWidget('easypack-map', function(point) {
                alert(point.name);
            });

            map.searchPlace('London');
        };
    </script>
    <link rel="stylesheet" href="https://geowidget.easypack24.net/css/easypack.css"/>
</head>

<body style="height: 100%; margin: 0; padding: 0;">
<div style="height: 100%; width: 100%; margin: 0 auto;">
    <div id="easypack-map"></div>
</div>
</body>
</html>
