<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('welcome')

@section('content')
<div class="breadcrumbs_area">
                      <div class="row">
                          <div class="col-12">
                              <div class="breadcrumb_content">
                                  <ul>
                                      <li><a href="index.html">Trang chủ</a></li>
                                      <li><i class="fa fa-angle-right"></i></li>
                                      <li>Sản phẩm</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--breadcrumbs area end-->

                  <!--pos home section-->
                  <div class=" pos_home_section shop_section shop_fullwidth">
                    <div class="row">
                        <div class="col-12">
                            <!--banner slider start-->
                            <div class="banner_slider fullwidht  mb-35">
                                <img src="assets\img\banner\banner10.jpg" alt="banner10">
                            </div> 
                            <!--banner slider start-->
                        </div>
                    </div>       
                    <div class="row">
                        <div class="col-12">
                            <!--shop toolbar start-->
                            <div class="shop_toolbar mb-35">
                                <div class="list_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="page_amount">
                                    <p>Hiển thị 1-9 trong số 21 kết quả</p>
                                </div>
                                <div class="select_option">
                                    <form action="#">
                                        <label>Sắp xếp theo</label>
                                        <select name="orderby" id="short">
                                            <option selected="" value="1">Giá trị</option>
                                            <option value="1">Giá: thấp đến cao</option>
                                            <option value="1">Giá: cao đến thấp</option>
                                            <option value="1">Tên sản phẩm: A-Z</option>
                                            <option value="1">Tên sản phẩm: Z-A</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!--shop toolbar end-->
                        </div>
                    </div>        

                    <!--shop tab product-->
                    <div class="shop_tab_product shop_fullwidth">   
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="large" role="tabpanel">
                              <div class="row">
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product12.png" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="span-new">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">2.999.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bộ bàn ghế ngoài trời OEM</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product13.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="span-hot">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">180.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Đèn mây tre</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box2" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product14.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">280.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Lịch gỗ để bàn có đồng hồ</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box3" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product15.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">3.200.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bàn trang điểm và ghế đẩu Rose Selavy</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box4" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product16.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">210.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Máy phun sương sừng tuần lộc</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box5" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product17.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">1.200.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Đồng hồ treo tường Gold Minimalism</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box6" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product18.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">630.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Đèn để bàn thủy tinh tròn</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box7" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product19.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">250.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Thảm họa tiết chân mèo</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box8" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product20.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">120.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Tranh sơn dầu Bồ công anh</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box9" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product21.jpeg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">350.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bình hoa gốm sứ PICO</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box10" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product22.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">990.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Kệ gỗ ô treo tường</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box11" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product23.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">3.200.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Tủ quần áo mini Harris</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box12" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product24.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">3.500.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Đèn ốp tường đồng sang trọng</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box13" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product25.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">5.500.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Sofa mint</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box14" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product26.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">2.100.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Tủ để đồ gỗ hiện đại</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box15" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div> 

                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product27.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">3.500.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bộ đôi ghế sofa đơn</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box16" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product28.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">80.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bình cây để bàn nhỏ gọn</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box17" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product29.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">90.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Gối tựa lưng Caro đơn giản</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box18" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product30.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">400.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bộ đôi tranh Landscape, Birds</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box19" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product31.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">4.100.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bàn trang điểm nhỏ kiểu Bắc Âu</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box20" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div> 

                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product32.png" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">620.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Kệ treo tường phong cách ánh kim</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box21" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product33.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">120.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Thảm cotton thổ cẩm</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box22" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product34.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">700.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Bàn làm việc hiện đại chân gỗ</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box23" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                      <div class="single_product">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product35.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                             <div class="product_action">
                                                 <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                             </div>
                                          </div>
                                          <div class="product_content">
                                              <span class="product_price">100.000đ</span>
                                              <h3 class="product_title"><a href="single-product.html">Đèn mặt dây chuyền hình khối vuông sáng</a></h3>
                                          </div>
                                          <div class="product_info">
                                              <ul>
                                                  <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                                  <li><a href="#" data-toggle="modal" data-target="#modal_box24" title="Quick view">Xem chi tiết</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>                                 
                              </div>  
                          </div>
                          <div class="tab-pane fade" id="list" role="tabpanel">
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product2.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">ánh chó</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select" type="checkbox">
                                                  <label for="select">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product3.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                         <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Quisque ornare dui</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select1" type="checkbox">
                                                  <label for="select1">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product4.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Maecenas sit amet</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select2" type="checkbox">
                                                  <label for="select2">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div> 
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product5.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Sed non luctus turpis</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select3" type="checkbox">
                                                  <label for="select3">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div> 
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product6.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Donec dignissim eget</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select4" type="checkbox">
                                                  <label for="select4">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div> 
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product7.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select5" type="checkbox">
                                                  <label for="select5">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div> 
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product8.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Donec ac congue</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select6" type="checkbox">
                                                  <label for="select6">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div> 
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product9.jpg" alt=""></a> 
                                             <div class="hot_img">
                                                 <img src="assets\img\cart\span-hot.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Curabitur sodales</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select7" type="checkbox">
                                                  <label for="select7">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div> 
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product1.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select8" type="checkbox">
                                                  <label for="select8">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div>
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product2.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select9" type="checkbox">
                                                  <label for="select9">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div>  
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product3.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select10" type="checkbox">
                                                  <label for="select10">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div>  
                              <div class="product_list_item mb-35">
                                  <div class="row align-items-center">
                                      <div class="col-lg-3 col-md-5 col-sm-6">
                                          <div class="product_thumb">
                                             <a href="single-product.html"><img src="assets\img\product\product4.jpg" alt=""></a> 
                                             <div class="img_icone">
                                                 <img src="assets\img\cart\span-new.png" alt="">
                                             </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-9 col-md-7 col-sm-6">
                                          <div class="list_product_content">
                                             <div class="product_ratting">
                                                 <ul>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                 </ul>
                                             </div>
                                              <div class="list_title">
                                                  <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                              </div>
                                              <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                              <p class="compare">
                                                  <input id="select11" type="checkbox">
                                                  <label for="select11">Select to compare</label>
                                              </p>
                                              <div class="content_price">
                                                  <span>$118.00</span>
                                                  <span class="old-price">$130.00</span>
                                              </div>
                                              <div class="add_links">
                                                  <ul>
                                                      <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                      <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                              </div>                          
                          </div>
                      </div>
                    </div>    
                    <!--shop tab product end-->

                    <!--pagination style start--> 
                    <div class="pagination_style shop_page">
                        <div class="item_page">
                            <form action="#">
                                <label for="page_select">Hiển thị</label>
                                <select id="page_select">
                                    <option value="1">9</option>
                                    <option value="2">10</option>
                                    <option value="3">11</option>
                                </select>
                                <span>sản phẩm trên trang</span>
                            </form>
                        </div>
                        <div class="page_number">
                            <span>Trang: </span>
                            <ul>
                                <li>«</li>
                                <li class="current_number">1</li>
                                <li><a href="#">2</a></li>
                                <li>»</li>
                            </ul>
                        </div>
                    </div>
                    <!--pagination style end-->   
                  </div>
@endsection
</body>
</html>