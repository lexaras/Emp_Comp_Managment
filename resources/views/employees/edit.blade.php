@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.edit_Emp_information')}}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">{{ __('messages.name')}} </label>
                            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.email')}} </label>
                            <input type="text" name="email" class="form-control" value="{{ $employee->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.phone')}} </label>
                            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
                        </div>
                        <div class="form-group">
                            <label>{{ __('messages.company')}} </label>
                            <select name="company_id" id="" class="form-control">
                                @foreach ($companies as $company)
                                <option value="{{ $company->id }}" @if($company->id == $employee->company_id) selected="selected" @endif>{{ $company->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('messages.edit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
