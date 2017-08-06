<?php include('oth_header.php'); ?>

<style>
body{
	

background: #485563; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #485563 , #29323c); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #485563 , #29323c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
}

a {color:#fff;}

.alert {
    padding: 20px;
    background-color: #f44336;
    line-height:15px;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}

</style>


<?php
	
	$questions = mysql_query('select id from questions');

?>
<div class="row">
	<div class="six column centered">
		<div class="alert-box alert">
			<center><span>Please read the rules before attempting questions...!</span></center>
		</div>
	</div>
</div>

<div style="height: 1em"></div>
<style>
	#questionsShow li {
		margin-top: 0.5em;
		margin-bottom: 0.5em;
	}
</style>
<div id="questionBar" class="row">
	<div class="twelve column centered">
	<ul id="questionsShow" class="inline-list">
		<?php while($row = mysql_fetch_assoc($questions)) { $id = $row['id']; ?>
		  	<li><a href="#" id="<?php echo 'question'.$id ?>"><span class="round label" id="questionSpan">Q<?php echo $id ?></span></a></li>
		  	<li><span>/</span></li>
		<?php } ?>
	</ul>
	</div>
</div>

<div style="height: 1em"></div>

<div id="mainContent" class="row">
	
	<div class="twelve column">
		<center><a class="th"><img src="images/welcome.png" style="width: 700px; height: 300px;" id="questionPic" /></a></center>
		<div style="height: 3em"></div>
	</div>
		<div class="row collapse">
			<div class="six column centered">
				<center><p><span id="answercorrectlabel"></span></p></center>
			</div>
			
		</div>

		<div class="row collapse">
			<div class="six column centered">
			  <div class="ten mobile-three columns">
				<input type="text" placeholder="Write your answer here..." id="answertext"/>
			</div>
			<div class="two mobile-one columns">
				<a class="button expand postfix" id="answerbutton">Answer</a>
		  	</div>
		</div>
	</div>
</div>

<div style="height: 1em"></div>

<div id="contents" class="row">
<div class="twelve column">

	<div class="row">
		
		
		<div class="alert">
  
  <strong>Caution!</strong> Marks will be deducted for each hint taken. Hint 1: -50 !
</div>
	</div>

	<div id="searchBar" class="row">

		<div class="nine column">
		<ul class="search">
		  <form>
		    <input type="text" disabled id="getHint" />
		  </form>
		</ul>
		</div>

		<div class="three column">
		<ul class="has-button">
		  <a class="small button round right" id="linkHint">Take Hint!</a>
		</ul>
		</div>

	</div>



</div>
</div> <!-- Contents div -->

<?php include('oth_footer.php'); ?>