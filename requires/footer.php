<!-- Piwik -->
<script type="text/javascript">
	var _paq = _paq || [];
	_paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
	_paq.push(["setCookieDomain", "*.swiftdeal.in"]);
	_paq.push(["setDomains", ["*.swiftdeal.in"]]);
	_paq.push(["trackPageView"]);
	_paq.push(["enableLinkTracking"]);

	(function() {
	  var u=(("https:" == document.location.protocol) ? "https" : "http") + "://swiftdeal.in/piwik/";
	  _paq.push(["setTrackerUrl", u+"piwik.php"]);
	  _paq.push(["setSiteId", "1"]);
	  var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
	  g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
	})();
</script>
<!-- End Piwik Code -->
			<div data-role="footer" data-position="fixed">
				<h4>&copy; <?php echo strftime("%Y");?>, SwiftDeal.in</h4>
			</div><!-- /footer -->
		</div>
		<?php require_once $dir_dialog_mobile.'dialogs.php';?>
	</body>
</html>
