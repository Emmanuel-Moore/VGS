<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html lang="en" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Settings</title>


<meta content="IE=11.0000" http-equiv="X-UA-Compatible">
<meta name="description" content="Social gaming site." />
<meta name="keywords" content="social, gaming" />
<meta property="og:site_name" content="VGS"/>
<meta property="og:description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="ico/favicon.ico" type="image/x-icon" />


<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>    
</head>
<body onload="loadIcn()">
<!------- include header start -->
<div class="hdrWpr">
	<div class="hdrCnt">
		<div class="hdrCntHdr fL">
			<a id="uedt_4-1a" class="hdrName" onclick="upTgle('uedt_4-3c')">@emoorephp</a>
			<input id="uedt_4-2b" class="fL dN" type="text" placeholder="@emoorephp" value="@emoorephp"/>
		</div>
		<span id="ldEft"></span>
		<a href="feed.php" id="hdrLogo"></a>

		<div class="m_search fR"> 
	        <form action="search.php" method="get">
	       		<input type="submit" value='s'> 
	        	<input id="dbS" name="s" type="text" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search" > 
	        </form>
	      <div id="dbSr"></div> 
	    </div>

	</div>
</div>
<ul id="uedt_4-3c" class="uhFix3 pF dN">
	<a href="user.php">
		<li class="usr-3c">
			<img src="img/temp/tempUsr.jpg"/>
			<div class="usr-3c2Wrp diB">
				<span class="usr-3c2a">@emoorephp</span><br>
				<span class="usr-3c2b">my page</span>
			</div>
		</li>
	</a>
	<li onclick="upTgle('usr-3c3a')">my pages</li>
		<ul id="usr-3c3a" class="usr-3c3 pF dN">
			<a href="game.php"><li>@arkhamknight</li></a>
			<a href="#"><li>@example</li></a>
			<a href="#"><li>@example</li></a>
			<a href="#"><li>@example</li></a>
		</ul>
	<li onclick="xBtn('pBtn_1')">blast</li>
	<a href="settings.php"><li>settings</li></a>
	<a href="#"><li>logout</li></a>
</ul>
<!------- include header end -->
<!------- post module start -->
<div id="pBtn_1" class="pmWpr pF dN">
	<div class="pmHdr">
		<input type="text" class="fL" value="@emoorephp">
		<div class="blastSel fR">
			<select>
				<option>Post</option>
				<option>Message</option>
				<option>Feed</option>
				<option>Discussion</option>
			</select>
		</div>
	</div>
	<div class="pmInr">
		<textarea type="text" placeholder="I'm feeling epic today"></textarea>
	</div>
	<div class="pmFtr">
		<span class="photo_icon cP" note1="upload a photo"></span>
		<div class="pmFtr-rgt fR">
			<a class="fL" onclick="xBtn('pBtn_1')">cancel</a>
			<span id="flwBtn_" class="flwBtn1 cP" onlick="">blast</span>
		</div>
	</div>
</div>
<!------- post module end -->

