<!-- Order Name Field -->
<div class="col-sm-12">
    {!! Form::label('order_name', 'Order Name:') !!}
    <p>{{ $orders->order_name }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $orders->address }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $orders->product_id }}</p>
</div>

<!-- Quantity Order Field -->
<div class="col-sm-12">
    {!! Form::label('quantity_order', 'Quantity Order:') !!}
    <p>{{ $orders->quantity_order }}</p>
</div>

