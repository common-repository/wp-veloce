<?php

global $velocewp;
global $iniziohtaccess;
global $stringagzip;
global $stringacachefile1;
global $stringacachefile2;
global $stringakeepalive;
global $stringautf8;
global $stringa_finale;

$indirizzo = strtolower(get_bloginfo('url'));
$indirizzo = str_replace('https://','',$indirizzo);
$indirizzo = str_replace('http://','',$indirizzo);
$indirizzo = str_replace('www.','',$indirizzo);

$iniziohtaccess = "
# Veloce Wordpress Plugin Start

 
";

	$stringagzip .= '# GZIP '."\r\n"."\r\n";
	$stringagzip .= '<IfModule mod_deflate.c>'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE text/plain'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE text/html'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE text/xml'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE text/css'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE text/javascript'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/xml'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/xhtml+xml'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/rss+xml'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/javascript'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-javascript'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-httpd-php'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-httpd-fastphp'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/vnd.ms-fontobject'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-font'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-font-opentype'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-font-otf'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-font-truetype'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE application/x-font-ttf'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE image/svg+xml'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE image/x-icon'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE font/opentype'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE font/otf'."\r\n";
	$stringagzip .= 'AddOutputFilterByType DEFLATE font/ttf'."\r\n";
	$stringagzip .= 'BrowserMatch ^Mozilla/4 gzip-only-text/html'."\r\n";
	$stringagzip .= 'BrowserMatch ^Mozilla/4\.0[678] no-gzip'."\r\n";
	$stringagzip .= 'BrowserMatch \bMSI[E] !no-gzip !gzip-only-text/html'."\r\n";
	$stringagzip .= 'Header append Vary User-Agent env=!dont-vary'."\r\n";
	$stringagzip .= '</IfModule>'."\r\n"."\r\n";

	$stringacachefile1 .= '# Leverage Browser Caching Start'."\r\n"."\r\n";
	$stringacachefile1 .= '<IfModule mod_expires.c>'."\r\n";
	$stringacachefile1 .= 'ExpiresActive On'."\r\n";
	$stringacachefile1 .= 'ExpiresByType image/jpg "access 1 year"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType image/jpeg "access 1 year"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType image/gif "access 1 year"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType image/png "access 1 year"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType text/css "access 1 month"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType text/html "access 1 month"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType application/pdf "access 1 month"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType application/javascript "access plus 1 year"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType text/x-javascript "access 1 month"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType application/x-shockwave-flash "access 1 month"'."\r\n";
	$stringacachefile1 .= 'ExpiresByType image/x-icon "access 1 year"'."\r\n";
	$stringacachefile1 .= 'ExpiresDefault "access 1 month"'."\r\n";
	$stringacachefile1 .= '</IfModule>'."\r\n"."\r\n";
	
	$stringacachefile2 .= '# Caching of common files Start'."\r\n"."\r\n";
	$stringacachefile2 .= '<IfModule mod_headers.c>'."\r\n";
	$stringacachefile2 .= '<FilesMatch "\.(ico|pdf|flv|swf|js|css|gif|png|jpg|jpeg|ico|txt|html|htm)$">'."\r\n";
	$stringacachefile2 .= 'Header set Cache-Control "max-age=2592000, public"'."\r\n";
	$stringacachefile2 .= '</FilesMatch>'."\r\n";
	$stringacachefile2 .= '</IfModule>'."\r\n"."\r\n";

	$stringakeepalive .= '# Enable Keepalive Start'."\r\n"."\r\n";
	$stringakeepalive .= '<ifModule mod_headers.c>'."\r\n";
	$stringakeepalive .= 'Header set Connection keep-alive'."\r\n";
	$stringakeepalive .= '</ifModule>'."\r\n"."\r\n";
	
	$stringautf8 .= '# Use UTF-8 encoding Start'."\r\n"."\r\n";
	$stringautf8 .= 'AddDefaultCharset utf-8'."\r\n"."\r\n";
	
	$stringa_finale .= '# Enable Vary: Accept-Encoding Start'."\r\n"."\r\n";
	$stringa_finale .= '<IfModule mod_headers.c>'."\r\n";
	$stringa_finale .= '<FilesMatch "\.(js|css|xml|gz)$">'."\r\n";
	$stringa_finale .= 'Header append Vary: Accept-Encoding'."\r\n";
	$stringa_finale .= '</FilesMatch>'."\r\n";
	$stringa_finale .= '</IfModule>'."\r\n"."\r\n";

	$stringa_finale .= '# Veloce Wordpress Plugin End'."\r\n"."\r\n";

$velocewp = ABSPATH.'.htaccess';



?>