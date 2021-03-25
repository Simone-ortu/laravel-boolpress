@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../../../../../Boolean/mamp_public/laravel-boolpress/vendor/nesbot/carbon/bin/carbon
php "%BIN_TARGET%" %*
