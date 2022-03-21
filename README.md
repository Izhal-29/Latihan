# Latihan
Latihan Pemrogramanku

//Settingan.Json VS Code
{
    "workbench.colorTheme": "One Dark Pro",
    "editor.suggestSelection": "first",
    "vsintellicode.modify.editor.suggestSelection": "automaticallyOverrodeDefaultValue",
    "workbench.iconTheme": "ayu",
    "editor.fontSize": 12,
    "editor.tabSize": 2,
    "diffEditor.wordWrap": "on",
    "vsicons.dontShowNewVersionMessage": true,
    "terminal.integrated.profiles.windows":{"Git Bash":{"path":"C:\\Program Files\\Git\\bin\\bash.exe"},  },
    "terminal.integrated.defaultProfile.windows": "Git Bash",
    "git.confirmSync": false,
    "git.autofetch": true,
    "editor.wordWrap": "on",
    "explorer.openEditors.visible": 0,
    "editor.fontFamily": "'Fira Code', 'Source Code Pro', Consolas, 'Courier New', monospace",
    "editor.fontLigatures": true,
    "php.suggest.basic": false,
    "editor.bracketPairColorization.enabled": true,
    "editor.guides.bracketPairs": "active",
    "bracketPairColorizer.depreciation-notice": false,
    "php.validate.executablePath": "C:/xampp/php/php.exe",
    "settingsSync.ignoredExtensions": [
        "xdebug.php-pack"
    ],
    "liveServer.settings.CustomBrowser": "chrome",
    "intelephense.completion.fullyQualifyGlobalConstantsAndFunctions": true,
    "editor.cursorBlinking": "expand",
}

//settingan Snippet html.json VS Code
{
	"PHP Tag": {
		"prefix": "php",
		"body": "<?php $1 ?>"
	},
	"Inline Echo": {
		"prefix": "phpp",
		"body": "<?= $$1; ?>"
	},
	"Input Label": {
		"prefix": "formel",
		"body": [
			"<label>",
			"\t${3:Username}",
			"\t<input type=\"${1:text}\" name=\"${2:username}\">",
			"</label>"
		]
	},
	"My Form": {
		"prefix": "myform",
		"body": "<form method=\"${1|get,post|}\" action=\"$2\">$3</form>"
	}
}