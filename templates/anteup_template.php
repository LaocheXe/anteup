<?php
/* 
* AnteUp - A Donation Tracking Plugin for e107
*
* Copyright (C) 2012-2015 Patrick Weaver (http://trickmod.com/)
* For additional information refer to the README.mkd file.
*
*/
if(!defined('e107_INIT')){ exit; }

$ANTEUP_TEMPLATE['menu'] = "
Due on: {ANTEUP_DUE}<br />
<a href='".e_PLUGIN."anteup/donations.php'>{ANTEUP_BAR}</a>
Status (in {ANTEUP_CODE}): {ANTEUP_CURRENT}/{ANTEUP_GOAL}<br />
Remaining: {ANTEUP_REMAINING: format}<br />
Lifetime Donation Total: {ANTEUP_TOTAL: format}<br />
{ANTEUP_ADMIN}
";

$ANTEUP_TEMPLATE['donate'] = "
	<table class='table table-bordered table-hover'>
		<tbody>
			<tr>
				<td>".ANTELAN_DONATE_01."</td>
				<td>{ANTEUP_DONATOR: class=tbox}</td>
			</tr>
			<tr>
				<td>".ANTELAN_DONATE_02."</td>
				<td>{ANTEUP_CURRENCYSELECTOR: class=tbox}</td>
			</tr>
			<tr>
				<td>".ANTELAN_DONATE_03."</td>
				<td>{ANTEUP_AMOUNTSELECTOR: class=tbox}</td>
			</tr>
			<tr>
				<td>Donate Anonymously</td>
				<td>{ANTEUP_ANONBOX}</td>
			</tr>
			<tr>
				<td colspan='2'>{ANTEUP_SUBMITDONATION}</td>
			</tr>
		</tbody>
	</table>
";

$ANTEUP_TEMPLATE['donations']['filter'] = "
	{ANTEUP_DONATION_FILTER}
";

$ANTEUP_TEMPLATE['donations']['start'] = "
	<table class='table table-bordered table-hover'>
		<thead>
			<tr>
				<th>".ANTELAN_DONATIONS_03."</th>
				<th>".ANTELAN_DONATIONS_04."</th>
				<th>".ANTELAN_DONATIONS_05."</th>
				<th>".ANTELAN_DONATIONS_06."</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
";

$ANTEUP_TEMPLATE['donations']['entry'] = "
			<tr>
				<td>{ANTEUP_DONATION_NAME}</td>
				<td>{ANTEUP_DONATION_COMMENT}</td>
				<td>{ANTEUP_DONATION_DATE}</td>
				<td>{ANTEUP_DONATION_AMOUNT: format}</td>
				<td>{ANTEUP_DONATION_STATUS}</td>
			</tr>
";

$ANTEUP_TEMPLATE['donations']['end'] = "
			<tr>
				<td style='text-align:right;' colspan='5'>Total Lifetime Donations Received: {ANTEUP_TOTAL: format}</td>
			</tr>
		</tbody>
	</table>
";

?>
