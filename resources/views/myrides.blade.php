@extends('template')

	@section('title')
		Rides
	@endsection

	@section('content')

    <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-sub-title textcenter">
                            <h2>Add new ride</h2>
                            <div class="line"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-lg-12 -->

                    <div class="col-sm-12 col-md-12 col-xs-12">

                        <div class="page-content add-new-ride">

                            <form method="POST" action="rides" novalidate autocomplete="off" class="idealforms add-ride">
                            @csrf
                                <div class="field">
                                    <select id="destination" name="from">
                                        <option value="default">From</option>
                                        <option>Sofia</option>
                                        <option>Plovdiv</option>
                                        <option>Hamburg</option>
                                        <option>Milano</option>
                                        <option>Paris</option>
                                        <option>Madrid</option>
                                        <option>Berlin</option>
                                    </select>
                                </div>

                                <div class="field">
                                    <select id="destinationd" name="to">
                                        <option value="default">To</option>
                                        <option>Sofia</option>
                                        <option>Plovdiv</option>
                                        <option>Hamburg</option>
                                        <option>Milano</option>
                                        <option>Paris</option>
                                        <option>Madrid</option>
                                        <option>Berlin</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <input name="by" type="text" placeholder="By" >
                                </div>

                                <div class="field">
                                    <input name="date" type="text" placeholder="Date" class="datepicker">
                                </div>

                                 
                                <div class="field buttons">
                                    <button type="submit" class="btn btn-lg green-color">Submit</button>
                                </div>

                            </form>

                        </div><!-- end .page-content -->

                    </div><!-- end .col-sm-12 -->

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->
 
	@endsection