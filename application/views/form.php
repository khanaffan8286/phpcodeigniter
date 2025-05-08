<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<html>
    <head><script src="https://cdn.tailwindcss.com"></script>
    </head>

<body class="bg-gray-200 flex justify-center items-center">

<?php echo form_open('homecontroller/my_func',['id'=>'my-form','class'=> 'my-form','method'=>'post']);?>
<input type="text" class="form-control" name="uname" value="<?php echo set_value('username');?>" placeholder="username">
<?php echo form_error('username');?>
<input type="password" name="upass" placeholder="password" value="<?php echo set_value('password');?>" class="form-control">
<?php echo form_error('password');?>
<input type="text" name="uemail" placeholder="email" value="<?php echo set_value('email');?>" class="form-control">
<?php echo form_error('email');?>
<input type="file" name="document" class="form-control">
<input type="submit" value="Submit" class="btn btn-success">
 <?php echo form_submit('submit','login',['class'=>'form-control w-25 mt-5 btn btn-success']);?> 
<?php echo form_close();?>



<script>
    function myfunc(){
        alert("thankyou")
    }
</script>

</body>



</html>