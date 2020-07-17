body,p,td,div,span,input,th,li,textarea{font-family:arial,helvetica,sans-serif;font-size:16px;color:#000;}
body{background:#fff;margin:0px;padding:0px;border:0;text-align: center;}

p{margin:5px 0 8px 0;}
img{border:0px;}
h1{color:#003366;font-size:26px;font-weight:bold;padding:0;margin:12px 0;}
#resulth1{background-color:#ffefe7;padding:0px 5px 0px 5px;border-top:#930 1px dotted;}
h2{font-size:22px;font-weight:bold;color:#003366;padding:0; margin-bottom: 2px;}
h3{font-size:19px;font-weight:bold;}
hr{border:0;color:#aaa;background-color:#aaa;height:1px;}
a{color:#069;text-decoration:underline;}
a:hover{text-decoration:none;}

input{padding: 5px;color:#000;}
select{padding: 4px;color:#000;}
option{font-size:16px;}
input[type=text],
input[type=url],
input[type=tel],
input[type=number],
input[type=color],
input[type=email], select {
	border: 1px solid #044284;
	border-radius: 2px;
	box-shadow: 1px 1px 2px #666;
	font-size:16px;
}
input[type=text]:focus,
input[type=url]:focus,
input[type=tel]:focus,
input[type=number]:focus,
input[type=color]:focus,
input[type=email]:focus, select:focus {
	border: 1px solid #993300;
	box-shadow: 1px 1px 2px #ba673d;
	font-size:16px;
}
input[type=submit],
input[type=reset],
input[type=button] {
	border: 1px solid #417516;
	border-radius: 2px;
	box-shadow: 1px 1px 2px #666;
	background:#417516;
	color:#fff;
	padding: 6px;
	font-size:16px;
}
input[type=submit]:hover,
input[type=reset]:hover,
input[type=button]:hover {
	border: 1px solid #444;
	box-shadow: 1px 1px 2px #ba673d;
	background:#444;
	color:#fff;
	font-size:16px;
}
input[type=image],input[type=image]:hover,input[type=image]:focus{
	background:#518428;
	color:#fff;
	font-weight:bold;
	font-size:26px;
	padding: 0px;
	margin:0px;
	font-size:16px;
}
.clearbtn{cursor: pointer;}
.inputErrMsg{position: absolute;padding:4px 8px;color: #000;background-color: #ffcccc;border: 1px solid #ffaaaa;white-space: nowrap;display:inline-block;}
.cbcontainer {
	display: inline-block;
	position: relative;
	padding-left: 28px;
	padding-top:1px;
	margin: 5px 0px;
	cursor: pointer;
	font-size: 16px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.cbcontainer input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}
.cbmark {
	position: absolute;
	top: 0;
	left: 2;
	height: 16px;
	width: 16px;
	background-color: #fff;
	border: 2px solid #336699;
}
.rbmark {
	position: absolute;
	top: 0;
	left: 2;
	height: 16px;
	width: 16px;
	background-color: #fff;
	border: 2px solid #336699;
	border-radius: 50%;
}
.cbcontainer:hover input ~ .cbmark, .cbcontainer:hover input ~ .rbmark {
	background-color: #ccc;
}
.cbcontainer input:checked ~ .cbmark, .cbcontainer input:checked ~ .rbmark {
	background-color: #336699;
}
.cbmark:after, .rbmark:after {
	content: "";
	position: absolute;
	display: none;
}
.cbcontainer input:checked ~ .cbmark:after, .cbcontainer input:checked ~ .rbmark:after {
	display: block;
}
.cbcontainer .cbmark:after {
	left: 4px;
	top: 0px;
	width: 5px;
	height: 10px;
	border: solid white;
	border-width: 0 3px 3px 0;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
.cbcontainer .rbmark:after {
	top: 4px;
	left: 4px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.indollar{
	background:#fff url('/img/svg/dollar.svg') 2px center no-repeat;
	padding-left: 11px;
}
.inpct{
	background:#fff url('/img/svg/pct.svg') right 2px center no-repeat;
	padding-right: 18px;
}
.innormal{text-align:right;width: 90px;}
.in4char{text-align:right;width: 58px;}
.in3char{text-align:right;width: 46px;}
.in2char{text-align:right;width: 35px;}
.inlong{text-align:right;width: 120px;}
.inlonger{text-align:left;width: 170px;}
.inlongest{text-align:left;width: 230px;}
.inlongesthalf{width: 112px;}
.infull{width: 226px;}
.inhalf{width: 110px;}
.infulltxarea{width: 600px; padding:8px;}
.inshortfull{width: 170px;}
.inshorthalf{width: 82px;}

.inuiyear{padding-right:50px;}
.inuiyearspan{margin-left:-45px;color:#888;}
.inuipound{padding-right:62px;}
.inuipoundspan{margin-left:-58px;color:#888;}
.inuifoot{padding-right:38px;}
.inuifootspan{margin-left:-34px;color:#888;}
.inuiinch{padding-right:57px;}
.inuiinchspan{margin-left:-53px;color:#888;}
.inuick{padding-right:32px;}
.inuickspan{margin-left:-27px;color:#888;}
.inui1c{padding-right:16px;}
.inui1cspan{margin-left:-11px;color:#888;}

.moretdvertspace td{
	padding: 5px 0px;
}
.scaleimg{max-width: 100%;height: auto;}
#tt {position:absolute;display:block;background-color: #474747;color: #fff;padding: 8px;border: 1px solid #000;text-align:left;}
.ttimg{opacity: 0.4;}
.ttimg:hover{opacity: 1;}

#headerout{background:#003366;text-align: center;}
#header{width:1100px;height:60px;background:#003366;padding:0px;margin-left: auto;margin-right: auto;text-align: left;overflow:hidden;}
#logo{padding: 18px 0px;width:270px;float:left;}

#topslogan{width:660px;float:right;text-align: right;text-transform: uppercase;padding-top:18px;}
.topNavAbs{
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	min-width: 1100px;
}
.topNavIn{
	position: relative;
	width: 1100px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 0px;
	margin-bottom: 0px;
}
.topNavLeft{
	height: 55px;
	width:270px;
	float:left;
	cursor: pointer;
	margin:0px;
}
.topNavRight{
	width:660px;
	float:right;
	padding-top:12px;
	margin:0px;
	text-align: left;
}
.dropbtn {
	color: white;
	padding: 14px 16px 15px 16px;
	border: none;
	cursor: pointer;
	font-size: 16px;
	text-transform: uppercase;
	display: inline-block;
}
@-moz-document url-prefix() {
	.topNavRight{padding-top:12px;}
	.dropbtn {padding: 12px 16px 16px 16px;}
}
.dropdown {
	position: relative;
	display: inline-block;
}
.dropdown-content {
	display: none;
	position: absolute;
	right: 0;
	background-color: #f9f9f9;
	width: 365px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	text-align: left;
	border:#ccc 1px solid;
}
.dropdown-content a {
	color: #069;
	padding: 10px 10px;
	text-decoration: none;
	display: inline-block;
	width:160px;
}
.dropdown-content a:hover {background-color: #ddd}
.dropdown:hover .dropdown-content {
	display: block;
}
.dropdown:hover .dropbtn {
	background-color: #518428;
}



#contentout{width:1100px;padding-top:5px;margin-left: auto;margin-right: auto;text-align: left;overflow:auto;}
#content{padding:0px 0px 15px 0px;width:728px;float:left;}
#right{width:336px;float:right;text-align:center;}
#contentbig{padding:0px 0px 15px 0px;width:843px;float:right;}

#footer{background:#e1e1e1;padding:25px 0px;font-size:13px;color:#555;text-align:center;}
#footer a{color:#444;}
#footer a:hover{text-decoration:none;}
#footerin{width:1100px;margin-left: auto;margin-right: auto;text-align: left;overflow:auto;color:#555;}
#footernav{text-align: center;}

#homecaldiv{background:#d1dde9;padding:10px 0px;}
#homelistdiv{background:#fff;padding:20px 0px;}
#homecaldiv td{overflow:hidden;}

#socialicons{padding: 8px 0px;}
#shout{padding: 8px 0px;}
#sh{border:solid 1px #aaa;padding-top:10px;padding-bottom:10px;background-color:#eee;text-align:center;border-radius: 3px;box-shadow: 2px 2px 2px 0px rgba(0,0,0,0.35);}

#breadcrumbs, #breadcrumbs span{font-size:13px;}
#breadcrumbs a, #breadcrumbs a span{text-decoration: none;color: #069;}
#breadcrumbs a:hover, #breadcrumbs a span:hover{text-decoration:underline;}

#othercalc{
	border:solid 1px #336699;
	margin: auto;
	text-align:left;
	width:332px;
}
#octitle{
	background-color: #336699;
	padding: 6px;
	color: #fff;
	font-size: 18px;
	font-weight:bold;
}
#octitle a{
	color: #fff;
	text-decoration: none;
}
#octitle a:hover {
	text-decoration: underline;
}
#occontent{
	padding: 3px 6px;
	font-size: 14px;
}
#occontent a{
	display: inline-block;
	width: 158px;
	padding: 3px 0px;
}
#ocother{
	background-color: #ddd;
	padding: 6px;
	text-align: center;
	font-size: 15px;
	color: #bbb;
}
#sectitle{
	background-color: #336699;
	padding: 6px;
	color: #fff;
	font-size: 18px;
	font-weight:bold;
}

.hicon{padding:20px 0px 20px 10px;}
.hl{list-style-type: none;margin: 0px;padding: 5px 0 5px 8px;background-color: #fff;font-size:16px;}
.hl li{padding: 0 0 8px 0;}
.hl li a{text-decoration:none;}
.hl li a:hover{text-decoration:underline;}
.hh{color:#3b9942;padding:8px 5px;font-size:22px;}
.hh a{color:#3b9942;text-decoration:none;}
.hh a:hover{text-decoration:underline;}
.smtb a{text-decoration:underline;}
.smtb a:hover{text-decoration:none;}
.smtbtop a{text-decoration:none;}
.smtbtop a:hover{text-decoration:underline;}
.notebox{border:solid 1px #aaa;background-color:#eee;padding:10px;}
.notebox ul{list-style-type: none;margin: 0;padding: 0;}
.notebox ul li{padding: 5 0 0px 0;}
.smalltext{font-size:13px;}
.bigtext{font-size:18px;}
.verybigtext{font-size:23px;}
.morelinespace{line-height:125%}
.inlinetable{display: inline;}
.compacttable {border-spacing: 0px;}
.compacttable td{padding: 0px;}
.compacttable table{border-spacing: 0px;}
.compacttable table td{padding: 0px;}
table.cinfoT{color:#000;background-color:#fafafa;border:1px #666 solid;border-collapse:collapse;border-spacing:0;margin-top:0;}
table.cinfoT td.cinfoHd{border-bottom:3px solid #666;background-color:#E0F0FE;font-weight:bold;color:#000;padding:3px;}
table.cinfoT td.cinfoHdL{border-bottom:3px solid #666;background-color:#E0F0FE;font-weight:bold;color:#000;padding:3px;}
table.cinfoT td{border:1px solid #666;color:#000;padding:3px;}
table.cinfoT tr:nth-child(odd) {background-color: #eee;}
table.cinfoT tr:nth-child(even) {background-color: #fff;}
table.cinfoTS td.cinfoHd{font-size:13px;}
table.cinfoTS td.cinfoHdL{font-size:13px;}
table.cinfoTS td{font-size:13px;padding:3px 1px;}

#topmenu ul {color: #000;border-bottom: 1px solid #bbbbbb;margin: 12px 0px 0px 0px;padding: 0 0 8 0;padding-left: 0px;font-size: 15px;font-weight: bold;}
#topmenu ul li {display: inline;overflow: hidden;list-style-type: none;margin-left: 0px;}
#topmenu ul li a, #topmenu ul li a:visited {color: #fff;background: #336699;border: 1px solid #336699;padding: 8px 5px 8px 5px;margin: 0;text-decoration: none;}
#topmenu ul li a:hover {background: #eee;color: #000;}
#topmenu ul #menuon a {color: #000;background: #eee;border: 1px solid #bbbbbb;padding: 8px 5px 8px 5px;margin: 0;text-decoration: none;border-bottom: 2px solid #eee;}
#topmenu ul #menuon a:hover {background: #f5f8ec;}
.topmenucenter {}
#insmd{background-color:#336699;margin-bottom:3px;}
#insmdc{background-color:#336699;margin-bottom:3px;text-align:center;}
#submitbtn input, #submitbtn button{
	border-radius: 3px;
	background:#417516;
	padding: 5px 8px;
	font-size:18px;
	color:#fff;
}
#submitbtn input:hover, #submitbtn button:hover{
	background:#444;
	color:#fff;
}

fieldset{
	margin-top:10px;
	padding:0px 10px 5px 10px;
	border: solid 0px #bdd2da;
	background:#eee;
	color: #eee;
}
legend{
	font-size:18px;
	font-weight: bold;
	padding: 5px 15px;
	background:#eee;
	color: #000;
}
fieldset a{
	display: inline-block;
	white-space: nowrap;
	padding: 6px;
	font-size:16px;
	background:#336699;
	color: #fff;
	margin-bottom:5px;
	text-decoration: none;
}
fieldset a:hover{
	background:#417516;
	color: #fff;
}
fieldset div{
	display: inline-block;
	white-space: nowrap;
	padding: 10px;
	font-size:18px;
	background:#044284;
	color: #fff;
	margin-bottom:5px;
	border-radius: 3px;
	text-decoration: none;
}
fieldset div:hover{
	background:#c47751;
	color: #fff;
}
.arrow_box {position: relative;background: #eee;border: 1px solid #aaa;padding:3px 8px;text-align:center;}
.arrow_box:after, .arrow_box:before {left: 100%;top: 50%;border: solid transparent;content: " ";height: 0;width: 0;position: absolute;pointer-events: none;}
.arrow_box:after {border-color: rgba(221, 221, 221, 0);border-left-color: #eee;border-width: 12px;margin-top: -12px;}
.arrow_box:before {border-color: rgba(238, 238, 238, 0);border-left-color: #aaa;border-width: 13px;margin-top: -13px;}
.result_box {background: #e3edda;border: 1px solid #8db46d;padding:3px 8px;text-align: center;}
.panel{
	background:#eee;
	border: solid 1px #bbbbbb;
	padding: 5px;
}
.quicktips{
	background:#eee url(/img/tips.png) 2px 2px no-repeat;
	border: solid 1px #ccc;
	padding: 5px 5px 5px 32px;
	border-radius: 3px;
	font-style: italic;
}
.important{
	background:#fee8c5 url(/img/important.png) 6px 6px no-repeat;
	border: solid 1px #fec467;
	padding: 5px 5px 5px 32px;
	border-radius: 3px;
	font-style: italic;
}
.reference{
	font-size:13px;
	padding-left: 1.8em;
}
.reference li{
	font-size:13px;
	word-wrap: break-word;
}
#calinfoout{background-color:#EEEEEE;width:258px;}
.calinfoinner{padding:5px;border-top:1px solid #262626;border-left:1px solid #262626;border-right:2px outset #262626;border-bottom:2px outset #262626;}
#calinfoout input{width:45px;height:30px;margin:2px;background-color:#FFF;font-family:arial,helvetica,sans-serif;font-size: 17px;border:1px solid #262626;}
#calinfoout #calInfoOutPut{width:242px;font-size:22px;padding:3px;cursor:text;text-align: right;background-color:#B8C6A3;color:#000000;}
#calinfoout .calinfonm{color:#FFF;font-weight:bold;background-color:#262626;}
#calinfoout .calinfoop{color:#262626;font-weight:bold;background-color:#cccccc;}
#calinfoout .calinfoeq{color:#FF0000;font-weight:bold;background-color:#DCADB0;}
#calinfoout .calinfofunc{color:#185290;font-weight:bold;background-color:#C8D8E8;height:23px;padding-bottom:1px;}
#printit{width: 80px;float:right;text-align:right;}
.panel2{background-color:#eeeeee;padding: 5px;border-right:1px solid #bbbbbb;border-bottom:1px solid #bbbbbb;border-left:1px solid #bbbbbb;}
.h2result{background:#518428;color:#fff;border:1px solid #518428;padding: 5px;margin-top:3px;font-size:22px;font-weight: normal;}
.h3head{margin-bottom: 2px;}
.sectionlists{}
.sectionlists div{padding-bottom: 5px;}
#searchbox{padding-top: 16px;}
#bluebtn{border-radius: 1px;background:#336699;padding: 5px 8px;font-size:18px;color:#fff;}
#bluebtn:hover{background:#444;color:#fff;}
#calcSearchOut{padding: 5px;}
#calcSearchOut div{padding: 5px;}

#sciout{
	padding:5px;
	border-top:1px solid #262626;
	border-left:1px solid #262626;
	border-right:2px outset #262626;
	border-bottom:2px outset #262626;
	background: #fff;
}
#sciOutPut{
	font-size:20px;
	padding:3px;
	margin:2px;
	cursor:text;
	text-align:right;
	background-color:#336699;
	border:1px solid #336699;
	border-radius: 0px;
	color:#fff;
}
.scifunc{
	display: inline-block;
	display: table-cell;
	vertical-align: middle;
	text-align:center;
	width:50px;
	height:32px;
	margin:1px;
	border:1px solid #a2bbd4;
	border-radius: 3px;
	font-family:arial,helvetica,sans-serif;
	font-size:16px;
	font-weight:bold;
	color:#000;
	background-color:#e5ecf3;
}
.scifunc:active {
	background-color:#000;
	color:#ffffff;
}
.scinm{
	display: inline-block;
	display: table-cell;
	vertical-align: middle;
	padding: 5px 0px;
	text-align:center;
	width:50px;
	height:30px;
	margin:1px;
	border:1px solid #336699;
	border-radius: 3px;
	font-family:arial,helvetica,sans-serif;
	font-size:16px;
	font-weight:bold;
	color:#000;
	background-color:#aec0d3;
}
.scinm:active {
	background-color:#aaaaaa;
	color:#000000;
}
.sciop{
	display: inline-block;
	display: table-cell;
	vertical-align: middle;
	padding: 5px 0px;
	text-align:center;
	width:50px;
	height:30px;
	margin:1px;
	border:1px solid #a2bbd4;
	border-radius: 3px;
	font-family:arial,helvetica,sans-serif;
	font-size:16px;
	font-weight:bold;
	color:#000;
	background-color:#e5ecf3;
}
.sciop:active {
	background-color:#000000;
	color:#ffffff;
}
.scird{
	display: inline-block;
	display: table-cell;
	vertical-align: middle;
	text-align:center;
	height:30px;
	margin:1px;
	border:1px solid #eeeeee;
	border-radius: 3px;
	font-family:arial,helvetica,sans-serif;
	font-size:13px;
	color:#262626;
}
.scieq{
	display: inline-block;
	display: table-cell;
	vertical-align: middle;
	padding: 5px 0px;
	text-align:center;
	width:50px;
	height:30px;
	margin:1px;
	border:1px solid #336699;
	border-radius: 3px;
	font-family:arial,helvetica,sans-serif;
	font-size:16px;
	font-weight:bold;
	color:#000;
	background-color:#aec0d3;
}
.scieq:active {
	background-color:#ff0000;
	color:#ffffff;
}

#scihistory, #scihistory div{
	font-size:13px;
	color:#888;
	text-align:right;
	overflow: hidden;
	width:268px;
}
#sciInPut{
	font-size:18px;
	color:#000;
	text-align:right;
	overflow: hidden;
	width:268px;
	word-wrap: break-word;
	margin-bottom:-2px;
}
#sciInPut b{
	color:#ccc;
	font-weight:bold;
}



.mbtn{
	text-align: center;
	margin: 10px 0px;
	background: #eb580c;
	border-radius: 3px;
	color: #ffffff;
	font-size: 18px;
	font-weight: bold;
	padding: 12px 15px 12px 15px;
}
.mbtn:hover {
	background: #3cb0fd;
	text-decoration: none;
}

.leftinput{
	width: 325px;
	float: left;
}
.rightresult{
	width: 375px;
	float: right;
}
#clear{margin-left: auto;margin-right: auto;clear: both;height: 1px;}
.leftchart{
	padding-top:10px;
	width: 500px;
	float: left;
}
.rightpie{
	padding-top:10px;
	width: 165px;
	float: right;
}

@media screen and (max-width:1140px){
	#header{width:990px;}
	.topNavIn{width: 990px;}
	.topNavAbs{min-width: 990px;}
	#contentout{width:1000px;}
	#content{width:640px;float:left;padding-left:10px;}
	#footerin{width:990px;}
	.leftinput{width: 310px;float: left;}
	.rightresult{width: 320px;float: right;}
	.leftchart{width: 445px;}
	.rightpie{width: 155px;}
}