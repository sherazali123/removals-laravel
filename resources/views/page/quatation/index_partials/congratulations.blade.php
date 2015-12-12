
    <!-- Modal Order-->
        <div id="quotationFilled" class="modal fade custom" role="dialog" aria-labelledby="gridSystemModalLabel" data-backdrop="static" data-keyboard="false" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Thank you!</h4>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row text-center">
                    <div class="col-md-12">
                        <!-- <h1>Confirmed!</h1> -->
                        <p class="large_p">MIK will contact you in few hours and let you know the quote.</p>
                        <p class="large_p">MIK provides customers with free boxes and mattress cover rental services. Do you need any of these items?</p>
                    </div>

                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <a type="button" class="btn_1 medium" href="{{ url('/box-rental') }}">Yes</a>
                <a type="button" class="btn_1 medium" href="">No</a>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal confirm -->
