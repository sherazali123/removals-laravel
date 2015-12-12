<!-- Modal Order-->
        <div id="order" class="modal fade custom" role="dialog" aria-labelledby="gridSystemModalLabel" data-backdrop="static" data-keyboard="false" >
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Confirm Order</h4>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row text-center">
                    <div class="col-md-12"><p class="large_p">Please transfer the total amount due to account number below within 12 hours of placing the order. The refund will be transferred within 24 hours of the rental items being returned to us.</p>
                    </div>

                  </div>
                  <div class="row text-center">
                      <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered table-condensed cost-table">
                              <tbody>
                                <tr>
                                  <td class="sText">Rental Deposit Total</td>
                                  <td class="costtd">₩ <span id="br_rental_deposit_total"> {{ $costs['rental_deposit_total'] }}</span></td>
                                </tr>
                                <tr>
                                  <td class="sText">Delivery Fee</td>
                                  <td class=" costtd">₩ <span id="br_delivery_fee"> {{ $costs['delivery_fee'] }}</span></td>
                                </tr>
                                <tr>
                                  <td class=" sText">Total Amount Due</td>
                                  <td class=" costtd">₩ <span id="br_total_amount_due"> {{ $costs['total_amount_due'] }}</span></td>
                                </tr>
                                <tr>
                                  <td class=" sText">Refund</td>
                                  <td class=" costtd">₩ <span id="br_refund"> {{ $costs['refund'] }}</span></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <div class="col-md-3"></div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon totalCostText">Total Cost</span>
                          <span class="input-group-addon totalCost">₩ <span id="confirm_total_cost"> {{ $costs['total_cost'] }}</span></span>
                        </div>
                     </div>
                    <div class="col-md-4"> </div>
                    <div class="col-md-4 text-left bankInfo">
                        <img class="bankConfirmLogo" src="{{ asset('/img/KB_logo.png') }}" alt="KB Logo" />
                        <label class="">Account Number: 724702-01-127514</label>
                        <label class="">Recipient : 박범호</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button id="confirmOrderBtn" type="button" class="btn_1 medium">Confirm Order</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal order -->
