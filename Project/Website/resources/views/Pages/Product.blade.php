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
                <label for="Id_Product ">Id</label>
                <br>
                <input type="number" name="Id_Product">
                <br>
                <br>

                <input type="submit" value="submit" name="Findbtn">
            </form>

        </div>
        <div class="crud" id="InsertDiv">
            <form action="{{ route('ProductController_Insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="ProductName ">Product Name</label>
                <br>
                <input type="text" name="ProductName">
                <br>
                <br>

                <label for="Id_Brand ">Id Brand</label>
                <br>
                <input type="number" name="Id_Brand">
                <br>
                <br>

                <label for="Id_Category ">Id Category</label>
                <br>
                <input type="number" name="Id_Category">
                <br>
                <br>

                <label for="Model_Year ">Model Year</label>
                <br>
                <input type="number" name="Model_Year">
                <br>
                <br>

                <label for="Price ">Price</label>
                <br>
                <input type="number" name="Price">
                <br>
                <br>

                <label for="Content">Content</label>
                <br>
                <textarea name="Content" cols="30" rows="10"></textarea>
                <br>
                <br>

                <label for="Discount ">Discount</label>
                <br>
                <input type="number" name="Discount">
                <br>
                <br>

                <label for="Photo ">Photo</label>
                <br>
                <input type="text" name="Photo">
                <br>
                <br>


                <input type="submit" value="submit" name="Insertbtn">
            </form>
        </div>
        <div class="crud" id="UpdateDiv">
            <form action="{{ route('ProductController_Update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="Id_Product">Id</label>
                <br>
                <input type="number" name="Id_Product">
                <br>
                <br>

                <label for="ProductName ">Product Name</label>
                <br>
                <input type="text" name="ProductName">
                <br>
                <br>

                <label for="Id_Brand ">Id Brand</label>
                <br>
                <input type="number" name="Id_Brand">
                <br>
                <br>

                <label for="Id_Category ">Id Category</label>
                <br>
                <input type="number" name="Id_Category">
                <br>
                <br>

                <label for="Model_Year ">Model Year</label>
                <br>
                <input type="number" name="Model_Year">
                <br>
                <br>

                <label for="Price ">Price</label>
                <br>
                <input type="number" name="Price">
                <br>
                <br>

                <label for="Content">Content</label>
                <br>
                <textarea name="Content" cols="30" rows="10"></textarea>
                <br>
                <br>

                <label for="Discount ">Discount</label>
                <br>
                <input type="number" name="Discount">
                <br>
                <br>

                <label for="Photo ">Photo</label>
                <br>
                <input type="text" name="Photo">
                <br>
                <br>

                <input type="submit" value="submit" name="Updatebtn">
            </form>
        </div>
        <div class="crud" id="DeleteDiv">
            <form action="BrandController_Deletevz">
                @csrf
                <label for="Id_Product">Id</label>
                <br>
                <input type="number" name="Id_Product">
                <br>
                <br>

                <input type="submit" value="submit" name="Deletebtn">
            </form>
        </div>

        <table border = "1">
            <tr>
            <td><b>Id_Product</b></td>
            <td><b>ProductName</b></td>
            <td><b>Id_Brand</b></td>
            <td><b>Id_Category </b></td>
            <td><b>Model_Year</b></td>
            <td><b>Price</b></td>
            <td><b>Content</b></td>
            <td><b>Discount </b></td>
            <td><b>Photo </b></td>
            </tr>
            @foreach ($Values as $Value)
            <tr>
            <td>{{ $Value->Id_Product }}</td>
            <td>{{ $Value->ProductName}}</td>
            <td>{{ $Value->Id_Brand }}</td>
            <td>{{ $Value->Id_Category }}</td>
            <td>{{ $Value->Model_Year }}</td>
            <td>{{ $Value->Price}}</td>
            <td>{{ $Value->Content }}</td>
            <td>{{ $Value->Discount }}</td>
            <td>{{ $Value->Photo }}</td>
            </tr>
            @endforeach
            </table>
    </div>
@endsection
