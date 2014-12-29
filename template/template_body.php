        <!-- bootstrap header -->
            <div class="navbar navbar-default">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AZUFO</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav" style="display:none;">
                  <li class="active"><a href="#">Active</a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Dropdown header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left" style="display:none;">
                  <input type="text" class="form-control col-lg-8" placeholder="Search">
                </form>
                <ul class="nav navbar-nav navbar-right">
<?php
	if($config['session'] == false)
	{
?>
				  <li style="text-decoration: line-through;"><a href="#">Register</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                    <div class="dropdown-menu" style="padding: 15px;">
						<form action="javascript:void(0);" method="post" accept-charset="UTF-8" id="user_login">
						  <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
						  <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" /><br>
						  <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
						  <label class="string optional" for="user_remember_me"> Remember me</label>
						  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
						</form>
                    </div>
                  </li>
<?php
	}
	else
	{
?>
		<li><a href="#">Logout</a></li>
<?php
	}
?>
                </ul>
              </div>
            </div>
        <!-- /boostrap header -->
		<div class="container theme-showcase" role="main">
			stuff
			<div id="bs_wrapper"></div>
		</div>
<div id="sidebar" style="width:500px;height:500px;"></div>
<?php
    //include javascript librairies
    //defaults or globals across all page views
    if(count($default_js) > 0)
    {
        foreach($default_js as $jsD)
        {
            echo $func->gen_tags("js",$jsD);
        }
    }
    //additional javascript on a view to view basis
    if(count($extra_js) > 0)
    {
        foreach($extra_js as $jsE)
        {
            echo $func->gen_tags("js",$jsE);
        }
    }
?>
<script type="text/template" id="template-payment-management-table">
	<table id="payment-management-table" class="dataTable">
		<thead>
			<tr>
				<td>Amount</td>
				<td>Company</td>
				<td>Billed For</td>
				<td>Due Date TS</td>
				<td>Due Date</td>
			</tr>
		</thead>
		<tfoot></tfoot>
		<tbody>
			<% _.each(bills, function(bill){ %>
				 <tr data-user-id="<%= bill.bill_id %>" data-bill-paid="<%= bill.bill_paid %>">
					<td><%= bill.bill_amount %></td>
					<td><%= bill.compnay_name %></td>
					<td><%= bill.bill_name %></td>
					<td><%= bill.bill_due_ts %></td>
					<td><%= bill.bill_due_nice %></td>
				</tr>
			<% }) %>
		</tbody>
	</table>
</script>

<script type="text/javascript">

	var billsCollection = Backbone.Collection.extend({
		model:billsModel,
		initialize: function() {
			console.log('Collection initialized');
			this.add(new billsModel());
		}
	});
	var billsModel = Backbone.Model.extend({
		defaults: {
			compnay_name	: '',
			bill_name		: '',
			bill_amount		: 0.00,
			bill_id			: 0,
			bill_due_ts		: new Date(),
			bill_due_nice	: new Date(),
			bill_paid		: false,
		},
		initialize: function() {
			console.log('Model Initialized');
		}
	});
	var billsView = Backbone.View.extend(
	{
		el: '#bs_wrapper',
		template: _.template($('#template-payment-management-table').html()),
		render:function() {
			var data = { billed: billsCollection.toJSON() };
			this.$el.html(this.template(this.model.attributes));
		}
	});

	var bills = new billsModel();
	var billView = new billsView();
</script>
