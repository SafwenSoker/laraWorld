@extends('admin.index')
@section('main')
<div class="card-header">
    <i class="fas fa-user-tag"></i>
    Customer Detail
</div>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">{{$customer->firstname}} {{$customer->lastname}}</h1>
      <p class="col-md-8 fs-4"><h3>Address</h3>{{$customer->address}}</p>
      <p class="col-md-8 fs-4"><h3>Phone</h3>{{$customer->phone}}</p>
      <p class="col-md-8 fs-4"><h3>Email</h3>{{$customer->email}}</p>
      <p class="col-md-8 fs-4"><h3>Created at</h3>{{$customer->created_at}}</p>
      <p class="col-md-8 fs-4"><h3>Updated at</h3>{{$customer->updated_at}}</p>
      <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
  </div>

{{$customer}}
@endsection