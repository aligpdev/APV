@extends('layouts.admin')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a>Reçu d'achat du client</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card mt-3">
                            <div class="card-header"> Reçu <strong>01/01/01/2024</strong> <span class="float-end">
                                    <strong>Status:</strong> En attente</span> </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>De:</h6>
                                        <div> <strong>Pays: Togo</strong> </div>
                                        <div>Eshop</div>
                                        <div>Agoe, Lomé</div>
                                        <div>Email: mail@gmail.com</div>
                                        <div>Tél: (+228) 90112233</div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>A:</h6>
                                        <div><strong>Pays: Allemagne</strong> </div>
                                        <div>Reçeveur: nom client</div>
                                        <div>Beachcity, Berlin</div>
                                        <div>Email: mail@gmail.com</div>
                                        <div>Tél: (+228) 90112233</div>
                                    </div>
                                    <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
											<div class="col-sm-9"> 
												<div class="brand-logo mb-3">
													<img class="logo-abbr me-2" width="50" src="admin/assets/images/logo.png" alt="">
													<img class="logo-compact blk" width="110" src="admin/assets/images/logo-text-blk.png" alt="">
													<img class="logo-compact white" width="110" src="admin/assets/images/logo-text-white.png" alt="">
												</div>
                                                <span>S'il vous plait envoyez la somme exact: <strong class="d-block">0.15050000 BTC</strong>
                                                    <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                                                <small class="text-muted">Taux de change actuel 1 BTC = 6590 $ USD</small>
                                            </div>
                                            <div class="col-sm-3 mt-3"> <img src="admin/assets/images/qr.png" alt="" class="img-fluid width110"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Nom de l'article</th>
                                                <th>Catégorie</th>
                                                <th class="right">Prix unitaire</th>
                                                <th class="center">Quantité</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td class="left strong">Ecouteur casque</td>
                                                <td class="left">Electronique</td>
                                                <td class="right">100 €</td>
                                                <td class="center">1</td>
                                                <td class="right">100 €</td>
                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
                                                <td class="left strong">Ecouteur casque</td>
                                                <td class="left">Electronique</td>
                                                <td class="right">200 €</td>
                                                <td class="center">1</td>
                                                <td class="right">200 €</td>
                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
                                                <td class="left strong">Ecouteur casque</td>
                                                <td class="left">Electronique</td>
                                                <td class="right">300 €</td>
                                                <td class="center">1</td>
                                                <td class="right">300 €</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Total achat</strong></td>
                                                    <td class="right">600 €</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Réduction (20%)</strong></td>
                                                    <td class="right">400 €</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Livraison</strong></td>
                                                    <td class="right">60 €</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Total paiement</strong></td>
                                                    <td class="right"><strong>15.000 €</strong><br>
                                                    <strong>0.15050000 BTC</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
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