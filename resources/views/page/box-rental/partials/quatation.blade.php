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
                {!! Form::open(array('url' => 'api/v1/box-rental',
                                     'method' => 'POST', 
                                     'class' => 'add_new_add', 
                                     'novalidate' => 'novalidate',
                                     'id' => 'box_rentel_form')) !!}

                    <div class="form_title">
                        <h3><strong><i class="icon-suitcase"></i></strong>Rental Services</h3>
                        <p>
                            Select from the list
                        </p>
                    </div>
                    <div class="step">
                            
                            <div class="row text-center ">
                                @foreach($rental_services as $rental_service)
                                    <div class="col-md-2 rental_services">
                                    <p>
                                        <img src="{{ asset('img/services/rental/'.$rental_service->image) }}" alt="{{ $rental_service->title }}" data-retina="true">
                                  </p>
                                    <div class="row">
                                        <div class="col-md-12 0Padding">
                                            <label>{{ $rental_service->title }}</label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="sm-label cost">₩ {{ $rental_service->price }}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 parentNode">
                                        {!! Form::hidden('price', $rental_service->price) !!}
                                            {!! Form::select($rental_service->id.'___rental', 
                                                             $quantities, 0, 
                                                          ['class' => 'serviceChanged form-control thumbnail_select required']) !!}
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
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
                                @foreach($purchase_services as $purchase_service)
                                    <div class="col-md-2 purchase_services">
                                    <p>
                                        <img src="{{ asset('img/services/purchase/'.$purchase_service->image) }}" alt="{{ $purchase_service->title }}" data-retina="true">
                                  </p>
                                    <div class="row">
                                        <div class="col-md-12 0Padding">
                                            <label>{{ $purchase_service->title }}</label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="sm-label cost">₩ {{ $purchase_service->price }}</label>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12 parentNode">
                                            {!! Form::hidden('price', $purchase_service->price) !!}
                                            {!! Form::select($purchase_service->id.'___purchase', 
                                                             $quantities, 0, 
                                                          ['class' => 'serviceChanged form-control thumbnail_select required']) !!}
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                                
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
                                            <td class="costtd">₩ <span id="br_rental_deposit_total"> {{ $cost['rental_deposit_total'] }}</span></td>
                                          </tr>
                                          <tr>
                                            <td class="sText">Purchase Service Total</td>
                                            <td class="costtd">₩ <span id="br_purchase_deposit_total"> {{ $cost['purchase_deposit_total'] }}</span></td>
                                          </tr>
                                          <tr>
                                            <td class="sText">Delivery Fee</td>
                                            <td class=" costtd">₩ <span id="br_delivery_fee"> {{ $cost['delivery_fee'] }}</span></td>
                                          </tr>
                                          <tr>
                                            <td class=" sText">Total Amount Due</td>
                                            <td class=" costtd">₩ <span id="br_total_amount_due"> {{ $cost['total_amount_due'] }}</span></td>
                                          </tr>
                                          <tr>
                                            <td class=" sText">Refund</td>
                                            <td class=" costtd">₩ <span id="br_refund"> {{ $cost['refund'] }}</span></td>
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
                                        {!! Form::label('Preffered Delievery Address') !!}
                                        {!! Form::text('preferred_delivery_address', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Building Name / Number') !!}
                                        {!! Form::text('building_name', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Room No.') !!}
                                        {!! Form::text('room_no', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Phone No.') !!}
                                        {!! Form::text('phone_no', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required phone_no')) !!}
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
                                        {!! Form::label('Bank') !!}
                                        {!! Form::text('bank_name', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Account no.') !!}
                                        {!! Form::text('account_no', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Name of Receiver') !!}
                                        {!! Form::text('reveiver_name', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                
                            </div>
                            {!! Form::submit('Order', 
                                            array('class'=>'btn_1 medium')) !!}
                        </div><!--End step -->
                       
            
                    {!! Form::close() !!}
                </div><!-- End col-md-12 -->
                
            </div><!-- End row -->
        </div>

    <!—-  Quotation Form Ends —->

    @include('page/box-rental/partials/confirm')
    @include('page/box-rental/partials/congratulations')