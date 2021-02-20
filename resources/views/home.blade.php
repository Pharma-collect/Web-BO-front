@extends('layouts.layout_master')

@section('content')

@foreach($products as $product)

         <div class="buttonBookmark">
            <a href="" class="link jsAjaxPharmaLinkIfConnected bookmark-product-21166"><span>Mes Favoris</span></a>
         </div>
             
            <a href="https://www.pharmarket.com/ppw/masque-medical-3-plis-50-masques-p21166"
               class="visual productThumb jsGoToProductPage">
                    <img src="{{$product->image_url}}" style="width:200px;"
                         alt="$product->title" />
                            </a>

			<div class="infos">

                <div class="name">
                    <a class="productLink jsGoToProductPage" href="https://www.pharmarket.com/ppw/masque-medical-3-plis-50-masques-p21166">
                        <h4>
                        </h4>           <h5>  <span>{{$product->title}}</span>
                        </h5>                    </a>
				</div>

                <div class="compo">Protections respiratoires à usage unique</div>
                
				<div class="action">
                    <span class="price promo">
                    <span class="new">{{$product->price}} <span>€</span></span>
                     <span class="basket">
                     <a class="jsAjaxPharmaLink" href="/cart/add/id/21166">
                     <img src="/assets/skin/icon-basket-circle.png" alt="icône d'ajout au panier ronde"/>
                     </a>
                      </span>
					</span>

                <a class="btnNew v2 smaller smallerText jsAjaxPharmaLink" href="">
                    <span><span><span><span>Ajouter au panier</span></span></span></span>
                 </a>
                	</div>
        
                    @endforeach	
@stop

<!--
@foreach($products as $product)
     <tr>
        <td><img src={{$product->image_url}} style="width:200px;"></td>
        <td> {{$product->title}} </td>
        <td> {{$product->description}} </td>
        <td> {{$product->capacity}} </td>
        <td> {{$product->price}} € </td>

     </tr>
    @endforeach
