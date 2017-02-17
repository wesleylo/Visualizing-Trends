$(document).ready(function () {
  createMap()
})

function createMap () {
  var H = Highcharts,
    map = H.maps['countries/us/us-all'],
    chart

  $.getJSON('http://wesleylo.net/visualizing-trends/php/getjson.php', function (json) {
	  var data = []
    $.each(json, function () {
    	this.z = this.tweet_volume
      data.push(this)
    })

    $('#map-container').highcharts('Map', {
      title: {
        text: ''
      },
      tooltip: {
        pointFormat: '{point.name}:<br>' + '{point.trend}'
      },
      legend: {
        enabled: false
      },

      mapNavigation: {
        enabled: false
      },
      exporting: { enabled: false },
      plotOptions: {
        mapbubble: {
          point: {
          	events: {
              click: function () {
        				document.getElementById('twitter-container').style.display = 'block'
        				document.getElementById('instagram-container').style.display = 'block'
        				$trend = this.trend
        				while ($trend.charAt(0) === '#') $trend = $trend.substr(1)
        				localStorage.setItem('trend', $trend)

        				$('#twitter-container').load('php/twitter.php?', {'trend': $trend})
							}
						}
					}
				}
      },
      series: [{
        name: 'States',
        mapData: map,
        color: '#E0E0E0',
        enableMouseTracking: false,
        showInLegend: false
      }, {
        type: 'mapbubble',
        dataLabels: {
          enabled: false
        },
        name: 'Top Trends',
        data: data,
        maxSize: '12%',
        color: H.getOptions().colors[0],
        showInLegend: false
      }]
    })
  })
};
