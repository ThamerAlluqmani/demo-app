@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class="btn btn-info btn-lg" href="{{route('products.create')}}">  {{ __('add new product') }}</a>
                        <a class="btn btn-info btn-lg" href="{{route('language.create')}}">  {{ __('add new language') }}</a>
                        <a class="btn btn-info btn-lg" href="{{route('newAdmin.create')}}"> {{ __('add new Admin') }}</a>

                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-info btn-lg" href="{{route('products.index')}}">  {{ __('products') }}</a>
                    <a class="btn btn-info btn-lg" href="{{route('productsNumber')}}">  {{ __('Products Number') }}</a>

                </div>
            </div>
        </div>
    </div>


</div>


@endsection
