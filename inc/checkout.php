<!-- Include Header -->
<!-- Include Header -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/checkout.css">
<!-- Stylesheet -->

<!-- Checkout Start Here -->
<section class="checkout pt-4">

    <form action="thank-you.php">
        <div class="row">
            <div class="col-lg-6">
                <h5>Add Card</h5>
                <div class="form_start mt-3">
                    <div class="form-row">
                        <input type="text" class="mb-0" name="" id="" placeholder="Write Your Card Number">
                    </div>
                    <div class="form-row mt-3">
                        <div class="single-input">
                            <input type="text" class="mb-0" name="" id="" placeholder="mm/yy">
                        </div>
                        <div class="single-input">
                            <input type="text" class="mb-0" name="" id="" placeholder="CVV">
                        </div>
                    </div>
                </div>



                <div class="grid">
                    <div class="payment visa_card" onclick="chosePaymentMethod('visa')">
                        <img src="img/visa.png" class="img-fluid">
                    </div>
                    <div class="payment" onclick="chosePaymentMethod('googleplay')">
                        <img src="img/google-play.png" class="img-fluid">
                    </div>
                    <div class="payment" onclick="chosePaymentMethod('mastercard')">
                        <img src="img/mastercard.png" class="img-fluid">
                    </div>
                    <div class="payment" onclick="chosePaymentMethod('paypal')">
                        <img src="img/paypal.png" class="img-fluid">
                    </div>
                    <div class="payment" onclick="chosePaymentMethod('applepay')">
                        <img src="img/apple.png" class="img-fluid">
                    </div>

                </div>
                <div class="payment-details">
                    <div class="saved-payment-method">
                        <h5>Saved Cards</h5>
                        <!-- Saved payments Method -->
                        <label class="container">
                            <input type="radio" checked="checked" name="payment-radio">
                            <span class="checkmark">
                                <div class="card-details">
                                    <div class="radio-btn">
                                        <span></span>
                                    </div>
                                    <div class="visa-card">
                                        <div class="img-box">
                                            <figure><img src="img/visa.png" alt="No Image Found">
                                            </figure>
                                        </div>
                                        <div class="input-box">
                                            <label for="card-number">My Personal Card</label>
                                            <input id="card-number" value="**********1239" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="extra-btn">
                                        <button class="btn default disabled">Default</button>
                                    </div>
                                </div>
                            </span>
                        </label>

                        <label class="container second-card">
                            <input type="radio" name="payment-radio">
                            <span class="checkmark">
                                <div class="card-details">
                                    <div class="radio-btn">
                                        <span></span>
                                    </div>
                                    <div class="visa-card">
                                        <div class="img-box">
                                            <figure><img src="img/visa.png" alt="No Image Found">
                                            </figure>
                                        </div>
                                        <div class="input-box">
                                            <label for="card-number">My Personal Card</label>
                                            <input id="card-number" value="**********1239" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="extra-btn">
                                        <button class="btn default disabled">Default</button>

                                    </div>
                                </div>
                            </span>
                        </label>

                        <!-- Saved payments Method -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5>Summary</h5>
                <div class="book-imfo-bar">
                    <div class="heading-bar">
                        <h5 class="mb-0">Booking Fees:</h5>
                    </div>
                    <div class="num-bar">
                        <h4 class="mb-0">$20.00</h4>
                    </div>
                </div>
                <div class="book-imfo-bar">
                    <div class="heading-bar">
                        <h5 class="mb-0">Total Amount</h5>
                    </div>
                    <div class="num-bar">
                        <h4 class="mb-0">$20.00</h4>
                    </div>
                </div>
                <div class="cart-product-detail">
                    <div class="checkout-products">
                        <div class="edit-product-heading">
                            <div class="product-heading">
                                <h5 class="name">Date and Time (One Time)</h5>
                            </div>
                            <div class="edit-product">
                                <a class="btn btn-primary edit" href="#" role="button">edit <svg xmlns="http://www.w3.org/2000/svg" width="15.214" height="15.213" viewBox="0 0 15.214 15.213">
                                        <g id="Group_9157" data-name="Group 9157" transform="translate(-1710.096 -801.484)">
                                            <path id="Path_213" data-name="Path 213" d="M13.191,18.254H3.563A2.066,2.066,0,0,1,1.5,16.191V6.563A2.066,2.066,0,0,1,3.563,4.5H8.377a.688.688,0,0,1,0,1.375H3.563a.689.689,0,0,0-.688.688v9.628a.689.689,0,0,0,.688.688h9.628a.689.689,0,0,0,.688-.688V11.377a.688.688,0,1,1,1.375,0v4.814A2.066,2.066,0,0,1,13.191,18.254Z" transform="translate(1708.596 798.442)" fill="#fa00a7" />
                                            <path id="Path_214" data-name="Path 214" d="M19.44,1.318a2.147,2.147,0,0,1,1.518,3.664l-6.533,6.533a.688.688,0,0,1-.319.181l-2.751.688a.688.688,0,0,1-.834-.834L11.208,8.8a.688.688,0,0,1,.181-.319l6.533-6.533A2.133,2.133,0,0,1,19.44,1.318Zm-5.853,9.091,6.4-6.4A.771.771,0,0,0,18.9,2.919l-6.4,6.4-.364,1.454Z" transform="translate(1703.722 800.166)" fill="#fa00a7" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="products br-right">
                            <div class="abt-product">
                                <div class="pro-dtl">
                                    <!-- <h5 class="name">Date and Time (One Time)</h5> -->
                                    <ul class="variations">
                                        <li>Date:</li>
                                        <li>Time:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-price">
                                <h4 class="price">20-8-22</h4>
                                <h4 class="price">10:30 pm</h4>
                            </div>
                        </div>
                        <div class="edit-product-heading">
                            <div class="product-heading">
                                <h5 class="name">Booking Details</h5>
                            </div>
                            <div class="edit-product">
                                <a class="btn btn-primary edit" href="#" role="button">edit <svg xmlns="http://www.w3.org/2000/svg" width="15.214" height="15.213" viewBox="0 0 15.214 15.213">
                                        <g id="Group_9157" data-name="Group 9157" transform="translate(-1710.096 -801.484)">
                                            <path id="Path_213" data-name="Path 213" d="M13.191,18.254H3.563A2.066,2.066,0,0,1,1.5,16.191V6.563A2.066,2.066,0,0,1,3.563,4.5H8.377a.688.688,0,0,1,0,1.375H3.563a.689.689,0,0,0-.688.688v9.628a.689.689,0,0,0,.688.688h9.628a.689.689,0,0,0,.688-.688V11.377a.688.688,0,1,1,1.375,0v4.814A2.066,2.066,0,0,1,13.191,18.254Z" transform="translate(1708.596 798.442)" fill="#fa00a7" />
                                            <path id="Path_214" data-name="Path 214" d="M19.44,1.318a2.147,2.147,0,0,1,1.518,3.664l-6.533,6.533a.688.688,0,0,1-.319.181l-2.751.688a.688.688,0,0,1-.834-.834L11.208,8.8a.688.688,0,0,1,.181-.319l6.533-6.533A2.133,2.133,0,0,1,19.44,1.318Zm-5.853,9.091,6.4-6.4A.771.771,0,0,0,18.9,2.919l-6.4,6.4-.364,1.454Z" transform="translate(1703.722 800.166)" fill="#fa00a7" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="products br-right">
                            <div class="abt-product">
                                <div class="pro-dtl">
                                    <!-- <h5 class="name">Booking Details</h5> -->
                                    <ul class="variations">
                                        <li>Start Date:</li>
                                        <li>End Date:</li>
                                        <li>Hourly Rate:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-price">
                                <h4 class="price">20-8-22 </h4>
                                <h4 class="price">20-8-22 </h4>
                                <h4 class="price">$25 </h4>
                            </div>
                        </div>
                        <div class="edit-product-heading">
                            <div class="product-heading">
                                <h5 class="name">Contact Information</h5>
                            </div>
                            <div class="edit-product">
                                <a class="btn btn-primary edit" href="#" role="button">edit <svg xmlns="http://www.w3.org/2000/svg" width="15.214" height="15.213" viewBox="0 0 15.214 15.213">
                                        <g id="Group_9157" data-name="Group 9157" transform="translate(-1710.096 -801.484)">
                                            <path id="Path_213" data-name="Path 213" d="M13.191,18.254H3.563A2.066,2.066,0,0,1,1.5,16.191V6.563A2.066,2.066,0,0,1,3.563,4.5H8.377a.688.688,0,0,1,0,1.375H3.563a.689.689,0,0,0-.688.688v9.628a.689.689,0,0,0,.688.688h9.628a.689.689,0,0,0,.688-.688V11.377a.688.688,0,1,1,1.375,0v4.814A2.066,2.066,0,0,1,13.191,18.254Z" transform="translate(1708.596 798.442)" fill="#fa00a7" />
                                            <path id="Path_214" data-name="Path 214" d="M19.44,1.318a2.147,2.147,0,0,1,1.518,3.664l-6.533,6.533a.688.688,0,0,1-.319.181l-2.751.688a.688.688,0,0,1-.834-.834L11.208,8.8a.688.688,0,0,1,.181-.319l6.533-6.533A2.133,2.133,0,0,1,19.44,1.318Zm-5.853,9.091,6.4-6.4A.771.771,0,0,0,18.9,2.919l-6.4,6.4-.364,1.454Z" transform="translate(1703.722 800.166)" fill="#fa00a7" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="products">
                            <div class="abt-product">
                                <div class="pro-dtl">
                                    <!-- <h5 class="name">Contact Information</h5> -->
                                    <ul class="variations">
                                        <li>Full Name:</li>
                                        <li>Contact Number:</li>
                                        <li>Address:</li>
                                        <li>City:</li>
                                        <li>Zip:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-price">
                                <h4 class="price">Henry Cooper </h4>
                                <h4 class="price">+1-202-555-0102</h4>
                                <h4 class="price">Fox Ave Fairdale</h4>
                                <h4 class="price">Kentucky(KY)</h4>
                                <h4 class="price">10515 </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- Checkout End Here -->

<!-- Footer Include -->

<!-- Footer Include -->