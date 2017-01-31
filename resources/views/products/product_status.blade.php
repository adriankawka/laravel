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
                 <li class="active">
                    <a href="/stat"><i class="fa fa-picture-o"></i> <span class="nav-label">Stats</span> </a>
                </li>
                <li>
                    <a href=""><i class="fa fa-sitemap"></i> <span class="nav-label">Editor</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="/about">About US</a></li>
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
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Clicks</th>
                                    <th>NO.Enquires</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                   @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->visitor }}</td>
                                            <td>{{ $product->enquire }}</td>
                                            <td><a class="btn btn-small btn-success btn-block btn-flat del_log" value="{{ $product->id }}" href="#">delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="del_log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete log</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               <p>Are you sure you want to delete this log?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
            <button type="button" class="btn btn-info btn-log">yes</button>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection