
<div class="footer">
	<div>
		<!-- <img src="<?php bloginfo('template_url' ); ?>/images/04.png"> -->
		<p>All rights reserved</p>
		<p>Call us if you want a licensed copy</p>
	</div>
</div>
	<script src="<?php bloginfo('template_url' ); ?>/js/logo.js"></script>
			<script>
              // new WOW().init();
            </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

   <script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
</body>
</html>