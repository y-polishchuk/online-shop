@extends('layouts.app')

@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/product_styles.css') }}">
@endpush

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>

                <div class="card-body">
                {{ Form::model(auth()->user(), ['route' => ['password.change.update', auth()->user()], 'method' => 'PUT']) }}
                <div class="mb-3 row">
                {{ Form::label('current_password', __('Current Password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                    <div class="col-md-6">
                        {{ Form::password('current_password', ['class' => 'form-control'. ($errors->has('current_password') ? ' is-invalid' : null), 'autocomplete' => false, 'placeholder' => __('Current Password'), 'required']) }}
                        @error('current_password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                {{ Form::label('password', __('New Password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                    <div class="col-md-6">
                        {{ Form::password('password', ['class' => 'form-control'. ($errors->has('password') ? ' is-invalid' : null), 'autocomplete' => false, 'placeholder' => __('New Password'), 'required']) }}
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    {{ Form::label('password_confirmation', __('Confirm New Password'), ['class' => 'col-md-4 col-form-label text-md-right']) }}

                    <div class="col-md-6">
                        {{ Form::password('password_confirmation', ['class' => 'form-control'. ($errors->has('password_confirmation') ? ' is-invalid' : null), 'autocomplete' => false, 'placeholder' => __('Confirm New Password'), 'required']) }}
                        @error('password_confirmation')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6 offset-md-4">
                        {{ Form::submit(__('Change Password'), ['class' => 'btn btn-primary']) }}
                    </div>
                </div>

                {{ Form::close() }}
                    
                </div>
            </div>
        </div>
        @include('profile.profile_menu')
    </div>
</div>
@endsection

