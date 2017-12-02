<?php include('./includes/init.php')?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="How to improve the performance of your XP machine" />
<meta name="description" content="How to improve the performance of your XP machine" />
<meta name="keywords" content="How to, secure, security, speed, tweak, Windows, XP, Windows XP" />
<meta name="author" content="Paul Davis - paul@skippyroo.co.uk" />
<link rel="stylesheet" media="screen" title="Standard"  type="text/css" href="standard.css" />
<link rel="stylesheet" media="handheld" title="Handheld-Style" type="text/css" href="handheld.css" />
<title>How to improve the performance of your XP machine</title>
</head>

<body>
<?php include('./includes/header.php')?>
<?php include('./includes/navigation.php')?>

<p class="note"><span style="text-decoration:underline">Author's Note:</span> 
If there are any errors on this page please let me know. My address is at the bottom of this page</p>

<div class="subtitle">First of all</div>
<table>
<tr>
    <td style="width:15px"></td>
	<td><p class="backtext">
	Install anti-virus and anti-spyware software first! <br/>
	Depending how secure you want to be you can install firewall software as an alternative to the built-in XP firewall (Firewall software is not necessarily required if you are behind a NAT router and UPnp is turned OFF)<br/>
	I recommend the below freeware: <br/>
	<a href="http://www.avast.com/eng/download-avast-home.html" onclick="target='_blank'" onkeypress="target='_blank'">avast!</a> for anti-virus protection<br/>
	<a href="http://www.javacoolsoftware.com/spywareblaster.html" onclick="target='_blank'" onkeypress="target='_blank'">SpywareBlaster</a> and 
	<a href="http://www.microsoft.com/athome/security/spyware/software/default.mspx"  onclick="target='_blank'" onkeypress="target='_blank'">Windows Defender</a> for background anti-spyware protection. (I suggest turning off the scheduled scanning as it will slow down your machine)<br/>
	<a href="http://www.spybot.info/en/download/index.hml" onclick="target='_blank'" onkeypress="target='_blank'">Spybot-Search&amp;Destroy</a> for adding entries to your HOSTS file,<br/>
	<a href="http://www.lavasoftusa.com/products/ad_aware_free.php" onclick="target='_blank'" onkeypress="target='_blank'">Ad-Aware</a> for spyware removal.<br/>
	
	However there are other great packages out there for you to buy, such as: 
	<a href="http://www.webroot.com/uk/downloads/" onclick="target='_blank'" onkeypress="target='_blank'">SpySweeper</a> for about &pound;17 or 
	<a href="http://www.pctools.com/spyware-doctor/download/" onclick="target='_blank'" onkeypress="target='_blank'">Spyware Doctor</a>  for about &pound;17<br/><br/>
	</p>
	</td>
</tr>
</table>
<p></p>

<div class="subtitle">Modifications</div>
<table>
<tr>
    <td style="width:15px"></td>
	<td><p class="backtext">
	1) If you haven't already, set a System Restore point and download the latest 
	<a href="http://windowsupdate.microsoft.com" onclick="target='_blank'" onkeypress="target='_blank'">Windows Updates</a>
	</p>
	<p class="backtext">
	2) Secure your network by adding a rule to your router's configuration to forward ICMP Echo messages to an IP address which does not exist.
	Check how hidden you are from predators using
	 <a href="http://www.grc.com/default.htm" onclick="target='_blank'" onkeypress="target='_blank'">SheildsUp!</a><br/>
	</p>
	<p class="backtext">
	3) Then download and use the following utilities:<br/>
	</p>

	<p class="backtext"><a href="http://www.grc.com/freepopular.htm" onclick="target='_blank'" onkeypress="target='_blank'">"Shoot The Messenger" and "UnPlug n' Pray"</a> to make your computer more secure <br/> Note: uPnP may be required by some hardware</p>

	<p class="backtext"><a href="http://www.mlin.net/StartupCPL.shtml" onclick="target='_blank'" onkeypress="target='_blank'">Startup Control Panel</a> to stop any unwanted startup programs (google them if you are unsure what they are)</p>

	<p class="backtext">4) Set your page file (MIN and MAX) to be 1.5 times the size of your RAM, preferably on a different hard drive from the one that contains your operating system</p>

	<p class="backtext">5) Use <a href="http://www.speedguide.net/downloads.php" onclick="target='_blank'" onkeypress="target='_blank'">TCP Optimizer</a> to improve your Internet connection.</p>

	<p class="backtext">6) Next, download <a href="http://www.microsoft.com/technet/sysinternals/FileAndDisk/PageDefrag.mspx" onclick="target='_blank'" onkeypress="target='_blank'">Microsoft Sysinternals PageDefrag</a>. Run the defrag on next reboot then restart your machine.<br/></p>
	</td>
</tr>
</table>
<p></p>

<div class="subtitle">Registry Modifications</div>
<table>
<tr>
    <td style="width:15px"></td>
	<td>
	<p class="warning">WARNING! <br/> Modifying the registry can cause serious 
	problems on your computer. Only proceed with these next steps if you have backed 
	up your registry. By downloading these files you are agreeing that you hold 
	responsibility for what happens to your computer when you use them</p>

	<p class="backtext">Merge these registry entries with your registry to 
	improve performance: <br/>
	Right-click the file, select "Save Target As..." or "Save Link As..." then 
	select "All files" and click Save.<br/>
	Note: Some users may have trouble opening these files due 
	to file associations. In this case, right-click the files you wish to 
	download and select "Save Target As..." or "Save Link As..." then add the 
	text ".reg" and click save</p>

	<p class="backtext">
	    <a href="Reg Files/Increase speed and stability.reg">Increase speed and stability</a><br/>
	    <a href="Reg Files/Remove Shortcut To.reg">Remove "Shortcut To" when creating shortcuts</a><br/>
	    <a href="Reg Files/Turn off useless visual effects.reg">Turn off useless visual effects</a><br/><br/>
	</p>
	</td>
</tr>
</table>
<p></p>

<div class="subtitle">Final Steps</div>
<table>
<tr>
    <td style="width:15px"></td>
	<td>
	<p class="warning">Warning: YOU are responsible if you remove any files which 
	you may require</p>

	<p class="backtext">Run Disk Cleanup 
	(Start/Programs/Accessories/System Tools/Disk Cleanup) to remove Temporary 
	Internet Files, Microsoft Office Temporary Files, Recycle Bin Files, 
	Temporary Files and WebClient/Publisher Files.<br/>
	Note: You can remove the registry key 
	[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\VolumeCaches\Compress Old Files]
	to make Disk Cleanup run faster each time you start it.</p>

	<p class="backtext">Download and run <a href="http://www.ccleaner.com/" onclick="target='_blank'" onkeypress="target='_blank'">CCleaner</a>
	 to remove unnecessary files and cleanup your registry safely and for free! NOTE: I do recommend unchecking "Unused File Extensions" as this has caused a problem for me in the past<br/></p>

	<p class="backtext">Run a system defragmentation: 
	Start/Programs/Accessories/System Tools/Defrag<br/></p>
	</td>
</tr>
</table>
<p></p>

<div class="subtitle">Other useful free tools and tips</div>
<table>
<tr>
    <td style="width:15px"></td>
	<td>
	<p class="backtext">
	<a href="http://www.hdtune.com" onclick="target='_blank'" onkeypress="target='_blank'">HD Tune</a> for checking the health of your HDD<br/>
	<a href="http://www.grc.com/sr/spinrite.htm" onclick="target='_blank'" onkeypress="target='_blank'">Spinrite 6.0</a> for disk drive repair and maintainance<br/>
	<a href="http://www.pcpitstop.com" onclick="target='_blank'" onkeypress="target='_blank'">www.pcpitstop.com</a> provide a way to measure how good your computer is<br/>
	<a href="http://www.grc.com" onclick="target='_blank'" onkeypress="target='_blank'">www.grc.com</a> provides a service called ShieldsUp which allows you to test how secure you computer is<br/>
	</p>

	<p class="backtext">
	I have also noticed that keeping your operating system separate from your 
	installed progams and personal files on a differnt hard drive or partition means that your 
	computer boots faster and runs smoother.
	</p>

	<p class="backtext">
	Most laptop owners (as far as I have seen in my experience) seem to have the Realtek AC97 codec for their sound driver. <a href="http://www.realtek.com.tw/downloads/downloadsView.aspx?Langid=1&amp;PNid=23&amp;PFid=23&amp;Level=4&amp;Conn=3&amp;DownTypeID=3&amp;GetDown=false#AC" onclick="target='_blank'" onkeypress="target='_blank'">The latest version of the Realtek AC97 driver can be downloaded here</a><br/>
	</p>
	
	<p class="backtext">
	Running "chkdsk /x /r" on the command line will run checkdsk next time your machine boots and will also recover data from bad sectors
	</p>
	
	<p class="backtext">
	<a href="http://articles.techrepublic.com.com/5100-6346_11-5034622.html" onclick="target='_blank'" onkeypress="target='_blank'">Step-By-Step: Use BootVis to improve XP boot performance</a><br/>
	</p>
	
	<p class="backtext">
	<a href="http://www.blackviper.com" onclick="target='_blank'" onkeypress="target='_blank'">XP and Vista Services Guide</a><br/>
	</p>
	
	<p class="backtext">
	<a href="http://www.helpwithwindows.com/WindowsXP/tune-16.html" onclick="target='_blank'" onkeypress="target='_blank'">Remove Shared Documents Folder from My Computer</a><br/>
	</p>
	
	</td>	
</tr>
</table>

<?php include('./includes/footer.php')?>

</body>
</html>