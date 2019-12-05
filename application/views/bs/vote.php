<html>
<head>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }

  
  xmlhttp.open("GET","poll_vote?vote="+int,true);
  xmlhttp.send();
  XMLHttpRequest.abort()
}
</script>
</head>
<body>

<div id="poll">
<h3>Do you like PHP and AJAX so far?</h3>
    <div class="text-center">
    <form>
    Yes:
    <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
    <br>No:
    <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
    </form>
    </div>
    <br>
    <br>
</div>

</body>
</html>