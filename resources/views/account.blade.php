@extends('layouts.app')
@php
$user_name = Str::ucfirst(Auth::user()->name);
$user_email = Auth::user()->email;
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello '.$user_name.' ') }}</div>
                <div class="card-body">
                    @if (Auth::guest())
                        {{ __('Please make a registration first.') }}
                    @else
                        <p>{{ 'You are logged in as ' . Str::ucfirst(Auth::user()->role) }}</p>
                        <div class="pb-3">
                            <input name="user-name" type="text" value="{{ __($user_name) }}" readonly>
                            <button class="btn btn-primary editAccountData" data-bs-toggle="modal" data-bs-target="#editAccountModal">Edit Name</button>
                        </div>
                        <div>
                            <input name="user-email" type="email" value="{{ __($user_email) }}" readonly>
                            <button class="btn btn-primary editAccountData" data-bs-toggle="modal" data-bs-target="#editAccountModal">Edit Email</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection