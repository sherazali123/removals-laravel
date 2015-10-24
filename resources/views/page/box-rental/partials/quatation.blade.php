<div id="get_quote" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Please remember that the items will take 2-3days to be delivered. This service is only available to our customers. Did you fill out the quotation form?

                    </h3>
                   
                </div>
                       
            </div><!-- End row -->
            <div class="row question_row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="radio radio-success dis_inline">
                        <input type="radio" name="if_yes_no" id="radio3" value="yes">
                        <label for="radio3">
                            Yes
                        </label>
                    </div>
                    <div class="radio radio-success dis_inline">
                        <input type="radio" name="if_yes_no" id="radio4" value="no">
                        <label for="radio4">
                            No
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
          
            </div>
        </div>
    </div>


<div id="if_filled_quatation" class="container margin_60" style="display:none;">

            <div class="row">
                
                <div class="col-md-12">
                <form id="quotation" action="" method="POST" novalidate="novalidate">
                    <div class="form_title">
                        <h3><strong><i class="icon-suitcase"></i></strong>Rental Services</h3>
                        <p>
                            Select from the list
                        </p>
                    </div>
                    <div class="step">
                            
                            <div class="row text-center">
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/rental/boxes.png') }}" alt="boxes" data-retina="true">
                                  </p>
                                    <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="boxes_no" id="boxes_no">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Boxes</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/rental/boxes_with_books.png') }}" alt="boxes_with_books" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="boxes_no" id="boxes_no">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label  class="sm-label float_left">Boxes with books</label>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/rental/cart.png') }}" alt="cart" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="moving_cart" id="moving_cart">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Moving cart</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/rental/single_bed.png') }}" alt="single_bed" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="single_bed_cover" id="single_bed_cover">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Single bed cover</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/rental/double_bed.png') }}" alt="double_bed" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="double_bed_cover" id="double_bed_cover">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Double bed cover</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/rental/queen_bed.png') }}" alt="queen_bed" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="queen_bed_cover" id="queen_bed_cover">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Queen bed cover</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div><!--End step -->
                    <div class="form_title">
                        <h3><strong><i class="icon-map"></i></strong>Purchase Services</h3>
                        <p>
                            Select from the given list
                        </p>
                    </div>
                    <div class="step">
                            
                            <div class="row text-center">
                                
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/purchase/tape.png') }}" alt="tape" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="moving_cart" id="moving_cart">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Moving Tape</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/purchase/cardboard.png') }}" alt="cardboard" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="single_bed_cover" id="single_bed_cover">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Cardboard Boxes</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/purchase/gloves.png') }}" alt="gloves" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="double_bed_cover" id="double_bed_cover">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Gloves</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <p>
                                        <img src="{{ asset('/img/services/purchase/bubble_wrap.png') }}" alt="bubble_wrap" data-retina="true">
                                  </p>
                                     <div class="row">
                                        <div class="col-md-4 remove_right_padding">
                                            <select class="form-control thumbnail_select required" name="queen_bed_cover" id="queen_bed_cover">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="sm-label float_left">Bubble Wrap</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div><!--End step -->

                    <div class="form_title">
                        <h3><strong><i class="icon-truck"></i></strong>Cost</h3>
                        <p>
                            This cost will be calculated according to your selected services 
                        </p>
                    </div>
                    <div class="step">
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <table class="table table-striped table-bordered table-condensed cost-table">
                                        <tbody>
                                          <tr>
                                            <td class="sText">Rental Deposit Total</td>
                                            <td class="costtd">₩ 100</td>
                                          </tr>
                                          <tr>
                                            <td class="sText">Purchase Service Total</td>
                                            <td class="costtd">₩ 100</td>
                                          </tr>
                                          <tr>
                                            <td class="sText">Delivery Fee</td>
                                            <td class=" costtd">₩ 100</td>
                                          </tr>
                                          <tr>
                                            <td class=" sText">Total Amount Due</td>
                                            <td class=" costtd">₩ 100</td>
                                          </tr>
                                          <tr>
                                            <td class=" sText">Refund</td>
                                            <td class=" costtd">₩ 100</td>
                                          </tr>
                                        </tbody>
                                </table>
                                </div>
                            </div>
                            
                            
                        </div><!--End step -->
                        

                    <div class="form_title">
                        <h3><strong><i class="icon-truck"></i></strong>Delivery info</h3>
                        <p>
                            Address. building, room and phone number 
                        </p>
                    </div>
                    <div class="step">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Preffered Delievery Address</label>
                                        <input type="text" id="preferred_delivery_address" name="preferred_delivery_address" class="form-control required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Building Name</label>
                                        <input type="text" id="building_name" name="building_name" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Room No.</label>
                                        <input type="text" id="room_no" name="room_no" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Phone No.</label>
                                        <input type="text" id="phone_no" name="phone_no" class="form-control required">
                                    </div>
                                </div>
                            </div>
                            
                        </div><!--End step -->
                        

                        <div class="form_title">
                        <h3><strong><i class="icon-dollar"></i></strong>Bank Details for Refund(*)</h3>
                        <p>
                            Bank, account no, receiver's name
                        </p>
                    </div>
                    <div class="step">
                            
                            <div class="row add_bottom_45">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Bank</label>
                                        <input type="text" id="bank_name" name="bank_name" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Account no.</label>
                                        <input type="text" id="account_no" name="account_no" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Name of Receiver</label>
                                        <input type="text" id="reveiver_name" name="reveiver_name" class="form-control required">
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn_1 medium">Order</button> 
                        </div><!--End step -->
                        
                       
            
                    </form>
                </div><!-- End col-md-12 -->
                
            </div><!-- End row -->
        </div>

    <!—-  Quotation Form Ends —->

    @include('page/box-rental/partials/confirm')
    @include('page/box-rental/partials/congratulations')