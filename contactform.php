<!--
URL: www.freecontactform.com
Version: FreeContactForm Free V2
Copyright (c) 2012 Stuart Cochrane
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Contact Us</title>
	<script src="freecontactformvalidation.js"></script>
	<script>
	required.add('Full_Name','NOT_EMPTY','Full Name');
	required.add('Email_Address','EMAIL','Email Address');
	required.add('Your_Message','NOT_EMPTY','Your Message');
	required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
	</script>
	<link rel="stylesheet" type="text/css" href="freecontactform.css">
	<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
.style1 {
	font-size: 24px;
	color: #0000FF;
}
-->
    </style></head>
	<body>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><br>
      
    </p>
    <form name="freecontactform" method="post" action="freecontactformprocess.php" onSubmit="return validate.check(this)">
	<table width="400px" class="freecontactform">
	<tr>
	 <td colspan="2">
	  
	 <div class="freecontactformheader style1">Contact Us Form</div>
	  
	 <div class="freecontactformmessage">Fields marked with <span class="required_star"> * </span> are mandatory.</div>
	  
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Full_Name" class="required">Full Name<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Full_Name" id="Full_Name" maxlength="80" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Email_Address" class="required">Email Address<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Telephone_Number" class="not-required">Telephone Number</label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Telephone_Number" id="Telephone_Number" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Your_Message" class="required">Your Message<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <textarea style="width:230px;height:160px" name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	  <div class="antispammessage">
	  To help prevent automated spam, please answer this question
	  <br /><br />
		  <div class="antispamquestion">
		   <span class="required_star"> * </span>
		   Using only numbers, what is 10 plus 15? &nbsp; 
		   <input type="text" name="AntiSpam" id="AntiSpam" maxlength="100" style="width:30px">
		  </div>
	  </div>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	 <br /><br />
	  <input type="submit" value=" Submit Form ">
	  <br /><br />
	  <div style="font-size:0.9em"></div>
	  <br /><br />
	 </td>
	</tr>
	</table>
	</form>
</body>
</html>