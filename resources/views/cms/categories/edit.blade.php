@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Category</h5>
                <div class="card-body">
                    <form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" value="{{ $category->title}}"
                                aria-describedby="defaultFormControlHelp" name="title" />

                        </div>
                        <div class="mb-3 mt-3">
                            @if ($category->image)
                                <img src="../assets/categories/{{ $category->image }}" width="100">
                            @endif
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input type="file" class="form-control" id="file" name="image" />

                        </div>

<div class="mb-3 mt-3">
    @if ($category->pdf)
 <embed src="../assets/pdf/{{$category->pdf }}" type="application/pdf" width="150" height="150">
    @endif
</div>
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">pdf</label>
                            <input type="file" class="form-control" id="file" name="pdf" />

                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection