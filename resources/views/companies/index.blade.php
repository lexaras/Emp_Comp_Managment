@extends('layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection

@section('content')
@if (session('status_success'))
<p style="color: green"><b>{{ session('status_success') }}</b></p>
@else
<p style="color: red"><b>{{ session('status_error') }}</b></p>
@endif
<div class="card-body">
    <table class="table" id="myData">
        <thead>
        <tr>
            <th>{{ __('messages.title')}}</th>
            <th>{{ __('messages.email')}}</th>
            <th>{{ __('messages.website')}}</th>
            <th>{{ __('messages.logo')}}</th>
            <th>{{ __('messages.actions')}}</th>
        </tr>
       </thead>
       <tbody>
        @foreach ($companies as $company)
        <tr>
            <td>{{ $company->title }}</td>
            <td>{{ $company->email }}</td>
            <td><a href="{{ $company->website }}">{{ $company->website }}</a></td>
            <td> <img  src="{{url('/storage/product/'.$company->path)}}" width="100" height="100"></td>
            <td>
                <form action={{ route('companies.destroy', $company->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('companies.edit', $company->id) }}>{{ __('messages.edit')}}</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value={{ __('messages.delete')}}>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <div>
        <a href="{{ route('companies.create') }}" class="btn btn-success">{{ __('messages.add_Company')}}</a>
    </div>
</div>
@endsection

@section('javascripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

        <script>
        $(document).ready(function () {
            $.noConflict();
            var table = $('#myData').DataTable({
        });
            
        });</script>
@endsection