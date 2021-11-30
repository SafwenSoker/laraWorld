@extends('admin.index')
@section('main')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Customers List
            <a href="{{ route('customers.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Add Customer</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td scope="col">{{$customer->firstname}} {{$customer->lastname}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->email}}</td>
                        <td>
                            <a href="{{ route('customers.show', ['customer' => $customer->id]);}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            <form action="{{ url('customers/'.$customer->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                    
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </form>
                            <form action="{{ url('customers/'.$customer->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                    
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection