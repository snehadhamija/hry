
	<!--// Common js -->

	<!-- cart-js -->

	
		edu.render();

		edu.cart.on('edu_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	
	<!-- //cart-js -->

	<!-- reviews -->
	
		function blinker() {
			$('.blinking').fadeOut(500);
			$('.blinking').fadeIn(500);
		}
		setInterval(blinker, 1000);
	
	
		function cycle($item, $cycler) {
			setTimeout(cycle, 2000, $item.next(), $cycler);

			$item.slideUp(1000, function () {
				$item.appendTo($cycler).show();
			});
		}
		cycle($('#cycler div:first'), $('#cycler'));
	
	<!--// reviews -->

	<!-- responsive-tabs -->
	
	
		$(document).ready(function () {
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	
	<!-- //responsive-tabs -->

	<!-- Carousel Auto-Cycle -->
	
		$(document).ready(function () {
			$('.carousel').carousel({
				interval: 6000
			})
		});
	
	<!-- // Carousel Auto-Cycle -->

	<!-- Nav Js -->

	
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
					$(this).toggleClass('open');
				}
			);
		});
	