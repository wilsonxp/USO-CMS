<?php 
/* -----------------INFORMATION & LICENSING-----------------
 * 
 *      AUTHOR: Christopher Sparrowgrove 
 *        NAME: Activities Page
 *        DATE: Oct 19, 2011
 *        FILE: activities.php
 *    LANGUAGE: PHP Hypertext Processor (PHP)
 * DESCRIPTION:  Displays's Activities at USO of Fort Carson
 *     LICENSE:      
 */ 
 require_once('../config.php');
?>
<html>
    <head>
        <title>Under Construction</title>
        <style type="text/css">
        body {font-size: small;}
        #title {text-align: center;}
        
        #bold 
        {
            font-weight: bold;
            padding: 3px, 0px, -3px, 0px;
        }
        #data
        {
            font-weight: normal;
            padding: -5px, 0px, -3px, 0px;
        }
        </style>
    </head>
    
    <body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '290220450990671', // App ID
      channelURL : '//www.usocms.com/fortcarson/channel.php', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      oauth      : true, // enable OAuth 2.0
      xfbml      : true  // parse XFBML
    });
    
    FB.Canvas.setSize({ width: 800, height: 960 });
    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     d.getElementsByTagName('head')[0].appendChild(js);
   }(document));
</script>


<div id="content" style="width: 500px;">
    <div id="title" style="font-weight:900; font-size:20px; ">Activities
         <div class="fb-like" data-href="http://www.facebook.com/3Xsec" data-send="false" data-layout="button_count" data-width="50" 
                          data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms">
         </div> 
    </div>
         <p id="content" style="text-align:left;">
             <p id="section"> 
                 <b>Computers (Must be 16yrs or Older)</b>
                   <br>
                     We have laptops available for checking e-mail, facebook, Instant Messaging 
                   </br>  
                 <b>NOTE:</b> Instant messaging can be done through third party sites like: http://meebo.com
             </p>
             <p id="section"> 
                 <b>WiFi Room</b>
                   <br>
                     Provided to you free is the WiFi room. A Dedicated room for WiFi enabled devices, so bring your laptops, PSP's, Gameboys, etc and kick back in the WiFi room.
                   </br>        
             </p>
             <p id="section">
                 <b>Pool Table (Must be 16yrs or Older) </b>
                   <br>
                     We have a pool table in the back available for soldier to use during their time off.
                   </br>
             </p>
             <p id="section">
                 <b>XBox</b>
                   <br>
                     Kick back in the Game Room with controls & a game checked out up at the front desk on you time off from duty. Play Life4Dead 2, Call of Duty, and more. 
                   </br>
             </p>
             <p id="section">
                 <b>Movies (MPAA Based Rating System)</b>
                   <br>
                     We have several movies available for check out for use in the Theater Room or on your personal computer if you so choose
                   </br>
             </p>
             <p id="section">
                 <b>Conference Room</b>
                   <br>
                     The conference room can be checked out up front with considerable advanced notice.
                   </br>
             </p>
             <p id="section">
                 <b>Kids Room</b>
                   <br>
                     We have a kids room available for children of Active Duty, Reserve, and/or Retired Soldiers. The Kids room is equip with the ability to play DVD movies checked out up front. Included in the room are some toys, book, and games..Please ask our volunteers for assistance
                   </br>
             </p>
             <p id="section">
                 <b>Food</b>
                   <br>
                     We server two free meals per day. Monday Through Friday Lunch is served from 11am - 2pm and Dinner 6pm to 9pm. Every guest is entitled to one free meal voucher for each of these meals times while food supplies last. Please sign in up at the front desk to get a voucher. Please reflect the voucher number during sign in
                   </br>
             </p>
             <p id="section">
                 <b>Fire Place</b>
                   <br>
                     The fire place is open for seating year round especially in the Winter when it gets bone chilling cold outside
                   </br>
             </p>
             <p id="section">
                 <b>Flat Screens TV's </b>
                   <br>
                     We have 5 flat screen Tv's for viewing. We have one in the Kids room available for viewing DVDs as with the Flat screen in the Theater Room. We also have one in the Wifi Room, and on both walls in the dining area
                   </br>
             </p>             
             <p id="section">
                 <b>Patio</b>
                   <br>
                     During the Summer we have the patio open to seating and sun soaking.
                   </br>
             </p>
             <p id="section">
                 <b>NOTE:</b>
                   All equipment checkouts are done at the front desk with a valid DoD Issued Identification Card which is withheld during the remainder of your checkout.Also be aware that some items may have Age Restrictions.
             </p>

<?PHP
    echo '<p style="font-size:12px;text-align:center;">Version: ', $Version;
    echo ' &copy;2010-2011 <a style="text-decoration:none;" target="_Blank" href="http://facebook.com/3Xsec">3X Security, LLC</a><br />';
    echo $links;
    echo '<p style="text-align:center; padding-top:8px;"><b>DISCLAIMER:</b> The United Service Organization (USO) does not endorse<br> this application nor does it reflect the views of the USO or its affiliates.';
    echo '<BR /><a href="http://www.instantssl.com">
<img src="../comodo_secure-76x26.gif" alt="Instant SSL Certificate Secure Site" title="Instant SSL Certificate Secure Site" width="76" height="26" style="border: 0px;"></a><br></p>
';
    //include ('footer.php');
    ?>   
</div>
 </body>
</html>