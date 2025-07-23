<!DOCTYPE html>
<html>

<head>
    <title>Career Mail</title>
</head>

<body>
    
    <p><strong>Name:</strong> <?php echo e($hrData['inputname']); ?></p>
    <p><strong>Email:</strong> <?php echo e($hrData['inputEmail']); ?></p>
    <p><strong>Phone Number:</strong> <?php echo e($hrData['inputnumber']); ?></p>
    <p><strong>Post Applied For</strong> <?php echo e($hrData['inputPost']); ?></p>
</body>

</html>
<?php /**PATH /home/bfcpublications/public_html/resources/views/mail/hr_mail_view.blade.php ENDPATH**/ ?>