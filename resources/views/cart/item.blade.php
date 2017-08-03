<div class="panel panel-body">


    <div class="row">

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

            @forelse($cart as $p => $item)
      {{ Form::open(['route' => 'cart.store']) }}
          <tr>
            <td> {{ $p+1 }} </td>
            <td> {{ $item['name'] }} </td>
            <td> {{ $item['cost']}} </td>
            <td> {{ $item['qty'] }}</td>
            <td>  {!! Form::open(['method'  => 'delete', 'route' => ['cart.destroy', $item['id']]]) !!}
                  {!! Form::submit('x', ['class' => 'btn btn-danger btn-xs']) !!}
                  {!! Form::close() !!}</td>

         </tr>
      {{ Form::close() }}
      @empty
      <tr>
      <td>Nomore Products</td>
      </tr>

      @endforelse




        </tbody>
      </table>
           </div>

        {{-- <div class="col-md-1">
            {!! Form::open(['method'  => 'delete', 'route' => ['cart.destroy', $item['id']]]) !!}
            {!! Form::submit('x', ['class' => 'btn btn-danger btn-xs']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-2">
            <a href="/{{ $item['id'] }}-{{ $item['slug'] }}" title="{{ $item['name'] }}">
                {{ Html::image($item['image'], $item['name'], ['class'=>'img-responsive']) }}
            </a>
        </div>
        <div class="col-md-4">
            <b>{!! link_to_route('products.show', $item['name'], [$item['id'], $item['slug']]) !!}</b>
        </div>
        <div class="col-md-2">
            {{ $item['qty'] }}
        </div>
        <div class="col-md-3 text-center">
            {{ $item['cost'] }} $
        </div> --}}
    </div>
</div>
<div class="clearfix"></div>
