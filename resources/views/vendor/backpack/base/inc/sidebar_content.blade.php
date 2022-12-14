<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<style>
    .hr-line{
        opacity: .20 !important;
        color: azure;
    }
    hr.hr-line{
        border:1px solid azure;
        box-shadow: 4px 4px 4px black;
		margin-left:0px !important;
    }
</style>

<hr class="hr-line m-2">
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<hr class="hr-line m-2">
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('questions-lists') }}"><i class="la la-cogs nav-icon"></i> {{ trans('Questions Lists') }}</a></li>
@hasanyrole('admin|superadmin')
<hr class="hr-line m-2">
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('mstquestion') }}'><i class='nav-icon la la-cogs'></i> MstQuestions</a></li>
<hr class="hr-line m-2">
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('mstschool') }}'><i class='nav-icon la la-cogs'></i> Schools</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('reviewprofile') }}'><i class='nav-icon la la-cogs'></i> Program</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('questiongroup') }}'><i class='nav-icon la la-cogs'></i> Question Groups</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('workassigneemaster') }}'><i class='nav-icon la la-cogs'></i> Work Assignment</a></li>
<hr class="hr-line m-2">
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-gears"></i>{{ trans('menu.primary') }}</a>
	<ul class="nav-dropdown-items" style="overflow-x:hidden">
		<li class='nav-item'><a class='nav-link' href='/admin/mstfedprovince'><i class='nav-icon la la-compass'></i>{{trans('menu.fedprovince')}}</a></li>
		<li class='nav-item'><a class='nav-link' href='/admin/mstfeddistrict'><i class='nav-icon la la-compass'></i> {{trans('menu.feddistrict')}}</a></li>
		<li class='nav-item'><a class='nav-link' href='/admin/mstfedlocallevel'><i class='nav-icon la la-compass'></i> {{trans('menu.fedlocallevel')}}</a></li>
		<li class='nav-item'><a class='nav-link' href='/admin/mstfedlocalleveltype'><i class='nav-icon la la-compass'></i> {{trans('menu.fedlocalleveltype')}}</a></li>
		<li class='nav-item'><a class='nav-link' href='/admin/mstnepalimonth'><i class='nav-icon la la-compass'></i> {{trans('menu.nepalimonth')}}</a></li>
		<li class='nav-item'><a class='nav-link' href='/admin/mstgender'><i class='nav-icon la la-compass'></i> {{trans('menu.gender')}}</a></li>
	</ul>
</li>

<hr class="hr-line m-2">
<li class='nav-item'><a class='nav-link' href='/admin/user'><i class='nav-icon la la-users'></i> Users</a></li>
@endhasanyrole