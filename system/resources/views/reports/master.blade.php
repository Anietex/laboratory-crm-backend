<html>
	<head>
		<style>
			
			body{
				font-family: sans-serif;
			}
			table{
				border-collapse: collapse;
				font-family: sans-serif;
				
			}
			th,td{
				border: solid;
				border-width: 1px;
				font-size: 13px;
				padding: 2px 3px;
				vertical-align: top;
				border-color: #333333;
			}
			.absolute{
				position: absolute;
			}
			
			
			.print-logo,.services,.print-brand{
				position: absolute;
				
			}
			
			.print-brand{
				
				left: 200px;
				width: 300px;
				
			}
			.services{
				left: 500px
			}
			ul{
				list-style: square;
			}
			li{
				font-size: 12px;
			}
			
			.view-report-table {
				top: 160px;
			}
			.r-heading{
				font-size: 20px;
			}
			.label{
				font-weight: bold;
				font-size: 10px;
				margin: 0px;
				padding: 0px;
				line-height: 0;
			}
			
			.date{
				position: absolute;
				left:400px
			}
			.lab-sci,.date{
				bottom: 70px;
			}

			.footer{
				bottom: 10px;
				text-align: center;
				font-size: 12px;
				width: 700px;
				border-top: solid 1px black;
			}

			.chem-path{
				width: 740px
			}


			.head{
		/* font-size: 10px; */
		padding-top: 50px;
		line-height: 6000px;
	}
			@page {
				margin: 4%;
			}
		
		</style>
	</head>
	<body>
		
		
		<div class="print-logo">
			<img width="100px" src="{{asset('storage/images/'.$setting->logo_file)}}">
		</div>
		<div class="print-brand" >
			<h2 style="text-align:center">{{$setting->lab_name}}</h2>
			<h5 style="text-align:center">{{$setting->sub_name}}</h5>
		</div>
		<div class="services">
			<ul>
				<li>ECG</li>
				<li>Digital Mammography</li>
				<li>Special X-ray investigation</li>
				<li>USS</li>
				<li>Automated</li>
				<li>Pap Smear</li>
			</ul>
		</div>
		
		
		@yield('content')
		<div class="lab-sci absolute">
			<p>MEDICAL LAB SCIENTIST .............................................</p>
		</div>
		
		<div class="date absolute">
			<p>DATE...................................................................</p>
		</div>
		
		
			<div class="absolute footer">
				<p><strong>Contact Us: </strong> Tel: {{$setting->phone_no}}, Email: {{$setting->email}} </p>
				
				<p><strong>Address:</strong> {{$setting->address}}</p>
				{{-- <p>Tel +234-85-290368, +234-8080627497, +234-8135115577, Email: streamtrustdianostic@yahoo.com </p>
				<p>COLLECTION CENTRE: BENEAT CLENO By University of Uyo Teaching Hospital Gate, Abak Road, Uyo.</p>
			 --}}</div>
	</body>
</html>