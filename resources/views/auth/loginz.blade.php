@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        @include('auth.partials.form-fields')
        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
@endsection