<div id="bckVeil" class="pF dN"></div>
<div class="bodyWpr">

	<div class="rgtVwpr fR trndPos3">
		<div class="trndWpr">
			<div class="trndRgt fR">
				<span id="gmeIcn" trenda="top games" onclick="trndDis1()"></span>
				<span id="gmrIcn" trend="top gamers" onclick="trndDis2()"></span>
				<span id="dsqIcn" trendb="top discussions" onclick="trndDis3()"></span>
				<span id="trdIcn" trend="top trends" onclick="trndDis4()"></span>
			</div>
			<div class="trndLft fL dN">
				<div id="trnd1" class="dN">
					<span class="trndHdr">top games</span>
					<a href="search.php?s=">@pokemonyellow</a>
					<a href="search.php?s=">@megaman</a>
					<a href="search.php?s=">@minecraft</a>
				</div>
				<div id="trnd2" class="dN">
					<span class="trndHdr">top gamers</span>
					<a href="search.php?s=">@emoorephp</a>
					<a href="search.php?s=">@playgirl</a>
					<a href="search.php?s=">@batplayer</a>
					<a href="search.php?s=">@jamesbond7</a>
				</div>
				<div id="trnd3" class="dN">
					<span class="trndHdr">top discussions</span>
					<a href="search.php?s=">@007cheats</a>
					<a href="search.php?s=">@minecraftserver</a>
					<a href="search.php?s=">@minecrafthelp</a>
				</div>
				<div id="trnd4" class="dN">
					<span class="trndHdr">top trends</span>
					<a href="search.php?s=">@codebabes</a>
					<a href="search.php?s=">@codedudes</a>
					<a href="search.php?s=">@gamekid</a>
					<a href="search.php?s=">@amazing9</a>
				</div>
			</div>
		</div>
	</div>

	<div class="stWpr fwsp fL">
		<div class="usrImg2-6 pA stUsr">
			<img onclick="st_1b_2x()" class="cP" src="img/temp/tempUsr.jpg"/>
			<input  onfocus="st_1b_1x()" class="pA" type="text" placeholder="@gamertag" value="@emoorephp"/>
		</div>
		<div class="stHdr diB">
			<div class="stHin1 fL">
				<span id="st-1x" onclick="st_1()">Profile</span>
				<span id="st-2x" onclick="st_2()">Account</span>
				<span id="st-3x" onclick="st_3()">Save</span>
			</div>
			<div id="stHin2" class="fR">
				<span id="st_xa">Welcome</span>
				<span class="st_1b-1xa dN">Gamertag</span>
				<span class="st_1b-2xa dN">Profile Picture</span>
				<span class="st_1b-3xa dN">Profile Banner</span>
				<div>
					<span class="st_1b-1a dN">First name</span>
					<span class="st_1b-2a dN">Last name</span>
					<span class="st_1b-3a dN">Birthday</span>
					<span class="st_1b-4a dN">Bio</span>
					<span class="st_1b-5a dN">Website</span>
					<span class="st_1b-6a dN">Location</span>
					<span class="st_1b-7a dN">Country</span>
				</div>
				<div>
					<span class="st_2b-1a dN">Primary email</span>
					<span class="st_2b-2a dN">Alternative email</span>
					<span class="st_2b-3a dN">Phone number</span>
					<span class="st_2b-4a dN">Join date</span>
					<span class="st_2b-5a dN">Last login</span>
					<span class="st_2b-6a dN">Current password</span>
					<span class="st_2b-7a dN">New Password</span>
					<span class="st_2b-8a dN">Re-type new password</span>
					<span class="st_2b-9a dN">Deactivate</span>
				</div>
				<span class="st_3b-1a dN">Save</span>
			</div>
		</div>
		<div class="stInr">
			<!--- left side -->
			<div class="stLft fL">
				<span  onclick="st_1b_3x()" class="stBnr pA cP">view banner</span>
				<!--- st_1 -->
				<div id="st_1a">
					<input onfocus="st_1b_1()" type="text" placeholder="First name" value="First name"/>
					<input onfocus="st_1b_2()" type="text" placeholder="Last name" value="Last name"/>
					<input onfocus="st_1b_3()" type="text" placeholder="Join date" value="mm/dd/yyyy"/>
					<textarea onfocus="st_1b_4()" placeholder="Something awesome about myself."></textarea>
					<input onfocus="st_1b_5()" type="text" placeholder="website" value="http://www.aviyon.com"/>
					<input onfocus="st_1b_6()" type="text" placeholder="Location" value="Denver, Co"/>
					<input onfocus="st_1b_7()" type="text" placeholder="Country" value="USA"/>
				</div>
				<!--- st_2 -->
				<div id="st_2a" class="dN">
					<input onfocus="st_2b_1()" type="text" placeholder="Email address" value="emmanuel.moore@aviyon.com"/>
					<input onfocus="st_2b_2()" type="text" placeholder="Alternative email" value=""/>
					<input onfocus="st_2b_3()" type="text" placeholder="(---) --- ----" value=""/>
					<input onfocus="st_2b_4()" type="text" placeholder="Join date" value="3/12/15"/>
					<input onfocus="st_2b_5()" type="text" placeholder="Last Login" value="3/29/15"/>
					<a onclick="upTgle('st_2a1')">password</a>
					<div id="st_2a1" class="dN">
						<input onfocus="st_2b_6()" type="password" placeholder="current password">
						<input onfocus="st_2b_7()" type="password" placeholder="new password">
						<input onfocus="st_2b_8()" type="password" placeholder="re-type new password">
						<span id="st-l1" class="dN"></span>
					</div>
					<div onclick="st_2b_9()" class="flwBtn1 fwsp dctBtn">deactivate</div>
				</div>
				<!--- st_3 -->
				<div id="st_3" class="dN">
					<input onfocus="st_3b()" type="password" placeholder="password">
					<span class="flwBtn1">update</span>
				</div>
			</div>
			<!--- right side -->
			<div class="stRgt fR">
				<div id="st_xb">
					Hey @emoorephp welcome to your settings.
					<p>It's easy to use, simple, and fast!</p> 
					Click, or type in any area and a further explanation will be given. 
				</div>
				<div id="st_1b">
					<!-- user name & pic -->
					<div class="st_1b-1xb dN">
						This is the name your fellow games will know you by.
					</div>
					<div class="st_1b-2xb dN">
						This is the the picture that any user logged in or not will be able to see. This is viewed on your profile and any post or comment.
						<p>Dimensions are 152(px) x 152(px)</p>
						<span class="flwBtn1 fR">update</span>
					</div>
					<div class="st_1b-3xb dN">
						This is the banner picture that any user logged in or not will be able to see. The is viewed at the top of your page.
						<p>Dimensions are 1584(px) x 400(px)</p>
						<img class="stBnrImg" src="img/temp/tempBnr.jpg"/>
						<span class="flwBtn1 fR">update</span>
					</div>
					<!-- -->
					<div class="st_1b-1b dN">
						This is your first name
						<p>This is used so your friends can find your much easer. Add your last name so the odds of finding you are much easier.</p>
					</div>
					<div class="st_1b-2b dN">
						This is your last name
						<p>This is used so your friends can find your much easer. Add your first name so the odds of finding you are much easier.</p>
					</div>
					<div class="st_1b-3b dN">
						Your birthday will not be visible to your fellow gamers. They will only receive a notification indication that it is your birthday.
					</div>
					<div class="st_1b-4b dN">
						This is a short tag line to distinguish yourself from other gamers.
					</div>
					<div class="st_1b-5b dN">
						Add your personal website to gain more traffic to your site.
					</div>
					<div class="st_1b-6b dN">
						Add your location so that:
						<ul>
							<li>Gamers near your area can locate you.</li>
							<li>You can find gamers where ever you are.</li>
						</ul>
					</div>
					<div class="st_1b-7b dN">
						Add your country so our system can better position you.
					</div>

				</div>

				<div id="st_2b">

					<div class="st_2b-1b dN">
						This is the email you signed up with also known as your primary email. <br>
						At the moment we will not send you any notifications or alerts. <br> 
						We will give you the option for notifications & alerts later.
					</div>
					<div class="st_2b-2b dN">
						This is another email used just min case something goes wrong with your primary email.
					</div>
					<div class="st_2b-3b dN">
						This will only be used for added security 
						<ul>
							<li>At the moment there will be no notifications or alerts.</li>
							<li>Your number will not be visible to anyone</li>
						</ul>
					</div>
					<div class="st_2b-4b dN">
						This is the date in witch you signed up.
					</div>
					<div class="st_2b-5b dN">
						This is the date the last date in which you logged on the network.
					</div>
					<!-- pswd info -->
					<div class="st_2b-6b dN">
						Add your current password to continue.
					</div>
					<div class="st_2b-7b dN">
						What is your new password?
						<p>Tips & recommendations for added security</p>
						<ul>
							<li>More than 10 digits.</li>
							<li>Add lowercase, uppercase and numbers.</li>
							<li class="clr3">Don't use 12345678910...</li>
							<li class="clr3">Don't use anything that you post on our or any network</li>
							<li class="clr3">Don't use anything that can be easily figured out i.e. birth date, or your name on the number pad.</li>
						</ul>
					</div>
					<div class="st_2b-8b dN">
						Please re-type your new password.
						<p>Tips & recommendations for added security</p>
						<ul>
							<li>More than 10 digits.</li>
							<li>Add lowercase, uppercase and numbers.</li>
							<li class="clr3">Don't use 12345678910...</li>
							<li class="clr3">Don't use anything that you post on our or any network</li>
							<li class="clr3">Don't use anything that can be easily figured out i.e. birth date, or your name on the number pad.</li>
						</ul>
						<span class="flwBtn1 fR">update</span>
					</div>
					<div class="st_2b-9b dN">
						<form enctype="multipart/form-data" method="post" action="php_parsers/deactivate_system.php">

							<span class="radio-info">
								<input id="deact" class="radio-select" name="reason" value="deact-1" type="radio"> 
									<p>Ill be back, on later.</p><br>
								<input id="deact" class="radio-select" name="reason" value="deact-2" type="radio"> 
									<p>Im being harassed.</p><br>
								<input id="deact" class="radio-select" name="reason" value="deact-3" type="radio"> 
									<p>I dont like this.</p><br>
								<input id="deact" class="radio-select" name="reason" value="deact-4" type="radio"> 
									<p><input id="deact" name="reason" placeholder="other?" type="text"></p><br>
							</span>

							
							<span class="note-ex fL"><span class="alert">*</span> Remember you may always log back in to reopen your account.</span>
							<input id="deact-btn" class="flwBtn1 fR" value="deactivate" type="submit">

						</form>
					</div>
					
				</div>

				<div class="st_3b-1b dN">
				Please enter your password to save your changes.
					
				</div>
			</div>

		</div>
	</div>


	<!--------- footer start -->
	<footer>
		<span class="ltrNav">
			<a href="search.php?s=a">a</a>
			<a href="search.php?s=b">b</a>
			<a href="search.php?s=c">c</a>
			<a href="search.php?s=d">d</a>
			<a href="search.php?s=e">e</a>
			<a href="search.php?s=f">f</a>
			<a href="search.php?s=g">g</a>
			<a href="search.php?s=h">h</a>
			<a href="search.php?s=i">i</a>
			<a href="search.php?s=j">j</a>
			<a href="search.php?s=k">k</a>
			<a href="search.php?s=l">l</a>
			<a href="search.php?s=m">m</a>
			<a href="search.php?s=n">n</a>
			<a href="search.php?s=o">o</a>
			<a href="search.php?s=p">p</a>
			<a href="search.php?s=q">q</a>
			<a href="search.php?s=r">r</a>
			<a href="search.php?s=s">s</a>
			<a href="search.php?s=t">t</a>
			<a href="search.php?s=u">u</a>
			<a href="search.php?s=v">v</a>
			<a href="search.php?s=w">w</a>
			<a href="search.php?s=x">x</a>
			<a href="search.php?s=y">y</a>
			<a href="search.php?s=z">z</a>
		</span>
		<div id="lnkF_1" class="lnkWrp pA dN">
			<div class="lnkHdr">
				<span class="fL">about</span>
				<span class="lnkRze fR"></span>
			</div>
			<div class="lnkBdy">
				This is body text
			</div>
		</div>
		<div id="lnkF_2" class="lnkWrp pA dN">
			<div class="lnkHdr">
				<span class="fL">legal</span>
				<span class="lnkRze fR"></span>
			</div>
			<div class="lnkBdy">
				This is body text
			</div>
		</div>
		<div id="lnkF_3" class="lnkWrp pA dN">
			<div class="lnkHdr">
				<input type="text" class="fL" placeholder="Whats your question?"/>
				<span class="lnkRze fR"></span>
			</div>
			<div class="lnkBdy">
				Type your question in the help bar <a>@emoorephp</a> so we can help ;)
			</div>
			<div id="lnkF_3a" class="pA dN">
				Vgs will search its entire database to find results matching your question.
				<ul>
					<li>User, page discussions.</li>
					<li>User, page post.</li>
					<li>About, legal page.</li>
					<li>Site works & structure.</li>
				</ul>
			</div>
			<div class="lnkFtr">
				<a class="fL" onclick="upTgle('lnkF_3a')">how does it work?</a>
			</div>
		</div>
		<div class="ftrLnks">
			<a onclick="upTgle('lnkF_1')">about</a> | <a onclick="upTgle('lnkF_2')">legal</a> | <a class="csrHlp" onclick="upTgle('lnkF_3')">help</a> | An <a href="http://aviyon.com/" target="_blank"><img src="css/img/aviyon_icon.png"/> Aviyon</a> creation.
	    </div>
	</footer>
	<!--------- footer end -->


</div>
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>    
</body>
</html>
