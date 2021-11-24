@extends('layouts.app')

@section('content')

@include('component.info_msg')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 offset-3">
                                <h4 class="card-title mb-3">Forgot Password</h4>
                                <div class="mb-3 form-group @error('email') has-error @enderror">
                                    {!! Form::label('email','Email Address',[],false) !!}
                                    @error('email')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
                                    {!! Form::text('email', null, ['class'=>'form-control', 'id'=>'email','required' => '']) !!}
                                    <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                                </div>
        
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Send Password Link
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
