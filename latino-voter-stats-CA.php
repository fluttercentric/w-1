<!DOCTYPE HTML>
<html>
	<head>
		<title>WCVI - The William C. Velasquez Institute - Latino Voter Research</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<style>
			th {
  				text-align: left;
  				padding: 10px;
  				background-color: #70aad5;
  				font-weight: bold;
				}

			td {
  				height: 50px;
  				padding: 10px;
				}

			table, th, td {
  				border: 1px solid;
				}
			/*
			Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
			*/
			@media
			  only screen 
		    and (max-width: 760px), (min-device-width: 768px) 
		    and (max-device-width: 1024px)  {

				/* Force table to not be like tables anymore */
				table, thead, tbody, th, td, tr {
					display: block;
				}

				/* Hide table headers (but not display: none;, for accessibility) */
				thead tr {
					position: absolute;
					top: -9999px;
					left: -9999px;
				}

		    tr {
		      margin: 0 0 1rem 0;
		    }
		      
		    tr:nth-child(odd) {
		      background: #c6ddee;
		    }
		    
				td {
					/* Behave  like a "row" */
					border: none;
					border-bottom: 1px solid #eee;
					position: relative;
					padding-left: 50%;
				}

				td:before {
					/* Now like a table header */
					position: absolute;
					/* Top/left values mimic padding */
					top: 0;
					left: 6px;
					width: 45%;
					padding-right: 10px;
					white-space: nowrap;
				}

				/*
				Label the data
		    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
				*/
				td:nth-of-type(1):before { content: "Year"; }
				td:nth-of-type(2):before { content: "Race"; }
				td:nth-of-type(3):before { content: "VAP"; }
				td:nth-of-type(4):before { content: "CVAP"; }
				td:nth-of-type(5):before { content: "REG"; }
				td:nth-of-type(6):before { content: "REG %"; }
				td:nth-of-type(7):before { content: "TO"; }
				td:nth-of-type(8):before { content: "TO %"; }
				td:nth-of-type(9):before { content: "REG SHARE"; }
				td:nth-of-type(10):before { content: "TO SHARE"; }
				td:nth-of-type(11):before { content: "VR POTENTIAL"; }
			}
		</style>


	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<?php include("inc-header.php"); ?>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>

									<h2>California Latino Voter Research</h2>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et rhoncus ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel bibendum urna. Suspendisse eu tortor in lectus ornare dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla lectus leo, rutrum sed risus eget, rutrum tempor eros.</p>

									<div align="center">

									<!-- DATA TABLE STARTS -->
									<table border="1" cellspacing="1" cellpadding="1">
									<tbody>
										<tr bgcolor="#CCCCCC">
											<td colspan="11">
												<div align="center"><strong>California</strong></div>
											</td>
										</tr>
										<tr bgcolor="#949494">
											<td>
												<div>
													<strong>
														Year
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														Race
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														VAP
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														CVAP
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														REG
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														REG %
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														TO
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														TO %
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														REG SHARE
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														TO SHARE
													</strong>
												</div>
											</td>
											<td>
												<div>
													<strong>
														VR POTENTIAL
													</strong>
												</div>
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td rowspan="5">
												<strong>
													2014
												</strong>
											</td>
											<td>
												Total
											</td>
											<td>
												29,030
											</td>
											<td>
												24,455
											</td>
											<td>
												14,113
											</td>
											<td>
												57.7
											</td>
											<td>
												8,949
											</td>
											<td>
												63.4%
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												10,342
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												White
											</td>
											<td>
												21,429
											</td>
											<td>
												18,060
											</td>
											<td>
												10,753
											</td>
											<td>
												59.5%
											</td>
											<td>
												7,093
											</td>
											<td>
												66.0%
											</td>
											<td>
												76.2%
											</td>
											<td>
												79.3%
											</td>
											<td>
												7,307
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												Black
											</td>
											<td>
												1,846
											</td>
											<td>
												1,787
											</td>
											<td>
												1,043
											</td>
											<td>
												58.4%
											</td>
											<td>
												535
											</td>
											<td>
												51.3%
											</td>
											<td>
												7.4%
											</td>
											<td>
												6.0%
											</td>
											<td>
												744
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												Latino
											</td>
											<td>
												10,023
											</td>
											<td>
												6,859
											</td>
											<td>
												3,294
											</td>
											<td>
												48.0%
											</td>
											<td>
												1,707
											</td>
											<td>
												51.8%
											</td>
											<td>
												23.3%
											</td>
											<td>
												19.1%
											</td>
											<td>
												3,565
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												Asian
											</td>
											<td>
												4,409
											</td>
											<td>
												3,486
											</td>
											<td>
												1,628
											</td>
											<td>
												46.7%
											</td>
											<td>
												933
											</td>
											<td>
												57.3%
											</td>
											<td>
												11.5%
											</td>
											<td>
												10.4%
											</td>
											<td>
												1,858
											</td>
										</tr>
										<tr bgcolor="#cccccc">
											<td rowspan="5">
												<strong>
													2012
												</strong>
											</td>
											<td>
												Total
											</td>
											<td>
												28,357
											</td>
											<td>
												23,419
											</td>
											<td>
												15,356
											</td>
											<td>
												65.6%
											</td>
											<td>
												13,462
											</td>
											<td>
												87.7%
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												8,063
											</td>
										</tr>
										<tr bgcolor="#cccccc">
											<td>
												White
											</td>
											<td>
												21,330
											</td>
											<td>
												17,692
											</td>
											<td>
												11,785
											</td>
											<td>
												66.6%
											</td>
											<td>
												10,391
											</td>
											<td>
												88.2%
											</td>
											<td>
												76.75%
											</td>
											<td>
												77.19%
											</td>
											<td>
												5,907
											</td>
										</tr>
										<tr bgcolor="#cccccc">
											<td>
												Black
											</td>
											<td>
												1,810
											</td>
											<td>
												1,714
											</td>
											<td>
												1,192
											</td>
											<td>
												69.5%
											</td>
											<td>
												1,063
											</td>
											<td>
												89.2%
											</td>
											<td>
												7.76%
											</td>
											<td>
												7.90%
											</td>
											<td>
												522
											</td>
										</tr>
										<tr bgcolor="#cccccc">
											<td>
												Latino
											</td>
											<td>
												9,935
											</td>
											<td>
												6,510
											</td>
											<td>
												3,684
											</td>
											<td>
												56.6%
											</td>
											<td>
												3,157
											</td>
											<td>
												85.7%
											</td>
											<td>
												23.99%
											</td>
											<td>
												23.45%
											</td>
											<td>
												2,826
											</td>
										</tr>
										<tr bgcolor="#cccccc">
											<td>
												Asian
											</td>
											<td>
												3,915
											</td>
											<td>
												2,839
											</td>
											<td>
												1,645
											</td>
											<td>
												57.9%
											</td>
											<td>
												1,380
											</td>
											<td>
												83.9%
											</td>
											<td>
												10.71%
											</td>
											<td>
												10.25%
											</td>
											<td>
												1,194
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td rowspan="5">
												<strong>
													2010
												</strong>
											</td>
											<td>
												Total
											</td>
											<td>
												27,381
											</td>
											<td>
												22,767
											</td>
											<td>
												13,864
											</td>
											<td>
												60.90%
											</td>
											<td>
												10,725
											</td>
											<td>
												77.36%
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												8,903
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												White
											</td>
											<td>
												20,828
											</td>
											<td>
												17,331
											</td>
											<td>
												11,016
											</td>
											<td>
												63.60%
											</td>
											<td>
												8,666
											</td>
											<td>
												78.67%
											</td>
											<td>
												79.46%
											</td>
											<td>
												80.80%
											</td>
											<td>
												6,315
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												Black
											</td>
											<td>
												1,728
											</td>
											<td>
												1,661
											</td>
											<td>
												932
											</td>
											<td>
												56.10%
											</td>
											<td>
												708
											</td>
											<td>
												75.97%
											</td>
											<td>
												6.72%
											</td>
											<td>
												6.60%
											</td>
											<td>
												729
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												Latino
											</td>
											<td>
												9,004
											</td>
											<td>
												5,816
											</td>
											<td>
												3,025
											</td>
											<td>
												52.00%
											</td>
											<td>
												2,058
											</td>
											<td>
												68.03%
											</td>
											<td>
												21.82%
											</td>
											<td>
												19.19%
											</td>
											<td>
												2,791
											</td>
										</tr>
										<tr bgcolor="#6699cc">
											<td>
												Asian
											</td>
											<td>
												3,860
											</td>
											<td>
												2,938
											</td>
											<td>
												1,472
											</td>
											<td>
												50.10%
											</td>
											<td>
												1,008
											</td>
											<td>
												68.48%
											</td>
											<td>
												10.62%
											</td>
											<td>
												9.40%
											</td>
											<td>
												1466
											</td>
										</tr>
										<tr bgcolor="#CCCCCC">
											<td rowspan="4" bgcolor="#CCCCCC">
												<div>
													<strong>
														2008
													</strong>
												</div>
											</td>
											<td bgcolor="#CCCCCC">
												Total
											</td>
											<td>
												<div>
													26,993
												</div>
											</td>
											<td>
												<div>
													21,816
												</div>
											</td>
											<td>
												<div>
													14,885
												</div>
											</td>
											<td>
												<div>
													68.2%
												</div>
											</td>
											<td>
												<div>
													13,828
												</div>
											</td>
											<td>
												<div>
													92.9%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													6,931
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													20,823
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													16,837
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													11,775
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													69.9%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,982
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													93.3%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													79.11%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													79.42%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													5,062
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,682
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,646
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,105
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													67.1%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,073
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													97.1%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.42%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.76%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													541
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8,859
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													5,193
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													3,263
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													62.8%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													2,961
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													90.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													21.92%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													21.41%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,930
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														2006
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													26,318
												</div>
											</td>
											<td>
												<div>
													21,250
												</div>
											</td>
											<td>
												<div>
													13,239
												</div>
											</td>
											<td>
												<div>
													62.3%
												</div>
											</td>
											<td>
												<div>
													10,104
												</div>
											</td>
											<td>
												<div>
													76.3%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													8,011
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													12,540
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													11,977
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													8,461
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													70.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6,739
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													79.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													63.91%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													66.70%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													3,516
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,665
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,600
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													847
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													52.9%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													608
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													71.8%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.40%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.02%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													753
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													8,180
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													4,676
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													2,481
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													53.1%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,717
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													69.2%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													18.74%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													16.99%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													2,195
												</div>
											</td>
										</tr>
										<tr bgcolor="#CCCCCC">
											<td rowspan="4" bgcolor="#CCCCCC">
												<div>
													<strong>
														2004
													</strong>
												</div>
											</td>
											<td bgcolor="#CCCCCC">
												Total
											</td>
											<td>
												<div>
													26,085
												</div>
											</td>
											<td>
												<div>
													20,693
												</div>
											</td>
											<td>
												<div>
													14,193
												</div>
											</td>
											<td>
												<div>
													68.6%
												</div>
											</td>
											<td>
												<div>
													12,807
												</div>
											</td>
											<td>
												<div>
													90.2%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													6,500
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													20,083
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													15,913
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													11,286
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													70.9%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,273
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													91.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													79.52%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													80.21%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													4,627
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,678
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,564
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,141
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													73.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,035
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													90.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8.04%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8.08%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													423
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8,127
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													4,433
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													2,455
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													55.4%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													2,081
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													84.8%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													17.30%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													16.25%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,978
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														2002
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													24,405
												</div>
											</td>
											<td>
												<div>
													19,642
												</div>
											</td>
											<td>
												<div>
													12,025
												</div>
											</td>
											<td>
												<div>
													61.2%
												</div>
											</td>
											<td>
												<div>
													8,355
												</div>
											</td>
											<td>
												<div>
													69.5%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													7,617
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													19,185
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													15,668
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													9,930
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													63.4%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7,011
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													70.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													82.58%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													83.91%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													5,738
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,503
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,440
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													801
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													55.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													549
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													68.5%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.66%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.57%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													639
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													6,964
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													3,974
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													2,017
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													50.8%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,206
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													59.8%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													16.77%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													14.43%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,957
												</div>
											</td>
										</tr>
										<tr bgcolor="#CECFCE">
											<td rowspan="4" bgcolor="#CECFCE">
												<div>
													<strong>
														2000
													</strong>
												</div>
											</td>
											<td bgcolor="#CECFCE">
												Total
											</td>
											<td>
												<div>
													24,749
												</div>
											</td>
											<td>
												<div>
													19,837
												</div>
											</td>
											<td>
												<div>
													13,061
												</div>
											</td>
											<td>
												<div>
													65.8%
												</div>
											</td>
											<td>
												<div>
													11,489
												</div>
											</td>
											<td>
												<div>
													88.0%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													6,776
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													19,770
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													16,060
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,839
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													67.5%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													9,618
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													88.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													82.99%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													83.71%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													5,221
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,678
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,606
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,039
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													64.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													873
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													84.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.95%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.60%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													567
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													6,514
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													3,489
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,919
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													55.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,597
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													83.2%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													14.69%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													13.90%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,570
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														1998
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													23,696
												</div>
											</td>
											<td>
												<div>
													19,016
												</div>
											</td>
											<td>
												<div>
													12,356
												</div>
											</td>
											<td>
												<div>
													65.0%
												</div>
											</td>
											<td>
												<div>
													9,593
												</div>
											</td>
											<td>
												<div>
													77.6%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													6,660
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													19,121
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													15,582
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													10,383
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													66.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													8,225
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													79.2%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													84.03%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													85.74%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													5,199
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,579
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,505
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													962
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													63.9%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													669
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													69.5%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7.79%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.97%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													543
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													6,264
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													3,154
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,749
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													55.5%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,338
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													76.5%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													14.16%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													13.95%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,405
												</div>
											</td>
										</tr>
										<tr bgcolor="#CECFCE">
											<td rowspan="4" bgcolor="#CECFCE">
												<div>
													<strong>
														1996
													</strong>
												</div>
											</td>
											<td bgcolor="#CECFCE">
												Total
											</td>
											<td>
												<div>
													22,871
												</div>
											</td>
											<td>
												<div>
													18,081
												</div>
											</td>
											<td>
												<div>
													12,827
												</div>
											</td>
											<td>
												<div>
													70.9%
												</div>
											</td>
											<td>
												<div>
													11,079
												</div>
											</td>
											<td>
												<div>
													86.4%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													5,254
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													18,490
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													14,981
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,892
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													72.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													9,445
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													86.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													84.91%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													85.25%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													4,089
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,363
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,328
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													904
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													68.1%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													773
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													85.5%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.05%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													6.98%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													424
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													5,723
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													2,743
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,641
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													59.8%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,291
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													78.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													12.79%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													11.65%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,102
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														1994
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													22,639
												</div>
											</td>
											<td>
												<div>
													21,199
												</div>
											</td>
											<td>
												<div>
													12,544
												</div>
											</td>
											<td>
												<div>
													59.2%
												</div>
											</td>
											<td>
												<div>
													10,417
												</div>
											</td>
											<td>
												<div>
													83.0%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													8,655
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													18,799
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													17,580
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													10,978
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													62.4%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													9,223
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													84.0%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													87.52%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													88.54%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6,602
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,237
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,214
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													742
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													61.1%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													540
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													72.8%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													5.92%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													5.18%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													472
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													5,736
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													2,698
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,427
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													52.90%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,183
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													82.9%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													11.38%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													11.36%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,271
												</div>
											</td>
										</tr>
										<tr bgcolor="#CECFCE">
											<td rowspan="4" bgcolor="#CECFCE">
												<div>
													<strong>
														1992
													</strong>
												</div>
											</td>
											<td bgcolor="#CECFCE">
												Total
											</td>
											<td>
												<div>
													22,340
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													12,884
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													11,769
												</div>
											</td>
											<td>
												<div>
													91.3%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													18,759
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													11,349
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,482
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													92.4%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													88.09%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													89.06%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,268
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													812
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													712
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													87.7%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													6.30%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													6.05%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													5,443
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,384
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,135
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													82.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10.74%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													9.64%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														1990
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													21,289
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													11,666
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													9,027
												</div>
											</td>
											<td>
												<div>
													77.4%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													17,998
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													10,259
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													8,063
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													78.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													87.94%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													89.32%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,173
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													732
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													493
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													67.3%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.27%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													5.46%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													4,739
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,218
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													844
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													69.3%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													10.44%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													9.35%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr bgcolor="#CECFCE">
											<td rowspan="4" bgcolor="#CECFCE">
												<div>
													<strong>
														1988
													</strong>
												</div>
											</td>
											<td bgcolor="#CECFCE">
												Total
											</td>
											<td>
												<div>
													20,194
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													11,935
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													10,440
												</div>
											</td>
											<td>
												<div>
													87.5%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													17,084
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,370
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													9,123
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													88.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													86.89%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													87.39%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,252
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													870
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													731
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													84.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.29%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.00%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													4,261
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,040
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													827
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													79.5%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8.71%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.92%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														1986
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													19,421
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													11,128
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													8,798
												</div>
											</td>
											<td>
												<div>
													79.1%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													16,508
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													9,839
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7,808
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													79.4%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													88.42%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													88.75%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,185
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													776
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													578
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													74.5%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.97%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													6.57%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													3,690
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													993
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													731
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													73.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													8.92%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													8.31%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr bgcolor="#CECFCE">
											<td rowspan="4" bgcolor="#CECFCE">
												<div>
													<strong>
														1984
													</strong>
												</div>
											</td>
											<td bgcolor="#CECFCE">
												Total
											</td>
											<td>
												<div>
													19,063
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													11,724
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													10,618
												</div>
											</td>
											<td>
												<div>
													90.6%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													15,994
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													10,252
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													9,308
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													90.8%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													87.44%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													87.66%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,430
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													941
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													824
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													87.6%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8.03%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.76%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CECFCE">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													3,164
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													978
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													826
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													84.5%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8.34%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.78%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr bgcolor="#639ACE">
											<td rowspan="4" bgcolor="#639ACE">
												<div>
													<strong>
														1982
													</strong>
												</div>
											</td>
											<td bgcolor="#639ACE">
												Total
											</td>
											<td>
												<div>
													17,840
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													10,276
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													8,670
												</div>
											</td>
											<td>
												<div>
													84.4%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												White
											</td>
											<td bgcolor="#639ACE">
												<div>
													15,075
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													9,090
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7,703
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													84.7%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													88.46%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													88.85%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Black
											</td>
											<td bgcolor="#639ACE">
												<div>
													1,177
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													758
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													628
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													82.8%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7.38%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7.24%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#639ACE">
												Latino
											</td>
											<td bgcolor="#639ACE">
												<div>
													2,944
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													860
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													659
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													76.6%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													8.37%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													7.60%
												</div>
											</td>
											<td bgcolor="#639ACE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr bgcolor="#CCCCCC">
											<td rowspan="4" bgcolor="#CCCCCC">
												<div>
													<strong>
														1980
													</strong>
												</div>
											</td>
											<td bgcolor="#CCCCCC">
												Total
											</td>
											<td>
												<div>
													16,503
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													9,902
												</div>
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
											<td>
												<div>
													8,879
												</div>
											</td>
											<td>
												<div>
													89.7%
												</div>
											</td>
											<td>
												 
											</td>
											<td>
												 
											</td>
											<td>
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CCCCCC">
												White
											</td>
											<td bgcolor="#CECFCE">
												<div>
													14,193
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													8,814
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7,934
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													90.0%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													89.01%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													89.36%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CCCCCC">
												Black
											</td>
											<td bgcolor="#CECFCE">
												<div>
													1,254
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													771
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													674
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													87.4%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.79%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.59%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
										<tr>
											<td bgcolor="#CCCCCC">
												Latino
											</td>
											<td bgcolor="#CECFCE">
												<div>
													2,574
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													695
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													587
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													84.5%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													7.02%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													6.61%
												</div>
											</td>
											<td bgcolor="#CECFCE">
												<div>
													n/a
												</div>
											</td>
										</tr>
									</tbody>
								</table>



									<!-- DATA TABLE ENDS -->

								</article>

						</div>
					</div>
				</div>

			<!-- Footer -->
				<?php include("inc-footer.php"); ?>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>