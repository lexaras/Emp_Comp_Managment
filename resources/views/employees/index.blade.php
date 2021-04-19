@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection

@section('content')
@if($errors->any())
<h4 style="color: red">{{$errors->first()}}</h4>
@endif
<div class="card-body">
    <form class="form-inline" action="{{ route('employees.index') }}" method="GET">
        <select name="company_id" id="" class="form-control">
            <option value="" selected disabled>{{ __('messages.choose_A_Company_To_Filter')}}</option>
            @foreach ($companies as $company)
            <option value="{{ $company->id }}" 
                @if($company->id == app('request')->input('company_id')) 
                    selected="selected" 
                @endif>{{ $company->title }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">{{ __('messages.submit')}}</button>
        <a class="btn btn-success" href={{ route('employees.index') }}>{{ __('messages.show')}}</a>
    </form>
</div>

<div class="card-body">
    <table class="table" id="myData">
        <thead>
        <tr>
            <th>{{ __('messages.name')}}</th>
            <th>{{ __('messages.email')}}</th>
            <th>{{ __('messages.phone')}}</th>
            <th>{{ __('messages.company')}}</th>
            <th>{{ __('messages.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->company->title }}</td>
            <td>
                <form action={{ route('employees.destroy', $employee->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('employees.edit', $employee->id) }}>{{ __('messages.edit')}}</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value={{ __('messages.delete')}}>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{ route('employees.create') }}" class="btn btn-success">{{ __('messages.add')}}</a>
    </div>
</div>
@endsection

@section('javascripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

        <script>$(document).ready(function () {
            $.noConflict();
            var table = $('#myData').DataTable();
        });</script>
@endsection

