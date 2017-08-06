<?php include('frontpage_header.php'); ?>

<!-- Main Content Area -->
<div id="mainContent" class="row radius">
	
	<div class="twelve column">
		
		<div class="row">
			<div class="twelve column centered">
				<br/>
				<center><h1>Leaderboard</h1></center>
				
				
				
				<center> <h3> Top 100 smarters </h3></center>
				
				<hr/>
<?php $i=1;
 $limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

  $leaderboard = mysql_query("select name, round1, scoreachieved, tym, current, college, (scoreachieved+round1) as 'scoreachieved' from profile order by scoreachieved desc, tym asc, current asc LIMIT $start_from, $limit");

 

  ?>
  
  <?php
  if (($_GET["page"])==1) 
  {
echo "
   <style>
#table-4 tr:nth-child(1) {
    background: #e74c3c;
}

#table-4 tr:nth-child(2) {
    background: #2980b9;
}
#table-4 tr:nth-child(3) {
    background: #1abc9c;
}

</style> ";
  }
  
  ?>

<!-- Leaderboard Page Contents -->
<div class="row" id="leaderboardContent">
<div class="twelve column">	
	<table class="twelve" id="table-4">
  <thead>
    <tr style="
    background: #f5f5f5;
">
      <th>Rank</th>
      <th>Name</th>
      <th>Score</th>
      <th>Questions Attempted</th>
      <th>Submission Time</th>
      <th>College</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 

  $i=$start_from+1;

  while($row = mysql_fetch_assoc($leaderboard)) { ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['scoreachieved'] ?></td>
      <td><?php echo intval($row['current'])-1 ?></td>
      <td><?php echo date("F j, Y, g:i a", $row['tym']); ?></td>
      
      <td><?php echo $row['college'] ?></td>
    </tr>
  <?php  } ?>
  
  <style>
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
    margin-bottom : 10px;
}

ul.pagination li {display: inline;}

ul.pagination li a {
	font-weight:900;
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}

@media screen and (max-width: 390px) {

#table-4 tr td:nth-child(4), #table-4 tr td:nth-child(5),#table-4 tr td:nth-child(6),
 #table-4 tr th:nth-child(4), #table-4 tr th:nth-child(5), #table-4 tr th:nth-child(6){
    display: none;
}	
</style>
  
  </tbody>
</table>

<?php  
$sql = "SELECT COUNT(name) FROM profile";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=10; $i++) {  
             $pagLink .= "<li><a href='frontpage_leaderboard.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul>";  
?>
</div>


</div>
				
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
		
	</div>
</div>

<?php include('oth_footer.php'); ?>