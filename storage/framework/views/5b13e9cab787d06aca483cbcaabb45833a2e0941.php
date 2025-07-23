<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Email</title>
</head>

<body>
    
    <p><strong>Name:</strong> <?php echo e($formdata['name']); ?></p>
    <p><strong>Email:</strong> <?php echo e($formdata['email']); ?></p>
    <p><strong>Phone Number:</strong> <?php echo e($formdata['phone']); ?></p>
    <p><strong>Subject:</strong> <?php echo e($formdata1['subject']); ?></p>
    <p><strong>Message:</strong> <?php echo e($formdata1['message']); ?></p>
</body>

</html>
<?php /**PATH /home/bfcpublications/public_html/resources/views/mail/contact_us.blade.php ENDPATH**/ ?>