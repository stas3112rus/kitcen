<?
function drawScripts()
{
	global $LEVEL;
?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<script type="text/javascript" src="<? echo $LEVEL ?>js/slick/slick.min.js"></script>
	<script src="<? echo $LEVEL . "/js/popup.js" ?>"></script>
	<script src="https://moclients.com/js/5391.js"></script>
	<!-- Cleversite chat button -->
	<script type='text/javascript'>
		(function() {
			var s = document['createElement']('script');
			s.type = 'text/javascript';
			s.async = true;
			s.charset = 'utf-8';
			s.src = '//cleversite.ru/cleversite/widget_new.php?supercode=1&referer_main=' + encodeURIComponent(document.referrer) + '&clid=67977dkTKf&siteNew=88767';
			var ss = document['getElementsByTagName']('script')[0];
			if (ss) {
				ss.parentNode.insertBefore(s, ss);
			} else {
				document.documentElement.firstChild.appendChild(s);
			};
		})();
	</script>
	<!-- / End of Cleversite chat button -->
<?
}
