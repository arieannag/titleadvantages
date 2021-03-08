<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Title Advantage</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/stylefile-oct.css">

  <style>
    #fileOptions {
      max-width: 500px;
      width: 100%;
      margin: 25px auto;
      text-align: left;
    }

    #fileOptions input[type="checkbox"] {
      margin-top: 10px;
      margin-right: 5px;
    }

    #sendModal label,
    #sendModal input[type="text"],
    #sendModal textarea {
      text-align: left;
      display: block;
    }

    #sendModal label {
      margin-top: 10px;
    }

    .doc-inline-label {
      display: inline !important;
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
  <style>
    a {
      display: contents;
    }
  </style>
</head>

<body data-new-gr-c-s-check-loaded="14.997.0" data-gr-ext-installed="">
  <!-- include here -->
  <!-- BEGIN TOP NAV -->
  <div id="topbar">
    <a href="index.php">
      <div id="home">
        <img src="img/home-icon.png" alt="Home Icon">
      </div>
    </a>
    <div id="companyLogo"><img src="img/TA-oct.png"></div>
    <div id="repNameTop">
      <p></p>
    </div>
    <div class="dropdown" id="dropdown">
      <button onclick="dropdown()" class="dropbtn" id="dropbtn"><img src="img/user-icon.png" alt="User Icon"></button>
      <div id="userDropdown" class="dropdown-content drop-move">

        <!-- <a href="userSettings.php"> User Settings </a> -->

        <!--
          ADDED ID AND DROPREPPHOTO * 2/10/20 *
          Replace the whole dropdown to be safe
        -->

        <a href="contactrep.php" id="dropRepBtn" style="background: rgb(141, 141, 141);">Contact Rep

          <div id="dropRepCont" style="background: rgb(141, 141, 141);">
            <div id="dropRepPhoto"><img src="https://www.titleadvantage.com/repphotos/Danny Arguelles.jpg"></div>
            <h4 id="dropRepName">Danny Arguelles</h4>
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
            <path class="cls-1" d="M210.12,5.43V.29c-1.32-.13-1.81-.21-2.31-.21C154.65.07,101.49-.14,48.33.15,21.84.3.06,22.83,0,49.3q-.08,78.5,0,157v4.63c1.34.13,1.83.21,2.33.21,53.16,0,106.32.22,159.48-.08,26.54-.15,48.26-22.64,48.29-49.13Q210.17,83.68,210.12,5.43ZM105.06,177.07c-14.47-14.47-54-59.17-54-89A54,54,0,0,1,159,88.1C159,117.9,120.21,161.93,105.06,177.07Z"></path>
            <path class="cls-1" d="M105.06,60.65a22.72,22.72,0,1,0,22.72,22.72A22.72,22.72,0,0,0,105.06,60.65Z"></path>
          </svg>
          <p>Properties</p>
        </div>
      </a>
      <a href="farms.php">
        <div class="navitem" id="navitem2">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 209.84 210.04">
            <defs></defs>
            <title>farms-icon</title>
            <path class="cls-1" d="M209.83.58V5.65q0,76.47,0,153c0,28.79-21.63,51.12-50.42,51.28-52,.28-104,.08-156,.07-1,0-1.94-.12-3.21-.2-.09-1.83-.24-3.44-.24-5q0-76.47.09-153C.14,22.94,20.48.73,49.18.36c53-.68,106-.19,158.94-.17A11.83,11.83,0,0,1,209.83.58Zm-143,188.56C78,171.85,89.72,156,95.35,136.06c7.33,8.47,14.37,15.53,15.39,26.58.64,6.87,2.92,13.61,4.64,20.36.31,1.22,1.44,3.15,2.26,3.18,6.72.26,13.46.15,20.55.15-1.05-7.14-2.07-13.5-2.91-19.9-1.79-13.49-3.55-26.92-11.33-38.72-3.1-4.68-5.33-9.94-7.93-14.95-3.73-7.19-3.32-10.32,1.55-16.17,5.46,3.23,10.56,6.85,16.16,9.38a90.6,90.6,0,0,0,18.4,6.07c2.74.58,7.07-.44,8.79-2.39,2.58-2.94-.09-8.18-4.2-10.25-6.38-3.21-12.7-6.52-19.16-9.55-2.88-1.34-4.36-3-4.33-6.36a21.9,21.9,0,0,0-5-14.71,82.88,82.88,0,0,1-4.84-7.19c13.07-8.66,17-21.45,10.44-32.82C127.75,18.21,113.88,14.28,103,20c-12,6.33-14.79,19.11-7.67,34.62-2.44.37-5.22.2-7.41,1.25-9,4.29-17.85,8.85-26.59,13.61a7.27,7.27,0,0,0-3.42,4.76c-1.22,11.18-2.05,22.41-3,34.06,3.33.3,6.46.39,9.5.92,2.84.48,4.28-.44,5.14-3.17,1.34-4.26,3.06-8.4,4.46-12.64s4.65-6.4,9.51-8c-6.36,20-12.19,39.3-18.73,58.39-3.37,9.84-8.09,19.22-12,28.9-.54,1.34-.47,3.85.4,4.68C57.31,181.36,61.85,184.94,66.83,189.14Z"></path>
          </svg>
          <p>Farms</p>
        </div>
      </a>
      <a href="netadvantage.php" id="navitem3">
        <div class="navitem">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210.1 211.16">
            <defs></defs>
            <title>net-icon</title>
            <path class="cls-1" d="M0,210.79v-5.67Q0,127.89,0,50.64C0,22.05,21.84.07,50.42,0q77.49-.11,155,0h4.69V5.51q0,78.22,0,156.47c0,26.23-21.61,48.8-47.89,49-53.32.37-106.65.12-160,.11C1.73,211.07,1.24,211,0,210.79ZM170.26,39H43V166.11H170.26Z"></path>
            <path class="cls-1" d="M81.13,51H156v75H81.13Z"></path>
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
            <path class="cls-1" d="M210.11.22v55q0,53.07,0,106.15a49.51,49.51,0,0,1-49.22,49.76c-52.33.17-104.66,0-157,0-1.12,0-2.25-.09-3.89-.17v-5.11q0-78,0-156A49.55,49.55,0,0,1,49.24.09c52.33-.17,104.66,0,157,0C207.36,0,208.48.14,210.11.22Zm-47.7,103.89c0-18.92,0-37.84,0-56.76,0-7.93-3.61-11.47-11.62-11.48q-46.8,0-93.6,0c-7.93,0-11.45,3.6-11.45,11.65q0,56,0,112c0,8.27,3.53,11.74,11.88,11.75q46.54,0,93.1,0c8.23,0,11.69-3.56,11.71-11.93Q162.44,131.74,162.41,104.11Z"></path>
            <path class="cls-1" d="M104.11,74.47q-20.89,0-41.79,0c-5.69,0-7-1.3-7.1-7-.08-5,0-10,0-14.93,0-4.19,1.74-6.44,6.26-6.43q42.54.1,85.07,0c4.46,0,6.38,2.06,6.38,6.32,0,5.31,0,10.61,0,15.92,0,4.31-2.11,6.22-6.51,6.19C132.3,74.4,118.21,74.47,104.11,74.47Z"></path>
            <path class="cls-1" d="M135.6,137.21c0-4.64-.13-9.29,0-13.92.2-5.69,3.88-9.7,8.63-9.69,4.59,0,8.39,3.72,8.54,9.21q.38,14.41,0,28.84c-.14,5.37-4.1,9.28-8.56,9.28s-8.43-4.28-8.61-9.8C135.48,146.49,135.6,141.85,135.6,137.21Z"></path>
            <path class="cls-1" d="M64,103.29c-4.45.1-8.59-4.19-8.74-9.05s3.64-9.28,8.19-9.51c4.72-.24,9,4.12,9,9.2C72.52,98.67,68.43,103.19,64,103.29Z"></path>
            <path class="cls-1" d="M90.77,103.28c-4.37.07-8.61-4.33-8.74-9.09s3.78-9.26,8.28-9.46c4.71-.22,9,4.2,9,9.24C99.3,98.7,95.16,103.21,90.77,103.28Z"></path>
            <path class="cls-1" d="M152.83,93.8c.08,4.85-3.8,9.29-8.3,9.48s-9-4.45-8.91-9.4,4-9.13,8.58-9.16S152.74,88.87,152.83,93.8Z"></path>
            <path class="cls-1" d="M117.39,84.73c4.55,0,8.57,4.14,8.7,9s-4.25,9.63-8.82,9.5c-4.4-.13-8.49-4.67-8.46-9.38S112.87,84.76,117.39,84.73Z"></path>
            <path class="cls-1" d="M63.89,132.11c-4.5,0-8.53-4.3-8.61-9.17-.08-5.13,4-9.48,8.83-9.34,4.56.12,8.46,4.46,8.39,9.31S68.3,132.11,63.89,132.11Z"></path>
            <path class="cls-1" d="M99.31,122.68c.08,4.69-4,9.27-8.4,9.43S82.26,128,82,123.17c-.22-5,3.86-9.57,8.62-9.57C95.25,113.6,99.23,117.78,99.31,122.68Z"></path>
            <path class="cls-1" d="M117.32,113.6c4.61-.08,8.59,4,8.76,8.94s-4.13,9.64-8.73,9.57c-4.39-.07-8.53-4.57-8.54-9.29S112.76,113.68,117.32,113.6Z"></path>
            <path class="cls-1" d="M72.5,151.61c0,4.85-4.09,9.29-8.59,9.32s-8.6-4.3-8.61-9.25,3.85-9.2,8.54-9.21S72.48,146.66,72.5,151.61Z"></path>
            <path class="cls-1" d="M90.48,142.47c4.68-.09,8.71,4,8.83,9,.11,4.77-4,9.34-8.47,9.46s-8.71-4.23-8.81-9.09S85.85,142.57,90.48,142.47Z"></path>
            <path class="cls-1" d="M126.09,151.53c.08,4.82-4,9.32-8.52,9.39s-8.69-4.34-8.76-9.16,3.9-9.22,8.53-9.29S126,146.53,126.09,151.53Z"></path>
          </svg>
          <p>Calculators</p>
        </div>
      </a>
      <a href="index.php#moreApps">
        <div class="navitem" id="moreAppsSide">
          <svg id="Layer_1" data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 209.84 210.04">
            <title>moreapps-icon</title>
            <path class="cls-1" d="M79.15,47.05c-4.21-.23-8.42-.43-12.67-.64-4.25.21-8.53.39-12.8.66a6.64,6.64,0,0,0-6.11,6.19c-.11,8.25-.17,16.49,0,24.74.07,4.33,2.71,6.93,7.05,7q12,.21,24,0c4.17-.07,6.66-2.78,7-7,.09-1.42.28-2.85.26-4.27-.09-6.94-.12-13.89-.41-20.83C85.24,49.76,82.28,47.23,79.15,47.05Z"></path>
            <path class="cls-1" d="M79.27,125.34a144.9,144.9,0,0,0-25.68,0c-2.93.26-5.85,3-6,5.91-.27,4.34-.45,8.68-.67,13,.21,4.17.39,8.27.62,12.36.22,3.74,2.71,6.58,6.48,6.66,8.37.18,16.76.16,25.13,0a6.39,6.39,0,0,0,6.27-5.85,137.75,137.75,0,0,0,0-26.24A6.86,6.86,0,0,0,79.27,125.34Z"></path>
            <path class="cls-1" d="M156.15,125.34a142.92,142.92,0,0,0-24.91,0c-3.83.33-6.67,2.77-6.74,6.56q-.21,12.47,0,24.92a6.5,6.5,0,0,0,6.29,6.44q12.73.26,25.47,0a6.52,6.52,0,0,0,6.12-6c.27-4.34.45-8.68.67-13-.22-4.28-.41-8.49-.64-12.7A6.74,6.74,0,0,0,156.15,125.34Z"></path>
            <path class="cls-1" d="M210,4.84V-.3c-1.32-.13-1.81-.21-2.31-.21-53.16,0-106.32-.22-159.48.07C21.69-.29-.09,22.24-.12,48.71q-.08,78.5,0,157v4.63c1.34.13,1.83.21,2.33.21,53.16,0,106.32.22,159.48-.08,26.54-.15,48.26-22.64,48.29-49.13Q210,83.09,210,4.84ZM98.23,160.51c-1.33,8.46-9.37,15.27-17.86,16a172.3,172.3,0,0,1-27.73,0c-8.68-.71-16.52-7.32-17.91-16.34a100.59,100.59,0,0,1,.13-32.3A19.3,19.3,0,0,1,53,112.09c8.92-.31,17.88-.34,26.8,0A19.91,19.91,0,0,1,98.7,131c.27,4.46.48,8.93.76,14.37C99.12,149.76,99.06,155.2,98.23,160.51Zm0-78c-1.33,8.41-9.49,15.17-18,15.76a184.55,184.55,0,0,1-26.81,0c-9.46-.71-17.17-7-18.65-16.36a103.37,103.37,0,0,1,0-31.75A18.93,18.93,0,0,1,51,34.15a107,107,0,0,1,32.3.27c7.77,1.34,14.65,9.14,15.31,17,.4,4.82.53,9.67.84,15.56C99.12,71.46,99.06,77,98.19,82.46Zm77.49,75.62c-.85,10.06-9.14,17.7-19.25,18.44a183.35,183.35,0,0,1-26.62,0c-9.58-.69-18-8.95-18.54-18.49-.26-4.65-.49-9.31-.77-14.76.34-4.54.35-9.92,1.22-15.16a19.47,19.47,0,0,1,18.37-16c8.86-.3,17.75-.31,26.62,0A19.87,19.87,0,0,1,175.54,130,145.76,145.76,0,0,1,175.68,158.08Zm-.05-77.9a20.18,20.18,0,0,1-19.16,18.07c-4.35.12-8.69.44-14.09.73-4.46-.35-10-.41-15.46-1.28-8.31-1.34-15.08-9.52-15.67-17.91a188.47,188.47,0,0,1,0-27c.7-9.39,7.07-17.16,16.45-18.57a102.32,102.32,0,0,1,32.11.12A19.42,19.42,0,0,1,175.44,51,132,132,0,0,1,175.63,80.18Z"></path>
            <path class="cls-1" d="M156.32,47.09c-8.24-.11-16.49-.18-24.73,0-4.44.07-7.06,2.72-7.13,7.14q-.19,11.89,0,23.8c.06,4.15,2.79,6.75,6.91,7,1.49.11,3,.3,4.46.28,6.88-.08,13.77-.12,20.64-.41a6.57,6.57,0,0,0,5.95-6.33c.23-4.21.43-8.42.64-12.63-.22-4.29-.41-8.57-.66-12.84A6.66,6.66,0,0,0,156.32,47.09Z"></path>
          </svg>
          <p>More Tools</p>
        </div>
      </a>
    </nav>
    <!-- END SIDE NAV -->
    <!-- end include -->

    <main>


      <div class="toolboxSearch" id="toolboxSearch">
        <div class="innerMainSearch" id="innerToolSearch">
          <!-- Changed header 1/16/20 -->
          <h2>Search for documents</h2>
          <input id="search" type="text" class="ui-autocomplete-input" autocomplete="off">
          <button type="submit" name="button" id="docSearchBtn">Search</button>
        </div>
      </div>

      <h2 id="titleHeader">School &amp; Community Information</h2>

      <div id="backButton"><button class="button" onclick="location.href='docToolbox.php'">Return to Main Folder</button></div>
      <button class="button" type="button" id="sendModalBtn" style="display: block;">Send Documents In Folder</button>


      <div class="toolbox-wrapper" id="toolboxWrapper"><a href="mdocs/Back to School Checklist.pdf" target="_blank">
          <div class="toolbox-item" id="">
            <div class="tool-icon"><img src="img/pdf.png" alt="file-icon"></div>
            <div class="tool-title">
              <h3>Back to School Checklist</h3>
              <p>TYPE: file</p>
            </div>
          </div>
        </a><a href="http://caaspp.cde.ca.gov/sb2016/Search" target="_blank">
          <div class="toolbox-item" id="">
            <div class="tool-icon"><img src="img/link.png" alt="file-icon"></div>
            <div class="tool-title">
              <h3>CAASPP School Test Results</h3>
              <p>link</p>
            </div>
          </div>
        </a><a href="https://www.crimereports.com/" target="_blank">
          <div class="toolbox-item" id="">
            <div class="tool-icon"><img src="img/link.png" alt="file-icon"></div>
            <div class="tool-title">
              <h3>Crime Reports</h3>
              <p>link</p>
            </div>
          </div>
        </a><a href="http://www.greatschools.org/" target="_blank">
          <div class="toolbox-item" id="">
            <div class="tool-icon"><img src="img/link.png" alt="file-icon"></div>
            <div class="tool-title">
              <h3>Great Schools</h3>
              <p>link</p>
            </div>
          </div>
        </a><a href="http://www.nsopr.gov/?lang=ENGLISH&amp;AspxAutoDetectCookieSupport=1" target="_blank">
          <div class="toolbox-item" id="">
            <div class="tool-icon"><img src="img/link.png" alt="file-icon"></div>
            <div class="tool-title">
              <h3>Megans Law site</h3>
              <p>link</p>
            </div>
          </div>
        </a><a href="http://www.homefair.com/real-estate/school-reports/index.asp" target="_blank">
          <div class="toolbox-item" id="">
            <div class="tool-icon"><img src="img/link.png" alt="file-icon"></div>
            <div class="tool-title">
              <h3>School Reports</h3>
              <p>link</p>
            </div>
          </div>
        </a></div>

      <div id="sendModal" class="modal">
        <div class="modal-content" style="text-align: center;">
          <span class="close" id="sendModalClose">×</span>
          <h2>Send Documents in Folder</h2>
          <p style="text-align: center;">Please select from the options below to choose which files you would like to send</p>
          <form action="#">

            <button id="checkAll" type="button"> Check All </button>
            <button id="uncheckAll" type="button"> Uncheck All </button>
            <div id="fileOptions"><input type="checkbox" id="5940" class="file-opt" name="file5940" value="5940" checked=""><label for="5940" class="doc-inline-label">Back to School Checklist</label><br><input type="checkbox" id="6777" class="file-opt" name="link6777" value="6777" checked=""><label for="6777" class="doc-inline-label">CAASPP School Test Results</label><br><input type="checkbox" id="5476" class="file-opt" name="link5476" value="5476" checked=""><label for="5476" class="doc-inline-label">Crime Reports</label><br><input type="checkbox" id="3031" class="file-opt" name="link3031" value="3031" checked=""><label for="3031" class="doc-inline-label">Great Schools</label><br><input type="checkbox" id="5485" class="file-opt" name="link5485" value="5485" checked=""><label for="5485" class="doc-inline-label">Megans Law site</label><br><input type="checkbox" id="3030" class="file-opt" name="link3030" value="3030" checked=""><label for="3030" class="doc-inline-label">School Reports</label><br></div>
            <label for="sendRecip">Recipient Email Addresses</label>
            <input type="text" id="sendRecip" value="">
            <label for="optMess">Optional Message</label>
            <textarea id="optMess" value=""></textarea>

            <div id="errmess"></div>
            <button type="button" class="button" id="sendModalSendBtn">Send</button>
            <button type="button" class="button" id="cancelModalSendBtn">Cancel</button>
          </form>
        </div>
      </div>


    </main>
  </div>

  <script src="master.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script>
    var toolboxWrapper = document.getElementById('toolboxWrapper');
    var user = "ASP._Page_nd1c_docToolbox_cshtml+User"
    var username = "Kyle Jonas";
    var memberID = "293272";
    var number = "";
    var jsonObj;
    var fileOptions = document.getElementById('fileOptions');
    var sendModal = document.getElementById('sendModal');
    var sendModalBtn = document.getElementById('sendModalBtn');
    var sendModalClose = document.getElementById('sendModalClose');
    var sendBtn = document.getElementById('sendModalSendBtn');
    var cancelBtn = document.getElementById('cancelModalSendBtn');
    var fileOpt = document.getElementsByClassName('file-opt');
    var checkAllBtn = document.getElementById('checkAll');
    var uncheckAllBtn = document.getElementById('uncheckAll');
    var itemsToSend = [];

    sendModalBtn.addEventListener('click', () => {
      sendModal.style.display = 'block';
    });

    sendModalClose.addEventListener('click', () => {
      sendModal.style.display = 'none';
    });

    cancelBtn.addEventListener('click', () => {
      sendModal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
      if (event.target == sendModal) {
        sendModal.style.display = "none";
      }
    });

    checkAllBtn.addEventListener('click', () => {
      for (var i = 0; i < fileOpt.length; i++) {
        fileOpt[i].checked = true;
      }
    });

    uncheckAllBtn.addEventListener('click', () => {
      for (var i = 0; i < fileOpt.length; i++) {
        fileOpt[i].checked = false;
      }
    });

    sendBtn.addEventListener('click', () => {
      itemsToSend = [];
      for (var i = 0; i < fileOpt.length; i++) {
        if (fileOpt[i].checked) {
          itemsToSend.push(fileOpt[i].value);
        }
      }
      console.log(itemsToSend);

      var postJson = {
        "memberID": 293272,
        "username": "Kyle Jonas",
        "repID": 1178,
        "fullname": "",
        "office": "Hemming Way",
        "phone": "6802109592",
        "senderemail": "myspotify@effobe.com",
        "recepientemail": document.getElementById('sendRecip').value,
        "itemToSend": itemsToSend,
        "optionalmessage": document.getElementById('optMess').value
      }

      if (postJson.itemToSend != "" && postJson.recepientemail != "") {
        var email = document.getElementById("sendRecip").value;
        var mailformat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (mailformat.test(email)) {
          sendBtn.innerHTML = "Creating Message..";

          postData('api_DocToolbox_email.php', postJson)
            .then(data => {
              console.log(data); // JSON data parsed by `data.json()` call
              if (data.Status == "Success") {
                sendBtn.innerHTML = "Send";
                sendModal.style.display = 'none';
              } else {
                //disply a message regarding the error.

              }
            });
        } else {
          document.getElementById("errmess").innerHTML = "Invalid email format";
        }
      }



    });



    console.log(memberID);

    var xmlhttp = new XMLHttpRequest();
    var docsURL = "../mobilemydocs_fulltree.asp?u=" + username + "&id=" + memberID;
    xmlhttp.open("POST", docsURL, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() { //Call a function when the state changes.
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        jsonObj = JSON.parse(xmlhttp.responseText);
        var statusValue = jsonObj.Status;
        if (statusValue == "Success") {
          console.log('API working!!!');
        } else {
          console.log('API not working...');
        }
      }
    }

    function updateDocsForFolder(number, parentNumber) {
      console.log(number + " " + parentNumber);
      var data = jsonObj;
      var itemObjects = jsonObj.itemObjects;
      var options = "";
      var files = "";
      var parentNumberInt = parseInt(parentNumber);
      var folderTitle = document.getElementById('titleHeader');
      var backButtonCont = document.getElementById('backButton');
      var newTitleText = "Document Toolbox";

      //get back button name and varirables
      var backButton = '';
      //First check if number is 0, if so, we don't need a back button since we are already at root
      if (number > 0) {
        //now check if parent is 0, then we know the parent is root
        if (parentNumberInt === 0) {
          //parent folder is root folder
          backButton = '<button class="button" onclick="updateDocsForFolder(0, 0);">Return to Main Folder</button>';
        }
        console.log('parent not 0 it is: ' + parentNumberInt);
        console.log('Size of the list: ' + itemObjects);
        //loop and find parent folder's name and ID (and folder's name)
        for (var i = 0; i < itemObjects.length; i++) {
          console.log("i: " + i);
          //get parent folder info
          if (itemObjects[i].itemID == parentNumberInt) {
            backButton = '<button class="button" onclick="updateDocsForFolder(' + itemObjects[i].itemID + ', ' + itemObjects[i].parentID + ' )">';
            backButton += 'Return to ' + itemObjects[i].displayname + '</button>';
          }
          //get current folder title
          if (itemObjects[i].itemID == number) {
            newTitleText = itemObjects[i].displayname;
          }
        }
        backButtonCont.innerHTML = backButton;
      } else {
        backButtonCont.innerHTML = ""
      }
      folderTitle.innerHTML = newTitleText;


      //show the contents of current folder
      for (var i = 0; i < itemObjects.length; i++) {
        console.log("i: " + i);
        if (itemObjects[i].parentID == number) {
          if (itemObjects[i].itemtype === "file") {
            options += '<a href="docfocus.php?f=' + itemObjects[i].itemID + '&type=toolbox">';
            options += '<div class="toolbox-item" id="">';
            options += '<div class="tool-icon">';
            options += '<img src="img/pdf.png" alt="file-icon">';
            options += '</div>';
            options += '<div class="tool-title">';
            options += ' <h3>' + itemObjects[i].displayname + '</h3>';
            options += '<p>TYPE: ' + itemObjects[i].itemtype + '</p>';
            options += '</div>';
            options += '</div>';
            options += '</a>';

            //If File add to files var to be selected in modal to send
            files += '<input type="checkbox" id="' + itemObjects[i].itemID + '" class="file-opt" name="file' + itemObjects[i].itemID + '" value="' + itemObjects[i].itemID + '" checked>' + '<label for="' + itemObjects[i].itemID + '" class="doc-inline-label">' + itemObjects[i].displayname + '</label><br>';
          } else if (itemObjects[i].itemtype === "link") {
            options += '<a href=\"' + itemObjects[i].linkaddress + '\" target="_blank"> ';
            options += '<div class="toolbox-item" id="">';
            options += '<div class="tool-icon">';
            options += '<img src="img/link.png" alt="file-icon">';
            options += '</div>';
            options += '<div class="tool-title">';
            options += ' <h3>' + itemObjects[i].displayname + '</h3>';
            options += '<p>' + itemObjects[i].itemtype + '</p>';
            options += '</div>';
            options += '</div>';
            options += '</a>';

            //If File add to files var to be selected in modal to send
            files += '<input type="checkbox" id="' + itemObjects[i].itemID + '" class="file-opt" name="link' + itemObjects[i].itemID + '" value="' + itemObjects[i].itemID + '" checked>' + '<label for="' + itemObjects[i].itemID + '" class="doc-inline-label">' + itemObjects[i].displayname + '</label><br>';
          } else if (itemObjects[i].itemtype === "folder") {
            options += '<div class="toolbox-item" id="" onclick="updateDocsForFolder(' + itemObjects[i].linkaddress + ', ' + itemObjects[i].parentID + ')">';
            options += '<div class="tool-icon">';
            options += '<img src="img/folder.png" alt="folder-icon">';
            options += '</div>';
            options += '<div class="tool-title">';
            options += ' <h3>' + itemObjects[i].displayname + '</h3>';
            options += '<p>' + itemObjects[i].itemtype + '</p>';
            options += '</div>';
            options += '</div>';
          }
        }

      }
      toolboxWrapper.innerHTML = options;
      if (files !== "") {
        fileOptions.innerHTML = files;
        document.getElementById('sendModalBtn').style.display = 'block';
      } else {
        document.getElementById('sendModalBtn').style.display = 'none';
      }

    }


    function checkStatus(response) {
      if (response.ok) {
        return Promise.resolve(response);
      } else {
        return Promise.reject(new Error(response.statusText));
      }
    }



    var docItemsList = [];
    var itemsList = [];

    window.onload = function() {
      fetchData();
    };

    function fetchData() {
      fetch('../mobilemydocs_fulltree.asp?u=' + username + '&id=' + memberID)
        .then((response) => {
          var returned = response.json();
          console.log(returned);
          return returned;
        })
        .then((jsonObj) => {
          console.log(jsonObj);
          docItemsList = jsonObj;
          getAutocompleteItemList(docItemsList);

          //load source to the autocomplete
          $("#search").autocomplete({
              source: itemsList,
              autoFocus: true,
              select: function(event, ui) {
                event.preventDefault();
                $("#search").val(ui.item.label);
              },
              focus: function(event, ui) {
                event.preventDefault();
                //$( "#search" ).val( ui.item.label );
              },
              classes: {
                "ui-autocomplete": "highlight"
              },
              minLength: 1
            })
            .autocomplete("instance")._renderItem = function(ul, item) {
              return $('<li class="ui-menu-item-with-icon"></li>')
                .data("ui-autocomplete-item", item)
                .append('<a><span class="' + item.icon + '-item-icon"></span>' + item.label + '</a>')
                .appendTo(ul);
            };

          $('#search').on('keypress', function(e) {
            if (e.which == 13) {
              e.preventDefault();
              showSelection(e);
            }
          });

          $('#search').on('autocompleteselect', function(e, ui) {
            showSelection(ui.item);
          });
        });
    }

    function getAutocompleteItemList(docList) {
      var data = docList.itemObjects;
      for (i = 0; i < data.length; i++) {
        var item = data[i];
        var newItem = {
          "label": item.itemtype + ": " + item.displayname,
          "linkAddress": item.linkaddress,
          "type": item.itemtype,
          "icon": item.itemtype + ".png",
          "itemID": item.itemID,
          "parentID": item.parentID
        }
        itemsList.push(newItem);
      }
    }

    function showSelection(selected) {

      //console.log(selected);
      console.log(selected.linkAddress);

      if (selected.type == "folder") {
        updateDocsForFolder(selected.itemID, selected.parentID);
      }

      if (selected.type == "link") {
        window.open(selected.linkAddress);
      }

      if (selected.type == "file") {
        console.log(selected);
        window.open('https://www.titleadvantage.com/nd1c/docFocus.php?&f=' + selected.itemID);
      }
    }

    //function that will help make a post to api 
    async function postData(url = '', data = {}) {
      // Default options are marked with *
      const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
          'Content-Type': 'application/json'
          // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify(data) // body data type must match "Content-Type" header
      });
      return response.json(); // parses JSON response into native JavaScript objects
    }
  </script>


  <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete highlight ui-front" style="display: none;"></ul>
  <div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
</body>

</html>