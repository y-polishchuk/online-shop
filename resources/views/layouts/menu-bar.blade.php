<nav class="main_nav">
	<div class="container">
		<div class="row">
			<div class="col">
				
				<div class="main_nav_content d-flex flex-row">

					<!-- Categories Menu -->

					<div class="cat_menu_container">
						<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
							<div class="cat_burger"><span></span><span></span><span></span></div>
							<div class="cat_menu_text">{{ __('categories') }}</div>
						</div>

						<ul class="cat_menu">
							@forelse($categories as $category)
							<li class="hassubs">
								@if(count($category->subcategories))
								<a href="{{ route('category.products', $category) }}">{{ $category->category_name }}<i class="fas fa-chevron-right"></i></a>
								<ul>
									@foreach($category->subcategories as $subcategory)
									<li><a href="{{ route('subcategory.products', $subcategory) }}">{{$subcategory->subcategory_name}}</a></li>
									@endforeach
								</ul>
								@else
								<a href="{{ route('category.products', $category) }}">{{ $category->category_name }}</a>
								@endif
							</li>
							@empty
							<a href="#">No Categories Found.</a>
							@endforelse
						</ul>
					</div>

					<!-- Main Nav Menu -->

					<div class="main_nav_menu ms-auto">
						<ul class="standard_dropdown main_nav_dropdown">
							<li><a href="/">{{ __('Home') }}<i class="fas fa-chevron-down"></i></a></li>
							<li class="hassubs">
								<a href="#">{{ __('Super Deals') }}<i class="fas fa-chevron-down"></i></a>
								<ul>
									<li>
										<a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</li>
							<li class="hassubs">
								<a href="#">{{ __('Featured Brands') }}<i class="fas fa-chevron-down"></i></a>
								<ul>
									<li>
										<a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</li>
							<li class="hassubs">
								<a href="#">{{ __('Pages') }}<i class="fas fa-chevron-down"></i></a>
								<ul>
									<li>
										<a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">{{ __('Menu Item') }}<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</li>
							<li><a href="{{ route('blog.post') }}">{{ __('Blog') }}<i class="fas fa-chevron-down"></i></a></li>
							<li><a href="{{ route('contact.page') }}">{{ __('Contact') }}<i class="fas fa-chevron-down"></i></a></li>
						</ul>
					</div>

					<!-- Menu Trigger -->

					<div class="menu_trigger_container ms-auto">
						<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
							<div class="menu_burger">
								<div class="menu_trigger_text">{{ __('menu') }}</div>
								<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</nav>

<!-- Menu -->

<div class="page_menu">
	<div class="container mt-0">
		<div class="row">
			<div class="col">
				
				<div class="page_menu_content">
					
					<div class="page_menu_search">
						<form action="#">
							<input type="search" required="required" class="page_menu_search_input" placeholder="{{ __('Search for products...') }}">
						</form>
					</div>
					<ul class="page_menu_nav">
						<li class="page_menu_item">
							<a href="#">{{ __('Home') }}<i class="fa fa-angle-down"></i></a>
						</li>
						<li class="page_menu_item has-children">
							<a href="#">{{ __('Super Deals') }}<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="#">{{ __('Super Deals') }}<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item has-children">
									<a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						
						<li class="page_menu_item has-children">
							<a href="#">{{ __('Trending Styles') }}<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="#">{{ __('Trending Styles') }}<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
								<li><a href="#">{{ __('Menu Item') }}<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item"><a href="blog.html">{{ __('blog') }}<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item"><a href="contact.html">{{ __('contact') }}<i class="fa fa-angle-down"></i></a></li>
					</ul>
					
					<div class="menu_contact">
						<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('frontend/images/phone_white.png') }}" alt=""></div>+38 068 005 3570</div>
						<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('frontend/images/mail_white.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

