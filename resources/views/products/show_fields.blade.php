<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $products->product_name }}</p>
</div>

<!-- Brandname Field -->
<div class="col-sm-12">
    {!! Form::label('brandname', 'Brandname:') !!}
    <p>{{ $products->brandname }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $products->description }}</p>
</div>

<!-- Pricing Field -->
<div class="col-sm-12">
    {!! Form::label('pricing', 'Pricing:') !!}
    <p>{{ $products->pricing }}</p>
</div>

<!-- Discount Field -->
<div class="col-sm-12">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $products->discount }}</p>
</div>

<!-- Stock Field -->
<div class="col-sm-12">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $products->stock }}</p>
</div>

