<?php 

$work = $_GET['work'];

$projecttype = '';
$filepath = '';
$numofimg = 0; 
$width = 4;
switch ($work) {
	case 'coreldraw':
		$filepath = '../wp-content/images/corel/acc (';
		$projecttype = 'Corel Draw';
		$numofimg = 4;
		$width = 4;
		break;
	case 'ai2d':
		$filepath = '../wp-content/images/ai2d/ai (';
		$projecttype = 'Adobe Illustrator';
		$numofimg = 11;
		$width = 4;
		break;
	case 'photography':
		$filepath = '../wp-content/images/model/model (';
		$projecttype = 'Photography';
		$numofimg = 13;
		$width = 4;
		break;
	case 'photoshop':
		$filepath = '../wp-content/images/photoshop/ps (';
		$projecttype = 'Adobe Photoshop';
		$numofimg = 12;
		$width = 4;
		break;
	case 'optitex':
		$filepath = '../wp-content/images/optitex/optitex (';
		$projecttype = 'Optitex';
		$numofimg = 6;
		$width = 6;
		break;
	case '3dclo':
		$filepath = '../wp-content/images/3dclo/3dclo  (';
		$projecttype = '3D CLO';
		$numofimg = 3;
		$width = 4;
		$link[1] = '../workdetail-page/index.php?work=3dkid';
		$link[3] = '../workdetail-page/index.php?work=3dmen';
		$link[2] = '../workdetail-page/index.php?work=3dwomen';
		break;
	case '3dkid':
		$filepath = '../wp-content/images/3dclo/KIDS/kids (';
		$projecttype = '3D CLO KIDS';
		$numofimg = 24;	
		$width = 4;	
		break;
	case '3dmen':
		$filepath = '../wp-content/images/3dclo/MENS/mens (';
		$projecttype = '3D CLO MENS';
		$numofimg = 28;		
		$width = 4;
		break;
	case '3dwomen':
		$filepath = '../wp-content/images/3dclo/WOMENS/women (';
		$projecttype = '3D CLO MENS';
		$numofimg = 28;	
		$width = 4;	
		break;
	default:
		// code...
		break;
}




