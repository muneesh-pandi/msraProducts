@extends('layouts.app')

@section('title', 'Cart')
@section('meta_desc', '')
@section('meta_key', '')

@section('content')
    <div class="col-md-12">
        {!! Breadcrumbs::render('cart') !!}
    </div>
    <div class="col-md-12">
    @if ( count($cart) > 0 )
        <div class="row">
            <div class="col-md-5 col-sm-12">
                {!! Form::open(['route' => 'orders.store']) !!}
                @include ('cart.form', ['submitButtonText' => 'Send Order'])
                {!! Form::close() !!}
            </div>
            <div class="col-md-7 col-sm-12">
                <h3 style="margin-top: 0">Cart List</h3>
                <div class="table-responsive">


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

                      @forelse($cart as $c => $item)
                {{ Form::open(['route' => 'cart.store']) }}
                    <tr>
                      <td> {{ $c+0 }} </td>
                      <td> {{ $item['name'] }} </td>
                      <td> {{ $item['cost']}} </td>
                      <td> {{ $item['qty'] }}</td>
                      <td>  {!! Form::open(['method'  => 'delete', 'route' => ['cart.destroy', $item['id']]]) !!}
                            {!! Form::submit('x', ['class' => 'btn btn-primary btn-xs']) !!}
                            {!! Form::close() !!}</td>

                   </tr>
                {{ Form::close() }}
                @empty
                <tr>
                <td>Nomore Products</td>
                </tr>

                @endforelse
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="5" class="text-right">Total: {{ $total }} $</td>
                      </tr>
                  </tfoot>
                </table>
                     </div>


                {{-- @foreach ($cart as $item)
                    @include ('cart.item', ['item' => $item])
                @endforeach --}}
                {{-- <h4 class="text-right">Total: {{ $total }} $</h4> --}}
            </div>
        </div>
    @else
        <div class="alert alert-warning text-center">
            Your Cart is empty!
        </div>
    @endif
    </div>
@endsection
