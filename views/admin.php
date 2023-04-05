

<!DOCTYPE html>
<html>
<head>
	<title>Authenticated Page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
		}

		.logout {
            background-color: #0e0e0e;
            color: #fff;
            margin-top: 23px 10px;
            position: flex;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 2 !important;
            position: relative;
            margin-left: 70rem;
            width: 5rem;
			margin-bottom: 20px;
		}

		.logout:hover {
			background-color: #333;
			color: #fff;
			transform: scale(1.05);
		}

		.welcome {
			text-align: center;
			background-color: #ddd;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			z-index: 1;
		}

		.container-e {
			margin-top: 100px;
			text-align: center;
			background-color: #fff;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			padding: 20px;
			transition: transform 0.3s ease-in-out;
		}

		.container-e:hover {
			transform: scale(1.05);
		}
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>
	<div class="welcome">
		<h2>Welcome, <?php echo $user_name ?>!</h2>
		<form action="/logout" method="POST" enctype="multipart/form-data">
			<input class="logout" type="submit" value="Logout"/>
		</form>
	</div>
	<div class="container-e">
		<button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Expense</button>
	</div>
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Create Expense</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="/expense" id="formExpense" method="post">
					<div class="modal-body">
							<div class="mb-3">
								<label for="description" class="col-form-label">Description:</label>
								<input class="form-control" id="description" name="description"></input>
							</div>
							<div class="mb-3">
								<label for="value" class="col-form-label">Value:</label>
								<input class="form-control" id="value" name="value"></input>
							</div>
							<div class="mb-3">
								<label for="message-text" class="col-form-label">Expense Date:</label>
								<input class="form-control" type="date" id="date" name="date"></input>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" id="createExpense">Create</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach($expenses as $expense) { ?>
				<div class="col-sm-2 col-md-3 col-lg-3" style="padding-top: 1rem;">
					<div class="card">
						<div class="card-header text-center">
							<p class="p-td" align="right">
								<button class="btn btn-primary btn-sm updExpense" onClick="update(this)" data-expense="<?= $expense['id'] ?>" data-bs-toggle="modal" data-bs-target="#gridSystemModalUpdate">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
									<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
									<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
									</svg>
								</button>                                                 
								<button class="btn btn-danger btn-sm delExpense" onClick="deleteExpense(this)" data-expense="<?= $expense['id'] ?>" data-bs-toggle="modal" data-bs-target="#gridSystemModalDelete">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
									<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
									</svg>
								</button> 
							</p>
						</div>
						<h5 class="text-center"><?= $expense['description']; ?></h5>
						<div class="card-body text-center">
							<?= $expense['amount']; ?>
						</div>
						<div class="card-footer text-body-secondary text-center">
							<?= $expense['expense_date']; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="modal" id="gridSystemModalUpdate"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Update Expense</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                           
				</div>
				<div class="modal-body">
					<form action="/expenseup" id="formExpenseUpdate" method="post" class="row g-3 needs-validation" novalidate id="updateTodo">
					<input type="hidden" name="id" id="id">
						
						<div class="form-group">
							<label for="message-text" class="col-form-label">Description:</label>
							<textarea class="form-control" name="description" id="descriptionUpdate" required></textarea>
						</div>
						<div class="form-group">
							<label for="validationTooltip01" class="form-label">Amount :</label>
							<input type="text" class="form-control" name="amount" id="amountUpdate" required>
						</div>
						<div class="row">
							<div class="col-sm-9">
									<div class="row">
										<div class="col-8 col-sm-6">
											<label for="message-text" class="col-form-label">Date :</label>
											<input type="text" class="form-control" name="date" id="dateUpdate" required>
										</div>                                            
									</div> 
							</div> 
						</div>    
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-success" id="btnUpdateExpense">Update</button>
						</div>     
					</form>
				</div>                                                       
			</div>     
		</div>            
    </div>
	<div class="modal" id="gridSystemModalDelete" data-bs-backdrop="static" 
             data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titleModalDeleteTodo">Delete Expense</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                    </div>
					<form action="/deleteExp" method="POST">
						<input type="hidden" name="idDelete" id="idDelete">
						<div class="modal-body">
							Are you sure you want to delete the expense?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger" id="btnDeleteExpense">Delete</button>
							</div>   
						</div>   
					</form>  
            </div>    
        </div> 

	<script>
		function update(element) {
			let id = element.dataset.expense;
			let idExpense = document.getElementById("id")
			idExpense.value = id;

			let expense = null;

			fetch('/expense/' + id)
			.then(response => response.json())
			.then(data => {
				expense = data.expense;
				let description = document.getElementById("descriptionUpdate")
				let amount = document.getElementById("amountUpdate")
				let date = document.getElementById("dateUpdate")
				description.value = expense[0].description;
				amount.value = expense[0].amount;
				date.value = expense[0].expense_date;
			})
			.catch(error => console.error(error));
		}
		function deleteExpense(element) {
			let id = element.dataset.expense;
			let idExpense = document.getElementById("idDelete")
			idExpense.value = id;
		}
	</script>

</body>
</html>
