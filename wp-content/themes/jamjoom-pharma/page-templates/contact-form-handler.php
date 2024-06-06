<?php
	if (isset($_POST['submit'])){
		global $wpdb,$table_prefix;
		$wp_contact_table = $table_prefix.'contact_form';
		$firstname = $wpdb->escape($_POST['firstname']);
		$lastname = $wpdb->escape($_POST['lastname']);
		$emailid = $wpdb->escape($_POST['emailid']);
		$subject = $wpdb->escape($_POST['subject']);
		$message = $wpdb->escape($_POST['message']);
	
		// Insert data to database
		$contact_data = array(
			'first_name' => $firstname,
			'last_name' => $lastname,
			'email' => $emailid,
			'subject' => $subject,
			'message' => $message,
		);
		$wpdb->insert($wp_contact_table, $contact_data);
        
       // Get the URL of the "Thank You" page dynamically
        $thank_you_page_url = get_permalink(get_page_by_path('thank-you')); // Replace with your page slug

        // Redirect to the "Thank You" page
        wp_redirect($thank_you_page_url);

				// Send email to the admin
				$admin_email = get_option('admin_email');
				$subject_admin = 'New form submission';
				$body_admin = '<html>
				<head>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0" />
					<meta http-equiv="X-UA-Compatible" content="ie=edge">
					<title>Thank you for getting in touch</title>
					<style type="text/css">
						body {
							font-family: "Helvetica Neue", sans-serif;
						}
				
						p {
							font-size: 16px;
							line-height: 22px;
							font-weight: 500;
							margin: 10px 0px;
						}
				
						.separate {
							border: 1px solid #f3f3f3f3;
							margin-bottom: 30px;
							margin: 0 -19px 30px -19px;
						}
				
						a {
							text-decoration: none;
						}
				
						h2 {
							font-size: 18px;
							color: #666666;
						}
				
						.signature {
							margin-top: 10px;
							display: inline-block;
						}
				
						.cust-details tr td {
							padding-bottom: 7px;
						}
				
						@media(max-width:767px) {
							.mob-pad {
								padding: 0 !important;
							}
				
							h2 {
								font-size: 16px !important;
								line-height: 20px !important;
							}
				
							table {
								margin-left: 0px !important;
								padding-bottom: 10px !important;
							}
				
							.separate {
								margin: 0 -14px 20px -17px;
							}
				
							p {
								text-align: justify;
							}
				
							.logo {
								width: 150px !important;
							}
						}
					</style>
				</head>
				<body>
					<form>
						<div style="padding: 50px 50px;" class="mob-pad">
							<table cellspacing="0" width="100%"
								style="max-width: 610px; margin: 0 auto; border: 2px solid #f3f3f3;padding: 30px 15px 30px 15px;">
								<tbody>
									<tr>
										<td>
											<table width="100%;">
												<tbody>
													<tr>
														<div style="padding-bottom:20px; text-align: center">
															<img src="http://localhost/jamjoompharma/wp-content/themes/jamjoom-pharma/assets/images/payless-logo.png" alt="logo"  class="logo">
														</div>
													</tr>
				
													<div class="separate"></div>
				
													<tr>
														<td>
															<h3 style="font-size: 16px;"> Hello '.$firstname.',</h3>
															<p>Thank you for getting in touch! </p>
															<p>We appreciate you for contacting with Payless.
																 One of our representative will get in touch with you soon!</p>
														</td>
													</tr>
													<tr>
														<td style="padding-bottom: 3px;">
															<p style="margin-bottom: 4px;"><strong>Thank You!</strong></p>
															<p style="margin:4px 0px 0px 0px">Payless Team</p>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
				</body>
				</html>';
		
				$headers_admin = array('Content-Type: text/html; charset=UTF-8');
				wp_mail($admin_email, $subject_admin, $body_admin, $headers_admin);
		
				// Send thank-you email to the user
				$subject_user = 'Thank you for your submission';
				$body_user = '<html>
				<head>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0" />
					<meta http-equiv="X-UA-Compatible" content="ie=edge">
					<title>USer Details</title>
					<style type="text/css">
						body {
							font-family: "Helvetica Neue", sans-serif;
						}
				
						p {
							font-size: 17px;
							line-height: 22px;
							font-weight: 500;
						}
				
						.separate {
							border: 1px solid #f3f3f3f3;
							margin-bottom: 30px;
							margin: 0 -19px 30px -19px;
						}
				
						a {
							color: #000000;
							text-decoration: none;
						}
				
						td{
							padding-bottom: 15px;
						}
				
						@media(max-width:767px) {
							.mob-pad {
								padding: 0 !important;
							}
				
							h2 {
								font-size: 16px !important;
								line-height: 20px !important;
							}
				
							table {
								margin-left: 0px !important;
								padding-bottom: 10px !important;
							}
				
							.separate {
								margin: 0 -14px 20px -17px;
							}
				
							.logo {
								width: 100px !important;
							}
						}
					</style>
				</head>
				<body>
					<form>
						<div style="padding: 50px 50px;" class="mob-pad">
							<table cellspacing="0" width="100%"
								style="max-width: 610px; margin: 0 auto; border: 2px solid #f3f3f3;padding: 30px 15px">
								<tbody>
									<tr>
										<td>
											<table width="100%;">
												<tbody>
													<tr>
														<div style="padding-bottom:20px; text-align: center">
															<img src="http://localhost/jamjoompharma/wp-content/themes/jamjoom-pharma/assets/images/payless-logo.png" alt="logo"  class="logo">
														</div>
				
													</tr>
				
													<div class="separate"></div>
													<tr>
														<td>
															<h2
																style="font-size: 20px;color: #2d2926;">
																Dear Admin,</h2>
															<p>'.$firstname.' has submitted the contact us form from the Payless Website.</p>
															<p style="margin-top: 30px;margin-bottom: 15px;">Please find the below details for the same:</p>
															<table style="width: 100%;">
																<tr>
																	<td>Email :</td>
																	<td>'.$emailid.'</td>
																</tr>
																<tr>
																	<td>Phone Number :</td>
																	<td>'.$subject.'</td>
																</tr>
																<tr>
																	<td>Message :</td>
																	<td>'.$message.'</td>
																</tr>
															</table>
														</td>
													</tr>
											</table>
										</td>
									</tr>
				
									<tr>
										<td style="padding-bottom: 3px;">
											<p style="margin-bottom: 4px;"><strong>Thank You!</strong></p>
											<p style="margin:4px 0px 0px 0px">Payless Team</p>
										</td>
									</tr>
								</tbody>
							</table>
							</td>
							</tr>
							</tbody>
							</table>
						</div>
					</form>
				</body>
				</html>';
		
				$headers_user = array('Content-Type: text/html; charset=UTF-8');
				wp_mail($emailid, $subject_user, $body_user, $headers_user);
        exit;
    }
?>