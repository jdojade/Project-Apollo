function loadXMLDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("table-content").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "includes/table.php", true);
    xhttp.send();
  }
  setInterval(function(){
  loadXMLDoc();
  // 1sec
},1000);

window.onload = loadXMLDoc;