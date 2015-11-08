<div class="container margin_60">
        
            <div class="row">
               
                    <img src="{{ url('img/classic_ads').'/'.$classic_ad->image }}" class="col-md-3" alt="" data-retina="true">
                <div class="col-md-9">
                       @include('page/classified-ad/create_partials/classic_ad_info')
                    
                        {!! Form::open(array('url' => 'api/v1/classified-ad', 'method' => 'POST', 'class' => 'add_new_add', 'id' => 'add_new_add', 'file' => true, 'enctype' => 'multipart/form-data')) !!}
                            {!! Form::hidden('classic_ad_id', $classic_ad->id) !!}
                            <div class="form_title">

                                <h3><strong>T</strong>Title for your ad</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            {!! Form::text('title', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div><!--End step -->
                        <div class="form_title">
                                <h3><strong><i class="icon-info"></i></strong>Other Information</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="step">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('Location') !!}
                                        {!! Form::select('location', 
                                                          array('' => 'Select Location') + $locations, null, 
                                                          ['class' => 'form-control required', 'name' => 'location']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                         {!! Form::label('E-mail Address') !!}
                                        {!! Form::text('email', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control email required')) !!}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('Telephone') !!}
                                        {!! Form::text('phone_no', null, 
                                                                    array(null, 
                                                                          'class'=>'form-control number required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="col-md-6 col-sm-6 in-col" style="padding-left: 0;">
                                        <div class="form-group">
                                            {!! Form::label('Month') !!}
                                            {!! Form::select('month', 
                                                          array('' => 'Select Month') + $months, date('m'), 
                                                          ['class' => 'form-control required', 'name' => 'month']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 in-col" style="padding-right: 0;">
                                        <div class="form-group">
                                            {!! Form::label('Year') !!}
                                            {!! Form::select('year', 
                                                          array('' => 'Select Year') + $years, date('Y'), 
                                                          ['class' => 'form-control required', 'name' => 'year']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End step -->
                            @if($classic_ad->type == 1)
                            <div class="form_title">

                                <h3><strong><i class="icon-picture-2"></i></strong>Upload images</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            {!! Form::file('images[]', ['multiple'=>true, 'class' => 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        @if(Session::has('error'))
                                        <p class="errors">{!! Session::get('error') !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </div><!--End step -->
                            @endif
                            <div class="form_title">
                                <h3><strong><i class="icon-pencil-7"></i></strong>Leave your comment here</h3>
                                <p>
                                 	Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group add_bottom_45">
                                            {!! Form::label('Write your notes or message') !!}
                                            {!! Form::textarea('comment', null, 
                                                                            array(null, 
                                                                                  'class'=>'form-control required',
                                                                                  'style' => 'height: 100px;')) !!}
                                        </div>
                                    </div>
                                </div>
        						
                                {!! Form::submit('Submit', 
                                            array('class'=>'btn_1 medium')) !!}
        			       </div><!--End step -->
                    
 					{!! Form::close() !!}
                </div>
            </div><!-- End row -->
            
           
        </div>