<?php include 'inc/header.php' ?>
<?php 
echo "<div class='container'><h1 class='text-center text-success p-3'>Thank you for your Donation</h1></div>";
//$dd = Session::get('cmrId');
//$getValue = $Menu->delAllCustomerCart($dd);


$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("arkco5f6f282f06984");
$store_passwd=urlencode("arkco5f6f282f06984@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

  # TO CONVERT AS ARRAY
  # $result = json_decode($result, true);
  # $status = $result['status'];

  # TO CONVERT AS OBJECT
  $result = json_decode($result);

  # TRANSACTION INFO
  $status = $result->status;
  $tran_date = $result->tran_date;
  $tran_id = $result->tran_id;
  $val_id = $result->val_id;
  $amount = $result->amount;
  $store_amount = $result->store_amount;
  $bank_tran_id = $result->bank_tran_id;
  $card_type = $result->card_type;

  # EMI INFO
  $emi_instalment = $result->emi_instalment;
  $emi_amount = $result->emi_amount;
  $emi_description = $result->emi_description;
  $emi_issuer = $result->emi_issuer;

  # ISSUER INFO
  $card_no = $result->card_no;
  $card_issuer = $result->card_issuer;
  $card_brand = $result->card_brand;
  $card_issuer_country = $result->card_issuer_country;
  $card_issuer_country_code = $result->card_issuer_country_code;

  # API AUTHENTICATION
  $APIConnect = $result->APIConnect;
  $validated_on = $result->validated_on;
  $gw_version = $result->gw_version;
  echo '<div class="container-fluid"> <table class="table table-bordered">';
  echo '<tr><th>Valid :</th><td>'.$status .'</td></tr>';
  echo '<tr><th>Transaction Date :</th><td>'.$tran_date .'</td></tr>';
  echo '<tr><th>Transaction Id :</th><td>'.$tran_id .'</td></tr>';
  echo '<tr><th>Validation Id :</th><td>'.$val_id .'</td></tr>';
  echo '<tr><th>Amount :</th><td>'.$amount.'</td></tr>';
  echo '<tr><th>Store Amount :</th><td>'.$store_amount.'</td></tr>';
  echo '<tr><th>Bank Transaction Id :</th><td>'.$bank_tran_id.'</td></tr>';
  echo '<tr><th>Payment Type :</th><td>'.$card_type.'</td></tr>';
  echo '</table></div>';

} else {

  echo "Failed to connect with SSLCOMMERZ";
}


 ?>
<?php include 'inc/footer.php' ?>