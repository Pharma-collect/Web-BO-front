
    <div class="card-body">
    <input type="text" id="search_input" class="form-control" onkeyup="searchFunction()" placeholder="Rechercher un produit...">
    <br><br>
        <div class="table-responsive">
            <table class="table" >
                <thead class=" text-primary">
                    <th></th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Contenance (ml)</th>
                    <th>Prix</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    
                </thead>
                <tbody id="products_table">
                    @foreach($products as $product)
                        <tr>
                            <td><img src={{$product->image_url}} style="width:50px;"></td>
                            <td id="product_name"> {{$product->title}} </td>
                            <td> {{$product->description}} </td>
                            <td> {{$product->capacity}} </td>
                            <td> {{$product->price}} € </td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>