var _0x5707 = [
  "sliderSalesPrice",
  "sliderMonthlyPayment",
  "entryDownPayment",
  "sales\x20price\x20now:\x20",
  "btnAdvancedOptions",
  "length",
  "lockSalesPrice",
  "white",
  "oninput",
  "calcs\x20gen\x20for\x20:\x20",
  "entryInterestRate",
  "toFixed",
  "Advanced\x20options:\x20",
  "\x20loan\x20amt:\x20",
  "return\x20hit",
  "\x20dp:\x20",
  "Hide\x20Advanced\x20Options",
  "new\x20house\x20value\x20due\x20to\x20prop\x20tax:\x20",
  "lockMonthlyPayment",
  "sliderInterestRate",
  "monthlyPayment",
  "plus",
  "temploanamt:\x20",
  "disabled",
  "Down\x20Payment\x20Changing",
  "/Insurance",
  "lockDownPayment",
  "entrySalesPriceBox",
  "Housevalue\x20now:\x20",
  "none",
  "entryInterestRateBox",
  "txtInterestRate",
  "\x20down\x20payment\x20percent\x20so\x20pmi\x20included:\x20$",
  "display",
  "Monthly\x20Mortgage\x20Payment<BR>",
  "Calculating\x20Down\x20Payment:\x20",
  "replace",
  "entryDownPaymentBox",
  "salesPrice",
  "getElementById",
  "entryMonthlyPayment",
  "prop\x20tax\x20included:\x20",
  "pow",
  "interestRate",
  "\x20tempdiff:\x20",
  "<img\x20src=\x22images/btlockclosed.png\x22>",
  "log",
  "txtDownPayment",
  "txtMonthlyPayment",
  "initial\x20vals\x20dfactor:\x20",
  "backgroundColor",
  "innerHTML",
  "entrySalesPrice",
  "style",
  "sliderDownPayment",
  "------\x0aloanamt:\x20",
  "downPayment",
  "Calculating\x20Monthly\x20Payment:\x20",
  "txtSalesPrice",
  "value",
  "substring",
  "<img\x20src=\x22images/btlockopen.png\x22>",
];
(function (_0x1b0cca, _0x5707b2) {
  var _0x1411e6 = function (_0x28530e) {
    while (--_0x28530e) {
      _0x1b0cca["push"](_0x1b0cca["shift"]());
    }
  };
  _0x1411e6(++_0x5707b2);
})(_0x5707, 0x133);
var _0x1411 = function (_0x1b0cca, _0x5707b2) {
  _0x1b0cca = _0x1b0cca - 0x0;
  var _0x1411e6 = _0x5707[_0x1b0cca];
  return _0x1411e6;
};
var _0x201f8e = _0x1411,
  sliderSalesPrice = document["getElementById"](_0x201f8e("0x3")),
  txtSalesPrice = document[_0x201f8e("0x2a")](_0x201f8e("0x3d")),
  sliderMonthlyPayment = document["getElementById"](_0x201f8e("0x4")),
  sliderInterestRate = document[_0x201f8e("0x2a")](_0x201f8e("0x16")),
  txtMonthlyPayment = document[_0x201f8e("0x2a")](_0x201f8e("0x33")),
  txtMonthlyPaymentLabel = document[_0x201f8e("0x2a")](
    "txtMonthlyPaymentLabel"
  ),
  sliderDownPayment = document[_0x201f8e("0x2a")](_0x201f8e("0x39")),
  txtDownPayment = document["getElementById"](_0x201f8e("0x32")),
  interestRate = 4.1,
  term = 0x1e,
  propTaxRate = 0.0125,
  propTaxIncluded = ![],
  displayAdvancedOptions = ![],
  pmiFlag = 0x0,
  curDirectEntry = "",
  curLockedEntry = _0x201f8e("0x17");
