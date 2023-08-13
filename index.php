<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv= "x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Complete Responsive Food Website Design Tutorial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    </head>
    <body>
      <div id="root">
      <header>
        
     <a href="#" class="logo"><i class="fa-sharp fa-solid fa-staff-snake fa-bounce"></i> Med Book+ </a>
     <nav class="navbar">
      <a class="active" href="#home">home</a>
      <a href="#dishes">Our Doctors</a>
      <a href="#about">About Us</a>
      <a href="#menu">Disease</a>
      <a href="#review">Review</a>
      <a href="signin.php">Sign in</a>
     </nav>
     <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-search" id="search-icon" style="color: #ffffff"></i>
      <a href="#" class="fa-sharp fa-light fa-heart" style="color: #ffffff"></a>
      <a href="#" class="fa-solid fa-stethoscope" style="color: #ffffff"></a>

     </div>


      </header>
      <form action="" id="search-form">
        <input type="search" placeholder="search here...." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
      </form>
      <section class="home" id="home">
        <div class="swiper home-slider">
        <div class="swiper-wrapper wrapper">
          <div class="swiper-slide slide">
            <div class="content">
              <span>our special doctors</span>
              <h3>Dr.Devi Shetty</h3>
              <p>Devi Prasad Shetty is an Indian entrepreneur and cardiac surgeon who is the chairman and founder of Narayana Health, a chain of 21 medical centers in India. He has performed more than 100,000 heart operations.</p>
              <a href="#"class="btn">Contact Now</a>
            </div>
            <div class="image">
              <img src="https://i.pinimg.com/1200x/7f/d1/2d/7fd12d36e4645fab61ad87307ca5c9b9.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="content">
              <span>our special doctors</span>
              <h3>Dr.Anita Bhardwaj</h3>
              <p>Anita Bhardwaj is an Indian high altitude rescue doctor. She is joint medical director of the Six Sigma High Altitude Medical Rescue Services and she has received the highest award for women in India, the Nari Shakti Puraskar.</p>
              <a href="#"class="btn">Contact Now</a>
            </div>
            <div class="image">
              <img src="https://www.sixsigmamedicalcentre.com/wp-content/uploads/2022/01/dr-anita-bhardwaj-six-sigma.png.jpg"width= alt="">
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="content">
              <span>our special doctors</span>
              <h3>Dr.Soumya Swaminathan</h3>
              <p>Soumya Swaminathan is an Indian paediatrician and clinical scientist known for her research on tuberculosis and HIV. From 2019 to 2022, she served as the chief scientist at the World Health Organization under the leadership of Director General Tedros Adhanom Ghebreyesus.</p>
              <a href="#"class="btn">Contact Now</a>
            </div>
            <div class="image">
              <img src="https://tbvaccinesforum.org/wp-content/uploads/2021/04/Soumya-Swaminthan.jpg"hight="100" alt="">
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
        </div>
      </section>
      <section class ="dishes" id="dishes">
        <h3 class="sub-heading">Our Doctors</h3>
        <h1 class="heading">Great Doctors</h1>
        <div class="box-container">

          <div class="box">
          <a href="#"class="fas fa-heart"></a>
          <a href="#"class="fas fa-eye"></a>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTHeG0sXfI04T_ndWv6SwYFatRhyvo2zkhycXJFDNnOq-9Zbap" alt="">
          <h3>Dr.Devi Shetty </h3>
          <h4> He has performed more than 100,000 heart operations.</h4>
            
          <a href="doctor.php"class="btn">Contact</a>
          </div> 
          <div class="box">
            <a href="#"class="fas fa-heart"></a>
            <a href="#"class="fas fa-eye"></a>
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQm4g9GUJvgi3lK9Rst_kWBkz1cGMqOeP4sWyfKZYwizf2qQWDo" alt="">
            <h3>Dr.Anita Bharadwaj </h3>
            <h4> She is joint medical director of the Six Sigma High Altitude</h4>
              
            <a href="doctor.php"class="btn">Contact</a>
            </div> 
            <div class="box">
              <a href="#"class="fas fa-heart"></a>
              <a href="#"class="fas fa-eye"></a>
              <img src="https://tbvaccinesforum.org/wp-content/uploads/2021/04/Soumya-Swaminthan.jpg" alt="">
              <h3>Dr.Soumya Swaminathan</h3>
              <h4>She served as the chief scientist at the World Health Organization</h4>
                
              <a href="doctor.php"class="btn">Contact</a>
              </div> 
              <div class="box">
                <a href="#"class="fas fa-heart"></a>
                <a href="#"class="fas fa-eye"></a>
                <img src="data:image/jpeg;base64,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" alt="">
                <h3>Dr.Siddhartha Mukherjee</h3>
                <h4>Siddhartha Mukherjee is an Indian-American physician, biologist, and author.</h4>
                  
                <a href="doctor.php"class="btn">Contact</a>
                </div> 
                <div class="box">
                  <a href="#"class="fas fa-heart"></a>
                  <a href="#"class="fas fa-eye"></a>
                  <img src="https://i1.rgstatic.net/ii/profile.image/831627798274055-1575286926756_Q512/Mohamed-Rela.jpg" alt="">
                  <h3>Dr.Mohamed Rela</h3>
                  <h4>Dr. Mohamed Rela is an Indian surgeon.</h4>
                    
                    <a href="doctor.php"class="btn">Contact</a>
                  </div> 
                  <div class="box">
                    <a href="#"class="fas fa-heart"></a>
                    <a href="#"class="fas fa-eye"></a>
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS4NKy8GFes_4QPQMEQWIgE0x4nY_P5SFy_FV3swcvuvO3rROwT" alt="">
                    <h3>Dr.Naresh Trehan</h3>
                    <h4>Naresh Trehan is an Indian cardiovascular and cardiothoracic surgeon.</h4>
                      
                    <a href="doctor.php"class="btn">Contact</a>
                    </div> 
                    </div>
                  </section>
                  <section class="about" id="about">
                    <h3 class="sub-heading">about </h3>
                    <h1 class="heading">why choose us</h1>
                    <div class="row">
                     <div class="image">
                      <img src="https://mcdn.wallpapersafari.com/medium/87/98/rOGdWY.jpg" alt="">
                       </div>
                        <div class="content">
                          <h3>best doctors from our country</h3>
                          <p>Choosing the best doctors is crucial because they provide expertise, experience, and a high level of care, increasing the likelihood of accurate diagnoses and effective treatments.</p>
                           <p> Their knowledge can lead to better outcomes and improved health. </p>
                           <div class="icons-container">
                             <div class="icons" >
                              <i class="fa-solid fa-truck-medical"></i>
                              <span><h4>contact ambulance</h4></span>
                             </i>
                             </div>
                            
                            
                              <div class="icons" >
                                <i class="fas fa-headset">
                                 <span>24/7 service</span>
                                </i>
                                </div>
                           </div>
                  
                        <a href="booking.php" class="btn">Book Now </a> 
                        </div>
                  
                    </div>
                  </section>
                  <section class="menu" id="menu">
                    <h3 class="sub-heading">Disease</h3>
                    <h1 class="heading">Most Common Disease</h1>
                    <div class="box-container">
                     <div class="box">
                      <div class="image">
                        <img src="https://blog.babycues.com/media/1921/dairy-overload-dairy-intoelrance-dairy-allergy.jpg" alt="">
                        
                        </div>
                        <div class="content">
                        
                          <h3> Allergies</h3>
                          <p> Allergies occur when your immune system reacts to a foreign substance — a food that doesn't cause a reaction in most people.</p>
                          <a href="blog.php"class="btn">More...</a>
                          
                      </div>
                      </div>
                      <div class="box">
                        <div class="image">
                          <img src="https://www.theglobeandmail.com/resizer/scPK8cs10pbLf63eSbQr7prByIg=/500x500/smart/filters:quality(80)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/FXRUUZWTUJFWRHXNU6K6MYMMLE.jpg" alt="">
                         
                          </div>
                          <div class="content">
                          
                            <h3> Colds and Flu</h3>
                            <p> Colds are usually milder than flu. People with colds are more likely to have a runny or stuffy nose than people who have flu.</p>
                            <a href="blog.php"class="btn">More...</a>
                            
                        </div>
                      </div>

                        <div class="box">
                          <div class="image">
                            <img src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2014/02/pinkEye-165755073-770x533-1-650x428.jpg" alt="">
                            
                            </div>
                            <div class="content">
                            
                              <h3> Conjunctivitis ("pink eye“)</h3>
                              <p> Pink eye is an inflammation of the transparent membrane that lines the eyelid and eyeball.</p>
                              <a href="blog.php"class="btn">More...</a>
                              
                          </div>
                        </div>

                          <div class="box">
                            <div class="image">
                              <img src="https://t3.ftcdn.net/jpg/02/11/54/38/360_F_211543839_3zMgW8qD0BEfQafYBrbfZwI3PxQw4fmx.jpg" alt="">
                              
                              </div>
                              <div class="content">
                              
                                <h3>Gynecological Problems</h3>
                                <p>painful cramps, severe abdominal pain, or heavy and/or prolonged bleeding between periods or during intercourse</p>
                                <a href="blog.php"class="btn">More...</a>
                             
                            </div>
                          </div>

                            <div class="box">
                              <div class="image">
                                <img src="https://erofdallastx.com/wp-content/uploads/2023/05/Heart-Attack-Treatment-at-ER-of-Dallas.svg" alt="">
                                
                                </div>
                                <div class="content">
                                
                                  <h3> Heart Attack </h3>
                                  <p>  A heart attack occurs when the flow of blood to the heart is severely reduced or blocked.</p>
                                  <a href="blog.php"class="btn">More...</a>
                                  
                              </div>
                            </div>

                              <div class="box">
                                <div class="image">
                                  <img src="https://www.nirujahealthtech.com/wp-content/uploads/2020/01/juni_Artikel4a-1-1200x600-1-500x500.jpg" alt="">
                                  
                                  </div>
                                  <div class="content">
                                  
                                    <h3> Stomach Aches.</h3>
                                    <p> Serious causes of Stomach Aches include constipation, irritable bowel syndrome, food allergies, lactose intolerance and stomach virus.</p>
                                    <a href="blog.php"class="btn">More...</a>
                                    
                                </div>
                              </div>

                                <div class="box">
                                  <div class="image">
                                    <img src="https://resources.perkinelmer.com/lab-solutions/resources/images_for_resize/Immuno-Oncology-Reagents-500x500.jpg" alt="">
                                    
                                    </div>
                                    <div class="content">
                                    
                                      <h3> Cancer</h3>
                                      <p>Cancer is a disease in which some of the body's cells grow uncontrollably and spread to other parts of the body.</p>
                                      <a href="blog.php"class="btn">More...</a>
                                      
                                  </div>
                                </div>
                                <div class="box">
                                  <div class="image">
                                    <img src="https://onlinesciencenotes.com/wp-content/uploads/2023/07/Kidney-transplant.png" alt="">
                                    
                                    </div>
                                    <div class="content">
                                    
                                      <h3> Kidney Transplant</h3>
                                      <p> A kidney transplant is a surgery done to replace a diseased kidney with a healthy kidney from a donor.</p>
                                      <a href="blog.php"class="btn">More...</a>
                                      
                                  </div>
                                </div>

                                  <div class="box">
                                    <div class="image">
                                      <img src="https://infinityclinic.com/sites/default/files/diabetes-mellitus_0_0_new_.jpg" alt="">
                                      
                                      </div>
                                      <div class="content">
                                      
                                        <h3> Diabetes</h3>
                                        <p>Diabetes is a chronic (long-lasting) health condition that affects how your body turns food into energy. </p>
                                        <a href="blog.php"class="btn">More...</a>
                                        
                                    </div>
                                  </div>

                     </div>

                    </div>


                    

                  </section>

<section class="review" id="review">
  <h3 class="sub-heading">customer review</h3>
        <h1 class="heading">what they say</h1>
        <div class="swiper-container review-slider">
         <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSeWWUJqVQHiizOwMUy1LtnZSKHASYRnuV0wBbV_LYdIGKofYns" alt="" >
              <div class="user-info">
                <h3>Arpita Patra</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
            </div>
            <p>I am very happy by taking an appoinment from this website.</p>
          </div>
          <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="https://i.pinimg.com/236x/58/db/a6/58dba6880c86d97971640aab50de8440.jpg" alt="" >
              <div class="user-info">
                <h3>Sayan Mandal</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
            </div>
            <p>This is great to use this website</p>
          </div>
          <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="https://i.pinimg.com/236x/12/76/30/1276308c76fbab1af0bf2542abe21260.jpg" alt="" >
              <div class="user-info">
                <h3>Isita Roy</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
            </div>
            <p>I just like to say thank you so much for all your efforts.</p>
          </div>
          <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQdkvup6TLr12mOMCd-NZG_Psx13GudYiw6Goo2l2EmRkSbyLT3" alt="" >
              <div class="user-info">
                <h3>Rahul Gupta</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
            </div>
            <p>The Doctors are so nice and good.</p>
          </div>
         </div>
        </div>
</section>


<!-- footer -->

<section class="footer" id="x">
  <div class="box-container">
    <div class="box">
      <h3>locations</h3>
      <a href="#">delhi</a>
      <a href="#">kolkata </a> 
      <a href="#">mumbai</a>
      <a href="#">karnataka</a>  
      <a href="#">tamil nadu</a> 
    </div>
  
    <div class="box">
      <h3>Disease Categori</h3>
      <a href="#">Cancer and neoplasms</a>
      <a href="#">Cardiovascular</a> 
      <a href="#">Congenital disorders</a>
      <a href="#">Haematological diseases</a>  
      <a href="#">Infection</a> 
      <a href="#">Inflammatory and immune system</a> 
    </div>
  
    <div class="box">
      <h3>Specialisation</h3>
      <a href="#">Orthopedics</a>
      <a href="#">Radiology</a> 
      <a href="#">Geynology</a>
      <a href="#">Genarel Surgery</a>  
      <a href="#">Chest Medicine</a> 
    </div>
  
   
  
    <div class="box">
      <h3>follow and contact us</h3>
      <a href="#">facebook</a>
      <a href="#">instagram</a> 
      <a href="#">twitter</a>
      <a href="#">linkedin</a> 
      <a href="#">+123-546-789</a> 
      <a href="#">nebula4medbook@gmail.com</a> 
    </div>
  
  </div>
  <div class="credit" >created by <span>NEBULA</span></div>
  </section>
 

  



<!-- <div class="loader-container">
<img src="loader.gif" alt="">
</div> -->








      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
     <script src="script.js"></script>
    </div>
   
  </body>
</html>
