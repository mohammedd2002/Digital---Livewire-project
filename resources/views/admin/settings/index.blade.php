@extends('admin.master')
@section('title', 'Settings')
@section('setting-active', 'active')
@section('content')



    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Settings</h4>

        <div class="card mb-4">
            <div class="card-body">
              @livewire('Admin.Settings.updated-settings-component')
            </div>
        </div>
    </div>
    <!-- / Content -->

@endsection
