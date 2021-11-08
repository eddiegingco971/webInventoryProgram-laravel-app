@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sales  Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('salesDetails.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card table-striped">
            <div class="card-body p-0">
                @include('sales__details.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="content px-4 d-grid gap-2  mx-auto">
        <div class="row">
            <a class="btn btn-info col-6" href="<?= url('/products') ?>" role="button">Go back to the Products</a>
            <a class="btn btn-info col-6" href="<?= url('/home') ?>" role="button">Get back to the Homepage</a>
        </div>
    </div>

@endsection

