<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!--SEO META TAGS STARTS-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<meta name="keywords" 
         content="CODER CODERS CODE CODING DEBJYOTI GUHA DEBJYOTI  SOCIAL COMMERCE STARTUP RAIGANJ BANGALORE login register CODING ENTHUSIAST PROGRAMMING DEVELOPER DEBUGGING nearby lookup ">

	<meta name="description" 
         content="Coders is a Online Developer platform where users will be able to see their Business online and can buy any product and can use any service provided by the Coders.">

	<!--SEO ENDS-->

	<title>My Company Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='assets/css/style.css' />
	<link rel='stylesheet' type='text/css' href='assets/css/print.css' media="print" />
	<script type='text/javascript' src='assets/js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='assets/js/example.js'></script>
<style>
.button {
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button2 {background-color: #555555;} /* Black */
.button3 {background-color: #f44336;} /* Red */ 
</style>
<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
if (confirm("Are You sure want to EXIT ?"))
window.close();
}
</script>
</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">CODERS LTD.
AKG Colony, Whitefield
Bangalore, Karnataka 560067

Phone: +91 **********
Phone: +91 **********</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		Name And Address Of Customer:
		<div id="customer">

            <textarea id="customer-title">
				</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice No</td>
                    <td><span id='hrs'>0</span>|<span id='mins'>0</span>|<span id='secs'>0</span></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 31, 2017</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">₹00.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		<tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea></div></td>
		      <td class="description"><textarea>Description</textarea></td>
		      <td><textarea class="cost">₹0</textarea></td>
		      <td><textarea class="qty">0</textarea></td>
		      <td><span class="price">₹0</span></td>
		  </tr>
		  <a class="delete" href="javascript:;" title="Remove row">X</a></div>
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a New Item</a></td>
		  </tr>
		<br>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">₹00.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">₹00.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">₹00.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> <input id="printpagebutton" class="button button1" type="button" value="Print Invoice" onclick="printpage()"/>&nbsp;
		  <input id="refresh" class="button button1" type="button" value="Reset Invoice" onClick="window.location.href=window.location.href">&nbsp;
<input id="close" class="button button3" type="button" value="E X I T" onclick="windowClose()">
			</td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">₹00.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>|| Copyright &copy; <?php echo date("Y");?>. All Rights Reserved || 
		<br> Made with LOVE by <strong> Coders </strong>
        	</h5>
	 <textarea>This is a Computer generated Invoice and requires no signature.</textarea>
		</div>
	
	</div>
	
</body>
<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
		var refreshButton = document.getElementById("refresh");
		var closeButton = document.getElementById("close");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
		refreshButton.style.visibility = 'hidden';
		closeButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
		refreshButton.style.visibility = 'visible';
		closeButton.style.visibility = 'visible';
    }
</script>
<script>
         $(document).ready(function(){
             setInterval(_initTimer, 1000);
         });
         function _initTimer(){
             $.ajax({
                 url: 'timer.php',
                 success: function(data) {
                    console.log(data);
                     data = data.split(':');
                     $('#hrs').html(data[0]);
                     $('#mins').html(data[1]);
                     $('#secs').html(data[2]);
                 }
             });
         }
        </script>

</html>
