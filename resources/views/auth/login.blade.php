@extends('master')
@section('content')
<div class="container">
    {!! Form::open(["url"=>"/auth/login"]) !!}
    <table style="width: 50%; margin:0 auto;" class="table">
        @if(count($errors) >0)
        <tr>
            <td colspan="2">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </td>
        </tr>
        @endif
        <tr>
            <td colspan="2">
                <h1 class="well text-center">Login Form</h1>
            </td>
        </tr>
        <tr>
            <td>Enter email adress :</td>
            <td>
                {!! Form::email("email") !!}
            </td>
        </tr>
        <tr>
            <td>Enter the password</td>
            <td>{!! Form::password("password") !!}</td>
        </tr>
        <tr>
            <td>Remember me ?</td>
            <td> {!! Form::checkbox("remember") !!}</td>
        </tr>
        <tr>
            <td colspan="2">
            {!! Form::submit("Login") !!}
            </td>
        </tr>
    </table>
    {!! Form::close() !!}
</div>
@stop