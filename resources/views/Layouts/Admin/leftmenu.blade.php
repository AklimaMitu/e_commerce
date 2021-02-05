

<div class="left_menu"> 
		<ul>
			<li><input type="button" value="Dashboard" onclick="showdash()"/></li>
			<li><input type="button" name="product" value="Products" onclick="showtpro()"/>
				<ul>
					<li><a href="{{route('Product.addProudct')}}">Add Product</a></li>
					<li><a href="{{route('Product.delete')}}">Delete Product</a></li>
					<li><a href="{{route('Product.update')}}">Update Proudct</a></li>
				</ul>
			</li>
			<li><input type="button" value="Category"/>
				<ul>
					<li><a href="{{route('Category.addCategory')}}">Add Category</a></li>
					<li><a href="{{route('Category.delete')}}">Delete Category</a></li>
					<li><a href="{{route('Category.update')}}">Update Category</a></li>
				</ul>
			</li>
			<li><input type="button" value="Orders"/>
				<ul>
					<li><a href="#">Pending Orders</a></li>
					<li><a href="#">Delivered Orders</a></li>
				</ul>
			</li>
			<li><input type="button" value="Users"/></li>
			<li><a href="{{route('logout')}}" style="text-decoration: none;"><input type="button" value="Logout"/></a></li>
		</ul>
	</div>

	@yield('content')


