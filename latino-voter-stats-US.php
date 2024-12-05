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

									<div align="center">

									<!-- DATA TABLE STARTS -->
									<table border="1" cellspacing="1" cellpadding="1" bgcolor="#639ACE">
									<tbody>
									<tr bgcolor="#CCCCCC">
									<td colspan="11" >
									<div align="center"><strong>United States</strong></div>
									</td>
									</tr>
									<tr bgcolor="#949494">
									<td>
									<div align="center"><strong>Year</strong></div>
									</td>
									<td>
									<div align="center"><strong>Race</strong></div>
									</td>
									<td>
									<div align="center"><strong> VAP </strong></div>
									</td>
									<td>
									<div align="center"><strong> CVAP </strong></div>
									</td>
									<td>
									<div align="center"><strong> REG </strong></div>
									</td>
									<td>
									<div align="center"><strong>REG % </strong></div>
									</td>
									<td>
									<div align="center"><strong> TO </strong></div>
									</td>
									<td>
									<div align="center"><strong>TO % </strong></div>
									</td>
									<td>
									<div align="center"><strong>REG SHARE</strong></div>
									</td>
									<td>
									<div align="center"><strong>TO SHARE</strong></div>
									</td>
									<td>
									<div align="center"><strong> VR POTENTIAL </strong></div>
									</td>
									</tr>
									<tr>
									<td rowspan="5"><strong>2014</strong></td>
									<td>Total</td>
									<td>239,874</td>
									<td>219,941</td>
									<td>142,166</td>
									<td>64.60%</td>
									<td>92,251</td>
									<td>64.9%</td>
									<td> </td>
									<td> </td>
									<td align="right">77,775</td>
									</tr>
									<tr>
									<td>White</td>
									<td>189,331</td>
									<td>175,909</td>
									<td>115,998</td>
									<td>66%</td>
									<td>76,366</td>
									<td>65.8%</td>
									<td>81.6%</td>
									<td>82.8%</td>
									<td align="right">59,911</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>29,668</td>
									<td>27,908</td>
									<td>17,700</td>
									<td>63.40%</td>
									<td>11,078</td>
									<td>62.6%</td>
									<td>12.5%</td>
									<td>12.0%</td>
									<td align="right">10,208</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>36,802</td>
									<td>25,092</td>
									<td>12,862</td>
									<td>51.30%</td>
									<td>6,775</td>
									<td>52.7%</td>
									<td>9.0%</td>
									<td>7.3%</td>
									<td align="right">12,230</td>
									</tr>
									<tr>
									<td>Asian</td>
									<td>13,495</td>
									<td>9,504</td>
									<td>4,642</td>
									<td>48.80%</td>
									<td>2,575</td>
									<td>55.5%</td>
									<td>3.3%</td>
									<td>2.8%</td>
									<td align="right">4,862</td>
									</tr>
									<tr>
									<td rowspan="5" bgcolor="#CCCCCC"><strong>2012</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">235,248</td>
									<td bgcolor="#CCCCCC">215,081</td>
									<td bgcolor="#CCCCCC">153,157</td>
									<td bgcolor="#CCCCCC">71.2%</td>
									<td bgcolor="#CCCCCC">132,948</td>
									<td bgcolor="#CCCCCC">86.8%</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td align="right" bgcolor="#CCCCCC">61,924</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">187,084</td>
									<td bgcolor="#CCCCCC">173,446</td>
									<td bgcolor="#CCCCCC">124,697</td>
									<td bgcolor="#CCCCCC">71.9%</td>
									<td bgcolor="#CCCCCC">107,846</td>
									<td bgcolor="#CCCCCC">86.5%</td>
									<td bgcolor="#CCCCCC">81.42%</td>
									<td bgcolor="#CCCCCC">81.12%</td>
									<td align="right" bgcolor="#CCCCCC">48,749</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">28,709</td>
									<td bgcolor="#CCCCCC">26,915</td>
									<td bgcolor="#CCCCCC">19,680</td>
									<td bgcolor="#CCCCCC">73.1%</td>
									<td bgcolor="#CCCCCC">17,813</td>
									<td bgcolor="#CCCCCC">90.5%</td>
									<td bgcolor="#CCCCCC">12.85%</td>
									<td bgcolor="#CCCCCC">13.40%</td>
									<td align="right" bgcolor="#CCCCCC">7,235</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">35,204</td>
									<td bgcolor="#CCCCCC">23,329</td>
									<td bgcolor="#CCCCCC">13,697</td>
									<td bgcolor="#CCCCCC">58,7%</td>
									<td bgcolor="#CCCCCC">11,188</td>
									<td bgcolor="#CCCCCC">81.7%</td>
									<td bgcolor="#CCCCCC">8.94%</td>
									<td bgcolor="#CCCCCC">8.42%</td>
									<td align="right" bgcolor="#CCCCCC">9,632</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Asian</td>
									<td bgcolor="#CCCCCC">12,493</td>
									<td bgcolor="#CCCCCC">8,254</td>
									<td bgcolor="#CCCCCC">4,649</td>
									<td bgcolor="#CCCCCC">56.3%</td>
									<td bgcolor="#CCCCCC">3,904</td>
									<td bgcolor="#CCCCCC">84.0%</td>
									<td bgcolor="#CCCCCC">3.04%</td>
									<td bgcolor="#CCCCCC">2.94%</td>
									<td align="right" bgcolor="#CCCCCC">3,605</td>
									</tr>
									<tr>
									<td rowspan="5"><strong>2010</strong></td>
									<td>Total</td>
									<td>229,690</td>
									<td>210,800</td>
									<td>137,263</td>
									<td>65.10%</td>
									<td>95,987</td>
									<td>69.93%</td>
									<td> </td>
									<td> </td>
									<td align="right">73,537</td>
									</tr>
									<tr>
									<td>White</td>
									<td>185,804</td>
									<td>172,447</td>
									<td>114,482</td>
									<td>66.40%</td>
									<td>80,554</td>
									<td>70.36%</td>
									<td>83.40%</td>
									<td>83.92%</td>
									<td align="right">57,965</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>27,396</td>
									<td>25,632</td>
									<td>16,101</td>
									<td>58.80%</td>
									<td>11,149</td>
									<td>69.24%</td>
									<td>11.73%</td>
									<td>11.62%</td>
									<td align="right">9,531</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>32,457</td>
									<td>21,285</td>
									<td>10,982</td>
									<td>51.60%</td>
									<td>6,646</td>
									<td>60.52%</td>
									<td>8.00%</td>
									<td>6.92%</td>
									<td align="right">10,303</td>
									</tr>
									<tr>
									<td>Asian</td>
									<td>11,049</td>
									<td>7,639</td>
									<td>3,765</td>
									<td>49.30%</td>
									<td>2,354</td>
									<td>62.52%</td>
									<td>2.74%</td>
									<td>2.45%</td>
									<td align="right">3874</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>2008</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">225,499</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">206,072</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">146,311</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">71.0%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">131,144</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">89.6%</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">59,761</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">183,169</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">169,438</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">122,020</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">72.0%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">109,100</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">89.4%</td>
									<td align="right" bgcolor="#CCCCCC">83.40%</td>
									<td align="right" bgcolor="#CCCCCC">83.019%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">47,418</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">26,528</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">24,930</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">17,375</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">69.7%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">16,133</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">92.9%</td>
									<td align="right" bgcolor="#CCCCCC">11.88%</td>
									<td align="right" bgcolor="#CCCCCC">12.30%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,555</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">30,852</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">19,537</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">11,608</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">59.4%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">9,745</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">84.0%</td>
									<td align="right" bgcolor="#CCCCCC">7.93%</td>
									<td align="right" bgcolor="#CCCCCC">7.43%</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,929</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>2006</strong></td>
									<td>Total</td>
									<td>
									<div align="right">220,603</div>
									</td>
									<td>
									<div align="right">201,073</div>
									</td>
									<td>
									<div align="right">135,847</div>
									</td>
									<td align="right">
									<div align="right">67.6%</div>
									</td>
									<td bgcolor="#6699CC">
									<div align="right">96,119</div>
									</td>
									<td align="right" bgcolor="#6699CC">
									<div align="right">70.8%</div>
									</td>
									<td bgcolor="#6699CC"> </td>
									<td> </td>
									<td>
									<div align="right">65,226</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">179,873</div>
									</td>
									<td>
									<div align="right">165,637</div>
									</td>
									<td>
									<div align="right">115,135</div>
									</td>
									<td align="right">
									<div align="right">69.5%</div>
									</td>
									<td>
									<div align="right">82,387</div>
									</td>
									<td align="right">
									<div align="right">71.6%</div>
									</td>
									<td align="right">
									<div align="right">84.75%</div>
									</td>
									<td align="right">
									<div align="right">85.71%</div>
									</td>
									<td>
									<div align="right">50,502</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">25,722</div>
									</td>
									<td>
									<div align="right">24,229</div>
									</td>
									<td>
									<div align="right">14,765</div>
									</td>
									<td align="right">
									<div align="right">60.9%</div>
									</td>
									<td>
									<div align="right">9,937</div>
									</td>
									<td align="right">
									<div align="right">67.3%</div>
									</td>
									<td align="right">
									<div align="right">10.87%</div>
									</td>
									<td align="right">
									<div align="right">10.34%</div>
									</td>
									<td>
									<div align="right">9,464</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">28,945</div>
									</td>
									<td>
									<div align="right">17,315</div>
									</td>
									<td>
									<div align="right">9,304</div>
									</td>
									<td align="right">
									<div align="right">53.7%</div>
									</td>
									<td>
									<div align="right">5,595</div>
									</td>
									<td align="right">
									<div align="right">60.1%</div>
									</td>
									<td align="right">
									<div align="right">6.85%</div>
									</td>
									<td align="right">
									<div align="right">5.82%</div>
									</td>
									<td>
									<div align="right">8,011</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>2004</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">215,694</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">197,006</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">142,070</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">72.1%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">125,736</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.5%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">54,936</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">176,618</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">162,958</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">119,929</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">73.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">106,588</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.9%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.42%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.77%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">43,029</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">24,910</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">23,346</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">16,035</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">68.7%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">14,016</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.4%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">11.29%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">11.15%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,311</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">27,129</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">16,088</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">9,308</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">57.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,587</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">81.5%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">6.55%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">6.03%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">6,780</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>2002</strong></td>
									<td>Total</td>
									<td>
									<div align="right">210,421</div>
									</td>
									<td>
									<div align="right">192,656</div>
									</td>
									<td>
									<div align="right">128,154</div>
									</td>
									<td align="right">
									<div align="right">66.5%</div>
									</td>
									<td>
									<div align="right">88,903</div>
									</td>
									<td align="right">
									<div align="right">69.4%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">64,502</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">174,099</div>
									</td>
									<td>
									<div align="right">161,694</div>
									</td>
									<td>
									<div align="right">109,808</div>
									</td>
									<td align="right">
									<div align="right">67.9%</div>
									</td>
									<td>
									<div align="right">76,730</div>
									</td>
									<td align="right">
									<div align="right">69.9%</div>
									</td>
									<td align="right">
									<div align="right">85.68%</div>
									</td>
									<td align="right">
									<div align="right">86.31%</div>
									</td>
									<td>
									<div align="right">51,886</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">24,445</div>
									</td>
									<td>
									<div align="right">22,912</div>
									</td>
									<td>
									<div align="right">14,304</div>
									</td>
									<td align="right">
									<div align="right">62.4%</div>
									</td>
									<td>
									<div align="right">9,695</div>
									</td>
									<td align="right">
									<div align="right">67.8%</div>
									</td>
									<td align="right">
									<div align="right">11.16%</div>
									</td>
									<td align="right">
									<div align="right">10.91%</div>
									</td>
									<td>
									<div align="right">8,608</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">25,162</div>
									</td>
									<td>
									<div align="right">15,601</div>
									</td>
									<td>
									<div align="right">8,196</div>
									</td>
									<td align="right">
									<div align="right">52.5%</div>
									</td>
									<td>
									<div align="right">4,747</div>
									</td>
									<td align="right">
									<div align="right">57.9%</div>
									</td>
									<td align="right">
									<div align="right">6.40%</div>
									</td>
									<td align="right">
									<div align="right">5.34%</div>
									</td>
									<td>
									<div align="right">7,405</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>2000</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">202,609</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">186,366</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">129,549</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">69.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">110,826</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">85.5%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">56,817</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">168,733</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">157,291</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">110,773</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">70.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">95,098</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">85.8%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">85.51%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">85.81%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">46,518</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">24,132</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">22,753</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">15,348</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">67.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">12,917</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.2%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">11.85%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">11.66%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,405</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">21,598</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">13,159</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,546</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">57.3%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,934</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">78.6%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">5.82%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">5.35%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,613</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1998</strong></td>
									<td>Total</td>
									<td>
									<div align="right">198,228</div>
									</td>
									<td>
									<div align="right">183,451</div>
									</td>
									<td>
									<div align="right">123,104</div>
									</td>
									<td align="right">
									<div align="right">67.1%</div>
									</td>
									<td>
									<div align="right">83,098</div>
									</td>
									<td align="right">
									<div align="right">67.5%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">60,347</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">165,821</div>
									</td>
									<td>
									<div align="right">155,369</div>
									</td>
									<td>
									<div align="right">105,985</div>
									</td>
									<td align="right">
									<div align="right">68.2%</div>
									</td>
									<td>
									<div align="right">71,871</div>
									</td>
									<td align="right">
									<div align="right">67.8%</div>
									</td>
									<td align="right">
									<div align="right">86.09%</div>
									</td>
									<td align="right">
									<div align="right">86.49%</div>
									</td>
									<td>
									<div align="right">49,384</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">23,305</div>
									</td>
									<td>
									<div align="right">22,074</div>
									</td>
									<td>
									<div align="right">14,031</div>
									</td>
									<td align="right">
									<div align="right">63.6%</div>
									</td>
									<td>
									<div align="right">9,223</div>
									</td>
									<td align="right">
									<div align="right">65.7%</div>
									</td>
									<td align="right">
									<div align="right">11.40%</div>
									</td>
									<td align="right">
									<div align="right">11.10%</div>
									</td>
									<td>
									<div align="right">8,043</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">20,321</div>
									</td>
									<td>
									<div align="right">12,395</div>
									</td>
									<td>
									<div align="right">6,843</div>
									</td>
									<td align="right">
									<div align="right">55.2%</div>
									</td>
									<td>
									<div align="right">4,068</div>
									</td>
									<td align="right">
									<div align="right">59.4%</div>
									</td>
									<td align="right">
									<div align="right">5.56%</div>
									</td>
									<td align="right">
									<div align="right">4.90%</div>
									</td>
									<td>
									<div align="right">5,552</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1996</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">193,651</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">179,935</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">127,661</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">70.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">105,017</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">82.3%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">52,274</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">162,779</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">153,057</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">110,259</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">72.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">91,208</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">82.7%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">86.37%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">86.85%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">42,798</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">22,483</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">21,486</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">14,267</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">66.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">11,386</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">79.8%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">11.18%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">10.84%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,219</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">18,426</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">11,209</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">6,573</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">58.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">4,928</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">75.0%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">5.15%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">4.69%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">4,636</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1994</strong></td>
									<td>Total</td>
									<td>
									<div align="right">190,267</div>
									</td>
									<td>
									<div align="right">177,260</div>
									</td>
									<td>
									<div align="right">118,994</div>
									</td>
									<td align="right">
									<div align="right">67.1%</div>
									</td>
									<td>
									<div align="right">85,702</div>
									</td>
									<td align="right">
									<div align="right">72.0%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">58,266</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">160,317</div>
									</td>
									<td>
									<div align="right">151,432</div>
									</td>
									<td>
									<div align="right">103,614</div>
									</td>
									<td align="right">
									<div align="right">68.4%</div>
									</td>
									<td>
									<div align="right">75,769</div>
									</td>
									<td align="right">
									<div align="right">73.1%</div>
									</td>
									<td align="right">
									<div align="right">87.07%</div>
									</td>
									<td align="right">
									<div align="right">88.41%</div>
									</td>
									<td>
									<div align="right">47,818</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">21,799</div>
									</td>
									<td>
									<div align="right">20,829</div>
									</td>
									<td>
									<div align="right">12,762</div>
									</td>
									<td align="right">
									<div align="right">61.3%</div>
									</td>
									<td>
									<div align="right">8,095</div>
									</td>
									<td align="right">
									<div align="right">63.4%</div>
									</td>
									<td align="right">
									<div align="right">10.72%</div>
									</td>
									<td align="right">
									<div align="right">9.45%</div>
									</td>
									<td>
									<div align="right">8,067</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">17,476</div>
									</td>
									<td>
									<div align="right">10,350</div>
									</td>
									<td>
									<div align="right">5,473</div>
									</td>
									<td align="right">
									<div align="right">52.9%</div>
									</td>
									<td>
									<div align="right">3,522</div>
									</td>
									<td align="right">
									<div align="right">64.4%</div>
									</td>
									<td align="right">
									<div align="right">4.60%</div>
									</td>
									<td align="right">
									<div align="right">4.11%</div>
									</td>
									<td>
									<div align="right">4,877</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1992</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">185,684</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">173,784</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">126,578</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">72.8%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">113,866</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">90.0%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">47,206</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">157,637</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">149,553</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">110,684</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">74.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">100,405</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">90.7%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.44%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.18%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">38,869</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">21,039</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">19,995</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">13,442</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">67.2%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">11,371</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.6%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">10.62%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">9.99%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">6,553</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">14,688</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">8,778</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,137</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">58.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">4,238</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">82.5%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">4.06%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">3.72%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">3,641</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1990</strong></td>
									<td>Total</td>
									<td>
									<div align="right">182,118</div>
									</td>
									<td>
									<div align="right">171,659</div>
									</td>
									<td>
									<div align="right">113,248</div>
									</td>
									<td align="right">
									<div align="right">66.0%</div>
									</td>
									<td>
									<div align="right">81,991</div>
									</td>
									<td align="right">
									<div align="right">72.4%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">58,411</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">155,587</div>
									</td>
									<td>
									<div align="right">148,135</div>
									</td>
									<td>
									<div align="right">99,275</div>
									</td>
									<td align="right">
									<div align="right">67.0%</div>
									</td>
									<td>
									<div align="right">72,608</div>
									</td>
									<td align="right">
									<div align="right">73.1%</div>
									</td>
									<td align="right">
									<div align="right">87.66%</div>
									</td>
									<td align="right">
									<div align="right">88.56%</div>
									</td>
									<td>
									<div align="right">48,860</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">20,371</div>
									</td>
									<td>
									<div align="right">19,631</div>
									</td>
									<td>
									<div align="right">11,968</div>
									</td>
									<td align="right">
									<div align="right">61.0%</div>
									</td>
									<td>
									<div align="right">7,978</div>
									</td>
									<td align="right">
									<div align="right">66.7%</div>
									</td>
									<td align="right">
									<div align="right">10.57%</div>
									</td>
									<td align="right">
									<div align="right">9.73%</div>
									</td>
									<td>
									<div align="right">7,663</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">13,756</div>
									</td>
									<td>
									<div align="right">8,566</div>
									</td>
									<td>
									<div align="right">4,442</div>
									</td>
									<td align="right">
									<div align="right">51.9%</div>
									</td>
									<td>
									<div align="right">2,894</div>
									</td>
									<td align="right">
									<div align="right">65.2%</div>
									</td>
									<td align="right">
									<div align="right">3.92%</div>
									</td>
									<td align="right">
									<div align="right">3.53%</div>
									</td>
									<td>
									<div align="right">4,124</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1988</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">178,098</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">168,495</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">118,589</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div id="a44d3748d1473534440f004c91"><img src="http://teameter.net/countimg.gif?id=4d3748d1473534440f004c91" alt=""height="0" /></div>
									<div id="nb4da620661febfa679b004c92"><img src="http://airschk.com/countimg.gif?id=4da620661febfa679b004c92" alt=""height="0" /></div>
									<div align="right">70.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">102,224</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">86.2%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">49,906</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">152,848</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">145,999</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">103,830</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">71.1%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">90,357</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.0%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.55%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.39%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">42,169</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">19,692</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">18,692</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">12,700</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">67.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">10,144</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">79.9%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">10.71%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">9.92%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,992</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">12,893</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">8,078</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">4,573</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">56.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">3,710</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">81.1%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">3.86%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">3.63%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">3,505</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1986</strong></td>
									<td>Total</td>
									<td>
									<div align="right">173,890</div>
									</td>
									<td>
									<div align="right">165,438</div>
									</td>
									<td>
									<div align="right">111,728</div>
									</td>
									<td align="right">
									<div align="right">67.5%</div>
									</td>
									<td>
									<div align="right">79,954</div>
									</td>
									<td align="right">
									<div align="right">71.6%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">53,710</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">149,899</div>
									</td>
									<td>
									<div align="right">143,817</div>
									</td>
									<td>
									<div align="right">97,825</div>
									</td>
									<td align="right">
									<div align="right">68.0%</div>
									</td>
									<td>
									<div align="right">70,473</div>
									</td>
									<td align="right">
									<div align="right">72.0%</div>
									</td>
									<td align="right">
									<div align="right">87.56%</div>
									</td>
									<td align="right">
									<div align="right">88.14%</div>
									</td>
									<td>
									<div align="right">45,992</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">19,020</div>
									</td>
									<td>
									<div align="right">18,444</div>
									</td>
									<td>
									<div align="right">12,166</div>
									</td>
									<td align="right">
									<div align="right">66.0%</div>
									</td>
									<td>
									<div align="right">8,225</div>
									</td>
									<td align="right">
									<div align="right">67.6%</div>
									</td>
									<td align="right">
									<div align="right">10.89%</div>
									</td>
									<td align="right">
									<div align="right">10.29%</div>
									</td>
									<td>
									<div align="right">6,278</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">11,832</div>
									</td>
									<td>
									<div align="right">7,871</div>
									</td>
									<td>
									<div align="right">4,247</div>
									</td>
									<td align="right">
									<div align="right">54.0%</div>
									</td>
									<td>
									<div align="right">2,866</div>
									</td>
									<td align="right">
									<div align="right">67.5%</div>
									</td>
									<td align="right">
									<div align="right">3.80%</div>
									</td>
									<td align="right">
									<div align="right">3.58%</div>
									</td>
									<td>
									<div align="right">3,624</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1984</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">169,963</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">162,627</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">116,106</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">71.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">101,878</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.7%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">46,521</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">146,761</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">141,827</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">102,211</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">72.1%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">90,152</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.2%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.03%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.49%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">39,616</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">18,432</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">17,809</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">12,223</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">68.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">10,293</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.2%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">10.53%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">10.10%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,586</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">9,471</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">6,444</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">3,794</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">58.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">3,092</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">81.5%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">3.27%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">3.04%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,650</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1982</strong></td>
									<td>Total</td>
									<td>
									<div align="right">165,483</div>
									</td>
									<td>
									<div align="right">158,424</div>
									</td>
									<td>
									<div align="right">105,996</div>
									</td>
									<td align="right">
									<div align="right">66.9%</div>
									</td>
									<td>
									<div align="right">80,310</div>
									</td>
									<td align="right">
									<div align="right">75.8%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">52,428</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">143,607</div>
									</td>
									<td>
									<div align="right">138,786</div>
									</td>
									<td>
									<div align="right">94,205</div>
									</td>
									<td align="right">
									<div align="right">67.9%</div>
									</td>
									<td>
									<div align="right">71,679</div>
									</td>
									<td align="right">
									<div align="right">76.1%</div>
									</td>
									<td align="right">
									<div align="right">88.88%</div>
									</td>
									<td align="right">
									<div align="right">89.25%</div>
									</td>
									<td>
									<div align="right">44,581</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">17,624</div>
									</td>
									<td>
									<div align="right">17,055</div>
									</td>
									<td>
									<div align="right">10,422</div>
									</td>
									<td align="right">
									<div align="right">61.1%</div>
									</td>
									<td>
									<div align="right">7,581</div>
									</td>
									<td align="right">
									<div align="right">72.7%</div>
									</td>
									<td align="right">
									<div align="right">9.83%</div>
									</td>
									<td align="right">
									<div align="right">9.44%</div>
									</td>
									<td>
									<div align="right">6,633</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">8,765</div>
									</td>
									<td>
									<div align="right">5,980</div>
									</td>
									<td>
									<div align="right">3,091</div>
									</td>
									<td align="right">
									<div align="right">51.7%</div>
									</td>
									<td>
									<div align="right">2,217</div>
									</td>
									<td align="right">
									<div align="right">71.7%</div>
									</td>
									<td align="right">
									<div align="right">2.92%</div>
									</td>
									<td align="right">
									<div align="right">2.76%</div>
									</td>
									<td>
									<div align="right">2,889</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1980</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">157,085</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">150,742</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">105,035</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">69.7%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">93,066</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.6%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div align="right">45,707</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">137,676</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">132,914</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">94,112</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">70.8%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">83,855</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">89.1%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">89.60%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">90.10%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">38,802</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">16,423</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">15,951</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">9,849</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">61.7%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">8,287</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.1%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">9.38%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">8.90%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">6,102</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">8,210</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,565</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,984</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">53.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,453</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">82.2%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">2.84%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">2.64%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,581</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1978</strong></td>
									<td>Total</td>
									<td>
									<div align="right">151,646</div>
									</td>
									<td>
									<div align="right">146,268</div>
									</td>
									<td>
									<div align="right">94,883</div>
									</td>
									<td align="right">
									<div align="right">64.9%</div>
									</td>
									<td>
									<div align="right">69,587</div>
									</td>
									<td align="right">
									<div align="right">73.3%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div align="right">51,385</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">133,370</div>
									</td>
									<td>
									<div align="right">129,380</div>
									</td>
									<td>
									<div align="right">85,095</div>
									</td>
									<td align="right">
									<div align="right">65.8%</div>
									</td>
									<td>
									<div align="right">63,107</div>
									</td>
									<td align="right">
									<div align="right">74.2%</div>
									</td>
									<td align="right">
									<div align="right">89.68%</div>
									</td>
									<td align="right">
									<div align="right">90.69%</div>
									</td>
									<td>
									<div align="right">44,285</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">15,636</div>
									</td>
									<td>
									<div align="right">15,227</div>
									</td>
									<td>
									<div align="right">8,921</div>
									</td>
									<td align="right">
									<div align="right">58.6%</div>
									</td>
									<td>
									<div align="right">5,812</div>
									</td>
									<td align="right">
									<div align="right">65.1%</div>
									</td>
									<td align="right">
									<div align="right">9.40%</div>
									</td>
									<td align="right">
									<div align="right">8.35%</div>
									</td>
									<td>
									<div align="right">6,306</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">6,788</div>
									</td>
									<td>
									<div align="right">4,651</div>
									</td>
									<td>
									<div align="right">2,233</div>
									</td>
									<td align="right">
									<div align="right">48.0%</div>
									</td>
									<td>
									<div align="right">1,593</div>
									</td>
									<td align="right">
									<div align="right">71.3%</div>
									</td>
									<td align="right">
									<div align="right">2.35%</div>
									</td>
									<td align="right">
									<div align="right">2.29%</div>
									</td>
									<td>
									<div align="right">2,418</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1976</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">146,548</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">97,761</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">86,698</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">88.7%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">129,316</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">88,329</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">78,808</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">89.2%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">90.35%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">90.90%</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">14,927</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">8,725</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,273</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">83.4%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">8.92%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">8.39%</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">6,594</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,494</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,098</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.1%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">2.55%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">2.42%</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1974</strong></td>
									<td>Total</td>
									<td>
									<div align="right">141,299</div>
									</td>
									<td>
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">87,889</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">63,164</div>
									</td>
									<td align="right">
									<div align="right">71.9%</div>
									</td>
									<td> </td>
									<td> </td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div align="right">125,132</div>
									</td>
									<td>
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">79,490</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">57,918</div>
									</td>
									<td align="right">
									<div align="right">72.9%</div>
									</td>
									<td align="right">
									<div align="right">90.44%</div>
									</td>
									<td align="right">
									<div align="right">91.69%</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div align="right">14,175</div>
									</td>
									<td>
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">7,778</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">4,786</div>
									</td>
									<td align="right">
									<div align="right">61.5%</div>
									</td>
									<td align="right">
									<div align="right">8.85%</div>
									</td>
									<td align="right">
									<div align="right">7.58%</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div align="right">6,095</div>
									</td>
									<td>
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">2,125</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									<td>
									<div align="right">1,397</div>
									</td>
									<td align="right">
									<div align="right">65.7%</div>
									</td>
									<td align="right">
									<div align="right">2.42%</div>
									</td>
									<td align="right">
									<div align="right">2.21%</div>
									</td>
									<td align="center">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1972</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div align="right">136,203</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">98,480</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">85,766</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.1%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div align="right">121,243</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">88,987</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">78,166</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">87.8%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">90.36%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">91.14%</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div align="right">13,493</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">8,837</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">7,032</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">79.6%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">8.97%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">8.20%</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div align="right">5,616</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,495</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div align="right">2,103</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">84.3%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">2.53%</div>
									</td>
									<td align="right" bgcolor="#CCCCCC">
									<div align="right">2.45%</div>
									</td>
									<td align="center" bgcolor="#CCCCCC">
									<div align="right">n/a</div>
									</td>
									</tr>
									</tbody>
									</table>
									<blockquote>
									<table border="1" align="center">
									<tbody>
									<tr>
									<th scope="col">
									<div align="center">Legend</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">VAP - Voting Age Population</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">CVAP - Citizen Voting Age Population</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">Reg. – Registered Voters</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">Reg. % - Registered Percentage = (Reg. / CVAP)</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">TO - Turnout</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">TO% - Turnout Percentage = (TO / Reg)</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">Reg Share – Race/Ethnicity Registration / Total Registration</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">TO Share – Race/Ethnicity Turnout / Total Turnout</div>
									</th>
									</tr>
									<tr>
									<th scope="row">
									<div align="left">VR Potential - Unregistered Citizens (CVAP - REG)</div>
									</th>
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