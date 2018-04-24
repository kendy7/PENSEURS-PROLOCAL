<?php
$page_title = $lang_client_['Compagnie']['PAGE_TITLE'];
$AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
require_once('include/inc_load.php');
require_once(theme_rel_path.'/include/header.php');
?>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
<?php
require_once(theme_rel_path.'/include/body-header.php');
?>

        <div class="container-fluid">
			
	     <div class="container-semifluid" id="main-container">  
			
			 
			 <h1> Encours......</h1>
			
			</div>
			</div>


 
<?php
require_once(theme_rel_path.'/include/footer.php');
?>
<script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.eislideshow.js"></script> 
<script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.easing.1.3.js"></script> 

</body>
</html>