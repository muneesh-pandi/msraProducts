@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        {!! Breadcrumbs::render($breadcrumbs) !!}
    </div>

    <div class="col-md-12">
        {{-- <h3 style="margin-top: 0;">Bestsellers</h3> --}}


    </div>

    <div class="row col-md-12">
  <div class="panel-body">


  <div class="table-responsive">


    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Products</th>
          <th>Size</th>
          <th>quantity</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

          @forelse($products as $p => $product)

        <tr>
          {{ Form::open(['route' => 'cart.store']) }}
          <td> {{ $p+1 }} </td>
          <td> {{ $product->name }} </td>
          <td> {{ $product->cost }} </td>
          <td> {{ Form::text('qty', 1, ['class' => 'form-control text-center']) }}</td>
          <td> {{ Form::submit('Add to Cart', ['class' => 'btn btn-success btn-block']) }}</td>
               {{ Form::hidden('product_id', $product->id) }}
   {{ Form::close() }}
       </tr>

@empty
<tr>
    <td>Nomore Products</td>
</tr>

@endforelse




      </tbody>
    </table>
         </div>
</div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
  });
</script>


    {{-- @foreach ($products as $product)
        @include('partials.short_products')
    @endforeach --}}

    <div class="clearfix"></div>

    <div class="col-md-12">
        {{-- {!! Config::get('settings.start_text') !!} --}}
    </div>

@endsection
