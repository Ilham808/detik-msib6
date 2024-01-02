@extends('layouts.main')

@section('content')
    <div class="page-title">
        <h3>Category Book</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create a Category Book</div>
                <div class="card-body">
                    @include('categorybook.partials.form-create')
                </div>
            </div>
        </div>
    </div>
@endsection