@extends('admin.index')
@section('main')
    <fieldset>
        
        <form action="{{ route('customers.store') }}" method="post">
        @csrf
        @include('admin.customer.form')
        </form>
    </fieldset>
@endsection