function initValues() {
  var _0x5b3ae0 = _0x201f8e;
  (sliderMonthlyPayment[_0x5b3ae0("0x0")] = 0x898),
    (sliderDownPayment[_0x5b3ae0("0x0")] = 0x20b70),
    setLock(_0x5b3ae0("0x17")),
    doCalcsGen(_0x5b3ae0("0x17"));
}
function swapPropTax() {
  var _0x2b7618 = _0x201f8e;
  propTaxIncluded == ![] ? (propTaxIncluded = !![]) : (propTaxIncluded = ![]),
    console[_0x2b7618("0x31")](_0x2b7618("0x2c") + propTaxIncluded),
    curLockedEntry == _0x2b7618("0x17")
      ? doCalcsGen(_0x2b7618("0x3b"))
      : doCalcsGen(_0x2b7618("0x17"));
}
function toggleAdvancedOptions() {
  var _0x2d0fe7 = _0x201f8e;
  console["log"](_0x2d0fe7("0xf") + displayAdvancedOptions);
  var _0x28530e = document[_0x2d0fe7("0x2a")](_0x2d0fe7("0x7")),
    _0xa77d64 = document["getElementById"]("advancedOptions");
  displayAdvancedOptions == ![]
    ? ((_0xa77d64["style"][_0x2d0fe7("0x24")] = ""),
      (displayAdvancedOptions = !![]),
      (_0x28530e[_0x2d0fe7("0x36")] = _0x2d0fe7("0x13")))
    : ((_0xa77d64["style"][_0x2d0fe7("0x24")] = _0x2d0fe7("0x20")),
      (displayAdvancedOptions = ![]),
      (_0x28530e[_0x2d0fe7("0x36")] = "Advanced\x20Options"));
}
(sliderSalesPrice[_0x201f8e("0xb")] = function () {
  var _0x14c67d = _0x201f8e;
  doCalcsGen(_0x14c67d("0x29"));
}),
  (sliderMonthlyPayment[_0x201f8e("0xb")] = function () {
    var _0x2de74f = _0x201f8e;
    doCalcsGen(_0x2de74f("0x17"));
  }),
  (sliderDownPayment[_0x201f8e("0xb")] = function () {
    var _0x4e8394 = _0x201f8e;
    doCalcsGen(_0x4e8394("0x3b"));
  }),
  (sliderInterestRate[_0x201f8e("0xb")] = function () {
    var _0x5df18e = _0x201f8e;
    curLockedEntry == _0x5df18e("0x17")
      ? doCalcsGen(_0x5df18e("0x29"))
      : doCalcsGen(_0x5df18e("0x17"));
  });
function subFine(_0x144785, _0x381562) {
  var _0x5591bf = _0x201f8e;
  controlObject = document[_0x5591bf("0x2a")](_0x144785);
  var _0x37b421 = parseFloat(controlObject[_0x5591bf("0x0")]),
    _0x3c07e8 = 0x3e8;
  _0x144785 == _0x5591bf("0x4") && (_0x3c07e8 = 0xa),
    _0x144785 == _0x5591bf("0x16") && (_0x3c07e8 = 0.005),
    _0x381562 == _0x5591bf("0x18")
      ? (_0x37b421 = _0x37b421 + _0x3c07e8)
      : (_0x37b421 = _0x37b421 - _0x3c07e8),
    _0x144785 == _0x5591bf("0x3") &&
      curLockedEntry != _0x5591bf("0x29") &&
      ((controlObject[_0x5591bf("0x0")] = _0x37b421), doCalcsGen("salesprice")),
    _0x144785 == _0x5591bf("0x4") &&
      curLockedEntry != _0x5591bf("0x17") &&
      ((controlObject[_0x5591bf("0x0")] = _0x37b421),
      doCalcsGen(_0x5591bf("0x17"))),
    _0x144785 == _0x5591bf("0x39") &&
      curLockedEntry != _0x5591bf("0x3b") &&
      ((controlObject[_0x5591bf("0x0")] = _0x37b421),
      doCalcsGen(_0x5591bf("0x3b"))),
    _0x144785 == _0x5591bf("0x16") &&
      ((controlObject[_0x5591bf("0x0")] = _0x37b421),
      curLockedEntry == _0x5591bf("0x3b")
        ? doCalcsGen(_0x5591bf("0x17"))
        : doCalcsGen("downPayment"));
}
function updateDollarValues() {
  var _0x1cd283 = _0x201f8e,
    _0x341582 = 0x0,
    _0x2e92a4 = "(Principal/Interest",
    _0x97d02e = parseFloat(sliderSalesPrice[_0x1cd283("0x0")]);
  txtSalesPrice[_0x1cd283("0x36")] = formatCurrency(_0x97d02e);
  var _0x3bd256 = parseFloat(sliderMonthlyPayment[_0x1cd283("0x0")]),
    _0x250d94 = parseFloat(sliderDownPayment["value"]),
    _0x15fd9d = parseFloat(sliderInterestRate[_0x1cd283("0x0")]);
  (txtMonthlyPayment[_0x1cd283("0x36")] = formatCurrency(_0x3bd256)),
    (txtInterestRate[_0x1cd283("0x36")] = _0x15fd9d + "%"),
    (interestRate = _0x15fd9d),
    _0x97d02e > 0x0
      ? (_0x341582 = Math["round"]((_0x250d94 / _0x97d02e) * 0x64))
      : (_0x341582 = 0x0),
    propTaxIncluded && (_0x2e92a4 = _0x2e92a4 + "/Tax"),
    pmiFlag == 0x1 &&
      ((txtDownPayment["innerHTML"] = formatCurrency(_0x250d94)),
      (_0x2e92a4 = _0x2e92a4 + _0x1cd283("0x1c"))),
    (txtDownPayment[_0x1cd283("0x36")] =
      formatCurrency(_0x250d94) + "\x20(" + _0x341582 + "%)"),
    (_0x2e92a4 = _0x2e92a4 + ")"),
    (txtMonthlyPaymentLabel[_0x1cd283("0x36")] = _0x1cd283("0x25") + _0x2e92a4);
}
function formatCurrency(_0x21e3ba) {
  var _0x38ca1f = _0x201f8e,
    _0x3e0986 = _0x21e3ba[_0x38ca1f("0xe")](0x2)[_0x38ca1f("0x27")](
      /(\d)(?=(\d{3})+\.)/g,
      "$1,"
    ),
    _0x29238a = _0x3e0986[_0x38ca1f("0x1")](
      0x0,
      _0x3e0986[_0x38ca1f("0x8")] - 0x3
    );
  return "$" + _0x29238a;
}
function doCalcsGen(_0x4b508e) {
  var _0x30f520 = _0x201f8e;
  console[_0x30f520("0x31")](_0x30f520("0xc") + _0x4b508e);
  var _0x136f88 = parseFloat(sliderSalesPrice["value"]),
    _0x514685 = parseFloat(sliderMonthlyPayment[_0x30f520("0x0")]),
    _0x4ae63c = parseFloat(sliderDownPayment[_0x30f520("0x0")]);
  term = parseFloat(term);
  var _0x2ff3dc = term * 0xc,
    _0x1f12b9 = 0x0;
  (pmiFlag = 0x0), (interestRate = parseFloat(interestRate));
  var _0x138e3a = calculateDenominator(term, interestRate),
    _0x3981e5 = calculateNumerator(term, interestRate);
  dFactor = _0x3981e5 / _0x138e3a;
  var _0x5c4404 = _0x514685;
  if (propTaxIncluded) {
    var _0x1b32b9 = _0x136f88 * propTaxRate;
    _0x5c4404 = _0x5c4404 - _0x1b32b9 / 0xc;
  }
  var _0xbc7fdc = _0x5c4404 / dFactor;
  console[_0x30f520("0x31")](
    _0x30f520("0x34") + dFactor + _0x30f520("0x10") + _0xbc7fdc
  );
  if (_0x4b508e == "salesPrice") {
    console[_0x30f520("0x31")]("Sales\x20Price\x20Changing");
    if (curLockedEntry == _0x30f520("0x3b")) {
      var _0x1b5312 = _0x136f88 - _0x4ae63c,
        _0x1b5145 = _0x1b5312 * dFactor;
      if (propTaxIncluded) {
        var _0x1b32b9 = _0x136f88 * propTaxRate;
        monthlyPropTax = _0x1b32b9 / 0xc;
      } else monthlyPropTax = 0x0;
      _0x1b5145 = _0x1b5145 + monthlyPropTax;
      var _0x3b0a1d = (_0x22ef59 / _0x301a91) * 0x64;
      if (_0x3b0a1d < 0x14) {
        var _0x11bfae = _0xbc7fdc * 0.007,
          _0x3b27e5 = _0x11bfae / 0xc;
        (_0x1b5145 = _0x1b5145 + _0x3b27e5), (pmiFlag = 0x1);
      }
      console[_0x30f520("0x31")](_0x30f520("0x3c") + _0x1b5145),
        (sliderMonthlyPayment[_0x30f520("0x0")] = _0x1b5145);
    } else {
      var _0x22ef59 = _0x136f88 - _0xbc7fdc,
        _0x3b0a1d = (_0x22ef59 / _0x301a91) * 0x64;
      if (_0x3b0a1d < 0x14) {
        var _0x11bfae = _0xbc7fdc * 0.007,
          _0x529161 = _0x11bfae * term;
        (_0x22ef59 = _0x22ef59 + _0x529161), (pmiFlag = 0x1);
      }
      console[_0x30f520("0x31")](_0x30f520("0x26") + _0x22ef59),
        (sliderDownPayment[_0x30f520("0x0")] = _0x22ef59);
    }
  }
  if (_0x4b508e == _0x30f520("0x17")) {
    console[_0x30f520("0x31")]("Monthly\x20Payment\x20Changing");
    if (curLockedEntry == _0x30f520("0x3b")) {
      var _0x5c4404 = _0x514685,
        _0x301a91 = 0x0;
      if (propTaxIncluded) {
        (_0x301a91 = (0xc * _0x5c4404) / (0xc * dFactor + propTaxRate)),
          (_0xbc7fdc = _0x301a91 - _0x4ae63c);
        var _0x1b32b9 = _0x301a91 * propTaxRate;
        _0x5c4404 = _0x5c4404 - _0x1b32b9 / 0xc;
      } else _0x301a91 = _0xbc7fdc + _0x4ae63c;
      var _0x3b0a1d = (_0x4ae63c / _0x301a91) * 0x64;
      console[_0x30f520("0x31")](
        _0x30f520("0x3a") +
          _0xbc7fdc +
          "\x20|\x20Housevalue:\x20" +
          _0x301a91 +
          _0x30f520("0x12") +
          _0x3b0a1d
      );
      if (_0x3b0a1d < 0x14) {
        var _0x11bfae = _0xbc7fdc * 0.007,
          _0x20dbd5 = _0x11bfae / 0xc,
          _0x573649 = _0x5c4404 - _0x20dbd5,
          _0x397421 = _0x573649 / dFactor,
          _0x195953 = _0xbc7fdc - _0x397421;
        (_0x301a91 = _0x301a91 - _0x195953),
          console[_0x30f520("0x31")](
            _0x30f520("0x19") + _0x397421 + _0x30f520("0x2f") + _0x195953
          ),
          console[_0x30f520("0x31")](_0x3b0a1d + _0x30f520("0x23") + _0x20dbd5),
          console["log"](_0x30f520("0x1f") + _0x301a91),
          (pmiFlag = 0x1);
      }
      console[_0x30f520("0x31")](
        "Calculating\x20Target\x20Price:\x20" + _0x301a91
      ),
        (_0x301a91 = _0x301a91 + _0x4ae63c),
        (sliderSalesPrice["value"] = _0x301a91);
    } else {
      var _0x22ef59 = _0x136f88 - _0xbc7fdc,
        _0x3b0a1d = (_0x4ae63c / _0x301a91) * 0x64;
      if (_0x3b0a1d < 0x14) {
        var _0x11bfae = _0xbc7fdc * 0.007,
          _0x529161 = _0x11bfae * term;
        (_0x22ef59 = _0x22ef59 + _0x529161), (pmiFlag = 0x1);
      }
      console["log"](_0x30f520("0x26") + _0x4ae63c),
        (sliderDownPayment[_0x30f520("0x0")] = _0x22ef59);
    }
  }
  if (_0x4b508e == "downPayment") {
    console[_0x30f520("0x31")](_0x30f520("0x1b"));
    if (curLockedEntry == _0x30f520("0x17")) {
      var _0x5c4404 = _0x514685,
        _0x301a91 = 0x0;
      if (propTaxIncluded) {
        (_0x301a91 = (0xc * _0x5c4404) / (0xc * dFactor + propTaxRate)),
          console[_0x30f520("0x31")](_0x30f520("0x14") + _0x301a91),
          (_0xbc7fdc = _0x301a91 - _0x4ae63c);
        var _0x1b32b9 = _0x301a91 * propTaxRate;
        _0x5c4404 = _0x5c4404 - _0x1b32b9 / 0xc;
      } else _0x301a91 = _0xbc7fdc + _0x4ae63c;
      var _0x3b0a1d = (_0x4ae63c / _0x301a91) * 0x64;
      console[_0x30f520("0x31")](
        _0x30f520("0x3a") +
          _0xbc7fdc +
          "\x20|\x20Housevalue:\x20" +
          _0x301a91 +
          _0x30f520("0x12") +
          _0x3b0a1d
      );
      if (_0x3b0a1d < 0x14) {
        var _0x11bfae = _0xbc7fdc * 0.007,
          _0x20dbd5 = _0x11bfae / 0xc,
          _0x573649 = _0x5c4404 - _0x20dbd5,
          _0x397421 = _0x573649 / dFactor,
          _0x195953 = _0xbc7fdc - _0x397421;
        (_0x301a91 = _0x301a91 - _0x195953),
          console[_0x30f520("0x31")](
            _0x30f520("0x19") + _0x397421 + _0x30f520("0x2f") + _0x195953
          ),
          console["log"](_0x3b0a1d + _0x30f520("0x23") + _0x20dbd5),
          console[_0x30f520("0x31")]("Housevalue\x20now:\x20" + _0x301a91),
          (pmiFlag = 0x1);
      }
      (_0x301a91 = _0x301a91 + _0x4ae63c),
        console[_0x30f520("0x31")](
          "Calculating\x20Target\x20Price:\x20" + _0x301a91
        ),
        (sliderSalesPrice[_0x30f520("0x0")] = _0x301a91);
    } else {
      var _0x5ba8b0 = _0x136f88 - _0x4ae63c,
        _0x1b5145 = _0x5ba8b0 * dFactor,
        _0x3b0a1d = (_0x22ef59 / _0x301a91) * 0x64;
      if (_0x3b0a1d < 0x14) {
        var _0x11bfae = _0xbc7fdc * 0.007,
          _0x3b27e5 = _0x11bfae / 0xc;
        (_0x1b5145 = _0x1b5145 + _0x3b27e5), (pmiFlag = 0x1);
      }
      console[_0x30f520("0x31")](_0x30f520("0x3c") + _0x1b5145),
        (sliderMonthlyPayment["value"] = _0x1b5145);
    }
  }
  updateDollarValues();
}
function directEntry(_0x199532) {
  var _0x2fc916 = _0x201f8e;
  (curDirectEntry = _0x199532),
    (document["getElementById"](_0x2fc916("0x1e"))[_0x2fc916("0x0")] =
      txtSalesPrice["innerHTML"]),
    (document["getElementById"]("entryMonthlyPaymentBox")["value"] =
      txtMonthlyPayment[_0x2fc916("0x36")]);
  var _0x457a6f = parseFloat(sliderDownPayment[_0x2fc916("0x0")]);
  (document[_0x2fc916("0x2a")](_0x2fc916("0x28"))[
    _0x2fc916("0x0")
  ] = formatCurrency(_0x457a6f)),
    (document[_0x2fc916("0x2a")](_0x2fc916("0x21"))[_0x2fc916("0x0")] =
      txtInterestRate[_0x2fc916("0x36")]),
    _0x199532 == _0x2fc916("0x29") &&
      ((document[_0x2fc916("0x2a")](_0x2fc916("0x37"))["style"][
        _0x2fc916("0x24")
      ] = ""),
      (document["getElementById"](_0x2fc916("0x3d"))["style"][
        _0x2fc916("0x24")
      ] = _0x2fc916("0x20"))),
    _0x199532 == "monthlyPayment" &&
      ((document[_0x2fc916("0x2a")](_0x2fc916("0x2b"))[_0x2fc916("0x38")][
        _0x2fc916("0x24")
      ] = ""),
      (document[_0x2fc916("0x2a")](_0x2fc916("0x33"))[_0x2fc916("0x38")][
        _0x2fc916("0x24")
      ] = "none")),
    _0x199532 == _0x2fc916("0x3b") &&
      ((document["getElementById"](_0x2fc916("0x5"))[_0x2fc916("0x38")][
        _0x2fc916("0x24")
      ] = ""),
      (document[_0x2fc916("0x2a")](_0x2fc916("0x32"))[_0x2fc916("0x38")][
        "display"
      ] = _0x2fc916("0x20"))),
    _0x199532 == _0x2fc916("0x2e") &&
      ((document["getElementById"](_0x2fc916("0xd"))["style"][
        _0x2fc916("0x24")
      ] = ""),
      (document[_0x2fc916("0x2a")]("txtInterestRate")[_0x2fc916("0x38")][
        _0x2fc916("0x24")
      ] = _0x2fc916("0x20")));
}
function directEntryClear() {
  var _0xda50ef = _0x201f8e;
  (entryItem = curDirectEntry),
    (sliderSalesPrice[_0xda50ef("0x0")] = parseFloat(
      cleanMoney(
        document["getElementById"]("entrySalesPriceBox")[_0xda50ef("0x0")]
      )
    )),
    (sliderMonthlyPayment["value"] = parseFloat(
      cleanMoney(
        document[_0xda50ef("0x2a")]("entryMonthlyPaymentBox")[_0xda50ef("0x0")]
      )
    )),
    (sliderDownPayment[_0xda50ef("0x0")] = parseFloat(
      cleanMoney(
        document[_0xda50ef("0x2a")](_0xda50ef("0x28"))[_0xda50ef("0x0")]
      )
    )),
    (sliderInterestRate[_0xda50ef("0x0")] = parseFloat(
      cleanMoney(
        document[_0xda50ef("0x2a")](_0xda50ef("0x21"))[_0xda50ef("0x0")]
      )
    )),
    console[_0xda50ef("0x31")](_0xda50ef("0x6") + sliderSalesPrice["value"]),
    (document[_0xda50ef("0x2a")](_0xda50ef("0x37"))[_0xda50ef("0x38")][
      _0xda50ef("0x24")
    ] = _0xda50ef("0x20")),
    (document[_0xda50ef("0x2a")](_0xda50ef("0x2b"))[_0xda50ef("0x38")][
      _0xda50ef("0x24")
    ] = _0xda50ef("0x20")),
    (document[_0xda50ef("0x2a")](_0xda50ef("0x5"))[_0xda50ef("0x38")][
      "display"
    ] = "none"),
    (document[_0xda50ef("0x2a")](_0xda50ef("0xd"))[_0xda50ef("0x38")][
      _0xda50ef("0x24")
    ] = _0xda50ef("0x20")),
    (document[_0xda50ef("0x2a")]("txtSalesPrice")[_0xda50ef("0x38")][
      _0xda50ef("0x24")
    ] = ""),
    (document[_0xda50ef("0x2a")]("txtMonthlyPayment")[_0xda50ef("0x38")][
      "display"
    ] = ""),
    (document[_0xda50ef("0x2a")]("txtDownPayment")[_0xda50ef("0x38")][
      "display"
    ] = ""),
    (document[_0xda50ef("0x2a")](_0xda50ef("0x22"))[_0xda50ef("0x38")][
      _0xda50ef("0x24")
    ] = ""),
    entryItem == _0xda50ef("0x2e") && (entryItem = _0xda50ef("0x29")),
    doCalcsGen(entryItem);
}
function setLock(_0x52f603) {
  var _0x593ff5 = _0x201f8e;
  (curLockedEntry = _0x52f603),
    (document[_0x593ff5("0x2a")](_0x593ff5("0x9"))["innerHTML"] = _0x593ff5(
      "0x2"
    )),
    (document[_0x593ff5("0x2a")]("lockSalesPrice")["style"][
      _0x593ff5("0x35")
    ] = _0x593ff5("0xa")),
    (sliderSalesPrice[_0x593ff5("0x1a")] = ![]),
    (document["getElementById"](_0x593ff5("0x15"))[
      _0x593ff5("0x36")
    ] = _0x593ff5("0x2")),
    (document[_0x593ff5("0x2a")](_0x593ff5("0x15"))[_0x593ff5("0x38")][
      _0x593ff5("0x35")
    ] = _0x593ff5("0xa")),
    (sliderMonthlyPayment[_0x593ff5("0x1a")] = ![]),
    (document[_0x593ff5("0x2a")]("lockDownPayment")["innerHTML"] = _0x593ff5(
      "0x2"
    )),
    (document[_0x593ff5("0x2a")](_0x593ff5("0x1d"))[_0x593ff5("0x38")][
      _0x593ff5("0x35")
    ] = "white"),
    (sliderDownPayment[_0x593ff5("0x1a")] = ![]),
    _0x52f603 == _0x593ff5("0x29") &&
      ((document[_0x593ff5("0x2a")](_0x593ff5("0x9"))[
        _0x593ff5("0x36")
      ] = _0x593ff5("0x30")),
      (curLockedEntry = _0x593ff5("0x29")),
      (sliderSalesPrice["disabled"] = !![])),
    _0x52f603 == _0x593ff5("0x17") &&
      ((document[_0x593ff5("0x2a")](_0x593ff5("0x15"))[
        _0x593ff5("0x36")
      ] = _0x593ff5("0x30")),
      (curLockedEntry = _0x593ff5("0x17")),
      (sliderMonthlyPayment["disabled"] = !![])),
    _0x52f603 == "downPayment" &&
      ((document["getElementById"](_0x593ff5("0x1d"))["innerHTML"] =
        "<img\x20src=\x22images/btlockclosed.png\x22>"),
      (curLockedEntry = _0x593ff5("0x3b")),
      (sliderDownPayment[_0x593ff5("0x1a")] = !![]));
}
function dpPresetTapped(_0xf9d8ef) {
  var _0x5e0b93 = _0x201f8e,
    _0x49b42e = parseFloat(sliderSalesPrice[_0x5e0b93("0x0")]),
    _0x18eeed = (_0x49b42e * _0xf9d8ef) / 0x64;
  for (i = 0x0; i < 0x5; i++) {
    (_0x49b42e = parseFloat(sliderSalesPrice[_0x5e0b93("0x0")])),
      (_0x18eeed = (_0x49b42e * _0xf9d8ef) / 0x64),
      (sliderDownPayment[_0x5e0b93("0x0")] = parseFloat(_0x18eeed)),
      doCalcsGen(_0x5e0b93("0x3b"));
  }
}
function handle(_0x1b092a) {
  var _0x3be5b0 = _0x201f8e;
  _0x1b092a["keyCode"] == 0xd &&
    (console[_0x3be5b0("0x31")](_0x3be5b0("0x11")), directEntryClear());
}
function cleanMoney(_0x18e2af) {
  var _0xe08f18 = _0x201f8e,
    _0x457013 = Number(_0x18e2af[_0xe08f18("0x27")](/[^0-9\.-]+/g, ""));
  return _0x457013;
}
function calculateNumerator(_0x43707c, _0x3e9b65) {
  var _0x419232 = _0x201f8e;
  termMonths = _0x43707c * 0xc;
  var _0x40dca5 = _0x3e9b65 / 0x64 / 0xc;
  return (
    (calcVal =
      _0x40dca5 * Math[_0x419232("0x2d")](0x1 + _0x40dca5, termMonths)),
    calcVal
  );
}
function calculateDenominator(_0x46cb12, _0xd93fdd) {
  termMonths = _0x46cb12 * 0xc;
  var _0x496972 = _0xd93fdd / 0x64 / 0xc;
  return (calcVal = Math["pow"](0x1 + _0x496972, termMonths) - 0x1), calcVal;
}
