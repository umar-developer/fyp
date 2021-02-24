<div class=" container md-top ">
        <!-- Button trigger modal -->
        <button class="btn btn-succss btn-lg" data-toggle="modal" data-target="#myModal">
                USER REGISTRATION - CREATE MY ACCOUNT


        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <!-- CREATE MY ACCOUNT -->
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel"> Donation Form - CREATE MY ACCOUNT
                                        </h4>
                                </div>
                                <div class="modal-body">
                                        <strong> Note!</strong>
                                        <h5>All field labels marked red are required.</h5>
                                        <ul>
                                                <li>Your user name should not be more than 15 characters long.</li>
                                                <li> Only alphanumeric characters are accepted.</li>
                                                <li>
                                                        Ensure that you complete each field with accurate information. CTN Ghana reserves the right to revoke any account it suspects to be fictitious.
                                                </li>
                                        </ul>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                        </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
</div>
<form action="donation-successful.php" class="form-inline container hamformone" method="POST">
        <fieldset class="scheduler-border w-100">
                <legend class="scheduler-border animated bounceInRight" style="color:goldenrod; font-weight:bold;">Personal Information

                </legend>
                <div class="row animated ">
                        <div class="col-md-6 ">
                                <label for="" class="hamlabel">Your Full Name: <span class="astaric">*</span> </label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Your email address: <span class="astaric">*</span></label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
        </fieldset>

        <fieldset class="scheduler-border">
                <legend class="scheduler-border animated bounceInRight" style="color:goldenrod; font-weight:bold;">Description


                </legend>
                <div class="row animated">
                        <div class="col-md-6">
                                <label for="" class="hamlabel">First Name: <span class="astaric">*</span> </label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Last Name: <span class="astaric">*</span></label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Addres: <span class="astaric">*</span> </label>
                                <textarea name="" id="" cols="18" rows="5" class="form-control animated bounceIn haminputfirst"></textarea>
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">City: <span class="astaric">*</span></label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Country: <span class="astaric">*</span> </label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Mobile: <span class="astaric">*</span></label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>

                </div>
                <div class="row animated">
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Payment Method: <span class="astaric">*</span> </label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                        <div style="padding-bottom: 18px;">Donation Amount<span style="color: red;"> *</span><br />
                                <span><input type="radio" id="data_5_0" name="data_5" value="$50" /> $50</span><br />
                                <span><input type="radio" id="data_5_1" name="data_5" value="$100" /> $100</span><br />
                                <span><input type="radio" id="data_5_2" name="data_5" value="$250" /> $250</span><br />
                                <span><input type="radio" id="data_5_3" name="data_5" value="$500" /> $500</span><br />
                        </div>
                        <div class="col-md-6">
                                <label for="" class="hamlabel">Company: <span class="astaric">*</span></label>
                                <input type="text" class="form-control animated bounceIn haminputfirst" style="width:50%;">
                        </div>
                </div>

        </fieldset>

        <div class="submit mb-2">

                <input type="submit" class="btn btn-success  " value="Submit Form">
                <input type="reset" class="btn btn-danger  " value="Reset Form">

        </div>
    </fieldset>
</form>









<script src="#" type="text/javascript"></script>
<script type="text/javascript">
        function validateForm() {
                if (!validateEmail(document.getElementById('data_4').value.trim())) {
                        alert('Email must be a valid email address!');
                        return false;
                }
                if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked && !document.getElementById('data_5_2').checked && !document.getElementById('data_5_3').checked) {
                        alert('Donation Amount is required!');
                        return false;
                }
                return true;
        }

        function isEmpty(str) {
                return (str.length === 0 || !str.trim());
        }

        function validateEmail(email) {
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
                return isEmpty(email) || re.test(email);
        }
</script>