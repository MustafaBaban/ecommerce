@extends('layouts.app')

@section('custom_css')

<link rel="stylesheet" type="text/css" href="{{ url('/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/styles/shop_responsive.css') }}">
<style>
.shop{
    padding-top:20px;
}
.form-check-label{
	color:black;
}

}
</style>
@stop

@section('content')



<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3" style="max-width: 20%;">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">

							@foreach ($categories as $category)				
							<li class=""><a name="category_id" onclick="link(this)" value="{{$category->id}}" href="{{url()->full()}}">{{strtoupper($category->name)}}</a></li>		
							@endforeach

							</ul>
						</div>
						<script type="text/javascript">
						function addMark(a){
						var lastChar = a[a.length -1];

						if(lastChar == "?" || lastChar == "&"){
							a = a;
						}
						
						else{
							a = a + "?";
						}

						return a;
						}

						function link(a){
							// let a = event.target; Better way using Using data attributes
							var id = a.getAttribute("value");
							var name = a.getAttribute("name");
							var link =  window.location.href;
							link = addMark(link);
							var regex =name+'=[0-9]*';
							var RegExx = RegExp(regex);

							if(link.includes(name)){
							link = link.replace(RegExx, name + "=" + id);
							}

							else{
							link = link + name + "=" + id + "&";
							}

							a.setAttribute('href', link);

						}

							</script>

						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div class="form-check">
									@if($price == 200)
									<i class="fas fa-circle">&nbsp</i>
									@else
									<i class="fas fa-dot-circle">&nbsp</i>
									@endif
										<a class="form-check-label" style="padding-left:0px;" name="price" onclick="link(this)" 
										value="200" href="{{url()->full()}}" >
										  Under 200$
										</a>
									  </div>
								<div class="form-check">
										@if($price == 300)
										<i class="fas fa-circle">&nbsp</i>
										@else
										<i class="fas fa-dot-circle">&nbsp</i>
										@endif
										<a class="form-check-label" style="padding-left:0px;" name="price" onclick="link(this)" 
										value="300" href="{{url()->full()}}" >
										  Under 300$
										</a>
									  </div>
								<div class="form-check">
										@if($price == 400)
										<i class="fas fa-circle">&nbsp</i>
										@else
										<i class="fas fa-dot-circle">&nbsp</i>
										@endif
										<a class="form-check-label" style="padding-left:0px;" name="price" onclick="link(this)" 
										value="400" href="{{url()->full()}}" >
										  Under 400$
										</a>
									  </div>
								<div class="form-check">
										@if($price == 800)
										<i class="fas fa-circle">&nbsp</i>
										@else
										<i class="fas fa-dot-circle">&nbsp</i>
										@endif
										<a class="form-check-label" style="padding-left:0px;" name="price" onclick="link(this)" 
										value="800" href="{{url()->full()}}" >
										  Under 800$
										</a>
									  </div>
								<div class="form-check">
										@if($price == 1200)
										<i class="fas fa-circle">&nbsp</i>
										@else
										<i class="fas fa-dot-circle">&nbsp</i>
										@endif
										<a class="form-check-label" style="padding-left:0px;" name="price" onclick="link(this)" 
										value="1200" href="{{url()->full()}}" >
										  Under 1200$
										</a>
									  </div>
								<div class="form-check">
										@if($price == 10000)
										<i class="fas fa-circle">&nbsp</i>
										@else
										<i class="fas fa-dot-circle">&nbsp</i>
										@endif
										<a class="form-check-label" style="padding-left:0px;" name="price" onclick="link(this)" 
										value="10000" href="{{url()->full()}}" >
										 All prices
										</a>
									  </div>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a name="color" onclick="link(this)" 
									value="1" href="{{url()->full()}}" style="background: #b19c83;"></a></li>
								<li class="color"><a name="color" onclick="link(this)" 
										value="2" href="{{url()->full()}}" style="background: #000000;"></a></li>
								<li class="color"><a name="color" onclick="link(this)" 
										value="3" href="{{url()->full()}}" style="background: #999999;"></a></li>
								<li class="color"><a name="color" onclick="link(this)" 
										value="4" href="{{url()->full()}}" style="background: #0e8ce4;"></a></li>
								<li class="color"><a name="color" onclick="link(this)" 
										value="5" href="{{url()->full()}}" style="background: #df3b3b;"></a></li>
								<li class="color"><a name="color" onclick="link(this)" 
										value="6" href="{{url()->full()}}" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>

						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								
								@foreach ($brands as $brand)	

								<li class="brand"><a name="brand_id" onclick="link(this)" value="{{$brand->id}}" href="{{url()->full()}}">{{strtoupper($brand->name)}}</a></li>		
								@endforeach
							
							</ul>
						</div>
					</div>

				</div>
				
				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
						<div class="shop_product_count"><span>{{ count($products) }}</span>&nbsp products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@foreach ($products as $product)
						<a href="/product/{{$product->slug}}" onclick="like()">		
							<div class="product_item is_new">
								<div class="product_border"></div>
							<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('images/' . $product->image1)}}" alt=""></div>
								<div class="product_content">
									<div class="product_price">${{$product->price}}</div>
									<div class="product_name"><div><a href="{{route('product',$product->slug)}}" tabindex="0">{{$product->name}} </a> </div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">{{$product->type}}</li>
								</ul>
							</div>
						</a>
							@endforeach
						</div>

						<!-- Shop Page Navigation -->
						
					{{-- {{$products->links()}} --}}

					</div>

				</div>
			</div>
		</div>
	</div>
	
	</div>
@stop


@section('custom_js') 
<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ url('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ url('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ url('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ url('plugins/easing/easing.js') }}"></script>
<script src="{{ url('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
<script src="{{ url('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ url('js/shop_custom.js') }}"></script>
@stop