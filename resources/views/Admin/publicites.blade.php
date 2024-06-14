@extends('layouts.admin')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a>Listes de publicités</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
							<div class="card-header">
								<h4 class="card-title">Photos publiées</h4>
								<button type="button" class="btn btn-rounded btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
									<span class="btn-icon-start text-black"><i class="fa fa-upload color-success"></i></span>
									Importer
								</button>
								<!-- Modal start-->
								<div class="modal fade" id="exampleModalCenter">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Importer une photo</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal">
												</button>
											</div>
											<form action="{{route('CREER-PUBLICITE')}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('post')
												<div class="modal-body">
													<input type="file" name="image">
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-success">Validé <span class="btn-icon-end"><i class="fa fa-check"></i></span></button>
													<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Fermer</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							<!-- Modal end-->
							</div>
							<div class="card-body pb-1">
							@foreach ($publicite as $publicite)
								<div id="lightgallery" class="row">
									<a href="{{asset('/articlesImages/'.$publicite->image) }}" data-exthumbimage="{{asset('/articlesImages/'.$publicite->image) }}" data-src="{{asset('/articlesImages/'.$publicite->image) }}" class="col-lg-3 col-md-6 mb-4">
										<img src="{{asset('/articlesImages/'.$publicite->image) }}" alt="" style="width:100%;"/>
									</a>
								</div>
							</div>
							@endforeach
                        </div>
                        <!-- /# card -->
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection