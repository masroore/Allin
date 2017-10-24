<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> ALL IN 精品倉儲 | Welcome to ALL IN 精品倉儲 </title>
		<meta property="line:friend" content="@pcf9648g">
		<meta name="description" content="比迷你倉更便利的個人倉庫來囉!ALL IN精品倉儲的懶人倉是台北出租倉庫或倉儲的最佳選擇，無論是個人租櫃或公司租櫃均出租中，無論是需要大倉庫空間或小倉庫空間，迷你倉或個人倉儲均有出租，您可以輕易擁有個人專屬的迷你倉儲空間，現在租櫃就享折扣!" />

		<meta name="keywords" content="倉儲,倉庫出租,個人倉庫,租櫃,空間出租,租倉庫,個人倉儲,租小倉庫,出租倉庫,迷你倉"/>
		<meta name="medium" content="mult" />
		<meta name="video_height" content="480"></meta>
		<meta name="video_width" content="640"></meta>
		<link rel="image_src" href="allindata/thumbnail.jpg" />
		<!-- <meta name="directory" content="PATH/"></meta> -->
		<!-- <link rel="target_url" href="allin.html" /> -->
		<meta name="generator" content="Panotour Pro V2.5.3 64bits" />

		<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<style type="text/css">
			@-ms-viewport { width: device-width; }
			@media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
			* { padding: 0; margin: 0; }
			html { height: 100%; }
			body { height: 100%; overflow:hidden; }
			div#container { height: 100%; min-height: 100%; width: 100%; margin: 0 auto; }
			div#tourDIV {
				height:100%;
				position:relative;
				overflow:hidden;
			}
			div#panoDIV {
				height:100%;
				position:relative;
				overflow:hidden;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}
		</style>
				<!--[if !IE]><!-->
		<script type="text/javascript" src="allindata/lib/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<!--[if lte IE 8]>
		<script type="text/javascript" src="allindata/lib/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gt IE 8]>
		<script type="text/javascript" src="allindata/lib/jquery-2.1.1.min.js"></script>
		<![endif]-->


		<link type="text/css" href="allindata/lib/jquery-ui-1.11.1/jquery-ui.min.css" rel="stylesheet" />
		<script type="text/javascript" src="allindata/lib/jquery-ui-1.11.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="allindata/lib/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="allindata/lib/Kolor/KolorTools.min.js"></script>
		<script type="text/javascript" src="allindata/graphics/KolorBootstrap.js"></script>



		<style type="text/css">
			div#panoDIV.cursorMoveMode {
				cursor: move;
				cursor: url(allindata/graphics/cursors_move_html5.cur), move;
			}
			div#panoDIV.cursorDragMode {
				cursor: grab;
				cursor: -moz-grab;
				cursor: -webkit-grab;
				cursor: url(allindata/graphics/cursors_drag_html5.cur), default;
			}
		</style>

		<script type="text/javascript">
			function webglAvailable() {
				try {
					var canvas = document.createElement("canvas");
					return !!window.WebGLRenderingContext && (canvas.getContext("webgl") || canvas.getContext("experimental-webgl"));
				} catch(e) {
					return false;
				}
			}
			function getWmodeValue() {
				var webglTest = webglAvailable();
				if(webglTest){
					return 'direct';
				}
				return 'opaque';
			}
			function readDeviceOrientation() {
				// window.innerHeight is not supported by IE
				var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
				var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
				//force height for iframe usage
				if(!winH || winH == 0){
					winH = '100%';
				}
				// set the height of the document
				jQuery('html').css('height', winH);
				// scroll to top
				window.scrollTo(0,0);
			}
			jQuery( document ).ready(function() {
				if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
					if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
						jQuery('body').css('height', '100.18%'); 
					}
					// add event listener on resize event (for orientation change)
					if (window.addEventListener) {
						window.addEventListener("load", readDeviceOrientation);
						window.addEventListener("resize", readDeviceOrientation);
						window.addEventListener("orientationchange", readDeviceOrientation);
					}
					//initial execution
					setTimeout(function(){readDeviceOrientation();},10);
				}
			});
			
			function accessWebVr(){
				unloadPlayer();

				eventUnloadPlugins();

				setTimeout(function(){ loadPlayer(true); }, 100);
			}
			function accessStdVr(){
				unloadPlayer();

				resetValuesForPlugins();

				setTimeout(function(){ loadPlayer(false); }, 100);
			}
			function loadPlayer(isWebVr) {
				if (isWebVr) {
					embedpano({
						id:"krpanoSWFObject"
						,xml:"allindata/allin_vr.xml"
						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"
						,html5:"only+webgl"
						,vars:{skipintro:true,norotation:true}
					});
				} else {
					embedpano({
						id:"krpanoSWFObject"

						,swf:"allindata/allin.swf"

						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"

						,html5:"prefer"


						,wmode: getWmodeValue()

					});
				}
				//apply focus on the visit if not embedded into an iframe
				if(top.location === self.location){
					kpanotour.Focus.applyFocus();
				}
			}
			function unloadPlayer(){
				if(jQuery('#krpanoSWFObject')){
					removepano('krpanoSWFObject');
				}
			}
		    function isVRModeRequested() {
				var querystr = window.location.search.substring(1);
				var params = querystr.split('&');
				for (var i=0; i<params.length; i++){
					if (params[i].toLowerCase() == "vr"){
						return true;
					}
				}
				return false;
			}
		</script>
	</head>
	<body>
		<div id="container">

			<div id="tourDIV">
				<div id="panoDIV">
					<noscript>

						<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="allindata/allin">
							<param name="movie" value="allindata/allin.swf"/>
							<param name="allowFullScreen" value="true"/>
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="allindata/allin.swf" width="100%" height="100%">
								<param name="movie" value="allindata/allin.swf"/>
								<param name="allowFullScreen" value="true"/>
								<!--<![endif]-->
								<a href="http://www.adobe.com/go/getflash">
									<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player to visualize the Virtual Tour : ALL IN 精品倉儲 (Virtual tour generated by Panotour)"/>
								</a>
							<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>

					</noscript>
				</div>

				<script type="text/javascript" src="allindata/allin.js"></script>
				<script type="text/javascript">
					if (isVRModeRequested()){
						accessWebVr();
					}else{
						accessStdVr();
					}
				</script>
			</div>
		</div>
	</body>
</html>