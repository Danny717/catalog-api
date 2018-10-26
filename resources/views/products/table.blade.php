<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Category Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Active</th>
        <th>Count</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->category_id !!}</td>
            <td>{!! $product->title !!}</td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->price !!}</td>
            <td>{!! $product->active !!}</td>
            <td>{!! $product->count !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>