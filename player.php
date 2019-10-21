<!DOCTYPE html>
<html>
<head>
    <title>fluid-player播放器</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="content-language" content="zh-CN"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta name="referrer" content="never"/>
    <meta name="renderer" content="webkit"/>
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="x5-page-mode" content="app"/>
    <meta name="Viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <style type="text/css">
	html,body{width:100%;height:100%; padding:0; margin:0;}
	#hls-video{width:100%;height:100%;}
	</style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devzld/static@master/fluid-player/fluidplayer.min.css"
          type="text/css"/>
    <script src="https://cdn.jsdelivr.net/gh/devzld/static@master/fluid-player/fluidplayer.min.js"></script>
</head>
<body marginwidth="0" marginheight="0">
<video id='hls-video' width="100%" height="100%" autoplay>
    <source id="hls-video-s" src="" type='application/x-mpegURL'/>
</video>

<script>
    var playUrl = getQueryVariable('url');
    var ht = document.getElementById("hls-video-s").src = playUrl;
    var fp = fluidPlayer(
        'hls-video',
        {
            layoutControls: {
		fillToContainer: true,
		primaryColor: false,
		posterImage: false,
		autoPlay: true,
		keyboardControl: false,
		playButtonShowing: true,
		playPauseAnimation: true,
		mute: false,
		logo: {
			imageUrl: null,
			position: 'top left',
			clickUrl: null,
			opacity: 1,
			mouseOverImageUrl: null,
			imageMargin: '2px',
			hideWithControls: false,
			showOverAds: false
		},
		htmlOnPauseBlock: {
			html: null,
			height: null,
			width: null
		},
		allowDownload: false,
		allowTheatre: true,
		playbackRateEnabled: true,
		controlBar: {
			autoHide: false,
			autoHideTimeout: 3,
			animated: true
		},
            },
            vastOptions: {
                "adList": [
                    {
                        "vAlign": "middle",
                        "roll": "onPauseRoll",
                        "vastTag": "https://syndication.exoclick.com/splash.php?idzone=3561347"
                    },
                    {
                        "roll": "preRoll",
                        "vastTag": "https://syndication.exdynsrv.com/splash.php?idzone=3551903"
                    },
                    {
                        "roll": "midRoll",
                        "vastTag": "https://syndication.exdynsrv.com/splash.php?idzone=3551903",
                        "timer": 600
                    },
                    {
                        "roll": "midRoll",
                        "vastTag": "https://syndication.exdynsrv.com/splash.php?idzone=3551903",
                        "timer": 1200
                    },
                    {
                        "roll": "postRoll",
                        "vastTag": "https://syndication.exdynsrv.com/splash.php?idzone=3551903"
                    }
                ]
            }

        }
    );
    fp.play();

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }
</script>
</body>
</html>