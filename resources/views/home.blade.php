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

                    {{ __('Admin logged in!') }}<br><br><br>
                    <div><h4> ZONE REGISTRATION / VIEW & EDIT</h4>
@if (Route::has('zone'))
                            <a href="{{ route('zone') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> REGISTRATION ZONE</a>
                        @endif
        </div>
        <div><h4> REGION  REGISTRATION / VIEW & EDIT</h4>
@if (Route::has('region'))
                            <a href="{{ route('region') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> REGISTRATION REGION</a>
                        @endif
        </div>
        <div><h4> TERRITORY REGISTRATION / VIEW & EDIT</h4>
@if (Route::has('terr'))
                            <a href="{{ route('terr') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> REGISTRATION TERRITORY</a>
                        @endif
        </div>

        <div><h4> USER REGISTRATION </h4>
@if (Route::has('user'))
                            <a href="{{ route('user') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> USER REGISTRATION </a>
                        @endif
        </div>  
        <div><h4> PRODUCT REGISTRATION </h4>
@if (Route::has('sku'))
                            <a href="{{ route('sku') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> PRODUCT REGISTRATION </a>
                        @endif
        </div>  
        <div><h4> PURCHASE ORDER VIEW</h4>
@if (Route::has('perch'))
                            <a href="{{ route('perch') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> PURCHASE ORDER VIEW </a>
                        @endif
        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

