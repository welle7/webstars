<div id='layout_footer'></div>
	</main>
	<footer>
		<div class="wrapper">
		<?php
		if (isset($_SESSION['user']) and $_SESSION['log'] = true )
			{
			echo "<p><a href='{$url}admin/logout.php'>Logout</a></p>";
			}
		?>
		</div>
	</footer>
<script src="<?php echo $js; ?>prism.js"></script>
</body>
</html>