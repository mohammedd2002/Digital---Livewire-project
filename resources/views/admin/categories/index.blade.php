@extends('admin.master')
@section('title', 'Categories')
@section('categories-active', 'active')
@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <h4 class="fw-bold py-3 mb-4 d-inline">Categories</h4>
            <button type="button" class="btn btn-sm btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#createModal">
                Add New
            </button>

           @livewire('admin.categories.categories-create')
        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.categories.categories-data')
            </div>
        </div>
        @livewire('admin.categories.categories-update')
        @livewire('admin.categories.categories-delete')

    </div>
    <!-- / Content -->



@endsection
