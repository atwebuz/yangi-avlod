@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">@lang('cruds.branches.title')</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: #007bff;">@lang('global.home')</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('productIndex') }}" style="color: #007bff;">@lang('cruds.branches.title')</a></li>
                    <li class="breadcrumb-item active">@lang('global.add')</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('global.add')</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <style>
                    .form-check-group {
                        display: flex;
                        gap: 1rem;
                        flex-wrap: wrap;
                    }
                    .form-check-label {
                        display: inline-block;
                        padding: 0.5rem 1rem;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        cursor: pointer;
                        background-color: #f8f9fa;
                        transition: background-color 0.3s ease;
                    }
                    .form-check-input {
                        display: none;
                    }
                    .form-check-input:checked + .form-check-label {
                        background-color: #007bff;
                        color: #fff;
                        border-color: #007bff;
                    }
                    .form-group {
                        margin-bottom: 1.5rem;
                    }
                </style>
                
                <form action="{{ route('productCreate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-lg-12 mb-2">
                                <label>@lang('global.name_as')</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Название" required>
                            </div>
                
                            <div class="col-12 mb-2">
                                <label>@lang('global.description_as')</label>
                                <textarea id="description" class="form-control" name="description" maxlength="225" rows="3" placeholder="Описание ..." required></textarea>
                            </div>
                
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('cruds.branches.fields.region_id')</label>
                                <select class="form-control select2" style="width: 100%;" name="region_id" value="{{ old('region_id') }}" required>
                                    <option value="" disabled selected>@lang('cruds.regions_districts.districts.select_region')</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>
                
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('cruds.category.title')</label>
                                <select class="form-control select2" style="width: 100%;" name="category_id" value="{{ old('category_id') }}" required>
                                    <option value="" disabled selected>@lang('cruds.category.title')</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('cruds.brands.title')</label>
                                <select class="form-control select2" style="width: 100%;" name="brand_id" id="brand_id" required>
                                    <option value="" disabled selected>@lang('cruds.brands.title')</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('cruds.product_model.title')</label>
                                <select class="form-control select2" style="width: 100%;" name="product_model_id" id="product_model_id" required>
                                    <option value="" disabled selected>@lang('cruds.product_model.title')</option>
                                </select>
                            </div>
                
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('cruds.branches.fields.photo')</label>
                                <input type="file" name="images[]" class="form-control" multiple accept="image/jpeg, image/png, image/gif">
                            </div>
                
                            <div class="col-12 col-lg-6 mb-2">
                                <label>@lang('global.attributes')</label>
                                <div class="form-check-group" id="attribute-group">
                                    <input class="form-check-input" type="radio" name="attribute" id="hit" value="hit">
                                    <label class="form-check-label" for="hit">
                                        @lang('global.hit')
                                    </label>
                
                                    <input class="form-check-input" type="radio" name="attribute" id="recommended" value="recommended">
                                    <label class="form-check-label" for="recommended">
                                        @lang('global.recommended')
                                    </label>
                
                                    <input class="form-check-input" type="radio" name="attribute" id="new" value="new">
                                    <label class="form-check-label" for="new">
                                        @lang('global.new')
                                    </label>
                
                                    <input class="form-check-input" type="radio" name="attribute" id="promotion" value="promotion">
                                    <label class="form-check-label" for="promotion">
                                        @lang('global.promotion')
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success waves-effect waves-light float-right">@lang('global.save')</button>
                        <a href="{{ route('productIndex') }}" class="btn btn-light waves-effect float-left">@lang('global.cancel')</a>
                    </div>
                </form>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const attributeGroup = document.getElementById('attribute-group');
                        attributeGroup.addEventListener('change', function (event) {
                            const inputs = attributeGroup.querySelectorAll('input[type="radio"]');
                            inputs.forEach(input => {
                                const label = attributeGroup.querySelector(`label[for="${input.id}"]`);
                                if (input.checked) {
                                    label.classList.add('active');
                                } else {
                                    label.classList.remove('active');
                                }
                            });
                        });
                
                        const brandSelect = $('#brand_id');
                        const productModelSelect = $('#product_model_id');
                
                        brandSelect.on('change', function () {
                            const brandId = this.value;
                            if (brandId) {
                                fetch(`/auto_model/${brandId}`)
                                    .then(response => response.json())
                                    .then(data => {
                                        productModelSelect.empty();
                                        productModelSelect.append('<option value="" disabled selected>@lang('cruds.product_model.title')</option>');
                                        data.forEach(model => {
                                            productModelSelect.append(`<option value="${model.id}">${model.name}</option>`);
                                        });
                                        productModelSelect.trigger('change'); // Update Select2
                                    });
                            }
                        });
                
                        // Initialize Select2
                        $('.select2').select2();
                    });
                </script>
                
            </div>
        </div>
    </div>
</div>
@endsection