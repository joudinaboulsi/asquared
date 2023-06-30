@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Settings</h5>
                <div class="card-body">
                    <form action="{{route('settings.update',$settings->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">First Phone</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="phone1"
                                    value="{{ $settings->phone1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                          <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Link Phone 1</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="link_phone1"
                                    value="{{ $settings->link_phone1 }}" aria-describedby="defaultFormControlHelp" />
                            
                            </div>
                           
                        </div>

                        <div class="row">
                          <div class="col-6 mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Second Phone</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="phone2" value="{{ $settings->phone2 }}"
                                aria-describedby="defaultFormControlHelp" />
                        
                        </div>
                            <div class="col-6">
                                <label for="defaultFormControlInput" class="form-label">link Phone 2</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="link_phone2"
                                    value="{{ $settings->link_phone2 }}" aria-describedby="defaultFormControlHelp" />
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">First Email</label>
                                <input type="email" class="form-control" id="defaultFormControlInput" name="email1"
                                    value="{{ $settings->email1 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Second Email</label>
                                <input type="email" class="form-control" id="defaultFormControlInput" name="email2"
                                    value="{{ $settings->email2 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Third Email</label>
                                <input type="email" class="form-control" id="defaultFormControlInput" name="email3"
                                    value="{{ $settings->email3 }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Country</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="country"
                                    value="{{ $settings->country }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Address</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="address"
                                    value="{{ $settings->address }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="fb"
                                    value="{{ $settings->fb }}" aria-describedby="defaultFormControlHelp" />

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-6 mb-3 mt-3">
                                <label for="defaultFormControlInput" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="insta"
                                    value="{{ $settings->insta }}" aria-describedby="defaultFormControlHelp" />

                            </div>


                            <div class="col-6 mb-3 mt-3">
                                @if ($settings->logo)
                                <img src="../assets/logo/{{ $settings->logo }}" width="100">
                                @endif
                                <label for="defaultFormControlInput" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="file" name="logo" />

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection