@extends('template.front.layout')
@section('content')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white align-items-center">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <div class="col-6 offset-md-3">
                        <form action="" method="GET" class="d-flex">    
                            <input class="form-control me-2" type="search" name="search" placeholder="Cari Produk" aria-label="Search">
                            <button class="btn btn-outline-warning me-2" type="submit"><i class="fas fa-search"></i> Cari</button>
                            <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-solid fa-filter"></i> Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">

            @if (\Session::has('danger'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('danger') !!}</li>
                </ul>
            </div>
            @elseif (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @if(count($products) > 0)
                    @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset($product->product_photo)}}" alt="{{$product->product_name}}" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="{{url('product/'.$product->id)}}" style="text-decoration:none;color:black;">
                                        <h5 class="fw-bolder">{{$product->product_name}}</h5>
                                    </a>

                                    <!-- Product price-->
                                    {{idrFormat($product->product_price)}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('cart/add?products_id='.$product->id)}}">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>

                @else

                <div class="text-center text-warning">
                    <h4>Produk Tidak Ditemukan</h4>
                </div>
                
            @endif
            </div>
        </section>

          
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Filter Harga</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
            <div class="modal-body">
                <label for="" class="form-label">Harga Kurang Dari :</label>
                <input type="number" name="lt" class="form-control">
                
                <label for="" class="form-label">Harga Lebih Dari :</label>
                <input type="number" name="ht" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="submti" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

