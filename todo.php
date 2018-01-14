<!DOCTYPE html>
<html>

<!--==================================================================
//
// Title:   TODO Application
// Description:
//   A TODO list application that is able to add, view, and delete
// tasks. Tasks have four statuses (Pending, Started, Completed or 
// Late), and a due date needs to be assigned to each task. There is 
// a status counter which filters the tasks based on status.
//=================================================================-->

<head>
  
	<title>ToDo Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="author" content="Salsabeel Tolba"/>
  <meta name="description" content="ToDo Application"/>
  <meta http-equiv="Expires" content="-1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="todo.css">
  
</head>
 
<body>
    <form method="get" class="TaskAction" enctype="application/x-www-form-urlencoded" 
	action="TaskAction.php" >
	
	<div class="list">
		<h1 class= "header"> To Do List </h1>
		<br>
         <label></label>
         <label>Task</label>
         <label>Status</label>
         <label>Due Date</label>
        <br>
		<ul class="items">
			<li>
				<span class="Task">  Name of task </span>
				<a href="1" class="pending-button">Task Pending</a>
				<a href="2" class="started-button">Task Started</a>
				<a href="3" class="completed-button">Task Completed</a>
				<a href="4" class="late-button">Task Late</a>
			</li>
			
			
		</ul>
		
		
			<input type="text" name="Task" placeholder="Enter task here" class="input" >
			<input type="submit" value="Add" class="Add Task">
			<input type="submit" value="Delete" class="Delete Task">
			
		</form>
		<br>
		<form class="StatusReport" action ="StatusReport.php" method="post">
			<p> Please select a task status from the drop-down menu to generate a report: </p>
			<select>
				<option value = "Choose Task item to continue"> Choose Task item to continue </option>
				<option value = "Pending Tasks"> Pending Tasks </option>
				<option value = "Started Tasks"> Started Tasks </option>
				<option value = "Completed Tasks"> Completed Tasks </option>
				<option value = "Late Tasks"> Late Tasks </option>
				<option value = "All Tasks"> All Tasks </option>
			</select>
			
			<input type="submit" value="Report" class="Submit">
			
				
			
		</form>
			
	</div>

</body>
 
</html>
