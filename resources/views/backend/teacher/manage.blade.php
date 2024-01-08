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
                                    <td>{{ $teacher->name_english }}</td>
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
                                     {{-- <td>
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
                                    </td> --}}

                                    <td>
                                        <div class=d-flex>
                                        <a href="{{ route('teachers.edit',$teacher->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post" style="display: inline-block" >
                                            @csrf
                                            {{-- @method('delete') --}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit"  class="btn btn-danger show-alert-delete-box btn-sm ms-2">
                                                <i class="dripicons-trash" ></i>
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
    @section('script')


        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

        {{-- <script>
            function confirmation(ev){
                ev.preventDefault();
                
                // var urlToRedirect = ev.currentTarget.getAttribute('action');
                var form =  $(this).closest("form");
                var name = $(this).data("name");

                // console.log(urlToRedirect);
                swal({
                    title : "are you sure to delete this",

                    text : "you will not be able to revert this delete",

                    icon : "warning",

                    type: "warning",
                    buttons: ["Cancel","Yes!"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })

                // .then((willCancel) =>{
                // if(willCancel){

                //     window.location.action = urlToRedirect;

                //     console.log(urlToRedirect);

                // }

                .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }

            });
            }
            
        </script> --}}

        
<script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
    </script>
    @endsection
@endsection

