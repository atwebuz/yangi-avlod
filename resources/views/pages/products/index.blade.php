@extends('layouts.admin')

@section('content')

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
<!-- Content Header (Page header) -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">@lang('cruds.branches.title')</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: #007bff;">@lang('global.home')</a></li>
                    <li class="breadcrumb-item active">@lang('cruds.branches.title')</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('cruds.branches.title')</h3>
                <a href="{{ route('productAdd') }}" class="btn btn-sm btn-success waves-effect waves-light float-right">
                    <span class="fas fa-plus-circle"></span>
                    @lang('global.add')
                </a>
            </div>
            <div class="card-body">
                <!-- Data table -->
                <table id="datatable" class="table table-bordered dt-responsive w-100">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>@lang('global.name')</th>
                        <th>@lang('cruds.brands.title')</th>
                        <th>@lang('cruds.product_model.title')</th>
                        <th>Global @lang('cruds.category.title')</th>
                        <th>@lang('cruds.category.title')</th>
                        <th >@lang('cruds.branches.fields.photo')</th>
                        <th style="width: 100px;">Active</th>
                        <th style="width: 150px;">@lang('global.actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->productModel->brand->name }}</td>
                                <td>{{ $item->productModel->name }}</td>
                                <td>{{ $item->category->parent->name }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>
                                    {{-- @if(!is_null($item->photo))
                                        <a target="_blank"  href="{{ url('/') }}/images/{{ $item->photo }}">{{ $item->photo }}</a>
                                    @else
                                        @lang('global.empty')
                                    @endif --}}

                                    @if($item->images->isNotEmpty())
                                    <div class="product-images">
                                        <a target="_blanl" href="{{ asset($item->images->first()->path) }}">Image</a>
                                            {{-- <img src="{{ asset($item->images->first()->path) }}" alt="Item Image" class="img-fluid"> --}}
                                        </div>
                                    @else
                                        <p>No images available</p>
                                    @endif
                                
                                </td>
                                <td class="text-center">
                                    <i style="cursor: pointer; font-size: 16px;" id="program_{{ $item->id }}" 
                                    class="fas {{ $item->status === 1 ? "fa-check-circle text-success":"fa-times-circle text-danger" }}"
                                    onclick="toggle_instock({{ $item->id }})"></i>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('productDestroy',$item->id) }}" method="post">
                                        @csrf
                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('global.details')">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $item->id }}" class="btn btn-primary">
                                                    <i class="bx bxs-show" style="font-size:16px;"></i>
                                                </button>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('global.edit')">
                                                <a href="{{ route('productEdit',$item->id) }}" class="btn btn-info">
                                                    <i class="bx bxs-edit" style="font-size:16px;"></i>
                                                </a>
                                            </li>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('global.delete')">
                                                <button  onclick="if (confirm('Вы уверены?')) { this.form.submit() }" type="button" data-bs-toggle="modal" 
                                                class="btn btn-danger">
                                                    <i class="bx bxs-trash" style="font-size: 16px;"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </form>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $item->{'name_' . $locale } }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-start">@lang('global.name'):</td>
                                                                <td>
                                                                    <b>{{ $item->name }}</b>
                                                                </td>
                                                            </tr>
                                                      
                                                            <tr>
                                                                <td class="text-start">@lang('cruds.branches.fields.region_id'):</td>
                                                                <td>
                                                                    <b>{{ $item->region->{'name_' . $locale } }}</b>
                                                                </td>
                                                            </tr>
                                                            @if($item->category->parent)
                                                                <tr>
                                                                    <td class="text-start">Global @lang('cruds.category.title'):</td>
                                                                    <td>
                                                                        <b>{{ $item->category->parent->name }}</b>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            <tr>
                                                                <td class="text-start">@lang('cruds.category.title'):</td>
                                                                <td>
                                                                    <b>{{ $item->category->name}}</b>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-start">@lang('cruds.brands.title'):</td>
                                                                <td>
                                                                    <b>{{ $item->productModel->brand->name}}</b>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-start">@lang('cruds.product_model.title'):</td>
                                                                <td>
                                                                    <b>{{ $item->productModel->name}}</b>
                                                                </td>
                                                            </tr>

                                                            
                                                            <tr>
                                                                <td class="text-start">@lang('global.description'):</td>

                                                                <td>
                                                                    @if(!is_null($item->description))
                                                                        <b>{{ $item->description }}</b>
                                                                    @else
                                                                        @lang('global.empty')
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-start">@lang('global.created_at'):</td>

                                                                <td>
                                                                    <b>{{ $item->created_at }}</b>
                                                                
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-start">@lang('global.attributes'):</td>

                                                                <td>
                                                                    <div class="form-check-group" id="attribute-group-{{ $item->id }}">
                                                                        <input class="form-check-input" type="radio" name="attribute" id="hit" disabled value="hit" {{ $item->hit ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="hit">@lang('global.hit')</label>
                                                    
                                                                        <input class="form-check-input" type="radio" name="attribute" id="recommended" disabled value="recommended" {{ $item->recommended ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="recommended">@lang('global.recommended')</label>
                                                    
                                                                        <input class="form-check-input" type="radio" name="attribute" id="new" disabled value="new" {{ $item->new ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="new">@lang('global.new')</label>
                                                    
                                                                        <input class="form-check-input" type="radio" name="attribute" id="promotion" disabled value="promotion" {{ $item->promotion ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="promotion">@lang('global.promotion')</label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            

                                                            <tr>
                                                                <td class="text-start">@lang('cruds.branches.fields.photo'):</td>
                                                                <td>
                                                                    <div class="row">
                                                                        @if($item->images->isNotEmpty())
                                                                            @foreach ($item->images as $img)
                                                                                <div class="col-lg-4 mb-2">
                                                                                    <div class="product-images">
                                                                                        <img class="w-100 img-fluid" src="{{ asset($img->path) }}" alt="Item Image">
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        @else
                                                                            <p>No images available</p>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                            
                                                          
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('global.closed')</button>
                                                </div>
                                            </div>
                                        </div>
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
@endsection

@section('scripts')
    <script>
        function toggle_instock(id){
            $.ajax({
                url: "/product/toggle-status/"+id,
                type: "POST",
                data:{
                    _token: "{!! @csrf_token() !!}"
                },
                success: function(result){
                    if (result.is_active == 1){
                        $("#program_"+id).attr('class',"fas fa-check-circle text-success");
                    }
                    else
                    {
                        $("#program_"+id).attr('class',"fas fa-times-circle text-danger");
                    }
                },
                error: function (errorMessage){
                    console.log(errorMessage)
                }
            });
        }
    </script>
@endsection
