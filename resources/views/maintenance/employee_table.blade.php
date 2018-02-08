@extends('master')
@extends('layout/side-nav')
@extends('layout/header-main')	
@section('content')

<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>EMPLOYEE TABLE</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Employee tables</li>
						<div class="pull-right">
							<button type="button" data-target=".bs-example-modal-full" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i>New Employee</a>
						</div>
					</ol>
				</header>
				<!-- /page title -->
<div class="modal fade bs-example-modal-full" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-full">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Employee</h4>
      </div>

      <!-- Modal Body -->
      <form action="{{ url('employees') }}" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
      	<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label>First Name *</label>
					<input type="text" name="efname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Middle Name *</label>
					<input type="text" name="emname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Last Name *</label>
					<input type="text" name="elname" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>E-mail *</label>
					<input type="text" name="email" value="" class="form-control required">
				</div>
				<div class="col-md-4">
					<label>Position *</label>
					<select name="position" class="form-control " required onchange="if (this.value=='edu'){this.form['edu'].style.visibility='visible'}else {this.form['edu'].style.visibility='hidden'};">
					<option value="" selected="selected"></option>
					@foreach($positions as $position)
      <option value="{{$position->name}}">{{$position->name}}</option>
    @endforeach
					{{-- <option value="edu">Other</option> --}}
					</select>
					<input type="textbox" name="edu" class="form-control required" style="visibility:hidden;"/>
				
				</div>
				</div>
				<div class="col-md-4">
					<label>Contact No. *</label>
					<input type="text" name="contact" value="" class="form-control required">
				</div>
				
				
			</div>
		</div>

 
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-green">Submit</button>
      </div>

    </div>
  </div>
</div>
</form>
				<div id="content" class="padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>EMPLOYEE</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>
						<!--<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="pull-right">
									<a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i> New Request</a>
									
								</div>
							</div>
							
						</div>
						 panel content -->
						<div class="panel-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
<tbody>
								@foreach ($employees as $employee)
									<tr>
										<td>
											 {{$employee->elname}}, {{$employee->efname}}, {{$employee->emname}}
										</td>
										<td>
											 {{$employee->position}}
										</td>
										<td>
											 <a class="edit" href="javascript:;">
											Edit </a>
										</td>
										<td>
											<a class="delete" href="javascript:;">
											Delete </a>
										</td>

									</tr>
									@endforeach	
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->

					</div>
					<!-- /PANEL -->

				</div>
			</section>
@stop