@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">

        <div class="col">
            <div class="card mb-4">

                <h5 class="card-header">SEO</h5>
                <div class="card-body">
                    <div class="col-md-12">

                        <form method="POST" action="{{route('seo.update',$seo->id)}}" enctype="multipart/form-data">
                            @csrf

                            
                            <div class="mb-3 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Meta title</label>
                                <input type="text" name="meta_title" class="form-control" id="defaultFormControlInput"
                                    value="{{ $seo->meta_title }}" aria-describedby="defaultFormControlHelp" />
                            </div>

                            <div class="mb-3 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Meta keywords</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                    id="defaultFormControlInput" value="{{$seo->meta_keywords}}"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="mb-3 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Meta Description</label>

                                <textarea class="form-control" name="meta_description" aria-label="With textarea"
                                    id="editor">{!! $seo->meta_description !!}</textarea>

                            </div>
<div class="mb-3 mt-4">
                            @if ($seo->og_image)
                            <img src="../assets/seo/{{ $seo->og_image }}" width="100">
                            @endif

</div>
                            <div class="mb-3 mt-4">
                                <label for="formFile" class="form-label">Image</label>
                           
                                <input class="form-control" type="file" name="og_image" id="formFile" />
                            </div>

                            <div class="mb-3 mt-4">
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop