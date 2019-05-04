<?php if (!defined('APPLICATION')) exit(); ?>
<div class="FormTitleWrapper">
<h1><?php echo T("Apply for Membership") ?></h1>
<div class="FormWrapper">
   <?php
   $TermsOfServiceUrl = Gdn::Config('Garden.TermsOfService', '#');
   $TermsOfServiceText = sprintf(T('I agree to the <a id="TermsOfService" class="Popup" target="terms" href="%s">terms of service</a>'), Url($TermsOfServiceUrl));
   $CaptchaPublicKey = Gdn::Config('Garden.Registration.CaptchaPublicKey');
   $Request = Gdn::Request();
   $CaptchaSSL = (StringBeginsWith(Url('/', TRUE), 'https') || Gdn::Request()->GetValueFrom(Gdn_Request::INPUT_SERVER, 'SERVER_PORT') == 443) ? TRUE : FALSE;
   
   // Make sure to force this form to post to the correct place in case the view is
   // rendered within another view (ie. /dashboard/entry/index/):
   echo $this->Form->Open(array('Action' => Url('/entry/register'), 'id' => 'Form_User_Register'));
   echo $this->Form->Errors();
   ?>
 <div class="ofoldright"></div>
<div class="orfoldright"></div>
<div class="ofoldleft"></div>
<div class="orfoldleft"></div>  

   <ul>
      <?php if (!$this->Data('NoEmail')): ?>
      <li>
         <?php
            echo $this->Form->Label('Email', 'Email');
            echo $this->Form->TextBox('Email', array('type' => 'email', 'Wrap' => TRUE));
				echo '<span id="EmailUnavailable" class="Incorrect" style="display: none;">'.T('Email Unavailable').'</span>';
         ?>
      </li>
      <?php endif; ?>
      <li>
         <?php
            echo $this->Form->Label('Username', 'Name');
            echo $this->Form->TextBox('Name', array('autocorrect' => 'off', 'autocapitalize' => 'off', 'Wrap' => TRUE));
            echo '<span id="NameUnavailable" class="Incorrect" style="display: none;">'.T('Name Unavailable').'</span>';
         ?>
      </li>
      <?php $this->FireEvent('RegisterBeforePassword'); ?>
      <li>
         <?php
            echo $this->Form->Label('Password', 'Password');
            echo Wrap(sprintf(T('Your password must be at least %d characters long.'), C('Garden.Registration.MinPasswordLength')), 'div', array('class' => 'Gloss')); 
            echo $this->Form->Input('Password', 'password', array('Wrap' => TRUE, 'Strength' => TRUE));
         ?>
      </li>
      <li>
         <?php
            echo $this->Form->Label('Confirm Password', 'PasswordMatch');
            echo $this->Form->Input('PasswordMatch', 'password', array('Wrap' => TRUE));
            echo '<span id="PasswordsDontMatch" class="Incorrect" style="display: none;">'.T("Passwords don't match").'</span>';
         ?>
      </li>
      <li class="Gender">
         <?php
            echo $this->Form->Label('Gender', 'Gender');
            echo $this->Form->RadioList('Gender', $this->GenderOptions, array('default' => 'u'))
         ?>
      </li>
      <?php if ($this->Form->GetValue('DiscoveryText') || GetValue('DiscoveryText', $this->Form->ValidationResults()) ): ?>
      <li>
         <?php
            echo $this->Form->Label('Why do you want to join?', 'DiscoveryText');
            echo $this->Form->TextBox('DiscoveryText', array('MultiLine' => TRUE, 'Wrap' => TRUE));
         ?>
      </li>
      <?php endif; ?>
      <li class="CaptchaInput">
      <?php
         echo $this->Form->Label("Security Check", '');
         echo recaptcha_get_html($CaptchaPublicKey, NULL, $CaptchaSSL);
      ?></li>
      <?php $this->FireEvent('RegisterFormBeforeTerms'); ?>
      <li>
         <?php
            echo $this->Form->CheckBox('TermsOfService', '@'.$TermsOfServiceText, array('value' => '1'));
            echo $this->Form->CheckBox('RememberMe', T('Remember me on this computer'), array('value' => '1'));
         ?>
      </li>
      <li class="Buttons">
         <?php echo $this->Form->Button('Sign Up', array('class' => 'Button Primary')); ?>
      </li>
   </ul>
   <?php echo $this->Form->Close(); ?>
</div>
</div>


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
.orifooter {margin-top: 64px;}
a.ForgotPassword {font-size:14px;font-family:'Open Sans';font-weight: 400;
font-size: 13px;color:#333333;}

.icheckbox_flat-blue, .iradio_flat-blue {
top: -1px;
}
.footcop {maring-bottom:20px;}
.FormWrapper {background:none;padding:0px;}
</style>