@extends('home')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('employees.update',$employee->id)}}">
                @csrf
                <label>Full name </label>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{$employee->name}}">
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
                    <input type="text" class="form-control" name="phone" value="{{$employee->phone}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Social ID</label>
                    <input type="text" class="form-control" name="socialID" value="{{$employee->socialID}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{$employee->address}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Day of Birth</label>
                    <input type="date" class="form-control" name="dob" value="{{$employee->dob}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control " name="email" value="{{$employee->email}}">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Belong to:</label>
                    <select name="group_id">
                        @foreach($groups as $group)

                            <option
                                @if($employee->group->id == $group->id)
                                selected
                                @endif
                                value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">UPDATE THIS EMPLOYEE</button>
            </form>
        </div>
    </div>

@endsection
