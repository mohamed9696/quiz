<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">    
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: "Open Sans", sans-serif;
    }
    .contact-form {
        padding: 50px;
        margin: 30px 0;
    }
    .contact-form h1 {
        text-transform: uppercase;
        margin: 0 0 15px;
    }
    .contact-form .form-control, .contact-form .btn  {
        min-height: 38px;
        border-radius: 2px;
    }
    .contact-form .btn-primary {
        min-width: 150px;
        background: #299be4;
        border: none;
    }
    .contact-form .btn-primary:hover {
        background: #1c8cd7; 
    }
    .contact-form label {
        opacity: 0.9;
    }
    .contact-form textarea {
        resize: vertical;
    }
    .hint-text {
        font-size: 15px;
        padding-bottom: 15px;
        opacity: 0.8;
    }
    .bs-example {
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-auto">
			<div class="contact-form">
				<h3>Contact List</h1>
				<table class="table table-striped table-hover">
				  <thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">First Name</th>
					  <th scope="col">Last Name</th>
                      <th scope="col">Email Address</th>
                      <th scope="col">&nbsp</th>
                      <th scope="col">&nbsp</th>
					</tr>
				  </thead>
				  <tbody>
                      
                    
                    <form action="" method="GET" class="form-horizontal">
                        @foreach ($contacts as $contact )
                            <tr>
                                <td class="table-text"><div>{{$contact->id}}</div></td>
                                <td class="table-text"><div>{{$contact->first}}</div></td>
                                <td class="table-text"><div>{{$contact->last}}</div></td>
                                <td class="table-text"><div>{{$contact->email}}</div></td>
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>       
                                <td><button type="submit" class="btn btn-primary">Edit</button></td>
                            </tr>
                        @endforeach
                        
                        </tr>
                    </form>
                  </tbody>
                </table>  
			</div>
		</div>
	</div>
</div>
</body>
</html>                    