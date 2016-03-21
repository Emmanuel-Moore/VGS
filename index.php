<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html lang="en" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Video game social</title>


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
			<a id="uedt_4-1a" class="hdrName" href="index.php">@gamertag</a>
			<input id="uedt_4-2b" class="fL dN" type="text" placeholder="@gamertag" value="@gamertag"/>
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
<!------- include header end -->
<!------- report module start -->
<div id="pBtn_2" class="pmWpr pF dN">
	<div class="pmHdr">
		<input type="text" class="fL" value="@emoorephp">
		<span class="fR">Report</span>
	</div>
	<div class="pmInr">
		<textarea type="text" placeholder="This person is disrespecting Batman"></textarea>
	</div>
	<div class="pmFtr">
		<span class="photo_icon cP" note1="upload a photo (screen shot)"></span>
		<span id="flwBtn_" class="flwBtn1 cP fR" onlick="">report</span>
	</div>
</div>
<!------- report module end -->
<div id="bckVeil" class="pF dN"></div>
<div class="bodyWpr">

	<div class="rgtVwpr fR">
		<span class="indxHdr">Join the fun free!</span>
		<form onsubmit="return false;">
			<div class="sgnLgnWpr">
				<span id="inx1" class="dB">
					<input id="e" type="text" placeholder="@gamertag"/>
					<input id="p1" ype="password" placeholder="password"/>
					<span id="inx2" class="dN">
						<input id="p2" type="password" placeholder="re-type password"/>
						<input id="a" type="text" onkeyup="statusMax(this,2)" placeholder="age"/>
						<input id="g" type="text" placeholder="gender"/>
					</span>
				</span>
				<span id="inx3" class="dN">
					<input id="e2" type="text" placeholder="email"/>
				</span>
			</div>
			<span id="sts"></span>
			<span id="capA" class="cA dN">Caps Lock is on.</span>
			<a onclick="ic1()">login</a> / <a onclick="ic2()">signup</a>
			<a onclick="ic3()" class="txtClr1">Forgot Something?</a>
		</form>
	</div>

	<div class="indxWpr fL">

		<div class="indxLft fL">
			<span class="indxHdr">Top Games</span>

			<!------- game pages start -->
			<div class="pgsWpr">
				<a href="game.php">
					<img src="img/temp/temp1.jpg"/>
					<div class="pgsInr1 pA">
						<a href="game.php" class="txtClr2 fL">@arkhamknight</a>
						<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
					</div>
					<div class="pgsInr2 bck2 pA">
						<div class="pgsInr2-5">
							<span class="txtClr3">followers</span>
							<span class="CntNum1">115</span>
						</div>
					</div>
				</a>
			</div>
			<!------ game pages end -->
			<!------- game pages start -->
			<div class="pgsWpr">
				<a href="game.php">
					<img src="img/temp/temp1.jpg"/>
					<div class="pgsInr1 pA">
						<a href="game.php" class="txtClr2 fL">@arkhamknight</a>
						<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
					</div>
					<div class="pgsInr2 bck2 pA">
						<div class="pgsInr2-5">
							<span class="txtClr3">followers</span>
							<span class="CntNum1">115</span>
						</div>
					</div>
				</a>
			</div>
			<!------- game pages end -->

		</div>

		<div class="indxRgt fR">
			<span class="indxHdr">Top Gamers</span>

			<!--------- user page start -->
			<div id="pstCnt_1z2a" class="usrWpr">
				<a href="user.php">
					<div class="usrImg2"><img src="img/temp/tempUsr1.jpg"/></div>
					<div class="usrInr1-5">
						<a href="user.php" class="fL">@gamertag</a>
						<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
					</div>
					<div class="usrCnt">
						<img src="img/temp/tempBnr1.jpg"/>
						<div class="usrInr1 pA">
							<div class="InrNum1 txtClr2 fL">2 mins ago</div>
							<div class="setBtn1 fR" onclick="upTgle('opLi_1y2a')">...</div>
						</div>
						<ul id="opLi_1y2a" class="opLi liy2 pA dN">
							<li onclick="upTgle('pstCnt_1z2a')">hide</li>
							<li onclick="xBtn('pBtn_2')">report</li>
						</ul>
						<div class="usrInr2 bck2 pA">
							<div class="pgsInr2-5">
								<span class="txtClr3">games</span>
								<span class="CntNum1">7</span>
							</div>
							<div class="pgsInr2-5">
								<span class="txtClr3">followers</span>
								<span class="CntNum1">25</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-------- user page end -->
			<!--------- user page start -->
			<div id="pstCnt_2z2b" class="usrWpr">
				<a href="user.php">
					<div class="usrImg2"><img src="img/temp/tempUsr.jpg"/></div>
					<div class="usrInr1-5">
						<a href="user.php" class="fL">@emoorephp</a>
						<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
					</div>
					<div class="usrCnt">
						<img src="img/temp/tempBnr.jpg"/>
						<div class="usrInr1 pA">
							<div class="InrNum1 txtClr2 fL">4 mins ago</div>
							<div class="setBtn1 fR" onclick="upTgle('opLi_2y2b')">...</div>
						</div>
						<ul id="opLi_2y2b" class="opLi liy2 pA dN">
							<li onclick="upTgle('pstCnt_2z2b')">hide</li>
							<li onclick="xBtn('pBtn_2')">report</li>
						</ul>
						<div class="usrInr2 bck2 pA">
							<div class="pgsInr2-5">
								<span class="txtClr3">games</span>
								<span class="CntNum1">8</span>
							</div>
							<div class="pgsInr2-5">
								<span class="txtClr3">followers</span>
								<span class="CntNum1">14</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-------- user page end -->

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
