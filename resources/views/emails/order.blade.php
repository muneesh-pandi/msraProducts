{{-- Dear {{ $cart_data->name }}, thanks! <br/></br> --}}
@extends('layouts.app')


@section('content')
Your order: <br/>



<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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

   {{-- @forelse($data as $p => $item) --}}
@forelse(json_decode($order, true) as $p => $value)
    <tr>
      <td> {{ $p+1 }} </td>
      <td> {{ $value['name'] }} </td>
      <td> {{ $value['cost']}} </td>
      <td> {{ $value['qty'] }}</td>

   </tr>

@empty
<tr>
<td>Nomore Products</td>
</tr>

@endforelse

  </tbody>
  <tfoot>
      <tr>
        <td colspan="3"> {{ $total }}</td>

      </tr>

  </tfoot>
</table>




Regard, LaShop
@endsection
