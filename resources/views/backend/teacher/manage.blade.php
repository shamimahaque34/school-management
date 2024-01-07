@extends('backend.master')

@section('title')
   Manage Teachers
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Teacher', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Teacher</h4>
                    <a href="{{ route('teachers.create') }}" class="btn btn-success float-end">
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Designation</th>
                                <th>Date of birth</th>
                                <th>Gender</th>
                                <th>Religion</th>
                                <th>Joining Date</th>
                                <th>Photo</th>
                                <th>Address</th>
                                <th>Username</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->username }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>{{ $teacher->designation_id }}</td>
                                    <td>{{ $teacher->dob }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>{{ $teacher->religion }}</td>
                                    <td>{{ $teacher->jod }}</td>
                                    <td>
                                        <img src="{{asset($teacher->image) }}" style="height: 100px;width: 100px" alt="">
                                    </td>
                                    <td>{!! $teacher->address !!}</td>
                                    <td>{{ $teacher->username}}</td>
                                    <td>{{ $teacher->subject}}</td>
                                     <td>
                                        <div class=d-flex>
                                        <a href="{{ route('teachers.edit',$teacher->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Class'); ">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm ms-2">
                                                <i class="dripicons-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

