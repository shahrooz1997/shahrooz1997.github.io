<?php

//echo "Messages:<br />\n";
//system('ls 1>mylog1.txt 2>mylog2.txt');
//system('wget google.com 1>mylog1.txt 2>mylog2.txt');
//system('echo 1341050911 > pass.txt; chmod 7777 pass.txt; export SSH_ASKPASS=pass.txt; setsid ssh ebrahimiyan_faeze@ee.sharif.ir -N -D 7088 -g -v 1>aa.txt 2>bb.txt');
//system('python ./make 1>mylog1.txt 2>mylog2.txt');
// system('python ./ssss 1>mylog1.txt 2>mylog2.txt');
//echo 'salam';
// system('cd ./PySecretSOCKS-master; python3 ./example.py 1>mylog1.txt 2>mylog2.txt');

// system("python --version 1>mylog1.txt 2>mylog2.txt");
//system('chmod 777 ssss.tar.xz')
// system('chown ebrahimiyan_faeze ssss.tar.xz')
// system("ls -al 1>mylog1.txt 2>mylog2.txt");
//system("tar xvzf ssss.tar.gz 1>mylog1.txt 2>mylog2.txt") 
//system("wget -b -o wget_log.txt http://dl.dibaup.ir/Movie/Foreign/1395/Scent_of_a_Woman_1992_720p_Ganool_(DibaMovie).mkv 1>mylog1.txt 2>mylog2.txt");
// system('wget -b -o wget_log.txt "http://dl2.soft98.ir/adobe/Adobe.Acrobat.Reader.DC.2017.012.20098.Update.Only.rar"');

// system("cd /home/ms/che/a_khodabakhsh > mylog3.txt 2>mylog4.txt; mkdir .ssh > mylog3.txt 2>mylog4.txt; chmod 700 .ssh > mylog3.txt 2>mylog4.txt");
// system("ls -al /home/bs/che/hejazi_sepehr >mylog3.txt 2>mylog4.txt");
// system("echo $USER > mylog3.txt");
// system("rm -f mylog3.txt mylog4.txt");
// system("ls > mylog3.txt");

//echo("<br />The command is: " . $_GET['c'] . "<br />\n");

//system($_GET['c'] . " > mylog3.txt 2> mylog4.txt" );

//system(" echo $USER > mylog3.txt 2> mylog4.txt" );

$file='messages.txt';

if($_GET['c'] === "MywebMessagesSHAHROOZzAre8304"){
	//system("cat messages.txt");
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));	
	readfile($file);
}



//echo "<br />STDOUT:<br />\n";
//system("cat mylog3.txt");
//echo "<br /><br />\n\nSTDERR:<br />\n";
//system("cat mylog4.txt");
//echo "<br /><br />\n\nDone!";

?>

