<?php require 'includes/functions.php';

includeTemplate('header');  ?>
		<main class="main">
			<div class="container">
				<h3>Propiedad Nombre</h3>
				<div class="house-content">
					<picture>
						<source srcset="/build/img/destacada.webp" type="image/webp" />

						<source srcset="/build/img/destacada.jpeg" type="image/jpeg" />

						<img
							loading="lazy"
							src="/build/img/destacada.jpg"
							alt="imagen Property"
						/>
					</picture>
					<div class="description-sale">
						<h4>Nombre de propiead</h4>
						<p>
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. At est
							debitis quod mollitia officia non dignissimos voluptatum eius,
							cupiditate facere sequi accusantium tenetur deleniti pariatur ullam
							quaerat repudiandae fuga magnam!
						</p>
						<div class="characteristics">
							<div class="icon">
								<img src="./src/svg/Vector.svg" alt="" />
								<p>4</p>
							</div>
							<div class="icon">
								<img src="./src/svg/Vector-1.svg" alt="" />
								<p>2</p>
							</div>
							<div class="icon">
								<img src="./src/svg/CAR.svg" alt="" />
								<p>2</p>
							</div>
						</div>
						<a href="">
							<button class="btn-property">Cotizar</button>
						</a>
					</div>
				</div>
			</div>
		</main>
		<?php include includeTemplate('footer'); ?>  