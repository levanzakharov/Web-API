@extends('layouts.app')

@section('content')
<script>
    function HideElements(select) {
    if(select.value=="Find"){
        document.getElementById('FindDiv').style.display = "block";
        document.getElementById('InsertDiv').style.display = "none";
        document.getElementById('UpdateDiv').style.display = "none";
        document.getElementById('DeleteDiv').style.display = "none";
    }
    else if(select.value=="Insert"){
        document.getElementById('FindDiv').style.display = "none";
        document.getElementById('InsertDiv').style.display = "block";
        document.getElementById('UpdateDiv').style.display = "none";
        document.getElementById('DeleteDiv').style.display = "none";
    }
    else if(select.value=="Update"){
        document.getElementById('FindDiv').style.display = "none";
        document.getElementById('InsertDiv').style.display = "none";
        document.getElementById('UpdateDiv').style.display = "block";
        document.getElementById('DeleteDiv').style.display = "none";
    }
    else{
        document.getElementById('FindDiv').style.display = "none";
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
                <option value="Find" selected>Find</option>
                <option value="Insert">Insert</option>
                <option value="Update">Update</option>
                <option value="Delete">Delete</option>
            </select>
        </div>
        <br>
        <br>
        <div class="crud" id="FindDiv">
            <form action="{{ route('ProductController_Find')  }}">
                @csrf
                <label>Id</label>
                <br>
                <br>
                <input type="submit" value="submit" name="Findbtn">
            </form>

        </div>
        <div class="crud" id="InsertDiv">
            <form action="{{ route('ProductController_Insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Id</label>
                <br>
                <br>
                <input type="submit" value="submit" name="Insertbtn">
            </form>
        </div>
        <div class="crud" id="UpdateDiv">
            <form action="{{ route('ProductController_Update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Id</label>
                <br>
                <br>
                <input type="submit" value="submit" name="Updatebtn">
            </form>
        </div>
        <div class="crud" id="DeleteDiv">
            <form action="BrandController_Deletevz">
                @csrf
                <label>Id</label>
                <br>
                <br>
                <input type="submit" value="submit" name="Deletebtn">
            </form>
        </div>

        <table border = "1">
            <tr>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
            </tr>
            {{-- @foreach(Values as Value)
            <tr>
            <td>{{ Value-> }}</td>
            <td>{{ Value-> }}</td>
            <td>{{ Value-> }}</td>
            </tr>
            @endforeach --}}
            </table>
    </div>

@endsection
