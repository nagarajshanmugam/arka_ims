        </div>
           
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
          {if $SuccessMessage1 neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage1}		 
			</div>
		 {/if}
		  {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-check"></i>
			{$ErrorMessage}		 
			</div>
		 {/if}
			<!--<div class="isa_error">
			<i class="fa fa-times-circle"></i>
			Customer inserted Successfully......
			</div>-->
            <div class="row">
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">Add Sticker Form</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
<!--                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>-->
							
                            </div>
                        </div>

						
                        <div class="ibox-content"><body onLoad="doOnLoad();">
												
						
                            <form method="post" class="form-horizontal" name="inwardReg" id="inwardReg">
							{if $smarty.get.st_id eq ''}
						
						<div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">No of Material:</label>
                               <div class="col-md-4"  id="errlocpo_no"> <input type="text" id="st_id" name="st_id" class="form-control" value="{$smarty.post.st_id}" placeholder="No of Material" autocomplete="off" tabindex="1"></div>
							   <button class="btn btn-primary" type="button" id="addInward" tabindex="15" onClick="sticker_id();">Submit</button>
							   </div>
						{/if}
						{if $smarty.get.st_id neq ''}
							<input type="hidden" id="hdAction" name="hdAction" />
							<input type="hidden" id="hdn_cnt_dtls" name="hdn_cnt_dtls" value="">
							<input type="hidden" id="loc_fld_cnt" name="loc_fld_cnt"  value="2"  >
							<input type="hidden" id="loc_fld_cnt" name="loc_fld_cnt"  value="{$smarty.session.UserName}">
							<!--<div class="" style="height:40px;">
                          <h5  style="padding-left:40%; font-size:14px;">Gate Inward - I</h5>
						  </div>-->
						  {section name=val loop=$smarty.get.st_id}
  								 <input type="text" id="sticker_id" name="sticker_id" class="form-control" value="{$c_id}" autocomplete="off" >
							   	 <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Material Code:</label>
                               <div class="col-md-4"  id="errinward_entry_id"> <input type="text" id="part_no" name="part_no[]" class="form-control" value="{$smarty.post.part_no}" autocomplete="off" Placeholder="part_no[{$i}]"></div>
							  							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Material Name:</label>
							   <div class="col-md-4" id="errg1_date"><input type="text" id="m_name[]" name="m_name" class="form-control" value="{$smarty.post.m_name}" placeholder="" tabindex="1"></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Product Qty:</label>
                               <div class="col-md-4"  id="errpo_no"> <input type="text" id="quantity[]" name="quantity" class="form-control" value="{$smarty.post.quantity}" autocomplete="off" tabindex="2" onKeyUp="numeric_filter(this);"></div>
							   
							   <label class="col-sm-2 control-label" style="text-align:left; ">Sticker Qty:</label>
							   <div class="col-md-4" id="errpo_date"> <input type="text" id="stick_qty[]" name="stick_qty" class="form-control" value="{$smarty.post.stick_qty}" tabindex="3" autocomplete="off" onKeyUp="numeric_filter(this);" ></div>
							   </div>
							    <div class="form-group">
							   <label class="col-sm-2 control-label" style="text-align:left;">Price:</label>
                               <div class="col-md-4"  id="errinvoice_no"> <input type="text" id="price[]" name="price" class="form-control" value="{$smarty.post.price}" autocomplete="off" tabindex="4" onKeyUp="numeric_filter(this);totalPrice()">	</div>
							    <label class="col-sm-2 control-label" style="text-align:left;">Total Price:</label>
                               <div class="col-md-4"  id="errinvoice_no"> <input type="text" id="total_price[]" name="total_price" class="form-control" value="{$smarty.post.total_price}" autocomplete="off" tabindex="" onKeyUp="numeric_filter(this);" readonly="true">	</div>
							   
							   </div>
							     <div class="form-group">
							  
							 <label class="col-sm-2 control-label" style="text-align:left; ">Date:</label>
							  <div class="col-md-4" id="errinvoice_date"> <input type="text" id="date[]" name="date" value="{$smarty.post.date}" class="form-control" readonly="true" placeholder="Select Date!" tabindex="5"></div>
							   </div>
							   <hr/>
							    		{/section}		
							    					
								 <div align="center">
                                         
                                        <button class="btn btn-primary" type="submit" id="addInward" tabindex="15">ADD</button>
<!--										<button class="btn btn-primary" type="button" id="addInward">RESET</button>-->
										<button class="btn btn-white" type="button" id="back" tabindex="16">CANCEL</button>
                                      </div>
{/if}
									 
<!-- SEARCH FORM END -->
{literal}
<script>
function totalPrice()
{
var qty=document.getElementById('quantity[]').value;
var price=document.getElementById('price[]').value;
var total = +qty * +price; 
document.getElementById('total_price[]').value=total;
}
</script>

<script>
function balance_calc()
{
var invoiceqty=document.getElementById('invoice_quantity').value;
var receivedqty=document.getElementById('received_quantity').value;
var tot = +invoiceqty - +receivedqty; 
document.getElementById('balance_quantity').value=tot;
}

function sticker_id()
{
var s_id = document.getElementById('st_id').value;
if(s_id !='')
{
//alert(s_id);
  FormName		= document.inwardReg;
  FormName.action= "./sticker.php?st_id="+s_id;
  FormName.submit();

}
else
{
alert('Please Enter No Of Material');
}
}
</script>


{/literal}
									  <br/>
									  <br />

	<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0 class="table table-bordered">
 			{if $ErrorMessage_on_not_selection neq ""}
	<tr> 
		<td class="errtxt" width=50%><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" />         		  {$ErrorMessage_on_not_selection}</td>
		<td class="error" width=50%></td>
	 </tr>

             {/if}
			 
			
			 {if $SuccessMessage_on_delete neq ""}
	<tr> 
		<td class="succs_text" width=50%> {$SuccessMessage_on_delete}</td>
		<td  width=50%></td>
	 </tr>

             {/if} 
			 
			 
					 {if $ErrorMessage_on_delete neq ""}
	<tr> 
		<td class="errtxt" width=50%> {$ErrorMessage_on_delete}</td>
		<td  width=50%></td>
	 </tr>

             {/if} 	 
 
 
</table>
							   
		
		</td>
		</tr>
		</table>
		</form>
				</body>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
{literal}
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script> function getval()
        {
		var g1_date,dcDate,invoiceDate;
		g1_date=document.getElementById("g1_date").value;
		po_date=document.getElementById("po_date").value;
		invoiceDate=document.getElementById("date").value;

		if(g1_date=="" || po_date=="" ||invoiceDate=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
		
	
	var myCalendar;
function doOnLoad() {
    
    var g1_date;
	g1_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["g1_date"]);
	myCalendar = new dhtmlXCalendarObject(["po_date"]);
   	myCalendar = new dhtmlXCalendarObject(["date[]"]);
	myCalendar = new dhtmlXCalendarObject(["g1_date"]);
Fill_Name_of_Clr();
}	
        $(document).ready(function() {	
			
$("#addInward").click(function(){
				var fields=["part_no[]","m_name[]","quantity[]","stick_qty[]","price[]","date[]"];
				
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.inwardReg;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});

		
		 });
$(document).on("click", ".fa-trash", function () {
     var inward_entry_id = $(this).data('id');
     $(".modal-body #hdnDelinward_entry_id").val(inward_entry_id);
});

		
		/*function deleteCats1(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.inwardReg;
   //var gate = document.getElementById('gate_entry_id').value;
  FormName.action= "./inwardList.php?inward_entry_id="+CatIdent;
  
  FormName.submit();
 }
 }*/
 /**************************Suggestion****************************************************/
function Fill_Name_of_Clr()
{
var supplier_name= document.getElementById("supplier_name").value;  
var cnt_dtl_ary="";
if (supplier_name=="")
  {
  document.getElementById("supplier_name").value="";
  return;
  }
  if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
  
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
  	/*x ="<option>--Select Customer Name--</option>"*/
	x= x + xmlhttp.responseText;
	x=x.replace("|$|","");
//	alert(x);
	document.getElementById("supplier_name").innerHTML=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
			document.getElementById("hdn_cnt_dtls").value=cnt_dtl_ary;
		//	split_id=x.split("|CUSID|");
		var code=add_dtls[0];
	var str1 =code.replace('undefined','');
			document.getElementById("supplier_code").value=str1;
			document.getElementById("supplier_name").innerHTML=x;

	   }
    }
  }
