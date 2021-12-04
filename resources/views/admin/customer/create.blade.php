@extends('admin.index')
@section('main')
    <fieldset>
        
        <form action="{{ route('customers.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="Firstname goes here" value="{{old('firstname')}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Lastanme goes here" value="{{old('lastname')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone number goes here" value="{{old('phone')}}">
                </div>
            </div>
            <div class="col"> 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com" value="{{old('email')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address goes here" value="{{old('address')}}">
            
        </div>
        <div class="row">
            <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
            <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
        </div>
        </form>
    </fieldset>
@endsection