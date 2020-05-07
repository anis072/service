@extends('frontLayout.front_design');
@section('content')

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">

                                @foreach($categorie as $cat)

                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#{{ $cat->id }}">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>

                                        {{ $cat->name }}
                                    </a>
                                </h4>
                            </div>
                            <div id="{{ $cat->id }}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach($cat->categories as $sub)

                                        <li><a href="{{ url('/products/'.$sub->name) }}">{{ $sub->name }} </a></li>

                                       @endforeach

                                    </ul>
                                </div>
                            </div>

                            @endforeach
                        </div>


                    </div><!--/category-products-->



                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">All Items</h2>
                    @foreach($serviceAll as $service)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('img/backend_images/services/small/'.$service->image)}}" alt="" />
                                        <h2>{{$service->name }}</h2>
                                        <p>{{$service->adress}}</p>
                                        <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div><!--features_items-->



            </div>
        </div>
    </div>
</section>

@endsection
