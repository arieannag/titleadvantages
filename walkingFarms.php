<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Title Advantage</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/stylefile-oct.css">
  <style>
    #fade {
      display: none;
      position: fixed;
      top: 0%;
      left: 0%;
      width: 100%;
      height: 100%;
      background-color: #ababab;
      z-index: 1001;
      -moz-opacity: 0.8;
      opacity: .70;
      filter: alpha(opacity=80);
    }

    #bright {
      display: none;
      position: fixed;
      top: 40%;
      left: 40%;
      width: 64px;
      height: 64px;
      padding: 30px 15px 0px;
      /*border: 3px solid #ababab;
	    box-shadow:1px 1px 10px #ababab;
	    border-radius:20px;*/
      background-color: white;
      z-index: 1002;
      text-align: center;
      overflow: auto;
    }

    #firstline {
      font-size: 25px;
      font-weight: 600;
      text-align: center;
    }

    #turnover {
      text-align: center;
      font-size: 20px;
      margin-top: 20px;
    }

    #ownerocc,
    #rest {
      display: block;
      text-align: center;
      font-size: 20px;
      margin: 10px auto;
    }

    #revise {
      border: 1px solid #000;
      color: #000;
      background: #fff;
    }

    #filterBedMin,
    #filterBedMax,
    #filterBathMin,
    #filterBathMax {
      width: 100px;
      margin: 25px auto;
    }
  </style>
  <script>
    var ocodeString = "oct";
    var repInfo = {
      "repID": "1178",
      "repName": "Danny Arguelles",
      "email": "dannya@octitle.com",
      "photo": "Danny Arguelles.jpg",
      "phone": "760-337-2988",
      "mobilePhone": "760-604-2232"
    }
    var agName = "";
  </script>
</head>

