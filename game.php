<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html lang="en" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>@arkhamknight</title>


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
			<a id="uedt_4-1a" class="hdrName" onclick="upTgle('uedt_4-3c')">@arkhamknight</a>
			<input id="uedt_4-2b" class="fL dN" type="text" placeholder="@arkhamknight" value="@arkhamknight"/>
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
<ul id="uedt_4-3c" class="uhFix1 pF dN">
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
<div id="uedt_1" class="pA dN">
	<div class="uedt_1Inr">
		<span class="uedt_1a">upload a new banner</span>
		<div class="uedt_1b">
			<span>Resize current banner?</span> /
			<span>Help?</span>
		</div>
	</div>
</div>
<div class="pgBnr"><img src="img/temp/tempBnr2.jpg"/></div>

<div class="bodyWpr2">

	<div class="bodystat1">
		<div class="pgsInr2-5">
			<span id="pgT1" class="txtClr3" onclick="pgN1()">feed</span>
			<span class="CntNum1">7k</span>
		</div>
		<div class="pgsInr2-5">
			<span id="pgT2" class="txtClr3" onclick="pgN2()">followers</span>
			<span class="CntNum1">20k</span>
		</div>
		<div class="pgsInr2-5">
			<span id="pgT3" class="txtClr3" onclick="pgN3()">Discussion</span>
			<span class="CntNum1">90</span>
		</div>
		<span class="flwBtn1 fR updBtn1a" onclick="updBtn1()">update</span>
		<span id="updBtn_" class="flwBtn1 fR dN updBtn1b" onclick="updBtn1a()">done</span>
		<span id="pstBtn_" class="flwBtn1 fR" onclick="xBtn('pBtn_1')">blast</span>
	</div>

	
	<div class="rgtVwpr fR trndPos2">

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

	<div id="pgN1">

		<div class="indxWpr fL">

			<div class="indxLft fL">
				
				<!--------- user page start -->
				<div id="pstCnt_1za" class="usrWpr">
					<a href="user.php">
						<div class="usrImg2"><img src="img/temp/tempUsr.jpg"/></div>
						<div class="usrInr1-5">
							<a href="user.php" class="fL">@gemoorephp</a>
						</div>
						<div class="usrInr3 pA">
							<div class="InrNum1 fL">2 mins ago</div>
							<div class="setBtn2 fR" onclick="upTgle('opLi_1ya')">...</div>
						</div>
						<ul id="opLi_1ya" class="opLi liy pA dN">
							<li>update</li>
							<li onclick="upTgle('pstCnt_1za')">hide</li>
							<li onclick="xBtn('pBtn_2')">report</li>
							<li>delete</li>
						</ul>
						<div class="usrPstInr1">
							Does anyone have the expansion pack yet for?
							<div class="PstFtrWrp1a">
								<div class="PstStat fL">
									<span>like</span>
									<span onclick="upTgle('sVp1_1a')">2</span>
								</div>
								<div class="PstStat fL">
									<span>share</span>
									<span onclick="upTgle('sVp2_1a')">4</span>
								</div>
								<div class="fR">
									<span onclick="upTgle('sVp3_1a')">2</span>
									<a>comments</a>
								</div>
							</div>
							<div id="sVp1_1a" class="statViw sV1 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
							<div id="sVp2_1a" class="statViw sV2 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
						</div>
						<div class="usrPstFtr1">
							<div class="cmtCre diB">
								<img src="img/temp/tempUsr.jpg"/>
								<input type="text" placeholder="Want to comment @emoorephp?"/>
							</div>
						</div>
					</a>
				</div>
				<!-------- user page end -->
				<!--------- user page start -->
				<div id="pstCnt_2za" class="usrWpr">
					<a href="user.php">
						<div class="usrImg2"><img src="img/temp/tempUsr.jpg"/></div>
						<div class="usrInr1-5">
							<a href="user.php" class="fL">@gemoorephp</a>
						</div>
						<div class="usrInr3 pA">
							<div class="InrNum1 fL">2 weeks ago</div>
							<div class="setBtn2 fR" onclick="upTgle('opLi_2ya')">...</div>
						</div>
						<ul id="opLi_2ya" class="opLi liy pA dN">
							<li>update</li>
							<li onclick="upTgle('pstCnt_2za')">hide</li>
							<li onclick="xBtn('pBtn_2')">report</li>
							<li>delete</li>
						</ul>
						<div class="usrPstInr1">
							Dead shot's new #movie can't wait. He looks cool in <a href="search.php?s=%23arkhamknight">#arkhamknight</a>
							<img src="img/temp/deadshot.jpg"/>
							<div class="PstFtrWrp1a">
								<div class="PstStat fL">
									<span>like</span>
									<span onclick="upTgle('sVp1_2a')">2</span>
								</div>
								<div class="PstStat fL">
									<span>share</span>
									<span onclick="upTgle('sVp2_2a')">4</span>
								</div>
								<div class="fR">
									<span onclick="upTgle('sVp3_2a')">2</span>
									<a>comments</a>
								</div>
							</div>
							<div id="sVp1_2a" class="statViw sV1 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
							<div id="sVp2_2a" class="statViw sV2 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
						</div>
						<div class="usrPstFtr1">
							<div class="cmtCre diB">
								<img src="img/temp/tempUsr.jpg"/>
								<input type="text" placeholder="Want to comment @emoorephp?"/>
							</div>
						</div>
					</a>
				</div>
				<!-------- user page end -->


			</div>

			<div class="indxRgt fR">

				<!--------- user page start -->
				<div id="pstCnt_1zb" class="usrWpr">
					<a href="user.php">
						<div class="usrImg2"><img src="img/temp/tempUsr.jpg"/></div>
						<div class="usrInr1-5">
							<a href="user.php" class="fL">@gemoorephp</a>
						</div>
						<div class="usrInr3 pA">
							<div class="InrNum1 fL">2 mins ago</div>
							<div class="setBtn2 fR" onclick="upTgle('opLi_1yb')">...</div>
						</div>
						<ul id="opLi_1yb" class="opLi liy pA dN">
							<li>update</li>
							<li onclick="upTgle('pstCnt_1zb')">hide</li>
							<li onclick="xBtn('pBtn_2')">report</li>
							<li>delete</li>
						</ul>
						<div class="usrPstInr1">
							Does anyone wana play <a href="search.php?s=%23arkhamknight">#arkhamknight</a> tonight?
							<div class="PstFtrWrp1a">
								<div class="PstStat fL">
									<span>like</span>
									<span onclick="upTgle('sVp1_1b')">2</span>
								</div>
								<div class="PstStat fL">
									<span>share</span>
									<span onclick="upTgle('sVp2_1b')">4</span>
								</div>
								<div class="fR">
									<span onclick="upTgle('sVp3_1b')">2</span>
									<a>comments</a>
								</div>
							</div>
							<div id="sVp1_1b" class="statViw sV1 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
							<div id="sVp2_1b" class="statViw sV2 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
						</div>
						<div class="usrPstFtr1">
							<div class="cmtCre diB">
								<img src="img/temp/tempUsr.jpg"/>
								<input type="text" placeholder="Want to comment @emoorephp?"/>
							</div>
						</div>
					</a>
				</div>
				<!-------- user page end -->
				<!--------- user page start -->
				<div id="pstCnt_2zb" class="usrWpr">
					<a href="user.php">
						<div class="usrImg2"><img src="img/temp/tempUsr.jpg"/></div>
						<div class="usrInr1-5">
							<a href="user.php" class="fL">@gemoorephp</a>
						</div>
						<div class="usrInr3 pA">
							<div class="InrNum1 fL">2 weeks ago</div>
							<div class="setBtn2 fR" onclick="upTgle('opLi_2yb')">...</div>
						</div>
						<ul id="opLi_2yb" class="opLi liy pA dN">
							<li>update</li>
							<li onclick="upTgle('pstCnt_2zb')">hide</li>
							<li onclick="xBtn('pBtn_2')">report</li>
							<li>delete</li>
						</ul>
						<div class="usrPstInr1">
							<a href="search.php?s=%23arkhamknight">#arkhamknight</a>
							<div class="PstFtrWrp1a">
								<div class="PstStat fL">
									<span>like</span>
									<span onclick="upTgle('sVp1_2b')">2</span>
								</div>
								<div class="PstStat fL">
									<span>share</span>
									<span onclick="upTgle('sVp2_2b')">4</span>
								</div>
								<div class="fR">
									<span onclick="upTgle('sVp3_2b')">2</span>
									<a>comments</a>
								</div>
							</div>
							<div id="sVp1_2b" class="statViw sV1 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
							<div id="sVp2_2b" class="statViw sV2 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
						</div>
						<div class="usrPstFtr1">
							<div class="cmtCre diB">
								<img src="img/temp/tempUsr.jpg"/>
								<input type="text" placeholder="Want to comment @emoorephp?"/>
							</div>
						</div>
					</a>
				</div>
				<!-------- user page end -->

			</div>

		</div>
	</div>

	<div id="pgN2" class="dN">

		<div class="indxWpr fL">

			<div class="indxLft fL">
				
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
								<li>delete</li>
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
				<div id="pstCnt_2z2a" class="usrWpr">
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
								<div class="setBtn1 fR" onclick="upTgle('opLi_2y2a')">...</div>
							</div>
							<ul id="opLi_2y2a" class="opLi liy2 pA dN">
								<li onclick="upTgle('pstCnt_2z2a')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
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

			<div class="indxRgt fR">

				<!--------- user page start -->
				<div id="pstCnt_1z2b" class="usrWpr">
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
								<div class="setBtn1 fR" onclick="upTgle('opLi_1y2b')">...</div>
							</div>
							<ul id="opLi_1y2b" class="opLi liy2 pA dN">
								<li onclick="upTgle('pstCnt_1z2b')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
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
								<li>delete</li>
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
	</div>

	<div id="pgN3"  class="dN">

		<div class="indxWpr fL">

			<div class="indxLft fL">
				
				<!--------- user page start -->
				<div class="usrWpr2">
						<!-- post by user -->
						<div id="pstCnt_1ka" class="usrPstInr3">
							<div class="usrImg3"><img src="img/temp/tempUsr2.jpg"/></div>
							<div class="usrInr4a">
								<div class="InrCnt1a">
									<a href="user.php" class="fL">@playgirl</a>
									<div class="setBtn2 diqOpt fR" onclick="upTgle('opLi_1ka')">...</div>
									<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
								</div></br>
								<div class="InrCnt1b">
									<div class="InrNum1 fL">21 mins ago</div>
								</div>
							</div>
							<ul id="opLi_1ka" class="opLi liy3 pA dN">
								<li>update</li>
								<li onclick="upTgle('pstCnt_1ka')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
							</ul>
							<div class="usrInr4b">
								Who wants to play tonight?
							</div>
						</div>
						<!-- post by user -->
						<div id="pstCnt_2ka" class="usrPstInr3">
							<div class="usrImg3"><img src="img/temp/tempUsr.jpg"/></div>
							<div class="usrInr4a">
								<div class="InrCnt1a">
									<a href="user.php" class="fL">@emoorephp</a>
									<div class="setBtn2 fR" onclick="upTgle('opLi_2ka')">...</div>
								</div></br>
								<div class="InrCnt1b">
									<div class="InrNum1 fL">18 mins ago</div>
								</div>
							</div>
							<ul id="opLi_2ka" class="opLi liy3 pA dN">
								<li>update</li>
								<li onclick="upTgle('pstCnt_2ka')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
							</ul>
							<div class="usrInr4b">
								What time are you playing?
							</div>
						</div>
						<!-- post by user -->
						<div id="pstCnt_3ka" class="usrPstInr3">
							<div class="usrImg3"><img src="img/temp/tempUsr2.jpg"/></div>
							<div class="usrInr4a">
								<div class="InrCnt1a">
									<a href="user.php" class="fL">@playgirl</a>
									<div class="setBtn2 diqOpt fR" onclick="upTgle('opLi_3ka')">...</div>
									<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
								</div></br>
								<div class="InrCnt1b">
									<div class="InrNum1 fL">10 mins ago</div>
								</div>
							</div>
							<ul id="opLi_3ka" class="opLi liy3 pA dN">
								<li>update</li>
								<li onclick="upTgle('pstCnt_3ka')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
							</ul>
							<div class="usrInr4b">
								10p are you in?
							</div>
						</div>
						<!-- post by user -->
						<div id="pstCnt_4ka" class="usrPstInr3">
							<div class="usrImg3"><img src="img/temp/tempUsr.jpg"/></div>
							<div class="usrInr4a">
								<div class="InrCnt1a">
									<a href="user.php" class="fL">@emoorephp</a>
									<div class="setBtn2 fR" onclick="upTgle('opLi_4ka')">...</div>
								</div></br>
								<div class="InrCnt1b">
									<div class="InrNum1 fL">3 mins ago</div>
								</div>
							</div>
							<ul id="opLi_4ka" class="opLi liy3 pA dN">
								<li>update</li>
								<li onclick="upTgle('pstCnt_4ka')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
							</ul>
							<div class="usrInr4b">
								Yes sure why not.
							</div>
						</div>
						<!-- comments -->
						<div class="usrPstInr3">
							<div class="PstFtrWrp1a">
								<div class="PstStat fL">
									<span>like</span>
									<span onclick="upTgle('sVp1_2b')">2</span>
								</div>
								<div class="PstStat fL">
									<span>share</span>
									<span onclick="upTgle('sVp2_2b')">4</span>
								</div>
								<div class="fR">
									<span onclick="upTgle('sVp3_2b')">3</span>
									<a>replies</a>
								</div>
							</div>
							<div id="sVp1_2b" class="statViw sV1 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
							<div id="sVp2_2b" class="statViw sV2 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
						</div>
						<div class="usrPstFtr3">
							<div class="cmtCre diB">
								<img src="img/temp/tempUsr.jpg"/>
								<input type="text" placeholder="Want to comment @emoorephp?"/>
							</div>
						</div>
				</div>
				<!-------- user page end -->
				


			</div>

			<div class="indxRgt fR">

				<!--------- user page start -->
				<div class="usrWpr2">
						<!-- post by user -->
						<div id="pstCnt_1kb" class="usrPstInr3">
							<div class="usrImg3"><img src="img/temp/tempUsr.jpg"/></div>
							<div class="usrInr4a">
								<div class="InrCnt1a">
									<a href="user.php" class="fL">@emoorephp</a>
									<div class="setBtn2 diqOpt fR" onclick="upTgle('opLi_1kb')">...</div>
									<span id="flwBtn_" class="flwBtn1 fR" onlick="">follow</span>
								</div></br>
								<div class="InrCnt1b">
									<div class="InrNum1 fL">21 mins ago</div>
								</div>
							</div>
							<ul id="opLi_1kb" class="opLi liy3 pA dN">
								<li>update</li>
								<li onclick="upTgle('pstCnt_1kb')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
							</ul>
							<div class="usrInr4b">
								Who wants to play tonight?
							</div>
						</div>
						<!-- post by user -->
						<div id="pstCnt_2kb" class="usrPstInr3">
							<div class="usrImg3"><img src="img/temp/tempUsr2.jpg"/></div>
							<div class="usrInr4a">
								<div class="InrCnt1a">
									<a href="user.php" class="fL">@playgirl</a>
									<div class="setBtn2 fR" onclick="upTgle('opLi_2kb')">...</div>
								</div></br>
								<div class="InrCnt1b">
									<div class="InrNum1 fL">18 mins ago</div>
								</div>
							</div>
							<ul id="opLi_2kb" class="opLi liy3 pA dN">
								<li>update</li>
								<li onclick="upTgle('pstCnt_2kb')">hide</li>
								<li onclick="xBtn('pBtn_2')">report</li>
								<li>delete</li>
							</ul>
							<div class="usrInr4b">
								What time are you playing?
							</div>
						</div>
						<!-- comments -->
						<div class="usrPstInr3">
							<div class="PstFtrWrp1a">
								<div class="PstStat fL">
									<span>like</span>
									<span onclick="upTgle('sVp1_2b')">2</span>
								</div>
								<div class="PstStat fL">
									<span>share</span>
									<span onclick="upTgle('sVp2_2b')">4</span>
								</div>
								<div class="fR">
									<span onclick="upTgle('sVp3_2b')">3</span>
									<a>replies</a>
								</div>
							</div>
							<div id="sVp1_2b" class="statViw sV1 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
							<div id="sVp2_2b" class="statViw sV2 pA dN">
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
								<img title="@emoorephp" emmanuel="@emoorephp" src="img/temp/tempUsr.jpg"/>
							</div>
						</div>
						<div class="usrPstFtr3">
							<div class="cmtCre diB">
								<img src="img/temp/tempUsr.jpg"/>
								<input type="text" placeholder="Want to comment @emoorephp?"/>
							</div>
						</div>
				</div>
				<!-------- user page end -->

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
