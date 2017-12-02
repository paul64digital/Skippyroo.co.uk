<?php include('quotes.php')?>

<table class="orange">
<tr>
    <td class="bold">
    &nbsp;
    <span class="backtext"><a href="home.php">Home</a>
    &nbsp;
    |
    &nbsp;
    <a href="myservices.php">My Services</a>
    &nbsp;
    |
    &nbsp;
    <a href="tweakXP.php">Tweak XP</a>
    &nbsp;
    |
    &nbsp;
    <a href="security.php">Security</a>
    &nbsp;
    |
    &nbsp;
    <a href="apps.php">Applications</a>
    &nbsp;
    |
    &nbsp;
    <a href="recommendations.php">Recommendations</a>
    &nbsp;
    |
    &nbsp;
    <a href="stuff.php">Random Stuff</a>
    &nbsp;
    |
    &nbsp;
    <a href="mailto:paul@skippyroo.co.uk">E-mail Me</a>
    </span></td>
</tr>
</table>

<p class='backtext'>
<?php
	// Output username if it is set
	if(isset($_SESSION['username'])) {
		echo "Hi " . $_SESSION['username'] . ", welcome.<br/>";
		echo "You should now be able to see your name on every page.";
	}
?>
</p>