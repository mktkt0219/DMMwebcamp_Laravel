@extends('test.layout')

@section('contets')
        email：{{ $datum['email'] }}<br>
        パスワード：{{ $datum['password'] }}<br>
@endsection