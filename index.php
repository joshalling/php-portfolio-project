<?php 
require_once('inc/config.php');
require_once(ROOT_PATH . 'inc/designs.php');

$grad_designs = get_designs_grad();
$wedd_designs = get_designs_wedd();
$other_designs = get_designs_other();

$section = "portfolio";

?>
<?php include(ROOT_PATH . 'inc/header.php'); ?>
		<section>
			<article>
				<ul id="gallery">
					<li class="list-head"><h2>Graduation Announcements</h2></li>
					<?php foreach ($grad_designs as $design) {
						include(ROOT_PATH . 'inc/partial-list-view.html.php');
					} ?>
					<li class="list-head"><h2>Wedding Invitations</h2></li>
					<?php foreach ($wedd_designs as $design) {
						include(ROOT_PATH . 'inc/partial-list-view.html.php');
					} ?>
					<li class="list-head"><h2>Other Designs</h2></li>
					<?php foreach ($other_designs as $design) {
						include(ROOT_PATH . 'inc/partial-list-view.html.php');
					} ?>
				</ul>
			</article>
		</section>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>js/lightbox.js" charset="utf-8"></script>
		
<?php include(ROOT_PATH . 'inc/footer.php'); ?>