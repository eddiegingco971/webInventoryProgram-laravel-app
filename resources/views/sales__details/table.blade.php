<div class="table-responsive">
    <table class="table" id="salesDetails-table">
        <thead>
            <tr>
                <th>Order Id</th>
        <th>Product Id</th>
        <th>Wholesale Stock</th>
        <th>Total Amount</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($salesDetails as $salesDetails)
            <tr>
                <td>{{ $salesDetails->order_id }}</td>
            <td>{{ $salesDetails->product_id }}</td>
            <td>{{ $salesDetails->wholesale_stock }}</td>
            <td>{{ $salesDetails->Total_amount }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['salesDetails.destroy', $salesDetails->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('salesDetails.show', [$salesDetails->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('salesDetails.edit', [$salesDetails->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
