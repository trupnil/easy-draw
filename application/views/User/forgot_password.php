<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Launch Bootstrap modal on page load</title>
<!-- CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- CDN -->
</head>
<body>
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Load Bootstrap modal on page launch</h4>
</div>
<div class="modal-body">
    <form method="POST" action="<?php echo base_url() ?>User/reset_password">
<p>
Reset Password:
<input type="hidden" name="email" value="<?php echo $email;  ?>"> 

<input type="text" name="reset" placeholder="reset your password">
<br>
Cofirm Password:
<input type="text" name="confirm" placeholder="confirm your password">
<br>
<input type="submit" name="submit" value="submit">
</p>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>
<script>
$(document).ready(function () {
$('.modal').modal('show');
});
</script>
</body>
</html>

FacebookTwitte