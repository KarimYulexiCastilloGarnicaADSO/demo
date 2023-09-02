@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            {{-- <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div> --}}

            <div class="col-12">
                {!! Form::model($user, [
                    'route' => ['user.update', $user->id],
                ]) !!}
                <div class="form-group">
                    {{ Form::label('name', null, ['class' => '']) }}
                    {{ Form::text('name', null, ['class' => 'form-control '] ) }}
                    <span class="invalid-feedback">
                         {{ $errors->first('name') }}
                    </span>
                </div>
                <div class="form-group">
                    {{ Form::label('email', null, ['class' => '']) }}
                    {{ Form::text('email', null, ['class' => 'form-control ']) }}
                    <span class="invalid-feedback">
                         {{ $errors->first('email') }}
                    </span>
                </div>
                <button type="submit">Enviar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