<body onload="settheme();">
  <!-- include here -->
  <!-- BEGIN TOP NAV -->
  <div id="topbar">
    <a href="index.php">
      <div id="home">
        <img src="img/home-icon.png" alt="Home Icon">
      </div>
    </a>
    <div id="companyLogo">
      <img src="img/TA-OCT.png" alt="Orange Coast Title Company">
    </div>
    <div id="repNameTop">
      <p>Your Representative</p>
    </div>
    <div class="dropdown" id="dropdown">
      <button onclick="dropdown()" class="dropbtn" id="dropbtn"><img src="img/user-icon.png" alt="User Icon"></button>
      <div id="userDropdown" class="dropdown-content drop-move ">

        <!-- <a href="userSettings.php"> User Settings </a> -->

        <!--
          ADDED ID AND DROPREPPHOTO * 2/10/20 *
          Replace the whole dropdown to be safe
        -->

        <a href="contactrep.php" id="dropRepBtn">Contact Rep

          <div id="dropRepCont">
            <div id="dropRepPhoto"></div>
            <h4 id="dropRepName"> Representative <br> Name</h4>
          </div>
        </a>

        <br>
        <!-- <a href="logout.php" style="border-radius: 0px 0px 10px 10px;">Log Out</a> -->
      </div>
    </div>
  </div>
  <div class="grid-container" id="grid-container">
    <!-- END TOP NAV -->

    <!-- end include -->

    <!-- include here -->
    <!-- BEGIN SIDE NAV -->
    <nav>
      <a href="properties.php">
        <div class="navitem" id="navitem1">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210.13 211.21">
            <defs></defs>
            <title>property-icon</title>
            <path class="cls-1" d="M210.12,5.43V.29c-1.32-.13-1.81-.21-2.31-.21C154.65.07,101.49-.14,48.33.15,21.84.3.06,22.83,0,49.3q-.08,78.5,0,157v4.63c1.34.13,1.83.21,2.33.21,53.16,0,106.32.22,159.48-.08,26.54-.15,48.26-22.64,48.29-49.13Q210.17,83.68,210.12,5.43ZM105.06,177.07c-14.47-14.47-54-59.17-54-89A54,54,0,0,1,159,88.1C159,117.9,120.21,161.93,105.06,177.07Z" />
            <path class="cls-1" d="M105.06,60.65a22.72,22.72,0,1,0,22.72,22.72A22.72,22.72,0,0,0,105.06,60.65Z" />
          </svg>
          <p>Properties</p>
        </div>
      </a>
      <a href="farms.php">
        <div class="navitem" id="navitem2">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 209.84 210.04">
            <defs></defs>
            <title>farms-icon</title>
            <path class="cls-1" d="M209.83.58V5.65q0,76.47,0,153c0,28.79-21.63,51.12-50.42,51.28-52,.28-104,.08-156,.07-1,0-1.94-.12-3.21-.2-.09-1.83-.24-3.44-.24-5q0-76.47.09-153C.14,22.94,20.48.73,49.18.36c53-.68,106-.19,158.94-.17A11.83,11.83,0,0,1,209.83.58Zm-143,188.56C78,171.85,89.72,156,95.35,136.06c7.33,8.47,14.37,15.53,15.39,26.58.64,6.87,2.92,13.61,4.64,20.36.31,1.22,1.44,3.15,2.26,3.18,6.72.26,13.46.15,20.55.15-1.05-7.14-2.07-13.5-2.91-19.9-1.79-13.49-3.55-26.92-11.33-38.72-3.1-4.68-5.33-9.94-7.93-14.95-3.73-7.19-3.32-10.32,1.55-16.17,5.46,3.23,10.56,6.85,16.16,9.38a90.6,90.6,0,0,0,18.4,6.07c2.74.58,7.07-.44,8.79-2.39,2.58-2.94-.09-8.18-4.2-10.25-6.38-3.21-12.7-6.52-19.16-9.55-2.88-1.34-4.36-3-4.33-6.36a21.9,21.9,0,0,0-5-14.71,82.88,82.88,0,0,1-4.84-7.19c13.07-8.66,17-21.45,10.44-32.82C127.75,18.21,113.88,14.28,103,20c-12,6.33-14.79,19.11-7.67,34.62-2.44.37-5.22.2-7.41,1.25-9,4.29-17.85,8.85-26.59,13.61a7.27,7.27,0,0,0-3.42,4.76c-1.22,11.18-2.05,22.41-3,34.06,3.33.3,6.46.39,9.5.92,2.84.48,4.28-.44,5.14-3.17,1.34-4.26,3.06-8.4,4.46-12.64s4.65-6.4,9.51-8c-6.36,20-12.19,39.3-18.73,58.39-3.37,9.84-8.09,19.22-12,28.9-.54,1.34-.47,3.85.4,4.68C57.31,181.36,61.85,184.94,66.83,189.14Z" />
          </svg>
          <p>Farms</p>
        </div>
      </a>
      <a href="netadvantage.php" id="navitem3">
        <div class="navitem">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210.1 211.16">
            <defs></defs>
            <title>net-icon</title>
            <path class="cls-1" d="M0,210.79v-5.67Q0,127.89,0,50.64C0,22.05,21.84.07,50.42,0q77.49-.11,155,0h4.69V5.51q0,78.22,0,156.47c0,26.23-21.61,48.8-47.89,49-53.32.37-106.65.12-160,.11C1.73,211.07,1.24,211,0,210.79ZM170.26,39H43V166.11H170.26Z" />
            <path class="cls-1" d="M81.13,51H156v75H81.13Z" />
          </svg>
          <p>Net Advantage</p>
        </div>
      </a>
      <a href="calculators.php">
        <div class="navitem" id="navitem4">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210.12 211.18">
            <defs>

            </defs>
            <title>calc-icon</title>
            <path class="cls-1" d="M210.11.22v55q0,53.07,0,106.15a49.51,49.51,0,0,1-49.22,49.76c-52.33.17-104.66,0-157,0-1.12,0-2.25-.09-3.89-.17v-5.11q0-78,0-156A49.55,49.55,0,0,1,49.24.09c52.33-.17,104.66,0,157,0C207.36,0,208.48.14,210.11.22Zm-47.7,103.89c0-18.92,0-37.84,0-56.76,0-7.93-3.61-11.47-11.62-11.48q-46.8,0-93.6,0c-7.93,0-11.45,3.6-11.45,11.65q0,56,0,112c0,8.27,3.53,11.74,11.88,11.75q46.54,0,93.1,0c8.23,0,11.69-3.56,11.71-11.93Q162.44,131.74,162.41,104.11Z" />
            <path class="cls-1" d="M104.11,74.47q-20.89,0-41.79,0c-5.69,0-7-1.3-7.1-7-.08-5,0-10,0-14.93,0-4.19,1.74-6.44,6.26-6.43q42.54.1,85.07,0c4.46,0,6.38,2.06,6.38,6.32,0,5.31,0,10.61,0,15.92,0,4.31-2.11,6.22-6.51,6.19C132.3,74.4,118.21,74.47,104.11,74.47Z" />
            <path class="cls-1" d="M135.6,137.21c0-4.64-.13-9.29,0-13.92.2-5.69,3.88-9.7,8.63-9.69,4.59,0,8.39,3.72,8.54,9.21q.38,14.41,0,28.84c-.14,5.37-4.1,9.28-8.56,9.28s-8.43-4.28-8.61-9.8C135.48,146.49,135.6,141.85,135.6,137.21Z" />
            <path class="cls-1" d="M64,103.29c-4.45.1-8.59-4.19-8.74-9.05s3.64-9.28,8.19-9.51c4.72-.24,9,4.12,9,9.2C72.52,98.67,68.43,103.19,64,103.29Z" />
            <path class="cls-1" d="M90.77,103.28c-4.37.07-8.61-4.33-8.74-9.09s3.78-9.26,8.28-9.46c4.71-.22,9,4.2,9,9.24C99.3,98.7,95.16,103.21,90.77,103.28Z" />
            <path class="cls-1" d="M152.83,93.8c.08,4.85-3.8,9.29-8.3,9.48s-9-4.45-8.91-9.4,4-9.13,8.58-9.16S152.74,88.87,152.83,93.8Z" />
            <path class="cls-1" d="M117.39,84.73c4.55,0,8.57,4.14,8.7,9s-4.25,9.63-8.82,9.5c-4.4-.13-8.49-4.67-8.46-9.38S112.87,84.76,117.39,84.73Z" />
            <path class="cls-1" d="M63.89,132.11c-4.5,0-8.53-4.3-8.61-9.17-.08-5.13,4-9.48,8.83-9.34,4.56.12,8.46,4.46,8.39,9.31S68.3,132.11,63.89,132.11Z" />
            <path class="cls-1" d="M99.31,122.68c.08,4.69-4,9.27-8.4,9.43S82.26,128,82,123.17c-.22-5,3.86-9.57,8.62-9.57C95.25,113.6,99.23,117.78,99.31,122.68Z" />
            <path class="cls-1" d="M117.32,113.6c4.61-.08,8.59,4,8.76,8.94s-4.13,9.64-8.73,9.57c-4.39-.07-8.53-4.57-8.54-9.29S112.76,113.68,117.32,113.6Z" />
            <path class="cls-1" d="M72.5,151.61c0,4.85-4.09,9.29-8.59,9.32s-8.6-4.3-8.61-9.25,3.85-9.2,8.54-9.21S72.48,146.66,72.5,151.61Z" />
            <path class="cls-1" d="M90.48,142.47c4.68-.09,8.71,4,8.83,9,.11,4.77-4,9.34-8.47,9.46s-8.71-4.23-8.81-9.09S85.85,142.57,90.48,142.47Z" />
            <path class="cls-1" d="M126.09,151.53c.08,4.82-4,9.32-8.52,9.39s-8.69-4.34-8.76-9.16,3.9-9.22,8.53-9.29S126,146.53,126.09,151.53Z" />
          </svg>
          <p>Calculators</p>
        </div>
      </a>
      <a href="index.php#moreApps">
        <div class="navitem" id="moreAppsSide">
          <svg id="Layer_1" data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 209.84 210.04">
            <title>moreapps-icon</title>
            <path class="cls-1" d="M79.15,47.05c-4.21-.23-8.42-.43-12.67-.64-4.25.21-8.53.39-12.8.66a6.64,6.64,0,0,0-6.11,6.19c-.11,8.25-.17,16.49,0,24.74.07,4.33,2.71,6.93,7.05,7q12,.21,24,0c4.17-.07,6.66-2.78,7-7,.09-1.42.28-2.85.26-4.27-.09-6.94-.12-13.89-.41-20.83C85.24,49.76,82.28,47.23,79.15,47.05Z" />
            <path class="cls-1" d="M79.27,125.34a144.9,144.9,0,0,0-25.68,0c-2.93.26-5.85,3-6,5.91-.27,4.34-.45,8.68-.67,13,.21,4.17.39,8.27.62,12.36.22,3.74,2.71,6.58,6.48,6.66,8.37.18,16.76.16,25.13,0a6.39,6.39,0,0,0,6.27-5.85,137.75,137.75,0,0,0,0-26.24A6.86,6.86,0,0,0,79.27,125.34Z" />
            <path class="cls-1" d="M156.15,125.34a142.92,142.92,0,0,0-24.91,0c-3.83.33-6.67,2.77-6.74,6.56q-.21,12.47,0,24.92a6.5,6.5,0,0,0,6.29,6.44q12.73.26,25.47,0a6.52,6.52,0,0,0,6.12-6c.27-4.34.45-8.68.67-13-.22-4.28-.41-8.49-.64-12.7A6.74,6.74,0,0,0,156.15,125.34Z" />
            <path class="cls-1" d="M210,4.84V-.3c-1.32-.13-1.81-.21-2.31-.21-53.16,0-106.32-.22-159.48.07C21.69-.29-.09,22.24-.12,48.71q-.08,78.5,0,157v4.63c1.34.13,1.83.21,2.33.21,53.16,0,106.32.22,159.48-.08,26.54-.15,48.26-22.64,48.29-49.13Q210,83.09,210,4.84ZM98.23,160.51c-1.33,8.46-9.37,15.27-17.86,16a172.3,172.3,0,0,1-27.73,0c-8.68-.71-16.52-7.32-17.91-16.34a100.59,100.59,0,0,1,.13-32.3A19.3,19.3,0,0,1,53,112.09c8.92-.31,17.88-.34,26.8,0A19.91,19.91,0,0,1,98.7,131c.27,4.46.48,8.93.76,14.37C99.12,149.76,99.06,155.2,98.23,160.51Zm0-78c-1.33,8.41-9.49,15.17-18,15.76a184.55,184.55,0,0,1-26.81,0c-9.46-.71-17.17-7-18.65-16.36a103.37,103.37,0,0,1,0-31.75A18.93,18.93,0,0,1,51,34.15a107,107,0,0,1,32.3.27c7.77,1.34,14.65,9.14,15.31,17,.4,4.82.53,9.67.84,15.56C99.12,71.46,99.06,77,98.19,82.46Zm77.49,75.62c-.85,10.06-9.14,17.7-19.25,18.44a183.35,183.35,0,0,1-26.62,0c-9.58-.69-18-8.95-18.54-18.49-.26-4.65-.49-9.31-.77-14.76.34-4.54.35-9.92,1.22-15.16a19.47,19.47,0,0,1,18.37-16c8.86-.3,17.75-.31,26.62,0A19.87,19.87,0,0,1,175.54,130,145.76,145.76,0,0,1,175.68,158.08Zm-.05-77.9a20.18,20.18,0,0,1-19.16,18.07c-4.35.12-8.69.44-14.09.73-4.46-.35-10-.41-15.46-1.28-8.31-1.34-15.08-9.52-15.67-17.91a188.47,188.47,0,0,1,0-27c.7-9.39,7.07-17.16,16.45-18.57a102.32,102.32,0,0,1,32.11.12A19.42,19.42,0,0,1,175.44,51,132,132,0,0,1,175.63,80.18Z" />
            <path class="cls-1" d="M156.32,47.09c-8.24-.11-16.49-.18-24.73,0-4.44.07-7.06,2.72-7.13,7.14q-.19,11.89,0,23.8c.06,4.15,2.79,6.75,6.91,7,1.49.11,3,.3,4.46.28,6.88-.08,13.77-.12,20.64-.41a6.57,6.57,0,0,0,5.95-6.33c.23-4.21.43-8.42.64-12.63-.22-4.29-.41-8.57-.66-12.84A6.66,6.66,0,0,0,156.32,47.09Z" />
          </svg>
          <p>More Tools</p>
        </div>
      </a>
    </nav>
    <!-- END SIDE NAV -->
    <!-- end include -->

    <main>
      <form method="post" name="walkingfarmform" id="walkingfarmform" action="walkingfarmgetcount.asp">
        <input type="hidden" name="polygondata" id="polygondata">
        <input type="hidden" name="highx" id="highx">
        <input type="hidden" name="lowx" id="lowx">
        <input type="hidden" name="highy" id="highy">
        <input type="hidden" name="lowy" id="lowy">
        <input type="hidden" name="dbg">

        <h2>New Polygon Farm</h2>
        <div class="walkFarmBtnCont">
          <button type="button" id="move-mode">Move Map</button>
          <button type="button" id="draw-mode">Draw Polygon </button>

          <button type="button" id="delete-button">Undo</button>
          <button type="button" id="delete-all-button">Clear Map</button>
          <button type="button" id="create-farm" onclick="findState()">Get Count / Create Farm</button>
          <button type="button" id="filter-button">Filter</button>

        </div>
        <div id="searchbar">
          <input id="search-field" type="search" class="controls" placeholder="Enter Place or Address" onkeypress="return searchKeyPress(event);">
          <input id="searchButton" type="button" value="Re-center Map">
        </div>

        <!-- INSERT MAP HERE -->
        <div id="map" class="walkingMap"></div>
    </main>
  </div>


  <div id="filterModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div style="font-size:18px; margin: 4px; text-align: center;">Current Filter:
        <div id="curfilter" style="margin-right: 30px; color: #478E40; background-color: #ffffff; padding: 6px; display:inline-block;">No Filter</div>
      </div>
      <h2>Set Filter Below</h2>
      <!-- ADDED BTN CONTAINER DIV * 2/3/20 * -->
      <div class="walkFarmBtnCont">
        <div class="filterbutton" onclick="setfiltertype('Empty Nesters');">Empty Nesters</div>
        <div class="filterbutton" onclick="setfiltertype('Height of Market');">Height of Market</div>
        <div class="filterbutton" onclick="setfiltertype('SFR Only');">SFR Only</div>
        <div class="filterbutton" onclick="setfiltertype('Custom');">Custom</div>
        <div class="filterbutton" onclick="setfiltertype('No Filter');">No Filter</div>
      </div>
      <div id="customfilterpanel">

        <div class="btext">(<a href="javascript:resetFilters();">reset filters</a>)</div>
        <label for="filterOwnerOcc">Owner Status:</label>
        <select name="filterOwnerOcc" size="1" id="filterOwnerOcc">
          <option value="Both">Both</option>
          <option value="Yes">Owner Occupied</option>
          <option value="No">Non-Owner Occupied</option>
        </select>

        <label for="filterPropType">Property Type (Use Code)</label>
        <select name="filterPropType" id="filterPropType" multiple>
          <option value="">All</option>
          <option value="1104">Apartment house (5+ units)</option>
          <option value="1105">Apartment house (100+ units)</option>
          <option value="2000,2001,2012,2020,6512,2032,2037,8002,2043,2050,3000,3009,3010,3011,3012">Commercial</option>
          <option value="1004,1114">Condominiums</option>
          <option value="1101">Duplex (2 units, any combination)</option>
          <option value="9200">Governmental/Public Use (General)</option>
          <option value="1110">Multi-Family Dwellings (Generic, any combination 2+)</option>
          <option value="1006">Mobile Home</option>
          <option value="3003">Office Bldg (General)</option>
          <option value="1009">Planned Unit Development (PUD) (Residential)</option>
          <option value="1103">Quadruplex (4 units, any combination)</option>
          <option value="2001,2003">Retail Stores</option>
          <option value="1001">Single Family Residential</option>
          <option value="1102">Triplex (3 units, any combination)</option>
          <option value="8000,8001,8002,8003,8004,8005,8006,8007,8008,8009,8010,8011">Vacant Land</option>
        </select>
        <div>
          <label for="">Transfer Date Between</label>
          <input type="date" name="filterTransDateStart" id="filterTransDateStart"> -
          <input type="date" name="filterTransDateEnd" id="filterTransDateEnd">
        </div>

        <div>
          <label for="">Bedrooms Min</label>
          <input type="text" size="1" name="filterBedMin" id="filterBedMin">
          Max: <input type="text" size="1" name="filterBedMax" id="filterBedMax">
        </div>

        <div>
          <label for="">Bathrooms Min</label>
          <input type="text" size="1" name="filterBathMin" id="filterBathMin">
          Max: <input type="text" size="1" name="filterBathMax" id="filterBathMax">
        </div>
        <div>
          <input type="hidden" size="2" name="filterSQFTMin" id="filterSQFTMin">
          <input type="hidden" size="2" name="filterSQFTMax" id="filterSQFTMax">
        </div>
      </div>

      <div class="button" id="filterDoneBtn">Done</div>
    </div>
  </div>
  <div id="fade"></div>
  <div id="bright" style="width:20%; height: auto !important; min-height:30%;">
    <img id="loader" src="img/hourglass.svg" /><BR><BR>
    <P style="font-family: Arial, sans-serif"> Retrieving data...</P><BR><BR>
    <input id="Cancel" type="button" value=" Cancel " style="font-size:18px;"><BR><BR>
  </div>
  <!--Popup Div -->
  <div id="popupMessage" class="modal">
    <div class="modal-content">
      <span id="popupspan" class="close">&times;</span>
      <p id="MessageLine" style=" display: none; font-weight: bold;">Loading (a)</p>
      <p id="firstline">Please wait (b)</p>
      <p id="turnover">Some text in the popup..</p>
      <p id="ownerocc">Some text in the popup..</p>
      <p id="rest">Farm Name: <input id="farmname"></input></p><BR>

      <div id="turnoverHistory" style="display: none; text-align: center; width: 300px; height:500px">
        <div style="font-weight: bold;"> Turnover Rate Average: </div>
        <div style="text-align: center;">
          <label class="yearLabel">15 years: </label> <label class="valueLabel" id="15years"></label><BR>
          <label class="yearLabel">10 years: </label> <label class="valueLabel" id="10years"></label><BR>
          <label class="yearLabel">5 years: </label> <label class="valueLabel" id="5years"></label><BR>
          <label class="yearLabel">12 months: </label> <label class="valueLabel" id="12months"></label><BR><BR><BR>
        </div>
      </div>

      <div id="farmbuttons">
        <input id="create" type="button" value=" Create Farm " class="button">
        <input id="createSnapshotButton" type="button" value=" Create Report " class="button" style="display:none;">
        <input id="revise" type="button" value=" Cancel/Revise " class="button">
        <input id="turnoverHist" type="button" value=" Turnover History " class="button">
      </div>
      <p id="limiMessage" style="display:none"></p>
    </div>
  </div>
  </form>







  <script>
    function searchKeyPress(e) {
      e = e || window.event;
      if (e.keyCode == 13) {
        document.getElementById('searchButton').click();
        return false;
      }

      return true;
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAqfhO_MQJvsi7AGx5joCVQO-i-NJFw93Y&libraries=drawing"></script>
  <script src="master.js" charset="utf-8"></script>

  <script type="text/javascript">
    debugger;
    var liveMapShape;
    var drawingManager;
    var bermudaTriangle = new google.maps.Polygon();
    var all_overlays = [];
    var selectedShape;
    var colors = ['#1E90FF', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
    var selectedColor;
    var map;
    var poly;
    var polylinesArray = [];
    var colorButtons = [];
    var points = [];
    var arrayOfPoints = [];
    var modeType;
    var bMouseDown;
    var geocoder;
    var bPolygon = false;
    var selectedfilter = 'No Filter';
    var highx, highy, lowx, lowy, filterOwnerOcc, filterPropType, filterTransDateStart, filterTransDateEnd, filterBedMin, filterBathMax, filterSQFTMin, filterSQFTMax;
    var xmlString = "";
    var farmtype = "walk";
    var liveMap;
    var onepoint;
    var propState;
    var usersState;
    var waflag = "false";

    //current date variables
    var curDate = new Date();
    var curMonth = curDate.getMonth() + 1;
    var curDay = curDate.getDate();
    var curYear = curDate.getFullYear();

    var popup_message = document.getElementById("popupMessage");
    var reviseBtn = document.getElementById("revise");
    var cancelBtn = document.getElementById("Cancel");
    var createFarmBtn = document.getElementById("create");
    var createSnapshotBtn = document.getElementById("createSnapshotButton");
    var turnoverHist = document.getElementById("turnoverHist");
    var span = document.getElementById("popupspan");
    var converted = false;
    var finishedPolygon;
    var overlaycompleteevent;
    var centerLatLng;
    var octoffice = 'Orange Coast Title Company - Builder/Commercial Division';
    var dtype = 'poly';


    function searchAddress(geocoder, resultsMap) {
      var address = document.getElementById('search-field').value;
      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
          resultsMap.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
            map: resultsMap,
            position: results[0].geometry.location
          });
        } else {
          //alert('Geocode was not successful for the following reason: ' + status);
          if (address) {
            alert('Entered address is not a valid address!!!');
          } else {
            alert('No address to center the map. If creating the farm, Please hit "Get Count / Create Farm"');
          }
        }
      });
    }

    function settheme() {

      //var curdisp = document.getElementById("filterpanel");
      //curdisp.style.display = 'none';
      //debugger;
      liveMap = '';
      if (!liveMap) {
        localStorage.clear();
        console.log('set and clear');
      }
    }

    function getCount(returnFunction) {

      debugger;
      if (returnFunction != false) {

        //farmtype = "walk";

        if (bPolygon == true) {
          farmtype = "poly";
        }
        //debugger;

        var Idata = {
          "memberID": '293272',
          "lowx": lowx,
          "lowy": lowy,
          "highx": highx,
          "highy": highy,
          "username": 'A User',
          "Polygons": xmlString,
          "farmtype": farmtype,
          "filterOwnerOcc": document.getElementById("filterOwnerOcc").value,
          "filterPropType": getPropTypes(),
          "filterTransDateStart": document.getElementById('filterTransDateStart').value,
          "filterTransDateEnd": document.getElementById('filterTransDateEnd').value,
          "filterBedMin": document.getElementById("filterBedMin").value,
          "filterBathMax": document.getElementById('filterBathMax').value,
          "filterSQFTMin": document.getElementById('filterSQFTMin').value,
          "filterSQFTMax": document.getElementById('filterSQFTMax').value

        };

        console.log("Idata:\n");
        console.log(JSON.stringify(Idata));
        openBright();
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "https://www.titleadvantage.com/mobilefarmgetcount.asp", true);
        //add a timer so if the data doesn't come back in 1 min it should ask you to retry
        timeoutVar = setTimeout(function() {
          closeBright();
          xmlhttp.abort();
          var IErrorData = {
            "sender": "walkingFarm.asp",
            "identifier1": "https://www.titleadvantage.com/mobilefarmgetcount.asp",
            "detail": JSON.stringify(Idata)
          };
          logErrorAPI(IErrorData);
          popupRetry();

        }, 30000);
        xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            clearTimeout(timeoutVar);
            closeBright();
            popupInformation(xmlhttp.responseText);
          }
        };
        xmlhttp.send(JSON.stringify(Idata));
      }
    }

    function popupInformation(responseText) {
      //debugger;
      popup_message.style.display = "block";
      //responseText = responseText.replace(/^\s+|\s+$/g, '');
      responseText = responseText.replace(/(\r\n|\n|\r)/gm, "");
      responseText = responseText.replace(/\t/g, '');
      console.log("raw response: ~" + responseText + "~");
      var data = JSON.parse(responseText);

      if (data.Status == 'Success') {
        debugger;
        var creditLeft = data.prolim - data.procur;
        if (creditLeft - (data.matchcount / 100) >= 0) {
          document.getElementById("create").value = " Create Farm ";
          document.getElementById("create").style.display = 'block';
        } else {
          document.getElementById("limiMessage").style.display = 'block';
          document.getElementById("create").style.display = "none";
          document.getElementById("limiMessage").innerHTML = "Not enough credits are currently available for this number of records. Please revise your search or contact us for more information";
        }

        document.getElementById("ownerocc").style.display = 'block';
        document.getElementById("rest").style.display = 'block';
        //write some information out to the popup message
        debugger;
        if (octoffice == "Equity Title of Washington") {
          document.getElementById("MessageLine").style.display = "inline-block";
          document.getElementById("MessageLine").innerHTML = "&#x26A0 Please Note: Farm cost is $2.25 per our CS Dept.";
          waflag = "true";
        } else {
          if (propState == "Washington") {
            document.getElementById("MessageLine").style.display = "inline-block";
            document.getElementById("MessageLine").innerHTML = "&#x26A0 Please Note: Farm cost is $2.25 per our CS Dept.";
            waflag = "true";
          }
          if (usersState != "Washington") {
            document.getElementById("MessageLine").style.display = "none";
            waflag = "false";
          }
        }
        document.getElementById("firstline").innerHTML = "Your search returned " + data.matchcount + " properties.";
        document.getElementById("turnover").innerHTML = "Turnover Rate: " + data.turnoverrate + "%";
        document.getElementById("ownerocc").innerHTML = "Owner Occupancy Rate: " + data.owneroccupancy + "%";
      } else {
        document.getElementById("firstline").innerHTML = "Your search returned " + data.matchcount + " properties.";
        document.getElementById("turnover").innerHTML = data.Status;
        document.getElementById("create").style.display = "none";
        document.getElementById("rest").style.display = "none";
        document.getElementById("ownerocc").style.display = "none";
      }
    }


    function popupRetry() {
      clearTimeout(timeoutVar);
      popup_message.style.display = "block";
      document.getElementById("firstline").innerHTML = "There was a temporary issue retrieving the property information at this time.  Please use the RETRY button  below to try again. Thank you.";
      document.getElementById("turnover").innerHTML = "";
      document.getElementById("rest").style.display = "none";
      document.getElementById("ownerocc").style.display = "none";
      document.getElementById("create").value = " Retry ";
      document.getElementById("revise").value = " Cancel ";
    }

    function popupSnapshot() {
      popup_message.style.display = "block";
    }

    function logErrorAPI(IErrorData) {
      xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "https://www.titleadvantage.com/mobileaddtoremoteLog.php", true);
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          debugger;
          console.log(xmlhttp.responseText);
        }
      };
      xmlhttp.send(JSON.stringify(IErrorData));

    }

    function openBright() {
      document.getElementById('bright').style.display = 'block';
      document.getElementById('fade').style.display = 'block';
    }

    function closeBright() {
      document.getElementById('bright').style.display = 'none';
      document.getElementById('fade').style.display = 'none';
    }

    //find the propState
    function findState() {
      console.log("findstate lm:" + liveMap);
      var returnFunction = createFarm();
      console.log("findState func for point: " + onepoint);
      geocoder.geocode({
        'location': onepoint
      }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
          console.log("getting state from results of: " + results.length);
          debugger;
          console.log(results[results.length - 2].formatted_address);
          var formatted_address = results[results.length - 2].formatted_address;
          propState = formatted_address.substr(0, formatted_address.indexOf(','));
          debugger;
          getCount(true);
        } else {
          //alert('Geocode was not successful for the following reason: ' + status);
          // if (address){
          // 	alert('Entered address is not a valid address!!!');
          // }else{
          // 	alert('No address to center the map. If creating the farm, Please hit "Get Count / Create Farm"');
          // }
        }
      });
    }

    function getFarm() {
      //debugger;
      //today's datetime stemp for FarmName when not givien

      if (bPolygon == true) {
        farmtype = "poly"
      }
      var farmname = document.getElementById("farmname").value;

      if (farmname == "" || farmname == null) {
        farmname = "Untitled - " + 'Farm';
      }

      console.log(farmname);

      var Idata = {
        "memberID": '293272',
        "lowx": lowx,
        "lowy": lowy,
        "highx": highx,
        "highy": highy,
        "username": 'Kyle Jonas',
        "Polygons": xmlString,
        "farmtype": farmtype,
        "farmname": farmname,
        "converted": converted,
        "waflag": waflag,
        "filterOwnerOcc": document.getElementById("filterOwnerOcc").value,
        "filterPropType": getPropTypes(),
        "filterTransDateStart": document.getElementById('filterTransDateStart').value,
        "filterTransDateEnd": document.getElementById('filterTransDateEnd').value,
        "filterBedMin": document.getElementById("filterBedMin").value,
        "filterBathMax": document.getElementById('filterBathMax').value,
        "filterSQFTMin": document.getElementById('filterSQFTMin').value,
        "filterSQFTMax": document.getElementById('filterSQFTMax').value
      };

      console.log('send for getfarm:\n' + JSON.stringify(Idata));
      openBright();
      xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "https://www.titleadvantage.com/mobilefarmgetfarm.asp", true);
      xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          //closeBright();
          debugger;

          window.open("https://www.titleadvantage.com/nd1c/farms.php", "_self");
        }
      };
      xmlhttp.send(JSON.stringify(Idata));
    }

    //When the user clicks anywhere outside of the Popup, close it
    window.onclick = function(event) {
      if (event.target == popup_message) {
        popup_message.style.display = "none";
        document.getElementById("turnoverHistory").style.display = "none";
        turnoverHist.style.display = "block";
        turnoverHist.value = "Turnover History";
      }
    }

    //popup has x which will allow users to close it
    span.onclick = function() {
      popup_message.style.display = "none";
      document.getElementById("turnoverHistory").style.display = "none";
      turnoverHist.style.display = "block";
      turnoverHist.value = "Turnover History";
    }


    //this revise button lets you go back to map so we can make changes
    reviseBtn.onclick = function() {
      popup_message.style.display = "none";
      document.getElementById("turnoverHistory").style.display = "none";
      turnoverHist.style.display = "block";
      turnoverHist.value = "Turnover History";
    }
    cancelBtn.onclick = function() {
      debugger;
      closeBright();
      xmlhttp.abort();
      return false;
    }

    //Create farm button will create a farm and takes you to the My farm list at the moment
    //change it so it can take you to Dashboard once it's ready
    createFarmBtn.onclick = function() {
      //debugger;
      if (document.getElementById("create").value == " Create Farm ") {
        popup_message.style.display = "none";
        getFarm();
      } else {
        popup_message.style.display = "none";
        findState(onepoint);
        //getCount();
      }

    }

    createSnapshotButton.onclick = function() {
      //create the market snapshot
      createFarm();

      popup_message.style.display = "none";
      console.log("creating snapshot");

      newURL = "https://www.titleadvantage.com/loadingreport.html";
      var newWindow = window.open(newURL, '_blank');


      if (bPolygon == true) {
        farmtype = "poly"
      }
      var farmname = document.getElementById("farmname").value;

      if (farmname == "" || farmname == null) {
        farmname = "Custom Area";
      }

      console.log(farmname);

      var Idata = {
        "memberID": '293272',
        "lowx": lowx,
        "lowy": lowy,
        "highx": highx,
        "highy": highy,
        "username": 'Kyle Jonas',
        "Polygons": xmlString,
        "reportType": "poly",
        "reportName": farmname,
        "converted": converted
      };

      console.log('send for create snapshot:\n' + JSON.stringify(Idata));
      openBright();
      xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "https://www.titleadvantage.com/api/api_dtCreateMarketSnapshot.php", true);
      xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          closeBright();
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
      xmlhttp.send(JSON.stringify(Idata));

    }

    if (turnoverHist) {
      turnoverHist.onclick = function() {
        debugger;
        document.getElementById("turnoverHist").value = "Loading...";
        var url = "https://www.titleadvantage.com/mobilefarmturnoverstats.asp";
        var shapeString = xmlString;
        console.log("shape: " + shapeString);
        var postJson = {
          "Polygons": shapeString,
          "username": 'Kyle Jonas',
          "memberID": '293272',
          "lowx": lowx,
          "lowy": lowy,
          "highx": highx,
          "highy": highy,
          "filterOwnerOcc": document.getElementById("filterOwnerOcc").value,
          "filterPropType": getPropTypes(),
          "filterTransDateStart": document.getElementById('filterTransDateStart').value,
          "filterTransDateEnd": document.getElementById('filterTransDateEnd').value,
          "filterBedMin": document.getElementById("filterBedMin").value,
          "filterBathMax": document.getElementById('filterBathMax').value,
          "filterSQFTMin": document.getElementById('filterSQFTMin').value,
          "filterSQFTMax": document.getElementById('filterSQFTMax').value
        }
        console.log(JSON.stringify(postJson));
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
          //         debugger;
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var jsonObj = JSON.parse(xmlhttp.responseText);
            var statusValue = jsonObj.Status;

            if (statusValue == "Success") {
              document.getElementById("turnoverHist").style.display = "none";
              document.getElementById("12months").innerText = jsonObj.turnoverrate1year + "%";
              document.getElementById("turnover").innerHTML = "Turnover Rate: " + jsonObj.turnoverrate1year + "%";
              document.getElementById("5years").innerText = jsonObj.turnoverrate5year + "%";
              document.getElementById("10years").innerText = jsonObj.turnoverrate10year + "%";
              document.getElementById("15years").innerText = jsonObj.turnoverrate15year + "%";
              document.getElementById("turnoverHistory").style.display = "block";
            }
          }
        }


        xmlhttp.open("POST", url, true);
        xmlhttp.send(JSON.stringify(postJson));
      }
    }

    function createFarm() {

      if (!liveMap) {
        //var xmlString = "";
        console.log("not lm: [" + liveMap + "]");
        debugger;
        var finalListOfStrokes = [];
        highx = 0.0;
        highy = 0.0;
        lowx = 0.0;
        lowy = 0.0;
        xmlString = "";

        highx = highy = -9007199254740991;
        lowx = lowy = 9007199254740991;

        if (arrayOfPoints.length > 0) {
          for (var i = 0; i < arrayOfPoints.length; ++i) {
            var singleArrayOfPoints = arrayOfPoints[i];
            var side1 = [];
            var side2 = [];
            var polygonPoints = [];
            var dLat, dLong;
            var dLatPerp1, dLongPerp1;
            var dLatPerp2, dLongPerp2;
            var magnitude;

            var side1 = [];
            var side2 = [];

            for (var j = 0; j < singleArrayOfPoints.length - 1; ++j) {
              dLat = singleArrayOfPoints[j].lat() - singleArrayOfPoints[j + 1].lat();
              dLong = singleArrayOfPoints[j].lng() - singleArrayOfPoints[j + 1].lng();

              magnitude = Math.sqrt(dLat * dLat + dLong * dLong);

              dLat = dLat / magnitude;
              dLong = dLong / magnitude;

              dLat = dLat * 0.00015;
              dLong = dLong * 0.00015;

              dLatPerp1 = dLong;
              dLongPerp1 = -dLat;

              dLatPerp2 = -dLong;
              dLongPerp2 = dLat;

              var pointToAdd1 = new google.maps.LatLng(dLatPerp1 + singleArrayOfPoints[j].lat(), dLongPerp1 + singleArrayOfPoints[j].lng());
              var pointToAdd2 = new google.maps.LatLng(dLatPerp2 + singleArrayOfPoints[j].lat(), dLongPerp2 + singleArrayOfPoints[j].lng());

              if (j == Math.round(singleArrayOfPoints.length / 2)) {
                onepoint = pointToAdd1;
              }

              if (side1.length > 0) {
                var prevSide1Lat = side1[side1.length - 1].lat();
                var prevSide1Lng = side1[side1.length - 1].lng();

                var dx = prevSide1Lat - (pointToAdd1.lat() - dLatPerp1);
                var dy = prevSide1Lng - (pointToAdd1.lng() - dLongPerp1);

                var side1Mag = Math.sqrt(dx * dx + dy * dy);

                if (side1Mag > 0.00025) {
                  side1.push(pointToAdd1)
                }
              } else {
                side1.push(pointToAdd1);
              }

              if (side2.length > 0) {
                var prevSide2Lat = side2[side2.length - 1].lat();
                var prevSide2Lng = side2[side2.length - 1].lng();

                var dx1 = prevSide2Lat - (pointToAdd2.lat() - dLatPerp2);
                var dy1 = prevSide2Lng - (pointToAdd2.lng() - dLongPerp2);

                var side2Mag = Math.sqrt(dx1 * dx1 + dy1 * dy1);

                if (side2Mag > 0.00025) {
                  side2.push(pointToAdd2)
                }
              } else {
                side2.push(pointToAdd2);
              }
            }

            var finalPolygonPoints = [];

            for (var k = 0; k < side1.length; ++k) {
              finalPolygonPoints.push(side1[k]);
            }

            if (!bPolygon) {
              for (var k = side2.length - 1; k >= 0; --k) {
                finalPolygonPoints.push(side2[k]);
              }

              finalPolygonPoints.push(side1[0]);
            } else {
              finalPolygonPoints.push(side1[0]);
            }

            if ((finalPolygonPoints[finalPolygonPoints.length - 1].lat() != finalPolygonPoints[0].lat()) &&
              (finalPolygonPoints[finalPolygonPoints.length - 1].lng() != finalPolygonPoints[0].lng())) {
              var finalFirstPointLat = finalPolygonPoints[0].lat();
              var finalFirstPointLng = finalPolygonPoints[0].lng();

              var finalFirstPoint = google.maps.LatLng(finalFirstPointLat, finalFirstPointLng);

              finalPolygonPoints[finalPolygonPoints.length - 1] = finalFirstPoint;
            }

            finalListOfStrokes.push(finalPolygonPoints);

            //bPolygon = true;
          }
          debugger;

          for (var m = 0; m < finalListOfStrokes.length; ++m) {
            xmlString += '<Shape><Points>';

            var singleArrayOfPoints = finalListOfStrokes[m];

            for (var n = 0; n < singleArrayOfPoints.length; ++n) {
              try {
                xmlString += "<Point><Latitude>" + singleArrayOfPoints[n].lat() + "</Latitude><Longitude>" +
                  singleArrayOfPoints[n].lng() + "</Longitude></Point>";

                if (m == 0 && n == 0) {
                  highx = singleArrayOfPoints[n].lng();
                  lowx = singleArrayOfPoints[n].lng();
                  highy = singleArrayOfPoints[n].lat();
                  lowy = singleArrayOfPoints[n].lat();
                } else {
                  if (singleArrayOfPoints[n].lng() > highx) {
                    highx = singleArrayOfPoints[n].lng();
                  }

                  if (singleArrayOfPoints[n].lng() < lowx) {
                    lowx = singleArrayOfPoints[n].lng();
                  }

                  if (singleArrayOfPoints[n].lat() > highy) {
                    highy = singleArrayOfPoints[n].lat();
                  }

                  if (singleArrayOfPoints[n].lat() < lowy) {
                    lowy = singleArrayOfPoints[n].lat();
                  }
                }
              } catch (err) {

              }
            }

            xmlString += "</Points></Shape>";
          }

          console.log(xmlString);
          debugger;

          document.getElementById('polygondata').value = xmlString;
          document.getElementById('lowx').value = lowx;
          document.getElementById('lowy').value = lowy;
          document.getElementById('highx').value = highx;
          document.getElementById('highy').value = highy;
          // document.getElementById('filterOwnerOcc').value = filterOwnerOcc;
          // document.getElementById('filterPropType').value = filterPropType;
          // document.getElementById('filterTransDateStart').value = filterTransDateStart;
          // document.getElementById('filterTransDateEnd').value = filterTransDateEnd;
          // document.getElementById('filterBedMin').value = filterBedMin;
          // document.getElementById('filterBedMax').value = filterBedMax;
          // document.getElementById('filterSQFTMin').value = filterSQFTMin;
          // document.getElementById('filterSQFTMax').value = filterSQFTMax;
          //document.getElementById('walkingfarmform').submit(); 
        } else {
          //debugger;
          alert("Please draw a shape");
          return false;
        }
      } else {
        console.log("live map used");
      }
    }

    function clearSelection() {
      if (selectedShape) {
        selectedShape.setEditable(false);
        selectedShape = null;
      }
    }

    function setSelection(shape) {
      clearSelection();
      selectedShape = shape;
      shape.setEditable(true);
      selectColor(shape.get('fillColor') || shape.get('strokeColor'));
    }

    function moveMode() {
      //alert("Move Mode Clicked");
      document.getElementById("draw-mode").style.background = '';
      document.getElementById("move-mode").style.background = '#FFF9D6';
      modeType = 'move';
      if ("ontouchend" in document) {
        return;
      }
      var options = {
        draggable: true,
        panControl: true,
        scrollwheel: true
      };
      map.setOptions(options);
    }

    function drawMode() {
      //alert("Draw Mode Clicked");
      console.log("Draw Mode");
      document.getElementById("draw-mode").style.background = '#FFF9D6';
      document.getElementById("move-mode").style.background = '';
      modeType = 'draw';
      //if ("ontouchend" in document) {
      //  return;
      //}
      var options = {
        draggable: false,
        panControl: false,
        scrollwheel: false
      };
      map.setOptions(options);
      //debugger;
      if (dtype == "poly") {
        drawingManager.setMap(map);
        drawingManager.setOptions({
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
          drawingControl: false
        });
      } else {
        //draw lines on roof tops
      }

    }

    function deleteSelectedShape() {
      debugger;
      if (selectedShape) {
        selectedShape.setMap(null);
      }
      if (dtype == "walk") {
        poly.setMap(null);
      }


      arrayOfPoints.splice(-1, 1);
      drawMode();
    }

    function deleteAllShape() {
      debugger;
      deleteSelectedShape();
      if (dtype == "poly") {
        for (var i = 0; i < all_overlays.length; i++) {
          all_overlays[i].overlay.setMap(null);
        }
        all_overlays = [];

      }


      for (var i = 0; i < polylinesArray.length; ++i) {
        polylinesArray[i].setMap(null);
      }

      if (finishedPolygon) {
        finishedPolygon.setMap(null);
      }
      //arrayOfPoints = [];
      polygonBounds = [];
      points = [];
      arrayOfPoints = [];
      //       while(arrayOfPoints.length > 0) {
      //   		arrayOfPoints.pop();
      // }

      drawMode();
      xmlString = "";
      console.log("xml: " + xmlString.toString());
      liveMap = "";
      localStorage.clear();
    }

    function selectColor(color) {
      selectedColor = color;
      for (var i = 0; i < colors.length; ++i) {
        var currColor = colors[i];
      }

      // Retrieves the current options from the drawing manager and replaces the
      // stroke or fill color as appropriate.
      var polylineOptions = drawingManager.get('polylineOptions');
      polylineOptions.strokeColor = color;
      drawingManager.set('polylineOptions', polylineOptions);

      var polygonOptions = drawingManager.get('polygonOptions');
      polygonOptions.fillColor = color;
      drawingManager.set('polygonOptions', polygonOptions);
    }

    function setSelectedShapeColor(color) {
      if (selectedShape) {
        if (selectedShape.type == google.maps.drawing.OverlayType.POLYLINE) {
          selectedShape.set('strokeColor', color);
        } else {
          selectedShape.set('fillColor', color);
        }
      }
    }

    function makeColorButton(color) {
      var button = document.createElement('span');
      button.className = 'color-button';
      button.style.backgroundColor = color;
      google.maps.event.addDomListener(button, 'click', function() {
        selectColor(color);
        setSelectedShapeColor(color);
      });

      return button;
    }

    function buildColorPalette() {
      var colorPalette = document.getElementById('color-palette');
      for (var i = 0; i < colors.length; ++i) {
        var currColor = colors[i];
        var colorButton = makeColorButton(currColor);
        colorPalette.appendChild(colorButton);
        colorButtons[currColor] = colorButton;
      }
      selectColor(colors[0]);
    }

    function initialize() {
      dtype = 'poly';
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(32.7150, -117.1625),
        disableDefaultUI: true,
        zoomControl: true,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        mapTypeControl: true,
        fullscreenControl: true,
        tilt: 0,
        mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
          mapTypeIds: [
            google.maps.MapTypeId.HYBRID,
            google.maps.MapTypeId.ROADMAP
          ]
        }
      });

      geocoder = new google.maps.Geocoder();

      document.getElementById('searchButton').addEventListener('click', function() {
        searchAddress(geocoder, map);
      });

      bMouseDown = false;

      var polyOptions = {
        strokeWeight: 2,
        fillOpacity: 0.45,
        strokeColor: '#FFA72C',
        editable: true
      };
      // Creates a drawing manager attached to the map that allows the user to draw
      // markers, lines, and shapes.
      drawingManager = new google.maps.drawing.DrawingManager({
        drawingControl: true,
        markerOptions: {
          draggable: true
        },
        drawingControlOptions: {
          drawingModes: [
            google.maps.drawing.OverlayType.POLYGON
          ]
        },
        polylineOptions: {
          editable: true
        },
        polygonOptions: polyOptions,
        map: map
      });

      drawingManager.setMap(null);

      overlaycompleteevent = google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
        all_overlays.push(e);
        if (e.type != google.maps.drawing.OverlayType.MARKER) {
          // Switch back to non-drawing mode after drawing a shape.
          drawingManager.setDrawingMode(null);

          // Add an event listener that selects the newly-drawn shape when the user
          // mouses down on it.
          var newShape = e.overlay;
          newShape.type = e.type;

          debugger;
          if (e.type == "polygon") {
            bPolygon = true;
          }

          collectData(newShape);
        }

      });

      // Try HTML5 geolocation.
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          //debugger;
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          // var pos = {
          // 	lat: 47.6062,
          // 	lng: -122.3321
          // };
          //debugger;
          if (!liveMap) {
            var lm2 = '';
            if (lm2 != '1') {
              map.setCenter(pos);
              map.setZoom(17);
              console.log('centered lm:' + liveMap + ' lm2:' + lm2);
            }
          } else {
            //live map no center
          }
          // }else{
          // 	map.setCenter(centerLatLng);
          // }


          var point = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          geocoder.geocode({
            'location': point
          }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
              //debugger;
              console.log(results[results.length - 2].formatted_address);
              var formatted_address = results[results.length - 2].formatted_address;
              usersState = formatted_address.substr(0, formatted_address.indexOf(','));
              var marker = new google.maps.Marker({
                position: pos,
                map: map,
                animation: google.maps.Animation.DROP,
                draggable: true,
                title: 'Current Location'
              });
            } else {
              //alert('Geocode was not successful for the following reason: ' + status);
              // if (address){
              // 	alert('Entered address is not a valid address!!!');
              // }else{
              // 	alert('No address to center the map. If creating the farm, Please hit "Get Count / Create Farm"');
              // }
            }
          });





        }, function() {});
      } else {
        // Browser doesn't support Geolocation
      }

      google.maps.event.addDomListener(map, 'mousedown', function(e) {

        //for touch screen ignore the mouse event
        if (dtype == "poly") {
          return;
        }
        //do it with the right mouse-button only
        var latLngToPush = e.latLng;

        //alert(latLngToPush);

        if (e.button != 1 && modeType != "draw") {
          return;
        }

        if (e.type != "polygon") {
          bPolygon = false;
        }

        bMouseDown = true;

        //the polygon
        poly = new google.maps.Polyline({
          map: map,
          clickable: false,
          strokeColor: '#FFA72C',
          strokeOpacity: 0.8,
          strokeWeight: 4
        });
        //move-listener
        var move = google.maps.event.addListener(map, 'mousemove', function(eventPoint) {
          //for touch screen ignore the mouse event
          if (dtype == "poly") {
            return;
          }
          var theLatLng = eventPoint.latLng;
          poly.getPath().push(eventPoint.latLng);
          //addPointsToArray(eventPoint.latLng);
          //if(poly.getPath().getAt(0).equals(eventPoint.latLng)){
          //	console.log("duplicate found!!!!!");
          //}
          addPointsToArray(theLatLng);
        });
        //mouseup-listener
        google.maps.event.addListenerOnce(map, 'mouseup', function(e) {
          //for touch screen ignore the mouse event
          if (dtype == "poly") {
            return;
          }
          google.maps.event.removeListener(move);
          bMouseDown = false;
          arrayOfPoints.push(points);

          points = [];
          polylinesArray.push(poly);
          if (document.getElementById('map').value == 'Polygon') {
            var path = poly.getPath();
            poly.setMap(null);
            poly = new google.maps.Polygon({
              map: map,
              path: path
            });
            polylinesArray.push(poly);
          } else {
            polylinesArray.push(poly);

            //check if the user is intending to draw lines on top of rooftops or create a shape
            //if the distance between last and first is less then 0.02 and the line distance is greater then 1
            var getAllElements = [];
            getAllElements = poly.getPath();
            //var pointArry = getAllElements.getArray();
            var firstelement = getAllElements.getAt(0);
            var lastelement = getAllElements.getAt(getAllElements.length - 1);
            var distBtwFL = getDistanceFromLatLonInKm(lastelement.lat(), lastelement.lng(), firstelement.lat(), firstelement.lng());
            var distLine = 0;
            var aIndex = 0;
            var dIndex = 0;
            var bIntersect = false;
            var addStuff = [];
            //console.log(pointArry.toString());
            for (var i = 0; i < getAllElements.length - 1; i++) {
              var a = getAllElements.getAt(i);
              var b = getAllElements.getAt(i + 1);
              //duplicate = google.maps.geometry.poly.containsLocation(b.latLng, poly) ? true : false;
              distLine = distLine + getDistanceFromLatLonInKm(a.lat(), a.lng(), b.lat(), b.lng());
              // if(firstelement.lat() == b.lat() && firstelement.lng() == b.lng()){
              //  	console.log("duplicate found");
              //  	dIndex = i;
              //  	bIntersect = true;
              // }

              // if(pointArry.includes(b.lat())){
              // 	console.log("duplicate at index: " + i);
              // }
              //debugger;
              for (var h = getAllElements.length - 1; h > 2; h--) {
                var c = getAllElements.getAt(h);
                var d = getAllElements.getAt(h - 1);
                //debugger;
                var doesCrosses = pointsIntersects(a.lat(), a.lng(), b.lat(), b.lng(), c.lat(), c.lng(), d.lat(), d.lng());
                if (doesCrosses) {
                  //debugger;
                  if (h < getAllElements.length / 2) {
                    dIndex = i;
                  } else {
                    dIndex = h - 2;
                  }

                  if (i > getAllElements.length / 2) {
                    aIndex = h;
                  } else {
                    aIndex = i + 2;
                  }
                  bIntersect = true;
                  break;
                }
              }
            }

            console.log(addStuff.toString());
            console.log("before " + getAllElements.length);
            if (dIndex > 0) {
              //debugger;
              //find the differnce between the crossover index and the length of the array.
              var diff = getAllElements.length - dIndex;
              //getAllElements.splice(dIndex, getAllElements.length);
              for (var j = getAllElements.length - 1; j >= 0; j--) {
                //remove all the elements after the crossover array
                if (j > dIndex) {
                  debugger;
                  getAllElements.removeAt(j);
                }
                if (j < aIndex) {
                  getAllElements.removeAt(j);
                }
              }

            }

            console.log("after " + getAllElements.length);


            if (bIntersect == true || (distLine > 0.9 && distBtwFL < 0.06)) {
              //alert("not walking farm");

              if (bIntersect == false) {
                for (var p = 5; p > 0; p--) {
                  getAllElements.pop();
                }
              }

              finishedPolygon = new google.maps.Polygon({
                paths: getAllElements,
                strokeColor: '#FFA72C',
                strokeWeight: 2,
                fillColor: '#FFA72C',
                fillOpacity: 0.35
              });
              //var intersection = findSelfIntersects(geoJSON2JTS(getAllElements));
              //console.log(intersection);
              poly.setMap(null);
              finishedPolygon.setMap(map);
              selectedShape = finishedPolygon;
              //all_overlays.push(finishedPolygon);
              bPolygon = true;
              converted = true;
              moveMode();

            }
            console.log("duplicate: " + dIndex);
            console.log("distance between to points: " + distBtwFL);
            console.log("distance of the shape: " + distLine);
          }
        });
      });


      //debugger;
      liveMapShape = JSON.parse(localStorage.getItem('polyData'));

      if (liveMapShape) {
        console.log('got LM');
        xmlString = localStorage.getItem('polyData');
        localStorage.clear();
        parser = new DOMParser();
        xmlDoc = parser.parseFromString(liveMapShape.shapeString, "text/xml");
        x = xmlDoc.getElementsByTagName("Point");
        drawLiveMapPoly(x);
      }


      // Clear the current selection when the drawing mode is changed, or when the
      // map is clicked.
      google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
      google.maps.event.addListener(map, 'click', clearSelection);
      google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);
      google.maps.event.addDomListener(document.getElementById('delete-all-button'), 'click', deleteAllShape);
      google.maps.event.addDomListener(document.getElementById('move-mode'), 'click', moveMode);
      google.maps.event.addDomListener(document.getElementById('draw-mode'), 'click', drawMode);

      //buildColorPalette();
      selectColor(colors[3]);
    }

    function redo() {

    }

    google.maps.event.addDomListener(window, 'load', initialize);

    navigator.geolocation.getCurrentPosition(success);

    function addPointsToArray(theLatLng) {
      if (bMouseDown == true && modeType == 'draw') {
        points.push(theLatLng);
        console.log(theLatLng);
      }
    }

    function success(position) {
      var lats = position.coords.latitude;
      var lngs = position.coords.longitude;

      var latlngPos = new google.maps.LatLng(lats, lngs);

      var myOptions = {
        zoom: 23,
        center: latlngPos
      };
      //map.setOptions(myOptions);

    }

    function togglefilterpanel() {
      var thefilterpanel = document.getElementById("filterpanel");
      if (thefilterpanel.style.display == 'none') {
        thefilterpanel.style.display = '';
        thefilterpanel.style.visibility = 'visible';
        thefilterpanel.style.opacity = 1;
      } else {
        thefilterpanel.style.display = 'none';
        thefilterpanel.style.visibility = 'hidden';
        thefilterpanel.style.opacity = 0;

      }
    }

    function getPropTypes() {
      var propTypeBox = document.getElementById('filterPropType');
      var propTypeVar = '';
      var firstVal = 0;
      for (var i = 0, l = propTypeBox.options.length, o; i < l; i++) {
        o = propTypeBox.options[i];
        if (o.selected == true) {
          if (firstVal == 0) {
            firstVal = 1;
          } else {
            propTypeVar = propTypeVar + ",";
          }
          propTypeVar = propTypeVar + o.value;
        }
      }
      console.log('proptypes: ' + propTypeVar);
      return propTypeVar
    }

    //calculate the distance between two points
    function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
      var R = 6371; // Radius of the earth in km
      var dLat = deg2rad(lat2 - lat1); // deg2rad below
      var dLon = deg2rad(lon2 - lon1);
      var a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      var d = R * c; // Distance in km
      return d;
    }

    function deg2rad(deg) {
      return deg * (Math.PI / 180)
    }

    function drawLiveMapPoly(shapestr) {
      var polygonCoords = [];
      var latlng;
      //debugger;
      for (var j = 0; j < shapestr.length; j++) {
        latlng = {
          lat: parseFloat(shapestr[j].childNodes[0].textContent),
          lng: parseFloat(shapestr[j].childNodes[1].textContent)
        }
        polygonCoords.push(latlng)
        if (j == Math.round(shapestr.length / 2)) {
          centerLatLng = latlng;
          onepoint = latlng;
        }
      }

      var finishedPolygon = new google.maps.Polygon({
        paths: polygonCoords,
        strokeColor: '#FFA72C',
        strokeWeight: 2,
        fillColor: '#FFA72C',
        fillOpacity: 0.35
      });
      finishedPolygon.setMap(map);
      collectData(finishedPolygon);
      //debugger;
      centerLatLng = latlng;
      // Create the bounds object
      var bounds = new google.maps.LatLngBounds();

      // Get paths from polygon and set event listeners for each path separately
      finishedPolygon.getPath().forEach(function(path, index) {

        bounds.extend(path);
      });

      // Fit Polygon path bounds
      map.fitBounds(bounds);
      //map.setZoom(15);
      dtype = 'poly';
    }

    function collectData(newShape) {
      var polygonBounds = newShape.getPath();

      for (var i = 0; i < polygonBounds.length; ++i) {
        var latLng = new google.maps.LatLng(polygonBounds.getAt(i).lat(), polygonBounds.getAt(i).lng());
        points.push(latLng);
      }

      //newShape.setMap(null);

      //bermudaTriangle = new google.maps.Polygon({
      //	paths: points,
      //	strokeColor: '#FF0000',
      //	strokeOpacity: 0.8,
      //	strokeWeight: 3,
      //	fillColor: '#FF0000',
      //	fillOpacity: 0.35,
      //	editable: true
      //});

      //bermudaTriangle.setMap(map);

      var finalFirstPoint = new google.maps.LatLng(polygonBounds.getAt(0).lat(), polygonBounds.getAt(0).lng());
      points.push(finalFirstPoint);

      newShape.getPaths().forEach(function(path, index) {

        google.maps.event.addListener(path, 'insert_at', function() {
          polygonBounds = [];
          points = [];
          arrayOfPoints = [];
          polygonBounds = newShape.getPath();
          for (var i = 0; i < polygonBounds.length; ++i) {
            var latLng = new google.maps.LatLng(polygonBounds.getAt(i).lat(), polygonBounds.getAt(i).lng());
            points.push(latLng);
          }
          finalFirstPoint = new google.maps.LatLng(polygonBounds.getAt(0).lat(), polygonBounds.getAt(0).lng());
          points.push(finalFirstPoint);
          arrayOfPoints.push(points);
        });

        google.maps.event.addListener(path, 'set_at', function() {
          //console.log(path);

          //debugger;
          polygonBounds = [];
          points = [];
          arrayOfPoints = [];
          polygonBounds = newShape.getPath();
          for (var i = 0; i < polygonBounds.length; ++i) {
            var latLng = new google.maps.LatLng(polygonBounds.getAt(i).lat(), polygonBounds.getAt(i).lng());
            points.push(latLng);
          }
          finalFirstPoint = new google.maps.LatLng(polygonBounds.getAt(0).lat(), polygonBounds.getAt(0).lng());
          points.push(finalFirstPoint);
          arrayOfPoints.push(points);
        });
      });

      arrayOfPoints.push(points);

      google.maps.event.addListener(newShape, 'click', function(e) {
        setSelection(newShape);
      });
      setSelection(newShape);
    }
    //find if four points are intersecting
    function pointsIntersects(x1, y1, x2, y2, x3, y3, x4, y4) {
      //find the intersection Point (x, y) using determinants
      var x = ((x1 * y2 - y1 * x2) * (x3 - x4) - (x1 - x2) * (x3 * y4 - y3 * x4)) / ((x1 - x2) * (y3 - y4) - (y1 - y2) * (x3 - x4));
      var y = ((x1 * y2 - y1 * x2) * (y3 - y4) - (y1 - y2) * (x3 * y4 - y3 * x4)) / ((x1 - x2) * (y3 - y4) - (y1 - y2) * (x3 - x4));

      //check for line segment combination
      if (isNaN(x) || isNaN(y)) {
        return false;
      } else {
        if (x1 >= x2) {
          if (!(x2 <= x && x <= x1)) {
            return false;
          }
        } else {
          if (!(x1 <= x && x <= x2)) {
            return false;
          }
        }
        if (y1 >= y2) {
          if (!(y2 <= y && y <= y1)) {
            return false;
          }
        } else {
          if (!(y1 <= y && y <= y2)) {
            return false;
          }
        }
        if (x3 >= x4) {
          if (!(x4 <= x && x <= x3)) {
            return false;
          }
        } else {
          if (!(x3 <= x && x <= x4)) {
            return false;
          }
        }
        if (y3 >= y4) {
          if (!(y4 <= y && y <= y3)) {
            return false;
          }
        } else {
          if (!(y3 <= y && y <= y4)) {
            return false;
          }
        }
      }
      return true;
    }
  </script>



  <script>
    var filterButton = document.getElementById("filter-button");
    var filterCloseBtn = document.getElementsByClassName("close")[0];
    var filterModal = document.getElementById("filterModal");
    var filterDoneBtn = document.getElementById("filterDoneBtn");

    if (filterButton) {
      filterButton.addEventListener("click", function() {
        filterModal.style.display = "block";
      });

      filterCloseBtn.addEventListener("click", function() {
        filterModal.style.display = "none";
      });

      filterDoneBtn.addEventListener("click", function() {
        filterModal.style.display = "none";
      });

      window.addEventListener("click", function(event) {
        if (event.target == filterModal) {
          filterModal.style.display = "none";
        }
      });
    }


    function setfiltertype(filtertype) {
      var curfilter = document.getElementById("curfilter");
      curfilter.innerHTML = filtertype;
      selectedfilter = filtertype;
      document.getElementById('customfilterpanel').style.display = 'none';
      if (filtertype == "Empty Nesters") {
        //pad the month and day if needed
        curMonthPadded = curMonth.toString();

        if (curMonthPadded.length < 2) {
          curMonthPadded = "0" + curMonthPadded;
        }
        curDayPadded = curDay.toString();
        if (curDayPadded.length < 2) {
          curDayPadded = "0" + curDayPadded;
        }

        //var dateCutoff = curMonthPadded + "/" + curDayPadded + "/" + (curYear - 20);
        var dateCutoff = (curYear - 15).toString() + "-" + curMonthPadded + "-" + curDayPadded;
        //alert("datecutoff: " + dateCutoff);
        resetFilters();
        document.getElementById('filterOwnerOcc').selectedIndex = "1";
        document.getElementById('filterPropType').selectedIndex = "13";
        document.getElementById('filterTransDateEnd').value = dateCutoff;
        document.getElementById('filterBedMin').value = "3";
        document.getElementById('filterSQFTMin').value = "1800";
        document.getElementById('customfilterpanel').style.display = 'none';
      }
      if (filtertype == "SFR Only") {
        resetFilters();
        document.getElementById('filterPropType').selectedIndex = "13";
        document.getElementById('customfilterpanel').style.display = 'none';
      }
      if (filtertype == "Height of Market") {
        resetFilters();
        document.getElementById('filterTransDateStart').value = "2005-01-01";
        document.getElementById('filterTransDateEnd').value = "2007-12-31";
        document.getElementById('customfilterpanel').style.display = 'none';
      }
      if (filtertype == 'Custom') {
        document.getElementById('customfilterpanel').style.display = '';
      } else {
        document.getElementById('customfilterpanel').style.display = 'none';
      }
      if (filtertype == "No Filter") {
        resetFilters();
      }
    }

    function resetFilters() {
      document.getElementById("filterOwnerOcc").selectedIndex = "0";
      document.getElementById("filterPropType").selectedIndex = "0";
      document.getElementById("filterTransDateStart").value = "";
      document.getElementById("filterTransDateEnd").value = "";
      document.getElementById("filterBedMin").value = "";
      document.getElementById("filterBedMax").value = "";
      document.getElementById("filterBathMin").value = "";
      document.getElementById("filterBathMax").value = "";
      document.getElementById("filterSQFTMin").value = "";
      document.getElementById("filterSQFTMax").value = "";

    }

    document.getElementById('customfilterpanel').style.display = 'none';
  </script>



</body>

</html>