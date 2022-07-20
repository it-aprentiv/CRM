<?php

echo "Extract archive ...\n\n";

//echo "Deleting src ...";
//$output = shell_exec('rm -rf ../src/');
//echo "<pre>$output</pre>";

$packageName = "aprentiv-crm-bin.tar.gz";
$output = shell_exec('tar -zxf ../aprentiv-crm-bin.tar.gz -C ../');
echo "<pre>$output</pre>";

echo "Clear var/cache";
$output = shell_exec("rm -Rf ../var/cache/*");
echo "<pre>Cache supprimé</pre>";

echo "Clear cache ...\n\n";
$output = shell_exec('php ../bin/console cache:clear');
echo "<pre>$output</pre>";
echo ">> Cache cleared ...\n\n";

echo "Dumping ...";
$output = shell_exec('/usr/bin/php7.3 ../bin/console doctrine:schema:update --dump-sql 2>&1');
echo "<pre>$output</pre>";

echo "Remove package";
$output = shell_exec('rm ../aprentiv-crm-bin.tar.gz');
echo "<pre>$output</pre>";


