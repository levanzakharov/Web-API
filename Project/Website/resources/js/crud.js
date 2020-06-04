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
