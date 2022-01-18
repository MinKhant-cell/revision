@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-alert type="danger" class="p-5">This is alert</x-alert>
                    <x-alert>Say Something</x-alert>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
