<?php get_header(); ?>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "poppins";
		}

		.bg_img {
			background: url(
'https://media.geeksforgeeks.org/wp-content/uploads/20240226131034/2142357.jpg');
			height: 400px;
			width: 100%;
			background-repeat: no-repeat;
			background-position: center;
			background-size: contain;
		}
	</style>	
	<section class="py-5">
		<div class="d-flex justify-content-center 
					align-items-center flex-column 
					text-center w-100">
			<div class="bg_img w-50">
			</div>
			<div>
				<p class="display-4">Looks Like You're Lost</p>
				<p>The page you are looking for not available...</p>
				<a href="http://localhost/themeD"
				class="text-white text-decoration-none px-4 py-3 
						bg-success d-inline-block mt-2 rounded">
					Go to Home
				</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
