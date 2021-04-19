@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ __('messages.create_New_Emp')}}</div>
               <div class="card-body">
                   <form action="{{ route('employees.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">{{ __('messages.name')}} </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.email')}} </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('messages.website')}}</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                       <div class="form-group">
                           <label>{{ __('messages.company')}} </label>
                           <select name="company_id" id="" class="form-control">
                                <option value="" selected disabled>{{ __('messages.choose_A_Company_name')}} </option>
                                @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->title }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">{{ __('messages.submit')}}</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
