<!DOCTYPE html>
<html lang="en">
	<head>
    		<title>
      			Visualizing Trends
    		</title>
    		<meta name="viewport" content="width=device-width, initial-scale=1" />
    		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    		<link rel="stylesheet" type="text/css" href="css/style.css" />
    		<link rel="stylesheet" type="text/css" href="css/instagram-grid.css" />
	</head>
	
	
	<body id="bootstrap-overrides">
        <div id="pb-root">
                <section id="top-content" class="col-xs-12 layout">
                        <div class="border-bottom-hairline border-bottom-">
                                <div class="clear">
                                        <h1>Visualizing US Hashtag Trends</h1>
                                        <p>See what people are posting about today&#39;s top trending hashtags.</p>
                                </div>
                        </div>
                </section>
                <div class="row">
                        <section id="main-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 layout">
                                <div class="article border-bottom-hairline">
                                        <h2>How it works</h2>
                                        <h3>Hover over bubbles on the map to quickly see trending hashtags, or click on a bubble to see statistics and posts about a specific state&#39;s top trending hashtag. The size of a bubble corresponds to how comparatively large the trend is.</h3>
                                </div>
                                <div class="wpe-card">
                                        <div id="map-container" style="height: 500px; min-width: 310px; max-width: 800px; margin: 0 auto"></div>
                                </div>
                                <div id="twitter-container"></div>
    				<div id="instagram-container"></div>
                        </section>
                </div>  
    		    
    		    
    		    		
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
    		<script src="js/tweetLinkIt.js" type="text/javascript"></script>

    		<script src="js/instagram-grid.js" type="text/javascript"></script>
    		<script src="js/script.js" type="text/javascript"></script>
    		
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js"></script>
    		<script src="http://code.highcharts.com/maps/highmaps.js"></script>
    		<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    		<script src="https://code.highcharts.com/mapdata/countries/us/us-all.js"></script>
    		<script src="js/map.js"></script>
  	</body>
</html>