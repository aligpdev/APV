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
						@if(Session::get('UserRole') == "ROOT" )
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
									<h4 class="card-intro-title">Publicités</h4>
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
									<h4 class="card-intro-title">Photos</h4>
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

						<!-- <div class="col-xl-12 card h-auto">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
										<div class="card text-white bg-primary">
											<ul class="list-group list-group-flush">
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
											</ul>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
										<div class="card text-white bg-warning text-black">
											<ul class="list-group list-group-flush">
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Regular Checkups</span></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Theodore Handle :</span><strong>Dentist</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Valentino Morose :</span><strong>Surgeon</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Fleece Marigold :</span><strong>Clinical</strong></li>
												<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Eric Widget :</span><strong>Cardiology</strong></li>
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
												<h4 class="my-2">You don’t have badges yet</h4>
												<a href="javascript:void();;" class="btn my-2 btn-primary btn-lg px-4"><i class="fa fa-usd"></i> Earn Budges</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->

					</div>
				</div>
				<div class="row">
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h3 class="mb-1">Guest Activity</h3>
										<div class="card-action coin-tabs mt-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#month" role="tab" aria-selected="false">Month</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#weekly" role="tab" aria-selected="true">Weekly</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#day" role="tab" aria-selected="false">Day</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body pb-2">
										<div class="d-flex align-items-center mb-5">
											<div class="d-flex align-items-center flex-lg-wrap me-5 flex-wrap">
												<span class="me-3 d-flex align-items-center">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect y="0.716797" width="12" height="12" rx="4" fill="var(--primary)"/>
													</svg>
													Check In
												</span>
												<h4 class="mb-0">457 Guest</h4>
											</div>
											<div class="d-flex align-items-center flex-lg-wrap flex-wrap">
												<span class=" squre me-3 d-flex align-items-center">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect y="0.716797" width="12" height="12" rx="4" fill="#ff9d43"/>
													</svg>
													Check Out
												</span>
												<h4 class="mb-0">157 Guest</h4>
											</div>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade show active" id="month">
												<div id="reservationChart" class="reservationChart"></div>
											</div>	
											<div class="tab-pane fade" id="weekly">
												<div id="reservationChart1" class="reservationChart"></div>
											</div>	
											<div class="tab-pane fade" id="day">
												<div id="reservationChart2" class="reservationChart"></div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="card availability line">
									<div class="card-header border-0">
										<h3>Rooms Availability</h3>	
									</div>
									<div class="card-body pb-2">
										<div id="pieChart1"></div>
										<div class="d-flex justify-content-between pt-3 pt-sm-5 flex-wrap">
											<span><span class="pills-lable bg-dark me-2"></span>Available</span>
											<h4>66 Rooms</h4>
										</div>
										<div class="d-flex justify-content-between flex-wrap">
											<span><span class="pills-lable me-2"></span>Sold Out</span>
											<h4>129 Rooms</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="mb-0">Visitor</h3>	
									</div>
									<div class="card-body pt-2 pb-2">
										<h2 class="text">12,456</h2>
										<div id="columnChart" class="crd-coloum"></div>
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