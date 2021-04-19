@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ __('messages.create_New_Company')}}</div>
               <div class="card-body">
                   <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                           <label>{{ __('messages.title')}}: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>{{ __('messages.email')}}: </label>
                           <input type="text" name="email" class="form-control"> 
                       </div>
                       <div class="form-group">
                            <label>{{ __('messages.website')}}: </label>
                            <input type="text" name="website" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>{{ __('messages.logo')}} </label>
                            <input type="file" name="file" class="form-control"> 
                        </div>
                       <button type="submit" class="btn btn-primary">{{ __('messages.submit')}}</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
