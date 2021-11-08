<!-- Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $salesDetails->order_id }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $salesDetails->product_id }}</p>
</div>

<!-- Wholesale Stock Field -->
<div class="col-sm-12">
    {!! Form::label('wholesale_stock', 'Wholesale Stock:') !!}
    <p>{{ $salesDetails->wholesale_stock }}</p>
</div>

<!-- Total Amount Field -->
<div class="col-sm-12">
    {!! Form::label('Total_amount', 'Total Amount:') !!}
    <p>{{ $salesDetails->Total_amount }}</p>
</div>

