<?php if ( !defined( '_INF' ) ) exit; ?>
			<div class="footer">
				<p>Surf Timer Stats - <a href="https://css.noil.lt">css.noil.lt</a></p>
				<?php
				if ( INF_DEV && isset( $GLOBALS['inf_devfooter'] ) ) { echo "<p>{$GLOBALS['inf_devfooter']}</p>"; }
				?>
			</div>
		</div>
	</body>
</html>