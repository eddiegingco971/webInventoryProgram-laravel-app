<!-- Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Order Id:') !!}
    {!! Form::number('order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Wholesale Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wholesale_stock', 'Wholesale Stock:') !!}
    {!! Form::number('wholesale_stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Total_amount', 'Total Amount:') !!}
    {!! Form::number('Total_amount', null, ['class' => 'form-control']) !!}
</div>