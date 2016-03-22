@extends('main')



@section('title')

<?php
echo ucwords(strtolower($menu_3->title));
?>

@endsection

@section('content')
<style type="text/css">
  option.first{
      display:none;
      height:0;
      visibility:hidden;
      overflow:hidden;
  }
</style>

    <div class="row vnt-page">

      <div id="vnt-navation" class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">

              <div class="navation">

                  <ul>

                    <li><div class="title_breadcrumb"><span>{{$menu_3->title}}</span></div></li>

                      <li ><a href="{{url('/')}}">{{$menu_1->title}}</a></li>

                      <li>{{$menu_3->title}}</li>

                  </ul>

              </div>

          </div>

          <div class="row itemT">

            <div class="itemT-body">

              <div class="row row_thum">

                <div class="item-i">

                  <div class="col-md-7">

                    <div class="group-row">

                      <label>Sort by</label>

                      <select id="staff" name="staff" class="form-control" onchange="show1()">
                        <option class="form-control first">Choose ... </option>
                        <option class="form-control" value="1">Name (Alpha A -> Z)</option>
                        <option class="form-control" value="2">Name (Alpha Z -> A)</option>
                      </select>

                    </div>

                  </div>

                  <div class="col-md-7 col-md-offset-1">

                    <div class="group-row">

                      <label>Show</label>
                      <select id="staff2" name="staff2" class="form-control" onchange="show2()">
                        <option class="form-control first">Choose ... </option>
                        @foreach($sortshow as $row)
                          @if($row->loai == 0)
                          <option class="form-control" value="{{$row->soluong}}">{{$row->name}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>

                  </div>

                </div>

              </div>

              <div class="row product-theme" id="sanpham">

                <div class="row_theme">

                  <div class="product-item">
                
                @foreach($sp as $row)
                <div class="col-md-5">

                  <div class="item_product">

                    <div class="i_img">

                      <a href="{{url('product-detail/'.$row->id)}}"><img class="img-responsive" src="{{url($row->image)}}"/></a>

                    </div>

                    <div class="i_content">

                      <h4>{{$row->name}}</h4>

                      <h3><a href="{{url('product-detail/'.$row->id)}}">{{$row->title}}</a></h3>

                      <div class="detail">

                        <a href="{{url('product-detail/'.$row->id)}}">Detail</a>

                      </div>

                    </div>

                  </div>

                </div>
                @endforeach

              </div>

                </div>

                <div class="pagination-row">

                  <nav>
                      <!--<ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                      </ul>-->

                    </nav>
                </div>  

              </div>

            </div>

          </div>
    </div>

<script type="text/javascript">

  function show1() {
    var url = "{{url('sortby')}}";
    var cmb = document.getElementById("staff");
    document.location = url + "/" +cmb.value;
  }

  function show2() {
    var url = "{{url('showby')}}";
    var cmb = document.getElementById("staff2");
    document.location = url + "/" +cmb.value;
  }

</script>
@endsection