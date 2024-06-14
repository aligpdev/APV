@extends('layouts.admin')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a>Commandes reçus</a></li>
					</ol>
                </div>
				
				<!-- listes commandes début -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Acheteurs</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display table-bordered verticle-middle table-responsive-sm" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Noms & prénoms</th>
                                                <th>E-mails</th>
                                                <th>Téléphones</th>
                                                <th>Dates</th>
                                                <th>Adresses</th>
                                                <th>Prix</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Joe Biden</td>
                                                <td>mail@gmail.com</td>
                                                <td>(+228) 90112233</td>
                                                <td>01/01/2024</td>
                                                <td>Lomé (Togo)</td>
                                                <td><span class="badge badge-success">100 €</span></td>
												<td><a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Joe Biden</td>
                                                <td>mail@gmail.com</td>
                                                <td>(+228) 90112233</td>
                                                <td>01/01/2024</td>
                                                <td>Lomé (Togo)</td>
                                                <td><span class="badge badge-success">100 €</span></td>
												<td><a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Joe Biden</td>
                                                <td>mail@gmail.com</td>
                                                <td>(+228) 90112233</td>
                                                <td>01/01/2024</td>
                                                <td>Lomé (Togo)</td>
                                                <td><span class="badge badge-success">100 €</span></td>
												<td><a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        </tbody>
										<tfoot>
                                            <tr>
                                                <th>Noms & prénoms</th>
                                                <th>E-mails</th>
                                                <th>Téléphones</th>
                                                <th>Dates</th>
                                                <th>Adresses</th>
                                                <th>Prix</th>
												<th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- listes commandes fin -->
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection