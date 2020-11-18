<html>

<head>
  <title>Kitchen Inventory</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



     <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <link rel="stylesheet" tyspe="text/css" href="<?php echo base_url().'css/style1.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap.min.css';?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
   <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}
body {
    


} 
.panel{
    background-color: rgba(245, 245, 245, 0.4); ;
    border: 1px #222;
}
    .modal-header-primary {
    	color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #428bca;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
         border-top-left-radius: 5px;
         border-top-right-radius: 5px;
    }

    .modal-footer-primary {

        padding:9px 15px;
        border-bottom:1px solid #eee;

        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
         border-top-left-radius: 5px;
         border-top-right-radius: 5px;
    }
   </style>
</head>

<body>
     <video autoplay loop id="video-background" muted plays-inline>
	  <source src="<?php echo base_url().'css/images/backgorundVideo.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761';?>" type="video/mp4">
	</video>
  <div class="panel panel-success col-md-10 col-md-offset-1">
      

      <div class="panel-body">

		<nav class="navbar navbar-inverse">

			<div class="container-fluid">

				<ul class="nav navbar-nav">
				  <li><a href="<?php echo base_url().'user'?>">Home</a></li>
				
				<!--dropdown for inventory-->
        		<li><a href="<?php echo base_url().'Hotel'?>">Hotel Inventory</a></li>	
        		<li class="active"><a href="<?php echo base_url().'Kitchen'?>">Kitchen Inventory</a></li>
        		<li><a href="<?php echo base_url().'Main_bar'?>">Resturant Inventory</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
      			<li><a href="<?php echo base_url().'main/logout'?>">Log out</a></li>
    	</ul>
			</div>
		</nav>
		
		<nav class="navbar navbar-inverse">

			<div class="container-fluid">

				<ul class="nav navbar-nav">
				  
				<!--dropdown for inventory-->
        		<li class="active"><a href="<?php echo base_url().'Kitchen'?>">Kitchen Inventory</a></li>
        		<li><a href="<?php echo base_url().'Menu_management'?>">Menu Management</a></li>
				</ul>

			</div>
		</nav>


		<a <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addDataToStock">Update Stock</a>
    <br>
    <a <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#updateDailyConsumptions">Update Daily Consumptions</a>
    <br>
    <a <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addNewStockItem">New Entry</a>
    <br>
		<div class="panel panel-primary">
		<div class="panel-heading">Available Stocks in Main Kitchen Stock Inventory</div>
		<div class="panel-body" style="height:250; overflow-y: scroll;">
		<div class="panel-body">

			<div class="table">
			  <table class="table">
				<thead>
				  <tr>
					<th>Stock ID</th>
					<th>Item Name</th>
					<th>Quantity (Available)</th>
                    <th>Last Updated Date</th>
				  </tr>
				</thead>
				<tbody>
          <?php

            if((sizeof($infos))>0)
            {
              foreach ($infos as $info)
              {
                ?>
                <tr>
                  <td><?php echo $info->kitchen_item_id;?></td>
                  <td><?php echo $info->kitchen_item_name;?></td>
                  <td><?php echo $info->item_quantity;?></td>
                  <td><?php echo $info->date_inserted?></td>
                <?php
              }
            }
            else
            {
              ?> <tr><td colspan='3'>Data Not Found</td></tr>
          <?php  }

          ?>
				</tbody>
			  </table>
			</div>
		</div>
		</div>
		</div>


		<div class="panel panel-primary">
		<div class="panel-heading">
		    Daily Usage Regarding to Kitchen Stock Items
		    <div class="row">
		    <a <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#filterTable">Filter Table</a>
            <br>
		</div>
		</div>
		<br>
		 
		<div class="panel-body" style="height:250; overflow-y: scroll;">
		<div class="panel-body">

			<div class="table">
			  <table class="table">
				<thead>
				  <tr>
                    <th>Stock ID</th>
                    <th>Item Name</th>
					<th>Date</th>
					<th>Usage</th>
				  </tr>
				</thead>
				<tbody>
          <?php

            if((sizeof($avail))>0)
            {
              foreach ($avail as $info)
              {
                ?>
                <tr>
                  <td><?php echo $info->kitchen_item_id;?></td>
                  <td><?php echo $info->kitchen_item_name;?></td>
                  <td><?php echo $info->date;?></td>
                  <td><?php echo $info->used_quantity;?></td>
                <?php
              }
            }
            else
            {
              ?> <tr><td colspan='3'>Data Not Fount</td></tr>
          <?php  }

          ?>
				</tbody>
			  </table>
			</div>
		</div>
		</div>
		</div>

		<div class="panel panel-primary">
		<div class="panel-heading">Total Usage Regarding to Kitchen Stock Items</div>
		<div class="panel-body" style="height:250; overflow-y: scroll;">
		<div class="panel-body">

			<div class="table">
			  <table class="table">
				<thead>
				  <tr>
					<th>Stock ID</th>
                    <th>Item Name</th>
					<th>Usage</th>
                    <th>Last Updated Date</th>
				  </tr>
				</thead>
				<tbody>
          <?php

            if((sizeof($month))>0)
            {
              foreach ($month as $info)
              {
                ?>
                <tr>
                  <td><?php echo $info->kitchen_item_id;?></td>
                  <td><?php echo $info->kitchen_item_name;?></td>
                  <td><?php echo $info->available_stock;?></td>
                  <td><?php echo $info->date_inserted;?></td>
                <?php
              }
            }
            else
            {
              ?> <tr><td colspan='3'>Data Not Fount</td></tr>
          <?php  }

          ?>
				</tbody>
			  </table>
			</div>
		</div>
		</div>
		</div>


		<div class="panel panel-primary">
		<div class="panel-heading">Expenditures of Kitchen Stocks Up-To-Date</div>
		<div class="panel-body" style="height:250; overflow-y: scroll;">
		<div class="panel-body">

			<div class="table">
			  <table class="table">
				<thead>
				  <tr>
					<th>Stock ID</th>
                    <th>Item Name</th>
					<th>Expend</th>
                    <th>Last Updated Date</th>
				  </tr>
				</thead>
				<tbody>
          <?php

            if((sizeof($outcome))>0)
            {
              foreach ($outcome as $info)
              {
                ?>
                <tr>
                  <td><?php echo $info->kitchen_item_id;?></td>
                  <td><?php echo $info->kitchen_item_name;?></td>
                  <td><?php echo $info->item_outcome;?></td>
                  <td><?php echo $info->date_inserted;?></td>
                <?php
              }
            }
            else
            {
              ?> <tr><td colspan='3'>Data Not Fount</td></tr>
          <?php  }

          ?>
				</tbody>
			  </table>
			</div>
		</div>
		</div>
		</div>

	</div>
    </div>
