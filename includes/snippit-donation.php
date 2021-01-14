<div class="container text-center custom-container" style="max-width:500px;">

<form method="post" action="#" onSubmit="">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;" class="font-weight-bold text-danger">Climate Project Northern University Donation Form</div>
<div style="display: flex; padding-bottom: 18px;max-width : 550px;">
<div style=" margin-left: 0; margin-right: 1%; width: 49%;">First name<br/>
<input type="text" id="data_2" name="data_2" style="max-width: 100%;" class="form-control"/>
</div>
<div style=" margin-left: 1%; margin-right: 0; width: 49%;">Last name<br/>
<input type="text" id="data_3" name="data_3" style="max-width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Email<br/>
<input type="text" id="data_4" name="data_4" style="max-width : 550px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Donation Amount<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_5_0" name="data_5" value="$50"/> $50</span><br/>
<span><input type="radio" id="data_5_1" name="data_5" value="$100"/> $100</span><br/>
<span><input type="radio" id="data_5_2" name="data_5" value="$250"/> $250</span><br/>
<span><input type="radio" id="data_5_3" name="data_5" value="$500"/> $500</span><br/>
</div>
<div style="padding-bottom: 18px;">Full Address<br/>
<textarea id="data_6" false name="data_6" style="max-width : 550px;" rows="3" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input class=" btn-large btn-danger" name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<!-- <div style="float:right"><a href="" id="lnk100" title="form to email">form to email</a></div> -->
<script src="#" type="text/javascript"></script>
</div>
</form>
</div>
<script type="text/javascript">
function validateForm() {
if (!validateEmail(document.getElementById('data_4').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked && !document.getElementById('data_5_2').checked && !document.getElementById('data_5_3').checked ) {
alert('Donation Amount is required!');
return false;}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
