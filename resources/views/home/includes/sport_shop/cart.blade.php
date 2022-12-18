@php
    if (!function_exists('currency_format')) {
function currency_format($number, $suffix = 'đ') {
if (!empty($number)) {
return number_format($number, 0, ',', ',');
}
}
}
@endphp
@include('home.includes.sport_shop.css')
<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">

        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span>Cart</span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="page-title text-center">
                <h1>Shopping Cart</h1>
            </div>
            <div class="row">
                <div class="col-lg-11 col-xl-13">
                    <div class="cart-table">
                        <div class="cart-table-prd cart-table-prd--head py-1 d-none d-md-flex">
                            <div class="cart-table-prd-content-wrap">
                                <table id="kt_datatable_horizontal_scroll" class="table table-row-dashed gy-5 gs-7">
                                    <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800">
                                        <th class="min-w-50">Image</th>
                                        <th class="min-w-200px">Name</th>
                                        <th class="min-w-150px">Quantity</th>
                                        <th class="min-w-200px">Size</th>
                                        <th class="min-w-200px">Color</th>
                                        <th class="min-w-200px">Price</th>
                                        <th class="min-w-200px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartDetail as $cartDetail)
                                        @foreach($product as $productDetail)
                                        <tr>
                                            @if($cartDetail->id_product == $productDetail->id)
                                            <td>

                                                    <div class="cart-table-prd-image">
                                                        <img class="lazyload fade-up" src="{{$productDetail->image}}" alt="">
                                                    </div>
                                            </td>
                                            <td>
                                                {{$productDetail->name}} <br>
                                                <div class="cart-table-prd-price">
                                                    <div class="price-new">{{currency_format($productDetail->price)}}<sup>đ</sup></div>
                                                </div>
                                            </td>
                                            <td>{{$cartDetail->quantity}}</td>
                                            <td>{{$cartDetail->size}}</td>
                                            <td>{{$cartDetail->color}}</td>
                                            <td>{{currency_format($productDetail->price)}}<sup>đ</sup></td>
                                            @endif
{{--                                            <td>--}}
{{--                                                <a href="{{route('$admin.cartDetail.edit', $cartDetail->id)}}"--}}
{{--                                                   class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-primary mr-2" title="Edit">--}}
{{--                                                    <i class="fa fa-edit"></i>--}}
{{--                                                </a>--}}
{{--                                                @if($cartDetail->deleted_at == null)--}}
{{--                                                    <a href="{{route('$admin.cartDetail.delete', $cartDetail->id)}}"--}}
{{--                                                       class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-danger" title="Delete">--}}
{{--                                                        <i class="fa fa-trash"></i>--}}
{{--                                                    </a>--}}
{{--                                                @else--}}
{{--                                                    <a href="{{route('$admin.cartDetail.restore', $cartDetail->id)}}"--}}
{{--                                                       class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-warning" title="Restore">--}}
{{--                                                        <i class="fa fa-undo"></i>--}}
{{--                                                    </a>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
                                        </tr>
                                            @endforeach
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-lg-block">
                        <div class="mt-4"></div>
                        <div class="holder">

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-5 mt-3 mt-md-0">
                    <div class="cart-promo-banner">
                        <div class="cart-promo-banner-inside">
                            <div class="txt1">Save 50%</div>
                            <div class="txt2">Only Today!</div>
                        </div>
                    </div>
                    <div class="card-total">
                        <div class="text-right">
                            <button class="btn btn--grey"><span>UPDATE CART</span><i class="icon-refresh"></i></button>
                        </div>
                        <div class="row d-flex">
                            <div class="col card-total-txt">Total</div>
                            <div class="col-auto card-total-price text-right">$ 475.00</div>
                        </div>
                        <button class="btn btn--full btn--lg"><span>Checkout</span></button>
                        <div class="card-text-info text-right">
                            <h5>Standart shipping</h5>
                            <p><b>10 - 11 business days</b><br>1 item ships from the U.S. and will be delivered in
                                10 - 11 business days</p>
                        </div>
                    </div>
                    <div class="mt-2"></div>
                    <div class="panel-group panel-group--style1 prd-block_accordion" id="productAccordion">
                        <div class="panel">
                            <div class="panel-heading active">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#productAccordion" href="#collapse1">Shipping options</a>
                                    <span class="toggle-arrow"><span></span><span></span></span>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <label>Country:</label>
                                    <div class="form-group select-wrapper select-wrapper-sm">
                                        <select class="form-control form-control--sm">
                                            <option value="United States">United States</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="India">India</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Mexico">Mexico</option>
                                        </select>
                                    </div>
                                    <label>State:</label>
                                    <div class="form-group select-wrapper select-wrapper-sm">
                                        <select class="form-control form-control--sm">
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                        </select>
                                    </div>
                                    <label>Zip/Postal code:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control--sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading active">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#productAccordion" href="#collapse2">Discount Code</a>
                                    <span class="toggle-arrow"><span></span><span></span></span>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <p>Got a promo code? Then you're a few randomly combined numbers & letters away
                                        from fab savings!</p>
                                    <div class="form-inline mt-2">
                                        <input type="text" class="form-control form-control--sm" placeholder="Promotion/Discount Code">
                                        <button type="submit" class="btn">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading active">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#productAccordion" href="#collapse3">Note
                                        for the seller</a>
                                    <span class="toggle-arrow"><span></span><span></span></span>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <textarea class="form-control form-control--sm textarea--height-100" placeholder="Text here"></textarea>
                                    <div class="card-text-info mt-2">
                                        <p>*Savings include promotions, coupons, rueBUCKS, and shipping (if
                                            applicable).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @include('home.includes.sport_shop.js')

