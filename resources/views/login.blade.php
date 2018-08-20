@extends('layouts.main')
@section('contents')

        <container>

        	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt style="margin-top:40px;margin-bottom:0px;">

					<img src="images/img-01.png" alt="IMG">

				</div>



				<form class="login100-form validate-form" method="post" action="/login" id="loginform">
 					{{ csrf_field() }}
					<span class="login100-form-title">

						Queue Management System

					</span>


					<div class="isa_error" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
					   <i class="fa fa-times-circle"></i>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@tif.com">

						<input class="input100" type="text" id="email" name="email" placeholder="Username">

						<span class="focus-input100"></span>

						<span class="symbol-input100">

							<i class="fa fa-envelope" aria-hidden="true"></i>

						</span>

					</div>



					<div class="wrap-input100 validate-input" data-validate = "Password is required">

						<input id="password" class="input100" type="password" name="password" placeholder="Password">

						<span class="focus-input100"></span>

						<span class="symbol-input100">

							<i class="fa fa-lock" aria-hidden="true"></i>

						</span>

					</div>

					

					<div class="container-login100-form-btn">

						<button id="loginbtn" class="login100-form-btn">

							Login
							<span style="margin-left:10px;display:none;" id="loader"><img src="images/loading.gif" height="20px" width="20px"></span>
						</button>

					</div>



					<!-- <div class="text-center p-t-12">

						<span class="txt1">

							Forgot

						</span>

						<a class="txt2" href="#">

							 Password?

						</a>

					</div> -->


<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
					<!-- <div class="text-center p-t-136">

						<a class="txt2" href="#">

							Create your Account

							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>

						</a>

					</div> -->

				</form>

			</div>

		</div>

	</div>

        </container>
@stop 
	