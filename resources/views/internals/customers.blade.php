@extends('layout')

@section('content')

    <h1> Customers</h1>

    <form action="customers" method="POST">
       
        <div class="form-group">
            <label for="name">Name</label>
                <input type="text" name="name" placeholder="Insert your name" value='{{old('name')}}' class="form-control">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
                <input type="email" name="email" placeholder="Insert your e-mail" value='{{old('email')}}' class="form-control">
        </div>

        <div>
          {{ $errors->first('name')}}
          {{ $errors->first('email')}}
        </div>

        <button type="Submit" class="btn btn-primary">Add Customer</button>
        @csrf
    </form>

<hr>

<div>
    <ol>
        @foreach ($customers as $customer)
            <li>Nome - {{ $customer->name }} <span class="text-muted"><br>Email - {{ $customer->email }}</span></li>
        @endforeach
    </ol>
</div>
    
@endsection
