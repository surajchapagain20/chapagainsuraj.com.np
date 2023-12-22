<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Nepal Life Insurance Company Limited - NepalLife (Life Insurance For Everyone)</title>
<meta name="description" content="Life Insurance, Life Insurance of Nepal, A Complete solution of Life Insurance, Nepal Life Insurance Company Limited has been providing life Insurance services throughout Nepal, Life Insurance for all" />
<meta name="keywords" content="NLIC, Nepal Life Insurance Company Limited, Life Insurance, Life Insurance at Nepal, Nepal Surakshit Jeevan Beema Yojana, Dhan Varsha Beema Yojana, Double Accident Benefit,Surakshit Bhavishya, Group Insurance Plan, Keta-Keti-Jeevan Bima (Shiksha and Vivah), Chhora-Chhori (Agrim Bhuktani Sawadhik), Sukhamaya Jeevan Beema - Without Profit, Jeevan Laxmi - Triple Benefit, Scheme with Bonus, Jeevan Sahara, Jeevan Sarathi" />
<meta name="Copyright" content="Nepal Life Insurance Company Limited Estd. 2001" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="checks.js"></script>
<script type="text/javascript">


<!--
window.onerror=function(m,u,l)
{
	window.status = "Java Script Error: "+m;
	return true;
}
//-->
</script>
<script language="javascript">
function checkInvalidDate(strng){
	var error = new Object();
	if(strng=="")
		{
				error.check=true;
				error.message="Contains Invalid Date.";
				error.message+="<br> Valid Criteria: <br> Date Format : mm/dd/yyyy or mm-dd-yyyy";
				error.message+="<br> Year  : Between 1900 and 2999";
				error.message+="<br> Month : Between 01 and 12";
				error.message+="<br> Date  : Between 01 and 32";
				return error;
		}
	var expr=/(0[1-9]|1[012])([-\/])(0[1-9]|[12][0-9]|3[012])([-\/])(19|20)\d\d/;
	if(strng.match(expr))
		{
			error.check=false;
			error.message="Success";
			return error;
		}
		else
			{
				error.check=true;
				error.message= "Invalid Date Of Birth.";
				error.message+="<br> Valid Criteria: <br> Date Format : mm/dd/yyyy or mm-dd-yyyy";
				error.message+="<br> Year  : Between 1900 and 2999";
				error.message+="<br> Month : Between 01 and 12";
				error.message+="<br> Date  : Between 01 and 32";
				return error;
			}
	//return true if date is invalid else return false
}
function chk() {
var dv=document.getElementById('err');
var DOB = document.PremiumCalculation.DOB;
var Years = document.PremiumCalculation.Years;
var InsuredAmt = document.PremiumCalculation.InsuredAmt;
var Plans = document.PremiumCalculation.Plans;
var FMDOB = document.PremiumCalculation.FMDOB;
var PWB = document.PremiumCalculation.PWB;
var SLB = document.PremiumCalculation.SLB;
var ADB = document.PremiumCalculation.ADB;
var PTD = document.PremiumCalculation.PTD;
var CashOption = document.PremiumCalculation.CashOption;
var dateType = document.PremiumCalculation.dateType;
var SDOB = document.PremiumCalculation.SDOB;
var sDateType = document.PremiumCalculation.sDateType;
var fmDateType = document.PremiumCalculation.fmDateType;
var val=Plans.value;
var rdofmdob=false;
var rdosdob=false;
var rdodob=false;	
if(val=="%")
	{
		dv.innerHTML="!!! Please Select Proper Plan !!!";
		Plans.focus();
		Plans.style.background="lightYellow";
		return false;
	}
	else
		{
			Plans.style.background="";
		}
var val=Years.value;	
if(val=="" || isNaN(parseInt(val)) || parseInt(val)>60 || parseInt(val)<5 )
	{
		dv.innerHTML="!!! Please Input Proper Years (Duration) !!!";
		Years.focus();
		Years.style.background="lightYellow";
		return false;
	}
	else
		{
			Years.style.background="";
		}		
var val=InsuredAmt.value;	
if(isNaN(parseInt(val)))
	{
		dv.innerHTML="!!! Please Input Insured Amount (NRs) !!!";
		InsuredAmt.focus();
		InsuredAmt.style.background="lightYellow";
		return false;
	}
	else
		{
			InsuredAmt.style.background="";
		}				
val=DOB.value;
var err=checkInvalidDate(val);
if(err.check)
	{
	dv.innerHTML=err.message;
	DOB.focus();
	DOB.style.background="lightYellow";	
	return false;
	}
	else
		{
			DOB.style.background="";
			dv.innerHTML="";
		}	
var rdo=dateType;
var rdoflag=false;
for(k=0;k<rdo.length;k++)		
		{
			if(rdo[k].checked)
				{
					rdodob=rdo[k].value;
					rdoflag=true;
				}
		}
	if(!rdoflag)
		{
		dv.innerHTML="Please Select BS or AD in Date Of Birth";
		rdo[0].focus();
		DOB.style.background="lightYellow";	
		return false;
		}else
			{
				DOB.style.background="";
			}	
var type=Plans.options[Plans.selectedIndex].title;	

type = type.replace(/\s/g,'');

switch(type)
			{
	
				case "Child51":
					 if(FMDOB.value=='')
					 {
					 dv.innerHTML="Please Insert Father or Mothers DOB Properly";

					 FMDOB.style.background="lightYellow";	
					 return false;
					 }
					 	var rdo=fmDateType;
						var rdoflag=false;
						for(k=0;k<rdo.length;k++)		
								{
									if(rdo[k].checked)
										{
											rdofmdob=rdo[k].value;
											rdoflag=true;
										}
								}
							if(!rdoflag)
								{
								dv.innerHTML="Please Select BS or AD in Date Of Birth";
								rdo[0].focus();
								FMDOB.style.background="lightYellow";	
								return false;
								}else
									{
										FMDOB.style.background="";
									}	
					 if(isNaN(PWB.value) && PWB.value!='')
					 	{
						 dv.innerHTML="Please Input Premium Waiver Benefit Properly";
					 	 PWB.style.background="lightYellow";	
					 	 return false;
						}
					 SLB.value=''; 
					 ADB.value=''; 
					 PTD.value=''; 
					 CashOption.value=''; 
					 SDOB.value=''; 
					break;
				case "Child52":
					 if(FMDOB.value=='')
					 {
					 dv.innerHTML="Please Insert Father or Mothers DOB Properly";
					 FMDOB.style.background="lightYellow";	
					 return false;
					 }
					 var rdo=fmDateType;
						var rdoflag=false;
						for(k=0;k<rdo.length;k++)		
								{
									if(rdo[k].checked)
										{
											rdofmdob=rdo[k].value;
											rdoflag=true;
										}
								}
							if(!rdoflag)
								{
								dv.innerHTML="Please Select BS or AD in Date Of Birth";
								rdo[0].focus();
								FMDOB.style.background="lightYellow";	
								return false;
								}else
									{
										FMDOB.style.background="";
									}
					 if(isNaN(PWB.value))
					 	{
						 dv.innerHTML="Please Input Premium Waiver Benefit Properly";
					 	 PWB.style.background="lightYellow";	
					 	 return false;
						}
					 if(SLB.value!='' && isNaN(SLB.value))
					 	{
						 dv.innerHTML="Please Input SLB Benefit Properly";
					 	 SLB.style.background="lightYellow";	
					 	 return false;
						} 
					if(CashOption.value!='' && isNaN(CashOption.value))
					 	{
						 dv.innerHTML="Please Input CashOption Properly";
					 	 CashOption.style.background="lightYellow";	
					 	 return false;
						} 	
					 ADB.value=''; 
					 PTD.value=''; 
					 SDOB.value='';
						break;
				case "Adult":
						 FMDOB.value="";
						 PWB.value="";
						 SLB.value=""; 
						 if(ADB.value!='' && isNaN(ADB.value))
							{
							 dv.innerHTML="Please Input ADB Properly";
							 ADB.style.background="lightYellow";	
							 return false;
							}else
								{
									ADB.style.background="";	
								}
						 if(PTD.value!='' && isNaN(PTD.value))
							{
							 dv.innerHTML="Please Input PTD Properly";
							 PTD.style.background="lightYellow";	
							 return false;
							}else
								{
									PTD.style.background="";
								} 		 	 
						 CashOption.value=""; 
						 SDOB.value=""; 
						break;
				case "Joint":
						 FMDOB.value="";
						 PWB.value="";
						 SLB.value=""; 
						 if(ADB.value!='' && isNaN(ADB.value))
							{
							 dv.innerHTML="Please Input ADB Properly";
							 ADB.style.background="lightYellow";	
							 return false;
							}
							else
								{
								 ADB.style.background="";
								}
						 if(PTD.value!='' && isNaN(PTD.value))
							{
							 dv.innerHTML="Please Input PTD Properly";
							 PTD.style.background="lightYellow";	
							 return false;
							} 
							else
								{
								  PTD.style.background="";
								}		 	 
						 CashOption.value=""; 
						 err=checkInvalidDate(SDOB.value);
						if(err.check)
							{
							dv.innerHTML=err.message;
							SDOB.focus();
							SDOB.style.background="lightYellow";	
							return false;
							}
							var rdo=sDateType;
						var rdoflag=false;
						for(k=0;k<rdo.length;k++)		
								{
									if(rdo[k].checked)
										{
											rdosdob=rdo[k].value;
											rdoflag=true;
										}
								}
							if(!rdoflag)
								{
								dv.innerHTML="Please Select BS or AD in Date Of Birth";

								rdo[0].focus();
								SDOB.style.background="lightYellow";	
								return false;
								}else
									{
										SDOB.style.background="";
									}
							
									 
						break;						
				default:
					 FMDOB.value='';
					 PWB.value='';
					 SLB.value=''; 
					 ADB.value=''; 
					 PTD.value=''; 
					 CashOption.value=''; 
					 SDOB.value=''; 
			}			
dv.innerHTML="---Processing Please Wait---";			
var obj=new Object();
obj.content=document.getElementById('err');
obj.url="processPremium.php";
obj.listbox=false;
var obj=new ajax(obj);
var str="DOB="+DOB.value+"&Years="+Years.value+"&PremTerm="+PremTerm.value;
str+="&InsuredAmt="+InsuredAmt.value+"&Plans="+Plans.value+"&FMDOB="+FMDOB.value+"&dateType="+rdodob;
str+="&PWB="+PWB.value+"&SLB="+SLB.value+"&CashOption="+CashOption.value+"&ADB="+ADB.value+"&PTD="+PTD.value;
str+="&SDOB="+SDOB.value+"&sDateType="+rdosdob+"&fmDateType="+rdofmdob;
obj.postData(str);
return false;
}

