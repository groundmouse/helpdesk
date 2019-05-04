<?php if (!defined('APPLICATION')) exit();
echo '<li class="steam-btn"><i class="steampackone-chat"></i>';
$Icon = '<i class="steampackone-chat"></i>';
$Text = T('Start a New Discussion', 'New Discussion');
$UrlCode = GetValue('UrlCode', GetValue('Category', $Data), '');
$Url = '/post/discussion/'.$UrlCode;
if ($this->QueryString) {
   $Url .= (strpos($Url, '?') !== FALSE ? '&' : '?').$this->QueryString;
}
$Css = '';
$Css .= strpos($this->CssClass, 'Big') !== FALSE ? '' : '';
if (count($this->Buttons) == 0) {
   echo Anchor($Text, $Url, $Css);
} else {
   // Make the core button action be the first item in the button group.
   array_unshift($this->Buttons, array('Text' => $Text, 'Url' => $Url));
   echo ButtonGroup($this->Buttons, $this->CssClass, $this->DefaultButton);
}
Gdn::Controller()->FireEvent('AfterNewDiscussionButton');

echo '</li>';