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
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Products</span></a>
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
                                    <th>edit</th>
                                    <th>delete</th>
                                    <th>featured</th>
                                </tr>
                                </thead>
                                <tbody>
                                   @foreach($products as $key => $product)
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
                                            <th><a class="btn btn-small btn-success btn-block btn-flat" href="{{ URL::to('/product/' . $product->id) }}">edit</a></th>
                                            <th><a class="btn btn-small btn-success btn-block btn-flat del_product" value="{{ $product->id }}" href="#">delete</a></th>
                                            <th>@if ($product->featured == 1) 
                                                    <input type="checkbox"  class="featured" data-product-id="{{ $product->id }}" checked>
                                                @else 
                                                    <input type="checkbox"  class="featured" data-product-id="{{ $product->id }}">
                                                @endif
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="table-button">
                                <ul>
                                    <li><button type="button" id="add" class="btn btn-info dim">Add</button></li>
                                    <li> <button type="button" class="btn btn-info  dim">Type</button></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD YOUR PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <form action="product/create" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="row paddingBottom">
                        <div class="form-inner">
                             <div class="col-sm-4">
                                <input type="text" class="form-control black" name="title" placeholder="Title" required> 
                            </div>
                             <div class="col-sm-4">
                                <input type="text" class="form-control black" name="location" placeholder="Location" required> 
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control black" id="product-single" name="type" placeholder="Product Type" required>
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
                                <input type="text" class="form-control black" id="country-single" name="country" placeholder="Country" required>
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
                                    <input type="text" class="form-control black" id="price-single" name="price" placeholder="Price" required>
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
                                    <input type="text" class="form-control black" placeholder="Yield" name="yield" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" placeholder="Exit Strategy" name="strategy" required>
                                </div>
                            </div>
                        </div>
                        <div class="row paddingBottom">
                           <div class="form-inner">

                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" id="completion_date" name="completion" placeholder="Completion Date" required>
                                        
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control black" id="launch_date" name="launchdate" placeholder="Launch Date" required>
                                </div>
                                    <div class="col-sm-4">
                                        <div id="borderBottom">
                                            <div class="col-sm-4 col-lg-7 col-md-6"><h3 class="upload-images">Upload Brochure *</h3></div>
                                            <div class="col-sm-8 col-lg-5 col-md-6">
                                                <div class="upload-btn nopebd">
                                                    <label class="upload brochure" for="brochure-upload"><i class="fa fa-plus" aria-hidden="true"></i> ADD FILE</label>
                                                </div>
                                                <input id="brochure-upload" name="brochure_upload" type="file" required>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row paddingBottom dt">
                            <div class="form-inner">
                                <div class="col-sm-12">
                                 <textarea class="form-control txetara" name="description" placeholder="Description" required></textarea>
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
                                            <input type="file" name="file" required>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row paddingBottom">
                                <div class="form-inner">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control black" name="contactname" placeholder="Contact Name" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="phone" type="tel" class="form-control black" name="contactnumber" placeholder="Contact Number" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control black" placeholder="Contact Email" name="contactemail" required>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row paddingBottom">
                                <div class="form-inner">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control black" name="companyname" placeholder="Company Name" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control black" name="websiteadress" placeholder="Website Address" required>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-info dim" value="save">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <p>Are you sure you want to delete this product?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
                <button type="button" class="btn btn-info btn-del">yes</button>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection