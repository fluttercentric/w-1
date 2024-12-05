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

									<h2>Latino Voter Research</h2>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et rhoncus ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel bibendum urna. Suspendisse eu tortor in lectus ornare dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla lectus leo, rutrum sed risus eget, rutrum tempor eros.</p>

									<table role="table">
									  <thead role="rowgroup">
									    <tr role="row">
									      <th role="columnheader">Year</th>
									      <th role="columnheader">Race</th>
									      <th role="columnheader">VAP</th>
									      <th role="columnheader">CVAP</th>
									      <th role="columnheader">REG</th>
									      <th role="columnheader">REG %</th>
									      <th role="columnheader">TO</th>
									      <th role="columnheader">TO %</th>
									      <th role="columnheader">REG Share</th>
									      <th role="columnheader">TO Share</th>
									      <th role="columnheader">VR Potential</th>
									    </tr>
									  </thead>
									  <tbody role="rowgroup">
									    <tr role="row">
									      <td role="cell">2016</td>
									      <td role="cell">Total</td>
									      <td role="cell">245,502</td>
									      <td role="cell">224,059</td>
									      <td role="cell">157,596</td>
									      <td role="cell">70.3</td>
									      <td role="cell">137,537</td>
									      <td role="cell">87.3</td>
									      <td role="cell"></td>
									      <td role="cell"></td>
									      <td role="cell">66,463</td>
									    </tr>
									    <tr role="row">
									      <td role="cell">2016</td>
									      <td role="cell">White</td>
									      <td role="cell">157,395</td>
									      <td role="cell">154,450</td>
									      <td role="cell">114,151</td>
									      <td role="cell">73.9</td>
									      <td role="cell">100,849</td>
									      <td role="cell">88.3</td>
									      <td role="cell">72.4</td>
									      <td role="cell">73.3</td>
									      <td role="cell">40,299</td>
									    </tr>
									    <tr role="row">
									      <td role="cell">2016</td>
									      <td role="cell">Black</td>
									      <td role="cell">30,608</td>
									      <td role="cell">28,808</td>
									      <td role="cell">19,984</td>
									      <td role="cell">69.4</td>
									      <td role="cell">17,119</td>
									      <td role="cell">85.7</td>
									      <td role="cell">12.7</td>
									      <td role="cell">12.4</td>
									      <td role="cell">8,824</td>
									    </tr>
									    <tr role="row">
									      <td role="cell">2016</td>
									      <td role="cell">Latino</td>
									      <td role="cell">38,990</td>
									      <td role="cell">26,662</td>
									      <td role="cell">15,267</td>
									      <td role="cell">57.3</td>
									      <td role="cell">12,682</td>
									      <td role="cell">83.1</td>
									      <td role="cell">9.7</td>
									      <td role="cell">9.2</td>
									      <td role="cell">11,395</td>
									    </tr>
									    <tr role="row">
									      <td role="cell">2016</td>
									      <td role="cell">Asian</td>
									      <td role="cell">14,881</td>
									      <td role="cell">10,283</td>
									      <td role="cell">5,785</td>
									      <td role="cell">56.3</td>
									      <td role="cell">5,043</td>
									      <td role="cell">87.2</td>
									      <td role="cell">3.7</td>
									      <td role="cell">3.7</td>
									      <td role="cell">4,498</td>
									    </tr>
									  </tbody>
									</table>

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