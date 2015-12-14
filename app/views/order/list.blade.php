@extends('layouts.cashier')

@section('content')

	
		
		<div class="row">
			<!-- <div class="col-md-12"> -->
					<center><img src="../images/manageorder.png" class="img-rounded" alt="Cinque Terre" width="250" height="250"></center>
					<font face="Supercell-Magic" size="3" color="White"><center> Order List </center></font>
	<br>
				
		</div>

		



<div class="container">
    <div class="col-md-12">
    	<div class="panel panel-primary">


    		
				<!-- Tabs -->
			    <ul class="nav nav-tabs" id="tabs">
			        <li><a href="#Repository" data-toggle="tab"><font size="3" color="white">Today</font></a></li>
			        <li><a href="#User" data-toggle="tab"><font size="3" color="white">All Orders</font></a></li>
			    </ul>
			    <!-- Tabs -->

			   
			


    	</div>
    		 <!-- Tab Content -->
			    <div class="tab-content">
			      
			        <!-- Repo -->
			        <div class="tab-pane active" id="Repository">
			            
			          <font color="white"><h2><center>Orders of the day</center></h2></font>
			          <br>
			          
			              
			          	 <!-- Repo Tabs -->
			          	
			          	 <div class="col-md-12">
			          	 	 <div class="panel panel-primary">
			          	 		<ul class="nav nav-tabs" id="repoTabs">
			          	 		<li><a href="#viewOrders" data-toggle="tab"> <font size="3" color="White">View</font></a></li>
			                    <li><a href="#updateOrders" data-toggle="tab"> <font size="3" color="White">Update</font></a></li>
			                    <li><a href="#deleteOrders" data-toggle="tab"><font size="3" color="White">Delete</font></a></li>
			              		</ul>


			              		 <!-- Repo Tabs -->
						        	
						         	 <div class="tab-content">

										<!-- View -->
						                <div class="tab-pane active" id="viewOrders">
						                	<!-- VIEW YEAH!!!! -->
						                	<ul class="nav nav-tabs" id="tab2">
							          	 		<li><a href="#unconfirmed1" data-toggle="tab"> <font size="3" color="white">Unconfirmed</font></a></li>
							                    <li><a href="#confirmed1" data-toggle="tab"> <font size="3" color="white">Confirmed</font></a></li>
							                    <li><a href="#onProcess1" data-toggle="tab"><font size="3" color="white">On process</font></a></li>
							                    <li><a href="#onDelivery1" data-toggle="tab"> <font size="3" color="white">On delivery</font></a></li>
							                    <li><a href="#readyforpickup1" data-toggle="tab"> <font size="3" color="white">Ready for pick-up</font></a></li>
							                    <li><a href="#received1" data-toggle="tab"><font size="3" color="white">Received</font></a></li>
						              		</ul>

						              		<div class="tab-content">
						              			<!-- Unconfirmed1 -->
						              			<div class="tab-pane active" id="unconfirmed1">
						              				<!-- Unconfirmed YEAHHHHH!!!! -->
						              			<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
										            <tr>

										              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
										              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
										              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
										              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
										              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
										              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
										              <td><div align="center"><strong></strong></div></td>
										              
										              
											            </tr>
											           
											            @if(sizeof($orders_today) == 0)
											            	<tr> 
											            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
											            	</tr>	
											            @else
											            	
											           	@foreach($orders_today as $order)
												           	@if($order->status == 'unconfirmed')	
												              <tr>
												              	<td> <center> {{ $order->order_id }} </center></td>
												                <td> <center> {{ $order->created_at }} </center></td>
																<td> <center> {{ $order->name() }} </center></td>
																<td> <center> {{ $order->toAddress }}</center></td>
																<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																<td> <center> {{ $order->status }} </center></td>
																<td> 
																	<center>
																	<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																	</center>
																</td>
																		 

																 	
												              </tr>
												             @endif 
											            @endforeach
											            @endif
											          </table>
								            		
								            		<center> {{ $orders_today->links() }} </center>	
						              			
						              			</div>	
						              			
						              			<!-- Confirmed1 -->
						              			<div class="tab-pane" id="confirmed1">
						              				<!-- Confirmed YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>

											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												           	@foreach($orders_today as $order)
													           	@if($order->status == 'confirmed')	
													              <tr>
													              	<td> <center> {{ $order->order_id }} </center></td>
													                <td> <center> {{ $order->created_at }} </center></td>
																	<td> <center> {{ $order->name() }} </center></td>
																	<td> <center> {{ $order->toAddress }}</center></td>
																	<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																	<td> <center> {{ $order->status }} </center></td>
																	<td> 
																		<center>
																		<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																		</center>
																	</td>
																			 

																	 	
													              </tr>
													             @endif 
												            @endforeach
												            @endif
												          </table>
									            		
									            		<center> {{ $orders_today->links() }} </center>
						              			
						              			</div>

						              			<!-- On Process1 -->
						              			<div class="tab-pane" id="onProcess1">
						              				<!-- On Process YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>

											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												           	@foreach($orders_today as $order)
													           	@if($order->status == 'on process')	
													              <tr>
													              	<td> <center> {{ $order->order_id }} </center></td>
													                <td> <center> {{ $order->created_at }} </center></td>
																	<td> <center> {{ $order->name() }} </center></td>
																	<td> <center> {{ $order->toAddress }}</center></td>
																	<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																	<td> <center> {{ $order->status }} </center></td>
																	<td> 
																		<center>
																		<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																		</center>
																	</td>
																			 

																	 	
													              </tr>
													             @endif 
												            @endforeach
												            @endif
												          </table>
									            		
									            		<center> {{ $orders_today->links() }} </center>
						              			
						              			</div>

						              			<!-- On Deliver1 -->
						              			<div class="tab-pane" id="onDelivery1">
						              				<!-- On Delivery YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>

											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												           	@foreach($orders_today as $order)
													           	@if($order->status == 'on delivery')	
													              <tr>
													              	<td> <center> {{ $order->order_id }} </center></td>
													                <td> <center> {{ $order->created_at }} </center></td>
																	<td> <center> {{ $order->name() }} </center></td>
																	<td> <center> {{ $order->toAddress }}</center></td>
																	<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																	<td> <center> {{ $order->status }} </center></td>
																	<td> 
																		<center>
																		<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																		</center>
																	</td>
																			 

																	 	
													              </tr>
													            
													             @endif 
												            @endforeach
												            @endif
												          </table>
									            		
									            		<center> {{ $orders_today->links() }} </center>
						              			
						              			</div>	
						              			
						              			<!-- Ready for pick-up 1 -->
						              			<div class="tab-pane" id="readyforpickup1">
						              				<!-- Ready for pick-up YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>

											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												           	@foreach($orders_today as $order)
													           	@if($order->status == 'ready for pick-up')	
													              <tr>
													              	<td> <center> {{ $order->order_id }} </center></td>
													                <td> <center> {{ $order->created_at }} </center></td>
																	<td> <center> {{ $order->name() }} </center></td>
																	<td> <center> {{ $order->toAddress }}</center></td>
																	<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																	<td> <center> {{ $order->status }} </center></td>
																	<td> 
																		<center>
																		<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																		</center>
																	</td>
																			 

																	 	
													              </tr>
													            
													             @endif 
												            @endforeach
												            @endif
												          </table>
									            		
									            		<center> {{ $orders_today->links() }} </center>
						              			
						              			</div>

						              			<!-- Received1 -->
						              			<div class="tab-pane" id="received1">
						              				<!-- Received YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>

											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												           	@foreach($orders_today as $order)
													           	@if($order->status == 'received')	
													              <tr>
													              	<td> <center> {{ $order->order_id }} </center></td>
													                <td> <center> {{ $order->created_at }} </center></td>
																	<td> <center> {{ $order->name() }} </center></td>
																	<td> <center> {{ $order->toAddress }}</center></td>
																	<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																	<td> <center> {{ $order->status }} </center></td>
																	<td> 
																		<center>
																		<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																		</center>
																	</td>
																			 

																	 	
													              </tr>
													            
													             @endif 
												            @endforeach
												            @endif
												          </table>
									            		
									            		<center> {{ $orders_today->links() }} </center>
						              			
						              			</div>		


						              		</div>





						                </div>	
						                <!-- END OF VIEW -->

						         	 	<!-- Update -->
						                <div class="tab-pane" id="updateOrders">

						                	<!-- UPDATE YEAH!!! -->
						                	<ul class="nav nav-tabs" id="tab2">
							          	 		<li><a href="#unconfirmed2" data-toggle="tab"> <font size="3" color="white">Unconfirmed</font></a></li>
							                    <li><a href="#confirmed2" data-toggle="tab"> <font size="3" color="white">Confirmed</font></a></li>
							                    <li><a href="#onProcess2" data-toggle="tab"><font size="3" color="white">On process</font></a></li>
							                    <li><a href="#onDelivery2" data-toggle="tab"> <font size="3" color="white">On delivery</font></a></li>
							                    <li><a href="#readyforpick2" data-toggle="tab"> <font size="3" color="white">Ready for pick-up</font></a></li>
						              		</ul>

						              		<div class="tab-content">
						              			<!-- Unconfirmed2 -->
						              			<div class="tab-pane active" id="unconfirmed2">
						              				<!-- Unconfirmed YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>
											              <td><div align="center"><strong> </strong></div></td>
											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												         	
												           	@foreach($orders_today as $order)
												           	@if($order->status == 'unconfirmed')		
												         	
												            <tr>    {{ Form::open(array('url' => '/changeStatus', 'method' => 'PUT')) }} </tr>	
												            <tr></tr>
												              <tr>
												              	<td> <center> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="action[]" id="action" value="{{ $order->order_id }}"> </center> </td>
												                <td> <center> {{ $order->order_id }} </center></td>
												                <td> <center> {{ $order->created_at }} </center></td>
																<td> <center> {{ $order->name() }} </center></td>
																<td> <center> {{ $order->toAddress }}</center></td>
																<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																<td> <center> {{ $order->status }} </center></td>
																<td> 
																	<center>
																	<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																	</center>										
																</td>
																		 

																 	
												              </tr>
												            @endif
												            @endforeach
												            @endif
												          </table>
									            		
									            			<!-- Irrelevant Select to maintain the button thingy... -->
									            			<center> {{ $orders_today->links() }} </center>
									            			<div style="display:none">
																<select name="status1" id="status1" >
																   <option value="confirmed">changevalue1</option>
																   <option value="on process">changevalue2</option>
																   <option value="on delivery">changevalue3</option>
																   <option value="ready for pick-up">changevalue4</option>
																   <option value="received">changevalue5</option>
																</select>
															</div>
															<!-- END -->

									            			<center>
									            			<font face="Supercell-Magic"> {{ Form::submit('confirm', array('class' => 'btn', 'name' => 'status', 'value' => "confirmed", 'id' => 'confirm1')) }} </font> 
														    </center>
															<br>

															
															{{ Form::close() }}

						              			</div>	
						              			
						              			<!-- Confirmed2 -->
						              			<div class="tab-pane" id="confirmed2">
						              				<!-- Confirmed YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>
											              <td><div align="center"><strong> </strong></div></td>
											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												         	
												           	@foreach($orders_today as $order)
												           	@if($order->status == 'confirmed')		
												         	
												            <tr>    {{ Form::open(array('url' => '/changeStatus', 'method' => 'PUT')) }} </tr>	
												            <tr></tr>
												              <tr>
												              	<td> <center> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="action[]" id="action" value="{{ $order->order_id }}"> </center> </td>
												                <td> <center> {{ $order->order_id }} </center></td>
												                <td> <center> {{ $order->created_at }} </center></td>
																<td> <center> {{ $order->name() }} </center></td>
																<td> <center> {{ $order->toAddress }}</center></td>
																<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																<td> <center> {{ $order->status }} </center></td>
																<td> 
																	<center>
																	<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																	</center>										
																</td>
																		 

																 	
												              </tr>
												            @endif
												            @endforeach
												            @endif
												          </table>
									            		
									            			<!-- Irrelevant Select to maintain the button thingy... -->
									            			<center> {{ $orders_today->links() }} </center>
									            			<div style="display:none">
																<select name="status1" id="status1" >
																   <option value="confirmed">changevalue1</option>
																   <option value="on process">changevalue2</option>
																   <option value="on delivery">changevalue3</option>
																   <option value="ready for pick-up">changevalue4</option>
																   <option value="received">changevalue5</option>
																</select>
															</div>
															<!-- END -->

									            			<center>
									            			<font face="Supercell-Magic"> {{ Form::submit('on process', array('class' => 'btn', 'name' => 'status', 'value' => 'on process', 'type' => 'submit' , 'id' => 'confirm2')) }} </font> 
														    </center>
															<br>

															
															{{ Form::close() }}
						              			
						              			</div>

						              			<!-- On Process2 -->
						              			<div class="tab-pane" id="onProcess2">
						              				<!-- On Process YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>
											              <td><div align="center"><strong> </strong></div></td>
											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												         	
												           	@foreach($orders_today as $order)
												           	@if($order->status == 'on process')		
												         	
												            <tr>    {{ Form::open(array('url' => '/changeStatus', 'method' => 'PUT')) }} </tr>	
												            <tr></tr>
												              <tr>
												              	<td> <center> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="action[]" id="action" value="{{ $order->order_id }}"> </center> </td>
												                <td> <center> {{ $order->order_id }} </center></td>
												                <td> <center> {{ $order->created_at }} </center></td>
																<td> <center> {{ $order->name() }} </center></td>
																<td> <center> {{ $order->toAddress }}</center></td>
																<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																<td> <center> {{ $order->status }} </center></td>
																<td> 
																	<center>
																	<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																	</center>										
																</td>
																		 

																 	
												              </tr>
												            @endif
												            @endforeach
												            @endif
												          </table>
									            		
									            			<!-- Irrelevant Select to maintain the button thingy... -->
									            			<center> {{ $orders_today->links() }} </center>
									            			<div style="display:none">
																<select name="status1" id="status1" >
																   <option value="confirmed">changevalue1</option>
																   <option value="on process">changevalue2</option>
																   <option value="on delivery">changevalue3</option>
																   <option value="ready for pick-up">changevalue4</option>
																   <option value="received">changevalue5</option>
																</select>
															</div>
															<!-- END -->

									            			<center>
									            			<font face="Supercell-Magic"> {{ Form::submit('on delivery', array('class' => 'btn', 'name' => 'status', 'value' => 'on delivery', 'type' => 'submit' , 'id' => 'confirm3')) }} </font> 
														    <font face="Supercell-Magic"> {{ Form::submit('ready for pick-up', array('class' => 'btn', 'name' => 'status', 'value' => 'ready for pick-up', 'type' => 'submit' , 'id' => 'confirm4')) }} </font> 
														    </center>
															<br>

															
															{{ Form::close() }}
						              			
						              			</div>

						              			<!-- On Deliver2 -->
						              			<div class="tab-pane" id="onDelivery2">
						              				<!-- On Delivery YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>
											              <td><div align="center"><strong> </strong></div></td>
											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												         	
												           	@foreach($orders_today as $order)
												           	@if($order->status == 'on delivery')		
												         	
												            <tr>    {{ Form::open(array('url' => '/changeStatus', 'method' => 'PUT')) }} </tr>	
												            <tr></tr>
												              <tr>
												              	<td> <center> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="action[]" id="action" value="{{ $order->order_id }}"> </center> </td>
												                <td> <center> {{ $order->order_id }} </center></td>
												                <td> <center> {{ $order->created_at }} </center></td>
																<td> <center> {{ $order->name() }} </center></td>
																<td> <center> {{ $order->toAddress }}</center></td>
																<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																<td> <center> {{ $order->status }} </center></td>
																<td> 
																	<center>
																	<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																	</center>										
																</td>
																		 

																 	
												              </tr>
												            @endif
												            @endforeach
												            @endif
												          </table>
									            		
									            			<!-- Irrelevant Select to maintain the button thingy... -->
									            			<center> {{ $orders_today->links() }} </center>
									            			<div style="display:none">
																<select name="status1" id="status1" >
																   <option value="confirmed">changevalue1</option>
																   <option value="on process">changevalue2</option>
																   <option value="on delivery">changevalue3</option>
																   <option value="ready for pick-up">changevalue4</option>
																   <option value="received">changevalue5</option>
																</select>
															</div>
															<!-- END -->

									            			<center>
									            			<font face="Supercell-Magic"> {{ Form::submit('received', array('class' => 'btn', 'name' => 'status', 'value' => 'received', 'type' => 'submit' , 'id' => 'confirm5')) }} </font>
															</center>
															<br>

															
															{{ Form::close() }}
						              			
						              			</div>	
						              			
						              			<!-- Ready for pick-up 2 -->
						              			<div class="tab-pane" id="readyforpickup2">
						              				<!-- Ready for pick-up YEAHHHHH!!!! -->
						              				<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
											            <tr>
											              <td><div align="center"><strong> </strong></div></td>
											              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
											              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
											              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
											              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
											              <td><div align="center"><strong></strong></div></td>
											              
											              
												            </tr>
												           
												            @if(sizeof($orders_today) == 0)
												            	<tr> 
												            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
												            	</tr>	
												            @else
												            	
												         	
												           	@foreach($orders_today as $order)
												           	@if($order->status == 'ready for pick-up')		
												         	
												            <tr>    {{ Form::open(array('url' => '/changeStatus', 'method' => 'PUT')) }} </tr>	
												            <tr></tr>
												              <tr>
												              	<td> <center> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="action[]" id="action" value="{{ $order->order_id }}"> </center> </td>
												                <td> <center> {{ $order->order_id }} </center></td>
												                <td> <center> {{ $order->created_at }} </center></td>
																<td> <center> {{ $order->name() }} </center></td>
																<td> <center> {{ $order->toAddress }}</center></td>
																<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
																<td> <center> {{ $order->status }} </center></td>
																<td> 
																	<center>
																	<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
																	</center>										
																</td>
																		 

																 	
												              </tr>
												            @endif
												            @endforeach
												            @endif
												          </table>
									            		
									            			<!-- Irrelevant Select to maintain the button thingy... -->
									            			<center> {{ $orders_today->links() }} </center>
									            			<div style="display:none">
																<select name="status1" id="status1" >
																   <option value="confirmed">changevalue1</option>
																   <option value="on process">changevalue2</option>
																   <option value="on delivery">changevalue3</option>
																   <option value="ready for pick-up">changevalue4</option>
																   <option value="received">changevalue5</option>
																</select>
															</div>
															<!-- END -->

									            			<center>
									            			<font face="Supercell-Magic"> {{ Form::submit('received', array('class' => 'btn', 'name' => 'status', 'value' => 'received', 'type' => 'submit' , 'id' => 'confirm5')) }} </font>
															</center>
															<br>

															
															{{ Form::close() }}
						              			
						              			</div>

						              				


						              		</div>

						                </div>


						                <!-- Delete -->
						          		<div class="tab-pane" id="deleteOrders">
							          		<!-- DELETE YEAH!!!! -->
							          		<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
									            <tr>
									              <td><div align="center"><strong> </strong></div></td>
									              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
									              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
									              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
									              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
									              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
									              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
									              <td><div align="center"><strong></strong></div></td>
									              
									              
										            </tr>
										           
										            @if(sizeof($orders_today) == 0)
										            	<tr> 
										            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
										            	</tr>	
										            @else
										            {{ Form::open(array('url' => '/deleteOrders')) }}	
										           	@foreach($orders_today as $order)	
										              <tr>
										              	<td> <center> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="action2[]" id="action" value="{{ $order->order_id }}"> </center> </td>
										                <td> <center> {{ $order->order_id }} </center></td>
										                <td> <center> {{ $order->created_at }} </center></td>
														<td> <center> {{ $order->name() }} </center></td>
														<td> <center> {{ $order->toAddress }}</center></td>
														<td align="right"> <center> P {{ $order->amount }}.00 </center></td>
														<td> <center> {{ $order->status }} </center></td>
														<td> 
															<center>
															<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
															</center>													
														</td>
																 

														 	
										              </tr>
										              
										            @endforeach
										            @endif
										          </table>
							            		
							            		<center> {{ $orders_today->links() }} </center>

							            		<center><font face="Supercell-Magic"> {{ Form::submit('Submit', array('class' => 'btn')) }} </font></center>
							            		<br>
							            		{{ Form::close() }}
						          		</div>

						      		 </div>
						         


			          	 	</div>
			             </div>
			 
			        </div>


			        <!-- For All ORDERS -->
			      	<div class="tab-pane" id="User">
			            <center><font color="white"><h2> All Orders</h2></font></center>
			            <br>

			            <div class="col-md-12">
			          	 	 <div class="panel panel-primary">
			          	 	 	<table class= "table table-striped table-hover"border="0" cellpadding="0" cellspacing="0">
									            <tr>
									             
									              <td><div align="center"><strong><font size="3">Order ID</font></strong></div></td>
									              <td><div align="center"><strong><font size="3">Order Date</font></strong></div></td>
									              <td><div align="center"><strong><font size="3">Customer Name</font></strong></div></td>
									              <td><div><strong><center><font size="3">To Address</font></center></strong></div></td>
									              <td><div align="center"><strong><font size="3">Amount</font></strong></div></td>
									              <td><div align="center"><strong><font size="3">Status</font></strong></div></td>
									              <td><div align="center"><strong></strong></div></td>
									              
									              
										            </tr>
										           
										            @if(sizeof($orders_all) == 0)
										            	<tr> 
										            		<center> <font color="white"> No order in the list </font><text>  <text> </center>
										            	</tr>	
										            @else
										           
										           	@foreach($orders_all as $order1)	
										              <tr>
										                <td> <center> {{ $order1->order_id }} </center></td>
										                <td> <center> {{ $order1->created_at }} </center></td>
														<td> <center> {{ $order1->name() }} </center></td>
														<td> <center> {{ $order1->toAddress }}</center></td>
														<td align="right"> <center> P {{ $order1->amount }}.00 </center></td>
														<td> <center> {{ $order1->status }} </center></td>
														<td> 
															<center>
															<a class="btn btn-success" href="{{ URL::to('/viewOrder/' . $order1->order_id) }}"><span class="glyphicon glyphicon-search"></span></a>
															</center>													
														</td>
																 

														 	
										              </tr>
										              
										            @endforeach
										            @endif
										          </table>
							            		
							            		<center> {{ $orders_all->links() }} </center>

							            		
							            		

			          	 	 </div>
			          	</div>


		     		</div>

			        
			       
			    </div>
    </div>
</div>
    	
	<!-- Bootbox -->
  <script type="text/javascript">
    $('form').submit(function(e) {
        var currentForm = this;
        e.preventDefault();
        bootbox.confirm("Are you sure?", function(result) {
            if (result) {
                currentForm.submit();
            }
        });
    });
 </script>
@stop