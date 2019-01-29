
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Gruppo|Pacifico" rel="stylesheet">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="webshop.html">home</a>
        <a href="#inlog">inlog</a>
        <a href="#bestelling">bestelling</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <div src="img/dierenbescherming.png"></div>
        </a>
    </div>


    <nav class="navbar navbar-dark bg-primary">
           <h1> Cheap Fruits & Veggies </h1> 
           



           
    <div class="second">
                    <div class="input">
                        <form> <input name= "naamfilter" type="text" placeholder = "naam bevat...">
                        <input type= "submit"  type="text" value="filter">
                        </form>
                    </div>
                <span class="navbar-text"><h5>Gezonde</h5> <h4>voeding voor een prikkie!</h4>
                </span>
                </div>
                <div id="foto"> <img src="img/groentehoofd.png" width=100%>
        </div>
    </nav>

   
   <script>
        function myFunction() {
        var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
             x.className += " responsive";
             } else {
            x.className = "topnav";
         }
        }
    </script>
</body>

    
    



