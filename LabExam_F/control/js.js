function ajax() {
    var id=document.getElementById("id").value;
    var name=document.getElementById("name").value;
    var max=document.getElementById("max").value;
    var min=document.getElementById("min").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("try").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("try").innerHTML = this.status;
      }
    };
    xhttp.open("POST", "/LabExam_F/view/main.php", true);
   
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id+" AND name="+name+"AND max="+max+" AND min="+min);
}  