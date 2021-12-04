@extends('admin.index')
@section('main')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@if (session('storeCustomer'))
    <div class="alert alert-dismissible alert-success fade show">
        {{session('storeCustomer')}}
        <button class="close" type="button" data-dismiss="alert" aria-lbel="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
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
  <a href="#" 
  onClick="event.preventDefault();
  document.querySelector('#delete-customer-form').submit()" class="btn btn-danger"> <i class="fas fa-user-slash"></i></a>
  x<form action="{{route('customers.destroy', ['customer' => $customer->id])}}" method="post"  id="delete-customer-form">@csrf @method('DELETE') </form>
@endsection