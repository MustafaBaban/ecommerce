<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								@guest
								<div><a href="{{route('register')}}">Register</a></div>
								<div><a href="{{route('login')}}">Sign in</a></div>
								@endguest
								@auth
								<div class="dropdown show">
									<a class="dropdown-toggle" style="height:inherit" href="{{route('login')}}" href="#" role="button" id="dropdownMenuLink" 
									aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
									Username &nbsp;
									</a>

								</div>
		
								
								@endauth

							</div>


														<li class="brand"><a href="
								<?php
								$url = url()->full() . "?";

								if(strpos($url, 'brand_id') !== false){
									$url = preg_replace('/brand\_id\=?[1-9]*/','brand_id=' . $brand->id . "&" ,$url);
								}
								else{
									$url = $url . "brand_id=" . $brand->id  . "&";
								}

							?>	
							{{$url}}">{{$brand->name}}</a></li>		
							<?php
									$attr = strpos(url()->full(), '/category\_id\=?[1-9]*/');
									if(strpos($attr, 'category_id') !== false){
										$attr = preg_replace('/category\_id\=?[1-9]*/','category_id=' . $category->id . "&" ,$attr);
									}
									else{
										$attr = $attr . "category_id=" . $category->id  . "&";
									}
								?>	
								{{"?" . $attr}}