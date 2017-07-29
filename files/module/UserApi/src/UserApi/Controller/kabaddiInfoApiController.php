<?php
namespace UserApi\Controller;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
class kabaddiInfoApiController extends AbstractRestfulController
{
    public function getList()
    {
	  	header('Access-Control-Allow-Origin: *');
    }
   public function get($country)
    {
		header('Access-Control-Allow-Origin: *');	
		if($country == 1){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
			"interstitialOnRTOCodes"=> "true",
		    "bannerOnTop"=> "false",
			"sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
		    "smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "captchaPopup"=> "false",
			"appVersion"=> "11",
			"sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
		    "smsvahanaddress"=> "AM-VAAHAN",
		    "serverTimeOurDuration"=> "90000",
		    "rateAppAlertDelay"=> "700000",
		    "enableWebview" => "true",
			"enableRTOCodes" => "false",
			"customeRating" => "true",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
		    "webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
		    // "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
		    // "webViewUrl" => "http://spreadthequote.com/countryswebservices/version.html",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
			"appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    // "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.actressalbums.ntes",
			// "ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/ntes.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.happyholi",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/holi.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.jiotricks",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/jio.png",
			// "ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			// "ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			// "ourApp4Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.agecalculator",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age.png",
			// "ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.rationcardonline",
			// "ourApp5icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/ration.png",
			// "ourApp6Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.pancardonlineservices",
			// "ourApp6icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/pan.png",
			// "ourApp7Link"=> "https://play.google.com/store/apps/details?id=com.india.aadhar",
			// "ourApp7icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aadhaar.png",
			// "ourApp8Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.simenquiry",
			// "ourApp8icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			// "ourApp9Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.voteridcorrection",
			// "ourApp9icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/votercorrection.png",
			// "ourApp10Link"=> "https://play.google.com/store/apps/details?id=com.hangover.mobileantitheft",
			// "ourApp10icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mat.png",
			// "ourApp11Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.allbank",
			// "ourApp11icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp12Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.rtocodes",
			// "ourApp12icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/rtocodes.png",
			// "ourApp13Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.checkepfbalance",
			// "ourApp13icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/epf.png",
			// "ourApp14Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.drivingtest",
			// "ourApp14icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/drivingtest.png",
			// "ourApp15Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.phonetracker",
			// "ourApp15icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/phonefinder.png",
			"ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bharatkeveer",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/bharatnew.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.birdsounds",
			// "ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/birds2.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			"ourApp4Link"=> "http://spreadthequote.com/",
			"ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon.png",
			"ourApp5Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp5icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp6Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp6icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=> "",
			"ourApp8icon"=> "",
			"ourApp9Link"=> "",
			"ourApp9icon"=> "",
			"ourApp10Link"=>"",
			"ourApp10icon"=>"",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"ourApp14Link"=>"",
			"ourApp14icon"=>"",
			"ourApp15Link"=>"",
			"ourApp15icon"=>"",
		    "usedCaptcha"=> "false");
		}
		else if($country == 2){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "25",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "false",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			"ourApp1Link"=> "http://aapthitech.com",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aapthitech.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			"ourApp4Link"=> "http://spreadthequote.com/",
			"ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp5Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp5icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp6Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp6icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp7Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bharatkeveer",
			"ourApp7icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/bharatnew.png",
			"ourApp8Link"=>"https://play.google.com/store/apps/details?id=com.mostusefullapps.flames",
			"ourApp8icon"=>"https://raw.githubusercontent.com/Samarasa/appicons/master/images/flames.png",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"",
			"ourApp10icon"=>"",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"ourApp14Link"=>"",
			"ourApp14icon"=>"",
			"ourApp15Link"=>"",
			"ourApp15icon"=>"",
		    "usedCaptcha"=> "false"
			);
		}
                else if($country == 3){
                  $infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
			"interstitialOnRTOCodes"=> "false",
		    "bannerOnTop"=> "false",
		    "serverTimeOurDuration"=> "30000",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=101",
		    // "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
			"vehicleNotFoundMessage"=> "There is some technical issues, please try again.",
		    // "noData"=> "There is some technical issues, please try again",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "RTO site is down for maintenance, please try after sometime.",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
			// "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.actressalbums.allbank",
            // "ourTopAppicon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/banks.png",
			// "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.actressalbums.hindicalendar",
            // "ourTopAppicon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/hindi_calendar.png",
			// "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.actressalbums.newyeargreetings",
            // "ourTopAppicon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/newyear.png",
			// "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.actressalbum.dhoni",
            // "ourTopAppicon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/dhoni.png",
			// "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.suitableapps.simenquiry",
		    // "ourTopAppicon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/sim.png",
		    // "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.rtocodes",
		    // "ourApp1icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/rtocodes.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.phonetracker",
		    // "ourApp2icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/phonefinder_128.png",
			// "ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.mobileantitheftalarm",
		    // "ourApp3icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/latest-theft.png",
			// "ourApp4Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
		    // "ourApp4icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/dlinfo.png",
			// "ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.hindicalendar",
            // "ourApp5icon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/hindi_calendar.png",
			// "ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.statusmessages",
		    // "ourApp5icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/status.png",
			// "ourApp6Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.drivingtest",
		    // "ourApp6icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/drivingtest.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.vehicleinfo",
			"ourApp1icon"=> "img/vehicleinfo_1.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.voterlist2017",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/voter.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.pancardonlineservices",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/pan.png",
			"ourApp4Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.simenquiry",
			"ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.allbank",
			"ourApp5icon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/banks.png",
			"ourApp6Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.voteridcorrection",
			"ourApp6icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/votercorrection.png",
			"ourApp7Link"=> "https://play.google.com/store/apps/details?id=com.india.aadhar",
			"ourApp7icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aadhaar.png",
			"ourApp8Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.agecalculator",
			"ourApp8icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age.png",
			"ourApp9Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.rationcardonline",
			"ourApp9icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/ration.png",
		    "usedCaptcha"=> "false");
                }
				
			else if($country == 4){
                  $infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialOnSearchAnother" =>  "false",
		    "interstitialOnGoHome"=> "false",
			"interstitialOnRTOCodes"=> "false",
		    "bannerOnTop"=> "false",
		    "serverTimeOurDuration"=> "30000",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "false",
		    "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    "noData"=> "There is some technical issues, please try again",
		    "siteDownMessage"=> "Server is down due to heavy traffic. Apologies for the inconvenience caused, please try after 2 hours.",
			"ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.suitableapps.rtocodes",
            "ourTopAppicon"=> "http://www.spreadthequote.com/countryswebservices/public/uploads/rtocodes.png",
		    "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.rtocodes",
		    "ourApp1icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/rtocodes.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.phonetracker",
		    "ourApp2icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/phonefinder_128.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.mobileantitheftalarm",
		    "ourApp3icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/latest-theft.png",
			"ourApp4Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
		    "ourApp4icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/dlinfo.png",
			"ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.actressalbums.statusmessages",
		    "ourApp5icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/status.png",
			"ourApp6Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.drivingtest",
		    "ourApp6icon"=> "http://spreadthequote.com/countryswebservices/public/uploads/drivingtest.png",
		    "usedCaptcha"=> "false");
                }
				
		else if($country == 5){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "true",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "11",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "false",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp4Link"=> "http://spreadthequote.com/",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp4Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.apvehicleownerdetails",
			"ourApp5icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/apvehicleinfo.png",
			// "ourApp4Link"=> "",
			// "ourApp4icon"=> "",
			"ourApp6Link"=> "",
			"ourApp6icon"=> "",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=>"",
			"ourApp8icon"=>"",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp10icon"=>"eECHALLAN@JSON$#12",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"search1"=>"true", // Check our db
		    "search2"=>"false",
		    "search3"=>"false", // our db + sms
		    "search4"=>"false", // our db + web
		    "search5"=>"false",
		    "search6"=>"false", //
			"search7"=>"1",
		    "usedCaptcha"=> "false"
			);
		}
		else if($country == 6){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "11",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "true",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp4Link"=> "http://spreadthequote.com/",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "",
			"ourApp5icon"=> "",
			"ourApp4Link"=> "",
			"ourApp4icon"=> "",
			"ourApp6Link"=> "",
			"ourApp6icon"=> "",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=>"",
			"ourApp8icon"=>"",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp10icon"=>"eECHALLAN@JSON$#12",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"search1"=>"true", // Check our db
		    "search2"=>"false",
		    "search3"=>"false", // our db + sms
		    "search4"=>"false", // our db + web
		    "search5"=>"false",
		    "search6"=>"false", //
			"search7"=>"2",
		    "usedCaptcha"=> "false"
			);
		}
			else if($country == 7){ 
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "true",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "11",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "false",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			// "ourApp1Link"=> "http://aapthitech.com",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aapthitech.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp4Link"=> "http://spreadthequote.com/",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp4Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "https://play.google.com/store/apps/details?id=com.hangoverstudios.apvehicleownerdetails",
			"ourApp5icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/apvehicleinfo.png",
			// "ourApp4Link"=> "",
			// "ourApp4icon"=> "",
			"ourApp6Link"=> "",
			"ourApp6icon"=> "",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=>"",
			"ourApp8icon"=>"",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp10icon"=>"eECHALLAN@JSON$#12",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"search1"=>"true", // Check our db
		    "search2"=>"false",
		    "search3"=>"false", // our db + sms
		    "search4"=>"false", // our db + web
		    "search5"=>"false",
		    "search6"=>"false", //
			"search7"=>"2",
		    "usedCaptcha"=> "false"
			);
		}
		else if($country == 8){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "11",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "false",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			// "ourApp1Link"=> "http://aapthitech.com",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aapthitech.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp4Link"=> "http://spreadthequote.com/",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "",
			"ourApp5icon"=> "",
			"ourApp4Link"=> "",
			"ourApp4icon"=> "",
			"ourApp6Link"=> "",
			"ourApp6icon"=> "",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=>"",
			"ourApp8icon"=>"",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp10icon"=>"eECHALLAN@JSON$#12",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"search1"=>"true", // Check our db
		    "search2"=>"false",
		    "search3"=>"false", // our db + sms
		    "search4"=>"false", // our db + web
		    "search5"=>"false",
		    "search6"=>"false", //
			"search7"=>"2",
		    "usedCaptcha"=> "false"
			);
		}
		else if($country == 9){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "11",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "false",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			// "ourApp1Link"=> "http://aapthitech.com",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aapthitech.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp4Link"=> "http://spreadthequote.com/",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "",
			"ourApp5icon"=> "",
			"ourApp4Link"=> "",
			"ourApp4icon"=> "",
			"ourApp6Link"=> "",
			"ourApp6icon"=> "",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=>"",
			"ourApp8icon"=>"",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp10icon"=>"eECHALLAN@JSON$#12",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"search1"=>"true", // Check our db
		    "search2"=>"false",
		    "search3"=>"false", // our db + sms
		    "search4"=>"false", // our db + web
		    "search5"=>"false",
		    "search6"=>"false", //
			"search7"=>"2",
		    "usedCaptcha"=> "false"
			);
		}
				
		else if($country == 10){
		$infoObject = array(
		    "interstitialOnLaunch" => "false",
		    "interstitialInSearch" => "false",
		    "interstitialInSearchEveryTime" => "true",
		    "interstitialOnSearchAnother" =>  "true",
		    "interstitialOnGoHome"=> "true",
		    "interstitialOnRTOCodes"=> "true",
			"captchaPopup"=> "false",
			"rtosite"=> "true", 
			"getDetailsURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"sendAnalyticsEventURL" => "http://spreadthequote.com/countryswebservices/sms-vehicle",
			"sendVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/read-vehicle",
			"getstaticValuesURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info/2",
			"isVahanSiteLiveURL" => "http://spreadthequote.com/countryswebservices/get-info",
			"getCaptchaURL" => "http://spreadthequote.com/countryswebservices/get-info/1",
			"getTrendingURL" => "http://spreadthequote.com/countryswebservices/trending",
			"getVehicleDetailsURL" => "http://spreadthequote.com/countryswebservices/get-kabaddi-info",
		    "bannerOnTop"=> "false",
		    "noOfSuccessResults"=> "1",
		    "sendSMS"=> "true",
		    "vahanText"=> "VAHAN ",
		    "vahanMobile"=> "7738299899",
			"smsPopupmessage"=> "RTO website is currently down. You can still get vehicle details by sending SMS. Do you want to continue ?",
		    "appVersion"=> "11",
		    "serverTimeOurDuration"=> "90000",
		    "sms1"=> "OTP : ",
		    "sms2"=> " Please use this OTP to know your RCDL status.",
		    "smsaddress"=> "VK-VAAHAN",
			"smsvahanaddress"=> "AM-VAAHAN",
		    "rateAppAlertDelay"=> "7000",
		    "enableWebview" => "true",
		    "enableRTOCodes" => "false",
		    "customeRating" => "false",
			"webViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "webViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			//"webViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcstatus.xhtml",
			"newEnableWebview" => "false",
			// "newWebViewUrl" => "http://aapthitech.com/ea/countryswebservices/version.html",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://vahan.nic.in/nrservices/faces/user/jsp/SearchStatus.jsp",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/?pur_cd=102",
			"newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
			// "newWebViewUrl" => "https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml",
		    "vehicleNotFoundMessage"=> "Please send your vehicle number to us using CONTACT button, we will verify and get back to you as soon as possible.",
		    // "appVersionMessage"=> "App is updated. Please get latest version of the app from playstore and try",
		    "appVersionMessage"=> "There is some technical issues, please try again.",
		    "noData"=> "There is some technical issues, please try again.",
		    // "siteDownMessage"=> "We regret for inconvenience caused. Few of our servers are down for maintenance, they will be back in 48 hours",
		    "siteDownMessage"=> "There is some technical issues, please try again.",
		    "ourTopAppLink"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.bankbalance",
			"ourTopAppicon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/banks.png",
			// "ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.mparivahan",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/mparivahan.png",
			// "ourApp1Link"=> "http://aapthitech.com",
			// "ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/aapthitech.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			"ourApp1Link"=> "https://play.google.com/store/apps/details?id=com.suitableapps.dlinfo",
			"ourApp1icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/dlinfo.png",
			// "ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.agecalculator",
			// "ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/age2.png",
			// "ourApp4Link"=> "http://spreadthequote.com/",
			// "ourApp4icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/quotes_icon_new.png",
			"ourApp3Link"=> "https://play.google.com/store/apps/developer?id=highlight+indian+apps",
			"ourApp3icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/govt_apps.png",
			"ourApp2Link"=> "https://play.google.com/store/apps/details?id=com.mostusefullapps.simenquiry",
			"ourApp2icon"=> "https://raw.githubusercontent.com/Samarasa/appicons/master/images/sim.png",
			"ourApp5Link"=> "",
			"ourApp5icon"=> "",
			"ourApp4Link"=> "",
			"ourApp4icon"=> "",
			"ourApp6Link"=> "",
			"ourApp6icon"=> "",
			"ourApp7Link"=> "",
			"ourApp7icon"=> "",
			"ourApp8Link"=>"",
			"ourApp8icon"=>"",
			"ourApp9Link"=>"",
			"ourApp9icon"=>"",
			"ourApp10Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp10icon"=>"eECHALLAN@JSON$#12",
			"ourApp11Link"=>"",
			"ourApp11icon"=>"",
			"ourApp12Link"=>"2dAKr5uCE+DLmD0NbUDqrWizfssj5p73kYmWsD/A60PjozqgRtsfJFevq8h9FZ+d",
			"ourApp12icon"=>"",
			"ourApp13Link"=>"",
			"ourApp13icon"=>"",
			"search1"=>"true", // Check our db
		    "search2"=>"false",
		    "search3"=>"false", // our db + sms
		    "search4"=>"false", // our db + web
		    "search5"=>"false",
		    "search6"=>"false", //
			"search7"=>"2",
		    "usedCaptcha"=> "false"
			);
		}
                
                
		return new JsonModel(array(
			'info'	  => $infoObject,
		));
    }
    public function create($data)
    {
		header('Access-Control-Allow-Origin: *');
		
		function get_string_between($string, $start, $end){
			$string = ' ' . $string;
			$ini = strpos($string, $start);
			if ($ini == 0) return '';
			$ini += strlen($start);
			$len = strpos($string, $end, $ini) - $ini;
			return substr($string, $ini, $len);
		} 
		$msg = "";
		$otp = $data['otp'];
		$session = $data['session'];
		$token = $data['token'];
		$field_no1 = $data['field_no1'];
		$field_no2 = $data['field_no2'];
		$tf_reg_no1 = $data['tf_reg_no1'];
		$tf_reg_no2 = $data['tf_reg_no2'];
		$mobile = $data['mobile'];
		
		$reg_number = trim($tf_reg_no1).trim($tf_reg_no2);
		
		$conn = mysql_connect("54.70.144.42","AapthiAlbums","AapthiTech@1234");
		mysql_select_db("myquotes",$conn);
		
		$sql=mysql_query("SELECT * FROM rtodata WHERE regno = '$reg_number'");
		$num_rows = mysql_num_rows($sql);
		
		$reg_no = "";
		if($num_rows>0) { 
			$msg = "success";
			while($row=mysql_fetch_array($sql)){
				$reg_at = $row['regrto'];
				$reg_no = $row['regno'];
				$reg_date = $row['regdate'];
				$chasi_no = $row['chasis'];
				$engine_no = $row['engine'];
				$owner_name = $row['owner'];
				$vehicle_class = $row['class'];
				$fuel_type = $row['vtype'];
				$maker_model = $row['model'];
			}
			
			$sql = mysql_query("UPDATE rtodata set noofviews = noofviews + 1 where regno = '$reg_no'"); 
			
			$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model);
			
		} 
		
		if($reg_no == "") {
			$state = strtoupper(substr($reg_number, 0, 2));  
			
			
			if($state == "AP") {
				$ch = curl_init();
				
				//set the url, number of POST vars, POST data
				curl_setopt($ch,CURLOPT_URL, 'https://aptransport.in/APCFSTONLINE/Reports/VehicleRegistrationSearch.aspx'); 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_TIMEOUT, 80); //timeout in seconds

				//execute post
				$result = curl_exec($ch);   
						
				//close connection
				curl_close($ch);    

				$viewstate = get_string_between($result, '__VIEWSTATE" value="', '" />');
				$prevstate = get_string_between($result, '__PREVIOUSPAGE" value="', '" />');
				 
				
				$url = 'https://aptransport.in/APCFSTONLINE/Reports/VehicleRegistrationSearch.aspx'; 
				
				$fields = array(
					'ctl00$OnlineContent$ddlInput' => 'R',
					'ctl00$OnlineContent$txtInput' => $reg_number,
					'ctl00$OnlineContent$btnGetData' => 'Get%20Data',
					'__VIEWSTATE' => $viewstate,
					'__PREVIOUSPAGE' => $prevstate 
				);
				
				$fields_string = '';
				//url-ify the data for the POST
				foreach($fields as $key=>$value)
				{
					$fields_string .= $key.'='.$value.'&'; 
				}
				$fields_string = rtrim($fields_string, '&');
				
				//open connection
				$ch = curl_init();

				//set the url, number of POST vars, POST data
				curl_setopt($ch,CURLOPT_URL, $url);
				curl_setopt($ch,CURLOPT_POST, count($fields));
				curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				//execute post
				$result = curl_exec($ch);  
				curl_close($ch);    
				preg_match("'<td id=\"ctl00_OnlineContent_tdRegnNo\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match1);	
				$reg_no = trim(strip_tags($match1[1])); 
				
				preg_match("'<td id=\"ctl00_OnlineContent_tdAuthority\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match9);	
				
				$reg_at = 'Registration Authority '.trim(strip_tags($match9[1])); 
				preg_match("'<td id=\"ctl00_OnlineContent_tdDOR\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match2);	
				$reg_date = trim(strip_tags($match2[1]));
				preg_match("'<td id=\"ctl00_OnlineContent_tdChassisno\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match3);	
				$chasi_no = trim(strip_tags($match3[1]));
				preg_match("'<td id=\"ctl00_OnlineContent_tdEngNo\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match4); 
				$engine_no = trim(strip_tags($match4[1])); 
				preg_match("'<td id=\"ctl00_OnlineContent_tdOwner\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match5);	
				$owner_name = trim(strip_tags($match5[1]));
				preg_match("'<td id=\"ctl00_OnlineContent_tdVehClass\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match6);	
				$vehicle_class = trim(strip_tags($match6[1]));
				preg_match("'<td id=\"ctl00_OnlineContent_tdFuelType\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match7);	
				$fuel_type = trim(strip_tags($match7[1]));
				preg_match("'<td id=\"ctl00_OnlineContent_tdMkrClass\" align=\"left\" colspan=\"2\">(.*?)</td>'si", $result, $match8);	
				$maker_model = trim(strip_tags($match8[1]));  
				
				if($reg_no !="") {
					$msg = "dbsuccess";
					$sql = mysql_query("INSERT INTO rtodata (`regno`,`regrto`,`owner`,`regdate`,`model`,`class`,`vtype`,`chasis`,`engine`,`noofviews`,`appname`, `createddate`) 
	VALUES ('$reg_no','$reg_at','$owner_name','$reg_date','$maker_model','$vehicle_class','$fuel_type','$chasi_no','$engine_no',1, 'AP Site', NOW())");
				} else {
					$msg = "nodata"; 
				} 
				
				
				$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model, "mobile"=>$mobile);
				
			} 
		
		}
		
		if($reg_no=="" && $mobile !="") {
		
		if( $msg !== 'down') {			

			$url = 'https://parivahan.gov.in/rcdlstatus/vahan/rcDlHome.xhtml;jsessionid='.$session; 
			
			$fields = array(
				'form_rcdl' => 'form_rcdl',
				'form_rcdl'.$field_no2 => 'form_rcdl'.$field_no2,	
				'form_rcdl:tf_OTP' => $otp,
				'javax.faces.ViewState' => $token,
				'javax.faces.partial.ajax' => 'true',
				'javax.faces.partial.execute' => '@all',
				'javax.faces.partial.render' => 'form_rcdl:pnl_show form_rcdl:rcdl_pnl',
				'javax.faces.source' => 'form_rcdl'.$field_no2		
			); 
			
			$fields_string = '';
			//url-ify the data for the POST
			foreach($fields as $key=>$value)
			{
				$fields_string .= $key.'='.$value.'&'; 
			}
			$fields_string = rtrim($fields_string, '&');
			
			//open connection
			$ch = curl_init();

			//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			//execute post
			$result = curl_exec($ch);		
			curl_close($ch);    
				if (strpos($result, 'Registration does not Exist') !== false) {
					$msg = 'Registration does not Exist'; 
					$sql = mysql_query("INSERT INTO rtomissdata (`vehicleno`,`appname`, `phone`, `createddate`) VALUES ('$reg_number', 'Hangover RTO', '$mobile', NOW())"); 
				} else {
					$msg = 'success';
					
					preg_match("'<div class=\"font-bold top-space bottom-space text-capitalize\">(.*?)</div>'si", $result, $match9);	
					$reg_at = trim(strip_tags($match9[1])); 
					
					preg_match("'Registration No:</span></td>(.*?)</td>'si", $result, $match1);	
					$reg_no = trim(strip_tags($match1[1])); 
					
					preg_match("'Registration Date:</span></td>(.*?)</td>'si", $result, $match2);	
					$reg_date = trim(strip_tags($match2[1]));
					
					preg_match("'Chasi No:</span></td>(.*?)</td>'si", $result, $match3);	
					$chasi_no = trim(strip_tags($match3[1]));
					
					preg_match("'Engine No:</span></td>(.*?)</td>'si", $result, $match4);	
					$engine_no = trim(strip_tags($match4[1]));
					
					preg_match("'Owner Name:</span> </td>(.*?)</td>'si", $result, $match5);	
					$owner_name = trim(strip_tags($match5[1]));
					
					preg_match("'Vehicle Class:</span> </td>(.*?)</td>'si", $result, $match6);	
					$vehicle_class = trim(strip_tags($match6[1]));
					
					preg_match("'Fuel Type:</span></td>(.*?)</td>'si", $result, $match7);	
					$fuel_type = trim(strip_tags($match7[1]));
					
					preg_match("'Maker Model:</span></td>(.*?)</td>'si", $result, $match8);	
					$maker_model = trim(strip_tags($match8[1]));
					if($reg_no !="") {
						$sql = mysql_query("INSERT INTO rtodata (`regno`,`regrto`,`owner`,`regdate`,`model`,`class`,`vtype`,`chasis`,`engine`,`noofviews`,`appname`, `phone`,`createddate`) 
		VALUES ('$reg_no','$reg_at','$owner_name','$reg_date','$maker_model','$vehicle_class','$fuel_type','$chasi_no','$engine_no',1, 'Hangover RTO', '$mobile', NOW())");
					} else {
						$msg = 'Registration does not Exist'; 
						$sql = mysql_query("INSERT INTO rtomissdata (`vehicleno`,`appname`, `phone`, `createddate`) VALUES ('$reg_number', 'Hangover RTO', '$mobile', NOW())");
					}
				} 
		}
		}
		
		//$msg = "down";
		$data = array("msg"=>$msg,"reg_at"=>$reg_at,"reg_no"=>$reg_no, "reg_date"=>$reg_date, "chasi_no"=>$chasi_no, "engine_no"=>$engine_no, "owner_name"=>$owner_name, "vehicle_class"=>$vehicle_class, "fuel_type"=>$fuel_type, "maker_model"=>$maker_model); 
				 
		return new JsonModel(array(
			'details'	  => $data,
		));
	}
	public function options(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
		die;
	}
    public function update($id, $data)
    {
        header('Access-Control-Allow-Origin: *');
		
	}
    public function delete($id)
    {
       header('Access-Control-Allow-Origin: *');
    }
}
