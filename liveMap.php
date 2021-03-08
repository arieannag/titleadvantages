<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <meta charset="utf-8">
  <title>Live Maps</title>
  <link rel="stylesheet" href="css/old-styles.css">
  <style type="text/css">
    .mapSerchBox {
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }
  </style>
</head>

<body bgcolor="#ffffff">
  <div class="wrapper">
    <!-- top navigation bar -->

    <div class="topnav" style="background-color: rgba(255,130,68,0.9);">
      <div style="height: 48px; min-width: 640px;">
        <a href="index.php">
          <div class="wtext" style="display: inline-block; vertical-align: middle; font-size:14px; text-align:left; width: 33%; height:44px; min-width: 300px;">
            <img src="img/octbanlogo_wt.png" border="0" style="margin-left: 8px; max-height: 36px; vertical-align:middle;" />Orange Coast Title Company
          </div>
        </a>
        <div style="display:inline-block; width: 32%; text-align:middle; height:44px; vertical-align:middle; min-width:300px; padding-top: 10px;">
          <center><input id="pac-input" class="mapSearchBox" type="text" size="26" style="border-radius: 5px; font-size:14px; color:#888888; border-style: none; padding: 6px; vertical-align: middle;" placeholder="Search for area" onkeypress="return searchKeyPress(event);" />
            <a id="searchButton"><img src="img/search2.png" width="21" height="21" border="0" style="margin-left: 2px; vertical-align:middle;" /></a>
          </center>
        </div>
        <div style="display:inline-block; vertical-align: middle; text-align:right; width: 32%; height:44px;">
          <img class="livemaplogo" src="img/livemaplogo2.png">
        </div>
      </div>
    </div>
    <!-- map area -->
    <div class="maincontent">
      <!-- Map panel -->
      <div id="googleMap"></div>
      <!-- Side drawer -->
      <div class="sidenav">

        <!-- div will be appended here from javascript -->
        <div style="margin: 0 auto; z-index: 500;">
          <div id="filterDrop" onclick="setFilter();" style="cursor:pointer; background-color: #7e7e7e; padding: 10px;">
            <div style="float: left; font-family: 'Raleway', sans-serif; font-size:20px; color:#161616; font-weight: bold;">Filter</div>
            <div class="arrow-down" style="float: right;" id="up"></div>
            <div class="arrow-up" style="float: right; display: none" id="down"></div>
            <div id="filterTextPlaceHolder" style="height: 20px;"></div>
          </div>
          <div class="filterspanel" id="filterspanel" style="padding: 8px;">
            <input style="border: 2px solid #DCDCDC; font-size:14px; padding: 5px; width: 100%; margin-bottom: 10px" type="text" id="filterByName" oninput="filterByName()" placeholder="Name">

            <div class="btext" style="margin-bottom: 5px;">Turnover Rate Range:</div>
            <div style="margin: 0 auto;">
              <input style="border: 2px solid #DCDCDC; font-size:14px; padding: 5px; width: 40%; " type="text" id="filterByTRMin" oninput="filterByName();" placeholder="Min">
              <input style="border: 2px solid #DCDCDC; font-size:14px; padding: 5px; width: 40%; " type="text" id="filterByTRMax" oninput="filterByName();" placeholder="Max">
            </div>

            <div class="btext" style="padding-top: 15px">Type:</div>
            <select style="margin-top: 5px; margin-bottom: 15px; width: 100%; padding: 5px; font-size: 14px; height: 30px" id="typeSelected" onchange="filterByName();">
              <option value="All" selected="selected">All</option>
              <option value="Neighborhood">Neighborhood</option>
              <option value="Subdivision">Subdivision</option>
              <option value="Tract">Tract</option>
            </select>

            <input class="btext" type="button" name="clear" value="Clear" style="width: 100%; margin: 0 auto;" onclick="clearBtn();" />
          </div>

        </div>

        <div class="listView" id="listView">
        </div>
      </div>

      <!-- detail nav -->
      <div id="detialnav" class="detailnav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeDetailNav()"> &lt; Back</a><br><br>
        <div class="btext" id="polyname" style="color:#538CD5; padding: 30px; text-align: center; background-color: rgb(238, 238, 238); font-weight: bold;">Polygon Name</div>

        <!-- detail information -->
        <div class="btext" style="margin: 15px;">
          <div style="margin-bottom: 10px; font-size: 14px;">
            Polygon Type: <br><span id="type" style="color:#538CD5; font-weight: bold; font-size: 16px;">-</span>
          </div>
          <!-- <div style="margin-bottom: 10px; font-size: 14px;">
						Zipcode: <br><span id="zipcode" style="color:#538CD5; font-weight: bold; font-size: 16px;">-</span>
					</div> -->
          <div style="margin-bottom: 10px; font-size: 14px;">
            Number of properties: <br><span id="propNum" style="color:#538CD5; font-weight: bold; font-size: 16px;">-</span>
          </div>
          <div style="margin-bottom: 10px; font-size: 14px;">
            Owner Occupancy: <br><span id="occ" style="color:#538CD5; font-weight: bold; font-size: 16px;">-</span>
          </div>
          <div style="margin-bottom: 10px; font-size: 14px;">
            Turnover Rate: <br><span id="trate" style="color:#538CD5; font-weight: bold; font-size: 16px;">-</span>
          </div>

          <div class="" style="text-align: center;">
            <input type="button" Value="Create Farm" class="ctrBtn" name="CreateFarm" id="btn_createFarm"  onClick="createFarmBtn();" />
            <input type="button" Value="Turnover History" class="ctrBtn" name="CreateFarm" id="btn_turnover"  onClick="viewTurnoverHistory();" />
            <BR>
            <img src="img/Double Ring-4.3s-120px.gif" alt="Getting your data" style="display: none; text-align: center; width: 80px; height: 80px;" id="loading">
            <div id="turnoverHistory" style="display: none; text-align: center; width: 300px; height:500px">
              <div style="font-weight: bold;"> Turnover Rate Average: </div><BR>
              <div style="text-align: center;">
                <label class="yearLabel">15 years: </label><label class="valueLabel" id="15years"></label><BR><BR>
                <label class="yearLabel">10 years: </label><label class="valueLabel" id="10years"></label><BR><BR>
                <label class="yearLabel">5 years: </label><label class="valueLabel" id="5years"></label><BR><BR>
                <label class="yearLabel">12 months: </label><label class="valueLabel" id="12months"></label><BR><BR>
              </div>
            </div>

            <div id="marketSnapShotPanel" style="display: none; text-align: center; width: 300px; height:500px">

              <div style="font-weight: bold; margin: 10px 0px 6px 0px;"> Markert Snapshot Name: </div>
              <input type="text" name="snapshotName" id="snapshotName" size="20" style="padding:4px;"><BR>
              <input type="button" value=" Create Snapshot " onClick="createMarketSnapshot();" style="font-size: 18px; margin: 8px; padding: 6px;">
            </div>
          </div>

          <BR>
          <BR>
          <BR>
          <BR>
          <BR>
        </div>
      </div>
    </div>

  </div>


  <script>
    //debugger;
    var data = [];
    var allPolygons = [];
    var cell = document.getElementById("listView");
    var allPolygons = [];
    var polygon = new Object();
    var isSaved = false;
    var storedPolygon = [];
    var clickedPoly;
    var selectedPoly;
    var arrPolygonName = [];
    var map;
    var firstLoad = true;
    var firstChar = true;
    var geocoder;
    var zipcode = '99507';
    var btn_clickedID;
    var locaterMarker;
    var oldArray = [];
    var deletedPoly = [];
    var filterPanelStatus = 'down';
    var listViewHeight = window.innerHeight - 312;

    function getData(bounds) {

      //make an API call
      var xmlhttp = new XMLHttpRequest();
      var username = 'Kyle Jonas';
      var memberID = '293272';
      var ne = bounds.getNorthEast();
      var sw = bounds.getSouthWest();
      postString = {
        "ylow": sw.lat(),
        "yhigh": ne.lat(),
        "xlow": sw.lng(),
        "xhigh": ne.lng(),
        "key": 4668582
      };
      //debugger;
      console.log("getData Bounds: " + bounds);
      var url = "mobilegetpolymapsenc.asp";

      xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
        //debugger;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          //debugger;
          var jsonObj = JSON.parse(xmlhttp.responseText);
          //console.log(jsonObj)
          //var jsonObj = JSON.parse(dataString);
          data = jsonObj.polygons;

          //parse though json
          if (data) {
            for (var i = 0; i < data.length; i++) {
              var poly = new Object();
              //debugger;
              var eachObj = JSON.parse(window.atob(data[i]));

              poly.ID = eachObj.polyID;
              //poly.dateadded = eachObj.dateadded;
              poly.shapestr = eachObj.shape;
              //poly.addedby = eachObj.addedby;
              //poly.dateedited = eachObj.dateedited;
              //poly.editedby = eachObj.editedby;
              poly.polycolor = eachObj.color;
              poly.polyname = eachObj.polyname;
              poly.subdivisionname = eachObj.subdivisionname;
              poly.tractname = eachObj.tractname;
              poly.neighborhood = eachObj.neighborhood;
              poly.totalproperties = eachObj.totalproperties;
              poly.ownerOccRate = eachObj.ownerOccRate;
              poly.turnoverRate = eachObj.turnoverRate;
              //poly.lastdateupdate = eachObj.lastdateupdate;
              poly.zipcode = eachObj.zipcode;
              poly.polytype = eachObj.polytype;
              poly.isonmap = eachObj.isonmap;
              poly.latitude = eachObj.latitude;
              poly.longitude = eachObj.longitude;
              poly.drawnOnMap = false;

              if (!inArray(eachObj.polyID, allPolygons)) {
                allPolygons.push(poly);
              }

            }
          }
          console.log("length: " + allPolygons.length);
        }

      }
      //debugger;
      xmlhttp.open("POST", url, true);
      xmlhttp.send(JSON.stringify(postString));
    }

    function clearBtn() {
      document.getElementById("filterByName").value = '';
      document.getElementById("filterByTRMin").value = '';
      document.getElementById("filterByTRMax").value = '';
      document.getElementById("typeSelected").selectedIndex = 0;
      redrawAll();
      everything();
    }

    function inArray(id, array) {
      var found = false;
      for (var i = 0; i < array.length; i++) {
        if (array[i].ID == id) {
          found = true;
          break;
        }
      }
      //debugger;
      return found;
    }

    function inPolynameArray(name, array) {
      var found = false;
      for (var i = 0; i < array.length; i++) {
        if (array[i].polyname == name) {
          found = true;
          break;
        }
      }
      //debugger;
      return found;
    }

    // function inTurnoverRateMinArray(turnovermin, array){
    //     var found = false;
    //     for(var i = 0; i < array.length; i++) {
    //         debugger;
    //         var inArray = parseFloat(array[i].turnoverRate);
    //         if (inArray == turnovermin) {
    //             found = true;
    //             break;
    //         }
    //     }
    //     //debugger;
    //     return found;
    // }

    // function inTurnoverRateMaxArray(turnovermin, array){
    //     var found = false;
    //     for(var i = 0; i < array.length; i++) {
    //         var inArray = parseFloat(array[i].turnoverRate);
    //         if (inArray <= turnovermin) {
    //             found = true;
    //             break;
    //         }
    //     }
    //     //debugger;
    //     return found;
    // }

    // function onload(){
    //     initMap();
    //     setTimeout('everything()', 100);
    // }

    function initMap() {
      //location = user_location;
      //console.log("current Location: " + location);

      //initiate google maps in the 'googleMap' HTML element

      geocoder = new google.maps.Geocoder();

      map = new google.maps.Map(document.getElementById('googleMap'), {
        disableDefaultUI: true,
        zoomControl: true,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        mapTypeControl: false,
        tilt: 0,
        // mapTypeControlOptions: {
        //     style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        //     mapTypeIds: [
        //         google.maps.MapTypeId.HYBRID,
        //         google.maps.MapTypeId.ROADMAP,
        //         google.maps.MapTypeId.TERRAIN
        //     ]
        // }
      });

      //debugger;
      if (zipcode) {
        codeAddress(zipcode);
      } else {
        //get a current location
        if (navigator.geolocation) {
          //debugger;
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            //debugger;
            map.setCenter(pos);
            map.setZoom(15);
            everything();

          }, function() {
            console.log("if")
            //handleLocationError(true, map.getCenter());
          });
        } else {
          console.log("else")
          // Browser doesn't support Geolocation
          //handleLocationError(false, map.getCenter());
        }
      }

      document.getElementById('searchButton').addEventListener('click', function() {
        searchAddress(geocoder, map);
      });

      google.maps.Polygon.prototype.Contains = function(point) {
        var crossings = 0,
          path = this.getPath();

        // for each edge
        for (var i = 0; i < path.getLength(); i++) {
          var a = path.getAt(i),
            j = i + 1;
          if (j >= path.getLength()) {
            j = 0;
          }
          var b = path.getAt(j);
          if (rayCrossesSegment(point, a, b)) {
            crossings++;
          }
        }

        // odd number of crossings?
        return (crossings % 2 == 1);

        function rayCrossesSegment(point, a, b) {
          var px = point.lng(),
            py = point.lat(),
            ax = a.lng(),
            ay = a.lat(),
            bx = b.lng(),
            by = b.lat();
          if (ay > by) {
            ax = b.lng();
            ay = b.lat();
            bx = a.lng();
            by = a.lat();
          }
          // alter longitude to cater for 180 degree crossings
          if (px < 0) {
            px += 360;
          }
          if (ax < 0) {
            ax += 360;
          }
          if (bx < 0) {
            bx += 360;
          }

          if (py == ay || py == by) py += 0.00000001;
          if ((py > by || py < ay) || (px > Math.max(ax, bx))) return false;
          if (px < Math.min(ax, bx)) return true;

          var red = (ax != bx) ? ((by - ay) / (bx - ax)) : Infinity;
          var blue = (ax != px) ? ((py - ay) / (px - ax)) : Infinity;
          return (blue >= red);

        }

      };


      //Google Places input
      // var input = document.getElementById('pac-input');
      // var autocomplete = new google.maps.places.Autocomplete(input);

      // // Bind the map's bounds (viewport) property to the autocomplete object,
      // // so that the autocomplete requests use the current map bounds for the
      // // bounds option in the request.
      // autocomplete.bindTo('bounds', map);

      // autocomplete.addListener('place_changed', function() {
      //     place = autocomplete.getPlace();
      //     //debugger;
      //     if (!place.geometry) {
      //         // User entered the name of a Place that was not suggested and
      //         // pressed the Enter key, or the Place Details request failed.
      //         window.alert("No details available for input: '" + place.name + "'");
      //         return;
      //     }

      //     // If the place has a geometry, then present it on a map.
      //     //debugger;
      //     if (place.geometry.viewport) {
      //         map.fitBounds(place.geometry.viewport);
      //          map.setZoom(15);

      //     } else {

      //         map.setCenter(place.geometry.location);
      //         map.setZoom(15);  // Why 17? Because it looks good.

      //     }

      // });






      //center change add listener
      map.addListener('idle', function() {
        //codeAddress(zipcode);
        if (firstLoad) {
          firstLoad = false;
        } else {
          //debugger;
          everything();
        }


      });

      map.addListener('tilesloaded', function() {
        if (firstLoad) {
          firstLoad = false;
        } else {
          //debugger;
          everything();
        }
      });

      // map.addListener('bounds_changed', function(){
      //     debugger;
      //     everything();
      //     // window.setTimeout(function() {  
      //     //   everything()}, 1000); 
      // });

      // map.addListener('center_changed', function(){
      //     debugger;
      //     everything();
      // });
    }

    function searchKeyPress(e) {
      e = e || window.event;
      if (e.keyCode == 13) {
        document.getElementById('searchButton').click();
        return false;
      }

      return true;
    }

    function setFilter() {
      if (filterPanelStatus == "up") {
        document.getElementById("filterspanel").style.display = "block";
        document.getElementById("up").style.display = "none";
        document.getElementById("down").style.display = "block";
        filterPanelStatus = "down";
        listViewHeight = window.innerHeight - 312;
      } else {
        document.getElementById("filterspanel").style.display = "none";
        document.getElementById("up").style.display = "block";
        document.getElementById("down").style.display = "none";
        filterPanelStatus = "up";
        listViewHeight = window.innerHeight - 96;
      }
      document.getElementById("listView").style.height = listViewHeight;
    }

    function filterByName() {
      var polynameChar = document.getElementById("filterByName").value.toLowerCase();
      var minChar = parseFloat(document.getElementById("filterByTRMin").value);
      var maxChar = parseFloat(document.getElementById("filterByTRMax").value);
      var type = document.getElementById("typeSelected").value;
      var bounds = map.getBounds();
      //debugger;
      if (isNaN(maxChar)) {
        maxChar = 100;
      }

      if (isNaN(minChar)) {
        minChar = 0;
      }

      // if(){
      //     polynameChar = '';
      // }

      //debugger;
      if (polynameChar != '' || maxChar || minChar) {
        //remove all the exisiting polyname from the list if any
        var polyNode = document.getElementById("listView");
        while (polyNode.firstChild) {
          polyNode.removeChild(polyNode.firstChild);
        }

        removeAll();

        arrPolygonName = [];
        for (var i = 0; i < allPolygons.length; i++) {
          //var shape_string = allPolygons[i].shapestr;
          var shape = allPolygons[i];
          // parser = new DOMParser();
          // xmlDoc = parser.parseFromString(shape_string,"text/xml");
          // x = xmlDoc.getElementsByTagName("Point");
          var centroid = {
            lat: parseFloat(allPolygons[i].latitude),
            lng: parseFloat(allPolygons[i].longitude)
          };
          //console.log("point list" + x.length);
          if (inBounds(centroid, bounds)) {
            var turnover = parseFloat(allPolygons[i].turnoverRate.substring(0, allPolygons[i].turnoverRate.length - 1));
            var polyName = allPolygons[i].polyname.toLowerCase();
            var thisType = allPolygons[i].polytype;
            //debugger;
            if (type == "All" && minChar == 0 && maxChar == 100 && polynameChar == '') {
              redrawAll();
              populateListView(bounds);
              updateListView();
              break;
            }
            if (type == "All") {
              //redrawAll();
              if (turnover >= minChar && polyName.indexOf(polynameChar) > -1 && turnover <= maxChar) {
                //debugger;
                if (!inPolynameArray(polyName, arrPolygonName)) {
                  arrPolygonName.push(allPolygons[i]);
                  redrawPoly(allPolygons[i].ID);
                  //break;
                }

              }
            } else {
              if (turnover >= minChar && polyName.indexOf(polynameChar) > -1 && turnover <= maxChar && thisType == type) {
                //debugger;
                if (!inPolynameArray(polyName, arrPolygonName)) {
                  arrPolygonName.push(allPolygons[i]);
                  redrawPoly(allPolygons[i].ID);
                  //break;
                }

              }
            }

            //break; 

          } else {
            arrPolygonName.splice(i, 1);
            //debugger;
            var foundPoly = getPolygon(allPolygons[i].ID);
            //deletedPoly.push(foundPoly);
            if (foundPoly) {
              foundPoly.setMap(null);
            }
            //break;
          }













          // for (var j = 0; j < x.length ;j++) {
          //     //debugger;
          //     var point = {lat: parseFloat(x[j].getElementsByTagName("Latitude")[0].childNodes[0].nodeValue), lng: parseFloat(x[j].getElementsByTagName("Longitude")[0].childNodes[0].nodeValue)};
          //     //var something = inBounds(point, bounds);

          // }
        }

        updateListView();
        //redrawPoly();
      } else {
        // arrPolygonName = [];

        // arrPolygonName.push(allPolygons[i]);
        // updateListView();
        redrawAll();
        everything();

      }


    }

    function redrawPoly(id) {
      for (var i = 0; i < storedPolygon.length; i++) {
        //debugger;
        var poly = storedPolygon[i];
        if (poly.id == id) {
          //console.log("id: " & poly.id);
          poly.setMap(map);
        }
      }
    }

    function removeAll() {
      for (var i = 0; i < storedPolygon.length; i++) {
        //debugger;
        var poly = storedPolygon[i];
        if (poly) {
          //console.log("id: " & poly.id);
          poly.setMap(null);
        }
      }
    }

    function redrawAll() {
      for (var i = 0; i < storedPolygon.length; i++) {
        //debugger;
        var poly = storedPolygon[i];
        if (poly) {
          //console.log("id: " & poly.id);
          poly.setMap(map);
        }
      }
    }

    function getPolygon(id) {
      var foundPoly;

      //debugger;
      for (var i = 0; i < storedPolygon.length; i++) {
        var polyID = storedPolygon[i].id;
        if (storedPolygon[i].id == id) {
          foundPoly = storedPolygon[i];
          return foundPoly;
        }
      }
      return;
    }

    function updateListView() {
      arrPolygonName.sort(sortOn("polyname"));
      console.log(arrPolygonName);

      //remove all the exisiting polyname from the list if any
      var polyNode = document.getElementById("listView");
      while (polyNode.firstChild) {
        polyNode.removeChild(polyNode.firstChild);
      }
      for (var p = 0; p < arrPolygonName.length; p++) {
        var eleString = '<div id=' + arrPolygonName[p].ID + ' class=\"cell\" onmouseover=\"divmouseover(&quot;' + arrPolygonName[p].ID + '&quot;);\" onmouseout=\"divmouseout(&quot;' + arrPolygonName[p].ID + '&quot;);\"><span style=\"cursor:pointer\" onclick=\"openDetailNav(&quot;' + arrPolygonName[p].ID + '&quot;);\"><div class=\"squre\" style=\"background: ' + arrPolygonName[p].polycolor + '\" ></div><div class=\"btext\" style=\"margin-left: 30px\">' + arrPolygonName[p].polyname + '</div></span></div>';
        //debugger; 
        cell.insertAdjacentHTML('beforeend', eleString);
        //cell.appendChild(eleString);
      }
      document.getElementById("listView").style.height = listViewHeight;
    }

    function everything() {
      // 3 seconds after the center of the map has changed, go to the server and get the data
      var bounds = map.getBounds();
      arrPolygonName = [];
      var polynameChar = document.getElementById("filterByName").value.toLowerCase();
      var minChar = document.getElementById("filterByTRMin").value;
      var maxChar = document.getElementById("filterByTRMax").value;
      var type = document.getElementById("typeSelected").value;

      // var ne = bounds.getNorthEast();
      // var sw = bounds.getSouthWest();
      // console.log("bounds: " + bounds + " NE lat, lng: " + ne.lat() + ", " + ne.lng() + " SW: " + sw);
      //debugger;
      getData(bounds);
      //iterate through the allPolygon
      if (document.getElementById("sidenav")) {
        document.getElementById("sidenav").display = "inline-block";
      }
      if (allPolygons) {
        populateListView(bounds);
        //here where we display it.
        //debugger;
        updateListView();

      }

      if (polynameChar || minChar || maxChar || type != "All") {
        filterByName();
      } else {
        document.getElementById("filterByName").value = '';
        document.getElementById("filterByTRMin").value = '';
        document.getElementById("filterByTRMax").value = '';
        if (storedPolygon) {
          redrawAll();
        }
      }
      console.log("center: " + map.getCenter());
    }

    // function populateListView(bounds){
    //     for(var i = 0; i < allPolygons.length; i++){
    //         var shape_string = allPolygons[i].shapestr;
    //         var shape = allPolygons[i];
    //         parser = new DOMParser();
    //         xmlDoc = parser.parseFromString(shape_string,"text/xml");
    //         x = xmlDoc.getElementsByTagName("Point");
    //         //console.log("point list" + x.length);
    //         for (var j = 0; j < x.length ;j++) {
    //             //debugger;
    //             var point = {lat: parseFloat(x[j].getElementsByTagName("Latitude")[0].childNodes[0].nodeValue), lng: parseFloat(x[j].getElementsByTagName("Longitude")[0].childNodes[0].nodeValue)};
    //             //var something = inBounds(point, bounds);
    //             if(inBounds(point, bounds)){
    //                 //console.log(allPolygons[i].polyname);
    // //                   var el = document.getElementById('listView');
    //                 // while ( el.firstChild ) el.removeChild( el.firstChild );
    //                 if(!allPolygons[i].drawnOnMap){
    //                     drawPolygon(x, shape);
    //                     allPolygons[i].drawnOnMap = true;
    //                     //debugger;
    //                     if(!inArray(shape.ID, arrPolygonName)){
    //                         arrPolygonName.push(allPolygons[i]);  
    //                     }
    //                     break;
    //                 }else{
    //                     //debugger;
    //                     if(!inArray(shape.ID, arrPolygonName)){
    //                         arrPolygonName.push(allPolygons[i]);  
    //                     }

    //                     break;
    //                     var cellExist = document.getElementById(allPolygons[i].ID);
    //                     if(!cellExist){
    //       //                var eleString = '<div id='+ shape.ID +' class=\"cell\" onmouseover=\"divmouseover(&quot;'+shape.ID+'&quot;);\" onmouseout=\"divmouseout(&quot;'+shape.ID+'&quot;);\"><span style=\"cursor:pointer\" onclick=\"openDetailNav(&quot;'+shape.ID+'&quot;);\"><div class=\"squre\" style=\"background: ' + shape.polycolor + '\" ></div><div class=\"btext\" style=\"margin-left: 30px\">' + shape.polyname + '</div></span></div>';
    //                         // //debugger; 
    //                         // cell.insertAdjacentHTML( 'beforeend', eleString );


    //                     }
    //                 }

    //             }else{
    //                 // var removeCell = document.getElementById(allPolygons[i].ID);
    //                 // if(removeCell){
    //                 //  removeCell.parentNode.removeChild(removeCell);
    //                 // }
    //                 //debugger;
    //                 if(!inArray(shape.shapeID, arrPolygonName)){
    //                     arrPolygonName.splice(i,1);
    //                 }
    //             }
    //             // }else{
    //             //  // var removeCell = document.getElementById(allPolygons[i].ID);
    //             //  // if(removeCell){
    //             //  //  debugger;
    //             //  //  removeCell.parentNode.removeChild(removeCell);
    //             //  // }
    //             // }
    //         }
    //     }
    // }

    function populateListView(bounds) {
      for (var i = 0; i < allPolygons.length; i++) {
        var centroid = {
          lat: parseFloat(allPolygons[i].latitude),
          lng: parseFloat(allPolygons[i].longitude)
        };
        var shape_string = allPolygons[i].shapestr;
        var shape = allPolygons[i];
        parser = new DOMParser();
        xmlDoc = parser.parseFromString(shape_string, "text/xml");
        //debugger;
        x = xmlDoc.getElementsByTagName("Point");
        //debugger;
        //console.log("point list" + x.length);
        if (inBounds(centroid, bounds)) {
          //console.log(allPolygons[i].polyname);
          //                   var el = document.getElementById('listView');
          // while ( el.firstChild ) el.removeChild( el.firstChild );
          if (!allPolygons[i].drawnOnMap) {
            drawPolygon(x, shape);
            allPolygons[i].drawnOnMap = true;
            //debugger;
            if (!inArray(shape.ID, arrPolygonName)) {
              arrPolygonName.push(allPolygons[i]);
            }
            //break;
          } else {
            //debugger;
            if (!inArray(shape.ID, arrPolygonName)) {
              arrPolygonName.push(allPolygons[i]);
            }

            //break;
            var cellExist = document.getElementById(allPolygons[i].ID);
            if (!cellExist) {
              //                var eleString = '<div id='+ shape.ID +' class=\"cell\" onmouseover=\"divmouseover(&quot;'+shape.ID+'&quot;);\" onmouseout=\"divmouseout(&quot;'+shape.ID+'&quot;);\"><span style=\"cursor:pointer\" onclick=\"openDetailNav(&quot;'+shape.ID+'&quot;);\"><div class=\"squre\" style=\"background: ' + shape.polycolor + '\" ></div><div class=\"btext\" style=\"margin-left: 30px\">' + shape.polyname + '</div></span></div>';
              // //debugger; 
              // cell.insertAdjacentHTML( 'beforeend', eleString );


            }
          }

        } else {
          // var removeCell = document.getElementById(allPolygons[i].ID);
          // if(removeCell){
          //  removeCell.parentNode.removeChild(removeCell);
          // }
          //debugger;
          if (!inArray(shape.shapeID, arrPolygonName)) {
            arrPolygonName.splice(i, 1);
          }
        }
      }
    }



    function drawPolygon(shape_string, shape) {
      var polygonCoords = [];
      var pointcheck;
      debugger;
      for (var j = 0; j < shape_string.length; j++) {
        var latlng = {
          lat: parseFloat(shape_string[j].getElementsByTagName("Latitude")[0].childNodes[0].nodeValue),
          lng: parseFloat(shape_string[j].getElementsByTagName("Longitude")[0].childNodes[0].nodeValue)
        };
        if (j == parseInt((shape_string.length / 2), 10)) {
          pointcheck = new google.maps.LatLng(parseFloat(shape_string[j].getElementsByTagName("Latitude")[0].childNodes[0].nodeValue), parseFloat(shape_string[j].getElementsByTagName("Longitude")[0].childNodes[0].nodeValue));
        }
        polygonCoords.push(latlng)
      }

      if (shape.polytype == "Custom") {

        var finishedPolygon = new google.maps.Polygon({
          paths: polygonCoords,
          id: shape.ID,
          strokeColor: shape.polycolor,
          strokeWeight: 2,
          fillColor: shape.polycolor,
          fillOpacity: 0.35,
          zIndex: 10
        });
        finishedPolygon.setMap(map);
      } else {
        var finishedPolygon = new google.maps.Polygon({
          paths: polygonCoords,
          id: shape.ID,
          strokeColor: shape.polycolor,
          strokeWeight: 2,
          fillColor: shape.polycolor,
          fillOpacity: 0.35
        });
        finishedPolygon.setMap(map);
      }

      //add to the listView
      // var eleString = '<div id='+ shape.ID +' class=\"cell\" onmouseover=\"divmouseover(&quot;'+shape.ID+'&quot;);\" onmouseout=\"divmouseout(&quot;'+shape.ID+'&quot;);\"><span style=\"cursor:pointer\" onclick=\"openDetailNav(&quot;'+shape.ID+'&quot;);\"><div class=\"squre\" style=\"background: ' + shape.polycolor + '\" ></div><div class=\"btext\" style=\"margin-left: 30px\">' + shape.polyname + '</div></span></div>';
      // //debugger; 
      // cell.insertAdjacentHTML( 'beforeend', eleString );



      //store the polgon in the array 
      storedPolygon.push(finishedPolygon);

      //loop though storedPolygon
      if (storedPolygon.length > 2) {
        for (var p = 0; p < storedPolygon.length; p++) {
          var thispoly = storedPolygon[p];
          if (thispoly.id != shape.ID) {
            var isWithinPolygon = thispoly.Contains(pointcheck);
            if (isWithinPolygon) {
              if (google.maps.geometry.spherical.computeArea(finishedPolygon.getPath()) < google.maps.geometry.spherical.computeArea(thispoly.getPath())) {
                finishedPolygon.setOptions({
                  zIndex: 100
                });
              } else {
                finishedPolygon.setOptions({
                  zIndex: 100
                });
              }
            }
          }
        }
      }

      google.maps.event.addListener(finishedPolygon, 'click', function(event) {
        //this.id will get your the clicked polygon
        //change back the previously clicked polygon
        debugger;
        unFocusePolygon();
        console.log(this.id);
        closeDetailNav();
        openDetailNav(this.id);
      });

      google.maps.event.addListener(finishedPolygon, "mouseover", function() {
        highligthPolyname(this.id);
        document.getElementById(this.id).scrollIntoView();
        focusePolygon(this.id);
      });

      google.maps.event.addListener(finishedPolygon, "mouseout", function() {
        unhighligthPolyname(this.id);
        unFocusePolygon();
      });
    }

    function sortOn(property) {
      return function(a, b) {
        if (a[property] < b[property]) {
          return -1;
        } else if (a[property] > b[property]) {
          return 1;
        } else {
          return 0;
        }
      }
    }

    //function that checks if each point is within the bounds
    function inBounds(point, bounds) {
      var eastBound = point.lng < bounds.getNorthEast().lng();
      var westBound = point.lng > bounds.getSouthWest().lng();
      var inLong;

      if (bounds.getNorthEast().lng() < bounds.getSouthWest().lng()) {
        inLong = eastBound || westBound;
      } else {
        inLong = eastBound && westBound;
      }

      var inLat = point.lat > bounds.getSouthWest().lat() && point.lat < bounds.getNorthEast().lat();
      return inLat && inLong;
    }

    function openDetailNav(shapeID) {
      debugger;
      // //check if the previous polygon has been selected
      // if(selectedPoly){
      // 	console.log(selectedPoly.id);
      // 	selectedPoly.setMap(null);
      // }
      document.getElementById("detialnav").style.width = "20%";
      var shape;
      //get shape object from the collection
      for (var i = 0; i < allPolygons.length; i++) {
        var clickedID = allPolygons[i].ID;
        if (clickedID == shapeID) {
          debugger;
          shape = allPolygons[i];
        }
      }
      btn_clickedID = shapeID;
      debugger;
      document.getElementById("polyname").innerText = shape.polyname;
      document.getElementById("type").innerText = shape.polytype;
      //document.getElementById("zipcode").innerText = shape.zipcode;
      document.getElementById("propNum").innerText = shape.totalproperties;
      document.getElementById("occ").innerText = shape.ownerOccRate;
      document.getElementById("trate").innerText = shape.turnoverRate;
      //document.getElementsByClassName("btn_createFarm")[0].setAttribute("id", shapeID);

      //highlight the polygon
      //focusePolygon(shapeID);
      // document.getElementById("propNum").innerText = shape.totalproperties;
      // document.getElementById("occ").innerText = shape.owneroccupiedprops;
      // document.getElementById("trate").innerText = shape.soldinlastyearprops;

      //selectedPoly.setMap(map);

    }

    function closeDetailNav() {
      debugger;
      document.getElementById("detialnav").style.width = "0";
      document.getElementById("turnoverHistory").style.display = "none";
      document.getElementById("loading").style.display = "none";
      unFocusePolygon();

    }

    function focusePolygon(shapeID) {
      //debugger;
      for (var i = 0; i < allPolygons.length; i++) {
        var clickedID = allPolygons[i].ID;
        if (clickedID == shapeID) {
          //debugger;
          selectedPolygon(allPolygons[i].shapestr, shapeID);
        }
      }
      // for(var i = 0; i < storedPolygon.length; i++ ){
      //        var clickedID = storedPolygon[i].get('id'); 
      //        //debugger;
      //        if (clickedID == shapeID){
      //            storedPolygon[i].setOptions({strokeWeight:6});
      //        }
      //    }
    }

    function unFocusePolygon() {
      clearSelectedPolygon();
      // for(var i = 0; i < storedPolygon.length; i++ ){
      //        var clickedID = storedPolygon[i].get('id'); 
      //        //debugger;
      //        if (clickedID == shapeID){
      //            storedPolygon[i].setOptions({strokeWeight:2});
      //        }
      //    }
    }

    function divmouseover(shapeID) {
      highligthPolyname(shapeID);
      focusePolygon(shapeID);
    }

    function divmouseout(shapeID) {
      unhighligthPolyname(shapeID);
      unFocusePolygon();
    }

    function highligthPolyname(shapeID) {
      if (document.getElementById(shapeID)) {
        document.getElementById(shapeID).style.border = "2px solid #555555";
      }
    }

    function unhighligthPolyname(shapeID) {
      if (document.getElementById(shapeID)) {
        document.getElementById(shapeID).style.border = "none";
      }
    }

    function selectedPolygon(shapestr, sID) {
      parser = new DOMParser();
      xmlDoc = parser.parseFromString(shapestr, "text/xml");
      x = xmlDoc.getElementsByTagName("Point");
      var polygonCoords = [];
      //debugger;
      for (var j = 0; j < x.length; j++) {
        var latlng = {
          lat: parseFloat(x[j].childNodes[0].textContent),
          lng: parseFloat(x[j].childNodes[1].textContent)
        }
        polygonCoords.push(latlng)
      }

      if (selectedPoly) {
        selectedPoly.setMap(null);
      }

      selectedPoly = new google.maps.Polygon({
        paths: polygonCoords,
        id: 0001,
        strokeColor: "#FFFF00",
        strokeWeight: 10,
        zIndex: -99
      });
      selectedPoly.setMap(map);
    }

    function clearSelectedPolygon() {
      //debugger;
      if (selectedPoly) {
        selectedPoly.setMap(null);
      }

    }

    function createFarmBtn() {
      var jsonStr;

      for (var i = 0; i < allPolygons.length; i++) {
        var clickedID = allPolygons[i].ID;
        if (clickedID == btn_clickedID) {
          jsonStr = {
            "shapeString": allPolygons[i].shapestr
          }
        }
      }
      var teststr = JSON.stringify(jsonStr);
      console.log(teststr);
      debugger;

      localStorage.clear();
      localStorage.setItem("polyData", JSON.stringify(jsonStr));
      window.open("https://www.titleadvantage.com/nd1c/walkingfarms.php?drawType=poly&livemap=1", "_self");
    }

    function showMarketSnapshotPanel() {
      document.getElementById("marketSnapShotPanel").style.display = 'block';
      document.getElementById("snapshotName").value = document.getElementById("polyname").innerText
      console.log("name is currently: " + document.getElementById("polyname").innerText);
    }

    function createMarketSnapshot() {
      //show loading
      document.getElementById("marketSnapShotPanel").style.display = 'none';
      document.getElementById("loading").style.display = "block";

      newURL = "https://www.titleadvantage.com/loadingreport.html";
      var newWindow = window.open(newURL, '_blank');

      var jsonStr;

      for (var i = 0; i < allPolygons.length; i++) {
        var clickedID = allPolygons[i].ID;
        if (clickedID == btn_clickedID) {
          jsonStr = {
            "Polygons": allPolygons[i].shapestr
          }
        }
      }
      jsonStr["reportName"] = document.getElementById("snapshotName").value;
      jsonStr["memberID"] = "293272";
      jsonStr["username"] = "Kyle Jonas";
      jsonStr["reportType"] = "poly";
      var snapData = JSON.stringify(jsonStr);
      console.log("creating market snapshot");
      console.log(snapData);

      xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "https://www.titleadvantage.com/api/api_dtCreateMarketSnapshot.cshtml", true);
      xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          var returned_data = xmlhttp.responseText;
          console.log("dt got back: " + returned_data);
          var jsonObj = JSON.parse(returned_data);
          var newSnapshotID = jsonObj.snapshotID;
          var reportURL = "https://www.titleadvantage.com/nd1c/MarketSnapshot/index_serverdata.php?mid=293272&msid=" + newSnapshotID;
          console.log("reportURL: " + reportURL);
          newWindow.location.replace(reportURL);
          //newWindow.open(reportURL);
          document.location.href = "index.php";
        }
      };
      xmlhttp.send(snapData);
    }


    function searchAddress(geocoder, resultsMap) {
      //debugger;
      //closeDetailNav();
      var address = document.getElementById('pac-input').value;

      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
          debugger;
          resultsMap.setCenter(results[0].geometry.location);
          if (locaterMarker) {
            locaterMarker.setMap(null);
          }
          locaterMarker = new google.maps.Marker({
            map: resultsMap,
            position: results[0].geometry.location
          });
          map.setZoom(15);
        } else {
          //alert('Geocode was not successful for the following reason: ' + status);
          if (address) {
            alert('Entered address is not a valid address!!!');
          } else {
            alert('No address to center the map."');
          }
        }
      });
    }

    function codeAddress(zipCode) {
      geocoder.geocode({
        'address': zipCode
      }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          //Got result, center the map and put it out there
          debugger;
          map.setCenter(results[0].geometry.location);
          map.setZoom(15);
          everything();
          // var marker = new google.maps.Marker({
          //     map: map,
          //     position: results[0].geometry.location
          // });
        } else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }

    function viewTurnoverHistory() {
      debugger;
      var username = 'Kyle Jonas';
      var memberID = '293272';
      document.getElementById("loading").style.display = "block";
      var url = "https://www.titleadvantage.com/mobilefarmturnoverstats.asp";
      var shapeString;
      for (var i = 0; i < allPolygons.length; i++) {
        var clickedID = allPolygons[i].ID;
        if (clickedID == btn_clickedID) {
          shapeString = allPolygons[i].shapestr;
        }
      }
      console.log("shape: " + shapeString);
      var postJson = {
        "Polygons": shapeString,
        "username": username,
        "memberID": memberID
      }

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
        //         debugger;
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          var jsonObj = JSON.parse(xmlhttp.responseText);
          var statusValue = jsonObj.Status;

          if (statusValue == "Success") {
            document.getElementById("loading").style.display = "none";
            document.getElementById("12months").innerText = jsonObj.turnoverrate1year + "%";
            document.getElementById("5years").innerText = jsonObj.turnoverrate5year + "%";
            document.getElementById("10years").innerText = jsonObj.turnoverrate10year + "%";
            document.getElementById("15years").innerText = jsonObj.turnoverrate15year + "%";
            document.getElementById("trate").innerText = jsonObj.turnoverrate1year + "%";
            document.getElementById("turnoverHistory").style.display = "inline-block";
          }
        }
      }


      xmlhttp.open("POST", url, true);
      xmlhttp.send(JSON.stringify(postJson));


    }
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARVUySVCWKUpHJ_SKB9fZGXii3fpE3qsA&v=3&callback=initMap&libraries=drawing"></script>
</body>
</html>