xmlhttp.open("GET","ajax_vendor.php?supplier_name="+supplier_name,true);
xmlhttp.send();


}
function Fill_Name_of_Clr1()
{
//var id_2= document.getElementById("sid").value;
//alert(id_2);
//var values = $("input[id='part_no[]']").map(function(){return $(this).val();}).get();<br>
var material_code= document.getElementById('part_no[]').length;
alert(material_code);

var material_code= document.getElementById("part_no[id_2]").value;
alert(material_code);
//var area= document.getElementById("area").value;
var cnt_dtl_ary="";
//var customer_name =document.getElementById("").value
if (material_code=="")
  {
  document.getElementById("part_no[]").value="";
  return;
  }
  if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
  
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
  	/*x ="<option>--Select Customer Name--</option>"*/
	x= x + xmlhttp.responseText;
	x=x.replace("|$|","");
//	alert(x);
	document.getElementById("part_no[]").innerHTML=x;
	var add_dtls_length=x.split("_").length;
	var add_dtls=x.split("_");
			document.getElementById("hdn_cnt_dtls").value=cnt_dtl_ary;
			split_id=x.split("|CUSID|");
			var code1=add_dtls[0];
	var str2 =code1.replace('undefined','');
			document.getElementById("m_name[]").value=str2;
		//	document.getElementById("material_type").value=add_dtls[1];
		//	document.getElementById("material_category").value=add_dtls[2];
		//	document.getElementById("material_specification").value=add_dtls[3];
			document.getElementById("part_no[]").innerHTML=x;

	   }
    }
  }
