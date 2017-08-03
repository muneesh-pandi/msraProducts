@component('mail::message')
# Dear {{ $data['name'] }}

@component('mail::table')


  Product Name      |         Size         |   Quantity
------- | ---------------   -   | ---------------------------:
@foreach(json_decode($data['order'], true) as $p => $value)
{{ $value['name'] }}| {{ $value['cost'] }} | {{ $value['qty'] }}
 @endforeach
@endcomponent

@component('mail::button', ['url' => ''])
Thanks for your orders.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
