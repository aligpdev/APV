@extends('layouts.admin')
@section('content')

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">VENDRE</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Remplissez le formulaire de vente</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('CREER-PRODUIT')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="results">
                                            @if(Session::get('success'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Nom du produit</label>
                                                <input type="text" class="form-control" name="nom_produit" id="nom_produit" placeholder="saississez le nom du produit" required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Prix</label>
                                                <input type="text" class="form-control" name="prix_produit" id="prix_produit" placeholder="saississez le prix du produit" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Catégorie</label>
                                                <select class="default-select form-control wide" name="idCategorie" required>
													<option>Choisir une catégorie</option>
                                                    @foreach ($categories as $categorie)
													<option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                                    @endforeach
												</select>
                                                <div class="error"></div>
                                            </div>
                                            <div class="mb-3">
												<label class="form-label">Description du produit</label>
												<textarea class="form-control" rows="4" name="descript_produit" id="descript_produit" required></textarea>
											</div>
											<div class="mb-3">
												<label for="formFileSm" class="form-label">Importer une image</label>
												<input class="form-control form-control-sm" name="image" id="image" type="file">
											</div>
											<!-- <div class="mb-3">
												<label for="formFileSm" class="form-label">Importer une deuxième image</label>
												<input class="form-control form-control-sm" id="formFileSm" type="file">
											</div>
											<div class="mb-3">
												<label for="formFileSm" class="form-label">Importer une troisième image</label>
												<input class="form-control form-control-sm" id="formFileSm" type="file">
											</div> -->
                                        </div>
                                        <button type="submit" class="btn btn-primary">Publier</button>
                                    </form>
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