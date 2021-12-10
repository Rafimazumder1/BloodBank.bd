<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
		<img style="display: inline;" src="Rafi/RR1.png" alt="logo" />
<h1 style="padding-bottom:10px;">BLOODBANK.bd</h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>

        <div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		<img src="Rafi/welcome.png"/>		
		<p>রক্ত হল উচ্চশ্রেণীর প্রাণিদেহের এক প্রকার কোষবহুল, বহু জৈব ও অজৈব পদার্থের সমন্বয়ে গঠিত সামান্য লবণাক্ত, আঠালো, ক্ষারধর্মী ও লালবর্ণের ঘন তরল পদার্থ যা হৃৎপিণ্ড, ধমনী, শিরা ও কৈশিক জালিকার মধ্য দিয়ে নিয়মিত প্রবাহিত হয়। 
			রক্ত একধরনের তরল যোজক কলা। রক্ত প্রধানত দেহে অক্সিজেন, কার্বন ডাই অক্সাইড এবং অন্যান্য বর্জ্য পদার্থ পরিবাহিত করে।
			 রক্ত হল আমাদেরে দেহের জ্বালানি স্বরূপ।[১] মানবদেহে মোট ওজনের শতকরা ৭ ভাগ রক্ত থাকে (গড়ে মানবদেহে ৫-৬ লিটার রক্ত থাকে)। 
			 [২] রক্তের পিএইচ সামান্য ক্ষারীয় অর্থাৎ ৭.৩৫-৭.৪৫ (গড়ে ৭.৪০)। মানুষের রক্তের তাপমাত্রা ৩৬ - ৩৮ ডিগ্রি সেন্টিগ্রেড (গড়ে ৩৭ ডিগ্রি সেন্টিগ্রেড)।
				৩][৪] রক্তের আপেক্ষিক ঘনত্ব পানির চেয়ে বেশি, প্রায় ১.০৬৫ । অজৈব লবণের উপস্থিতির জন্য রক্তের স্বাদ নোনতা। সুনির্দিষ্ট বাহিকার মাধ্যমে রক্ত দেহের সবখানে সঞ্চালিত হয়।</p>
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
		  <li>
  	    	    <img src="Rafi/DIU.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/3.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/4.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/diu3.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/DIU2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/DIU2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Rafi/diu3.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main">
	<div class="content">		
			<h4>Blood bank:</h4>
			<p> মানুষের মূল্যবান জীবন ও দেহ সুরক্ষায় রক্ত অত্যন্ত গুরুত্বপূর্ণ ও অপরিহার্য তরল উপাদান। যেকোনো দুর্ঘটনায় শরীর থেকে রক্ত ঝরে গেলে দেহের অভ্যন্তরে অন্ত্র বা অন্য কোনো অঙ্গ থেকে রক্তক্ষরণ হলে অস্ত্রোপচারের জন্য রক্তের খুব প্রয়োজন।
				 প্রসবজনিত কিংবা অন্যান্য জটিল অপারেশনের সময় অথবা বড় ধরনের দুর্ঘটনার মতো নাজুক অবস্থাতেও রক্ত দেওয়া অত্যাবশ্যকীয় হয়ে পড়ে। যেহেতু রক্তের কোনো বিকল্প  নেই তাই অন্য একজন সুস্থ সবল ব্যক্তির কাছ থেকে রক্ত নিতে হয়। সঠিক সময়ে রক্ত সংগ্রহে ব্যর্থ হয়ে অনেক রোগী মারা যান।
				  কিন্তু চাইলেই একজন সুস্থ সবল মানুষ স্বেচ্ছায় রক্তদান করে একটি প্রাণ বাঁচাতে এগিয়ে আসতে পারেন। রক্ত দানের মতো মহৎ কাজ পৃথিবীতে খুব কমই আছে।

স্বেচ্ছায় রক্তদানে অন্য মানুষের মূল্যবান প্রাণ রক্ষা পায় এবং নিজের জীবনও ঝুঁকিমুক্ত থাকে, তাই রক্তদানের ব্যাপারে ইসলামে কোনো বিধি-নিষেধ নেই। কোরআনে কারিমে ইরশাদ হয়েছে, ‘যে কারও জীবন রক্ষা করে, সে যেন সবার জীবন রক্ষা করে।’ সুরা আল মায়িদা : ৩২

রক্তদানের সঙ্গে প্রাণ রক্ষার বিষয়টি ওতপ্রোতভাবে জড়িত। একজন মানুষ রক্তদান করলে সেই রক্ত নিয়ে মুমূর্ষু রোগীর প্রাণ বাঁচানো সম্ভব। প্রতিবছর ১৪ জুন বিশ্বের অন্যান্য দেশের মতো বাংলাদেশেও রক্তদান দিবস পালিত হয়। স্বেচ্ছায় ও বিনামূল্যে রক্তদান করে যারা প্রতি বছর কোটি কোটি মানুষের উপকার করেন, জীবন বাঁচাতে সাহায্য করেন পর্দার আড়ালে থাকা সেসব মানুষসহ সবাইকে স্বেচ্ছায় রক্তদানে উৎসাহিত করাই এই দিবস পালনের উদ্দেশ্য।</p>
	</div>
	<div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                         <div class="blog_desc">
						<div class="blog_heading">
							<span style="font-weight:bold"><b>“তুচ্ছ নয় রক্তদান, 
বাঁচাতে পারে একটি প্রাণ”</p></span>
							
						 </div>	
                         <br />
	<span style="font-weight:bold"><b>World Blood Donor Day: Poor health reduces women blood donors in Dhaka</b>
<p>While the overall number of blood donors in India has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
			
			
	</div>
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title"> Raihan Habib Rafi Mazumder </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>