
<font size="1" face="verdana" color="red">
<script language="javascript">
  var ap;
  var mydate=new Date()
  var year=mydate.getYear()
  if (year < 1000)
  year+=1900
  var day=mydate.getDay()
  var month=mydate.getMonth()
  var daym=mydate.getDate()

  var hrs = mydate.getHours()
	  switch(hrs){
	   case 0:
		   ap = "A.M.";
		   break;
	   case 12:
		   ap = "P.M.";
		   break;
	   case 24:
		   ap = "A.M.";
		   break;
	   default:
		   if (hrs > 12)
		   {
			 ap = "P.M.";
			 break;
		   }
		   if(hrs < 12)
		   {
			 ap = "A.M.";
			 break;
		   }
		}
	  var hrs1= mydate.getHours()
		  hrs=""+((hrs>12)?hrs-12:hrs);
	  var mins = mydate.getMinutes()
		  mins=((mins<10)?"0":"")+mins;
	  var secs = mydate.getSeconds()
		 secs=((secs<10)?"0":"")+secs;
	  if (daym<10)
	  daym="0"+daym
	  var dayarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu")
	  var montharray=new  Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember")
		  document.write(dayarray[day]+", "+daym+" "+montharray[month]+" "+year)
	</script>
	<script language="Javascript1.2">
	<!--
	// please keep these lines on when you copy the source
	// made by: Nicolas - http://www.javascript-page.com

	if(navigator.appName == "Netscape") {
	   document.write('<layer id="clock"></layer><br>');
	}

	if (navigator.appVersion.indexOf("MSIE") != -1){
//	   document.write('<span id="clock"></span><br>');
	}

	function upclock(){
	var dte = new Date();
	var hrs = dte.getHours();
	var min = dte.getMinutes();
	var sec = dte.getSeconds();
	var col = ":";
	var spc = " ";
	var apm;

	if (12 < hrs) {
	apm="PM";
	hrs-=12;
	}else {
	apm="AM";
	}

	if (hrs == 0) hrs=12;
	if (min <=9) min="0"+min;
	if (sec <=9) sec="0"+sec;

	if(navigator.appCodeName == "Netscape") {
//	document.clock.document.write(hrs+col+min+col+sec);
//	document.clock.document.close();
	}

	if (navigator.appVersion.indexOf("MSIE") != -1){
		clock.innerHTML = ", " +hrs+col+min+col+sec;
	}
	}

	setInterval("upclock()",1000);
	//-->
</script>
</font>

