<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

  <title>Home Affordability Estimator</title>
  <link rel="stylesheet" type="text/css" href="form-style2.css" />
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <style>
    .button {
      border: none;
      padding: 8px 15px 8px 15px;
      background: #939393;
      color: #fff;
      box-shadow: 1px 1px 4px #DADADA;
      -moz-box-shadow: 1px 1px 4px #DADADA;
      -webkit-box-shadow: 1px 1px 4px #DADADA;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
    }

    .button:hover {
      background: #939393;
      color: #fff;
    }

    table,
    td {
      border: 1px solid black;
      padding: 10px;
    }

    .logo {
      display: inline-block;
      height: 56px;
      vertical-align: middle;
    }

    .calType {
      display: inline-block;
      text-align: right;
      height: 56px;
      min-width: 300px;
      vertical-align: bottom;
      position: relative;
    }

    .dpshortcut {
      display: inline-block;
      padding: 8px 14px;
      border: 1px solid #aaaaaa;
      width: 36px;
      margin: 0px auto;
      transition: 0.1s linear;
    }

    .dpshortcut:hover {
      cursor: pointer;
      background-color: #2196F3;
    }

    .lockicon {
      border-radius: 20px;
      transition: 0.1s linear;
      display: inline-block;
      padding: 6px;
      color: #ffffff;
    }

    .lockicon:hover {
      background-color: #2196F3;
      cursor: pointer;
    }

    .cssCircle {
      -webkit-border-radius: 12px;
      -moz-border-radius: 12px;
      border-radius: 12px;
      behavior: url(PIE.htc);

      width: 50px;
      height: 50px;
      padding: 0px;

      background: rgb(243, 243, 243);
      color: #b6b6b6;
      text-align: center;
      -webkit-transition: background 0.2s linear;
      -moz-transition: background 0.2s linear;
      -ms-transition: background 0.2s linear;
      -o-transition: background 0.2s linear;
      transition: background 0.2s linear;
      transition: color 0.2s linear;

      font: 33px Arial, sans-serif
    }

    .cssCircle:hover {
      /* background: #3F69A0 ; */
      cursor: pointer;
    }

    .minusSign {
      line-height: 1.3em;
      margin-bottom: 1px;
    }

    .plusSign {
      line-height: 1.5em;
    }

    .minusSign:hover,
    .plusSign:hover {
      color: rgb(0, 0, 0);
    }

    /* The switch - the box around the slider */
    .switch {
      position: relative;
      display: inline-block;
      width: 80px;
      height: 44px;
    }

    /* Hide default HTML checkbox */
    .switch input {
      display: none;
    }

    /* The toggle */
    .toggler {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .toggler:before {
      position: absolute;
      content: "";
      height: 36px;
      width: 36px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.toggler {
      background-color: #2196F3;
    }

    input:focus+.toggler {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.toggler:before {
      -webkit-transform: translateX(36px);
      -ms-transform: translateX(36px);
      transform: translateX(36px);
    }

    .closebutton {
      /* float: right; */
      margin: 6px 8px;
      display: inline-block;
    }

    .closebutton:hover {
      cursor: pointer;
    }

    /* Rounded toggle */
    .toggler.round {
      border-radius: 34px;
    }

    .toggler.round:before {
      border-radius: 50%;
    }

    @media (max-width: 768px) {
      .gobackButton {
        display: none;
      }

      .logo {
        display: none;
      }

      .calType {
        display: none;
      }
    }
  </style>
</head>

<body bgcolor="#eeeeee" onload="initValues();">
  <div style="margin: 0 auto; background-color:#eeeeee; padding-bottom: 30px; text-align: center;">
    <div class="logo">
      <img src="images/header2_oct.png">

    </div>
    <div class="calType">
      <div class="btext" style="position: absolute; bottom: 0px; right: 0px; font-size:24px;">BUYER POWER</div>
    </div>

    <div id="mainDiv" class="calctext" style="margin: 0 auto; border-style: solid; border-width: 2px; border-color: #ccc; border-radius: 8px; width:80%; padding: 20px; background-color:#ffffff; min-width: 310px; max-width: 640px; text-align: left;">
      <div id="instructions1" style="text-align:center; background-color:#fffbbd; font-size:14px; padding: 12px 8px;">
        <div class="closebutton" onclick="document.getElementById('instructions1').style.display='none';">X</div>
        Use the lock buttons to pick which value stays locked.<BR>
        Then change the value of one of the others and watch the results in real time!
      </div>
      <div style="text-align: center;">
        <div id="txtSalesPrice" style="font-size: 50px; color: #1aa83b;" onclick="directEntry('salesPrice');">
          $597,900
        </div>
        <div id="entrySalesPrice" style="display:none;">
          <input type="text" size="6" id="entrySalesPriceBox" value="$597,900" onkeypress="handle(event);" style="font-size:40px; vertical-align: middle;">
          <div id="btnOKSalesPrice" class="cssCircle" style="display: inline-block; margin-top: 0px; padding-top:16px; width:64px; height: 32px; color: #000000; font-size:16px; vertical-align: middle;" onclick="directEntryClear('salesPrice');">OK</div>
        </div>
        <div style="font-size: 16px;">
          <div>Target Price</div>
        </div>
        <div>
          <div class="lockicon" onclick="setLock('salesPrice');" id="lockSalesPrice"><img src="images/btlockopen.png"></div>
        </div>
        <div>
          <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle;">
            <div class="cssCircle minusSign" style="padding-top:0px" onclick="subFine('sliderSalesPrice','minus');">&#8211;</div>
          </div>
          <div class="slidecontainer" style="display:inline-block; width: 50%;">
            <input type="range" min="0" max="2000000" value="500000" step="1000" class="slider" id="sliderSalesPrice">
          </div>
          <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle; padding-left: 20px;">
            <div class="cssCircle plusSign" style="padding-top:0px" onclick="subFine('sliderSalesPrice','plus');">&#43;</div>
          </div>
        </div>

        <div id="txtMonthlyPayment" style="font-size: 34px; color: #1363b2; margin-top: 10px;" onclick="directEntry('monthlyPayment');">
          $2,579
        </div>
        <div id="entryMonthlyPayment" style="display:none;">
          <input type="text" size="6" id="entryMonthlyPaymentBox" value="$2,579" onkeypress="handle(event);" style="font-size:30px; vertical-align: middle;">
          <div id="btnOKMonthyPayment" class="cssCircle" style="display: inline-block; margin-top: 0px; padding-top:16px; width:64px; height: 32px; color: #000000; font-size:16px; vertical-align: middle;" onclick="directEntryClear();">OK</div>
        </div>
        <div id="txtMonthlyPaymentLabel" style="font-size: 16px;">
          Monthly Mortgage Payment
        </div>
        <div>
          <div class="lockicon" onclick="setLock('monthlyPayment');" id="lockMonthlyPayment"><img src="images/btlockopen.png"></div>
        </div>
        <div>
          <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle;">
            <div class="cssCircle minusSign" style="padding-top:0px" onclick="subFine('sliderMonthlyPayment','minus');">&#8211;</div>
          </div>
          <div class="slidecontainer" style="display:inline-block; width: 50%;">
            <input type="range" min="0" max="20000" value="2000" step="10" class="slider" id="sliderMonthlyPayment">
          </div>
          <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle; padding-left: 22px;">
            <div class="cssCircle plusSign" style="padding-top:0px" onclick="subFine('sliderMonthlyPayment','plus');">&#43;</div>
          </div>
        </div>

        <div id="txtDownPayment" style="font-size: 34px; color: #1363b2; margin-top: 20px;" onclick="directEntry('downPayment');">
          $51,100
        </div>
        <div id="entryDownPayment" style="display:none;">
          <input type="text" size="6" id="entryDownPaymentBox" value="$597,900" onkeypress="handle(event);" style="font-size:30px; vertical-align: middle;">
          <div id="btnOKDownPayment" class="cssCircle" style="display: inline-block; margin-top: 0px; padding-top:16px; width:64px; height: 32px; color: #000000; font-size:16px; vertical-align: middle;" onclick="directEntryClear();">OK</div>
        </div>
        <div style="font-size: 16px;">
          Down Payment
        </div>
        <div>
          <div class="lockicon" onclick="setLock('downPayment');" id="lockDownPayment"><img src="images/btlockclosed.png"></div>
        </div>
        <div>
          <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle;">
            <div class="cssCircle minusSign" style="padding-top:0px" onclick="subFine('sliderDownPayment','minus');">&#8211;</div>
          </div>
          <div class="slidecontainer" style="display:inline-block; width: 50%;">
            <input type="range" min="0" max="1500000" value="100000" step="1000" class="slider" id="sliderDownPayment">
          </div>
          <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle; padding-left: 20px;">
            <div class="cssCircle plusSign" style="padding-top:0px" onclick="subFine('sliderDownPayment','plus');">&#43;</div>
          </div>
          <div>
            <div class="dpshortcut" onclick="dpPresetTapped(3.5);" style="border-radius: 10px 0px 0px 10px;">3.5%</div>
            <div class="dpshortcut" onclick="dpPresetTapped(10);" style="border-left:0px;">10%</div>
            <div class="dpshortcut" onclick="dpPresetTapped(20);" style="border-left:0px;">20%</div>
            <div class="dpshortcut" onclick="dpPresetTapped(25);" style="border-left:0px; border-radius: 0px 10px 10px 0px;">25%</div>
          </div>
        </div>
        <div style="margin-top: 25px;">
          <div style="display: inline-block; vertical-align: middle;">
            <!-- Rounded toggle -->
            <label class="switch">
              <input type="checkbox" onchange="swapPropTax();">
              <span class="toggler round"></span>
            </label>
          </div>
          <div style="display: inline-block; vertical-align: middle; margin-left: 8px;">
            Include Property Tax
          </div>
        </div>
        <div>
          <div>
            <div style="display:inline-block; height: 60px; vertical-align: middle;">
              <div id="btnAdvancedOptions" class="cssCircle" style="margin-top: 35px; padding-top:20px; width: 300px; height: 36px; color: #000000; font-size:16px;" onclick="toggleAdvancedOptions();">Advanced Options</div>
            </div>
          </div>
          <BR>
          <div id="advancedOptions" style="display:none;">
            <div id="txtInterestRate" style="font-size: 34px; color: #1363b2; margin-top: 20px;" onclick="directEntry('interestRate');">
              4.1%
            </div>
            <div id="entryInterestRate" style="display:none;">
              <input type="text" size="6" id="entryInterestRateBox" value="3" onkeypress="handle(event);" style="font-size:30px; vertical-align: middle;">
              <div id="btnOKInterestRate" class="cssCircle" style="display: inline-block; margin-top: 0px; padding-top:16px; width:64px; height: 32px; color: #000000; font-size:16px; vertical-align: middle;" onclick="directEntryClear('salesPrice');">OK</div>
            </div>
            <div style="font-size: 16px;">
              Loan Interest Rate
            </div>
            <div>
              <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle;">
                <div class="cssCircle minusSign" style="padding-top:0px" onclick="subFine('sliderInterestRate','minus');">&#8211;</div>
              </div>
              <div class="slidecontainer" style="display:inline-block; width: 50%;">
                <input type="range" min="0" max="20" value="3.0" step="0.005" class="slider" id="sliderInterestRate">
              </div>
              <div style="display:inline-block; width:60px; height: 60px; vertical-align: middle; padding-left: 20px;">
                <div class="cssCircle plusSign" style="padding-top:0px" onclick="subFine('sliderInterestRate','plus');">&#43;</div>
              </div>
            </div>
          </div>
          <div style="margin-top: 50px; margin-bottom: 20px; text-align: center; ">
            <center>
              <div style="max-width: 550px; text-align:center;">
                <span style="font: 12px Arial, Helvetica, sans-serif;"><span style="font-weight: bold">IMPORTANT DISCLAIMER:</span> This calculator is provided as a free service and is an ESTIMATE only. This is only an estimate based on user input and is not guaranteed. This is in no way a guarantee of lending qualification, budgeting or other financial outcome.</span>
              </div>
            </center>
          </div>

        </div>
      </div>

      <script type="text/javascript" src="bpob.js"></script>
</body>

</html>