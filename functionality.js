/* next step: post data that is in the script tag at the bottom of index.html to a new js file that
handles the results.html functionality, then find a way to sort though the json database by the 
elements name and come out with the info about the element*/


$( document ).ready(function() 
{
     var queryInput = <?php echo($_POST['queryInput']);?>;
     var searchOption = <?php echo($_POST['searchOption']);?>;

     console.log(queryInput);
     console.log(searchOption);
     /*
    function search() 

     {
          document.getElementById('searchResults').innerHTML = ""

          var selectVal = document.getElementById('searchOption').value;

          var matches = []; 
          $.getJSON("data/data.json", function(json) {
               for (var i = 0; i < json.length; i++) {
                    var inputVal = document.getElementById('queryInput').value;
                    inputVal = String(inputVal);
                    var lowerString = inputVal.toLowerCase();
                    var keywords = String(json[i][selectVal]).toLowerCase();

                    var keyMatches = keywords.match(lowerString);

                    if (keyMatches != null) {
                         matches.push(i);
                    }
               }
               console.log(matches);  

               if (matches.length != 0) {
                    for (var i = 0; i < matches.length; i++) {
                         console.log("For loop excuted");
                         var arrayId = matches[i];
                         var elementProperties = []; 

                         var relationalBranches = json[arrayId];
                         console.log(relationalBranches);

                         // TODO: FIND A BUILTIN THAT CAN FIND THE PROPERTY NAME OF JSON DATA

                         // THEN BUILD A FOR LOOP THAT CYCLES THOUGH THE NAMES AND ASIGNS A UNQUIE VARIABLE NAME TO ALL PROPERTIES 

                         var atomicNumber = relationalBranches.atomicNumber;
                         elementProperties.push(atomicNumber);

                         var symbol = relationalBranches.symbol;
                         elementProperties.push(symbol);

                         var name = relationalBranches.name;
                         elementProperties.push(name);

                         var atomicMass = relationalBranches.atomicMass;
                         elementProperties.push(atomicMass);
                         var cpkHexColor = relationalBranches.cpkHexColor;
                         elementProperties.push(cpkHexColor);
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

                         var div = document.createElement('div');
                         var nameToAdd = '<h4 onclick=postDataToPHP('+name+') id="'+name+'">'+name+'</h4>';
                         div.innerHTML = nameToAdd;
                         document.getElementById('searchResults').appendChild(div);
                    }
               }
               var div = document.createElement('div');
               var titleToAdd = '<h2 style="text-align: center;">Search Results</h2>';
               div.setAttribute("id", "lastFavoriteTitle");
               div.innerHTML = titleToAdd;
               document.getElementById('searchResults').appendChild(div);

               
          });
     }
     search();
     */
});


