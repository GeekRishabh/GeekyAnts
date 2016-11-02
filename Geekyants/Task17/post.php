<!DOCTYPE html>
<html>
<head>

    <title>Post Page</title>
    <script type="text/javascript">
    var i=0;
  function Add(){
    var me=document.getElementById('content').value;
    console.log(me);
    var t=document.getElementById('box');
    console.log(t);
    t.innerHTML += "<div id="+i+"><li name="+i+"><input type='checkbox' id="+i+" onClick='Strike("+i+")'>"+me+"<Button id="+i+" onClick='Remove("+i+")'>Remove</button></li></div>";
  i=i+1;
  }
  function Strike(i){

    //console.log(i);
    var t=document.getElementById(i);
    console.log(t);

     //seee to it for line-through






  }
  function Remove(i){
  var t=document.getElementById(i);
  console.log(t);
  t.parentNode.removeChild(t);
  }
  </script>
</head>
<body>

<!-- Form Code Start -->


  <label for="Item"><input type="text" id ="content"></label>
  <button onclick="Add();"> Add to list</button>
  <hr>
  <form id='guard' action="guard.php" method='post'>
  <div id="container">
  <ul id="box">


  </ul>
  </div>

<input type="submit" id="submit" value="submit">
</form>



</body>
</html>
