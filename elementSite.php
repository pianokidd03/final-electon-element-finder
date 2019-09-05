<?php
$element = $_REQUEST['q'];
?>

<!DOCTYPE html>
<html>
<head>
	<div id="titleDiv"></div>
	<script type="text/javascript">
		var div = document.createElement('div');
		var titleToAdd = '<title>Electron - All About <?php echo $element;?></title>';
		div.innerHTML = titleToAdd;
	    document.getElementById('titleDiv').appendChild(div);

	</script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Electron - Element Finder</title>
	<!--

	Some Style Elements from Template 2085 - Neuron

	http://www.tooplate.com/view/2085-neuron

	-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
	<form action="wikiScraper.php" method="POST">
		<div id="testResults"></div>
	</form>

	<script type="text/javascript">
		var lowerString = "<?php echo $element;?>";

	     var matches = []; 
	     $.getJSON("data/data.json", function(json) {
	          
               for (var i = 0; i < json.length; i++) {
                    var keywords = String(json[i]["name"]);

                    if (lowerString === keywords) {
                         matches.push(i);
                    }
               }
	          

	          if (matches.length != 0) {
	               for (var i = 0; i < matches.length; i++) {
	                    console.log("For loop excuted");
	                    var arrayId = matches[i];
	                    var elementProperties = []; 

	                    var relationalBranches = json[arrayId];
	                    console.log(relationalBranches);

	                    function wikiQuery(name){
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
	                    } 



	                    var atomicNumber = relationalBranches.atomicNumber;
	                    elementProperties.push(atomicNumber);

	                    var symbol = relationalBranches.symbol;
	                    elementProperties.push(symbol);

	                    var name = relationalBranches.name;
	                    elementProperties.push(name);

	                    var atomicMass = relationalBranches.atomicMass;
	                    elementProperties.push(atomicMass);

	                    var electronicConfiguration = relationalBranches.electronicConfiguration;
	                    elementProperties.push(electronicConfiguration);

	                    var electronegativity = relationalBranches.electronegativity;
	                    elementProperties.push(electronegativity);

	                    var atomicRadius = relationalBranches.atomicRadius;
	                    elementProperties.push(atomicRadius);

	                    var ionRadius = relationalBranches.ionRadius;
	                    elementProperties.push(ionRadius);

	                    var vanDelWaalsRadius = relationalBranches.vanDelWaalsRadius;
	                    elementProperties.push(vanDelWaalsRadius);

	                    var ionizationEnergy = relationalBranches.ionizationEnergy;
	                    elementProperties.push(ionizationEnergy);

	                    var electronAffinity = relationalBranches.electronAffinity;
	                    elementProperties.push(electronAffinity);

	                    var oxidationStates = relationalBranches.oxidationStates;
	                    elementProperties.push(oxidationStates);

	                    var standardState = relationalBranches.standardState;
	                    elementProperties.push(standardState);

	                    var bondingType = relationalBranches.bondingType;
	                    elementProperties.push(bondingType);

	                    var meltingPoint = relationalBranches.meltingPoint;
	                    elementProperties.push(meltingPoint);

	                    var boilingPoint = relationalBranches.boilingPoint;
	                    elementProperties.push(boilingPoint);

	                    var density = relationalBranches.density;
	                    elementProperties.push(density);

	                    var groupBlock = relationalBranches.groupBlock;
	                    elementProperties.push(groupBlock);

	                    var yearDiscovered = relationalBranches.yearDiscovered;
	                    elementProperties.push(yearDiscovered);

	                    console.log(elementProperties);


	                    function populateResults(){
	                         var div = document.createElement('div');
	                         var titleToAdd = '<h3>'+name+' ('+symbol+')</h3>';
	                         div.setAttribute("id", "name");
	                         div.setAttribute("name", "name");
	                         div.innerHTML = titleToAdd;
	                         document.getElementById('testResults').appendChild(div);

	                         var div = document.createElement('div');
	                         var elementYearDiscovered = '<h4>Year Discovered:'+yearDiscovered+'</h4>';
	                         div.innerHTML = elementYearDiscovered;
	                         document.getElementById('testResults').appendChild(div);

	                         var div = document.createElement('div');
	                         var subtitle = '<h2>Physical Properties</h2>';
	                         div.innerHTML = subtitle;
	                         document.getElementById('testResults').appendChild(div);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Atomic Number: </b>'+atomicNumber+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Atomic Mass: </b>'+atomicMass+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Electronic Configuration: </b>'+electronicConfiguration+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Electronegativity: </b>'+electronegativity+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Atomic Radius: </b>'+atomicRadius+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Ion Radius: </b>'+ionRadius+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>van Del Waal\'s Radius: </b>'+vanDelWaalsRadius+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Ionization Energy: </b>'+ionizationEnergy+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Electron Affinity: </b>'+electronAffinity+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Oxidation States: </b>'+oxidationStates+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Standard State: </b>'+standardState+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Bonding Type: </b>'+bondingType+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Melting Point: </b>'+meltingPoint+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Boiling Point: </b>'+boilingPoint+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Density: </b>'+density+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Group Block: </b>'+groupBlock+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);

	                         var list = document.createElement('ul');
	                         var listItem = '<li><b>Electron Affinity: </b>'+electronAffinity+'</li>';
	                         list.innerHTML = listItem;
	                         document.getElementById('testResults').appendChild(list);
	                    }


	                    populateResults();
	                    wikiQuery(name);

	                    
	               }
	          }
	     });
	</script>
</body>
</html>
