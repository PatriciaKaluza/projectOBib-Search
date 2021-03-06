<?php return array (
  'emails.paypalInvestigatePayment.subject' => 'Unusual PayPal Activity',
  'emails.paypalInvestigatePayment.body' => 'Open Journal Systems has encountered unusual activity relating to PayPal payment support for the journal {$contextName}. This activity may need further investigation or manual intervention.<br />
                       <br />
This email was generated by Open Journal Systems\' PayPal plugin.<br />
<br />
Full post information for the request:<br />
{$postInfo}<br />
<br />
Additional information (if supplied):<br />
{$additionalInfo}<br />
<br />
Server vars:<br />
{$serverVars}<br />
',
  'emails.paypalInvestigatePayment.description' => 'This email template is used to notify a journal\'s primary contact that suspicious activity or activity requiring manual intervention was encountered by the PayPal plugin.',
);