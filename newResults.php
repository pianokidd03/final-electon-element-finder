<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<title >Electron - Search Results</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<div id="pageResults"></div>
<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation"> <!--jpg-->
     <div class="container">
          <div class="navbar-header">
               <a href="index.html" class="navbar-brand">Electron</a>
          </div>
  </div>
</div>

<div id="noticeDiv"></div>

<!-- Home Section -->
<form action="wikiScraper.php" method="POST">
     <div id="testResults"></div>
</form>

<!--<section id="home" class="main-about parallax-section">
     
</section> -->

<!-- About Section -->

<section id="about">
     <div class="container"></div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Electron</h3>
                    <p>And whatever you do, whether in word or deed, do it all in the name of the Lord Jesus, giving thanks to God the Father through him. - Col 3:17 </p>
                    <div class="footer-copyright">
                         <p>Copyright &copy; 2019 Kidd Rd. Web Development - Some Design Elements Taken From Tooplate</p>
                    </div>
               </div>    
          </div>
     </div>
</footer> 

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<!--<script src="js/functionality.js"></script> -->
<script type="text/javascript">
     var inputVal = "<?php echo($_POST['queryInput']);?>";
     var selectVal = "<?php echo($_POST['searchOption']);?>";
     var searchType = "<?php echo($_POST['searchType']);?>";

     var matches = []; 
     $.getJSON("data/data.json", function(json) {
          if (searchType === "strictSearch") {
               for (var i = 0; i < json.length; i++) {
                    var lowerString = inputVal.toLowerCase();
                    var keywords = String(json[i][selectVal]).toLowerCase();

                    if (lowerString === keywords) {
                         matches.push(i);
                    }
               }
          }
          else{
               for (var i = 0; i < json.length; i++) {
               inputVal = String(inputVal);
               var lowerString = inputVal.toLowerCase();
               var keywords = String(json[i][selectVal]).toLowerCase();

               var keyMatches = keywords.match(lowerString);

               if (keyMatches != null) {
                    matches.push(i);
               }
          }
          }

          if (matches.length != 0) {
               for (var i = 0; i < matches.length; i++) {
                    console.log("For loop excuted");
                    var arrayId = matches[i]; 

                    var relationalBranches = json[arrayId];
                    console.log(relationalBranches);

                   

                    /*function wikiQuery(name){
                         var xmlhttp = new XMLHttpRequest();
                         xmlhttp.onreadystatechange = function(){

                              if (this.readyState == 4 && this.status == 200) {
                                   var div = document.createElement('div');
                                   var responseText = 'Discription: <br> <br>'+this.responseText+'</h4>';
                                   div.innerHTML = responseText;
                                   document.getElementById('testResults').appendChild(div);
                              }
                         }
                         xmlhttp.open("GET", "wikiScraper.php?q="+name, true);
                         xmlhttp.send();
                    } */

                    var name = relationalBranches.name;

                    var div = document.createElement('div');
                    var nameToAdd = '<h2><a href="elementSite.php?q='+name+'">'+name+'</a></h2>';
                    console.log('nameToAdd: '+nameToAdd);
                    div.innerHTML = nameToAdd;
                    document.getElementById('testResults').appendChild(div);
               }
          }
     });

</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html> 
