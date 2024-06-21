@extends('layouts.admin')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a>Catégories d'articles</a></li>
					</ol>
                </div>
                <!-- row -->

                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listes Catégories</h4>
								<button type="button" class="btn btn-rounded btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
									<span class="btn-icon-start text-black"><i class="fa fa-plus color-success"></i></span>
									Ajouter
								</button>
								<!-- Modal start-->
								<div class="modal fade" id="exampleModalCenter">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Ajouter une catégorie</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<div class="modal-body">
												<form action="{{ route('CREER-CATEGORIE') }}" method="POST">
													@csrf
													<div class="mb-3">
														<input class="form-control" type="text" name="produit_categorie" placeholder="saisissez le nom de la catégorie" required>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Fermer</button>
														<button type="submit" class="btn btn-success">Valider <span class="btn-icon-end"><i class="fa fa-check"></i></span></button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end-->
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group">
										@foreach($categories as $categorie)
                                        <li class="list-group-item d-flex justify-content-between align-items-center"value="{{$categorie->id}}">
											{{$categorie->produit_categorie}}
											<div class="d-flex">
												<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
                                        </li>
										@endforeach
                                    </ul>
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