xmlhttp.open("GET","ajax_material.php?material_code="+material_code,true);
xmlhttp.send();


} 
		 
	
</script>

<script>

function numeric_filter(match_data)
{///^[a-zA-Z0-9?=.*!@#$%^&*_\-\s]+$/
///^[a-zA-Z0-9?=.*!@#$%^&*_\-\s]+$/
match_data.value=match_data.value.replace(/[^.0-9?=.,*!@#$%^&*_\-\s]/ig,"");
}
</script>
<script> 
function supplier_validation() 
{
alert("Please select Supplier Name First!");
		/*dhtmlx.alert({
		title: "Error !",
        type:"alert-error",
		text: "Please select Supplier Name First!",
		
});*/
return false;
}
</script>


<script>
		 
	
function textFilter(data)
{
  // data.value = data.value.replace(/[^a-z]/g,"");
   data.value = data.value.toUpperCase();
    data.value = data.value.replace(/[^A-Z]/g,"");

}
</script>
 
	<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>	
<script src="jquery/jquery.ui.datepicker.js"></script>
<script type='text/javascript' src='./auto-complete/jquery.metadata.js'></script>
<script type='text/javascript' src='./auto-complete/jquery.auto-complete.js?<?= mktime() ?>'></script>
<script type='text/javascript' src='./auto-complete/js.js?<?= mktime() ?>'></script>
	<link rel='stylesheet' type='text/css' href='auto-complete/jquery.auto-complete.css?<?= mktime() ?>' />
	    

<style>
.isa_success
{
	color:#4F8A10;
	background-color:#DFF2BF;
}
.isa_error
{
	color:#D8000C;
	background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
    margin:10px 22px;
	font-size:2em;
	vertical-align:middle;

}
</style>
<script type="text/javascript" src='./dhtmlxMessage/codebase/dhtmlxmessage.js'></script>
<link rel="stylesheet" href= "./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			
{/literal}
