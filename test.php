<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wentworth Institute | WIN College</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		/*
		*
		* ==========================================
		* CUSTOM UTIL CLASSES
		* ==========================================
		*
		*/

		.dropdown-submenu {
		  position: relative;
		}

		.dropdown-submenu>a:after {
		  content: "\f0da";
		  float: right;
		  border: none;
		  font-family: 'FontAwesome';
		}

		.dropdown-submenu>.dropdown-menu {
		  top: 0;
		  left: 100%;
		  margin-top: 0px;
		  margin-left: 0px;
		}

		/*
		*
		* ==========================================
		* FOR DEMO PURPOSES
		* ==========================================
		*
		*/

		body {
		  background: #4568DC;
		  background: -webkit-linear-gradient(to right, #4568DC, #B06AB3);
		  background: linear-gradient(to right, #4568DC, #B06AB3);
		  min-height: 100vh;
		}

		code {
		  color: #B06AB3;
		  background: #fff;
		  padding: 0.1rem 0.2rem;
		  border-radius: 0.2rem;
		}

		@media (min-width: 991px) {
		  .dropdown-menu {
		    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		  }
		}	

	</style>
</head>
<body>
	
	<div class="container">
		<section class="header">
		
		</section>

		<!-- <section class="nav"> -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">WIN College</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Course
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">ICT</a>
			          <a class="dropdown-item" href="#">Business</a>
			          <div class="dropdown-divider"></div>
			           <!-- Level two dropdown-->
			            <li class="dropdown-submenu">
			              <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
			              <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
			                <li>
			                  <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
			                </li>
			              </ul>
			         	 </li>

			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>
		<!-- </section> -->
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function() {
		  // ------------------------------------------------------- //
		  // Multi Level dropdowns
		  // ------------------------------------------------------ //
		  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
		    event.preventDefault();
		    event.stopPropagation();

		    $(this).siblings().toggleClass("show");


		    if (!$(this).next().hasClass('show')) {
		      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
		    }
		    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		      $('.dropdown-submenu .show').removeClass("show");
		    });

		  });
		});

	</script>
</body>
</html>