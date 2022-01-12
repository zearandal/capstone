<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    	<title>ITEXTMO Message</title>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="../css/message.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-conversation icon'></i>
        <div class="logo_name">TextMoNa</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="..\sidebar\dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="..\sidebar\event.php">
          <i class='bx bx-alarm-add' ></i>
          <span class="links_name">Add Event</span>
        </a>
        <span class="tooltip">Add Event</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Phonebook</span>
       </a>
       <span class="tooltip">Phonebook</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="..\sidebar\history.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">History</span>
       </a>
       <span class="tooltip">History</span>
     </li>
     <li>
       <a href="..\sidebar\save.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>

  <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">University Announcement</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">

							<div class="col-lg-8">
								<div class="contact-wrap">
                  <h6 class="mb-4 text-center">"This message will be broadcast to your college of choice."</h6>
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div>
				      		<div id="form-message-success" class="mb-4 w-100 text-center">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">

											<div style="text-align:center" class="col-md-12">
                        <form class="checkbox-wrapper d-flex flex-row">
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>CB&A</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>CNSM</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>COA</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>COEd</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>COEng</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>COF</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>CSSH</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>COLLEGE DEAN</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>DEPARTMENT CHAIR</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>FACULTY</span></label>
        <label class="checkbox-item text-center"><input type="checkbox" value="0" class="d-none"><span>STAFF</span></label>

      </form>
    </div><br><br>

											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
