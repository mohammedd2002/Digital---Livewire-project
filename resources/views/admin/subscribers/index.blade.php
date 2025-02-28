@extends('admin.master')
@section('title', 'Subscribers')
@section('subscribers-active', 'active')
@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <h4 class="fw-bold py-3 mb-4 d-inline">Subscribers</h4>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.subscribers.subscribers-data')
            </div>
        </div>
        @livewire('admin.subscribers.subscribers-delete')

    </div>
    <!-- / Content -->



@endsection
