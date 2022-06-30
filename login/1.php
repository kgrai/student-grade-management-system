<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <form action="2.php" method="post" id="form">

    <label for="num1">NUMBER 1</label><input id="num1" type="number" name="num1">
    <label for="num2">NUMBER 2</label><input id="num2" type="number" name="num2">
    <output id="op" name="ot"></output>
    <input type="hidden" name="oot">
    

<div class="btn btn-sm btn-primary" onclick="calc()">submit</div>
    <button  id="ha">store</button>
    </form>
</body>

<script>
form=document.getElementById("form");
form.addEventListener('input',function(){
    
        x=parseInt( document.getElementById('num1').value);
         y= parseInt(document.getElementById('num2').value);
       r=x+y;
       this.oot.value=document.getElementById('op').innerText=r;
   
    });
</script>
</html>
