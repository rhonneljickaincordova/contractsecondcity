
<?php
include("../bower_components/mpdf/mpdf.php");



$html_head = '
		<style type="text/css">
			table {
				font-family: Arial;
				text-align: justify;
	    		text-justify: inter-word;
			}

			.box {
			 		width: 80%; margin: 0 auto; text-align: center;
			 	}	
			.box_description {
					text-align: justify;
					font-family: Arial;
			}

		</style>
		<img src="../photo/header.jpg">
		
		<table  style="width:100%;border-spacing:10px; margin-top:80px;margin-left:10px;">
			<tr >
				<td ><strong>Date:</strong> '. $_POST['date'] .'</td>
				<td ><strong>From:</strong> '. $_POST['company_from'] .'</td> 
			</tr>	
			<tr>
				<td><strong>To: </strong> '. $_POST['to'] .'</td>
				<td><strong>Email:</strong> '. $_POST['company_email'] .'</td> 
			</tr>
			
			<tr>
				<td><strong>Email:</strong> '. $_POST['email'] .'</td>
				<td><strong>Phone:</strong> '. $_POST['company_phone1'] .'</td> 
			</tr>
			
			<tr>
				<td><strong>Address:</strong> '. $_POST['address'] .'</td>
			
			</tr>
			
			<tr>
				<td><strong>Work Address:</strong> '. $_POST['work_address'] .'</td>
				
			</tr>
			<tr>
				<td><strong>Phone:</strong> '. $_POST['phone1'] .'</td>
				
			</tr>
		</table>

		<br><br><br><br>
		<br><br><br><br>	
		<br><br>

		<table style="width:100%;">
			<tr>
				<td style="width:8%;"></td>
				<td>
					<strong>
						<h2>	
							<i>
							The Bitterness Of Poor Quality, Remains, Long After <br><center>The Sweetness Of Low Price Is Forgotten.</center>
							</i>
						</h2>
					</strong>


				</td>
				<td></td>
			</tr>
		</table>
		<br><br>	
		
		<table style="width:100%;">
			<tr>
				<td ><img style="margin-left:30px;height:70px;" src="../photo/bbbaplus.png"></td>
				<td ><img style="margin-left:30px;height:120px;" src="../photo/yelp.png"></td> 
				<td ><img  style="margin-left:50px;height:100px;" src="../photo/5google.png"></td>
				<td><img style="margin-left:30px;height:100px;" src="../photo/angies-list.png"></td>
			
			</tr>
		</table>

		<table style="width:100%;">
			<tr>
				<td></td>	
				<td></td>	
				<td><img style="margin-left:50px;height:200px;" src="../photo/certainteed.png"></td> 
				<td></td>
			</tr>
		
		</table>
		


		
		<pagebreak />
	';
		$html_body = '
				<img src="../photo/contract-header.png" style="width:900px;height:200px;margin-top:-50px;">
				<br><br><br>
				<div style="font-family: Arial;text-align:center;margin-top:-15px;">
					3006 W. Diversey Avenue, Chicago, Illinois 60647
				</div>			
				<div style="text-align:center;font-family: Arial;">
					Phone (773) 384-6300
				</div>
				<br>
				<div style="text-align:center;font-family: Arial;">
					City Of Chicago General Contractor License #TGC04529
				</div>
				<div style="text-align:center;font-family: Arial;">
					State of Illinois Roofing License #104.013526
				</div>
				<div style="text-align:center;font-family: Arial;">
					City of Chicago Home Repair License #18818	
				</div>
				<br>


				<div class="box"><h1>'. $_POST['project_title'].'</h1></div> 
				<strong>_____________________________________________________________________________________________________</strong> 
				<br><br>
			
				<br>
				<div class="box_description"><h4>
					'.  nl2br($_POST['project_description']) .'
				</h4></div>
				
				<div style="margin-top:150px;"><h4><span>BUYERS INITIALS: X_________________________</span></h4></div> 
				

		';

	$html_footer = '

		<img src="../photo/contract-header.png" style="width:900px;height:200px;margin-top:-50px;">

		

		<table  style="width:100%; page-break-before: always;">
			<br>
			<tr>
				<td><h3>Buyer agrees to pay the sum of: <i style="font-weight: normal;">'. $_POST['payment_agree_sum'].'</i> (cash price).</h3></td> 
			</tr>
			<br>
			<tr >
				<td><h3>Buyer agrees to pay and that the Cash price is due and owing as follows:</h3></td>
			</tr>
			<br>
			<tr >
				<td><h3> <i style="font-weight: normal;">'. $_POST['payment_date_contract'].'</i> on date of contract;</h3></td> 	
			</tr>
			<br>
			<tr >
				<td><h3>$<i style="font-weight: normal;">'. $_POST['payment_amount'].'</i> on <i style="font-weight: normal;">'. $_POST['payment_on'].'</i> and the balance of <i style="font-weight: normal;">'. $_POST['payment_balance'].'</i> </h3></td> 	
			</tr>
			<br>
			<tr >
				<td>
					<p style="font-size:16px;">
						Buyer agrees to pay the Cash price under the terms of the attached Note. (Cross-out and initial, if no Note is Signed.) 
					</p>
				</td> 	
			</tr>
			<br>
			<tr >
				<td>
					<p style="font-size:16px;">
						The Note and this contract contain confession of judgement clauses. A final judgement will become
						a lien on the improved property owned by the Buyer. Further, the Note grants the holder a lien and/
						or the right of set-off against any deposits or sums now or heretofore owed by Buyer to holder.
						Second City Construction Co., Inc. or holder has a lien for materials and services on the improved
						property by virtue of the Illinois Mechanics Lien Act. 
					</p>
				</td> 	
			</tr>
			<br>
			<tr>
				<td><strong>
					<p style="font-size:18px;">
						Cancellation: THE BUYER MAY CANCEL THIS CONTRACT AT ANY TIME PRIOR
						TO MIDNIGHT OF THE THIRD BUSINESS DAY AFTER THE DATE OF THIS
						CONTRACT. SEE THE ATTACHED NOTICE OF CANCELLATION FORM FOR AN
						EXPLANATION OF THIS RIGHT. 
					</p>
					</strong>
				</td> 	
			</tr>
			<br>
			<tr >
				<td><strong>
					<p style="font-size:16px;">
						Buyer(s) acknowledges receipt of a fully completed copy of this contract executed by both
						Second City Construction Co., Inc. and Buyer(s). Second City Construction Co., Inc. is
						authorized to proceed with the work under this contract. See reverse side for additional
						terms and conditions of this contract.
					</p>
					</strong>
				</td> 	
			</tr>
			<br>
			<br><br><br>
			<tr >
				<td><strong>
					<p style="font-size:16px;">
						Date: ___________________________________________
					</p>
					</strong>
				</td> 	
			</tr>
			<br><br>
			<tr >
				<td><strong>
					<p style="font-size:16px;">
						Second City Construction Co., Inc.
					</p>
					</strong>
				</td> 	
			</tr>
		

		</table>
		<br><br><br>
		<table style="width:100%;">
			<tr>
				<td><strong><p  style="font-size:16px;">By ___________________________</p></strong></td>
				<td><strong><p  style="font-size:16px;">Buyer _____________________________</p></strong></strong></td>
				<td><strong></strong></td> 
			</tr>
		</table>
		<br><br><br><br>
		<table style="width:100%;">
			<tr>
				<td style="width:45%;"><strong>                       </strong></td>
				<td><strong><p style="font-size:16px;">Buyer _____________________________</p></strong></strong></td>
				<td><strong></strong></td> 
			</tr>
		</table>
		<pagebreak />


		<table style="width:100%; ">
			<tr>
				<td style="width:50px;font-size:13.4px;  vertical-align: top;">1.)</td>
				<td><p align="justify" style="font-size:13.4px;">
					The occurrence of any of the following events shall, without notice to Buyer constitute a default (as
					such term is used here): (a) Nonpayment, when due, of any amount payable by Buyer hereunder or
					Buyer\'s breach of any agreement, warranty or obligation contained herein; (b) any statement,
					representation or warranty of Buyer herein or in any application or other writing at any time furnished by
					or on behalf of Buyer in connection with the transaction evidenced by this contract is untrue in any
					maternal respect; (c) death of Buyer or any guarantor, or buyer becomes insolvent or unable to pay
					debts as they mature or makes an assignment for the benefit of creditors or any proceeding is instituted
					by or against Buyer alleging that Buyer is insolvent or unable to pay debts as they mature; (d) any liens
					are placed upon property of Buyer or condemnation of foreclosure proceedings are instituted against
					Buyer; (e) Seller for any other reason whatsoever has reasonable cause to deem itself insecure.
					Subject to any restrictions imposed by applicable law, wherever a default shall be existing; all
					obligations of Buyer hereunder may, notwithstanding any provision of this Contract, at the option of the
					Seller, and without demand or notice of any kind, be declared and thereupon immediately shall be due
					and payable; Seller shall have and may exercise from time to time the rights and remedies provided in
					this Contract or which may be available to Seller under applicable law. In the event Seller is required to
					file suit to enforce the terms of this Contract, Buyer shall pay, in addition, to all other sums due
					hereunder. all of Seller\'s reasonable attorney\'s fees, costs, and expenses. Buyer shall indemnify and
					hold SECOND CITY CONSTRUCTION CO., INC. (Sometimes referred to as "Seller") harmless for all
					costs and expenses incurred by SECOND CITY CONSTRUCTION CO., INC. including as reasonable
					attorney\'s fee as a result of any misrepresentations or omissions made by Buyer. This contract is
					binding upon the heirs, executors, administrators, and successors and assigns of Buyer.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>2.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					The Seller may assign this Contract and its accompanying note, if any, without notice to Buyer and in
					the event of such assignment, the Buyer shall perform all promises herein contained to such assignee
					as the owner thereof and Buyer agrees that after such assignment, it will settle all claims against the
					Seller directly with it and not the Assignee hereof, and agrees not to set up any claim which it may have
					against the Seller as a defense, set-off, cross-complaint, or otherwise to any action for the purchase
					price brought by the Seller or Assignee hereof except as otherwise provided herein. No delay or
					omission to exercise any right, power or remedy accruing to the Seller or Assignee upon any breach or
					default by the Buyer under this Contract shall impair any such right, power or remedy of the Seller or
					Assignee, nor be construed as a waiver of any breach or default or of any similar breach or default
					thereafter occurring nor shall any waiver of a single breach or default be deemed a waiver of any
					subsequent breach or default. All waivers by Seller under the Contract must be in writing. All remedies
					either under this Contract or by law afforded to the Seller or Assignee hereof shall be cumulative and
					not alternative.
				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>3.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					The parties agree that there are no understandings, agreements, representations or warranties,
					expressed or implied, other than those specified herein, respecting this Contract and that this
					instrument contains the entire agreement between Seller and the Buyer, and that consequently no prior
					dealing, no usage of the trade and no subsequent course of performance between the parties shall be
					relevant to supplement or explain any terms used in the Contract.

				</p></td> 
			</tr>
			<br><br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>4.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					In the event any term or provision of the Contract shall be found invalid or contrary to applicable law, if
					shall be deemed severed and stricken from this Contract and the validity of the remaining provisions
					shall not be affected thereby.
				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>5.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					In the event that this Contract is terminated or cancelled by the Buyer before any work has
					commenced, the Buyer shall pay SECOND CITY CONSTRUCTION CO., INC. the sum of fifteen
					percent (15%) of the total cash price as liquidated damages and not as penalty in the event that this
					Contract is terminated or cancelled after work has commenced, the Buyer shall pay SECOND CITY
					CONSTRUCTION CO., INC. the sum of twenty-five percent (25%) of the total cash price as liquidated
					damages and not as a penalty in addition to all sums expended by it, under this Contract.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>6.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					Buyer represents he owns the property on which structure is to be placed or work is to be performed by
					SECOND CITY CONSTRUCTION CO., INC. Buyer will identify boundary lines and be responsible for
					obtaining all necessary permits and zoning variations before commencement of work, Buyer is solely
					responsible for structure conforming with dwelling codes and zoning laws and being constructed within
					boundary lines. Changes required by dwelling codes or boundary lines will be paid by Buyer.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>7.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					This Contract shall not be binding upon Seller, until accepted by one of its duly authorized officers.
					Upon such acceptance, this Contract shall be binding without notification to Buyer

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>8.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					Seller is not responsible for damage to shrubbery or grass or any of the landscape owned by Buyer.
					Risk of loss for work and material installed in structure is on Buyer. Buyer shall indemnify and hold
					Seller harmless from any damages, including reasonable attorneys\' fees, incurred by Seller in
					performing this Contract and from any claims brought against Seller arising from Seller\'s performance
					of this Contract.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>9.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
					Wolmanized Pressure-Treated Lumber. Buyer acknowledges that it is the natural characteristic of some
					wood to split, warp, or twist and agrees that Seller shall not be liable for any installation or reinstallation
					costs, or for any incidental or consequential damages arising therefrom.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>10.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						Concrete and Cement Work. Due to temperature changes, salt, settlement of ground, frost, material
						shrinkages, expansion or contraction of materials, and other causes beyond Seller\'s control, cracks,
						checks, spalling, color variations, and chipping are very likely to appear which will in no way affect the
						structural stability of the concrete or the building. <strong>Seller does not guarantee against these
						occurrences, and alerts purchaser that these occurrences are very likely to appear.</strong>

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>11.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						No work shall be done or material furnished except as specified herein or agreed to in writing. Changes
						requested by Buyer or required hereunder shall be paid by Buyer in addition to the Contract price. All
						Seller\'s rights and remedies extend to changes. Unless otherwise agreed in writing all changes are at
						Seller\'s regular price in effect at the time of such change is ordered.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>12.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						Seller may make minor variations in work or substitute material of equal or better quality without
						consent of Buyer.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>13.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						Seller is not responsible for delay or inability to perform caused by Acts of God, strikes, war, riots,
						inability by Seller to obtain labor or materials, shortages, weather conditions, public authorities or other
						cause or casualty beyond its control or due to Buyer\'s conduct.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>14.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						If unusual subsoil conditions, obstruction above or below grades, or other facts known to Buyer, or
						which Buyer should have known exist, and are not disclosed to Seller, and such facts or conditions
						require change in work, any increase shall be paid for by Buyer at Seller\'s regular price therefore.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>15.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						The Buyer hereby waives trial by jury in any litigation arising out of Contract and voluntarily and
						expressly agrees that proper venue shall be in Cook County, Illinois.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>16.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						All surplus material remains Seller\'s property Rubbish removal shall be Buyer\'s cost and the removal
						thereof is Buyer\'s responsibility. During work Seller may use Buyer\'s utilities and all charges shall be
						Buyer\'s responsibility.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>17.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						Liquidated damage clause and confession clause not enforceable by Seller if Buyer timely rescinds this
						Contract under any applicable Federal Trade Regulation or State Statute.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>18.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						If Buyer fails to make payment as provided herein or in note of even day herewith, if any, Seller may
						without notice, remove any structure installed by Seller.

				</p></td> 
			</tr>
			<br>
			<tr>
				<td style="width:50px;font-size:13.4px; vertical-align: top;"><p>19.) </p> </td>
				<td><p align="justify" style="font-size:13.4px;">
						Seller retains all rights under the Illinois Mechanics Lien Law Seller\'s acceptance of a note as evidence
						of debt or its taking of security shall not deprive Seller of rights under Illinois Mechanics Lien Law.

				</p></td> 
			</tr>

			

			</table>
		'; 	

	$mpdf= new mPDF();

	$mpdf->WriteHTML($html_head);
	$mpdf->WriteHTML($html_body);
	$mpdf->AddPage();
	$mpdf->WriteHTML($html_footer);
		
	$mpdf->Output();

	exit;

?>