@extends('app')
@include('partials.header')
@section('template_title')
@endsection
@section('content')
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Products</span></a>
                </li>
                <li>
                    <a href="/featured"><i class="fa fa-diamond"></i> <span class="nav-label">Featured</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-wrench"></i> <span class="nav-label">Settings</span> </a>
                </li>
                 <li>
                    <a href="/call"><i class="fa fa-th-large"></i> <span class="nav-label">CTA</span> </a>
                </li>
                 <li>
                    <a href="/scroller"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Scroller</span> </a>
                </li>
                 <li>
                    <a href="/banner"><i class="fa fa-desktop"></i> <span class="nav-label">Banner</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-table"></i> <span class="nav-label">Social Media</span> </a>
                </li>
                 <li>
                    <a href="/stat"><i class="fa fa-picture-o"></i> <span class="nav-label">Stats</span> </a>
                </li>
                <li class="active">
                    <a href=""><i class="fa fa-sitemap"></i> <span class="nav-label">Editor</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="/about">About US</a></li>
                        <li><a href="/terms">TERMS</a></li>
                        <li><a href="/privacy">PRIVACY</a></li>
                        <li><a href="/accep">ACCEPTABLE USE</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="/logout">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding" style="display: block; height: 600px;">
                       <form class="edit-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-sm-10">
                                    <span>About us:</span>
                                    <div class="summernote">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                   <span>Overview:</sapn><input type="text" class="form-control black" name="pagetitle" required>
                                </div>
                                <div class="col-sm-5">
                                   <span>Due Diligence:</span><input type="text" class="form-control black" name="pagedue" required>
                                </div>
                                 <div class="col-sm-5">
                                     <span>content:</span><textarea class="form-control txetara" name="pagetext" required></textarea>
                                </div>
                                 <div class="col-sm-5">
                                   <span>See Guide:</sapn><input type="text" class="form-control black" name="pageguide" required>
                                </div>
                                <div class="col-sm-5" style="margin-top:80px;">
                                    <input type="submit" class="pull-right btn btn-sm btn-success" value="edit" />
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection