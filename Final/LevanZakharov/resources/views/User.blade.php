@extends('layouts.app')

@section('content')
    <script>
        function HideElements(select) {
        if(select.value=="Insert"){
            document.getElementById('InsertDiv').style.display = "block";
            document.getElementById('UpdateDiv').style.display = "none";
            document.getElementById('DeleteDiv').style.display = "none";
        }
        else if(select.value=="Update"){
            document.getElementById('InsertDiv').style.display = "none";
            document.getElementById('UpdateDiv').style.display = "block";
            document.getElementById('DeleteDiv').style.display = "none";
        }
        else{
            document.getElementById('InsertDiv').style.display = "none";
            document.getElementById('UpdateDiv').style.display = "none";
            document.getElementById('DeleteDiv').style.display = "block";
        }
      }
    </script>

        <div class="conteiner">
            <div>
                <label for="Action ">Select Action</label>
                <br>
                <select name="CRUD" onchange="HideElements(this)">
                    <option value="Insert">Insert</option>
                    <option value="Update">Update</option>
                    <option value="Delete">Delete</option>
                </select>
            </div>
            <br>
            <br>
            <div class="crud" id="InsertDiv">
                <form action="{{ route('Company_Insert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>VacancyName</label>
                    <br>
                    <br>
                    <input type="text" value="VacancyName" name="VacancyName">
                    <br>
                    <br>

                    <label>Content</label>
                    <br>
                    <br>
                    <input type="text" value="Content" name="Content">
                    <br>
                    <br>

                    <input type="submit" value="submit" name="Insertbtn">
                </form>
            </div>
            <div class="crud" id="UpdateDiv">
                <form action="{{ route('Company_Update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Id</label>
                    <br>
                    <br>
                    <input type="number" name="Id">
                    <br>
                    <br>

                    <label>VacancyName</label>
                    <br>
                    <br>
                    <input type="text" value="VacancyName" name="VacancyName">
                    <br>
                    <br>

                    <label>Content</label>
                    <br>
                    <br>
                    <input type="text" value="Content" name="Content">
                    <br>
                    <br>
                    <input type="submit" value="submit" name="Updatebtn">
                </form>
            </div>
            <div class="crud" id="DeleteDiv">
                <form action="{{ route('Company_Delete') }}">
                    @csrf
                    <label>Id</label>
                    <br>
                    <br>
                    <input type="number" name="Id">
                    <br>
                    <br>
                    <input type="submit" value="submit" name="Deletebtn">
                </form>
            </div>

            <br>
            <br>
            <br>

            <table border = "1">
                <tr>
                <td><b>id</b></td>
                <td><b>CompanyId</b></td>
                <td><b>VacancyName</b></td>
                <td><b>Content</b></td>
                <td><b>created_at</b></td>
                <td><b>updated_at</b></td>
                </tr>
                @foreach ($Values as $Value)
                <tr>
                <td>{{ $Value->id }}</td>
                <td>{{ $Value->CompanyId }}</td>
                <td>{{ $Value->VacancyName }}</td>
                <td>{{ $Value->Content }}</td>
                <td>{{ $Value->created_at }}</td>
                <td>{{ $Value->updated_at }}</td>
                </tr>
                @endforeach
                </table>
        </div>

@endsection
