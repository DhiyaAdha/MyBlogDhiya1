@extends('layouts.dashboard')

@section('title')
    {{-- Halaman utama dashboard --}}
    {{ trans('dashboard.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard_home') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>
                {{-- Selamat Datang --}}
                <h2>{{ trans('dashboard.greeting.welcome', ['name' => Auth::user()->name]) }}</h2>
        </div>
    </div>
@endsection
