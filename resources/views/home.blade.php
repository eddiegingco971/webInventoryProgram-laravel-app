@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-active">
    <div class="container-fluid">
        <a class="navbar-brand"><h2>Inventory System</h2></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= url('/orders')?>">ORDERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= url('/products')?>">PRODUCTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= url('/salesDetails')?>">SALES DETAILS</a>
              </li>
            </ul>
          </div>
    </div>
</nav>

<div class="card container-fluid">
    <div class="row">
        <div class="col-md-12">   
            <table class="table table-bordered table-striped">
                <thead>
                <tr class="bg-primary">
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Quantity Sales</th>
                    <th>Total Amount</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($salesdetails as $item)
                        <tr>     
                            <td><?= $item->order_id?> </td>
                            <td><?= $item->product_id?> </td>
                            <td><?= $item->wholesale_stock?> </td>
                            <td><?= $item->Total_amount?> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
