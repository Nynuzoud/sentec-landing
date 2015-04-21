<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<main id="main">
				<span id="info_title">Информация</span>
				<div class="ui top attached tabular menu">
				    <a class="active item" data-tab="first">First</a>
				    <a class="item" data-tab="second">Second</a>
				</div>
				<div class="ui bottom attached active tab segment" data-tab="first">
				    First
				</div>
				<div class="ui bottom attached tab segment" data-tab="second">
				    Second
				</div>
			</main>
		</div>
	</div>
	<script src="http://test-sentec.geosite.ru/wp-content/themes/bones/library/js/tab.min.js" type="text/javascript">
		var c = jQuery.noConflict()
	    c(document).ready(function() {
	        c('.menu .item').tab();
	    });
	</script>
<?php get_footer(); ?>