?>
	<!DOCTYPE html>
	<html lang="en-US">

	<!-- Mirrored from wpriverthemes.com/gridx/workdetail-page/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jan 2024 07:04:55 GMT -->
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>WORKDETAIL PAGE </title>
	<meta name='robots' content='max-image-preview:large' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="alternate" type="application/rss+xml" title="Gridx - WordPress Theme &raquo; Feed" href="../feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Gridx - WordPress Theme &raquo; Comments Feed" href="../comments/feed/index.html" />
	<script>
	window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/wpriverthemes.com\/gridx\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"}};
	/*! This file is auto-generated */
	!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
	</script>
	<style id='wp-emoji-styles-inline-css'>

		img.wp-smiley, img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min1e39.css?ver=6.4.2' media='all' />
	<style id='safe-svg-svg-icon-style-inline-css'>
	.safe-svg-cover{text-align:center}.safe-svg-cover .safe-svg-inside{display:inline-block;max-width:100%}.safe-svg-cover svg{height:100%;max-height:100%;max-width:100%;width:100%}

	</style>
	<style id='classic-theme-styles-inline-css'>
	/*! This file is auto-generated */
	.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
	</style>
	<style id='global-styles-inline-css'>
	body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
	.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
	:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
	:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
	.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
	</style>
	<link rel='stylesheet' id='contact-form-7-css' href='../wp-content/plugins/contact-form-7/includes/css/styles080f.css?ver=5.8.2' media='all' />
	<link rel='stylesheet' id='redux-extendify-styles-css' href='../wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilitiescb95.css?ver=4.4.9' media='all' />
	<link rel='stylesheet' id='icon-css' href='../wp-content/themes/gridx/assets/css/iconoir1e39.css?ver=6.4.2' media='all' />
	<link rel='stylesheet' id='icon-css' href='../wp-includes/simple-lightbox.min.css' media='all' />
	<link rel='stylesheet' id='bootstrap-css' href='../wp-content/themes/gridx/assets/css/bootstrap.min1e39.css?ver=6.4.2' media='all' />
	<link rel='stylesheet' id='aos-css' href='../wp-content/themes/gridx/assets/css/aos1e39.css?ver=6.4.2' media='all' />
	<link rel='stylesheet' id='gridx-style-css' href='../wp-content/themes/gridx/assets/css/style1e39.css?ver=6.4.2' media='all' />
	<link rel='stylesheet' id='gridx-unit-test-css' href='../wp-content/themes/gridx/assets/css/gridx-unit-test1e39.css?ver=6.4.2' media='all' />
	<link rel='stylesheet' id='gridx-fonts-css' href='http://fonts.googleapis.com/css?family=Inter%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C%26subset%3Dlatin%2Clatin-ext&amp;ver=1.0.0' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='../wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3' media='all' />
	<link rel='stylesheet' id='swiper-css' href='../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='elementor-post-16-css' href='../wp-content/uploads/elementor/css/post-167a7c.css?ver=1699517879' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='../wp-content/uploads/elementor/css/global7a7c.css?ver=1699517879' media='all' />
	<link rel='stylesheet' id='elementor-post-1400-css' href='../wp-content/uploads/elementor/css/post-1400f18a.css?ver=1699520843' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.4.2' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src="../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script src="../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/1400.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.4.2" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='../indexa7ea.html?p=1400' />
	<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embede770.json?url=https%3A%2F%2Fwpriverthemes.com%2Fgridx%2Fworkdetail-page%2F" />
	<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embedf791?url=https%3A%2F%2Fwpriverthemes.com%2Fgridx%2Fworkdetail-page%2F&amp;format=xml" />
	<meta name="generator" content="Redux 4.4.9" />	<style>
			:root {
	  --default-color: #5B78F6;
	}

	:root {
	    --primary_color: var(--default-color) !important;
	}

	.about-area .about-me-box .img-box {
	    background: linear-gradient(90deg, var(--default-color) -15%, #C2EBFF 58%, var(--default-color) 97%) !important;
	}


	 	</style>

	<meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
			<style id="wp-custom-css">
				.contact-details,
	.social-links{
		padding-left:0 !important;
	}

	.contact-area .input-group p{
		width:100%
	}
	.contact-area .contact-form form .input-group + .input-group{
		margin-top:-3px;
	}
	/* .h1-100{
		height:100% !important;
	} */
	.service-area .elementor-widget-container{
		height:100%
	}
	.service-area .info-box.about-contact-box {
		padding-bottom:58px
	}
	.margin-0, .margin-0 .elementor-widget-wrap {
		margin: 0 !important;
	}
			</style>
			</head>

	<body class="page-template page-template-page-templates page-template-main-workdetail page-template-page-templatesmain-workdetail-php page page-id-1400 elementor-default elementor-kit-16 elementor-page elementor-page-1400">


	<main class="main-workdetails-page">

	<!-- Header -->
	<header class="header-area">
	    <div class="container">
	        <div class="gx-row d-flex align-items-center justify-content-between">
	            <a href="../index.html" class="logo">
					

					
	            </a>

	            <!-- Collect the nav links, forms, and other content for toggling -->

	            <nav class="navbar"><ul data-in="#" data-out="#" class="menu" id="menu-main-menu"><li id="menu-item-1850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1850"><a   title="Home" href="../index.html">Home</a></li>
	<li id="menu-item-1851" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1851"><a   title="About" href="../about-page/index.html">About</a></li>
	<li id="menu-item-1853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1853"><a   title="Works" href="../work/index.html">Works</a></li>
	<li id="menu-item-1852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1852"><a   title="Contact" href="../contact-info/index.html">Contact</a></li>
	</ul></nav>                

	            <a href="../contact-info/index.html" class="theme-btn">Let s talk</a>

	            <!-- End Navigation -->

	            <div class="show-menu">
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
	        </div>
	    </div>
	</header>


	          <!-- Project Details -->
	        <section class="project-details-wrap">
	          
	            <!-- <div class="container"> -->
	                
	   
	               

	                


	 		<div data-elementor-type="wp-page" data-elementor-id="1400" class="elementor elementor-1400">
										<section class="elementor-section elementor-top-section elementor-element elementor-element-3155ad7 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3155ad7" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b3e563c" data-id="b3e563c" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-d39a747 elementor-widget__width-initial elementor-widget elementor-widget-gridxdaworkdetailprojbreadcrumb" data-id="d39a747" data-element_type="widget" data-widget_type="gridxdaworkdetailprojbreadcrumb.default">
					<div class="elementor-widget-container">
				
	         <!-- Start Workdetail Breadcrumb
	    ============================================= -->
	<!-- Breadcrumb -->
	<section class="breadcrumb-area">
	    <div class="container">
	        <div class="breadcrumb-content" data-aos="fade-up">
	            <!-- <p>BRANDING - RAVEN STUDIO</p> -->
	            <h1 class="section-heading">				
	<img decoding="async" src="../wp-content/themes/gridx/assets/images/star-2.png" alt="">
							
	 <?php echo $projecttype; ?>
	<img decoding="async" src="../wp-content/themes/gridx/assets/images/star-2.png" alt="">
							
	</h1>
	        </div>
	    </div>
	</section>


	  <script>
	    AOS.init({
	        duration: 1500,
	        once: true,

	    });</script>

	    		</div>
					</div>
						</div>
			</div>
								</div>
			</section>
					
					
					<section class="elementor-section elementor-top-section elementor-element elementor-element-ca03e51 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca03e51" data-element_type="section">
							<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bc77ca7" data-id="bc77ca7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-1f87fb4 elementor-widget elementor-widget-gridxdaworkdetailimg" data-id="1f87fb4" data-element_type="widget" data-widget_type="gridxdaworkdetailimg.default">
					<div class="elementor-widget-container">
				
	         <!-- Start WorkDetail
	    ============================================= -->



	 <div class="row mb-24">
	    <?php for ($i=1; $i <= $numofimg; $i++) { ?>
	    	<div class="col-md-<?php echo $width; ?>" data-aos="zoom-in">
		        <div class="project-details-3-img" style="margin-top:20px;">
		        	<?php if (isset($link[$i])) {?>	<a href="<?php echo $link[$i]; ?>" > <?php } ?>
		            <img decoding="async" src="<?php echo $filepath.$i.').png'; ?>" alt="Project">
		            <?php if (isset($link[$i])) {?>	</a> <?php } ?>
		        </div>
		    </div>	
	    <?php } ?>
	    
	    
	    </div>



	         
	  <script>
	    AOS.init({
	        duration: 1500,
	        once: true,

	    });</script>

	    		</div>
					</div>
						</div>
			</div>
								</div>
			</section>
					
					
					
								</div>
			


	<!-- </div> -->
	</section> 
	<!-- Footer -->
	  <footer class="footer-area">
	            <div class="container">
	                <div class="footer-content text-center">
	                     <a href="../index.html" class="logo">
					

					
	                    </a>
	                    <ul data-in="#" data-out="#" class="footer-menu" id="menu-footer-menu"><li id="menu-item-1856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1856"><a   title="Home" href="../index.html">Home</a></li>
	<li id="menu-item-1857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1857"><a   title="About" href="../about-page/index.html">About</a></li>
	<li id="menu-item-1859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1859"><a   title="Works" href="../work/index.html">Works</a></li>
	<li id="menu-item-1858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1858"><a   title="Contact" href="../contact-info/index.html">Contact</a></li>
	</ul>                    <p class="copyright">
	                        
	                    </p>
	                </div>
	            </div>
	        </footer>

	</main>
	    
	<script src="../wp-content/plugins/contact-form-7/includes/swv/js/index080f.js?ver=5.8.2" id="swv-js"></script>
	<script id="contact-form-7-js-extra">
	var wpcf7 = {"api":{"root":"https:\/\/wpriverthemes.com\/gridx\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
	</script>
	<script src="../wp-content/plugins/contact-form-7/includes/js/index080f.js?ver=5.8.2" id="contact-form-7-js"></script>
	<script src="../wp-content/themes/gridx/assets/js/bootstrap.bundle.min1e39.js?ver=6.4.2" id="bootstrap-js"></script>
	<script src="../wp-content/themes/gridx/assets/js/aos1e39.js?ver=6.4.2" id="aos-js"></script>
	<script src="../wp-content/themes/gridx/assets/js/main1e39.js?ver=6.4.2" id="gridx-main-js"></script>
	<script src="../wp-content/themes/gridx/assets/js/ajax-form1e39.html?ver=6.4.2" id="ajax-form-js"></script>
	<script src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min8864.js?ver=3.17.3" id="elementor-webpack-runtime-js"></script>
	<script src="../wp-content/plugins/elementor/assets/js/frontend-modules.min8864.js?ver=3.17.3" id="elementor-frontend-modules-js"></script>
	<script src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script>
	<script src="../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
	<script src="../wp-includes/simple-lightbox.min.js" id="jquery-ui-core-js"></script>
	<script id="elementor-frontend-js-before">
	var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.17.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"landing-pages":true},"urls":{"assets":"https:\/\/wpriverthemes.com\/gridx\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1400,"title":"WORKDETAIL%20PAGE%20%E2%80%93%20Gridx%20%E2%80%93%20WordPress%20Theme","excerpt":"","featuredImage":false}};
	</script>
	<script src="../wp-content/plugins/elementor/assets/js/frontend.min8864.js?ver=3.17.3" id="elementor-frontend-js"></script>
	</body>

	<!-- Mirrored from wpriverthemes.com/gridx/workdetail-page/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jan 2024 07:04:58 GMT -->
	</html>

