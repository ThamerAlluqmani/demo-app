@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products Number') }}</div>
                    <h4 class="text-center">there is : {{$countProducts}} products</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
