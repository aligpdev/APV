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
                                        <img class="img-responsive" src="{{ asset('/articlesImages/' . $commerce->image) }}" alt="">
                                    </div>
                                    <!-- Add more product images if needed -->
                                </div>
                            </div>
                            <!-- End Product Slider -->
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Detail -->

<!-- Start Blog Single -->
<section class="blog-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="blog-single-main">
                    <div class="row">
                        <div class="col-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img class="img-responsive" src="{{ asset('/articlesImages/' . $commerce->image) }}" alt="">
                                    </div>
                                    <!-- Add more product images if needed -->
                                </div>
                            </div>
                            <!-- End Product Slider -->
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="main-sidebar">
                    <div class="product-detail-main">
                        <div class="row">
                            <div class="col-lg-12 col-12">
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
                                            <span><i class="fa fa-check-circle-o"></i>{{ $commerce->categorie->produit_categorie }}</span>
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
                                                    <option selected="selected">choisir couleur</option>
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
                                        <!-- End Input Order -->
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
            </div>
            <div class="col-12">
                <div class="comments">
                    <h3 class="comment-title">Commentaires</h3>
                    <!-- Single Comment -->
                    <div class="single-comment">
                        <img src="https://via.placeholder.com/80x80" alt="#">
                        <div class="content">
                            <h4>Kpatcha damien <span>01 janvier 2024</span></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid perspiciatis dicta, nam laboriosam atque saepe consequun.</p>
                        </div>
                    </div>
                    <!-- End Single Comment -->
                    <!-- Single Comment -->
                    <div class="single-comment left">
                        <img src="https://via.placeholder.com/80x80" alt="#">
                        <div class="content">
                        <h4>ESSO david <span>01 janvier 2024</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid perspiciatis dicta, nam laboriosam atque saepe consequun.</p>
                        </div>
                    </div>
                    <!-- End Single Comment -->
                    <!-- Single Comment -->
                    <div class="single-comment">
                        <img src="https://via.placeholder.com/80x80" alt="#">
                        <div class="content">
                        <h4>KOMLA didier <span>01 janvier 2024</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid perspiciatis dicta, nam laboriosam atque saepe consequun.</p>
                        </div>
                    </div>
                    <!-- End Single Comment -->
                </div>                                    
            </div>                                            
            <div class="col-12">            
                <div class="reply">
                    <div class="reply-head">
                        <h2 class="reply-title">Rédiger un commentaire</h2>
                        <!-- Comment Form -->
                        <form class="form" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Votre nom<span>*</span></label>
                                        <input type="text" name="name" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Votre Email<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Votre Message<span>*</span></label>
                                        <textarea name="message" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn">Publier</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Comment Form -->
                    </div>
                </div>            
            </div>    
        </div>
    </div>
</section>
<!-- End Blog Single -->

@endsection
