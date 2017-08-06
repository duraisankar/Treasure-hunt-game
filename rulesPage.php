<?php 

include('oth_header.php'); 
?>
<style>
body{
	

background: #485563; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #485563 , #29323c); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #485563 , #29323c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
}

a {color:#fff;}
</style>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
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
<div id="rulesContent">
	<div class="row">
		<div style="height: 2em"></div>
		<div class="eleven column centered">
			<dl class="tabs four-up">
				<dd class="active"><a href="#judgingCriteria">Judging Criteria</a></dd>
				<dd><a href="#rules">Rules</a></dd>
				<dd><a href="#dates">Important Dates</a></dd>
				
			</dl>
			<ul class="tabs-content">
				<li class="active" id="judgingCriteriaTab">
					<ul>
  <li>The team with maximum marks obtained will be declared winner.</li>
</ul>
<p>The marking scheme is as follows :- </p>
 
<br>
<p><strong>Day 2 :</strong></p>
<ul>
  <li>For every correct answer, you get 150 marks.<strong></strong></li>
  <li>If you use Hint1 to solve the problem , 50 marks get deducted  for that particular question.</li>
  <li>On using Hint2, you will get 0 marks for the question and move on to the next question.</li>
  <li>In case of a tie, time will be the judging criteria. The team  with minimum time taken &nbsp;(maximum marks)  will be declared winner.</li>
  <li>In case of any discrepancy, decision of Online Treaure Hunt  committee will be treated as the final decision.</li>
  <li>Winner of this event will get a direct entry to Round 1 (Day  2) of TREASURE HUNT.</li>

					</ul>
				</li>
				<li id="rulesTab">
					<ol>
  <li>Registering for an event  is compulsory.</li>
  <li>1 member/Single Event.</li>
  <li>Time Limit :- 2 days.</li>
</ol>
<p style="text-decoration: line-through;">On Day 1, 15 questions will be provided.</p>
  <p>Rest 18 questions will be available on Day 2.</p>
<ol>
  <li>Without answering a  question you can&rsquo;t move on to the next question.</li>
  <li>Each question will carry <span style="text-decoration: line-through;"> 100 marks (Day 1)</span> and 150 marks (Day2 ).</li>
  <li>Two hints : Hint1 ,Hint2 related to the question will be provided in case you are stuck.</li>
  <li>Marks will be deducted if  you use a hint to solve a problem (for more information see judging criteria)</li>
  <li>You can use google to  solve a question. </li>
  <li>In case answer is a name,  use a space between first name and last name. (eg :- Pranab Mukherjee).</li>
  <li>If answer is a sentence,  important keywords will be searched for answer.</li>
  <li>In case two blanks are  given in a question use &lsquo;<strong>,</strong>&rsquo; to  separate the answers. e.g <strong>answer,answer</strong> and after , spaces are not allowed!</li>
  <li>Special characters are not  allowed.</li>
  <li>Winner of this event will  get a direct entry to Round 1 (Day 2) of TREASURE HUNT.</li>
  <li><strong>Multiple entries will not be entertained. Profile with multiple entries will be disqualified!</strong></li>

					</ol>
				</li>
				<li id="datesTab">
					<ol>
            <li style="text-decoration: line-through;">1<sup>st</sup> March :- Round 1 of online treasure hunt. Each question consists of 100 marks</li>
            <li>2<sup>nd</sup> March :- Final Round of online treasure hunt. Each question carry 150 marks</li>
            <li>6<sup>th</sup> March :- Winner of online treasure hunt will get direct entry in Final Day of Gold Digger Event.</li>
          </ol>
					
				</li>
				<div class="alert warning">
 
  <strong>After reading!</strong> Click start solving to begin the game. Enjoy!
</div>
				
			</ul>
			
		</div>
	</div>
</div>

<?php include('oth_footer.php');