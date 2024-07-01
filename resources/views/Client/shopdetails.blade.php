@extends('layouts.client')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('ACCUEIL')}}">Accueil<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="#">Détails du produit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Product Detail -->
<section class="product-detail section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12">
                <div class="product-detail-main">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                    <img class="img-responsive" src="{{ asset('/articlesImages/' . $commerce->image)}}" alt="">
                                        <!-- <img src="{{ asset('client/assets/images/user1.png') }}" alt="Test Image">w -->
                                    </div>
                                    <!-- Ajoutez d'autres images de produit si nécessaire -->
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="quickview-content">
                                <h2>{{ $commerce->nom_produit }}</h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!-- <a href="#"> (1 customer review)</a> -->
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i>{{ $commerce->categorie->produit_categorie}}</span>
                                    </div>
                                </div>
                                <h3>{{ $commerce->prix_produit }} Fcfa</h3>
                                <div class="quickview-peragraph">
                                    <p>{{ $commerce->descript_produit }}</p>
                                </div>
                                <div class="size">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Taille</h5>
                                            <select>
                                                <option selected="selected">choisir taille</option>
                                                @foreach ($tailles as $taille)
                                                    <option>{{ $taille->taille_produit }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <h5 class="title">Couleur</h5>
                                            <select>
                                                <option selected="selected">choisir couleure</option>
                                                @foreach ($couleurs as $couleur)
                                                    <option>{{ $couleur->couleur_produit }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn">Ajouter au panier</a>
                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                </div>
                                <div class="default-social">
                                    <h4 class="share-now">Partager:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comments mt-5">
                    <h3>Commentaires</h3>
                    <div id="comment-carousel" class="carousel slide" data-ride="carousel" data-interval="1500">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="comment">
                                    <div class="comment-content">
                                        <h4 class="comment-author">nom</h4>
                                        <p class="comment-text">prenom</p>
                                        <span class="comment-date">date</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-12">
                <div class="comment-section">
                    <h3>Laissez un commentaire</h3>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Commentaire:</label>
                            <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Product Detail -->

@endsection
