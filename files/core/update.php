<?php


$installedVersion = trim(file_get_contents('includes/version'));
$currentVersion = trim(file_get_contents('https://raw.githubusercontent.com/lucyfer622/whmseller/main/version'));

if ($installedVersion < $currentVersion) {
	$output = shell_exec('rm /root/whmseller.zip -f; wget -O /root/whmseller.zip https://github.com/lucyfer622/whmseller/archive/refs/heads/main.zip; unzip -o /root/whmseller.zip -d /root/; rm whmseller.zip -f; cp -Rf ./whmseller-main/files/core/* /usr/local/cpanel/whostmgr/docroot/cgi/whmseller; unzip /usr/local/cpanel/whostmgr/docroot/cgi/whmseller/assets/vendor.zip -d /usr/local/cpanel/whostmgr/docroot/cgi/whmseller/assets/; rm -rf /root/whmseller-main; dos2unix /usr/local/cpanel/whostmgr/docroot/cgi/whmseller/sellercp/index.cgi; chmod +x /usr/local/cpanel/whostmgr/docroot/cgi/whmseller/sellercp/index.cgi');
	include 'afterupdate.php';
}

?>
