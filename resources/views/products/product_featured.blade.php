@extends('app')
@include('partials.header')
@section('template_title')
    Login
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
                <li class="active">
                    <a href="/featured"><i class="fa fa-diamond"></i> <span class="nav-label">Featured</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-wrench"></i> <span class="nav-label">Settings</span> </a>
                </li>
                 <li>
                    <a href="/call"><i class="fa fa-th-large"></i> <span class="nav-label">CTA</span> </a>
                </li>
                 <li>
                    <a href="scroller"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Scroller</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-desktop"></i> <span class="nav-label">Banner</span> </a>
                </li>
                 <li>
                    <a href="/banner"><i class="fa fa-table"></i> <span class="nav-label">Social Media</span> </a>
                </li>
                 <li>
                    <a href="/stat"><i class="fa fa-picture-o"></i> <span class="nav-label">Stats</span> </a>
                </li>
                  <li>
                    <a href=""><i class="fa fa-sitemap"></i> <span class="nav-label">Editor</span><span class="fa arrow"></span> </a>
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
                  <!--   <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form> -->
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
         <!-- <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
               
            </div> -->
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
                                    <th>TITLE</th>
                                    <th>LOCATION</th>
                                    <th>TYPE</th>
                                    <th>PRICE</th>
                                    <th>DESCRIPTION</th>
                                    <th>EXIT STRATEGY</th>
                                    <th>YIELD</th>
                                    <th>LAUNCH DATE</th>
                                    <th>COUNTRY</th>
                                    <th>BROCHURE UPLOAD</th>
                                    <th>MAIN IMAGE</th>
                                    <th>IMAGE</th>
                                    <th>CONTACT NAME</th>
                                    <th>CONTACT NUMBER</th>
                                    <th>CONTACT EMAIL</th>
                                    <th>COMPANY NAME</th>
                                    <th>WEBSITE ADDRESS</th>
                                    <th>remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                   @foreach($products as $key => $product)
                                       <!--  @if (count($product)>0) -->
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->location }}</td>
                                            <td>{{ $product->type }}</td>
                                            <th>{{ $product->price }}</th>
                                            <th>{{ $product->description }}</th>
                                            <th>{{ $product->strategy }}</th>
                                            <th>{{ $product->yield }}</th>
                                            <th>{{ $product->launchdate }}</th>
                                            <th>{{ $product->country }}</th>
                                            <th>{{ $product->brochureupload }}</th>
                                            <th>{{ $product->mainimage }}</th>
                                            <th>{{ $product->images }}</th>
                                            <th>{{ $product->contactname }}</th>
                                            <th>{{ $product->contactnumber }}</th>
                                            <th>{{ $product->contactemail }}</th>
                                            <th>{{ $product->companyname }}</th>
                                            <th>{{ $product->websiteadress }}</th>
                                            <th><a class="btn btn-small btn-success btn-block btn-flat featured_product" value="{{ $product->id }}" href="#">remove</a></th>
                                            
                                        </tr>



<!-- 
                                        @else
                                        @endif -->
                                    @endforeach
                                </tbody>
                               <!--  <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot> -->
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="feaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">remove featured item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <p>Are you sure you want to remove this product as a featured item?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
                <button type="button" class="btn btn-info btn-featured">yes</button>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection