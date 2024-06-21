	@extends('layouts.admin')
	@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a>Mon profil</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="admin/assets/images/user4.png" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-muted mb-0">{{ $singleUser->nom }} {{ $singleUser->prenom }}</h4>
											<p><h>{{ $singleUser->email }}</h></p>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-statistics">
											<div class="text-center">
												<div class="mt-4">
													<a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Envoyer Message</a>
												</div>
											</div>

											<div class="modal fade" id="sendMessageModal">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Envoyer un message</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
														</div>
														<div class="modal-body">
															<form class="comment-form">
																<div class="row"> 
																	<div class="col-lg-6">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Nom <span class="required">*</span></label>
																			<input type="text" class="form-control" value="Author" name="Author" placeholder="">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
																			<input type="text" class="form-control" value="Email" placeholder="Email" name="">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Commentaire</label>
																			<textarea rows="8" class="form-control" name="comment" placeholder=""></textarea>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="mb-3 mb-0">
																			<input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div> -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">A propos de moi</a>
                                            </li>
                                            <!-- <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Paramètres</a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-me">
												<div class="pt-3">
													<div class="profile-personal-info">
														<h4 class="text-primary mb-4">Information Personnel</h4>
														<div class="row mb-2">
															<div class="col-sm-3 col-5">
																<h5 class="f-w-500">Nom <span class="pull-end">:</span>
																</h5>
															</div>
															<div class="col-sm-9 col-7"><span>{{ $singleUser->nom }}</span>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-sm-3 col-5">
																<h5 class="f-w-500">Prénom <span class="pull-end">:</span>
																</h5>
															</div>
															<div class="col-sm-9 col-7"><span>{{ $singleUser->prenom }}</span>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-sm-3 col-5">
																<h5 class="f-w-500">Téléphone <span class="pull-end">:</span></h5>
															</div>
															<div class="col-sm-9 col-7"><span>{{ $singleUser->telephone }}</span>
															</div>
														</div>
														<div class="row mb-2">
															<div class="col-sm-3 col-5">
																<h5 class="f-w-500">Email <span class="pull-end">:</span>
																</h5>
															</div>
															<div class="col-sm-9 col-7"><span>{{ $singleUser->email }}</span>
															</div>
														</div>
													</div>
												</div>
                                            </div>
                                            <div id="profile-settings">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Paramètre du compte</h4>
                                                        <form action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
															@csrf
															@method('PUT')
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Nom</label>
                                                                    <input type="text" class="form-control" name="nom" value="" required>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Prénom</label>
                                                                    <input type="text" class="form-control" name="prenom" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Téléphone</label>
                                                                <input type="tel" class="form-control" name="telephone" value="" required>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">E-mail</label>
                                                                    <input type="email" class="form-control" name="email" value="" required>
                                                                </div>
                                                                <div class="mb-3 col-md-6">
																	<label class="form-label">Mot de passe</label>
                                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Répondre au commentaire</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Fermer</button>
													<button type="button" class="btn btn-primary">Répondre</button>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
	@endsection