
<?php
include "dbcon.php";

mysqli_query($db,"delete from joining,kyc,month,monthly_user,monthly_income,msg_to_admin,normal_income,notification,otp,pair,pair_count,payment_history,per_care,pinadv,pintwo,pinlist,plan,plant,register,reply,seeds,subadmin,tree,user");


?>