function populateList()
	{
		var obj=new Object();
		obj.content=false;
		obj.url="populatePlan.php";
		obj.listbox=true;
		obj.isXml=true;
		var obj=new ajax(obj);
		obj.postData("rnd="+Math.random());
	}

function callback(y)
{
	if(y.listbox)
		{
				var objChildNodes=y.response.documentElement;
				var n=objChildNodes.childNodes.length;
				var lst=document.PremiumCalculation.Plans;
				lst.options.length=0;
				lst.options[0]=new Option('---','%',false,true);
				for(var i=0;i<(objChildNodes.childNodes.length)-2;i++)
						{
							var objChld=objChildNodes.childNodes[i].childNodes;
							var id=(objChld[0])?objChld[0].childNodes[0].nodeValue:"";
							var dt=(objChld[1])?objChld[1].childNodes[0].nodeValue:"";
							lst.options[(parseInt(i)+1)]= new Option(dt,id,false,false);
			lst.options[(parseInt(i)+1)].title=(objChld[3])?objChld[3].childNodes[0].nodeValue:"";
						}
		}
		else
			{
			document.getElementById('err').innerHTML=y.response;	
			}
}	

function showHideDiv(y)
	{
		var type=y.options[y.selectedIndex].title;
		var child51=document.getElementById('Child51');
		var child52=document.getElementById('Child52');
		var adult=document.getElementById('Adult');
		var joint=document.getElementById('Joint');
		type = type.replace(/\s/g,'');
		switch(type)
			{
				case "Child51":
					child51.style.display='';
					child52.style.display='none';
					adult.style.display='none';
					joint.style.display='none';
					break;
				case "Child52":
					child51.style.display='';
					child52.style.display='';
					adult.style.display='none';
					joint.style.display='none';
						break;
				case "Adult":
					child51.style.display='none';
					child52.style.display='none';
					adult.style.display='';
					joint.style.display='none';
						break;
				case "Joint":
					child51.style.display='none';
					child52.style.display='none';
					adult.style.display='';
					joint.style.display='';
						break;			
				default:
					child51.style.display='none';
					child52.style.display='none';
					adult.style.display='none';
					joint.style.display='none';
				
			}
	}
