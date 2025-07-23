<form action="<?php echo $url; ?>" name="frm1" method="post">
<input type="text" name="signature" value='<?php echo $postData->signature; ?>'/>
      <?php 
   // echo 'as'; die;
      ?>
      <input type="text" name="orderCurrency" value='<?php echo $postData->orderCurrency; ?>'/>
      <input type="text" name="customerName" value='<?php echo $postData->customerName; ?>'/>
      <input type="text" name="customerEmail" value='<?php echo $postData->customerEmail; ?>'/>
      <input type="text" name="customerPhone" value='<?php echo $postData->customerPhone; ?>'/>
      <input type="text" name="orderAmount" value='<?php echo $postData->orderAmount; ?>'/>
      <input type ="text" name="notifyUrl" value='<?php echo $postData->notifyUrl; ?>'/>
      <input type ="text" name="returnUrl" value='<?php echo $postData->returnUrl; ?>'/>
      <input type="text" name="appId" value='<?php echo $postData->appId; ?>'/>
      <input type="text" name="orderId" value='<?php echo $postData->orderId; ?>'/>
</form>