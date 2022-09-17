<div class="header">
	<!-- navigation bar -->
	<ul >
	<a class="navbar-brand" href="#">
	<img src="https://www.nicepng.com/png/full/19-192021_mobile-phone-logo-design-checking-my-phone-tiredriveeasyco.png" class="logoOK"/>
    </a>
		<li><a href="main.php">
		
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
</svg>Home Page</a></li>
		<?php 
		$sql = "Select * From Category";
		$rows = query($sql);
		for($i=0; $i<count($rows); $i++)
		{
		?>
		<li><a href="main.php?catid=<?=$rows[$i][0]?>">👨💻<?=$rows[$i][1]?></a></li>
		<?php
		}
		?>
		<li><a href="http://localhost/Super-Code/PHP/FirstpagePHP/template/first_template_home.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-android" viewBox="0 0 16 16">
  <path d="M2.76 3.061a.5.5 0 0 1 .679.2l1.283 2.352A8.94 8.94 0 0 1 8 5a8.94 8.94 0 0 1 3.278.613l1.283-2.352a.5.5 0 1 1 .878.478l-1.252 2.295C14.475 7.266 16 9.477 16 12H0c0-2.523 1.525-4.734 3.813-5.966L2.56 3.74a.5.5 0 0 1 .2-.678ZM5 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
</svg>Log out
			</a></li>
			
	</ul>
	
						
</div>
<style>
	.logoOK {
max-width: 100px;
height: 27px;
}
</style>