<!--modals-->
    <div class="modal fade" id="addDataToStock" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header modal-header-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Available Stocks</h4>
        </div>
      <!--asdfsadf-->
      <br>
      <form method="post" action="MainStock/form_validation">
				<div class="input-group" style="width: 100%">
				  <span class="input-group-addon" style="width: 20%;">Item Code: </span>
				  <input type="text" class="form-control" style="width: 98%" name="item_code" placeholder="Insert item name">

				</div>
				<br>

				<div class="input-group" style="width: 100%">
				  <span class="input-group-addon" style="width: 20%;">Quantity: </span>
				  <input type="text" class="form-control" style="width:80%" name="item_quantity" placeholder="Amount of quantity">
          <select class="input-group-addon" data-live-search="true" style="width: 18%;" >
  					<option>kg</option>
  					<option>l</option>
  					<option>Count </option>
				  </select>
				</div>
        <br>

        <div class="bootstrap-iso">
         <div class="container-fluid">
           <div class="row">
             <div>
               <div class="form-group ">
                 <div >

                   <div class="input-group" style="width: 100%;">
                   <span class="input-group-addon" style="width: 20%;">Date: </span>
                   <input class="form-control" style="width: 98%;" name="date" placeholder="YYYY-MM-DD" type="text"/>
                   </div>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <br>
       <div class="input-group" style="width: 100%">
         <span class="input-group-addon" style="width: 20%;">Expends: </span>
         <input type="text" class="form-control" style="width: 98%" name="item_exp" placeholder="Rs 0000.00">

       </div>
        <div class="modal-footer">
          <input type="submit" name="submit_item" value="Submit" class="btn btn-primary">
        </div>
			 </form>
      <!--asdfsadf-->

      </div>

    </div>
  </div>

  <div class="modal fade" id="updateDailyConsumptions" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header modal-header-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Daily Consumes</h4>
        </div>
      <!--asdfsadf-->
      <br>
      <form method="post" action="Kitchen/form_validation">
        <div class="input-group" style="width: 100%">
          <span class="input-group-addon" style="width: 20%;">Insert Item Code: </span>
          <input type="text" class="form-control" style="width: 98%" name="item_code" placeholder="Search the item">

        </div>
        <br>

        <div class="input-group" style="width: 100%">
          <span class="input-group-addon" style="width: 20%;">Quantity: </span>
          <input type="text" class="form-control" style="width:80%" name="item_quantity" placeholder="Amount of quantity">
          <select class="input-group-addon" data-live-search="true" style="width: 18%;" name="drop_box" >
  					<option value="kg">kg</option>
  					<option value="l">l</option>
  					<option value="Count">Count </option>
				  </select>
        </div>
        <br>
        <div class="bootstrap-iso">
     			<div class="container-fluid">
     				<div class="row">
     					<div>
     						<div class="form-group ">
     							<div >

     								<div class="input-group" style="width: 100%;">
     								<span class="input-group-addon" style="width: 20%;">Date: </span>
     								<input class="form-control" style="width: 98%;" name="date" placeholder="YYYY-MM-DD" type="text"/>
     								</div>

     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     		</div>
        <div class="modal-footer">
          <input type="submit" name="submit_item" value="Submit" class="btn btn-primary">
        </div>
      </div>
       </form>
      <!--asdfsadf-->
      </div>
  </div>

  <div class="modal fade" id="addNewStockItem" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header modal-header-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Stock Item to Kitchen Stock Inventory</h4>
        </div>
      <!--asdfsadf-->
      <br>
      <form method="post" action="AddStock/form_validation">
        <div class="input-group" style="width: 100%">
          <span class="input-group-addon" style="width: 20%;">Item Code: </span>
          <input type="text" class="form-control" style="width: 98%" name="item_code" placeholder="Insert item code">

        </div>
        <br>

        <div class="input-group" style="width: 100%">
          <span class="input-group-addon" style="width: 20%;">Item Name: </span>
          <input type="text" class="form-control" style="width: 98%" name="item_name" placeholder="Insert item name">

        </div>
        <br>

        <div class="input-group" style="width: 100%">
          <span class="input-group-addon" style="width: 20%;">Quantity: </span>
          <input type="text" class="form-control" style="width:80%" name="item_quantity" placeholder="Amount of quantity">
          <select class="input-group-addon" data-live-search="true" style="width: 18%;" name="drop_box">
            <option value="kg">kg</option>
            <option value="l">l</option>
            <option value="Count">Count </option>
          </select>
        </div>
        <br>

        <div class="bootstrap-iso">
         <div class="container-fluid">
           <div class="row">
             <div>
               <div class="form-group ">
                 <div >

                   <div class="input-group" style="width: 100%;">
                   <span class="input-group-addon" style="width: 20%;">Date: </span>
                   <input class="form-control" style="width: 98%;" name="date" placeholder="YYYY-MM-DD" type="text"/>
                   </div>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <br>
       <div class="input-group" style="width: 100%;">
       <span class="input-group-addon" style="width: 20%;">Expends: </span>
       <input class="form-control" style="width: 98%;" name="item_exp" placeholder="Rs 0000.00" type="text"/>
       </div>

        <div class="modal-footer">
          <input type="submit" name="submit_item" value="Submit" class="btn btn-primary">
        </div>
       </form>
      <!--asdfsadf-->
      </div>
    </div>
  </div>
  
  
  
  <div class="modal fade" id="filterTable" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header modal-header-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Filer Table</h4>
        </div>
      <!--asdfsadf-->
      <br>
      <form method="post" action="Kitchen/getSearch">
        <div class="input-group" style="width: 100%">
          <span class="input-group-addon" style="width: 20%;">Item Name: </span>
          <input type="text" class="form-control" style="width: 98%" name="item_name" placeholder="Insert item name">

        </div>
        <br>

        <div class="bootstrap-iso">
         <div class="container-fluid">
           <div class="row">
             <div>
               <div class="form-group ">
                 <div >

                   <div class="input-group" style="width: 100%;">
                   <span class="input-group-addon" style="width: 20%;">From: </span>
                   <input class="form-control" style="width: 98%;" name="b_date" placeholder="YYYY-MM-DD" type="text"/>
                   </div>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <br>
       
       
        <div class="bootstrap-iso">
         <div class="container-fluid">
           <div class="row">
             <div>
               <div class="form-group ">
                 <div >

                   <div class="input-group" style="width: 100%;">
                   <span class="input-group-addon" style="width: 20%;">To: </span>
                   <input class="form-control" style="width: 98%;" name="l_date" placeholder="YYYY-MM-DD" type="text"/>
                   </div>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <br>
      

        <div class="modal-footer">
          <input type="submit" name="submit_item" value="Search" class="btn btn-primary">
        </div>
       </form>
      <!--asdfsadf-->
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  		<script>
  			$(document).ready(function(){
  				var date_input=$('input[name="date"]'); //our date input has the name "date"
  				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  				date_input.datepicker({
  					format: 'yyyy-mm-dd',
  					container: container,
  					todayHighlight: true,
  					autoclose: true,
  				})
  			})
  		</script>
  		
  		<script>
  			$(document).ready(function(){
  				var date_input=$('input[name="l_date"]'); //our date input has the name "date"
  				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  				date_input.datepicker({
  					format: 'yyyy-mm-dd',
  					container: container,
  					todayHighlight: true,
  					autoclose: true,
  				})
  			})
  		</script>
  		
  		<script>
  			$(document).ready(function(){
  				var date_input=$('input[name="b_date"]'); //our date input has the name "date"
  				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  				date_input.datepicker({
  					format: 'yyyy-mm-dd',
  					container: container,
  					todayHighlight: true,
  					autoclose: true,
  				})
  			})
  		</script>
</body>
</html>
