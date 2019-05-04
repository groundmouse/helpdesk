<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.9';

// Database
$Configuration['Database']['Name'] = 'frontdesk_db';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'front-desk';
$Configuration['Database']['Password'] = 'G0d\'s0rda!n3d';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['AddRegistrationQuestion'] = TRUE;
$Configuration['EnabledPlugins']['CSSedit'] = TRUE;
$Configuration['EnabledPlugins']['Emotify'] = TRUE;
$Configuration['EnabledPlugins']['Quotes'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['AllViewed'] = TRUE;
$Configuration['EnabledPlugins']['JumpToTop'] = TRUE;
$Configuration['EnabledPlugins']['Friendships'] = TRUE;
$Configuration['EnabledPlugins']['ThankfulPeople2'] = TRUE;
$Configuration['EnabledPlugins']['ImageUpload'] = TRUE;
$Configuration['EnabledPlugins']['Tagging'] = TRUE;
$Configuration['EnabledPlugins']['ProfileExtender'] = TRUE;
$Configuration['EnabledPlugins']['livereload'] = TRUE;
$Configuration['EnabledPlugins']['MentionsLookup'] = TRUE;
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = TRUE;
$Configuration['EnabledPlugins']['cleditor'] = TRUE;
$Configuration['EnabledPlugins']['FileUpload'] = TRUE;
$Configuration['EnabledPlugins']['IndexPhotos'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'FDESK';
$Configuration['Garden']['Cookie']['Salt'] = '1ERIEN6SHI';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Approval';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '4';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'KOFORIDUA POLY FRONT DESK';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = FALSE;
$Configuration['Garden']['SystemUserID'] = 2;
$Configuration['Garden']['Version'] = '2.1.9';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'KPOLY';
$Configuration['Garden']['ThemeOptions']['Name'] = 'KPOLY ONLINE FRONT DESK';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Origami';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_header';
$Configuration['Garden']['Embed']['Allow'] = TRUE;
$Configuration['Garden']['HomepageTitle'] = 'FDESK';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['Format']['Hashtags'] = FALSE;
$Configuration['Garden']['Logo'] = 'H5RBD4QAWXRN.jpg';
$Configuration['Garden']['Messages']['Cache'] = array('Vanilla/Discussion/Index', 'Vanilla/Discussions/Index');

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['AddRegistrationQuestion']['SecretCode'] = 'Koforidua';
$Configuration['Plugins']['AddRegistrationQuestion']['Label'] = 'Enter the code below.<br><span style="color:red;">Koforidua</span>';
$Configuration['Plugins']['FileUpload']['Enabled'] = TRUE;

// ProfileExtender
$Configuration['ProfileExtender']['Fields']['Country']['FormType'] = 'Dropdown';
$Configuration['ProfileExtender']['Fields']['Country']['Label'] = 'Country';
$Configuration['ProfileExtender']['Fields']['Country']['Options'] = array('', '', '    Afghanistan', '    Albania', '    Algeria', '    Andorra', '    Angola', '    Antigua and Barbuda', '    Argentina', '    Armenia', '    Aruba', '    Australia', '    Austria', '    Azerbaijan', '    Bahamas The', '    Bahrain', '    Bangladesh', '    Barbados', '    Belarus', '    Belgium', '    Belize', '    Benin', '    Bhutan', '    Bolivia', '    Bosnia and Herzegovina', '    Botswana', '    Brazil', '    Brunei', '    Bulgaria', '    Burkina Faso', '    Burma', '    Burundi', '    Cambodia', '    Cameroon', '    Canada', '    Cape Verde', '    Central African Republic', '    Chad', '    Chile', '    China', '    Colombia', '    Comoros', '    Congo Democratic Republic of the', '    Congo Republic of the', '    Costa Rica', '    Cote dIvoire', '    Croatia', '    Cuba', '    Curacao', '    Cyprus', '    Czech Republic', '    Denmark', '    Djibouti', '    Dominica', '    Dominican Republic', '    East Timor see Timor-Leste', '    Ecuador', '    Egypt', '    El Salvador', '    Equatorial Guinea', '    Eritrea', '    Estonia', '    Ethiopia', '    Fiji', '    Finland', '    France', '    Gabon', '    Gambia The', '    Georgia', '    Germany', '    Ghana', '    Greece', '    Grenada', '    Guatemala', '    Guinea', '    Guinea-Bissau', '    Guyana', '    Haiti', '    Holy See', '    Honduras', '    Hong Kong', '    Hungary', '    Iceland', '    India', '    Indonesia', '    Iran', '    Iraq', '    Ireland', '    Israel', '    Italy', '    Jamaica', '    Japan', '    Jordan', '    Kazakhstan', '    Kenya', '    Kiribati', '    Korea North', '    Korea South', '    Kosovo', '    Kuwait', '    Kyrgyzstan', '    Laos', '    Latvia', '    Lebanon', '    Lesotho', '    Liberia', '    Libya', '    Liechtenstein', '    Lithuania', '    Luxembourg', '    Macau', '    Macedonia', '    Madagascar', '    Malawi', '    Malaysia', '    Maldives', '    Mali', '    Malta', '    Marshall Islands', '    Mauritania', '    Mauritius', '    Mexico', '    Micronesia', '    Moldova', '    Monaco', '    Mongolia', '    Montenegro', '    Morocco', '    Mozambique', '    Namibia', '    Nauru', '    Nepal', '    Netherlands', '    Netherlands Antilles', '    New Zealand', '    Nicaragua', '    Niger', '    Nigeria', '    North Korea', '    Norway', '    Oman', '    Pakistan', '    Palau', '    Palestinian Territories', '    Panama', '    Papua New Guinea', '    Paraguay', '    Peru', '    Philippines', '    Poland', '    Portugal', '    Qatar', '    Romania', '    Russia', '    Rwanda', '    Saint Kitts and Nevis', '    Saint Lucia', '    Saint Vincent and the Grenadines', '    Samoa', '    San Marino', '    Sao Tome and Principe', '    Saudi Arabia', '    Senegal', '    Serbia', '    Seychelles', '    Sierra Leone', '    Singapore', '    Sint Maarten', '    Slovakia', '    Slovenia', '    Solomon Islands', '    Somalia', '    South Africa', '    South Korea', '    South Sudan', '    Spain', '    Sri Lanka', '    Sudan', '    Suriname', '    Swaziland', '    Sweden', '    Switzerland', '    Syria', '    Taiwan', '    Tajikistan', '    Tanzania', '    Thailand', '    Timor-Leste', '    Togo', '    Tonga', '    Trinidad and Tobago', '    Tunisia', '    Turkey', '    Turkmenistan', '    Tuvalu', '    Uganda', '    Ukraine', '    United Arab Emirates', '    United Kingdom', '    Uruguay', '    Uzbekistan', '    Vanuatu', '    Venezuela', '    Vietnam', '    Yemen', '    Zambia', '    Zimbabwe', '');
$Configuration['ProfileExtender']['Fields']['Country']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['Country']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['Country']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['FormType'] = 'DateOfBirth';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Label'] = 'DateOfBirth';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['DateOfBirth']['OnProfile'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// ThemeOption
$Configuration['ThemeOption']['HeaderMenuColor'] = '';
$Configuration['ThemeOption']['GreenColor'] = '';
$Configuration['ThemeOption']['VioletColor'] = '';
$Configuration['ThemeOption']['FooterMenuColor'] = '#06356C ';
$Configuration['ThemeOption']['FooterWidgets-Enter-Block-or-None'] = '';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.9';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = FALSE;
$Configuration['Vanilla']['Categories']['HideModule'] = FALSE;

// Last edited by code_red (127.0.0.1)2015-06-02 14:39:59