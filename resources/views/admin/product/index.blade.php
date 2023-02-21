@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Product List</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product List
          <a href="{{ route('products.create') }}" class="btn btn-sm btn-warning" style="float:right;">Add New</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Product Code</th>
                  <th class="wd-15p">Product Name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Category</th>
                  <th class="wd-15p">Brand</th>
                  <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($products as $key => $product)
                <tr>
                  <td>{{ $product->code }}</td>
                  <td>{{ $product->name }}</td>
                  <td><img src="{{ $product->getFirstMediaUrl('products') }}" alt="{{ $product->name }} logo" height="70em" max-width="100%"></td>
                  <td>{{ $product->category->category_name }}</td>
                  <td>{{ $product->brand->brand_name }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td id="status">
                    @if($product->status == true)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                    {{ Form::model($product, ['route' => ['products.destroy', $product], 'method' => 'DELETE', 'style' => 'display:inline-block;']) }}
                    {{ Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-sm btn-danger', 'id' => 'delete', 'title' => 'Delete', 'type' => 'submit']) }}
                    {{ Form::close() }}
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning" title="Show"><i class="fa fa-eye"></i></a>
                    
                    <div class="btn btn-sm"><input type="checkbox" data-toggle="toggle" class="toggle-status" data-id="{{ $product->id }}" data-on="Inactive <i class='fa fa-thumbs-down'></i>" data-off="<i class='fa fa-thumbs-up'></i> Active" data-onstyle="danger" data-offstyle="success" data-size="small" {{ $product->status == true ? "checked" : "" }}></div>
                    <!-- {!! Html::decode(Form::checkbox(null, null, null, ['data-toggle' => 'toggle', 'class' => 'toggle-status', 'data-id' => $product->id, 'data-on' => '<i class=\'fa fa-thumbs-down\'></i>', 'data-off' => '<i class=\'fa fa-thumbs-up\'></i>', 'data-onstyle' => 'danger', 'data-offstyle' => 'success', 'data-size' => 'small', $product->status == true ? 'checked' : '' ])) !!} -->
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection

