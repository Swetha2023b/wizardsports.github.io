<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
// session_start();
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());

}

// $app_stud_email = $_SESSION['email'];

?>
<script>
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    // value: '12.09'
                    value: '0.01'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details);
            window.location.replace("http://localhost/payment/success.php")   
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/payment/Oncancel.html")
    }
}).render('#paypal-payment-button');

</script>




<!-- $reg_query = "INSERT INTO tbl_stud_approval(payment) VALUE('Done') where app_stud_email = '$app_stud_email'";
            $reg_queryresult = mysqli_query($db,$reg_query);
            if($reg_queryresult){
                window.location.replace("http://localhost/payment/success.html")
            }
            else {
                window.location.replace("http://localhost/payment/Oncancel.html")            }  -->