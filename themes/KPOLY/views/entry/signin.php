<?php if (!defined('APPLICATION')) exit();
$Methods = $this->Data('Methods', array());
$SelectedMethod = $this->Data('SelectedMethod', array());
$CssClass = count($Methods) > 0 ? ' MultipleEntryMethods' : ' SingleEntryMethod';

// Testing
//$Methods['Facebook'] = array('Label' => 'Facebook', 'Url' => '#', 'ViewLocation' => 'signin');
//$Methods['Twitter'] = array('Label' => 'Twitter', 'Url' => '#', 'ViewLocation' => 'signin');

echo '<h1>'.$this->Data('Title').'</h1>';
echo '<div class="ctt">';

// Make sure to force this form to post to the correct place in case the view is
// rendered within another view (ie. /dashboard/entry/index/):
echo $this->Form->Open(array('Action' => $this->Data('FormUrl', Url('/entry/signin')), 'id' => 'Form_User_SignIn'));
echo $this->Form->Errors();

echo '<div class="Entry'.$CssClass.'">';

   // Render the main signin form.
   echo '<div class="MainForm">';
   ?>
<div class="ofoldright"></div>
<div class="orfoldright"></div>
<div class="ofoldleft"></div>
<div class="orfoldleft"></div>
  <ul>  
      <li>
        <div class="row up"> <div class="col-md-4"><?php
            echo $this->Form->Label('Email/Username', 'Email');
?>
</div><div class="col-md-8">
 <?php
           echo $this->Form->TextBox('Email', array('autocorrect' => 'off', 'autocapitalize' => 'off', 'Wrap' => TRUE));
         ?>
     </div> </div></li>
      <li>  <div class="row"> <div class="col-md-4">
         <?php
            echo $this->Form->Label('Password', 'Password');
         ?>
		  </div><div class="col-md-8">
		<?php
        
            echo $this->Form->Input('Password', 'password', array('class' => 'InputBox Password'));
         
         ?> </div>
       </div></li>
   </ul>
   <?php
   
//   echo $this->Data('MainForm');

   echo '</div>';

   // Render the buttons to select other methods of signing in.
   if (count($Methods) > 0) {
      echo '<div class="Methods">'
         .Wrap('<b>'.T('Or you can...').'</b>', 'div');

      foreach ($Methods as $Key => $Method) {
         $CssClass = 'Method Method_'.$Key;
         echo '<div class="'.$CssClass.'">',
            $Method['SignInHtml'],
            '</div>';
      }

      echo '</div>';
   }

echo '</div>';

?>

<div class="row dtop">
<div class="col-md-6 chekco"><?php
echo $this->Form->CheckBox('RememberMe', T('Keep me signed in'), array('value' => '1', 'id' => 'SignInRememberMe'));
?></div>

<div class="col-md-6 rright">
<?php
 echo Anchor(T('Forgot?'), '/entry/passwordrequest', 'ForgotPassword');
         ?>
</div>


</div>

<?php
echo '</div>';
?>

<div class="Buttons">

 <?php
   echo $this->Form->Button('Sign In', array('class' => 'Button Primary'));
   ?>
<?php if (strcasecmp(C('Garden.Registration.Method'), 'Connect') != 0): ?>


<div class="CreateAccount mj">
   <?php
      $Target = $this->Target();
      if ($Target != '')
         $Target = '?Target='.urlencode($Target);

      printf(T("Don't have an account? %s"), Anchor(T('Create One.'), '/entry/register'.$Target));
   ?>
</div>
<?php endif; ?>

</div>

<?php
echo $this->Form->Close();

// Password reset form.
echo $this->Form->Open(array('Action' => Url('/entry/passwordrequest'), 'id' => 'Form_User_Password', 'style' => 'display: none;'));
?>
<ul>
   <li>
      <?php
         echo $this->Form->Label('Enter your Email address or username', 'Email');
         echo $this->Form->TextBox('Email');
      ?>
   </li>
   <li class="Buttons">
      <?php
         echo $this->Form->Button('Request a new password', array('class' => 'Button Primary'));
         echo Anchor(T('I remember now!'), '/entry/signin', 'ForgotPassword');
      ?>
   </li>
</ul>








<style type="text/css" >

.foldmenu,.origamit,.menucol,.footerw,.rightl,.fic,.BreadcrumbsWrapper {display:none;}
header {
background:none;}
.logocol {width:100% !important;text-align:center;color:#333333;}
.SiteTitle a {
color: #333333;position: relative;
top: 40px;
}
.ContentColumn {background: #FAFAFA;
border-right: 1px solid #ECECEC;
border-left: 6px solid #fff;

padding: 20px;
padding-left: 18px;position:relative;border-radius: 0 25px 0 25px;
}
.ofoldright {right:0px;}
.orfoldright{right:4px;}
.ofoldleft{left: -6px;}
.orfoldleft{left: 9px;}
.orifooter {background:none;border:none;}
.leftl {float:none;width:100%;text-align:center;padding:0px;}
.footcop {
font-size: 13px;
color: #000000;
opacity: 0.9;
font-weight: normal;
margin-left: -15px;
font-family: "Open Sans", helvetica, arial, sans-serif;
}
h1 {font-size:17px;margin:0 0 20px;}
body.Entry form ul li label {
padding: 8px 0 0;}
.Primary {display:block;padding:15px;width:100%;margin:15px 0px;font-size:14px;}
.CreateAccount a {color:#00B894;}
.orifooter {padding-bottom:0px;margin-top: 64px;}
a.ForgotPassword {font-size:14px;font-family:'Open Sans';font-weight: 400;
font-size: 13px;color:#333333;}

.icheckbox_flat-blue, .iradio_flat-blue {
top: -1px;
}


</style>

<?php echo $this->Form->Close();