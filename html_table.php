<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
	</head>
	<body>

		<table class="table table-sm table-bordered myTable">
			<tr>
				<td>priyanka</td>
				<td>yadav</td>
				<td>66666</td>
				<td><button class="btn btn-primary btn-sm p_removeName">Remove Name</button></td>
				<td><button class="btn btn-success btn-sm p_removeName">Remove Surname</button></td>
			</tr>
		</table>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			(function(){
				
				$('.p_removeName').click(function(e){
					e.preventDefault();
					//$(this).closest('table').find('td:first-child').html('');
					$(this).closest('table').find('td:nth-child(2)').html('');
				});
			})(jQuery);
		
		</script>
	</body>
</html>