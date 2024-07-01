@extends('layouts.client')
@section('content')

	<!-- Slider Debut -->
		<section class="hero-slider">
				<div class="single-slider">
					<div class="container">
						<div class="row no-gutters">
							<div class="col-lg-9 offset-lg-3 col-12">
								<div class="text-inner">
									<div class="row">
										<div class="col-lg-7 col-12">
											<div class="hero-text">
												<h1><span>Trouvez tous vos articles sur </span>Kakudaa</h1>
												<p>Bienvenue dans notre boutique en ligne où chaque<br> visiteur est chaleureusement accueilli! Explorez <br>
												notre sélection soigneusement choisie d'articles.</p>
												<div class="button">
													<a href="#" class="btn btn-warning">Achetez maitenant!</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
	<!-- Slider Fin -->


	<!-- premere section start  -->
		<section class="small-banner section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="single-banner">
							<img src="client/assets/images/Q5.jpg" alt="#">
							<!-- <div class="content">
								<a href="#" style="display: inline-block; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 10%; text-align: center; transition: background-color 0.3s ease;">infos</a>
							</div> -->
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="single-banner">
							<img src="client/assets/images/Q1.jpg" alt="#">
							<!-- <div class="content">
								<a href="#" style="display: inline-block; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 10%; text-align: center; transition: background-color 0.3s ease;">infos</a>
							</div> -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="single-banner tab-height">
							<img src="client/assets/images/Q2.jpg" alt="#">
							<!-- <div class="content">
								<a href="#" style="display: inline-block; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 10%; text-align: center; transition: background-color 0.3s ease;">infos</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- premere section end -->


	<!-- Categories Start -->
		<section class="shop-home-list section" style="margin-top:30px;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Catégories</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Start Single List -->
					<div class="single-list">
						<div class="list-image">
							<img src="client/assets/images/montre.png" alt="#">
						</div>
						<a href="#"><b>catégorie</b></a>
					</div>
					<!-- End Single List -->

					<!-- Start Single List -->
					<div class="single-list">
						<div class="list-image">
							<img src="client/assets/images/chemise.png" alt="#">
						</div>
						<a href="#"><b>catégorie</b></a>
					</div>
					<!-- End Single List -->

					<!-- Start Single List -->
					<div class="single-list">
						<div class="list-image">
							<img src="client/assets/images/sandales.png" alt="#">
						</div>
						<a href="#"><b>catégorie</b></a>
					</div>
					<!-- End Single List -->
					<!-- Start Single List -->
					<div class="single-list">
						<div class="list-image">
							<img src="client/assets/images/maquillage.png" alt="#">
						</div>
						<a href="#"><b>catégorie</b></a>
					</div>
					<!-- End Single List -->

					<!-- Start Single List -->
					<div class="single-list">
						<div class="list-image">
							<img src="client/assets/images/ordinateur.png" alt="#">
						</div>
						<a href="#"><b>catégorie</b></a>
					</div>
					<!-- End Single List -->

					<!-- Start Single List -->
					<div class="single-list">
						<div class="list-image">
							<img src="client/assets/images/electromenager.png" alt="#">
						</div>
						<a href="#"><b>catégorie</b></a>
					</div>
					<!-- End Single List -->
				</div>
			</div>
		</section>
	<!-- Categories End -->


	<!-- Start Bonus -->
		<section class="shop-services section home">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-service">
							<i class="ti-rocket"></i>
							<h4>LIVRAISON GRATUITE</h4>
							<p>plus de 500 € d'achat</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-service">
							<i class="ti-reload"></i>
							<h4>RETOUR GRATUIT</h4>
							<p>Retours sous 30 jours</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-service">
							<i class="ti-lock"></i>
							<h4>PAIEMENT SECURISE</h4>
							<p>100% paiement sécurisé</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="single-service">
							<i class="ti-tag"></i>
							<h4>MEILLEURE PRIX</h4>
							<p>prix garantis</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Bonus -->


	<!-- Articles en ventes Start -->
		<section>
			<div class="product-area section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-title">
								<h2>Articles en vente</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="product-info">
								<div class="tab-content" id="myTabContent">
									<!-- Articles Start -->
									<div class="tab-pane fade show active" id="man" role="tabpanel">
										<div class="tab-single">
											<div class="row">
												<div class="col-xl-3 col-lg-4 col-md-4 col-12">
													<div class="single-product">
														<div class="product-img">
															<a href="#">
																<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																<span class="out-of-stock">catégorie</span>
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="#">Nom de l'article</a></h3>
															<div class="product-price">
																<span>100 €</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-4 col-md-4 col-12">
													<div class="single-product">
														<div class="product-img">
															<a href="#">
																<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																<span class="out-of-stock">catégorie</span>
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="#">Nom de l'article</a></h3>
															<div class="product-price">
																<span>100 €</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-4 col-md-4 col-12">
													<div class="single-product">
														<div class="product-img">
															<a href="#">
																<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																<span class="out-of-stock">catégorie</span>
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="#">Nom de l'article</a></h3>
															<div class="product-price">
																<span>100 €</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-4 col-md-4 col-12">
													<div class="single-product">
														<div class="product-img">
															<a href="#">
																<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																<span class="out-of-stock">catégorie</span>
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">catégorie</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">catégorie</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">catégorie</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">catégorie</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ Articles End -->

										<!-- Start Single1 Tab -->
										<div class="tab-pane fade" id="women" role="tabpanel">
											<div class="tab-single">
												<div class="row">
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="price-dec">30% Off</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">Hot</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Single1 Tab -->

										<!-- Start Single2 Tab -->
										<div class="tab-pane fade" id="kids" role="tabpanel">
											<div class="tab-single">
												<div class="row">
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="price-dec">30% Off</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">Hot</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ End Single2 Tab -->

										<!-- Start Single3 Tab -->
										<div class="tab-pane fade" id="accessories" role="tabpanel">
											<div class="tab-single">
												<div class="row">
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="price-dec">30% Off</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">Hot</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ End Single3 Tab -->

										<!-- Start Single4 Tab -->
										<div class="tab-pane fade" id="essential" role="tabpanel">
											<div class="tab-single">
												<div class="row">
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="price-dec">30% Off</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">Hot</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ End Single4 Tab -->

										<!-- Start Single5 Tab -->
										<div class="tab-pane fade" id="prices" role="tabpanel">
											<div class="tab-single">
												<div class="row">
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="price-dec">30% Off</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
																	<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
																	<span class="out-of-stock">Hot</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><span>voir détails</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Ajouter au panier</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="#">Nom de l'article</a></h3>
																<div class="product-price">
																	<span>100 €</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ End Single5 Tab -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- Articles en ventes end -->


	<!-- Publicité start  -->
		<section class="midium-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="single-banner">
							<img src="client/assets/images/Q3.jpg" alt="#">
							<div class="content">
								<!-- <h3>Image publicitaire 1</span></h3> -->
								<a href="#">Contactez-nous</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="single-banner">
							<img src="client/assets/images/Q4.jpg" alt="#">
							<div class="content">
								<!-- <h3>Image publicitaire 2</span></h3> -->
								<a href="#">Contactez-nous</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- Publicité end  -->
	

	<!-- Start Tous nos produits -->
		<section>
			<div class="product-area most-popular section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-title">
								<h2>Tous nos produits</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="owl-carousel popular-slider">
								@foreach($commerce as $commerce)
								<div class="single-product">
									<div class="product-img">
										<a href="{{ route('DETAILS-PRODUIT', $commerce)}}">
											<img class="default-img" src="{{ asset('/articlesImages/' . $commerce->image)}}" alt="#" style="width: 300px; height: 300px; object-fit: cover;">
											<img class="hover-img" src="{{ asset('/articlesImages/' . $commerce->image)}}" alt="#" style="width: 300px; height: 300px; object-fit: cover;">
											<span class="out-of-stock">{{ $commerce->categorie->produit_categorie}}</span>
										</a>
										<div class="button-head">
											<div class="product-action">
												<a title="Quick View" href="{{ route('DETAILS-PRODUIT', $commerce)}}"><span>Voir details</span></a>
											</div>
											<div class="product-action-2">
												<a title="Add to cart" href="#">Ajouter au panier</a>
											</div>
										</div>
									</div> 
									<div class="product-content">
										<h3><a href="#">{{ $commerce->nom_produit }}</a></h3>
										<div class="product-price">
											<span>{{ $commerce->prix_produit}} €</span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Tous nos produits -->


	<!-- Start Offres -->
		<section class="cown-down">
			<div class="section-inner ">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-12 padding-right">
							<div class="image">
								<img src="client/assets/images/bonus.png" alt="#">
							</div>	
						</div>	
						<div class="col-lg-6 col-12 padding-left">
							<div class="content">
								<div class="heading-block">
									<h3 class="title">Offre du jour</h3>
									<p class="text">Inscrivez-vous et bénéficiez d'une remise de 25 %.</p>
									<h1 class="price">1200 € <s>1000 €</s></h1>
									<div class="coming-time">
										<div class="clearfix" data-countdown="2024/05/31"></div>
									</div>
								</div>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</section>
	<!-- /End Offres -->


	<!-- Start Blog  -->
		<!-- <section class="shop-blog section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Nos dernières actualités</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="shop-single-blog">
							<img src="https://via.placeholder.com/370x300" alt="#">
							<div class="content">
								<p class="date">01/01/2024</p>
								<a href="#" class="title">Titre de l'article</a>
								<a href="#" class="more-btn">plus de détails</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="shop-single-blog">
							<img src="https://via.placeholder.com/370x300" alt="#">
							<div class="content">
								<p class="date">01/01/2024</p>
								<a href="#" class="title">Titre de l'article</a>
								<a href="#" class="more-btn">plus de détails</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="shop-single-blog">
							<img src="https://via.placeholder.com/370x300" alt="#">
							<div class="content">
								<p class="date">01/01/2024</p>
								<a href="#" class="title">Titre de l'article</a>
								<a href="#" class="more-btn">plus de détails</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<!-- End Blog  -->


	<!-- Start Newsletter  -->
		<section class="shop-newsletter section">
			<div class="container">
				<div class="inner-top">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<div class="inner">
								<h4>Newsletter</h4>
								<p> Abonnez-vous à notre newsletter et bénéficiez de 10% de réduction sur votre premier achat</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="EMAIL" placeholder="Your email address" required="" type="email">
									<button class="btn">S'abonner</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Newsletter -->
@endsection

