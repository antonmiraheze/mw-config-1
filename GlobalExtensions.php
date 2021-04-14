<?php // This is a default global extension, new extensions can be add to localextensions.php
wfLoadExtensions( [	
	'3D',
    	'AbuseFilter',
//	'AntiSpoof',
	'CentralNotice',
	'CentralAuth',
	'CheckUser',
	'CodeEditor',
	'CodeMirror',
	'ConfirmEdit',
	'DiscussionTools',
	'DismissableSiteNotice',
	'Echo',
	'EventLogging',
	'EventStreamConfig',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalPreferences',
	'GlobalUsage',
	'GlobalUserPage',
	'ImageMap',
	'InputBox',
	'Interwiki',
	'LocalisationUpdate',
	'Linter',
	'Nuke',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'ProtectSite',
	'Renameuser',
	'Scribunto',
	'SpamBlacklist',
	'SyntaxHighlight_GeSHi',
	'TorBlock',
	'TemplateStyles',
	'TemplateWizard',
	'UserMerge',
	'UniversalLanguageSelector',
	'VisualEditor',
	'WikiEditor',
] );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;
