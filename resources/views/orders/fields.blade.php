<!-- Order Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_name', 'Order Name:') !!}
    {!! Form::text('order_name', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity_order', 'Quantity Order:') !!}
    {!! Form::number('quantity_order', null, ['class' => 'form-control']) !!}
</div>