</script>
</head>

<body onLoad="populateList()">
<div id="main">
  <div id="header">
  <?php include "includes/header.php"; ?>
  </div>
  <div id="content">

 <div class="container">
  <div class="intro notice">
  <div class="container">
  <div class="row">
   <?php include "includes/inner_notice.php"; ?>

    <div id="maincontent">
		<center>
            <iframe align="center" src="https://webapp.nepallife.com.np/calcpremium" name="targetframe" allowTransparency="true" scrolling="no" frameborder="0" 
            width="650" height="650" >
            </iframe>
        </center>
      
      <!-- FRAME PAGE -->
      <!--   
      <h2>Premium Calculator</h2>
      <h3>calculate your premium</h3>
      <table id="noborder">
          <form id="PremiumCalculation" name="PremiumCalculation">
            <tr>
              <td><label for="InsuredDOB">Insured Date of Birth<br />
                  (mm/dd/yyyy) </label></td>
              <td><input name="DOB" type="text" id="DOB" maxlength="10" title="Enter DOB in MM/DD/YYYY format"/>
                <input name="dateType" type="radio" accesskey="b" value="BS" />
                B.S.
                <input name="dateType" type="radio" accesskey="a" value="AD" />
                A.D.</td>
            </tr>
            <tr>
              <td><label for="Years">Plan Period/Term Of Plan (Years) </label></td>
              <td><input type="text" name="Years" id="Years" title="Enter Number of years"/></td>
            </tr>
            <tr>
              <td><label for="PremTerm">Premium Paying Term (Years) </label></td>
              <td><input type="text" name="PremTerm" id="PremTerm" title="Enter Number of years"/> (1-Single) </td>
            </tr>
            <tr>
              <td><label for="InsuredAmt">Insured Amount (NRs)</label></td>
              <td><input type="text" name="InsuredAmt" id="InsuredAmt" title="Insured Amount"/></td>
            </tr>
            <tr>
              <td><label for="Plans">Select Plan</label></td>
              <td><select name="Plans" id="Plans" onchange="showHideDiv(this)">
                  <option value="NULL">select</option>
                </select></td>
            </tr>
            <tr>
              <td colspan="2"><div id="Child51" style="display:none">
                  <table>
                    <tr>
                      <td><label for="FMDOB">Father/Mother's 
                          DOB <br> (mm/dd/yyyy) </label></td>
                      <td><input type="text" name="FMDOB" id="FMDOB" title="Father/Mother's DOB in MM/DD/YYYY"/>
                        <input name="fmDateType" type="radio" accesskey="b" value="BS" />
                        B.S.
                        <input name="fmDateType" type="radio" accesskey="a" value="AD" />
                        A.D. </td>
                    </tr>
                    <tr>
                      <td><label for="PWB">Premium Waiver Benefit/Child Risk Cover Amount(NRs)</label></td>
                      <td><input type="text" name="PWB" id="PWB" title="Enter Benefit Amount"/></td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr>
              <td colspan="2"><div id="Child52" style="display:none">
                  <table>
                    <tr>
                      <td><label for="SLB">SLB Benefit (NRs)</label></td>
                      <td><input type="text" name="SLB" id="SLB" title="Enter Benefit Amount"/></td>
                    </tr>
                    <tr>
                      <td><label for="CashOption">Cash Option (NRs)</label></td>
                      <td><input type="text" name="CashOption" id="CashOption" title="Enter Benefit Amount"/></td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr>
              <td colspan="2" ><div id="Adult" style="display:none">
                  <table>
                    <tr>
                      <td><label for="ADB">Accidental Benefit (NRs) </label></td>
                      <td><input type="text" name="ADB" id="ADB"  title="Enter Benefit Amount"/></td>
                    </tr>
                    <tr>
                      <td><label for="PTD">Physically Disabled Benefit (NRs) </label></td>
                      <td><input type="text" name="PTD" id="PTD" title="Enter Benefit Amount"/></td>
                </tr>
					
					
                  </table>
                </div></td>
	         </tr>
            <tr>
              <td colspan="2"><div id="Joint" style="display:none">
                  <table>
                    <tr>
                      <td><label for="SDOB">Spouse Date 
                          of Birth (mm/dd/yyyy) </label></td>
                      <td><input type="text" name="SDOB" id="SDOB" title="Enter Spouse DOB in MM/DD/YYYY"/>
                        <input name="sDateType" type="radio" accesskey="b" value="BS" />
                        B.S.
                        <input name="sDateType" type="radio" accesskey="a" value="AD" />
                        A.D. </td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                  <input name="button2" type="button" class="button" onclick="chk()" value="Submit" />
                  <input name="reset" type="reset" class="button" />
                </div></td>
            </tr>
          </form>
        </table>
-->
      <!-- FRAME PAGE END -->        
        
      <div id="err"> </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="footer">
  </div>
</div>
  </div>
  </div>
  </div>
  </div>

<?php include "includes/footer.php"; ?>
<hr class="bottom"/>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>