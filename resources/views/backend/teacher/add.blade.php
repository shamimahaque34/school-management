@extends('backend.master')

@section('title')
{{isset($teacher) ?'Update':'Create'}}Teacher
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Teacher', 'child' =>'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">{{isset($teacher) ?'Update':'Create'}} Teacher</h4>
                                <a href="{{ route('teachers.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($teacher) ? route('teachers.update', $teacher->id) : route('teachers.store') }}" method="POST" enctype="multipart/form-data"  class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        @csrf
                                        @if(isset($teacher))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                     English Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your English Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="name_english" placeholder="" value="{{ $errors->any() ? old('name_english') : (isset($teacher)? $teacher->name_english :'')}}">
                                                @error('name_english')<span class="text-danger f-s-12">{{$errors->first('name_english')}}</span> @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Bangla Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Bangla Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="name_bangla" placeholder="" value="{{ $errors->any() ? old('name_bangla') : (isset($teacher)? $teacher->name_bangla :'')}}">
                                                @error('name_bangla')<span class="text-danger f-s-12">{{$errors->first('name_bangla')}}</span> @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    User Name
                                                    <i class="dripicons-question text-danger" data-bs-toggle="tooltip" data-bs-title="Set Your User Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="username" class="form-control"  data-placeholder="">
                                                    <option value="" disabled selected>select a user name</option>
                                                    <option value="aaaaa">aaaaaa</option>
                                                    <option value="" disabled selected>select a user name</option>
                                                    <option value="bbbb">bbbb</option>
                                                </select>
                                                @error('username')<span class="text-danger f-s-12">{{$errors->first('username')}}</span> @enderror
                                            </div>
                                       </div>


                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Email 
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Email" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="email" placeholder="" value="{{ $errors->any() ? old('email') : (isset($teacher)? $teacher->email :'')}}">
                                                @error('email')<span class="text-danger f-s-12">{{$errors->first('email')}}</span> @enderror
                                            </div> 
                                            
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Phone
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Phone" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="phone" placeholder="" value="{{$errors->any() ? old('phone') : (isset($teacher)? $teacher->phone :'')}}">
                                                @error('phone')<span class="text-danger f-s-12">{{$errors->first('phone')}}</span> @enderror
                                            </div>

                                            <div class="col-md-4" id="datepicker1">
                                                <label  class="form-label">
                                                    Date Of Birth
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Date Of Birth" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text" data-provide="datepicker" data-date-container="#datepicker1" class="form-control" name="dob" placeholder="" value="{{ $errors->any() ? old('dob') : (isset($teacher)? $teacher->dob :'')}}">
                                                @error('dob')<span class="text-danger f-s-12">{{$errors->first('dob')}}</span> @enderror
                                            </div>
                                        </div>

                                       <div class="form-group row mt-2">
                                            

                                        <div class="col-md-4">
                                            <label  class="form-label">
                                                Gender
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Gender" data-bs-placement="right"></i>
                                            </label>
                                            <br/>
                                            <select name="gender" class="form-control"  data-placeholder="">
                                                <option value="" disabled selected>select a gender name</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>                                            @error('gender')<span class="text-danger f-s-12">{{$errors->first('gender')}}</span> @enderror
                                        </div>

                                        <div class="col-md-4" id="datepicker2">
                                            <label  class="form-label">
                                                Joining Date
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Joining Date" data-bs-placement="right"></i>
                                            </label>
                                            <input type="text" data-provide="datepicker" data-date-container="#datepicker2" class="form-control" name="jod" placeholder="" value="{{ $errors->any() ? old('jod') : (isset($teacher)? $teacher->jod :'')}}">
                                            @error('jod')<span class="text-danger f-s-12">{{$errors->first('jod')}}</span> @enderror
                                        </div>


                                        <div class="col-md-4">
                                            <label  class="form-label">
                                               Designation Id
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Designation Id" data-bs-placement="right"></i>
                                            </label>
                                            <input type="text"  class="form-control" name="designation_id" placeholder="" value="{{ $errors->any() ? old('designation_id') : (isset($teacher)? $teacher->designation_id :'')}}">
                                            @error('designation_id')<span class="text-danger f-s-12">{{$errors->first('designation_id')}}</span> @enderror
                                        </div>

                                    </div>

                                    <div class="form-group row mt-2">
                                        
                                        <div class="col-md-4">
                                            <label  class="form-label">
                                               Religion
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your religion" data-bs-placement="right"></i>
                                            </label>
                                            <select name="religion" class="form-control"  data-placeholder="">
                                                <option value="" disabled selected>select a religion name</option>
                                                <option value="islam">Islam</option>
                                                <option value="hinduism">Hinduism</option>
                                                <option value="buddhism">Buddhism</option>
                                                <option value="chriastianity">Christianity</option>
                                                <option value="other">Other</option>
                                            </select>                                            @error('religion')<span class="text-danger f-s-12">{{$errors->first('religion')}}</span> @enderror
                                        </div>

                                      

                                        <div class="col-md-4">
                                            <label  class="form-label">
                                                Bank Account Number
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Bank Account No" data-bs-placement="right"></i>
                                            </label>
                                            <input type="text"  class="form-control" name="bank_account_no" placeholder="" value="{{ $errors->any() ? old('bank_account_no') : (isset($teacher)? $teacher->bank_account_no :'')}}">
                                            @error('bank_account_no')<span class="text-danger f-s-12">{{$errors->first('bank_account_no')}}</span> @enderror
                                        </div>



                                       
                                    </div>


                                    <div class="form-group row mt-2">
                                        <div class="col-md-6">
                                            <label class="form-label">
                                                Image
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Image" data-bs-placement="right"></i>
                                            </label>
                                            <br>
                                            <input type="file"  class="form-control-file" name="image" placeholder=""/>
                                            
                                            @if(isset($teacher))
                                                <img src="{{asset($teacher->image)}}" style="height: 100px;width: 100px" alt="">
                                            @endif
                                        </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">
                                                    Address
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Address" data-bs-placement="right"></i>
                                                </label>
                                                <textarea name="address" id="editor" cols="20" rows="5" class="form-control" value="">{!!isset($teacher)? $teacher->address:''!!}</textarea>
                                                    @error('address')<span class="text-danger f-s-12">{{$errors->first('address')}}</span> @enderror
                                                </div>
                                              </div>
                                       
                                        <div class=" form-group row mt-3">

                                            <div class="col-md-4">
                                                <label for="" class="form-label">
                                                   Subject
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Subject" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="subject" placeholder="" value="{{$errors->any() ? old('subject') : (isset($teacher)? $teacher->subject :'')}}">
                                                @error('subject')<span class="text-danger f-s-12">{{$errors->first('subject')}}</span> @enderror
                                            </div>

                                           

                                           
                                        </div>
                                        <div class=" form-group row mt-3">
                                           

                                       

                                        </div>
                                            

                                    

                                            

                                    <div class=" form-group row mt-3">
                                            <label for="" class="col-md-4">  
                                            </label>
                                            <div class="col-md-4">
                                                <input type="submit" value="{{isset($teacher)?'Update Teacher':'Add Teacher'}}" class="btn btn-success">
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <script>
        CKEDITOR.replace('editor');
    </script>
    @endsection

@endsection
