<div class="sidebar-menu"> 
<div class="sidebar-menu-inner"> 
<header class="logo-env"> <!-- logo --> 
<div class="logo"> 
<a href="dashboard/main/index.html"> 
<img src="{{ asset('assets/backend/images/logo%402x.png') }}" width="120" alt="" /> 
</a> 
</div> <!-- logo collapse icon --> 
<div class="sidebar-collapse"> 
<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --> 
<i class="entypo-menu"></i> 
</a> 
</div> <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) --> <div class="sidebar-mobile-menu visible-xs"> 
<a href="#" class="with-animation"><!-- add class "with-animation" to support animation --> <i class="entypo-menu"></i> </a> 
</div> 
</header> 
<ul id="main-menu" class="main-menu"> 
<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"> 
<a href="{{ route('admin.dashboard') }}">
<i class="entypo-gauge"></i>
<span class="title">Dashboard</span>
</a> 
 </li> 

 
 
 </ul> 

 	<ul id="main-menu" class="main-menu"> 
		<li class="has-sub"> 
		<a href="dashboard/main/index.html">
		<i class="entypo-gauge"></i>
			<span class="title">Subcategory</span>
		</a> 
		<ul class="{{ Request::is('admin/subcategory*') ? 'visible' : '' }}"> 
		<li class="{{ Request::is('admin/subcategory') ? 'active' : '' }}"> 
			<a href="{{ route('admin.subcategory.index') }}">
				<span class="title">Subcategory list</span>
			</a> 
		</li> 
		<li> 
			<a href="{{ route('admin.subcategory.create') }}">
				<span class="title">Add Subcategory</span>
			</a> 
		</li> 
 	</ul> 
 </li> 

 
 
 </ul>

 <ul id="main-menu" class="main-menu"> 
		<li class="has-sub"> 
		<a href="dashboard/main/index.html">
		<i class="entypo-gauge"></i>
			<span class="title">category</span>
		</a> 
		<ul class="{{ Request::is('admin/category*') ? 'visible' : '' }}"> 
		<li class="{{ Request::is('admin/category') ? 'active' : '' }}"> 
			<a href="{{ route('admin.category.index') }}">
				<span class="title">category list</span>
			</a> 
		</li> 
		<li> 
			<a href="{{ route('admin.category.create') }}">
				<span class="title">Add Category</span>
			</a> 
		</li> 
 	</ul> 
 </li> 
 </ul>


 <ul id="main-menu" class="main-menu"> 
		<li class="has-sub"> 
		<a href="dashboard/main/index.html">
		<i class="entypo-gauge"></i>
			<span class="title">Product</span>
		</a> 
		<ul class="{{ Request::is('admin/product*') ? 'visible' : '' }}"> 
		<li class="{{ Request::is('admin/product') ? 'active' : '' }}"> 
			<a href="{{ route('admin.product.index') }}">
				<span class="title">Product list</span>
			</a> 
		</li> 
		<li> 
			<a href="{{ route('admin.product.create') }}">
				<span class="title">Add Pategory</span>
			</a> 
		</li> 
 	</ul> 
 </li> 
 </ul>

 </div> 
 </div> 