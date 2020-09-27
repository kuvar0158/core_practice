<?php
$userID = Yii::$app->request->get('id');
// print_r($userID); die;
// print_r($userDetail); die;
unset($userID);
if(isset($userID)){
	echo "jiji"; die;
}
die('wow');

?>
<script type="text/javascript">
	ProfileSubmit = function(){
    // e.preventDefault();
        // jsUrl = "<?php Url::base(); ?>";
        // alert('lo'); return false;
        $("input[name='_csrf']").remove();
        var param = $('#importProfileForm').serialize();

            $.ajax({
                type: 'post',
                url:'<?= Url::to('/welcome/import-profile')?>',
                data: param,
                dataType:'json',
                success: function(data){
                  console.log(data);
                  // alert(data.GetUserId);
                  // console.log(data.subscripyeTypeId);
                  $('#importModal').modal('hide');
                  location.href = '<?= Url::to(['/welcome/basic-details']); ?>?id='+data.GetUserId;

                  // $('#importModal').hide();
                    // $('.sdBtn').show(); $('.sdWait').hide();
                    // if(data.status == 'verify'){
                    //     $('#login_section').hide();
                    //     $('#response_msg_section').show();
                    //     $('#response_msg_section').html(data.message);
                        
                    // }else if(data.status == 'inactive'){
                    //     $('#loginHolder').removeClass('form_login');
                    //     $('#loginHolder').html(data.message);
                        
                    // }else if(data.status == 'disable'){
                    //     $('#NotMatch').html(data.message);
                        
                    // }else if(data.status == 'N'){
                    //     $.each(data.detail,function(idx,val){
                    //         $('#ll_err'+idx).html(val);
                    //         $('.l_err'+idx).addClass("invalid");
                    //     });
                    //     $('#NotMatch').html(data.message);
                       
                    // }else{
                    //    $('#loginHolder').html('<div class="idt_msg" style="color: green; padding: 115px 10px 125px; text-align: center;font-size:16px;" >'+data.message+'</div>'); 
                    //    window.location = data.action;
                    // }
                },
                error: function(xhr, textStatus, errorThrown){
                }
            });
            return false;
    }
</script>
<?php
=======================================controller ka work yha pay hai==================
public function actionImportProfile(){
        $GetUserId = Yii::$app->request->post('getUserId');
        $getUserDetail =  User::checkCurrrentUserdetail($GetUserId);
        $rec = ['msg' => 'success', 'GetUserId' =>$GetUserId];
        // print_r($getUserDetail); die;
        return json_encode($rec);
    }
    <!DOCTYPE html>
<html>
<body>

<?php
$a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}
?>

</body>
</html>
