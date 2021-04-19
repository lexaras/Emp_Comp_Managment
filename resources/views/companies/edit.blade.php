@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.edit_Comp_Information')}}</div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('companies.update', $company->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">{{ __('messages.title')}}:</label>
                            <input type="text" name="title" class="form-control" value="{{ $company->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.email')}}:</label>
                            <input type="text" name="email" class="form-control" value="{{ $company->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.website')}}:</label>
                            <input type="text" name="website" class="form-control" value="{{ $company->website }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.logo')}}:</label>
                            <input type="file" name="file" class="form-control" value="{{ $company->path }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('messages.change')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
