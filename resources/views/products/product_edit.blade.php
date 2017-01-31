@extends('app')
@include('partials.header')
@section('template_title')
   
@endsection

@section('content')
<style>
  .form-inner i.fa.fa-calendar{
    position: absolute;
    right: 22px;
    top: 10px;
    font-size: 19px;
    color: #2c1b52;
  }
  
  .ui-datepicker-trigger{
    border:none;
    background:none;
}
#brochure-upload{
    display:none;
    
    }
.brochure{
    padding:5px;
    cursor:pointer;
    }
  </style>

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
                <li class="active">
                    <a href="http://localhost:8000/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Products</span></a>
                </li>
                <li>
                    <a href="http://localhost:8000/featured"><i class="fa fa-diamond"></i> <span class="nav-label">Featured</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-wrench"></i> <span class="nav-label">Settings</span> </a>
                </li>
                 <li>
                    <a href="http://localhost:8000/call"><i class="fa fa-th-large"></i> <span class="nav-label">CTA</span> </a>
                </li>
                 <li>
                    <a href="http://localhost:8000/scroller"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Scroller</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-desktop"></i> <span class="nav-label">Banner</span> </a>
                </li>
                 <li>
                    <a href=""><i class="fa fa-table"></i> <span class="nav-label">Social Media</span> </a>
                </li>
                 <li>
                    <a href="http://localhost:8000/stat"><i class="fa fa-picture-o"></i> <span class="nav-label">Stats</span> </a>
                </li>
                  <li>
                    <a href=""><i class="fa fa-sitemap"></i> <span class="nav-label">Editor</span><span class="fa arrow"></span> </a>
                    <ul class="nav nav-second-level">
                        <li><a href="http://localhost:8000/about">About US</a></li>
                        <li><a href="http://localhost:8000/terms">TERMS</a></li>
                        <li><a href="http://localhost:8000/privacy">PRIVACY</a></li>
                        <li><a href="http://localhost:8000/accep">ACCEPTABLE USE</a></li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <div class="col-lg-10">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="">Product</a>
                                    </li>
                                    <li>
                                        <a href="">{{ $products->id }}</a>
                                    </li>
                                    <li class="active">
                                        <strong>edit</strong>
                                    </li>
                                </ol>
                            </div>
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

                        <div class="tableresponsive">
                        <form action="http://localhost:8000/product/update/{{ $products->id }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="{{ $products->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row paddingBottom">
                                <div class="form-inner">
                                     <div class="col-sm-4">
                                        <input type="text" class="form-control black" name="title" value="{{ $products->title }}" placeholder="Title" required> 
                                    </div>
                                     <div class="col-sm-4">
                                        <input type="text" class="form-control black" name="location" value="{{ $products->location }}" placeholder="Location" required> 
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control black" id="product-single" value="{{ $products->type }}" name="type" placeholder="Product Type" required>
                                         <i class="fa fa-angle-down check_list_product" aria-hidden="true"></i>
                                        <ul class="product-type">
                                            <li>Product #1</li>
                                            <li>Product #2</li>
                                            <li>Product #3</li>
                                            <li>Product #4</li>
                                            <li>Product #5</li>
                                            <li>Product #6</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control black" id="country-single" value="{{ $products->country }}" name="country" placeholder="Country" required>
                                        <i class="fa fa-angle-down check_list_country" aria-hidden="true"></i> 
                                        <ul class="country-type">
                                            <li>United kingdom</li>
                                            <li>Afrikaans</li>
                                            <li>Albanian</li>
                                            <li>Amharic</li>
                                            <li>Arabic</li>
                                            <li>Armenian</li>
                                            <li>Azerbaijani</li>
                                            <li>Basque</li>
                                            <li>Belarusian</li>
                                            <li>Bengali</li>
                                            <li>Bosnian</li>
                                            <li>Bulgarian</li>
                                            <li>Catalan</li>
                                            <li>Cebuano</li>
                                            <li>Chichewa</li>
                                            <li>Chinese</li>
                                            <li>Corsican</li>
                                            <li>Croatian</li>
                                            <li>Czech</li>
                                            <li>Danish</li>
                                            <li>Dutch</li>
                                        </ul> 
                                    </div>
                                </div>
                                </div>
                                <div class="row paddingBottom">
                                    <div class="form-inner">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control black" id="price-single" value="{{ $products->price }}" name="price" placeholder="Price" required>
                                        <i class="fa fa-angle-down check_list_price" aria-hidden="true"></i>
                                            <ul class="price-range">
                                                <li>$30</li>
                                                <li>$10</li>
                                                <li>$20</li>
                                                <li>$30</li>
                                                <li>$40</li>
                                                <li>$50</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control black" placeholder="Yield" value="{{ $products->yield }}" name="yield" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control black" placeholder="Exit Strategy" value="{{ $products->strategy }}" name="strategy" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row paddingBottom">
                                   <div class="form-inner">

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control black" id="completion_date" value="" name="completion" placeholder="Completion Date" required>
                                                
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control black" id="launch_date" value="{{ $products->launchdate }}" name="launchdate" placeholder="Launch Date" required>
                                        </div>
                                            <div class="col-sm-4">
                                                <div id="borderBottom">
                                                    <div class="col-sm-4 col-lg-7 col-md-6"><h3 class="upload-images">Upload Brochure *</h3></div>
                                                    <div class="col-sm-8 col-lg-5 col-md-6">
                                                        <div class="upload-btn nopebd">
                                                            <label class="upload brochure" for="brochure-upload"><i class="fa fa-plus" aria-hidden="true"></i> ADD FILE</label>
                                                        </div>
                                                        <input id="brochure-upload" value="{{ $products->brochureupload }}" name="brochure_upload" type="file" required>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row paddingBottom dt">
                                    <div class="form-inner">
                                        <div class="col-sm-12">
                                         <textarea class="form-control txetara" name="description" placeholder="Description" required> {{ $products->description }} </textarea>
                                            </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="row paddingBottom">
                                    <div class="col-sm-12">
                                        <h3 class="upload-images">Upload images *</h3>
                                    </div>
                                    <div class="row fileupload-buttonbar">
                                        <div class="upload-btn">
                                            <div class="col-md-2" style="margin-left: 133px; margin-top: -22px;">

                                                <span class="btn btn-success fileinput-button upload file effectBtn">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <span>Add files</span>
                                                    <input type="file" name="file" value="{{ $products->mainimage }}" required >
                                                </span>
                                                 <img src="../uploads/{{$products->mainimage}}" style="width:100px; height:80px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row paddingBottom">
                                        <div class="form-inner">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control black" name="contactname" value="{{ $products->contactname }}" placeholder="Contact Name" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input id="phone" type="tel" class="form-control black" value="{{ $products->contactnumber }}" name="contactnumber" placeholder="Contact Number" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control black" value="{{ $products->contactemail }}" placeholder="Contact Email" name="contactemail" required>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row paddingBottom">
                                        <div class="form-inner">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control black" value="{{ $products->companyname }}" name="companyname" placeholder="Company Name" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control black" value="{{ $products->websiteadress }}" name="websiteadress" placeholder="Website Address" required>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            <div class="product_edit">
                                <button type="button" class="btn btn-secondary">Close</button>
                                <input type="submit" class="btn btn-info dim" value="save">
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