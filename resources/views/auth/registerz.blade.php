@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" required>
        </div>
        @include('auth.partials.form-fields')
        <div>
            <label for="day">Ngày sinh:</label>
            <select id="day" name="day">
                @foreach($days as $day)
                    <option value="{{ $day }}">{{ $day }}</option>
                @endforeach
            </select>
            <select id="month" name="month">
                @foreach($months as $month)
                    <option value="{{ $month }}">{{ $month }}</option>
                @endforeach
            </select>
            <select id="year" name="year">
                @foreach($years as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="gender">Giới tính:</label>
            <select id="gender" name="gender">
                @foreach($genders as $gender)
                    <option value="{{ $gender }}">{{ $gender }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="hobbies">Sở thích:</label>
            <select id="hobbies" name="hobbies[]" multiple>
                @foreach($hobbies as $hobby)
                    <option value="{{ $hobby }}">{{ $hobby }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Đăng ký</button>
        </div>
    </form>
@endsection
