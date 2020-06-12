@extends('home')
@section('content')

    <div class="row justify-content-center">

        <div class="col-md-8">
            <form action="{{route('employees.search')}}" method="get">
                <input type="text" name="search" placeholder="Search by name">
                <button type="submit" class="btn btn-outline-primary">SEARCH</button>
            </form>

            <a href="{{route('employees.create')}}" class="btn badge-info"><span
                    class="glyphicon glyphicon-plus"></span>ADD NEW EMPLOYEE</a>
            <div class="card">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Group</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    @foreach($employees as $key =>$employee)
                        <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{'0000'.$employee->id}}</td>
                            <td>{{$employee->group->name}}</td>
                            <td>{{$employee->name}}</td>
                            <td>
                                @if ($employee->gender==1)
                                    Male
                                @elseif ($employee->gender==2)
                                    Female
                                @else
                                    Other
                                @endif
                            </td>
                            <td>{{$employee->phone}}</td>
                            <td>
                                <a href="{{route('employees.edit',$employee->id)}}" class="btn badge-warning">Edit</a>
                                <a href="{{route('employees.delete',$employee->id)}}" class="btn badge-danger"
                                   onclick="return confirm('Do you really want to delete this record?')">Delete</a>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            {{$employees->links()}}

        </div>
    </div>

@endsection
