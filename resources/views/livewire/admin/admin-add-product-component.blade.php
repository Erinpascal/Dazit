<div>
<div class ="container" style ="padding:30px 0;">
<div class="row">
<div class="col-md-12">
<div class="pane panel-default">
<div class="panel-heading">
<div class="row">
<div class="col-md-6">
Add New Category
</div>
<div class="col-md-6">
<a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
</div>
</div>
</div>
<div class="panel-body">
@if(Session::has('success_message'))
<div class="alert alert-success">
<strong>Success</strong> {{Session::get('success_message')}}
</div>
        @endif
<form class="form-horizontal" wire:submit.prevent="storeProduct" enctype="multipart/form-data">

<div class="form-group">
<label class="col-md-4 control-label">Product Name<label>
<div class="form-group">
<input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Product Slug<label>
<div class="form-group">
<input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Product short description<label>
<div class="form-group">
<input type="text" placeholder="Product short_description" class="form-control input-md" wire:model="short_description"/>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Product description<label>
<div class="form-group">
<input type="text" placeholder="Product description" class="form-control input-md" wire:model="description"/>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label">Product regular_price<label>
<div class="form-group">
<input type="text" placeholder="Product regular_price" class="form-control input-md" wire:model="regular_price"/>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Product sale_price<label>
<div class="form-group">
<input type="text" placeholder="Product sale_price" class="form-control input-md" wire:model="sale_price"/>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Product SKU<label>
<div class="form-group">
<input type="text" placeholder="Product SKU" class="form-control input-md" wire:model="SKU"/>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Stock<label>
<div class="col-md-4">
<select class="form-group" wire:model="stock_status">
<option value="instock">Instock <option>
<option value="outofstock">out of stock <option>
</select>

</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Features<label>
<div class="col-md-4">
<select class="form-group" wire:model="featured">
<option value="0">No<option>
<option value="1">Yes<option>
</select>

</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Category<label>
<div class="col-md-4">
<select class="form-group" wire:model="category_id">
<option value="">Select Option<option>
@foreach($category as $category)
<option value="{{$category->id}}">{{$category->name}}<option>
@endforeach
</select>

</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Product quantity<label>
<div class="form-group">
<input type="text" placeholder="Product quantity" class="form-control input-md" wire:model="quantity"/>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Product image<label>
<div class="form-group">
<input type="file" class="input-file" wire:model="image"/>
@if($image)
<img src="{{$image->temporaryUrl()}}" width="120"/>
@endif
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label"><label>
<div class="form-group">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</div>


</form>
</div>
</div>
</div>
</div>
</div>
</div>
