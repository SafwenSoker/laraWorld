@extends('admin.index')
@section('main')
    <fieldset>
        
        <form action="{{ route('customers.update', ['customer' => $customer->id]) }}" method="post">
        @csrf
        @method('PUT')
        @include('admin.customer.form')
        </form>
    </fieldset>
@endsection