@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Home</h5>
                <div class="card-body">
                    <form action="{{route('homeCms.update',$home->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('post')
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{$home->title}}" />

                        </div>
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">SubTitle</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle"
                                aria-describedby="defaultFormControlHelp" value="{{$home->subtitle}}" />

                        </div>
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Main Title</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="main_title"
                                aria-describedby="defaultFormControlHelp" value="{{$home->main_title}}" />

                        </div>
                     <div class="mb-3 mt-3">
                            @if($home->image)
                            <img src="../assets/bg/{{ $home->image }}" width="100">
                            @endif
                       </div>
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Background</label>
                            <input type="file" class="form-control" id="file" name="image"
                                aria-describedby="defaultFormControlHelp" />
                        
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection