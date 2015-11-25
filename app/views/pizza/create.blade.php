@extends('layouts.default')

@section('content')

	<div class="container">
		<div class="col-md-4 col-md-offset-7">
			<div id="flip">Click to slide the panel down or up</div>
			<div id="panel">
				<select class="selectpicker">
					<option data-content="<img src='https://10.6.6.39/online_cos-portlet/images/icon/money_usd.png'></span>  <span style='display:inline-block; width:100px;'>  美金</span>">1</option>
					<option data-content="<img src='https://10.6.6.39/online_cos-portlet/images/icon/money_hkd.png'></span>  <span style='display:inline-block; width:100px;'>  港幣</span>">2</option>
					<option data-content="<img src='https://10.6.6.39/online_cos-portlet/images/icon/money_rmb.png'></span>  <span style='display:inline-block; width:100px;'>  人仔</span>">3</option>
					</select>

					<button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-chevron-down"></span> Show all</button>


			</div>
		</div>
	</div>

@stop