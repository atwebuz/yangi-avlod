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
            <h4 class="mb-sm-0 font-size-18">Buyurtmalar</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: #007bff;">@lang('global.home')</a></li>
                    <li class="breadcrumb-item active">Buyurtmalar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Buyurtmalar</h3>
            </div>
            <div class="card-body">
                <!-- Data table -->
                <table id="datatable" class="table table-bordered dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>F.I.O</th>
                            <th>Kompanya nomi</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Status</th>
                            <th>Sana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->fio }}</td>
                            <td>{{ $item->company_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phoner }}</td>
                            <td class="text-center">
                                <i style="cursor: pointer; font-size: 16px;" id="program_{{ $item->id }}" 
                                class="fas {{ $item->status === 1 ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"
                                onclick="toggle_instock({{ $item->id }})"></i>
                            </td>
                            <td>{{ $item->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- Display associated files -->
                <div class="mt-4">
                    <h5>Attached Files:</h5>
                    @if($item->files->isEmpty())
                        <p>No files attached.</p>
                    @else
                        <ul>
                            @foreach($item->files as $file)
                                <li>
                                    <a href="{{ asset($file->path) }}" target="_blank">{{ basename($file->path) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function toggle_instock(id) {
        $.ajax({
            url: `/product/toggle-status/${id}`,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                if (result.is_active === 1) {
                    $("#program_" + id).attr('class', "fas fa-check-circle text-success");
                } else {
                    $("#program_" + id).attr('class', "fas fa-times-circle text-danger");
                }
            },
            error: function(errorMessage) {
                console.log(errorMessage);
            }
        });
    }
</script>
@endsection
