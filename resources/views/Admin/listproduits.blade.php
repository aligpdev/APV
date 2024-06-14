@extends('layouts.admin')
@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a>AFFICHER LES PRODUITS</a></li>
            </ol>
        </div>
        <div class="row">
            <!-- listes articles début -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Produits en vente</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="results">
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                            </div>
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th><strong>Images</strong></th>
                                        <th><strong>Nom du produit</strong></th>
                                        <th><strong>Catégorie</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>Date</strong></th>
                                        <th><strong>Prix</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($commerce as $commerce)
                                    <tr>
                                        <td>
                                            <div class="media d-flex align-items-center">
                                                <div class="avatar avatar-xl me-2">
                                                    <div class=""><img class="rounded-circle img-fluid"
                                                            src="{{ asset('/articlesImages/' . $commerce->image)}}" width="30" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $commerce->nom_produit }}</td>
                                        <td>{{ $commerce->produit_categorie}}</td>
                                        <td class="text-truncate" style="max-width: 300px;">{{ $commerce->descript_produit}}.</td>
                                        <td>{{ $commerce->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $commerce->prix_produit}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp me-1" data-toggle="modal" data-target="#modal{{ $commerce->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>

                                                <form action="{{ route('SUPP-PRODUIT', $commerce->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet produit ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal for editing -->
                                    <div class="modal fade" id="modal{{ $commerce->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{ $commerce->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
													<h5 class="modal-title" id="modalLabel{{ $commerce->id }}">Modifier Produit</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 1.2rem; color: #fff; background-color: #dc3545; border: none; width: 60px; height: 30px; display: flex; align-items: center; justify-content: center; padding: 0; cursor: pointer;">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
                                                <div class="modal-body">
                                                    <form action="{{ route('MODIFIER-PRODUIT', $commerce->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="nom_produit{{ $commerce->id }}">Nom du Produit</label>
                                                            <input type="text" class="form-control" id="nom_produit{{ $commerce->id }}" name="nom_produit" value="{{ $commerce->nom_produit }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="produit_categorie{{ $commerce->id }}">Catégorie</label>
                                                            <input type="text" class="form-control" id="produit_categorie{{ $commerce->id }}" name="produit_categorie" value="{{ $commerce->produit_categorie }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descript_produit{{ $commerce->id }}">Description</label>
                                                            <textarea class="form-control" id="descript_produit{{ $commerce->id }}" name="descript_produit">{{ $commerce->descript_produit }}</textarea>
                                                        </div>
                                                        <div class="form-group" style="margin-bottom:20px;">
                                                            <label for="prix_produit{{ $commerce->id }}">Prix</label>
                                                            <input type="text" class="form-control" id="prix_produit{{ $commerce->id }}" name="prix_produit" value="{{ $commerce->prix_produit }}">
                                                        </div>
                                                        <div class="form-group" style="margin-bottom:20px;">
                                                            <label for="image{{ $commerce->id }}"></label>
                                                            <input type="file" class="form-control-file" id="image{{ $commerce->id }}" name="image">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- listes articles fin -->
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection
