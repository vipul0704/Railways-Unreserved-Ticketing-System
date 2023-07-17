<?php
require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      
     $input_148 = $_POST['input_148'];
     $input_149 = $_POST['input_149'];
      $input_150 = $_POST['input_150'];
      $input_160 = $_POST['input_160'];
      $input_161 = $_POST['input_161'];
      $input_172 = $_POST['input_172'];
      $input_37 = $_POST['input_37'];
      $input_124 = $_POST['input_124'];
      $input_38 = $_POST['input_38'];
     
    
    echo "email:\n";
     echo $work;
    
      echo "hello";

    try {
      $SQLInsert "INSERT INTO details (input_148, input_149, input_150, input_160, input_161, input_172, input_37, input_124, input_38)
 VALUES (ss,d, 12,a ,a,12,a,a,a);"; 
echo $SQLInsert;
      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':input_148' => $input_148, ':input_149'=>$input_149, ':input_150' => $input_150, ':input_160' => $input_160, ':input_161'=>$input_161, ':input_172'=>$input_172, ':input_37' => $input_37, ':input_124' => $input_134, ':input_38' => $38));
      }catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    }
    

    ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="bn"  class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F220774095402453" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F220774095402453" title="oEmbed Form">
<meta property="og:title" content="Railway Ticket Booking" >
<meta property="og:url" content="https://form.jotform.com/220774095402453" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="icon" type="image/png" href="favicon.png">
<link rel="canonical" href="https://form.jotform.com/220774095402453" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Railway Ticket Booking</title>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.31912" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.31912" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/5495488a700cc478508b4567.css?themeRevisionID=59d3cbddcf3bfe07f15e6152"/>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.31912" />
<style type="text/css">
@import '//fonts.googleapis.com/css?family=Bentham:light,lightitalic,normal,italic,bold,bolditalic';

    .form-label-left{
        width:100px;
    }
    .form-line{
        padding-top:2px;
        padding-bottom:2px;
    }
    .form-label-right{
        width:100px;
    }
    body, html{
        margin:0;
        padding:0;
        background:rgba(39, 38, 38, 0.56);
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:800px;
        color:rgb(255, 255, 255) !important;
        font-family:'Times New Roman';
        font-size:18px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
        display: inline-block;
        float: left;
        text-align: left;
      
      }/*PREFERENCES STYLE*/
    .form-all {
      font-family: Times New Roman, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Times New Roman, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Times New Roman, sans-serif;
    }
    .form-header-group {
      font-family: Times New Roman, sans-serif;
    }
    .form-label {
      font-family: Times New Roman, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 2px;
      margin-bottom: 2px;
    }
  
    .form-all {
      max-width: 800px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 100px;
    }
  
    .form-all {
      font-size: 18px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 18px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 18px
    }
  
    .supernova .form-all, .form-all {
      background-color: rgba(39, 38, 38, 0.56);
    }
  
    .form-all {
      color: rgb(255, 255, 255);
    }
    .form-header-group .form-header {
      color: rgb(255, 255, 255);
    }
    .form-header-group .form-subHeader {
      color: rgb(255, 255, 255);
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: rgb(255, 255, 255);
    }
    .form-sub-label {
      color: 1a1a1a;
    }
  
    .supernova {
      background-color: rgb(255, 255, 255);
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: rgba(255, 255, 255, 0.83);
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      .supernova {
        background-image: url("railway.jpg");
      }
      #stage {
        background-image: url("railway.jpg");
      }
    
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/asimdas22/form_files/AGENT.30.jpg");
      display: inline-block;
      height: 137.11340206185568px;
      position: absolute;
      background-size: 190px 137px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 147px !important;
    }
    .form-all:before {
      top: -147px;
      background-position: top center;
      left: 0;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/buttons/form-submit-button-3d_round_yellow.css?3.3.31912"/>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/buttons/form-submit-button-simple_yellow.css?3.3.31912"/>
<!--[if lt IE 9]><script src="https://cdn01.jotfor.ms/js/vendor/flashcanvas.js?3.3.31912" type="text/javascript"></script><![endif]-->
<script src="https://cdn02.jotfor.ms/js/vendor/jquery-1.8.0.min.js?3.3.31912" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jSignature.min.noconflict.js?3.3.31912" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/js/vendor/jotform.signaturepad.js?3.3.31912" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.31912" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/js/paypal.js?v=3.3.31912" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/js/vendor/autoFill.min.js?v=3.3.31912" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.31912" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1647699595748" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.clearFieldOnHide="disable";

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_45').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_146').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_99').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_100').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("15", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("15", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+15)});
 JotForm.displayLocalTime("hour_15", "min_15", "ampm_15", null, false);
      JotForm.autoNext(143);
if (window.JotForm && JotForm.accessible) $('input_148').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_149').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_160').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_161').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_159').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_164').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_158').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_166').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_157').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_165').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_156').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_162').hint('ex: 23');
       }, 20);
      setTimeout(function() {
          $('input_37').hint('ex: 23');
       }, 20);
      setTimeout(function() {
          $('input_124').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_185').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_186').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_188').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_189').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_190').setAttribute('tabindex',0);
      productID = {};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
      FormTranslation.init({"detectUserLanguage":"1","firstPageOnly":"0","options":"Bengali","originalLanguage":"bn","primaryLanguage":"bn","saveUserLanguage":"1","showStatus":"Flag & Text","theme":"light-theme","version":"2"});
          JotForm.isNewSaveAndContinueLaterActive = true;
	/*INIT-END*/
	});
</script>
</head>
<body>
<form class="jotform-form" action="ticket_booking.php" method="post" name="form_220774095402453" id="220774095402453" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="220774095402453" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <link type="text/css" rel="stylesheet" media="all" href="https://cdn.jotfor.ms/wizards/languageWizard/custom-dropdown/css/lang-dd.css?3.3.31912" />
    <div class="cont">
      <input type="text" id="input_language" name="input_language" style="display:none" />
      <div class="language-dd" id="langDd" style="display:none">
        <div class="dd-placeholder lang-emp">
          Language
        </div>
        <ul class="lang-list dn" id="langList">
          <li data-lang="bn" class="bn">
            Bengali
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jotfor.ms/js/formTranslation.v2.js?3.3.31912"></script>
    <ul class="form-section page-section">
      <li id="cid_50" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httac htvam">
            <h2 id="header_50" class="form-header" data-component="header">
              BOOK TICKET
            </h2>
            <div id="subHeader_50" class="form-subHeader">
              From IRCTC
            </div>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_45">
        <label class="form-label form-label-left form-label-auto" id="label_45" for="input_45">
          Train name or number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_45" class="form-input jf-required">
          <input type="text" id="input_45" name="q45_trainName" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" size="20" value="" data-component="textbox" aria-labelledby="label_45" required="" />
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_99">
        <label class="form-label form-label-left form-label-auto" id="label_99" for="input_99">
          Journey From
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_99" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_99" name="q99_journeyFrom" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" size="20" value="" data-component="textbox" aria-labelledby="label_99 sublabel_input_99" required="" />
            <label class="form-sub-label" for="input_99" id="sublabel_input_99" style="min-height:13px" aria-hidden="false"> Station Code or full station name . </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_100">
        <label class="form-label form-label-left form-label-auto" id="label_100" for="input_100">
          Journey To
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_100" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_100" name="q100_journeyTo" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" size="20" value="" data-component="textbox" aria-labelledby="label_100 sublabel_input_100" required="" />
            <label class="form-sub-label" for="input_100" id="sublabel_input_100" style="min-height:13px" aria-hidden="false">Station Code or full station name . </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_68">
        <label class="form-label form-label-left form-label-auto" id="label_68" for="input_68"></label>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_15">
        <label class="form-label form-label-left form-label-auto" id="label_15" for="day_15">
          Departure/Journey Date
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_15" class="form-input jf-required">
          <div data-wrapper-react="true" class="extended notLiteMode">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="currentDate form-textbox validate[required, limitDate]" id="day_15" name="q15_departurejourneyDate[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="19" required="" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_day" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="day_15" id="sublabel_15_day" style="min-height:13px" aria-hidden="false"> Day </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[required, limitDate]" id="month_15" name="q15_departurejourneyDate[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="03" required="" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_month" />
              <span class="date-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="month_15" id="sublabel_15_month" style="min-height:13px" aria-hidden="false"> Month </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[required, limitDate]" id="year_15" name="q15_departurejourneyDate[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2022" required="" autoComplete="section-input_15 off" aria-labelledby="label_15 sublabel_15_year" />
              <label class="form-sub-label" for="year_15" id="sublabel_15_year" style="min-height:13px" aria-hidden="false"> Year </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <img class="showAutoCalendar newDefaultTheme-dateIcon icon-seperatedMode" alt="Pick a Date" id="input_15_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v1" />
              <label class="form-sub-label" for="input_15_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true"> Date Picker Icon </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_widget" id="id_141">
        <div id="cid_141" class="">
          <div style="width:100%;text-align:Left" data-component="widget-directEmbed">
            <div class="direct-embed-widgets mobile-responsive-widget " data-type="direct-embed" style="width:1px;min-height:20px">
            
            </div>
          </div>
        </div>
      </li>
      <li id="cid_143" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container">
            <button id="form-pagebreak-back_143" type="button" class="form-pagebreak-back  form-submit-button-3d_round_yellow jf-form-buttons" data-component="pagebreak-back">
              Back
            </button>
          </div>
          <div class="form-pagebreak-next-container">
            <button id="form-pagebreak-next_143" type="button" class="form-pagebreak-next  form-submit-button-3d_round_yellow jf-form-buttons" data-component="pagebreak-next">
              Next
            </button>
          </div>
          <div class="form-pagebreak-next-container form-pagebreak-save-container">
          </div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_143">
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li class="form-line" data-type="control_divider" id="id_140">
        <div id="cid_140" class="form-input-wide">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_148">
        <label class="form-label form-label-left form-label-auto" id="label_148" for="input_148">
          Passengers Details 1.
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_148" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_148" name="input_148" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" size="20" value="" data-component="textbox" aria-labelledby="label_148 sublabel_input_148" required="" />
            <label class="form-sub-label" for="input_148" id="sublabel_input_148" style="min-height:13px" aria-hidden="false"> Full Name (As per Govt.ID Card) </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_149">
        <label class="form-label form-label-left form-label-auto" id="label_149" for="input_149">
          Age
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_149" class="form-input jf-required">
          <input type="number" id="input_149" name="input_149" data-type="input-number" class=" form-number-input form-textbox validate[required]" data-defaultvalue="" style="width:60px" size="5" value="" placeholder="ex: 23" data-numbermin="0" data-numbermax="100" data-component="number" aria-labelledby="label_149" required="" step="any" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_150">
        <label class="form-label form-label-left form-label-auto" id="label_150" for="input_150">
          Sex
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_150" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_150" name="input_150" style="width:150px" data-component="dropdown" required="">
            <option value="">  </option>
            <option value="Select"> Select </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
            <option value="Others"> Others </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_179">
        <div id="cid_179" class="form-input-wide">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_160">
        <label class="form-label form-label-left form-label-auto" id="label_160" for="input_160"> Passengers Details 2. </label>
        <div id="cid_160" class="form-input">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_160" name="input_160" data-type="input-textbox" class="form-textbox" data-defaultvalue="" size="20" value="" data-component="textbox" aria-labelledby="label_160 sublabel_input_160" />
            <label class="form-sub-label" for="input_160" id="sublabel_input_160" style="min-height:13px" aria-hidden="false"> Full Name (As per Govt.ID Card) </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_161">
        <label class="form-label form-label-left form-label-auto" id="label_161" for="input_161"> Age </label>
        <div id="cid_161" class="form-input">
          <input type="number" id="input_161" name="input_161" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:60px" size="5" value="" placeholder="ex: 23" data-numbermin="0" data-numbermax="100" data-component="number" aria-labelledby="label_161" step="any" />
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_172">
        <label class="form-label form-label-left form-label-auto" id="label_172" for="input_172"> Sex </label>
        <div id="cid_172" class="form-input">
          <select class="form-dropdown" id="input_172" name="input_172" style="width:150px" data-component="dropdown">
            <option value="">  </option>
            <option value="Select"> Select </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
            <option value="Others"> Others </option>
          </select>
        </div>
      </li>

      <li id="cid_125" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container">
            <button id="form-pagebreak-back_125" type="button" class="form-pagebreak-back  form-submit-button-3d_round_yellow jf-form-buttons" data-component="pagebreak-back">
              Back
            </button>
          </div>
          <div class="form-pagebreak-next-container">
            <button id="form-pagebreak-next_125" type="button" class="form-pagebreak-next  form-submit-button-3d_round_yellow jf-form-buttons" data-component="pagebreak-next">
              Next
            </button>
          </div>
          <div class="form-pagebreak-next-container form-pagebreak-save-container">
          </div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_125">
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li class="form-line jf-required" data-type="control_number" id="id_37">
        <label class="form-label form-label-left" id="label_37" for="input_37">
          Mobile Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_37" class="form-input jf-required">
          <input type="number" id="input_37" name="input_37" data-type="input-number" class=" form-number-input form-textbox validate[required]" data-defaultvalue="" style="width:220px" size="25" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_37" required="" step="any" />
        </div>
      </li>
      <div id="cid_109" class="form-input-wide jf-required">
        <div data-widget-name="Email Correctness Check" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
          <div class="widget-inputs-wrapper">
            <input type="hidden" id="input_109" class="form-hidden form-widget widget-required " name="q109_emailId" value="" />
            <input type="hidden" id="widget_settings_109" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22msg%22%2C%22value%22%3A%22Please%20enter%20the%20correct%20Email!%20%22%7D%5D" data-version="2" />
          </div>
      <li class="form-line" data-type="control_number" id="id_124">
        <label class="form-label form-label-left form-label-auto" id="label_124" for="input_124"> Alternative Mobile Number </label>
        <div id="cid_124" class="form-input">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_124" name="input_124" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:220px" size="25" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_124 sublabel_input_124" step="any" />
            <label class="form-sub-label" for="input_124" id="sublabel_input_124" style="min-height:13px" aria-hidden="false"></label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_37">
        <label class="form-label form-label-left" id="label_37" for="input_37">
          Email ID
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_38" class="form-input-wide jf-required">
          <input type="email" id="input_38" name="input_38" data-type="input-email id" class="form-emailid-input form-textbox validate[required]" data-defaultvalue="" style="width:220px" size="25" value="" placeholder="ex:abc@gmail.com" data-component="email id" aria-labelledby="label_38" required="" step="any" />
            <script type="text/javascript">
            setTimeout(function()
{
  var _cFieldFrame = document.getElementById("customFieldFrame_109");
  if (_cFieldFrame)
  {
    _cFieldFrame.onload = function()
    {
      if (typeof widgetFrameLoaded !== 'undefined')
      {
        widgetFrameLoaded(109, {
          "formID": 220774095402453
        })
      }
    };
    _cFieldFrame.src = "//widgets.jotform.io/mailCheck/?qid=109&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
    _cFieldFrame.addClassName("custom-field-frame-rendered");
  }
}, 0);
            </script>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_186">
        <label class="form-label form-label-left form-label-auto" id="label_186" for="input_186">
          <span class="form-required">
          </span>
        </label>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_188">
        <label class="form-label form-label-left form-label-auto" id="label_188" for="input_188"></label>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_189">
        <label class="form-label form-label-left form-label-auto" id="label_189" for="input_189"></label>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_190">
        <label class="form-label form-label-left form-label-auto" id="label_190" for="input_190">  </label>
      </li>
      <li class="form-line jf-required" data-type="control_widget" id="id_192">
        <div id="cid_192" class="form-input jf-required">
          <div data-widget-name="Terms &amp;amp;amp;amp;amp; Conditions" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
            <script type="text/javascript">
            setTimeout(function()
{
  var _cFieldFrame = document.getElementById("customFieldFrame_192");
  if (_cFieldFrame)
  {
    _cFieldFrame.onload = function()
    {
      if (typeof widgetFrameLoaded !== 'undefined')
      {
        widgetFrameLoaded(192, {
          "formID": 220774095402453
        })
      }
    };
    _cFieldFrame.src = "//widgets.jotform.io/termsConditions/?qid=192&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
    _cFieldFrame.addClassName("custom-field-frame-rendered");
  }
}, 0);
            </script>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_145">
        <label class="form-label form-label-left form-label-auto" id="label_145" for="input_145"></label>
      </li>
      <li class="form-line" data-type="control_widget" id="id_93">
        <div id="cid_93" class="">
          <div style="width:100%;text-align:Left" data-component="widget-directEmbed">
            <div class="direct-embed-widgets get-user-agent-widget " data-type="direct-embed" style="width:50px;min-height:50px">
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_widget" id="id_121">
        <label class="form-label form-label-left form-label-auto" id="label_121" for="input_121">  </label>
        <div id="cid_121" class="form-input">
          <div data-widget-name="Get Visitor Location" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
            <iframe data-client-id="528f2d25cb95879e40000007" title="Get Visitor Location" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_121" src="" style="max-width:400px;border:none;width:100%;height:1px" data-width="400" data-height="1">
            </iframe>
            <div class="widget-inputs-wrapper">
              <input type="hidden" id="input_121" class="form-hidden form-widget  " name="q121_typeA121" value="" />
              <input type="hidden" id="widget_settings_121" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22inputBox%22%2C%22value%22%3A%22Hide%22%7D%2C%7B%22name%22%3A%22outputDetails%22%2C%22value%22%3A%22Country%2CCity%2CLatitude%2CLongitude%22%7D%5D" data-version="2" />
            </div>
            <script type="text/javascript">
            setTimeout(function()
{
  var _cFieldFrame = document.getElementById("customFieldFrame_121");
  if (_cFieldFrame)
  {
    _cFieldFrame.onload = function()
    {
      if (typeof widgetFrameLoaded !== 'undefined')
      {
        widgetFrameLoaded(121, {
          "formID": 220774095402453
        })
      }
    };
    _cFieldFrame.src = "//widgets.jotform.io/getVisitorLocation/?qid=121&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
    _cFieldFrame.addClassName("custom-field-frame-rendered");
  };
            </script>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_widget" id="id_123">
        <div id="cid_123" class="form-input-wide">
          <div data-widget-name="Digital Clock" style="width:100%;text-align:Center;overflow-x:auto" data-component="widget-field">
            <iframe data-client-id="5293030905a7114f70000027" title="Digital Clock" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_123" src="" style="max-width:400px;border:none;width:100%;height:105px" data-width="400" data-height="105">
            </iframe>
            <div class="widget-inputs-wrapper">
              <input type="hidden" id="input_123" class="form-hidden form-widget  " name="q123_typeA123" value="" />
              <input type="hidden" id="widget_settings_123" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22theme%22%2C%22value%22%3A%22light%22%7D%5D" data-version="2" />
            </div>
            <script type="text/javascript">
            setTimeout(function();
            </script>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_53">
        <label class="form-label form-label-left form-label-auto" id="label_53" for="input_53">
          <span class="form-required">
          </span>
        </label>
      </li>
      <li class="form-line" data-type="control_button" id="id_1">
        <div id="cid_1" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button type="submit" name="signup-btn" class="form-submit-button form-submit-button-simple_yellow submit-button "><a href="ticket photo.jpg">Submit</a></button>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_widget" id="id_90">
        <div id="cid_90" class="">
          <div style="width:100%;text-align:Left" data-component="widget-directEmbed">
            <div class="direct-embed-widgets mobile-responsive-widget " data-type="direct-embed" style="width:1px;min-height:20px">
            
            </div>
          </div>
        </div>
      </li>
      <li style="display:none">
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220774095402453" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='220774095402453'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "220774095402453-220774095402453";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6 branding21">
  <div data-wrapper-react="true" class="product-container-wrapper">
    <div class="filter-container">
    </div>
    <input type="hidden" name="simple_fpc" data-payment_type="paypal" data-component="payment1" value="118" />
    <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
    <div id="image-overlay" class="overlay-content" style="display:none">
      <img id="current-image" />
      <span class="lb-prev-button">
        prev
      </span>
      <span class="lb-next-button">
        next
      </span>
      <span class="lb-close-button">
        ( X )
      </span>
      <span class="image-overlay-product-container">
      </span>
    </div>
  </div>
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script><script type="text/javascript">window.GOOGLE_SIGNON = "172124630376-qk1qmdfmur2ojaf39e070iqhpt2foaip.apps.googleusercontent.com"</script>
<script type="text/javascript">window.FACEBOOK_SIGNON_APP_ID = "1140740696088074"</script>
<script>window.JotFormAPIEndpoint = "https://api.jotform.com"; </script>
<script>window.___JFsclActive = true; </script>
<script>window.JFForm = { id: '220774095402453', skippable: true, isHipaa: '' };</script> 
<script defer src="https://cdn.jotfor.ms//common/FormUserScripts.js?v=3.3.31912"></script>