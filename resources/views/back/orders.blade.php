@extends('voyager::master')
@section('content')


<div class="col-md-12">
    <div class="panel panel-bordered">
        <div class="panel-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>user</th>
          <th>address</th>
          <th>phone</th>
          <th>email</th>
          <th>service</th>
          <th>menu</th>
          <th>date</th>
          <th>Done</th>
          <th>status</th>

        </tr>
      </thead>
      <tbody>
          @foreach($orders as $order)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->user_name}}</td>
          <td>{{$order->user_address}}</td>
          <td>{{$order->user_phone}}</td>
          <td>{{$order->user_email}}</td>
          <td>@if($order->service == 1) خدمة @elseif($order->service == 2) قصور @elseif($order->service == 3) قاعات احتفالات @elseif($order->service == 4) فنادق @elseif($order->service == 5) استراحات  @endif</td>
          <td>{{$order->menu_title}}</td>
          <td>{{$order->created_at}}</td>
        <td>@if($order->order == 0) <span class="label label-danger">Waiting</span> @else <span class="label label-primary">done</span> @endif</td>
          <td><a class="btn btn-success" href="/order/done/{{$order->id}}">Done</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>
</div>

@endsection

