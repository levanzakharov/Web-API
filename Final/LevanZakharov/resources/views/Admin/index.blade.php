@extends('layouts.app')

@section('content')
        <div class="conteiner">
            <div class="crud" id="InsertDiv">
                <form action="{{ route('Admin_Company_Insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Generate Companies</label>
                    <br>
                    <select name="insertCompany">
                        @for ($i = 3; $i <=30 ; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="submit" name="Insertbtn">
                </form>
            </div>

            <br>
            <br>
            <br>


            <table border = "1">
                <tr>
                <td><b>id</b></td>
                <td><b>CompanyName</b></td>
                <td><b>identification</b></td>
                <td><b>CompanyDate</b></td>
                </tr>
                @foreach ($Values as $Value)
                <tr>
                <td>{{ $Value->id }}</td>
                <td>{{ $Value->CompanyName }}</td>
                <td>{{ $Value->identification }}</td>
                <td>{{ $Value->CompanyDate }}</td>
                </tr>
                @endforeach
                </table>
        </div>

@endsection
