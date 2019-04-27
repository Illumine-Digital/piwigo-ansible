<?php
$conf['dblayer'] = 'mysqli';
$conf['db_base'] = '{{ piwigo_db }}';
$conf['db_user'] = '{{ piwigo_user }}';
$conf['db_password'] = '{{ piwigo_pass }}';
$conf['db_host'] = '{{ piwigo_host }}';

$prefixeTable = '{{ piwigo_prefix }}';

define('PHPWG_INSTALLED', true);
define('PWG_CHARSET', 'utf-8');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
