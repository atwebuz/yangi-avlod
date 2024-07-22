@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<!-- Content Header (Page header) -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">@lang('cruds.blogs.title')</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: #007bff;">@lang('global.home')</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('bannerIndex') }}" style="color: #007bff;">@lang('cruds.blogs.title')</a></li>
                    <li class="breadcrumb-item active">@lang('global.edit')</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('global.edit')</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('bannerUpdate', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('global.name_as')</label>
                                    <input type="text" name="name" class="form-control" 
                                        value="{{ old('name', $banner->name) }}" placeholder="Название" required>
                                </div>
                            

                                <div class="col-12 mb-2">
                                    <label>@lang('global.description_as') </label>
                                    <textarea id="description" class="form-control" name="description" 
                                    maxlength="225" rows="3" placeholder="Описание ... " required>{{ old('description', $banner->description) }}</textarea>
                                </div>


                            <div class="mb-2 {{ is_null($banner->photo) ? 'col-12' : 'col-8' }}">
                                <label>@lang('cruds.blogs.fields.photo')</label>
                                <input type="file" name="photo" class="form-control" accept="image/jpeg, image/png, image/gif"
                                value="{{ old('photo', $banner->photo ) }}">
                            </div>
                            @if (!is_null($banner->photo))
                                <div class="col-4 mb-2">
                                    <div class="image-box float-right" style="width: 100px; height: 60px;">
                                        <img src="{{ asset('images/banners/' . $banner->photo) }}" alt="lalal" width="100%" height="100%">
                                    </div>
                                </div>
                            @endif
                         

                        </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-success waves-effect waves-light float-right">@lang('global.save')</button>
                        <a href="{{ route('bannerIndex') }}" class="btn btn-light waves-effect float-left">@lang('global.cancel')</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection