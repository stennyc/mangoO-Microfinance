<!DOCTYPE HTML>
<?PHP
	require 'functions.php';
	checkLogin();
	connect();
?>

<html>
	<!-- HTML HEAD -->
	<?PHP includeHead('Customer Search',1); ?>
	
	<body>
		<!-- MENU -->
		<?PHP includeMenu(2); ?>
		<div id="menu_main">
			<a href="cust_search.php" id="item_selected">Search</a>
			<a href="cust_new.php">New Customer</a>
			<a href="cust_act.php">Active Customers</a>
			<a href="cust_inact.php">Inactive Customers</a>
		</div>
					
		<!-- CONTENT: Customer Search -->
		<div class="content_center">
			
			<!--
			<form action="customer.php" method="get" style="margin-bottom:4.5em;">
				<p class="heading_narrow">Quick Search by ID</p>
				<input type="text" name="cust" placeholder="Customer ID" />
				<input type="submit" value="Search" />
			</form>
			-->
			
			<form action="cust_result.php" method="post">
				<p class="heading_narrow">Detailed Customer Search</p>
				<input type="text" name="cust_search_no" placeholder="Number or number part"/>
				<br/><br/>
				<input type="text" name="cust_search_name" placeholder="Name or name part"/>
				<br/><br/>
				<input type="text" name="cust_search_occup" placeholder="Occupation or part"/>
				<br/><br/>
				<input type="text" name="cust_search_addr" placeholder="Address or address part"/>
				<br/><br/>
				<input type="submit" name="cust_search" value="Search" />
			</form>
		</div>
	</body>
</html>