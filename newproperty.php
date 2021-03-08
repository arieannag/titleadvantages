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

  <style>
    table {
      border-radius: 10px;
    }

    table,
    th,
    td {
      border: none;
    }
  </style>
</head>

<body>
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
      <h2>search new property profiles</h2>
      <!-- ADDED INLINE STYLING * 2/10/20 * -->


      <div id="newPropertySearch" style="margin-top: 0; padding-top: 0;">
        <h2 style="color: #ffffff;">Search By:</h2>
        <div class="propSearchLinkContainer" id="propSearchLinkContainer" style="margin: 0 auto;">
          <p class="propSearchLink" id="NP-address">Address</p>
          <p class="propSearchLink" id="NP-APN">APN</p>
          <p class="propSearchLink" id="NP-owner">Owner</p>
          <p class="propSearchLink" id="NP-map" style=>Map</p>
        </div>
        <div id="addressForm" style="margin-top: 25px;">
          <form id="searchAddress" name="searchForm" action="prop-searchresults.php" method="post">
            <label for="address" id="smartSearchLabel" style="display: none;"> Smart Search</label>
            <input type="text" name="address" value="" id="smartSearchInput" onFocus="geolocate();" class="searchAddressAddress">
            <label for="address">Address (Number and Street)</label>
            <input type="text" name="searchfield1" placeholder="address" id="searchfield1" class="searchAddressAddress">
            <label for="unit">Unit</label>
            <input type="text" name="searchfield2" placeholder="unit" id="searchfield2" class="searchAddressUnit">
            <label for="city">City</label>
            <input type="text" name="city" placeholder="city" id="city" class="searchAddressCity">
            <label for="state">State</label>
            <select id="state" name="state">
              <option VALUE="AK">AK - Alaska</option>
              <option VALUE="AL">AL - Alabama</option>
              <option VALUE="AR">AR - Arkansas</option>
              <option VALUE="AZ">AZ - Arizona</option>
              <option VALUE="CA" selected>CA - California</option>
              <option VALUE="CO">CO - Colorado</option>
              <option VALUE="CT">CT - Connecticut</option>
              <option VALUE="DC">DC - Dst of Columbia</option>
              <option VALUE="DE">DE - Delaware</option>
              <option VALUE="FL">FL - Florida</option>
              <option VALUE="GA">GA - Georgia</option>
              <option VALUE="HI">HI - Hawaii</option>
              <option VALUE="IA">IA - Iowa</option>
              <option VALUE="ID">ID - Idaho</option>
              <option VALUE="IL">IL - Illinois</option>
              <option VALUE="IN">IN - Indiana</option>
              <option VALUE="KS">KS - Kansas</option>
              <option VALUE="KY">KY - Kentucky</option>
              <option VALUE="LA">LA - Louisiana</option>
              <option VALUE="MA">MA - Massachusetts</option>
              <option VALUE="MD">MD - Maryland</option>
              <option VALUE="ME">ME - Maine</option>
              <option VALUE="MI">MI - Michigan</option>
              <option VALUE="MN">MN - Minnesota</option>
              <option VALUE="MO">MO - Missouri</option>
              <option VALUE="MS">MS - Mississippi</option>
              <option VALUE="MT">MT - Montana</option>
              <option VALUE="NC">NC - North Carolina</option>
              <option VALUE="ND">ND - North Dakota</option>
              <option VALUE="NE">NE - Nebraska</option>
              <option VALUE="NH">NH - New Hampshire</option>
              <option VALUE="NJ">NJ - New Jersey</option>
              <option VALUE="NM">NM - New Mexico</option>
              <option VALUE="NY">NY - New York</option>
              <option VALUE="NV">NV - Nevada</option>
              <option VALUE="OH">OH - Ohio</option>
              <option VALUE="OK">OK - Oklahoma</option>
              <option VALUE="OR">OR - Oregon</option>
              <option VALUE="PA">PA - Pennsylvania</option>
              <option VALUE="RI">RI - Rhode Island</option>
              <option VALUE="SC">SC - South Carolina</option>
              <option VALUE="SD">SD - South Dakota</option>
              <option VALUE="TN">TN - Tennessee</option>
              <option VALUE="TX">TX - Texas</option>
              <option VALUE="UT">UT - Utah</option>
              <option VALUE="VA">VA - Virginia</option>
              <option VALUE="VT">VT - Vermont</option>
              <option VALUE="WA">WA - Washington</option>
              <option VALUE="WI">WI - Wisconsin</option>
              <option VALUE="WV">WV - West Virginia</option>
              <option VALUE="WY">WY - Wyoming</option>
            </select>
            <label for="zip">ZIP</label>
            <input type="text" name="zip" placeholder="zip" id="zip" class="searchAddressZip">
            <p>OR</p>
            <label for="county">County</label>
            <input type="text" name="county" placeholder="county" id="county" class="searchAddressCounty">
            <input type="hidden" name="searchtype" value="Address">
            <div class="buttonContainer">
              <button id="addSearchSubmit" type="submit" name="button">Search</button>
              <!-- CHANGED BUTTON TEXT * 2/10/20 * -->
              <button type="reset" name="button">Clear</button>
            </div>
            <div style="text-align: right; padding-right: 25px;">
              <div class="button smartAddressSearch" id="smartAddressSearch">smart search</div>
            </div>
          </form>
        </div>

        <div id="APNform" style="margin-top: 25px;">
          <form name="searchForm" action="prop-searchresults.php" method="post" id="searchAPN">
            <label for="apn">Whole or Partial APN</label>
            <input type="text" name="searchfield1" placeholder="apn" id="searchfield1" class="SearchApnAPN">
            <label for="city">City</label>
            <input type="text" name="city" placeholder="city" id="city">
            <label for="state">State</label>
            <select id="state" name="state">
              <option VALUE="AK">AK - Alaska</option>
              <option VALUE="AL">AL - Alabama</option>
              <option VALUE="AR">AR - Arkansas</option>
              <option VALUE="AZ">AZ - Arizona</option>
              <option VALUE="CA" selected selected>CA - California</option>
              <option VALUE="CO">CO - Colorado</option>
              <option VALUE="CT">CT - Connecticut</option>
              <option VALUE="DC">DC - Dst of Columbia</option>
              <option VALUE="DE">DE - Delaware</option>
              <option VALUE="FL">FL - Florida</option>
              <option VALUE="GA">GA - Georgia</option>
              <option VALUE="HI">HI - Hawaii</option>
              <option VALUE="IA">IA - Iowa</option>
              <option VALUE="ID">ID - Idaho</option>
              <option VALUE="IL">IL - Illinois</option>
              <option VALUE="IN">IN - Indiana</option>
              <option VALUE="KS">KS - Kansas</option>
              <option VALUE="KY">KY - Kentucky</option>
              <option VALUE="LA">LA - Louisiana</option>
              <option VALUE="MA">MA - Massachusetts</option>
              <option VALUE="MD">MD - Maryland</option>
              <option VALUE="ME">ME - Maine</option>
              <option VALUE="MI">MI - Michigan</option>
              <option VALUE="MN">MN - Minnesota</option>
              <option VALUE="MO">MO - Missouri</option>
              <option VALUE="MS">MS - Mississippi</option>
              <option VALUE="MT">MT - Montana</option>
              <option VALUE="NC">NC - North Carolina</option>
              <option VALUE="ND">ND - North Dakota</option>
              <option VALUE="NE">NE - Nebraska</option>
              <option VALUE="NH">NH - New Hampshire</option>
              <option VALUE="NJ">NJ - New Jersey</option>
              <option VALUE="NM">NM - New Mexico</option>
              <option VALUE="NY">NY - New York</option>
              <option VALUE="NV">NV - Nevada</option>
              <option VALUE="OH">OH - Ohio</option>
              <option VALUE="OK">OK - Oklahoma</option>
              <option VALUE="OR">OR - Oregon</option>
              <option VALUE="PA">PA - Pennsylvania</option>
              <option VALUE="RI">RI - Rhode Island</option>
              <option VALUE="SC">SC - South Carolina</option>
              <option VALUE="SD">SD - South Dakota</option>
              <option VALUE="TN">TN - Tennessee</option>
              <option VALUE="TX">TX - Texas</option>
              <option VALUE="UT">UT - Utah</option>
              <option VALUE="VA">VA - Virginia</option>
              <option VALUE="VT">VT - Vermont</option>
              <option VALUE="WA">WA - Washington</option>
              <option VALUE="WI">WI - Wisconsin</option>
              <option VALUE="WV">WV - West Virginia</option>
              <option VALUE="WY">WY - Wyoming</option>
            </select>
            <label for="APNzip">ZIP</label>
            <input type="text" name="zip" placeholder="zip" id="APNzip">
            <p>OR</p>
            <label for="APNcounty">County</label>
            <input type="text" name="county" placeholder="county" id="APNcounty">
            <input type="hidden" name="searchtype" value="APN">
            <div class="buttonContainer">
              <button id="addSearchSubmit" type="submit" name="button">Search</button>
              <!-- CHANGED BUTTON TEXT * 2/10/20 * -->
              <button type="reset" name="button">Clear</button>
            </div>
          </form>
        </div>

        <div id="ownerForm" style="margin-top: 25px;">
          <form name="searchForm" action="prop-searchresults.php" method="post" id="searchOwner">
            <label for="fName">First Name</label>
            <input type="text" name="searchfield1" placeholder="First Name" id="searchfield1" class="fName">
            <label for="lName">Last Name</label>
            <input type="text" name="searchfield2" placeholder="Last Name" id="searchfield2" class="lName">
            <label for="ownerCity">City</label>
            <input type="text" name="ownerCity" placeholder="City" id="ownerCity">
            <label for="state">State</label>
            <select id="state" name="state">
              <option VALUE="AK">AK - Alaska</option>
              <option VALUE="AL">AL - Alabama</option>
              <option VALUE="AR">AR - Arkansas</option>
              <option VALUE="AZ">AZ - Arizona</option>
              <option VALUE="CA" selected>CA - California</option>
              <option VALUE="CO">CO - Colorado</option>
              <option VALUE="CT">CT - Connecticut</option>
              <option VALUE="DC">DC - Dst of Columbia</option>
              <option VALUE="DE">DE - Delaware</option>
              <option VALUE="FL">FL - Florida</option>
              <option VALUE="GA">GA - Georgia</option>
              <option VALUE="HI">HI - Hawaii</option>
              <option VALUE="IA">IA - Iowa</option>
              <option VALUE="ID">ID - Idaho</option>
              <option VALUE="IL">IL - Illinois</option>
              <option VALUE="IN">IN - Indiana</option>
              <option VALUE="KS">KS - Kansas</option>
              <option VALUE="KY">KY - Kentucky</option>
              <option VALUE="LA">LA - Louisiana</option>
              <option VALUE="MA">MA - Massachusetts</option>
              <option VALUE="MD">MD - Maryland</option>
              <option VALUE="ME">ME - Maine</option>
              <option VALUE="MI">MI - Michigan</option>
              <option VALUE="MN">MN - Minnesota</option>
              <option VALUE="MO">MO - Missouri</option>
              <option VALUE="MS">MS - Mississippi</option>
              <option VALUE="MT">MT - Montana</option>
              <option VALUE="NC">NC - North Carolina</option>
              <option VALUE="ND">ND - North Dakota</option>
              <option VALUE="NE">NE - Nebraska</option>
              <option VALUE="NH">NH - New Hampshire</option>
              <option VALUE="NJ">NJ - New Jersey</option>
              <option VALUE="NM">NM - New Mexico</option>
              <option VALUE="NY">NY - New York</option>
              <option VALUE="NV">NV - Nevada</option>
              <option VALUE="OH">OH - Ohio</option>
              <option VALUE="OK">OK - Oklahoma</option>
              <option VALUE="OR">OR - Oregon</option>
              <option VALUE="PA">PA - Pennsylvania</option>
              <option VALUE="RI">RI - Rhode Island</option>
              <option VALUE="SC">SC - South Carolina</option>
              <option VALUE="SD">SD - South Dakota</option>
              <option VALUE="TN">TN - Tennessee</option>
              <option VALUE="TX">TX - Texas</option>
              <option VALUE="UT">UT - Utah</option>
              <option VALUE="VA">VA - Virginia</option>
              <option VALUE="VT">VT - Vermont</option>
              <option VALUE="WA">WA - Washington</option>
              <option VALUE="WI">WI - Wisconsin</option>
              <option VALUE="WV">WV - West Virginia</option>
              <option VALUE="WY">WY - Wyoming</option>
            </select>
            <label for="ownerZip">Zip Code</label>
            <input type="text" name="zip" placeholder="Zip" id="ownerZip">
            <p>OR</p>
            <label for="ownerCounty">County</label>
            <input type="text" name="county" placeholder="County" id="ownerCounty">
            <input type="hidden" name="searchtype" value="Owner">
            <div class="buttonContainer">
              <button type="submit" name="button">Search</button>
              <!-- CHANGED BUTTON TEXT * 2/10/20 * -->
              <button type="reset" name="button">Clear</button>
            </div>
          </form>
        </div>

        <!-- ADDED searchMapMap * 2/10/20 * -->
        <div id="searchMap" style="text-align:center;">
          <table border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="100%" height="80%" style="height: 65vh;">
            <tr>
              <td width="220" align="center" style="background: #eeeeee;">
                <h3>Search</h3>
              </td>
              <td height="40" align="center">
                <h3 id="mapinstructions">
                  Use the search form, or click anywhere on the map to see what's there
                </h3>
                <div id="mapload" style="display:none;"><img src="img/loading_bar.gif" width="50" height="10"><BR>
                  <P>
                </div>
              </td>
              <td align="center">
                <div id="resultlabel" style="font-size:14px; font-family:Arial; display:none;">List of results</div>
              </td>
            </tr>
            <tr>
              <td width="220" bgcolor="#fff" valign="top" style="background: #eeeeee;">
                <div id="searchsection" style="font-size:12px; font-family:Arial;">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <img src="img/spacer.gif" width="200" height="16"><BR>
                        <div style="display:none;">Search Type:</div><BR><BR>
                        <select id="searchby" name="searchby" size="1" style="display:none; border: 1px solid #555555; border-radius: 10px; width: 100%; background-color: #ffffff; margin-bottom: 25px; height: 35px;" onchange="changesearchtype();">
                          <option value="add">Property Address</option>
                          <option value="own">Owner Name</option>
                          <option value="apn">APN</option>
                        </select>
                        <BR>
                        <P>
                        <div id="searchadd" style="display:'';"><span style="display: block; padding-bottom: 10px;"> Address or Intersection: </span> <input type="text" name="propaddress" id="propaddress" size="32" style="  border: 1px solid #555555; border-radius: 10px;" onKeyDown="if (event.keyCode == 13) subsearch();"></div>
                        <div id="searchown" style="font-size:12px; font-family:Arial; display:none; "><span style="display: block;">First Name:</span><BR><input type="text" name="firstname" id="firstname" size="20" style="border: 1px solid #555555; border-radius: 10px;" onKeyDown="if (event.keyCode == 13) subsearch();"><BR><span style="display: block; padding-top: 10px;">Last Name:</span><BR><input type="text" name="lastname" id="lastname" size="20" style="border: 1px solid #555555; border-radius: 10px;" onKeyDown="if (event.keyCode == 13) subsearch();"></div>
                        <div id="searchapn" style=" display:none; display: block;"><span style="display: none; padding-top:10px;">APN:</span></span><BR><input type="text" name="apn" id="apn" size="15" style="display: none; border: 1px solid #555555; border-radius: 10px;" onKeyDown="if (event.keyCode == 13) subsearch();"></div>
                        <BR>
                        <div id="searchapn" style="display:'';"><span style="display: block;">Zip Code:</span><BR><input type="text" name="zipcode" id="zipcode" size="10" style=" border: 1px solid #555555; border-radius: 10px;" onKeyDown="if (event.keyCode == 13) subsearch();"></div>
                        <div id="searchapn" style=" font-family:Arial; display:none;">County:<BR><input type="text" name="county" id="county" size="10"></div>
                        <BR>
                        <P>
                          <input type="button" value="Center Map" style="font-size: 14px;" onClick="subsearch();" class="button">
                  </table>
                </div>
              </td>
              <td height="95%">
                <div id="map-canvas" style="width: 100%; height: 100%;"></div>
              </td>
              <td bgcolor="#ffffff" valign="top" id="resultcell">
                <div id="resultcol" style="display:none;">
                  <iframe name="resultiframe" id="resultiframe" src="prosearchmap_results1.asp" height="100%" width="250" style="min-height: 400px; max-height: 800px;" seamless></iframe>
                  <BR>
                  <img src="img/spacer.gif" width="260" height="1">
                </div>
              </td>
            </tr>
          </table>

          <div class="button smartAddressSearch" style="font-size: 1em; width: 300px; margin-top: 45px; display:none;" onclick="location.href='prosearchplmap2.php';">Search Map with Property Lines</div>

        </div>
        <form action="property-page.php" method="POST" name="addform">
          <input type="hidden" name="propapn" value="">
          <input type="hidden" name="propaddress" value="">
          <input type="hidden" name="propcity" value="">
          <input type="hidden" name="propstate" value="CA">
          <input type="hidden" name="propzip" value="">
          <input type="hidden" name="propowner" value="">
          <input type="hidden" name="propfips" value="">
          <input type="hidden" name="propcounty" value="">
          <input type="hidden" name="vendorUniqueID" value="">
        </form>


    </main>

  </div>

  <script src="master.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARVUySVCWKUpHJ_SKB9fZGXii3fpE3qsA&libraries=places&callback=initAutocomplete" async defer></script>
  <script>
    var searchAddress = document.getElementById('searchAddress');
    var searchAPN = document.getElementById('searchAPN');
    var searchOwner = document.getElementById('searchOwner');
    var searchMap = document.getElementById('searchMap');
    var searchAddressBtn = document.getElementById('NP-address');
    var searchAPNBtn = document.getElementById('NP-APN');
    var searchOwnerBtn = document.getElementById('NP-owner');
    var searchMapBtn = document.getElementById('NP-map');
    var addSearchSubmit = document.getElementById("addSearchSubmit");
    var smartAddressSearchBtn = document.getElementById('smartAddressSearch');
    var smartSearchLabel = document.getElementById('smartSearchLabel');
    var smartSearchInput = document.getElementById('smartSearchInput');


    //catch enter key even
    document.getElementById("zip")
      .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
          document.searchForm.submit();
        }
      });

    document.getElementById("county")
      .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
          document.searchForm.submit();
        }
      });

    document.getElementById("searchfield1")
      .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
          document.searchForm.submit();
        }
      });

    document.getElementById("searchfield2")
      .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
          document.searchForm.submit();
        }
      });


    // TOGGLE BETWEEN SEARCH OPTIONS BY CLICKING ON BUTTONS
    searchAddressBtn.onclick = function() {
      searchAddress.style.display = "block";
      searchAPN.style.display = "none";
      searchOwner.style.display = "none";
      searchMap.style.display = "none";
      searchAddressBtn.style.background = "#00ADFA";
      searchAPNBtn.style.background = "#777";
      searchOwnerBtn.style.background = "#777";
      searchMapBtn.style.background = "#777";
    };

    searchAPNBtn.onclick = function() {
      searchAddress.style.display = "none";
      searchAPN.style.display = "block";
      searchOwner.style.display = "none";
      searchMap.style.display = "none";
      searchAddressBtn.style.background = "#777";
      searchAPNBtn.style.background = "#00ADFA";
      searchOwnerBtn.style.background = "#777";
      searchMapBtn.style.background = "#777";
    };

    searchOwnerBtn.onclick = function() {
      searchAddress.style.display = "none";
      searchAPN.style.display = "none";
      searchOwner.style.display = "block";
      searchMap.style.display = "none";
      searchAddressBtn.style.background = "#777";
      searchAPNBtn.style.background = "#777";
      searchOwnerBtn.style.background = "#00ADFA";
      searchMapBtn.style.background = "#777";
    };

    searchMapBtn.onclick = function() {
      searchAddress.style.display = "none";
      searchAPN.style.display = "none";
      searchOwner.style.display = "none";
      searchMap.style.display = "block";
      searchAddressBtn.style.background = "#777";
      searchAPNBtn.style.background = "#777";
      searchOwnerBtn.style.background = "#777";
      searchMapBtn.style.background = "#00ADFA";
      setmap();
    };

    smartAddressSearchBtn.addEventListener('click', function() {
      smartSearchLabel.style.display = 'inline-block';
      smartSearchInput.style.display = 'inline-block';
    });
  </script>
  <script>
    var markersArray = [];

    var map;
    var geocoder;
    var targetmark;
    var infoWindows = new Array();
    var theMarkers = new Array();
    var infowindow;
    var bounds = new google.maps.LatLngBounds();
    //var infowindow = new google.maps.InfoWindow({ maxWidth: 320 });


    function setmap() {
      geocoder = new google.maps.Geocoder();
      infowindow = new google.maps.InfoWindow();
      var mapOptions = {
        zoom: 4,
        center: new google.maps.LatLng(37.4419, -99.1419),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      showAddress('99507', 13, 'no');

      google.maps.event.addListener(map, 'click', function(event) {
        clicked('', event.latLng);
      });
      //GEvent.addListener(map, "click", clicked);

      //update zip code if map moves
      google.maps.event.addListener(map, "center_changed", function() {
        var center = map.getCenter();
        var thecity = '';
        //alert('new center:' + center.toString());
        geocoder.geocode({
          'latLng': center
        }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (results[1]) {
              var result = results[0].address_components;
              for (var i = 0; i < result.length; ++i) {
                if (result[i].types[0] == "postal_code") {
                  thezip = result[i].long_name;
                  document.getElementById('zipcode').value = thezip;
                }
                //alert('thezip: ' + thezip);
                if (result[i].types[0] == "locality") {
                  thecity = result[i].long_name;
                }
              }
            } else {
              alert('new center not found');
            }
          }
        });
      });
    }

    function getAddress(overlay, latlng) {
      if (latlng != null) {
        address = latlng;
        //alert('clickadd: ' + address);
        geocoder.getLocations(latlng, showAddressPin);
      }
    }

    function showAddress(address, zoomlvl, showmark) {
      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          map.setZoom(zoomlvl);
          if (showmark == 'yes') {
            //var marker = new GMarker(point);
            //map.addOverlay(marker);
            //marker.openInfoWindowHtml(address);
            //map.openInfoWindowHtml(point, address);
            //alert('click: ' + point);
            clicked('', results[0].geometry.location);
          }
        } else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }

    function showAddressfromlist(address, zoomlvl, showmark, apn, state, zip, proplabel) {

      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          var latlng = results[0].geometry.location;
          map.setCenter(latlng);
          if (zoomlvl) {
            map.setZoom(zoomlvl);
          }
          if (showmark == 'yes') {
            var myHtml = '';
            myHtml = myHtml + '<div id="propheader">' + proplabel + '<BR></div>';
            myHtml = myHtml + '<BR><P>';
            myHtml = myHtml + '<a href="#" onclick="subaddform(\'' + apn + '\',\'' + address + '\',\'\',\'' + state + '\',\'' + zip + '\',\'\',\'\');">Open Property</a>';
            infowindow.setContent(myHtml);
            infowindow.setPosition(latlng);
            infowindow.open(map);


          }
        } else {
          //alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }

    function clearOverlays() {
      if (markersArray.length > 0) {
        for (i in markersArray) {
          //markersArray[i].remove();
          markersArray[i].setMap(null);
        }
        markersArray.length = 0;
      }
    }

    function droppin(address, apn, state, zip, proplabel) {

      geocoder.geocode({
        'address': address
      }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {

          var myHtml = '';
          myHtml = myHtml + '<div id="propheader">' + proplabel + '<BR></div>';
          myHtml = myHtml + '<BR><P>';
          myHtml = myHtml + '<a href="#" onclick="subaddform(\'' + apn + '\',\'' + address + '\',\'\',\'' + state + '\',\'' + zip + '\',\'\',\'\');">Open Property</a>';

          var myLatLng = results[0].geometry.location;
          bounds.extend(myLatLng);
          map.fitBounds(bounds);

          infowindow.setContent(myHtml);

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: "Property Information"
          });
          markersArray.push(marker);
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(myHtml);
            infowindow.open(map, marker);
            document.getElementById("mapload").style.display = 'none';
            document.getElementById("mapinstructions").style.display = '';
            setTimeout("clearloadbar()", 2000);
          });

        } else {
          //alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }

    function clearloadbar() {
      document.getElementById("mapload").style.display = 'none';
      document.getElementById("mapinstructions").style.display = '';
    }

    function fitMap(map, points) {
      var bounds = new GLatLngBounds();
      for (var i = 0; i < points.length; i++) {
        bounds.extend(points[i].point);
      }
      map.setZoom(map.getBoundsZoomLevel(bounds));
      map.setCenter(bounds.getCenter());
    }

    function centerOnZip(zipCode) {
      geocoder.geocode({
        'address': zipCode
      }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          //Got result, center the map and put it out there
          map.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
          });
        } else {
          console.log("Geocode was not successful for the following reason: " + status);
        }
      });
    }

    function maprecenter(newcenter) {
      //newcenter = document.getElementById("newmapcenter").value;
      var zoomlvl = 15;
      if (newcenter.length > 6) {
        zoomlvl = 18;
      }
      showAddress(newcenter, zoomlvl, 'yes');
    }

    function clicked(overlay, latlng) {
      document.getElementById("mapload").style.display = '';
      document.getElementById("mapinstructions").style.display = 'none';
      console.log(JSON.stringify(latlng.toJSON(), null, 2));
      if (latlng) {
        var url = "https://www.titleadvantage.com/api/api_DTSearchProperties_map.php";
        var postJson = {
          "username": "Kyle",
          "memberID": "293272",
          "secKey": "1928294",
          "latlng": latlng.toJSON()
        };

        console.log(JSON.stringify(postJson));

        var myHtml = '';
        myHtml = myHtml + '<div id="propheader"> Searching... <BR></div>';
        infowindow.setContent(myHtml);
        infowindow.setPosition(latlng);
        infowindow.open(map);

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", url, true);
        xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var headerInfo = "";
            var propResultJSON = JSON.parse(xmlhttp.responseText);
            console.log("propResult:\n" + JSON.stringify(propResultJSON));
            if (propResultJSON.Status == "Success") {
              var resultData = propResultJSON.properties;
              for (i = 0; i < resultData.length; i++) {
                var eachProp = resultData[i];
                var propaddress = eachProp.propaddress;
                var propapn = eachProp.propapn;
                console.log("propapn: " + propapn);
                headerInfo = eachProp.propowner + "<BR>" + eachProp.propaddress + "<BR>" + eachProp.propcity + ", " + eachProp.propstate + " " + eachProp.propzip + "<BR>APN: " + eachProp.propapn;
                headerInfo = headerInfo + '<BR><P>';
                headerInfo = headerInfo + '<a href="#" onclick="subaddform();">Open Property</a>';
                document.addform.propapn.value = propapn;
                document.addform.propaddress.value = propaddress;
                document.addform.propcity.value = eachProp.propcity;
                document.addform.propstate.value = eachProp.propstate;
                document.addform.propzip.value = eachProp.propzip;
                document.addform.propfips.value = eachProp.propfips;
                document.addform.propcounty.value = eachProp.propcounty;
                document.addform.vendorUniqueID.value = eachProp.vendorUniqueID;


              }

            } else {
              headerInfo = "Property Details Not Found.<BR>" + propResultJSON.messDT;
            }

            document.getElementById("propheader").innerHTML = headerInfo;

          }
        };
        xmlhttp.send(JSON.stringify(postJson));

        document.getElementById("mapload").style.display = 'none';
        document.getElementById("mapinstructions").style.display = '';
      } else {
        alert("No address found at " + latlng.toUrlValue());
      }
    }

    function subaddform(eachProp) {
      //alert('submitting form. type = [' + type + ']');
      //alert ('dash at:' + address.indexOf('-'));

      document.addform.submit();
    }

    function subsearch() {
      //alert('changing search type to' + document.getElementById("searchby").value);

      //clear existing markers
      clearOverlays();

      var searchbyval = document.getElementById("searchby").value;
      var searchstring = '';
      var okflag = 'yes';
      var themess = '';
      if (searchbyval == 'add') {
        searchstring = document.getElementById("propaddress").value + ' ' + document.getElementById("zipcode").value;
        //alert('searching for: ' + searchstring);
        document.getElementById("resultlabel").style.display = 'none';
        document.getElementById("resultcol").style.display = 'none';
        document.getElementById('resultcell').width = '1px';
        maprecenter(searchstring);
      }
      if (searchbyval == 'own') {
        //alert('owner search coming soon');
        document.getElementById("resultlabel").style.display = '';
        document.getElementById("resultcol").style.display = '';
        document.getElementById('resultcell').width = '260px';
        firstname = document.getElementById("firstname").value;
        lastname = document.getElementById("lastname").value;
        zipcode = document.getElementById("zipcode").value;

        if (lastname.length < 2) {
          themess = themess + 'Please enter an owner last name.\n';
          okflag = 'no';
        }
        if (zipcode.length < 2) {
          themess = themess + 'Please enter a zip code.\n';
          okflag = 'no';
        }



      }
      if (searchbyval == 'apn') {
        document.getElementById("resultlabel").style.display = '';
        document.getElementById("resultcol").style.display = '';
        document.getElementById('resultcell').width = '260px';
        apn = document.getElementById("apn").value;
        zipcode = document.getElementById("zipcode").value;

        if (apn.length < 2) {
          themess = themess + 'Please enter a full or partial APN.\n';
          okflag = 'no';
        }
        if (okflag == 'yes') {
          //showAddress(zipcode, 15, 'yes');
          var childframe = document.getElementById('resultiframe');
          var framecontent = childframe.contentDocument || childframe.contentWindow.document;
          framecontent.getElementById("resultset").innerHTML = 'Searching...';
          showAddressfromlist(zipcode, 15, 'no', '', '', '', '');
          url = 'https://www.titleadvantage.com/nd1b/prosearchmap_results2.asp?agid=' + 224649 + '&sk=' + 2199 + '&type=apn&apn=' + apn + '&zip=' + zipcode;
          //alert('url: ' + url);
          loadXMLDoc(url);
        } else {
          alert(themess);
        }
      }
    }

    function loadXMLDoc_old(url) {
      //alert('getting: ' + url);

      $.ajax({
        url: url,
        method: "POST",
        dataType: "xml",
        success: function(data) {
          xmlDoc = data;
          var ajaxstatus = xmlDoc.getElementsByTagName("status")[0].childNodes[0].nodeValue;
          //alert('ajax status: ' + ajaxstatus);
          if (ajaxstatus == 'OK') {
            var proparray = new Array();
            var proplabel = '';
            var resultlist = '<table border=0 cellpadding=3 cellspacing=4>';
            var properties = xmlDoc.getElementsByTagName("property");
            //alert("Found: " + properties.length);
            for (i = 0; i < properties.length; i++) {
              var temp = '';
              temp = properties[i].getElementsByTagName("propaddress")[0]
              if (temp && temp.childNodes.length) {
                var propaddress = temp.childNodes[0].nodeValue;
              }
              temp = properties[i].getElementsByTagName("propcity")[0]
              if (temp && temp.childNodes.length) {
                var propcity = temp.childNodes[0].nodeValue;
              }
              temp = properties[i].getElementsByTagName("propstate")[0]
              if (temp && temp.childNodes.length) {
                var propstate = temp.childNodes[0].nodeValue;
              }
              temp = properties[i].getElementsByTagName("propzip")[0]
              if (temp && temp.childNodes.length) {
                var propzip = temp.childNodes[0].nodeValue;
              }
              temp = properties[i].getElementsByTagName("propowner")[0]
              if (temp && temp.childNodes.length) {
                var propowner = temp.childNodes[0].nodeValue;
              }
              temp = properties[i].getElementsByTagName("propapn")[0]
              if (temp && temp.childNodes.length) {
                var propapn = temp.childNodes[0].nodeValue;
              }
              temp = properties[i].getElementsByTagName("propfips")[0]
              if (temp && temp.childNodes.length) {
                var propfips = temp.childNodes[0].nodeValue;
              }

              //				   var propapn= properties[i].getElementsByTagName("propapn")[0].childNodes[0].nodeValue;

              proplabel = propaddress + '<BR>' + propcity + ', ' + propstate + ' ' + propzip + '<BR>';
              proplabel = proplabel + 'Owner: ' + propowner + '<BR>' + 'APN: ' + propapn;

              //add to property array
              proparray[i] = propaddress + ', ' + propzip;

              //create list for result frame
              resultlist = resultlist + '<tr><td bgcolor=\"#ffffff\"><div class=\"btext\" style=\"font-size:14px;\" id=\"resbox' + i + '\">';
              resultlist = resultlist + '<a href=\"javascript:parent.showAddressfromlist(\'' + propaddress + ', ' + propzip + '\',\'\',\'yes\',\'' + propapn + '\',\'' + propstate + '\',\'' + propzip + '\',\'' + proplabel + '\');\">';
              resultlist = resultlist + proplabel + '</a></div></td></tr>'

              droppin(propaddress + ', ' + propzip, propapn, propstate, propzip, proplabel);
              //	map.setZoom(map.getBoundsZoomLevel(bounds));

            }
            resultlist = resultlist + '</table>'
          } else {
            resultlist = xmlDoc.getElementsByTagName("desc")[0].childNodes[0].nodeValue;
          }
          //alert(resultlist);
          //var iframe = document.getElementById("resultiframe");
          //iframe.getElementById("resultset").innerHTML = resultlist;
          //$("#resultiframe").$("#resultset").html("Hello World");
          var childframe = document.getElementById('resultiframe');
          var framecontent = childframe.contentDocument || childframe.contentWindow.document;
          framecontent.getElementById("resultset").innerHTML = resultlist;
          //alert(resultlist);
          if (properties.length == 1) {
            showAddressfromlist(propaddress, propzip, 'yes', propapn, propstate, propzip, proplabel);
          }

        },
        error: function(jxhr, status, err) {
          alert("Ajax error: status = " + status + ", err = " + err);
        }
      });


    }

    function getpropinfo_old(address, zip) {
      var url = 'prosearch_ajax_json.asp?add=' + address + '&z=' + zip;
      //alert('getting: ' + url);
      console.log("getting prop info at: \n" + url);

      //call an api
      xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", url, true);
      xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          var headerInfo = "";
          var propResultJSON = JSON.parse(xmlhttp.responseText);
          console.log("propResult:\n" + JSON.stringify(propResultJSON));
          if (propResultJSON.Status == "Success") {
            var propaddress = propResultJSON.propaddress;
            console.log("propaddress: " + propaddress);
            var propapn = propResultJSON.propapn;
            console.log("propapn: " + propapn);
            headerInfo = propResultJSON.propowner + "<BR>" + propResultJSON.propaddress + "<BR>" + propResultJSON.propcity + ", " + propResultJSON.propstate + " " + propResultJSON.propzip + "<BR>APN: " + propResultJSON.propapn;
            document.addform.propapn.value = propapn;
            document.addform.propaddress.value = propaddress;
            document.addform.propcity.value = propResultJSON.propcity;
            document.addform.propstate.value = propResultJSON.propstate;
            document.addform.propzip.value = propResultJSON.propzip;
            document.addform.propfips.value = propResultJSON.propfips;
            document.addform.propcounty.value = propResultJSON.propcounty;

          } else {
            headerInfo = "Property Details Not Found.<BR>" + propResultJSON.Details;
          }
          document.getElementById("propheader").innerHTML = headerInfo;
        }
      };
      xmlhttp.send();

      document.getElementById("mapload").style.display = 'none';
      document.getElementById("mapinstructions").style.display = '';
      //alert('done');
    }

    function changesearchtype() {
      //alert('changing search type to' + document.getElementById("searchby").value);
      document.getElementById("searchadd").style.display = 'none';
      document.getElementById("searchown").style.display = 'none';
      document.getElementById("searchapn").style.display = 'none';
      var searchbyval = document.getElementById("searchby").value;
      if (searchbyval == 'add') {
        document.getElementById("searchadd").style.display = '';
      }
      if (searchbyval == 'own') {
        document.getElementById("searchown").style.display = '';
      }
      if (searchbyval == 'apn') {
        document.getElementById("searchapn").style.display = '';
      }
    }
  </script>
  <script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      neighborhood: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      postal_code: 'short_name'
    };
    var streetNum;
    var streetName;
    var city;
    var zipCode;
    var state;
    var dom_zipcode = document.getElementById("postal_code");

    dom_zipcode.addEventListener("keyup", function(event) {
      // Cancel the default action, if needed
      event.preventDefault();
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
        // Trigger the button element with a click
        document.getElementById("search").click();
      }
    });

    document.getElementById("propcounty").addEventListener("keyup", function(event) {
      // Cancel the default action, if needed
      event.preventDefault();
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
        // Trigger the button element with a click
        document.getElementById("search").click();
      }
    });

    document.getElementById("city").addEventListener("keyup", function(event) {
      // Cancel the default action, if needed
      event.preventDefault();
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
        // Trigger the button element with a click
        document.getElementById("search").click();
      }
    });




    function removeDiacritics(str) {

      var defaultDiacriticsRemovalMap = [{
          'base': 'A',
          'letters': /[\u0041\u24B6\uFF21\u00C0\u00C1\u00C2\u1EA6\u1EA4\u1EAA\u1EA8\u00C3\u0100\u0102\u1EB0\u1EAE\u1EB4\u1EB2\u0226\u01E0\u00C4\u01DE\u1EA2\u00C5\u01FA\u01CD\u0200\u0202\u1EA0\u1EAC\u1EB6\u1E00\u0104\u023A\u2C6F]/g
        },
        {
          'base': 'AA',
          'letters': /[\uA732]/g
        },
        {
          'base': 'AE',
          'letters': /[\u00C6\u01FC\u01E2]/g
        },
        {
          'base': 'AO',
          'letters': /[\uA734]/g
        },
        {
          'base': 'AU',
          'letters': /[\uA736]/g
        },
        {
          'base': 'AV',
          'letters': /[\uA738\uA73A]/g
        },
        {
          'base': 'AY',
          'letters': /[\uA73C]/g
        },
        {
          'base': 'B',
          'letters': /[\u0042\u24B7\uFF22\u1E02\u1E04\u1E06\u0243\u0182\u0181]/g
        },
        {
          'base': 'C',
          'letters': /[\u0043\u24B8\uFF23\u0106\u0108\u010A\u010C\u00C7\u1E08\u0187\u023B\uA73E]/g
        },
        {
          'base': 'D',
          'letters': /[\u0044\u24B9\uFF24\u1E0A\u010E\u1E0C\u1E10\u1E12\u1E0E\u0110\u018B\u018A\u0189\uA779]/g
        },
        {
          'base': 'DZ',
          'letters': /[\u01F1\u01C4]/g
        },
        {
          'base': 'Dz',
          'letters': /[\u01F2\u01C5]/g
        },
        {
          'base': 'E',
          'letters': /[\u0045\u24BA\uFF25\u00C8\u00C9\u00CA\u1EC0\u1EBE\u1EC4\u1EC2\u1EBC\u0112\u1E14\u1E16\u0114\u0116\u00CB\u1EBA\u011A\u0204\u0206\u1EB8\u1EC6\u0228\u1E1C\u0118\u1E18\u1E1A\u0190\u018E]/g
        },
        {
          'base': 'F',
          'letters': /[\u0046\u24BB\uFF26\u1E1E\u0191\uA77B]/g
        },
        {
          'base': 'G',
          'letters': /[\u0047\u24BC\uFF27\u01F4\u011C\u1E20\u011E\u0120\u01E6\u0122\u01E4\u0193\uA7A0\uA77D\uA77E]/g
        },
        {
          'base': 'H',
          'letters': /[\u0048\u24BD\uFF28\u0124\u1E22\u1E26\u021E\u1E24\u1E28\u1E2A\u0126\u2C67\u2C75\uA78D]/g
        },
        {
          'base': 'I',
          'letters': /[\u0049\u24BE\uFF29\u00CC\u00CD\u00CE\u0128\u012A\u012C\u0130\u00CF\u1E2E\u1EC8\u01CF\u0208\u020A\u1ECA\u012E\u1E2C\u0197]/g
        },
        {
          'base': 'J',
          'letters': /[\u004A\u24BF\uFF2A\u0134\u0248]/g
        },
        {
          'base': 'K',
          'letters': /[\u004B\u24C0\uFF2B\u1E30\u01E8\u1E32\u0136\u1E34\u0198\u2C69\uA740\uA742\uA744\uA7A2]/g
        },
        {
          'base': 'L',
          'letters': /[\u004C\u24C1\uFF2C\u013F\u0139\u013D\u1E36\u1E38\u013B\u1E3C\u1E3A\u0141\u023D\u2C62\u2C60\uA748\uA746\uA780]/g
        },
        {
          'base': 'LJ',
          'letters': /[\u01C7]/g
        },
        {
          'base': 'Lj',
          'letters': /[\u01C8]/g
        },
        {
          'base': 'M',
          'letters': /[\u004D\u24C2\uFF2D\u1E3E\u1E40\u1E42\u2C6E\u019C]/g
        },
        {
          'base': 'N',
          'letters': /[\u004E\u24C3\uFF2E\u01F8\u0143\u00D1\u1E44\u0147\u1E46\u0145\u1E4A\u1E48\u0220\u019D\uA790\uA7A4]/g
        },
        {
          'base': 'NJ',
          'letters': /[\u01CA]/g
        },
        {
          'base': 'Nj',
          'letters': /[\u01CB]/g
        },
        {
          'base': 'O',
          'letters': /[\u004F\u24C4\uFF2F\u00D2\u00D3\u00D4\u1ED2\u1ED0\u1ED6\u1ED4\u00D5\u1E4C\u022C\u1E4E\u014C\u1E50\u1E52\u014E\u022E\u0230\u00D6\u022A\u1ECE\u0150\u01D1\u020C\u020E\u01A0\u1EDC\u1EDA\u1EE0\u1EDE\u1EE2\u1ECC\u1ED8\u01EA\u01EC\u00D8\u01FE\u0186\u019F\uA74A\uA74C]/g
        },
        {
          'base': 'OI',
          'letters': /[\u01A2]/g
        },
        {
          'base': 'OO',
          'letters': /[\uA74E]/g
        },
        {
          'base': 'OU',
          'letters': /[\u0222]/g
        },
        {
          'base': 'P',
          'letters': /[\u0050\u24C5\uFF30\u1E54\u1E56\u01A4\u2C63\uA750\uA752\uA754]/g
        },
        {
          'base': 'Q',
          'letters': /[\u0051\u24C6\uFF31\uA756\uA758\u024A]/g
        },
        {
          'base': 'R',
          'letters': /[\u0052\u24C7\uFF32\u0154\u1E58\u0158\u0210\u0212\u1E5A\u1E5C\u0156\u1E5E\u024C\u2C64\uA75A\uA7A6\uA782]/g
        },
        {
          'base': 'S',
          'letters': /[\u0053\u24C8\uFF33\u1E9E\u015A\u1E64\u015C\u1E60\u0160\u1E66\u1E62\u1E68\u0218\u015E\u2C7E\uA7A8\uA784]/g
        },
        {
          'base': 'T',
          'letters': /[\u0054\u24C9\uFF34\u1E6A\u0164\u1E6C\u021A\u0162\u1E70\u1E6E\u0166\u01AC\u01AE\u023E\uA786]/g
        },
        {
          'base': 'TZ',
          'letters': /[\uA728]/g
        },
        {
          'base': 'U',
          'letters': /[\u0055\u24CA\uFF35\u00D9\u00DA\u00DB\u0168\u1E78\u016A\u1E7A\u016C\u00DC\u01DB\u01D7\u01D5\u01D9\u1EE6\u016E\u0170\u01D3\u0214\u0216\u01AF\u1EEA\u1EE8\u1EEE\u1EEC\u1EF0\u1EE4\u1E72\u0172\u1E76\u1E74\u0244]/g
        },
        {
          'base': 'V',
          'letters': /[\u0056\u24CB\uFF36\u1E7C\u1E7E\u01B2\uA75E\u0245]/g
        },
        {
          'base': 'VY',
          'letters': /[\uA760]/g
        },
        {
          'base': 'W',
          'letters': /[\u0057\u24CC\uFF37\u1E80\u1E82\u0174\u1E86\u1E84\u1E88\u2C72]/g
        },
        {
          'base': 'X',
          'letters': /[\u0058\u24CD\uFF38\u1E8A\u1E8C]/g
        },
        {
          'base': 'Y',
          'letters': /[\u0059\u24CE\uFF39\u1EF2\u00DD\u0176\u1EF8\u0232\u1E8E\u0178\u1EF6\u1EF4\u01B3\u024E\u1EFE]/g
        },
        {
          'base': 'Z',
          'letters': /[\u005A\u24CF\uFF3A\u0179\u1E90\u017B\u017D\u1E92\u1E94\u01B5\u0224\u2C7F\u2C6B\uA762]/g
        },
        {
          'base': 'a',
          'letters': /[\u0061\u24D0\uFF41\u1E9A\u00E0\u00E1\u00E2\u1EA7\u1EA5\u1EAB\u1EA9\u00E3\u0101\u0103\u1EB1\u1EAF\u1EB5\u1EB3\u0227\u01E1\u00E4\u01DF\u1EA3\u00E5\u01FB\u01CE\u0201\u0203\u1EA1\u1EAD\u1EB7\u1E01\u0105\u2C65\u0250]/g
        },
        {
          'base': 'aa',
          'letters': /[\uA733]/g
        },
        {
          'base': 'ae',
          'letters': /[\u00E6\u01FD\u01E3]/g
        },
        {
          'base': 'ao',
          'letters': /[\uA735]/g
        },
        {
          'base': 'au',
          'letters': /[\uA737]/g
        },
        {
          'base': 'av',
          'letters': /[\uA739\uA73B]/g
        },
        {
          'base': 'ay',
          'letters': /[\uA73D]/g
        },
        {
          'base': 'b',
          'letters': /[\u0062\u24D1\uFF42\u1E03\u1E05\u1E07\u0180\u0183\u0253]/g
        },
        {
          'base': 'c',
          'letters': /[\u0063\u24D2\uFF43\u0107\u0109\u010B\u010D\u00E7\u1E09\u0188\u023C\uA73F\u2184]/g
        },
        {
          'base': 'd',
          'letters': /[\u0064\u24D3\uFF44\u1E0B\u010F\u1E0D\u1E11\u1E13\u1E0F\u0111\u018C\u0256\u0257\uA77A]/g
        },
        {
          'base': 'dz',
          'letters': /[\u01F3\u01C6]/g
        },
        {
          'base': 'e',
          'letters': /[\u0065\u24D4\uFF45\u00E8\u00E9\u00EA\u1EC1\u1EBF\u1EC5\u1EC3\u1EBD\u0113\u1E15\u1E17\u0115\u0117\u00EB\u1EBB\u011B\u0205\u0207\u1EB9\u1EC7\u0229\u1E1D\u0119\u1E19\u1E1B\u0247\u025B\u01DD]/g
        },
        {
          'base': 'f',
          'letters': /[\u0066\u24D5\uFF46\u1E1F\u0192\uA77C]/g
        },
        {
          'base': 'g',
          'letters': /[\u0067\u24D6\uFF47\u01F5\u011D\u1E21\u011F\u0121\u01E7\u0123\u01E5\u0260\uA7A1\u1D79\uA77F]/g
        },
        {
          'base': 'h',
          'letters': /[\u0068\u24D7\uFF48\u0125\u1E23\u1E27\u021F\u1E25\u1E29\u1E2B\u1E96\u0127\u2C68\u2C76\u0265]/g
        },
        {
          'base': 'hv',
          'letters': /[\u0195]/g
        },
        {
          'base': 'i',
          'letters': /[\u0069\u24D8\uFF49\u00EC\u00ED\u00EE\u0129\u012B\u012D\u00EF\u1E2F\u1EC9\u01D0\u0209\u020B\u1ECB\u012F\u1E2D\u0268\u0131]/g
        },
        {
          'base': 'j',
          'letters': /[\u006A\u24D9\uFF4A\u0135\u01F0\u0249]/g
        },
        {
          'base': 'k',
          'letters': /[\u006B\u24DA\uFF4B\u1E31\u01E9\u1E33\u0137\u1E35\u0199\u2C6A\uA741\uA743\uA745\uA7A3]/g
        },
        {
          'base': 'l',
          'letters': /[\u006C\u24DB\uFF4C\u0140\u013A\u013E\u1E37\u1E39\u013C\u1E3D\u1E3B\u017F\u0142\u019A\u026B\u2C61\uA749\uA781\uA747]/g
        },
        {
          'base': 'lj',
          'letters': /[\u01C9]/g
        },
        {
          'base': 'm',
          'letters': /[\u006D\u24DC\uFF4D\u1E3F\u1E41\u1E43\u0271\u026F]/g
        },
        {
          'base': 'n',
          'letters': /[\u006E\u24DD\uFF4E\u01F9\u0144\u00F1\u1E45\u0148\u1E47\u0146\u1E4B\u1E49\u019E\u0272\u0149\uA791\uA7A5]/g
        },
        {
          'base': 'nj',
          'letters': /[\u01CC]/g
        },
        {
          'base': 'o',
          'letters': /[\u006F\u24DE\uFF4F\u00F2\u00F3\u00F4\u1ED3\u1ED1\u1ED7\u1ED5\u00F5\u1E4D\u022D\u1E4F\u014D\u1E51\u1E53\u014F\u022F\u0231\u00F6\u022B\u1ECF\u0151\u01D2\u020D\u020F\u01A1\u1EDD\u1EDB\u1EE1\u1EDF\u1EE3\u1ECD\u1ED9\u01EB\u01ED\u00F8\u01FF\u0254\uA74B\uA74D\u0275]/g
        },
        {
          'base': 'oi',
          'letters': /[\u01A3]/g
        },
        {
          'base': 'ou',
          'letters': /[\u0223]/g
        },
        {
          'base': 'oo',
          'letters': /[\uA74F]/g
        },
        {
          'base': 'p',
          'letters': /[\u0070\u24DF\uFF50\u1E55\u1E57\u01A5\u1D7D\uA751\uA753\uA755]/g
        },
        {
          'base': 'q',
          'letters': /[\u0071\u24E0\uFF51\u024B\uA757\uA759]/g
        },
        {
          'base': 'r',
          'letters': /[\u0072\u24E1\uFF52\u0155\u1E59\u0159\u0211\u0213\u1E5B\u1E5D\u0157\u1E5F\u024D\u027D\uA75B\uA7A7\uA783]/g
        },
        {
          'base': 's',
          'letters': /[\u0073\u24E2\uFF53\u00DF\u015B\u1E65\u015D\u1E61\u0161\u1E67\u1E63\u1E69\u0219\u015F\u023F\uA7A9\uA785\u1E9B]/g
        },
        {
          'base': 't',
          'letters': /[\u0074\u24E3\uFF54\u1E6B\u1E97\u0165\u1E6D\u021B\u0163\u1E71\u1E6F\u0167\u01AD\u0288\u2C66\uA787]/g
        },
        {
          'base': 'tz',
          'letters': /[\uA729]/g
        },
        {
          'base': 'u',
          'letters': /[\u0075\u24E4\uFF55\u00F9\u00FA\u00FB\u0169\u1E79\u016B\u1E7B\u016D\u00FC\u01DC\u01D8\u01D6\u01DA\u1EE7\u016F\u0171\u01D4\u0215\u0217\u01B0\u1EEB\u1EE9\u1EEF\u1EED\u1EF1\u1EE5\u1E73\u0173\u1E77\u1E75\u0289]/g
        },
        {
          'base': 'v',
          'letters': /[\u0076\u24E5\uFF56\u1E7D\u1E7F\u028B\uA75F\u028C]/g
        },
        {
          'base': 'vy',
          'letters': /[\uA761]/g
        },
        {
          'base': 'w',
          'letters': /[\u0077\u24E6\uFF57\u1E81\u1E83\u0175\u1E87\u1E85\u1E98\u1E89\u2C73]/g
        },
        {
          'base': 'x',
          'letters': /[\u0078\u24E7\uFF58\u1E8B\u1E8D]/g
        },
        {
          'base': 'y',
          'letters': /[\u0079\u24E8\uFF59\u1EF3\u00FD\u0177\u1EF9\u0233\u1E8F\u00FF\u1EF7\u1E99\u1EF5\u01B4\u024F\u1EFF]/g
        },
        {
          'base': 'z',
          'letters': /[\u007A\u24E9\uFF5A\u017A\u1E91\u017C\u017E\u1E93\u1E95\u01B6\u0225\u0240\u2C6C\uA763]/g
        }
      ];

      for (var i = 0; i < defaultDiacriticsRemovalMap.length; i++) {
        str = str.replace(defaultDiacriticsRemovalMap[i].letters, defaultDiacriticsRemovalMap[i].base);
      }

      return str;

    }

    function initAutocomplete() {
      // Create the autocomplete object, restricting the search to geographical
      // location types.
      autocomplete = new google.maps.places.Autocomplete(
        (document.getElementById('smartSearchInput')), {
          types: ['geocode']
        });

      // When the user selects an address from the dropdown, populate the address
      // fields in the form.
      autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
      // Get the place details from the autocomplete object.
      //alert('filling in address');
      //document.getElementById("search").style.display = "none";
      //document.getElementById("Go Back").style.display = "none";
      //document.getElementById("loadingImage").style.display = "block";
      var place = autocomplete.getPlace();
      document.getElementById("searchfield1").value = '';
      document.getElementById("city").value = '';
      document.getElementById("state").value = '';
      document.getElementById("zip").value = '';

      // Get each component of the address from the place details
      // and fill the corresponding field on the form.


      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        switch (addressType) {
          case "street_number":
            streetNum = place.address_components[i][componentForm[addressType]];
            break;
          case "route":
            streetName = place.address_components[i][componentForm[addressType]];
            break;
          case "locality":
            city = place.address_components[i][componentForm[addressType]];
            break;
          case "postal_code":
            zipCode = place.address_components[i][componentForm[addressType]];
            break;
          case "administrative_area_level_1":
            state = place.address_components[i][componentForm[addressType]];
            break;
        }
      }

      if (streetName.endsWith("Southeast")) {
        streetName = streetName.replace("Southeast", "");
      }

      if (streetName.endsWith("Southwest")) {
        streetName = streetName.replace("Southwest", "");
      }

      if (streetName.endsWith("Northwest")) {
        streetName = streetName.replace("Northwest", "");
      }

      if (streetName.endsWith("Northeast")) {
        streetName = streetName.replace("Northeast", "");
      }


      if (streetNum != null) {
        var streetFull = streetNum + " " + streetName;
      } else {
        var streetFull = streetName;
      }

      document.getElementById("searchfield1").value = removeDiacritics(streetFull);
      //document.getElementById("city").value = removeDiacritics(city);
      document.getElementById("state").value = state;
      document.getElementById("zip").value = zipCode;

      callSubmit();

      //document.getElementById("searchForm").submit();
      //return false;
    }

    function callSubmit() {
      //alert('filling in address');
      //document.getElementById("searchForm").submit();
      document.getElementById("searchAddress").submit();
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
    }

    function showsmartsearch() {
      document.getElementById("titlesearch").style.display = "inline-block";
      document.getElementById("locationField").style.display = "inline-block";
    }


    String.prototype.endsWith = function(suffix) {
      return this.indexOf(suffix, this.length - suffix.length) !== -1;
    };
  </script>

</body>

</html>