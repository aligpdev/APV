@extends('layouts.admin')
@section('content')
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						@if(Session::get('UserRole') == "ADMIN" )
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-danger">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="la la-users"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Total Vendeurs</p>
												<h3 class="text-white">{{$totalvendeurs}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-success">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="flaticon-381-calendar-1"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Total Produits</p>
												<h3 class="text-white">{{$totalproduits}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-primary">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="flaticon-012-checkmark"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Total Commandes</p>
												<h3 class="text-white">0</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-warning">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="la la-users"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Total Clients</p>
												<h3 class="text-white">0</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@else
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-danger">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="la la-users"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Total Vendeurs</p>
												<h3 class="text-white">{{$totalvendeurs}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-success">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="flaticon-381-calendar-1"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Mes Produits</p>
												<h3 class="text-white">{{$nosproduits}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-primary">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="flaticon-012-checkmark"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Mes Commandes</p>
												<h3 class="text-white">0</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-warning">
									<div class="card-body p-4">
										<div class="media">
											<span class="me-3">
												<i class="la la-users"></i>
											</span>
											<div class="media-body text-white">
												<p class="mb-1">Total Clients</p>
												<h3 class="text-white">0</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
						<div class="row">
							<div class="col-xl-6">
								<div class="card">
									<div class="card-body p-4">
									<h4 class="card-intro-title">Images publicitaires</h4>
										<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators">
												<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
												<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
												<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
											</div>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" src="admin/assets/images/big/img1.jpg" alt="First slide">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="admin/assets/images/big/img2.jpg" alt="Second slide">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="admin/assets/images/big/img3.jpg" alt="Third slide">
												</div>
											</div>
											<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Précédent</span>
											  </button>
											  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Suivant</span>
											  </button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="card">
									<div class="card-body p-4">
									<h4 class="card-intro-title">Images kakudaa</h4>
										<div class="bootstrap-carousel">
											<div class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img class="d-block w-100" src="admin/assets/images/big/img2.jpg" alt="First slide">
														<div class="carousel-caption d-none d-md-block">
															<h5>Premier slide label</h5>
															<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img class="d-block w-100" src="admin/assets/images/big/img3.jpg" alt="Second slide">
														<div class="carousel-caption d-none d-md-block">
															<h5>Second slide label</h5>
															<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img class="d-block w-100" src="admin/assets/images/big/img4.jpg" alt="Third slide">
														<div class="carousel-caption d-none d-md-block">
															<h5>Troisième slide label</h5>
															<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-12 card h-auto">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
										<div class="card text-white bg-primary">
											<ul class="list-group list-group-flush">
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Vente privées :</span><strong>Interdit</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Arnaque :</span><strong>Interdit</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Trafic :</span><strong>Interdit</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Vols :</span><strong>Interdit</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Inactivité :</span><strong>Interdit</strong></li>
											</ul>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
										<div class="card text-white bg-warning text-black">
											<ul class="list-group list-group-flush">
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Administrateurs</span></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Mr Nom :</span><strong>Gestionnaire</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Mr Nom :</span><strong>Comptable</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Mr Nom :</span><strong>Développeur</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Mr Nom :</span><strong>Graphiste</strong></li>
											</ul>
										</div>
									</div>
									<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
										<div class="card">
											<div class="card-body text-center ai-icon  text-primary">
												<svg id="rocket-icon" class="my-2" viewBox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
													<line x1="3" y1="6" x2="21" y2="6"></line>
													<path d="M16 10a4 4 0 0 1-8 0"></path>
												</svg>
												<h4 class="my-2">Voir tous les articles publiés</h4>
												<a href="{{route('ACCUEIL')}}" class="btn my-2 btn-primary btn-lg px-4">Aller sur le site</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
@endsection