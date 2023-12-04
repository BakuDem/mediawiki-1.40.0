<?php
# This file was automatically generated by the MediaWiki 1.40.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/MainConfigSchema.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "cryptowiki.me";
$wgMetaNamespace = "Cryptowiki.me";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/mediawiki/mediawiki-1.40.0";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
	'icon' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "my_local_wiki";
$wgDBuser = "root";
$wgDBpassword = "";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "Europe/Berlin";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "cbbd5918ff427670a121de9721f8f8171f713b0936ad560ed62f27d84409497b";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "ea02bdeba19ddc98";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "vector";

$wgDefaultSkin = "Medik";
$wgMedikColor = "#1ABC9C";
$wgDefaultUserOptions['medik-font'] = '0.8em';
$wgMedikContentWidth = 'wide';
$wgMedikShowLogo = 'sidebar';
#$wgMedikShowLogo = 'main';
#$wgMedikLogoWidth = '170px';

#$wgDefaultSkin = "Metrolook";
#$wgMetrolookDownArrow = false;
#$wgMetrolookUploadButton = false;
#$wgMetrolookFeatures = array( 'collapsiblenav' => array( 'global' => false, 'user' => false ) );

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Metrolook' );
wfLoadSkin( 'Medik' );
$wgDefaultSkin = 'medik';


# End of automatically generated settings.
# Add more configuration options below.

# Scribunto extension
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

# Set the path to the Lua interpreter
$wgScribuntoEngineConf['luastandalone']['luaPath'] = 'C:/LuaBinaries/lua.exe';

# Set resource limits for Scribunto
$wgScribuntoEngineConf['luastandalone']['memoryLimit'] = 52428800; // 50 MB
$wgScribuntoEngineConf['luastandalone']['cpuLimit'] = 10; // 10 seconds
$wgScribuntoEngineConf['luastandalone']['errorFile'] = 'C:/xampp/htdocs/mediawiki/mediawiki-1.40.0/logs/error.log';

wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'NativeSvgHandler' );
wfLoadExtension( 'NewestPages' );
wfLoadExtension( 'intersection' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'Widgets' );

wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SandboxLink' );

# popups
wfLoadExtensions( [
    'TextExtracts',
    'PageImages',
    'Popups'
] );
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;


# Additional configurations can be added below this line.