<header>
	<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="<?= base_url() ?>/assets/logo_dark.png" width="48" class="rounded" alt="">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbarCollapse" style="">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link active rounded" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link rounded" href="#">Map</a>
					</li>
					<li class="nav-item">
						<a class="nav-link rounded" href="#">About</a>
					</li>
				</ul>
				<a href="<?= base_url() ?>/signout" class="btn btn-outline-warning" type="submit">Sign Out</a>
			</div>
		</div>
	</nav>
</header>