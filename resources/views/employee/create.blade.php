@extends('home')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('employees.store')}}">
                @csrf
                <div class="form-group">
                    <label>Full name </label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Contact number</label>
                    <input type="number" class="form-control" name="phone">
                    @if($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Social ID</label>
                    <input type="text" class="form-control" name="socialID">
                    @if($errors->has('socialID'))
                        <p class="text-danger">{{$errors->first('socialID')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address">
                    @if($errors->has('address'))
                        <p class="text-danger">{{$errors->first('address')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Day of Birth</label>
                    <input type="date" class="form-control" name="dob">
                    @if($errors->has('dob'))
                        <p class="text-danger">{{$errors->first('dob')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control " name="email" placeholder="Enter Email">
                    @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Belong to:</label>
                    <select name="group_id">
                        @foreach($groups as $group)
                            <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">ADD THIS EMPLOYEE</button>
            </form>
        </div>
    </div>

@endsection
