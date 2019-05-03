<div id='layout_footer'></div>
	</main>
	<footer>
		<div class="wrapper">
		<?php
		if (isset($_SESSION['user']) and $_SESSION['log'] = true ){
			echo "<p><a href='{$url}admin/logout.php'>Logout</a></p>";
		}
		?>
		</div>
	</footer>
		<?php
		if ( isset( $page )){
			echo "<script src='" . $js . "jquery-3.4.1.min.js'></script>\n";
		}
		//Accordeon
		if ( isset( $page ) && $page == 'accordeon' ) {
			echo "<script src='" . $js . "accordeon.js'></script>\n";
		}
		//jquery
		if ( isset( $page ) && $page == 'jquery' ) {
			echo "<script src='" . $js . "jquery.js'></script>\n";
		}
		//LazyLoad
		if ( isset( $page ) && $page == 'lazy' ) {
			echo "<script src='https://rawgit.com/w3c/IntersectionObserver/master/polyfill/intersection-observer.js'></script>\n" .
			"<script src='" . $js . "lozad.js'></script>\n";
		}
		?>
<script src="<?php echo $js; ?>prism.js"></script>
</body>
</html>