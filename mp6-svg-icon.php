<?php

add_action( 'admin_head', 'set_custom_svg_icon' );

function set_custom_svg_icon() {
?>
	<style type="text/css">

		/* replace `{menu-slug}` with the slug name you passed `add_menu_page()` */

		/* set fallback dashicon, if browser does _not_ support SVG */
		#toplevel_page_{menu-slug} .wp-menu-image:before {
			content: '\f174';
		}

		/* hide fallback dashicon, if browser _does_ supports SVG */
		.svg #toplevel_page_{menu-slug} .wp-menu-image:before {
			display: none;
		}

		/* set SVG background image (needs `!important` modifier) */
		.svg #toplevel_page_{menu-slug} .wp-menu-image {
			background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSItNDc5LjUgMzAwLjUgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTQ3OS41IDMwMC41IDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48c3R5bGU+LnN0eWxlMHtmaWxsOgkjOTk5OTk5O308L3N0eWxlPjxwYXRoIGQ9Ik0tNDc0Ljk5OSAzMTUuNWMtMC44MjkgMC0xLjUgMC42Ny0xLjUgMS41czAuNjcxIDEuNSAxLjUgMS41czEuNS0wLjY3IDEuNS0xLjVTLTQ3NC4xNyAzMTUuNS00NzQuOTk5IDMxNS41IHogTS00NjYgMzE1LjVjLTAuODI4IDAtMS41IDAuNjctMS41IDEuNXMwLjY3MiAxLjUgMS41IDEuNWMwLjgzIDAgMS41LTAuNjcgMS41LTEuNVMtNDY1LjE3IDMxNS41LTQ2NiAzMTUuNXogTS00NjUuNSAzMTIuNWgtOXYtMSBoOWw0LTdoLTEzdi0yYzAtMC41NS0wLjQ1LTEtMS0xaC0zYy0wLjU1MSAwLTEgMC40NS0xIDFzMC40NDkgMSAxIDFoMnY3djF2MmMwIDAuNiAwLjUgMSAxIDFoMTBjMC41NTEgMCAxLTAuNDUgMS0xIFMtNDY0Ljk0OSAzMTIuNS00NjUuNSAzMTIuNXoiIGNsYXNzPSJzdHlsZTAiLz48L3N2Zz4=') !important;
			background-repeat: no-repeat;
			background-position: center center;
		}

	</style>
<?php
}
