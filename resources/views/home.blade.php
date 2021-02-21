@extends('layouts.layout_master')

@section('content')

  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($products as $product)
    <div class="col">
      <div class="card h-100" style="width: 18rem;">
        <img class="card-img-top" src="{{$product->image_url}}" style="width:200px;" alt="$product->title" />
        <div class="card-body">
          <h5 class="card-title">{{$product->title}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">{{$product->price}} <span>€</span></p>
          <a class="btnNew v2 smaller smallerText jsAjaxPharmaLink" href="">
            <span><span><span><span>Ajouter au panier</span></span></span></span>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>


  <script>
      function searchFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("search_input");
      filter = input.value.toUpperCase();
      table = document.getElementById("products_table");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
          } else {
              tr[i].style.display = "none";
          }
          }
      }
      }
  </script>






  @endsection

 