function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1377875606",[],"site"],["noscript","1377875606",[],"noscript"],["startup","1405847992",[],"startup"],["filepage","1377875606"],["user.groups","1377875606",[],"user"],["user","1377875606",[],"user"],["user.cssprefs","1405847992",["mediawiki.user"],"private"],["user.options","1405847992",[],"private"],["user.tokens","1377875606",[],"private"],["mediawiki.language.data","1405847992",["mediawiki.language.init"]],["skins.chick","1377875606"],["skins.cologneblue","1377875606"],["skins.modern","1377875606"],["skins.monobook","1377875606"],["skins.nostalgia","1377875606"],["skins.simple","1377875606"],["skins.standard","1377875606"],["skins.vector","1377875606"],["jquery","1377875606"],[
"jquery.appear","1377875606"],["jquery.arrowSteps","1377875606"],["jquery.async","1377875606"],["jquery.autoEllipsis","1377875606",["jquery.highlightText"]],["jquery.badge","1377875606"],["jquery.byteLength","1377875606"],["jquery.byteLimit","1377875606",["jquery.byteLength"]],["jquery.checkboxShiftClick","1377875606"],["jquery.client","1377875606"],["jquery.collapsibleTabs","1377875606"],["jquery.color","1377875606",["jquery.colorUtil"]],["jquery.colorUtil","1377875606"],["jquery.cookie","1377875606"],["jquery.delayedBind","1377875606"],["jquery.expandableField","1377875606",["jquery.delayedBind"]],["jquery.farbtastic","1377875606",["jquery.colorUtil"]],["jquery.footHovzer","1377875606"],["jquery.form","1377875606"],["jquery.getAttrs","1377875606"],["jquery.highlightText","1377875606",["jquery.mwExtension"]],["jquery.hoverIntent","1377875606"],["jquery.json","1377875606"],["jquery.localize","1377875606"],["jquery.makeCollapsible","1388979765"],["jquery.mockjax","1377875606"],[
"jquery.mw-jump","1377875606"],["jquery.mwExtension","1377875606"],["jquery.placeholder","1377875606"],["jquery.qunit","1377875606"],["jquery.qunit.completenessTest","1377875606",["jquery.qunit"]],["jquery.spinner","1377875606"],["jquery.jStorage","1377875606",["jquery.json"]],["jquery.suggestions","1377875606",["jquery.autoEllipsis"]],["jquery.tabIndex","1377875606"],["jquery.tablesorter","1377875606",["jquery.mwExtension"]],["jquery.textSelection","1377875606",["jquery.client"]],["jquery.validate","1377875606"],["jquery.xmldom","1377875606"],["jquery.tipsy","1377875606"],["jquery.ui.core","1377875606",["jquery"],"jquery.ui"],["jquery.ui.widget","1377875606",[],"jquery.ui"],["jquery.ui.mouse","1377875606",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1377875606",[],"jquery.ui"],["jquery.ui.draggable","1377875606",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1377875606",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget",
"jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1377875606",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1377875606",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1377875606",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1377875606",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1377875606",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1377875606",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1377875606",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1377875606",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1377875606",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider",
"1377875606",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1377875606",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1377875606",["jquery"],"jquery.ui"],["jquery.effects.blind","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake",
"1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1377875606",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1377875606",["jquery.effects.core"],"jquery.ui"],["mediawiki","1377875606"],["mediawiki.api","1377875606",["mediawiki.util"]],["mediawiki.api.category","1377875606",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1377875606",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1377875606",["mediawiki.api"]],["mediawiki.api.titleblacklist","1377875606",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1377875606",["mediawiki.api","user.tokens"]],["mediawiki.debug","1377875606",["jquery.footHovzer"]],["mediawiki.debug.init","1377875606",["mediawiki.debug"]],["mediawiki.feedback","1377875606",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1377875606"],["mediawiki.notification","1377875606",["mediawiki.page.startup"]],["mediawiki.notify","1377875606"],
["mediawiki.searchSuggest","1388979765",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1377875606",["mediawiki.util"]],["mediawiki.Uri","1377875606"],["mediawiki.user","1377875606",["jquery.cookie","mediawiki.api"]],["mediawiki.util","1388979765",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1377875606",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1377875606",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1377875606",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1377875606",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1377875606",["mediawiki.util"]],["mediawiki.action.view.metadata","1388981408"],["mediawiki.action.view.rightClickEdit","1377875606"],["mediawiki.action.watch.ajax","1377875606",["mediawiki.page.watch.ajax"]],["mediawiki.language","1377875606",["mediawiki.language.data",
"mediawiki.cldr"]],["mediawiki.cldr","1377875606",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1377875606"],["mediawiki.language.init","1377875606"],["mediawiki.jqueryMsg","1377875606",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1377875606"],["mediawiki.page.ready","1377875606",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1377875606",["jquery.client","mediawiki.util"]],["mediawiki.page.watch.ajax","1388983891",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1377875606"],["mediawiki.special.block","1377875606",["mediawiki.util"]],["mediawiki.special.changeemail","1377875606",["mediawiki.util"]],["mediawiki.special.changeslist","1377875606",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1377875606",["jquery.byteLimit"]],["mediawiki.special.preferences",
"1377875606"],["mediawiki.special.recentchanges","1377875606",["mediawiki.special"]],["mediawiki.special.search","1388985168"],["mediawiki.special.undelete","1377875606"],["mediawiki.special.upload","1389161035",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1377875606",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1377875606",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1377875606",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1377875606"],["mediawiki.legacy.config","1377875606",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1377875606",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1377875606",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1377875606"],["mediawiki.legacy.oldshared","1377875606"],["mediawiki.legacy.upload","1377875606",["mediawiki.legacy.wikibits",
"mediawiki.util"]],["mediawiki.legacy.wikibits","1377875606",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1377875606"],["ext.nuke","1377875606"],["ext.vector.collapsibleNav","1388979765",["mediawiki.util","jquery.client","jquery.cookie","jquery.tabIndex"],"ext.vector"],["ext.vector.collapsibleTabs","1377875606",["jquery.collapsibleTabs","jquery.delayedBind"],"ext.vector"],["ext.vector.editWarning","1389693004",[],"ext.vector"],["ext.vector.expandableSearch","1377875606",["jquery.client","jquery.expandableField","jquery.delayedBind"],"ext.vector"],["ext.vector.footerCleanup","1377875606",["mediawiki.jqueryMsg","jquery.cookie"],"ext.vector"],["ext.vector.sectionEditLinks","1377875606",["jquery.cookie","jquery.clickTracking"],"ext.vector"],["contentCollector","1377875606",[],"ext.wikiEditor"],["jquery.wikiEditor","1377875606",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1377875606",["jquery.wikiEditor",
"contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1377875606",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1377875606",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1377875606",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1377875606",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1377875606",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1377875606",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1377875606",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],
["jquery.wikiEditor.templates","1377875606",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1377875606",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1377875606",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1377875606",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1377875606",[],"ext.wikiEditor"],["ext.wikiEditor","1377875606",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1377875606",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1377875606",["ext.wikiEditor","jquery.wikiEditor.highlight"],
"ext.wikiEditor"],["ext.wikiEditor.preview","1377875606",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1377875606",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1377875606",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1377875606",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1377875606",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],"ext.wikiEditor"],["ext.wikiEditor.toc","1377875606",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1377875606",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1377875606",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],[
"ext.wikiEditor.toolbar.hideSig","1377875606",[],"ext.wikiEditor"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"vector","stylepath":"/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://wiki.dfrobot.com.cn","wgUserLanguage":"zh-cn","wgContentLanguage":"zh-cn","wgVersion":"1.20.6","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"首页","wgFormattedNamespaces":{"-2":"媒体文件","-1":"特殊","0":"","1":"讨论","2":"用户","3":"用户讨论","4":"Dfrobot wiki","5":"Dfrobot wiki讨论","6":"文件","7":"文件讨论","8":"MediaWiki","9":"MediaWiki讨论","10":"模板","11":"模板讨论","12":"帮助","13":
"帮助讨论","14":"分类","15":"分类讨论"},"wgNamespaceIds":{"媒体文件":-2,"特殊":-1,"":0,"讨论":1,"用户":2,"用户讨论":3,"dfrobot_wiki":4,"dfrobot_wiki讨论":5,"文件":6,"文件讨论":7,"mediawiki":8,"mediawiki讨论":9,"模板":10,"模板讨论":11,"帮助":12,"帮助讨论":13,"分类":14,"分类讨论":15,"媒体":-2,"对话":1,"用户对话":3,"图像":6,"档案":6,"image":6,"image_talk":7,"图像对话":7,"图像讨论":7,"档案对话":7,"档案讨论":7,"文件对话":7,"模板对话":11,"帮助对话":13,"分类对话":15,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},"wgSiteName":"DFRobot Product Wiki","wgFileExtensions":["png","gif","jpg","jpeg"],"wgDBname":"df_wiki_cn","wgFileCanRotate":true,"wgAvailableSkins":{"modern":"Modern","chick":"Chick","monobook":"MonoBook","cologneblue":
"CologneBlue","simple":"Simple","nostalgia":"Nostalgia","myskin":"MySkin","standard":"Standard","vector":"Vector"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"df_wiki_cn","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false,"wgWikiEditorMagicWords":{"redirect":"#重定向","img_right":"右","img_left":"左","img_none":"无","img_center":"居中","img_thumbnail":"缩略图","img_framed":"framed","img_frameless":"frameless"}});};if(isCompatible()){document.write("\x3cscript src=\"/load.php?debug=false\x26amp;lang=zh-cn\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20130708T051102Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: df_wiki_cn:resourceloader:filter:minify-js:7:508d7b752170e744e059bb54ee3e4a9b */