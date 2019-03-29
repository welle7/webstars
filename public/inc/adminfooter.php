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
	<?php
	
	?>
<script src="<?php echo $js; ?>jquery-1.11.3.min.js"></script>
<script src="<?php echo $js; ?>jquery.validate.min.js"></script>
<script src="<?php echo $js; ?>jquery.validate.password.js"></script>
<script src="<?php echo $js; ?>validate.js"></script>
</body>
</html>