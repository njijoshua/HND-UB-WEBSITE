@extends('layouts.app')

@section('content')
<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Contact Info</h2>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span> <em>Manes Winchester<br> Family Law Firm</em> the address city, state 1111
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: (+20) 000 222 999
							</p>
						</li>
						<li>
							<p class="fax">
								Fax: (+20) 000 222 988
							</p>
						</li>
						<li>
							<p class="mail">
								Email: info@hnd-cot.com
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="main">
				<h1>Contact</h1>
				<h2>Send Us a Quick Message</h2>
				<p>
					Having any quetion or problem? Email us
				</p>
				<form action="index.html" method="post" class="message">
					<label>First Name</label>
					<input type="text" value="">
					<label>Last Name</label>
					<input type="text" value="">
					<label>Email Address</label>
					<input type="text" value="">
					<label>Message</label>
					<textarea></textarea>
					<input type="submit" value="Send Message">
				</form>
			</div>
		</div>
	</div>
	
@endsection