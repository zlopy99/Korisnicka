<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Predmeti</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link href="../../css/styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="../../css/admin.css" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<?php include 'user_nav.php';?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Predmeti</b></h2>
					</div>
					
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							
						</th>
						<th>Naziv
                                               </th>
						<th>Predavač</th>
						<th>Materijali</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							
						</td>
                                                <td>Matematika za srednju školu</td>
						<td>Mate Matić</td>
                                                <td> <a href="http://www.math.kent.edu/~mathweb/ebooks/10031/book.pdf" ><img src="http://www.clker.com/cliparts/f/H/5/a/Q/y/text-file-icon-md.png" style="width:20px;height:20px;"> <br>Mathweb</a>  </td>
						<td> <a href="https://www.mathlearningcenter.org/sites/default/files/pdfs/B4PB-B_0410w.pdf" ><img src="http://www.clker.com/cliparts/f/H/5/a/Q/y/text-file-icon-md.png" style="width:20px;height:20px;"> <br>Zadaća i vježbanje</a>  </td>
					</tr>
					
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Prikazano <b>1</b> od <b>1</b> predmeta</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#"></a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    
				</ul>
			</div>
		</div>
	</div>        
</div>
</body>
</html>



