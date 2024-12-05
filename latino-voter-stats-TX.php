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

									<h2>Texas Latino Voter Research</h2>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et rhoncus ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel bibendum urna. Suspendisse eu tortor in lectus ornare dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla lectus leo, rutrum sed risus eget, rutrum tempor eros.</p>

									<div align="center">

									<!-- DATA TABLE STARTS -->
									<table border="1" cellspacing="1" cellpadding="1" bgcolor="#639ACE">
									<tbody>
									<tr bgcolor="#CCCCCC">
									<td colspan="11">
									<div align="center"><strong>Texas</strong></div>
									</td>
									</tr>
									<tr bgcolor="#949494">
									<td>
									<div><strong>Year</strong></div>
									</td>
									<td>
									<div><strong>Race</strong></div>
									</td>
									<td>
									<div><strong> VAP </strong></div>
									</td>
									<td>
									<div><strong> CVAP </strong></div>
									</td>
									<td>
									<div><strong> REG </strong></div>
									</td>
									<td>
									<div><strong>REG % </strong></div>
									</td>
									<td>
									<div><strong> TO </strong></div>
									</td>
									<td>
									<div><strong>TO % </strong></div>
									</td>
									<td>
									<div><strong>REG SHARE</strong></div>
									</td>
									<td>
									<div><strong>TO SHARE</strong></div>
									</td>
									<td>
									<div><strong> VR POTENTIAL </strong></div>
									</td>
									</tr>
									<tr>
									<td rowspan="5"><strong>2014</strong></td>
									<td>Total</td>
									<td>19,354</td>
									<td>16,844</td>
									<td>9,946</td>
									<td>59.1%</td>
									<td>5,836</td>
									<td>58.7%</td>
									<td> </td>
									<td> </td>
									<td>
									<div>6,898</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>15,676</td>
									<td>13,693</td>
									<td>8,124</td>
									<td>59.3%</td>
									<td>4,820</td>
									<td>59.3%</td>
									<td>81.7%</td>
									<td>82.6%</td>
									<td>
									<div>5,569</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>2,327</td>
									<td>2,198</td>
									<td>1,334</td>
									<td>60.7%</td>
									<td>777</td>
									<td>58.2%</td>
									<td>13.4%</td>
									<td>13.3%</td>
									<td>
									<div>864</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>6,762</td>
									<td>4,878</td>
									<td>2,255</td>
									<td>46.2%</td>
									<td>1,092</td>
									<td>48.4%</td>
									<td>22.7%</td>
									<td>18.7%</td>
									<td>
									<div>2,623</div>
									</td>
									</tr>
									<tr>
									<td>Asian</td>
									<td>853</td>
									<td>565</td>
									<td>259</td>
									<td>45.8%</td>
									<td>102</td>
									<td>39.4%</td>
									<td>2.6%</td>
									<td>1.7%</td>
									<td>
									<div>306</div>
									</td>
									</tr>
									<tr bgcolor="#cccccc">
									<td rowspan="5"><strong>2012</strong></td>
									<td>Total</td>
									<td>18,642</td>
									<td>16,062</td>
									<td>10,749</td>
									<td>66.9%</td>
									<td>8,643</td>
									<td>80.4%</td>
									<td> </td>
									<td> </td>
									<td>
									<div>5,313</div>
									</td>
									</tr>
									<tr bgcolor="#cccccc">
									<td>White</td>
									<td>15,029</td>
									<td>12,989</td>
									<td>8,643</td>
									<td>66.5%</td>
									<td>6,900</td>
									<td>79.8%</td>
									<td>80.41%</td>
									<td>79.83%</td>
									<td>
									<div>4,346</div>
									</td>
									</tr>
									<tr bgcolor="#cccccc">
									<td>Black</td>
									<td>2,213</td>
									<td>2,144</td>
									<td>1,569</td>
									<td>73.2%</td>
									<td>1,352</td>
									<td>86.2%</td>
									<td>14.60%</td>
									<td>15.64%</td>
									<td>
									<div>575</div>
									</td>
									</tr>
									<tr bgcolor="#cccccc">
									<td>Latino</td>
									<td>6,831</td>
									<td>4,867</td>
									<td>2,652</td>
									<td>54.5%</td>
									<td>1,890</td>
									<td>71.3%</td>
									<td>24.67%</td>
									<td>21.87%</td>
									<td>
									<div>2,215</div>
									</td>
									</tr>
									<tr bgcolor="#cccccc">
									<td>Asian</td>
									<td>900</td>
									<td>506</td>
									<td>299</td>
									<td>59.1%</td>
									<td>214</td>
									<td>71.6%</td>
									<td>2.78%</td>
									<td>2.48%</td>
									<td>
									<div>207</div>
									</td>
									</tr>
									<tr>
									<td rowspan="5"><strong>2010</strong></td>
									<td>Total</td>
									<td>17,847</td>
									<td>15,403</td>
									<td>9,493</td>
									<td>61.60%</td>
									<td>5,600</td>
									<td>58.99%</td>
									<td> </td>
									<td> </td>
									<td>
									<div>5,910</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>14,741</td>
									<td>12,609</td>
									<td>7,858</td>
									<td>62.30%</td>
									<td>4,631</td>
									<td>58.93%</td>
									<td>82.78%</td>
									<td>82.70%</td>
									<td>
									<div>4,751</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>2,060</td>
									<td>1,993</td>
									<td>1,242</td>
									<td>62.30%</td>
									<td>770</td>
									<td>62.00%</td>
									<td>13.08%</td>
									<td>13.75%</td>
									<td>
									<div>751</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>6,403</td>
									<td>4,376</td>
									<td>2,334</td>
									<td>53.30%</td>
									<td>1,012</td>
									<td>43.36%</td>
									<td>24.59%</td>
									<td>18.07%</td>
									<td>
									<div>2,042</div>
									</td>
									</tr>
									<tr>
									<td>Asian</td>
									<td>798</td>
									<td>567</td>
									<td>262</td>
									<td>46.30%</td>
									<td>126</td>
									<td>48.09%</td>
									<td>2.76%</td>
									<td>2.25%</td>
									<td>
									<div>305</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>2008</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>17,295</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>15,040</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10,123</div>
									</td>
									<td bgcolor="#CCCCCC">67.3%</td>
									<td bgcolor="#CCCCCC">
									<div>8,435</div>
									</td>
									<td bgcolor="#CCCCCC">83.3%</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>4,917</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>14,432</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>12,554</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>8,423</div>
									</td>
									<td bgcolor="#CCCCCC">67.1%</td>
									<td bgcolor="#CCCCCC">
									<div>6,978</div>
									</td>
									<td bgcolor="#CCCCCC">82.8%</td>
									<td bgcolor="#CCCCCC">83.21%</td>
									<td bgcolor="#CCCCCC">82.73%</td>
									<td bgcolor="#CCCCCC">
									<div>4,131</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,933</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,840</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,356</div>
									</td>
									<td bgcolor="#CCCCCC">73.7%</td>
									<td bgcolor="#CCCCCC">
									<div>1,194</div>
									</td>
									<td bgcolor="#CCCCCC">88.1%</td>
									<td bgcolor="#CCCCCC">13.40%</td>
									<td bgcolor="#CCCCCC">14.16%</td>
									<td bgcolor="#CCCCCC">
									<div>484</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>6,241</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>4,493</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>2,441</div>
									</td>
									<td bgcolor="#CCCCCC">54.3%</td>
									<td bgcolor="#CCCCCC">
									<div>1,697</div>
									</td>
									<td bgcolor="#CCCCCC">69.5%</td>
									<td bgcolor="#CCCCCC">24.11%</td>
									<td bgcolor="#CCCCCC">20.12%</td>
									<td bgcolor="#CCCCCC">
									<div>2,052</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>2006</strong></td>
									<td>Total</td>
									<td>
									<div>16,512</div>
									</td>
									<td>
									<div>14,406</div>
									</td>
									<td>
									<div>9,676</div>
									</td>
									<td>
									<div>67.2%</div>
									</td>
									<td>
									<div>5,526</div>
									</td>
									<td>
									<div>57.1%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>4,730</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>8,608</div>
									</td>
									<td>
									<div>8,458</div>
									</td>
									<td>
									<div>6,154</div>
									</td>
									<td>
									<div>72.8%</div>
									</td>
									<td>
									<div>3,825</div>
									</td>
									<td>
									<div>62.2%</div>
									</td>
									<td>
									<div>63.60%</div>
									</td>
									<td>
									<div>69.22%</div>
									</td>
									<td>
									<div>2,304</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,854</div>
									</td>
									<td>
									<div>1,786</div>
									</td>
									<td>
									<div>1,158</div>
									</td>
									<td>
									<div>64.8%</div>
									</td>
									<td>
									<div>655</div>
									</td>
									<td>
									<div>56.6%</div>
									</td>
									<td>
									<div>11.97%</div>
									</td>
									<td>
									<div>11.85%</div>
									</td>
									<td>
									<div>628</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>5,407</div>
									</td>
									<td>
									<div>3,719</div>
									</td>
									<td>
									<div>2,160</div>
									</td>
									<td>
									<div>58.1%</div>
									</td>
									<td>
									<div>945</div>
									</td>
									<td>
									<div>43.8%</div>
									</td>
									<td>
									<div>22.32%</div>
									</td>
									<td>
									<div>17.10%</div>
									</td>
									<td>
									<div>1,559</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>2004</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>15,813</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>13,925</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>9,681</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>69.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,950</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>82.1%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>4,244</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>13,246</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11,639</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>8,148</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>70.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,706</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>82.3%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>84.16%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>84.35%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>3,491</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,669</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,613</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,141</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>70.7%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>931</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>81.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.79%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.71%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>472</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>5,232</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>3,688</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>2,170</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>58.8%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,533</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>70.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>22.42%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>19.28%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,518</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>2002</strong></td>
									<td>Total</td>
									<td>
									<div>14,996</div>
									</td>
									<td>
									<div>12,976</div>
									</td>
									<td>
									<div>8,591</div>
									</td>
									<td>
									<div>66.2%</div>
									</td>
									<td>
									<div>5,283</div>
									</td>
									<td>
									<div>61.5%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>4,385</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>12,518</div>
									</td>
									<td>
									<div>10,811</div>
									</td>
									<td>
									<div>7,224</div>
									</td>
									<td>
									<div>66.8%</div>
									</td>
									<td>
									<div>4,385</div>
									</td>
									<td>
									<div>60.7%</div>
									</td>
									<td>
									<div>84.09%</div>
									</td>
									<td>
									<div>83.00%</div>
									</td>
									<td>
									<div>3,587</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,748</div>
									</td>
									<td>
									<div>1,696</div>
									</td>
									<td>
									<div>1,139</div>
									</td>
									<td>
									<div>67.2%</div>
									</td>
									<td>
									<div>774</div>
									</td>
									<td>
									<div>68.0%</div>
									</td>
									<td>
									<div>13.26%</div>
									</td>
									<td>
									<div>14.65%</div>
									</td>
									<td>
									<div>557</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>5,149</div>
									</td>
									<td>
									<div>3,583</div>
									</td>
									<td>
									<div>2,014</div>
									</td>
									<td>
									<div>56.2%</div>
									</td>
									<td>
									<div>982</div>
									</td>
									<td>
									<div>48.8%</div>
									</td>
									<td>
									<div>23.44%</div>
									</td>
									<td>
									<div>18.59%</div>
									</td>
									<td>
									<div>1,569</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>2000</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>14,533</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>12,937</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>8,929</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>69.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,005</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>78.5%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>4,008</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>12,572</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11,224</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,771</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>69.2%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,042</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>77.8%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>87.03%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>86.25%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>3,453</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,397</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,378</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>971</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>70.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>803</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>82.7%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10.87%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.46%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>407</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>4,414</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>3,173</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,905</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>60.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,300</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>68.2%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>21.33%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>18.56%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,268</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1998</strong></td>
									<td>Total</td>
									<td>
									<div>14,080</div>
									</td>
									<td>
									<div>12,528</div>
									</td>
									<td>
									<div>8,301</div>
									</td>
									<td>
									<div>66.3%</div>
									</td>
									<td>
									<div>4,636</div>
									</td>
									<td>
									<div>55.8%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>4,227</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>12,019</div>
									</td>
									<td>
									<div>10,724</div>
									</td>
									<td>
									<div>7,176</div>
									</td>
									<td>
									<div>66.9%</div>
									</td>
									<td>
									<div>4,020</div>
									</td>
									<td>
									<div>56.0%</div>
									</td>
									<td>
									<div>86.45%</div>
									</td>
									<td>
									<div>86.71%</div>
									</td>
									<td>
									<div>3,548</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,614</div>
									</td>
									<td>
									<div>1,559</div>
									</td>
									<td>
									<div>1,003</div>
									</td>
									<td>
									<div>64.3%</div>
									</td>
									<td>
									<div>572</div>
									</td>
									<td>
									<div>57.0%</div>
									</td>
									<td>
									<div>12.08%</div>
									</td>
									<td>
									<div>12.34%</div>
									</td>
									<td>
									<div>556</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>4,057</div>
									</td>
									<td>
									<div>2,864</div>
									</td>
									<td>
									<div>1,609</div>
									</td>
									<td>
									<div>56.2%</div>
									</td>
									<td>
									<div>623</div>
									</td>
									<td>
									<div>38.7%</div>
									</td>
									<td>
									<div>19.38%</div>
									</td>
									<td>
									<div>13.44%</div>
									</td>
									<td>
									<div>1,255</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1996</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>13,431</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>12,052</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>8,316</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>69.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,210</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>74.7%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>3,736</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>11,545</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10,371</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,234</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>69.8%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>5,392</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>74.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>86.99%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>86.83%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>3,137</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,446</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,420</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>914</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>64.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>681</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>74.5%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10.99%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10.97%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>506</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>3,804</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>2,711</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,623</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>59.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,060</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>65.3%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>19.52%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>17.07%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,088</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1994</strong></td>
									<td>Total</td>
									<td>
									<div>13,134</div>
									</td>
									<td>
									<div>11,694</div>
									</td>
									<td>
									<div>7,685</div>
									</td>
									<td>
									<div>65.7%</div>
									</td>
									<td>
									<div>4,964</div>
									</td>
									<td>
									<div>64.6%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>4,009</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>11,288</div>
									</td>
									<td>
									<div>10,069</div>
									</td>
									<td>
									<div>6,761</div>
									</td>
									<td>
									<div>67.1%</div>
									</td>
									<td>
									<div>4,447</div>
									</td>
									<td>
									<div>65.8%</div>
									</td>
									<td>
									<div>87.98%</div>
									</td>
									<td>
									<div>89.59%</div>
									</td>
									<td>
									<div>3,308</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,285</div>
									</td>
									<td>
									<div>1,262</div>
									</td>
									<td>
									<div>752</div>
									</td>
									<td>
									<div>59.6%</div>
									</td>
									<td>
									<div>426</div>
									</td>
									<td>
									<div>56.6%</div>
									</td>
									<td>
									<div>9.79%</div>
									</td>
									<td>
									<div>8.58%</div>
									</td>
									<td>
									<div>510</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>3,909</div>
									</td>
									<td>
									<div>2,703</div>
									</td>
									<td>
									<div>1,553</div>
									</td>
									<td>
									<div>57.5%</div>
									</td>
									<td>
									<div>740</div>
									</td>
									<td>
									<div>47.6%</div>
									</td>
									<td>
									<div>20.21%</div>
									</td>
									<td>
									<div>14.91%</div>
									</td>
									<td>
									<div>1,150</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1992</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>12,287</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,958</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,817</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>85.7%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>10,597</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,001</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,083</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>86.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>87.97%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>89.23%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,361</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>864</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>682</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>78.9%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10.86%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10.00%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>2,806</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,203</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>927</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>77.1%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>15.12%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>13.60%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1990</strong></td>
									<td>Total</td>
									<td>
									<div>12,010</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>7,254</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>4,972</div>
									</td>
									<td>
									<div>68.5%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>10,293</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>6,289</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>4,375</div>
									</td>
									<td>
									<div>69.6%</div>
									</td>
									<td>
									<div>86.70%</div>
									</td>
									<td>
									<div>87.99%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,477</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>886</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>572</div>
									</td>
									<td>
									<div>64.6%</div>
									</td>
									<td>
									<div>12.21%</div>
									</td>
									<td>
									<div>11.50%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>2,684</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>1,074</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>604</div>
									</td>
									<td>
									<div>56.2%</div>
									</td>
									<td>
									<div>14.81%</div>
									</td>
									<td>
									<div>12.15%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1988</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>11,477</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,552</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,186</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>81.9%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>9,996</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,648</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>5,518</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>83.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>88.03%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>89.20%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,297</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>833</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>610</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>73.2%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.03%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>9.86%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>2,571</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>1,170</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>854</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>73.0%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>15.49%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>13.81%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1986</strong></td>
									<td>Total</td>
									<td>
									<div>11,495</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>6,736</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>4,299</div>
									</td>
									<td>
									<div>63.8%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>10,001</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>5,820</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>3,750</div>
									</td>
									<td>
									<div>64.4%</div>
									</td>
									<td>
									<div>86.40%</div>
									</td>
									<td>
									<div>87.23%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,264</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>842</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>503</div>
									</td>
									<td>
									<div>59.7%</div>
									</td>
									<td>
									<div>12.50%</div>
									</td>
									<td>
									<div>11.70%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>2,701</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>1,164</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>638</div>
									</td>
									<td>
									<div>54.8%</div>
									</td>
									<td>
									<div>17.28%</div>
									</td>
									<td>
									<div>14.84%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1984</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>11,487</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7,478</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,249</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>83.6%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>9,971</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>6,581</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>5,534</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>84.1%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>88.00%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>88.56%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>1,298</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>848</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>665</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>78.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.34%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>10.64%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>2,137</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>966</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>699</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>72.4%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>12.92%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.19%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4"><strong>1982</strong></td>
									<td>Total</td>
									<td>
									<div>10,573</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>6,175</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>4,197</div>
									</td>
									<td>
									<div>68.0%</div>
									</td>
									<td> </td>
									<td> </td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>White</td>
									<td>
									<div>9,273</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>5,508</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>3,765</div>
									</td>
									<td>
									<div>68.4%</div>
									</td>
									<td>
									<div>89.20%</div>
									</td>
									<td>
									<div>89.71%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>Black</td>
									<td>
									<div>1,110</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>628</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>420</div>
									</td>
									<td>
									<div>66.9%</div>
									</td>
									<td>
									<div>10.17%</div>
									</td>
									<td>
									<div>10.01%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td>Latino</td>
									<td>
									<div>1,861</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>804</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									<td>
									<div>499</div>
									</td>
									<td>
									<div>62.1%</div>
									</td>
									<td>
									<div>13.02%</div>
									</td>
									<td>
									<div>11.89%</div>
									</td>
									<td>
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td rowspan="4" bgcolor="#CCCCCC"><strong>1980</strong></td>
									<td bgcolor="#CCCCCC">Total</td>
									<td bgcolor="#CCCCCC">
									<div>9,382</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>5,667</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>4,794</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>84.6%</div>
									</td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC"> </td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">White</td>
									<td bgcolor="#CCCCCC">
									<div>8,350</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>5,127</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>4,400</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>85.8%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>90.47%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>91.78%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Black</td>
									<td bgcolor="#CCCCCC">
									<div>919</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>519</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>374</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>72.1%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>9.16%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>7.80%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									</tr>
									<tr>
									<td bgcolor="#CCCCCC">Latino</td>
									<td bgcolor="#CCCCCC">
									<div>1,876</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>737</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>557</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>75.6%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>13.01%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>11.62%</div>
									</td>
									<td bgcolor="#CCCCCC">
									<div>n/a</div>
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