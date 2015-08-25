<div class="row">
    <div class="page-header">
        <h2>Form Registrasi </h2>
        <hr>
        <form action="doregister" method="post">
            <?php echo validation_errors(); ?>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="userid" class="col-sm-2 control-label">User Id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userid" name="userid" value="<?php echo set_value('userid'); ?>">
                        <div id="msg"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password2" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passconf" name="passconf" placeholder="">
                        <div id="pswconf"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo set_value('first_name'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo set_value('last_name'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="city" name="city" value="<?php echo set_value('city'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="institution" class="col-sm-2 control-label">Institution</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="institution" name="institution" value="<?php echo set_value('institution'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="institution" class="col-sm-2 control-label">Enter above text</label>
                    
                    <div class="col-sm-10">
                        <?php   echo $captcha['image'];?>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="captcha" name="captcha" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-default" id="register" name="register" value="Register">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$("document").ready(function(){
    
    //check userid availability
    $("#userid").blur(function(){
        var userid = $(this).val();
        $.ajax
        ({
                type: "POST",
                url: "<?php echo base_url().'index.php/frontpage/frontpage/checkuserid/'?>" + userid,
                success: function(msg)
                {   if(msg!==''){			
                        $("#msg").html(msg);
                        $("#msg").attr('class','alert alert-danger');
                        $("#userid").focus();
                    }else{
                        $("#msg").removeAttr('class');
                        $("#msg").html('');
                    }
                    
                }
        });
    });
    
    //check password similarity
    $("#passconf").blur(function(){
        var password = $("#password").val();
        var passconf = $("#passconf").val();
        if(password !== passconf){
            $("#pswconf").html("Password do not match!");
            $("#pswconf").attr('class','alert alert-danger');
            $("#passconf").focus();
        }else{
            $("#pswconf").html("");
            $("#pswconf").removeAttr('class');
        }
    });
});
</script>