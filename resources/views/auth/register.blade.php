@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="luogo" class="col-md-4 col-form-label text-md-right">Indirizzo</label>

                            <div class="col-md-6">
                                <input id="indirizzo" type="text" class="form-control" name="indirizzo">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="luogo" class="col-md-4 col-form-label text-md-right">Città</label>

                            <div class="col-md-6">
                                <input id="città" type="text" class="form-control" name="città">
                            </div>
                        </div>
                        <!--radiobutton -->

                          <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <div class = "col-md-6">
                              <div class="form-group row">
                            <label for="gender" class="col-md-4 control-label">Sesso</label>

                            <input id="female" type="radio"class="form-control" name="gender" value="Femmina" {{ (old('sex') == 'Maschio') ? 'checked' : '' }} >Femmina</input>
                            <input id="male" type="radio"class="form-control" name="gender" value="Maschio" {{ (old('sex') == 'Femmina') ? 'checked' : '' }} >Maschio</input>

                            @if ($errors->has('gender'))
                            <span class="help-block">
                              <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                            @endif
                            </div>
                              </div>
                          </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
