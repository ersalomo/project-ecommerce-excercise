@extends('admin.layouts.layout-admin')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Data Cart')
@section('content')
    <div class="page-breadcrumb bg-white">
        <div class="page-body">
            @livewire('data.data-carts')

        </div>
    </div>


@endsection
