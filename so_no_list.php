<?php 
// require_once('Connections/ARKA.php');
 
$hostname_arka = "192.168.1.206";
$database_arka = "arka_wms";
$username_arka = "root";
$password_arka = "";

$arka = mysql_connect($hostname_arka, $username_arka, $password_arka) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_arka, $arka);

$Sno=$_POST['soNo'];
//$Inv=$_POST['invoiceNo'];
$res=array();
?>

			             <table class="table table-bordered" id="data-table">    

			                  <thead>

			                    <tr>
								<th width="5%" >Select</th>
								  <th style="width:5%">S No</th>

                                <th style="width:15%">Material Name</th>

                                <th style="width:15%">Material Code</th>

                                <th style="width:10%">Quantity</th>

                              </tr>

			                  </thead>

			                  <tbody>

							  <?php
								$i=1;
								$j=0;
								//echo 'SELECT * FROM arka_pack_details WHERE oracle_so_no ="'.$Sno.'" OR invoice_no="'.$Inv.'"';
				   $SelQuery_Add_Dtls = 'SELECT * FROM arka_so_details WHERE oracle_so_no ="'.$Sno.'" ';
		           $source=mysql_query($SelQuery_Add_Dtls);
				   $number=mysql_num_rows($source);
				   //print_r($source);
							
							 while($source3=mysql_fetch_array($source))
							 {  
							?>
							 <input type="hidden"  name="inv_id" id="inv_id" value="<?php echo $source3['invoice_no'];?>" />
                                <input type="hidden"  name="so_no_id" id="so_no_id" value="<?php echo $source3['oracle_so_no'];?>" />
								 <input type="hidden"  name="date_id" id="date_id" value="<?php echo $source3['invoice_date'];?>" />  
								<?php
							 	$j=$j+1;
							 ?>
							  
							 <tr class="gradeA">
							 <td align="center">  <a title="Material Name" ><input type="checkbox" id="sel_mat" name="sel_mat" value="<?php echo $source3['material_code'];?>"></a>&nbsp;</td>
							     <td><?php echo $j;?></td>
                              
                                 <td><?php echo $source3['material_name'];?></td>

			                      <td><?php echo $source3['material_code'];?></td>

                                  <td><input type="text" id="qty" name="qty" value="<?php echo $source3['available_quantity'];?>" /></td>
                                 </tr>
			                    	<?php 
									
									}
								?>
							  </tbody>
							  
			                </table>
						
	
                      