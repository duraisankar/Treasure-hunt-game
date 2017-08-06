
<?php
  $notifications = mysql_query('select * from notifications');
?>
<!-- Leaderboard Page Contents -->
<div class="row" id="leaderboardContent">
<div class="ten column centered">	
	<table class="twelve">
  <thead>
    <tr>
      <th><b>Date</b></th>
      <th><b>Notification</b></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysql_fetch_assoc($notifications)) { ?>
    <tr>
      <td style="width: 7em;"><?php echo $row['date'] ?></td>
      <td><?php echo $row['notification'] ?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</div>

</div>
