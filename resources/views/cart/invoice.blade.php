<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MSRA GROUP | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('/css')}}/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/dist')}}/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> MSRA Group, Norway.
          <small class="pull-right">Date:  </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>


    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>No.</th>
            <th>Product</th>
            <th>Size</th>
            <th>Qty</th>

          </tr>
          </thead>
          <tbody>
              @forelse($cart as $key => $items)

          <tr>
            <td>{{ $key+1 }} </td>
            <td> {{ $items['name'] }} </td>
            <td> {{ $items['cost']}} </td>
            <td> {{ $items['qty'] }}</td>
            {{-- <td>{{($items->options->has('size') ? $items->options->size : '')}}</td> --}}


          </tr>
        @empty
          <tr><td colspan="4" align="center" class="red">No Data Found</td></tr>
          @endforelse

          </tbody>
          <tfoot>
              <tr>
                  <td colspan="5" class="text-right">Total: {{ $total }} $</td>
              </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->

      <!-- /.col -->
      <div class="col-xs-6">


        <div class="table-responsive">
          <table class="table">

            <tr>
              <th>Total:</th>
              <td>$265.24</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
