<?php

########################################################################
# Extension Manager/Repository config file for ext: "adodb"
#
# Auto generated 16-03-2006 20:47
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ADOdb',
	'description' => 'This extension just includes a current version of ADOdb, a database abstraction library for PHP, for further use in TYPO3',
	'category' => 'misc',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Karsten Dambekalns',
	'author_email' => 'karsten@typo3.org',
	'author_company' => 'TYPO3 Association',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '4.71.1',
	'_md5_values_when_last_written' => 'a:261:{s:25:"checkconnectionwizard.php";s:4:"795b";s:27:"class.tx_adodb_tceforms.php";s:4:"e53a";s:26:"datasource_flexform_ds.xml";s:4:"96fb";s:12:"ext_icon.gif";s:4:"c778";s:17:"ext_localconf.php";s:4:"b58b";s:31:"locallang_datasource_config.xml";s:4:"0e21";s:20:"locallang_wizard.xml";s:4:"0e65";s:26:"adodb/adodb-csvlib.inc.php";s:4:"2087";s:28:"adodb/adodb-datadict.inc.php";s:4:"28a0";s:25:"adodb/adodb-error.inc.php";s:4:"3daa";s:32:"adodb/adodb-errorhandler.inc.php";s:4:"3585";s:29:"adodb/adodb-errorpear.inc.php";s:4:"0ba6";s:30:"adodb/adodb-exceptions.inc.php";s:4:"3ef7";s:28:"adodb/adodb-iterator.inc.php";s:4:"26cf";s:23:"adodb/adodb-lib.inc.php";s:4:"4a8d";s:25:"adodb/adodb-pager.inc.php";s:4:"1454";s:24:"adodb/adodb-pear.inc.php";s:4:"c91c";s:24:"adodb/adodb-perf.inc.php";s:4:"cc03";s:24:"adodb/adodb-php4.inc.php";s:4:"b000";s:24:"adodb/adodb-time.inc.php";s:4:"a770";s:29:"adodb/adodb-xmlschema.inc.php";s:4:"cec2";s:19:"adodb/adodb.inc.php";s:4:"6a0f";s:17:"adodb/license.txt";s:4:"8bd7";s:24:"adodb/pivottable.inc.php";s:4:"cb42";s:16:"adodb/readme.txt";s:4:"856d";s:22:"adodb/rsfilter.inc.php";s:4:"9eca";s:16:"adodb/server.php";s:4:"eb58";s:22:"adodb/toexport.inc.php";s:4:"645f";s:20:"adodb/tohtml.inc.php";s:4:"08b4";s:19:"adodb/xmlschema.dtd";s:4:"26f3";s:27:"adodb/perf/perf-db2.inc.php";s:4:"d869";s:32:"adodb/perf/perf-informix.inc.php";s:4:"44bd";s:29:"adodb/perf/perf-mssql.inc.php";s:4:"53d0";s:29:"adodb/perf/perf-mysql.inc.php";s:4:"f7c1";s:28:"adodb/perf/perf-oci8.inc.php";s:4:"f39a";s:32:"adodb/perf/perf-postgres.inc.php";s:4:"c02c";s:22:"adodb/perf/CVS/Entries";s:4:"a2e2";s:25:"adodb/perf/CVS/Repository";s:4:"dbc5";s:19:"adodb/perf/CVS/Root";s:4:"b923";s:18:"adodb/perf/CVS/Tag";s:4:"c437";s:38:"adodb/session/adodb-compress-bzip2.php";s:4:"893a";s:37:"adodb/session/adodb-compress-gzip.php";s:4:"3abd";s:36:"adodb/session/adodb-cryptsession.php";s:4:"19f8";s:38:"adodb/session/adodb-encrypt-mcrypt.php";s:4:"f88c";s:35:"adodb/session/adodb-encrypt-md5.php";s:4:"226a";s:38:"adodb/session/adodb-encrypt-secret.php";s:4:"d490";s:36:"adodb/session/adodb-encrypt-sha1.php";s:4:"5c92";s:28:"adodb/session/adodb-sess.txt";s:4:"260b";s:36:"adodb/session/adodb-session-clob.php";s:4:"b865";s:31:"adodb/session/adodb-session.php";s:4:"d732";s:38:"adodb/session/adodb-sessions.mysql.sql";s:4:"42fe";s:44:"adodb/session/adodb-sessions.oracle.clob.sql";s:4:"3c64";s:39:"adodb/session/adodb-sessions.oracle.sql";s:4:"08d0";s:27:"adodb/session/crypt.inc.php";s:4:"4dad";s:32:"adodb/session/session_schema.xml";s:4:"6443";s:40:"adodb/session/old/adodb-cryptsession.php";s:4:"398d";s:40:"adodb/session/old/adodb-session-clob.php";s:4:"5f73";s:35:"adodb/session/old/adodb-session.php";s:4:"017a";s:31:"adodb/session/old/crypt.inc.php";s:4:"5a4e";s:29:"adodb/session/old/CVS/Entries";s:4:"effa";s:32:"adodb/session/old/CVS/Repository";s:4:"0805";s:26:"adodb/session/old/CVS/Root";s:4:"b923";s:25:"adodb/session/old/CVS/Tag";s:4:"c437";s:25:"adodb/session/CVS/Entries";s:4:"5023";s:28:"adodb/session/CVS/Repository";s:4:"7999";s:22:"adodb/session/CVS/Root";s:4:"b923";s:21:"adodb/session/CVS/Tag";s:4:"c437";s:26:"adodb/pear/readme.Auth.txt";s:4:"4970";s:35:"adodb/pear/Auth/Container/ADOdb.php";s:4:"8934";s:37:"adodb/pear/Auth/Container/CVS/Entries";s:4:"c3d9";s:40:"adodb/pear/Auth/Container/CVS/Repository";s:4:"4fb1";s:34:"adodb/pear/Auth/Container/CVS/Root";s:4:"b923";s:33:"adodb/pear/Auth/Container/CVS/Tag";s:4:"c437";s:27:"adodb/pear/Auth/CVS/Entries";s:4:"38cc";s:30:"adodb/pear/Auth/CVS/Repository";s:4:"b224";s:24:"adodb/pear/Auth/CVS/Root";s:4:"b923";s:23:"adodb/pear/Auth/CVS/Tag";s:4:"c437";s:22:"adodb/pear/CVS/Entries";s:4:"9347";s:25:"adodb/pear/CVS/Repository";s:4:"a002";s:19:"adodb/pear/CVS/Root";s:4:"b923";s:18:"adodb/pear/CVS/Tag";s:4:"c437";s:34:"adodb/drivers/adodb-access.inc.php";s:4:"5ae4";s:31:"adodb/drivers/adodb-ado.inc.php";s:4:"b08c";s:32:"adodb/drivers/adodb-ado5.inc.php";s:4:"9802";s:38:"adodb/drivers/adodb-ado_access.inc.php";s:4:"2088";s:37:"adodb/drivers/adodb-ado_mssql.inc.php";s:4:"4c72";s:41:"adodb/drivers/adodb-borland_ibase.inc.php";s:4:"d4f0";s:31:"adodb/drivers/adodb-csv.inc.php";s:4:"a158";s:31:"adodb/drivers/adodb-db2.inc.php";s:4:"667b";s:33:"adodb/drivers/adodb-fbsql.inc.php";s:4:"175c";s:36:"adodb/drivers/adodb-firebird.inc.php";s:4:"bf13";s:33:"adodb/drivers/adodb-ibase.inc.php";s:4:"4943";s:36:"adodb/drivers/adodb-informix.inc.php";s:4:"b556";s:38:"adodb/drivers/adodb-informix72.inc.php";s:4:"91ad";s:32:"adodb/drivers/adodb-ldap.inc.php";s:4:"2dd2";s:33:"adodb/drivers/adodb-mssql.inc.php";s:4:"c0a9";s:35:"adodb/drivers/adodb-mssqlpo.inc.php";s:4:"6a13";s:33:"adodb/drivers/adodb-mysql.inc.php";s:4:"05aa";s:34:"adodb/drivers/adodb-mysqli.inc.php";s:4:"5635";s:34:"adodb/drivers/adodb-mysqlt.inc.php";s:4:"ba8d";s:35:"adodb/drivers/adodb-netezza.inc.php";s:4:"ceac";s:32:"adodb/drivers/adodb-oci8.inc.php";s:4:"2009";s:34:"adodb/drivers/adodb-oci805.inc.php";s:4:"94e2";s:34:"adodb/drivers/adodb-oci8po.inc.php";s:4:"72a3";s:32:"adodb/drivers/adodb-odbc.inc.php";s:4:"2020";s:38:"adodb/drivers/adodb-odbc_mssql.inc.php";s:4:"85de";s:39:"adodb/drivers/adodb-odbc_oracle.inc.php";s:4:"7296";s:33:"adodb/drivers/adodb-odbtp.inc.php";s:4:"f48c";s:41:"adodb/drivers/adodb-odbtp_unicode.inc.php";s:4:"ae80";s:34:"adodb/drivers/adodb-oracle.inc.php";s:4:"2406";s:31:"adodb/drivers/adodb-pdo.inc.php";s:4:"0d15";s:37:"adodb/drivers/adodb-pdo_mssql.inc.php";s:4:"55d4";s:37:"adodb/drivers/adodb-pdo_mysql.inc.php";s:4:"9746";s:35:"adodb/drivers/adodb-pdo_oci.inc.php";s:4:"2729";s:37:"adodb/drivers/adodb-pdo_pgsql.inc.php";s:4:"6178";s:36:"adodb/drivers/adodb-postgres.inc.php";s:4:"0fb8";s:38:"adodb/drivers/adodb-postgres64.inc.php";s:4:"b804";s:37:"adodb/drivers/adodb-postgres7.inc.php";s:4:"1172";s:37:"adodb/drivers/adodb-postgres8.inc.php";s:4:"1674";s:33:"adodb/drivers/adodb-proxy.inc.php";s:4:"1546";s:33:"adodb/drivers/adodb-sapdb.inc.php";s:4:"72b6";s:39:"adodb/drivers/adodb-sqlanywhere.inc.php";s:4:"6628";s:34:"adodb/drivers/adodb-sqlite.inc.php";s:4:"cc31";s:36:"adodb/drivers/adodb-sqlitepo.inc.php";s:4:"9e07";s:34:"adodb/drivers/adodb-sybase.inc.php";s:4:"bf88";s:38:"adodb/drivers/adodb-sybase_ase.inc.php";s:4:"445a";s:31:"adodb/drivers/adodb-vfp.inc.php";s:4:"29a9";s:25:"adodb/drivers/CVS/Entries";s:4:"9dce";s:28:"adodb/drivers/CVS/Repository";s:4:"7121";s:22:"adodb/drivers/CVS/Root";s:4:"b923";s:21:"adodb/drivers/CVS/Tag";s:4:"c437";s:27:"adodb/lang/adodb-ar.inc.php";s:4:"6f2a";s:27:"adodb/lang/adodb-bg.inc.php";s:4:"666d";s:31:"adodb/lang/adodb-bgutf8.inc.php";s:4:"6316";s:27:"adodb/lang/adodb-ca.inc.php";s:4:"96da";s:27:"adodb/lang/adodb-cn.inc.php";s:4:"155e";s:27:"adodb/lang/adodb-cz.inc.php";s:4:"6964";s:27:"adodb/lang/adodb-da.inc.php";s:4:"2ea2";s:27:"adodb/lang/adodb-de.inc.php";s:4:"26c5";s:27:"adodb/lang/adodb-en.inc.php";s:4:"0820";s:27:"adodb/lang/adodb-es.inc.php";s:4:"de07";s:34:"adodb/lang/adodb-esperanto.inc.php";s:4:"32b9";s:27:"adodb/lang/adodb-fr.inc.php";s:4:"dd47";s:27:"adodb/lang/adodb-hu.inc.php";s:4:"f308";s:27:"adodb/lang/adodb-it.inc.php";s:4:"15e2";s:27:"adodb/lang/adodb-nl.inc.php";s:4:"ed3d";s:27:"adodb/lang/adodb-pl.inc.php";s:4:"333e";s:30:"adodb/lang/adodb-pt-br.inc.php";s:4:"e973";s:27:"adodb/lang/adodb-ro.inc.php";s:4:"779e";s:31:"adodb/lang/adodb-ru1251.inc.php";s:4:"e828";s:27:"adodb/lang/adodb-sv.inc.php";s:4:"81fa";s:31:"adodb/lang/adodb-uk1251.inc.php";s:4:"3203";s:22:"adodb/lang/CVS/Entries";s:4:"3cd2";s:25:"adodb/lang/CVS/Repository";s:4:"a65e";s:19:"adodb/lang/CVS/Root";s:4:"b923";s:18:"adodb/lang/CVS/Tag";s:4:"c437";s:25:"adodb/tests/benchmark.php";s:4:"5aed";s:31:"adodb/tests/cf~testsessions.php";s:4:"06ba";s:22:"adodb/tests/client.php";s:4:"1c7f";s:19:"adodb/tests/pdo.php";s:4:"124c";s:18:"adodb/tests/rr.htm";s:4:"6d60";s:29:"adodb/tests/test-datadict.php";s:4:"2170";s:25:"adodb/tests/test-perf.php";s:4:"b95e";s:27:"adodb/tests/test-pgblob.php";s:4:"62b6";s:25:"adodb/tests/test-php5.php";s:4:"774d";s:30:"adodb/tests/test-xmlschema.php";s:4:"1ff1";s:20:"adodb/tests/test.php";s:4:"5452";s:21:"adodb/tests/test2.php";s:4:"384b";s:21:"adodb/tests/test3.php";s:4:"f06c";s:21:"adodb/tests/test4.php";s:4:"a054";s:21:"adodb/tests/test5.php";s:4:"06b5";s:29:"adodb/tests/test_rs_array.php";s:4:"1ccf";s:25:"adodb/tests/testcache.php";s:4:"f7b0";s:33:"adodb/tests/testdatabases.inc.php";s:4:"9828";s:25:"adodb/tests/testgenid.php";s:4:"1576";s:25:"adodb/tests/testmssql.php";s:4:"ae14";s:24:"adodb/tests/testoci8.php";s:4:"3a44";s:30:"adodb/tests/testoci8cursor.php";s:4:"87af";s:26:"adodb/tests/testpaging.php";s:4:"50a1";s:24:"adodb/tests/testpear.php";s:4:"f165";s:28:"adodb/tests/testsessions.php";s:4:"09c1";s:20:"adodb/tests/time.php";s:4:"b158";s:22:"adodb/tests/tmssql.php";s:4:"3d7a";s:31:"adodb/tests/xmlschema-mssql.xml";s:4:"5c70";s:25:"adodb/tests/xmlschema.xml";s:4:"19ca";s:23:"adodb/tests/CVS/Entries";s:4:"baad";s:26:"adodb/tests/CVS/Repository";s:4:"5257";s:20:"adodb/tests/CVS/Root";s:4:"b923";s:19:"adodb/tests/CVS/Tag";s:4:"c437";s:35:"adodb/cute_icons_for_site/adodb.gif";s:4:"9430";s:36:"adodb/cute_icons_for_site/adodb2.gif";s:4:"f540";s:37:"adodb/cute_icons_for_site/CVS/Entries";s:4:"77e1";s:40:"adodb/cute_icons_for_site/CVS/Repository";s:4:"10d9";s:34:"adodb/cute_icons_for_site/CVS/Root";s:4:"b923";s:33:"adodb/cute_icons_for_site/CVS/Tag";s:4:"c437";s:38:"adodb/datadict/datadict-access.inc.php";s:4:"e863";s:35:"adodb/datadict/datadict-db2.inc.php";s:4:"eff1";s:40:"adodb/datadict/datadict-firebird.inc.php";s:4:"616d";s:39:"adodb/datadict/datadict-generic.inc.php";s:4:"c22f";s:37:"adodb/datadict/datadict-ibase.inc.php";s:4:"2348";s:40:"adodb/datadict/datadict-informix.inc.php";s:4:"5d9f";s:37:"adodb/datadict/datadict-mssql.inc.php";s:4:"d432";s:37:"adodb/datadict/datadict-mysql.inc.php";s:4:"c5c5";s:36:"adodb/datadict/datadict-oci8.inc.php";s:4:"d811";s:40:"adodb/datadict/datadict-postgres.inc.php";s:4:"b667";s:37:"adodb/datadict/datadict-sapdb.inc.php";s:4:"7978";s:38:"adodb/datadict/datadict-sybase.inc.php";s:4:"43b2";s:26:"adodb/datadict/CVS/Entries";s:4:"b725";s:29:"adodb/datadict/CVS/Repository";s:4:"9e19";s:23:"adodb/datadict/CVS/Root";s:4:"b923";s:22:"adodb/datadict/CVS/Tag";s:4:"c437";s:30:"adodb/contrib/toxmlrpc.inc.php";s:4:"4c40";s:25:"adodb/contrib/CVS/Entries";s:4:"cd9b";s:28:"adodb/contrib/CVS/Repository";s:4:"3c38";s:22:"adodb/contrib/CVS/Root";s:4:"b923";s:21:"adodb/contrib/CVS/Tag";s:4:"c437";s:29:"adodb/xsl/convert-0.1-0.2.xsl";s:4:"f2a0";s:29:"adodb/xsl/convert-0.2-0.1.xsl";s:4:"5d27";s:24:"adodb/xsl/remove-0.2.xsl";s:4:"0b2b";s:21:"adodb/xsl/CVS/Entries";s:4:"c5d0";s:24:"adodb/xsl/CVS/Repository";s:4:"3cb3";s:18:"adodb/xsl/CVS/Root";s:4:"b923";s:17:"adodb/xsl/CVS/Tag";s:4:"c437";s:25:"adodb/docs/docs-adodb.htm";s:4:"d786";s:28:"adodb/docs/docs-datadict.htm";s:4:"bddc";s:26:"adodb/docs/docs-oracle.htm";s:4:"fc24";s:24:"adodb/docs/docs-perf.htm";s:4:"45f4";s:27:"adodb/docs/docs-session.htm";s:4:"3a07";s:28:"adodb/docs/old-changelog.htm";s:4:"3158";s:21:"adodb/docs/readme.htm";s:4:"9a0e";s:32:"adodb/docs/tips_portable_sql.htm";s:4:"4027";s:19:"adodb/docs/tute.htm";s:4:"691e";s:22:"adodb/docs/CVS/Entries";s:4:"efb7";s:25:"adodb/docs/CVS/Repository";s:4:"ad28";s:19:"adodb/docs/CVS/Root";s:4:"b923";s:18:"adodb/docs/CVS/Tag";s:4:"c437";s:17:"adodb/CVS/Entries";s:4:"3dbb";s:20:"adodb/CVS/Repository";s:4:"cd1a";s:14:"adodb/CVS/Root";s:4:"b923";s:13:"adodb/CVS/Tag";s:4:"c437";s:26:"pi1/class.tx_adodb_pi1.php";s:4:"0414";s:15:"pi1/CVS/Entries";s:4:"e81c";s:18:"pi1/CVS/Repository";s:4:"745a";s:12:"pi1/CVS/Root";s:4:"b923";s:11:"pi1/CVS/Tag";s:4:"c437";s:23:"res/checkconnection.gif";s:4:"1760";s:15:"res/CVS/Entries";s:4:"0cc2";s:18:"res/CVS/Repository";s:4:"442c";s:12:"res/CVS/Root";s:4:"b923";s:11:"res/CVS/Tag";s:4:"c437";s:18:"doc/471.DBAL.patch";s:4:"7e51";s:10:"doc/README";s:4:"40a5";s:25:"doc/mssql-error-fix.patch";s:4:"23b1";s:15:"doc/CVS/Entries";s:4:"210f";s:18:"doc/CVS/Repository";s:4:"f6db";s:12:"doc/CVS/Root";s:4:"b923";s:11:"doc/CVS/Tag";s:4:"c437";s:11:"CVS/Entries";s:4:"5410";s:14:"CVS/Repository";s:4:"bccf";s:8:"CVS/Root";s:4:"b923";s:7:"CVS/Tag";s:4:"c437";}',
	'constraints' => array(
		'depends' => array(
			'php' => '',
			'typo3' => '',
		),
		'conflicts' => array(
		),
	),
	'suggests' => array(
	),
);

?>