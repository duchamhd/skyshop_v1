<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Your shopping cart</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
            <!--
            <ul class="step">
                <li class="current-step"><span>01. Summary</span></li>
                <li><span>02. Sign in</span></li>
                <li><span>03. Address</span></li>
                <li><span>04. Shipping</span></li>
                <li><span>05. Payment</span></li>
            </ul>
            <div class="heading-counter warning">Your shopping cart contains:
                <span>1 Product</span>
            </div>
            -->
            <div class="order-detail-content table-responsive">
                <table class="table table-hover">
					<thead>
                                            @if(count($content) == 0)<tr> Chưa có sản phẩm nào trong giỏ hàng của bạn! </tr>
                                            @else
					  <tr>
						<th>Image</th>
						<th class="hidden-xs">Name</th>
						<th width="50px">Price</th>
						<th>Quantity</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
                                            
                                            
                                            @foreach($content as $r)
					  <tr>
						<td> <a href="#"><img src="{{asset('assets/data/'.$r->Product_Thumbnail)}}" alt="Product"></a>
							<p class="visible-xs">{{$r->Product_Name}}</p>
						</td>
						<td class="hidden-xs"><a href="#">{{$r->Product_Name}}</a></td>
						<td>{{$r->Product_Price}}</td>
						<td><input style="width:50px" type="number" value="1"></td>
						<td class="action">
                                                    <a href="#"><span class="fa fa-remove"></span></a>
                        </td>
					  </tr>
                                          @endforeach
					  
					</tbody>
				  </table>
                <div class="cart_navigation">
                    <a class="prev-btn" href="#">Mua tiếp</a>
                    <a class="next-btn" href="#">Thanh toán</a>
                </div>
                
                                          @endif
            </div>
        </div>
    </div>
</div>