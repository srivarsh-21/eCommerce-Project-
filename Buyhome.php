<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>True Motors - Your One-Stop Destination for Car Deals</title>
    <link rel="stylesheet" href="./Header_footerstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"/>
   <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
        }

      
       

       


/* Top Banner */
.top-banner {
  position: relative;
  width: 100%;
  margin-top: 150px;
  height: auto;
  overflow: hidden;
}

.top-banner img {
  width: 1340px;
  height: 140px;
  margin-left: 87px;
  margin-bottom: 30px;
  top:169px;
  left:70px;
  display: block;
}


/* Filter Bar */
.filter-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 16px;
  border: 2px solid #eee;
  background: #fff;
  margin-right: 10px;
  margin-left: 13px;
  width:1500px;
  height:60px;
  top:317px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* subtle shadow */
  
}

/* Left side */
.left-section {
  display: flex;
  align-items: center;
  margin-left:35px ;
  gap: 35px;
}

/* Dropdown */
.dropdown {
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 14px;
  width:139px;
  height:40px;
  top:327px;
  left:42px;

}

/* Tabs */
.tabs {
  display: flex;
  align-items: center;
  gap: 35px;
}

.tab {
  position: relative;
  text-decoration: none;
  color: #333;
  font-weight: 700;
  padding-bottom: 6px;
  font-style: bold;
  font-size: 16px;
  /* line-height: 100%; */
  /* width:30px;
  height:24px;
  top:335px;
  left:213px; */
}

.tab.active {
  color: #6a0dad;
}

.tab.active::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: #6a0dad;
  border-radius: 3px;
}

/* Right side - Location */
.right-section {
  display: flex;
  align-items: center;
}

.location-btn {
  display: flex;
  align-items: center;
  text-align: center;
  gap: 12px;
  padding: 6px 30px;
  font-size: 16px;
  border: 1px solid #ccc;
  background: white;
  border-radius: 15px;
  cursor: pointer;
  color: #565656;
  width:200px;
  height:48px;
  top:323px;
  left:1187px;
}


.filters {
  width: 20%;
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.filters h2 {
  margin-bottom: 20px;
 
}

.filters label {
  display: block;
  
  margin: 10px 0 5px;
}

.filters select {
  width: 100%;
  padding: 8px;
  
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.car-listings {
  flex-grow: 1;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.car-card {
  background-color: white;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.car-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 8px;
}

.car-card h3 {
  margin-top: 10px;
  font-size: 18px;
  font-weight: bold;
}

.car-card .price {
  margin-top: 10px;
  font-size: 16px;
  color: green;
}

.car-card .favorite {
  background-color: transparent;
  border: none;
  font-size: 20px;
  cursor: pointer;
  color: red;
  margin-top: 10px;
}

.sell-car {
  width: 100%;
  padding: 20px;
  background-color: #fce4ec;
  text-align: center;
  border-radius: 8px;
}

.sell-button {
  background-color: #6a0dad;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}

.ad-banner {
  margin-top: 20px;
  background-color: #e3f2fd;
  padding: 10px;
  text-align: center;
}

.ad-banner img {
  width: 100%;
  max-width: 600px;
  height: auto;
  border-radius: 8px;
}

.page {
  display: flex;
}

.filters {
  width: 440px;
  background: #fff;
  padding: 15px;
  border: 1px solid #636363;
  margin-left: 20px;
  margin-top: 20px;
   position: sticky;
  top: 20px; /* distance from the top when sticking */
  align-self: flex-start; /* useful if inside a flex container */
  z-index: 10; /* ensure it's above other content if overlapping */
}

.all-filters {
  background: #fff;
  border: none;
  padding: 10px;
  /* width: 400px; */
  margin-bottom: 20px;
  font-weight: bold;
  cursor: pointer;
  width:400px;
  height:73px;
  top:431px;
  left:85px;
  border-radius: 10px;
  border:1px #C1C1C1 solid;
}

 .filter-section {
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 15px;
  margin-top: 15px;
}

.search-input, .year-input {
  width: 100%;
  padding: 8px;
  margin: 10px 0;
  border-radius: 6px;
  border: 1px solid #ccc;
}

.label-title {
  font-weight: bold;
  margin-bottom: 8px;
}

.brand-checkbox {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 6px 0;
}

.section-title {
  display: flex;
  justify-content: space-between;
  font-size: 17px;
  /* font-weight: bold; */
  cursor: pointer;
}

.section-title1 {
  display: flex;
  justify-content: space-between;
  font-weight: bold;
  cursor: pointer;
}

.checkbox-list {
  /* display: none; */
  flex-direction: column;
  margin-top: 10px;
  gap: 8px;
}

.fuel-options {
  /* display: none; */
  flex-direction: column;
  margin-top: 10px;
  gap: 10px;
}

.fuel-options label {
  display: flex;
  align-items: center;
  gap: 10px;
  color: #800080;
}

.year-options {
  /* display: none; */
  flex-direction: column;
  gap: 10px;
  margin-top: 10px;
}

.body-types {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 8px;
}


/* .rightsidebar{
    margin-left: 200px;
} */

.content {
  /* flex-grow: 1; */
  padding: 20px;
  /* margin-left: 700px; */
}

.banner {
  width: 100%;
  height: auto;
  margin-bottom: 15px;
  margin-left: 5px;
}

.breadcrumb {
  color: #777;
  font-size: 14px;
  margin-bottom: 10px;
}

.car-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 35px;
}

.car-card {
  background: #fff;
  padding: 15px;
  width:330px;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  text-align: center;
 
  
}

.car-card img {
  width: 230px;
  border-radius: 8px;
  margin-bottom: 10px;
  margin-left: 2px;
}

.car-card .heart {
  position: absolute;
  top: 10px;
  right: 10px;
  color: #ba2cac;
  cursor: pointer;
}

.car-card h3 {
  font-size: 16px;
  color: #2101AF;
  margin: 5px 0;
}

.car-card p {
  margin: 3px 0;
  font-size: 14px;
}

.car-card .price {
  color: #040084;
  font-weight: bold;
}

.car-card .location {
  color: #777;
  font-size: 13px;
}

.view-details {
  display: inline-block;
  margin-top: 10px;
  color:#ba2cac;
  text-decoration: none;
  font-weight: bold;
  font-size: 13px;
}

.banner3 {
      width: 1000px;
      margin-top: 20px;
      margin-left: 55px;
    }

    .banner3 img {
      width: 100%;
      display: block;
    }

    .container1{
       margin-top: 20px;
    }


.car-action-section {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 250px;
  margin: 40px auto;
  flex-wrap: wrap;
  margin-left : 320px;

}

.card {
  width: 500px;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  position: relative;
  text-align: left;
 
}

.sell-card {
  background-color: #ffe6ee;
}

.card h3 {
  font-size: 2rem;
  font-weight: bold;
  color: #000;
  margin-bottom: 10px;
  line-height: 1.2;
}

.card p {
  font-size: 1.2rem;
  margin-bottom: 20px;
  color: #333;
}

.action-row {
  display: flex;
  align-items: center;
   /* justify-content: space-between;  */
  gap: 250px;
  margin-top: 15px;
}

.icon {
  font-size: 2rem;
  margin-bottom: 15px;
  color: #6c63ff;
}

.sell-btn {
  background-color: #5c2b00;
  color: #fff;
  padding: 10px 20px;
  font-size: 15px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  /* font-weight: bold; */
}

/* Testimonials Section */
.testimonials-maincard {
  margin-inline: 50px;
  margin-top: 30px;
  /* margin-bottom: 40px; */
}

.testimonials-maincard h2 {
  margin-top: 40px;
  font-size: 36px;
  font-weight: 700;
  color: #000000;
  margin-bottom: 10px;
}

.testimonials {
  padding: 50px 79px;
  background: white;
  border-radius: 16px;
  box-shadow: 0px 4px 4px 0px #00000040;

}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 24px;
}

.testimonial-card {
  padding: 30px;
  height: 217px;
  width: 580px;
  border-radius: 16px;
  border: 1px solid #000000;
  background: #f8f9fa;
}

.customer-info {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.customer-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: bold;
  margin-right: 15px;
}

.customer-details h4 {
  font-size: 1.1rem;
  color: #000000;
  margin-bottom: 5px;
}

.rating {
  display: flex;
  gap: 3px;
}

.star {
  color: #ffd700;
  font-size: 16px;
}

.testimonial-text {
  font-style: italic;
  color: #666;
  line-height: 1.6;
  margin-top: 15px;
}

/* FAQ Section */
.faq {
  padding: 67px 0;
}

.faq-list {
  border-radius: 16px;
  margin-inline: 50px;
  padding: 20px;
  list-style: none;
  background: white;
  box-shadow: 0px 4px 4px 0px #00000040;

}

.faq-item {
  overflow: hidden;
}

.faq-question {
  padding: 20px 25px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 400;
  transition: background 0.3s ease;
}

.faq-question:hover {
  background: #f8f9fa;
}

.faq-toggle {
  font-size: 16px;
  transition: transform 0.3s ease;
}

.faq-answer {
  padding: 0 25px;
  max-height: 0;
  overflow: hidden;
  transition: all 0.3s ease;
}

.faq-answer.active {
  padding: 0 25px 20px;
  max-height: 200px;
}

.faq-item.active .faq-toggle {
  transform: rotate(45deg);
}

.bottom-banner {
  position: relative;
  width: 90%;
  height: auto;
  overflow: hidden;
  margin-top: 40px;
  margin-bottom: 40px;
  margin-left: 80px;
}

.bottom-banner img {
  width: 100%;
  height: auto;
  display: block;
}


    .footer {
  background: #333;
  color: #fff;
  padding: 70px 40px 20px;
  font-family: Arial, sans-serif;
  margin-top: 20px; 
}

.footer-content {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: space-between;
  gap: 20px;
  max-width: 1500px;
  margin: 0 auto;
}


.footer-col {
  flex: 1 1 180px;
  min-width: 180px;
  
}

.brand-info {
  flex: 2 1 300px;
  max-width: 350px;
}

.footer-logo {
  width: 280px;
  margin-bottom: 20px;
}

.footer-col h4 {
  font-size: 18px;
  margin-bottom: 15px;
}

.footer-col ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-col ul li {
  margin-bottom: 18px;
}

.footer-col ul li a {
  color: #ddd;
  text-decoration: none;
  font-size: 16px;
}

.footer-col ul li a:hover {
  color: #817a7a9f;
}

.connect .store-buttons {
   display: flex;
   gap: 10px;
  flex-wrap: wrap;
  margin-bottom: 15px;
}


.connect .store-buttons img {
  width: 110px;
  margin: 5px 10px 15px 0;
  border-radius: 8px;
}

.social-icons {
  display: flex;
  gap: 20px;
  margin-top: 10px;
}

.social-icons img {
  width: 32px;
  height: 32px;
  background: #fff;
  border-radius: 50%;
  padding: 5px;
}

.footer-bottom {
  border-top: 1px solid #888;
  margin-top: 30px;
  padding-top: 20px;
  text-align: center;
  font-size: 16px;
  color: #ccc;
}  


/* ---------- Mobile & Tablet Responsive Styles ---------- */
@media (max-width: 1024px) {
  .header-content {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
  }

  .filter-bar {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    width: 100%;
    margin-left: 0;
  }

  .nav-content {
    margin-left: 0;
    padding: 0 10px;
  }

  .nav-menu {
    flex-wrap: wrap;
    gap: 20px;
  }

  .page {
    flex-direction: column;
  }

  .filters {
    width: 100%;
    border-right: none;
    margin-left: 0;
  }

  .car-list {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }

  .car-card {
    width: 100%;
  }

  .banner3 {
    width: 100%;
    margin-left: 0;
  }

  .car-action-section {
    flex-direction: column;
    gap: 20px;
    margin-left: 0;
  }

  .card {
    width: 100%;
  }

  .testimonials-grid {
    grid-template-columns: 1fr;
  }

  .testimonial-card {
    width: 100%;
  }

  .faq-list {
    margin-inline: 20px;
  }

  .bottom-banner {
    width: 100%;
    margin-left: 0;
  }

  .footer-content {
    flex-direction: column;
    align-items: flex-start;
  }

  .footer-col, .brand-info {
    width: 100%;
    max-width: 100%;
  }

  .connect .store-buttons {
    flex-wrap: wrap;
  }

  .social-icons {
    justify-content: flex-start;
  }
}

@media (max-width: 600px) {
  .logo-icon {
    width: 160px;
    font-size: 16px;
  }

  .contact-info {
    align-items: flex-start;
  }

  .nav-menu {
    flex-direction: column;
    align-items: flex-start;
  }

  .filter-bar {
    padding: 10px;
  }

  .location-btn {
    width: 100%;
    justify-content: center;
  }

  .action-row {
    flex-direction: column;
    gap: 10px;
  }

  .card h3 {
    font-size: 1.5rem;
  }

  .card p {
    font-size: 1rem;
  }

  .sell-btn {
    width: 100%;
    text-align: center;
  }

  .faq-question {
    padding: 15px;
  }

  .faq-answer {
    padding: 0 15px;
  }

  .footer {
    padding: 40px 20px;
  }

  .footer-logo {
    width: 180px;
  }

  .footer-bottom {
    font-size: 14px;
  }
}


/* Mobile responsiveness */
/* ---------- Large Tablets & Small Desktops (1024px - 1200px) ---------- */
@media (max-width: 1200px) {
  .top-banner {
    margin-top: 120px;
  }

  .top-banner img {
    width: 100%;
    margin-left: 0;
    height: auto;
  }

  .filter-bar {
    width: 95%;
    margin: 20px auto;
  }

  .filters {
    width: 400px;
  }

  .car-list {
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  }
}

/* ---------- Tablets (768px - 1024px) ---------- */
@media (max-width: 1024px) {
  .top-banner {
    margin-top: 100px;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
  }

  .top-banner img {
    width: 100%;
    height: auto;
    margin-left: 0;
  }

  .filter-bar {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
    width: 95%;
    height: auto;
    margin: 20px auto;
    padding: 15px;
  }

  .left-section {
    flex-direction: column;
    width: 100%;
    margin-left: 0;
    gap: 15px;
  }

  .dropdown {
    width: 100%;
    height: 38px;
  }

  .tabs {
    width: 100%;
    flex-wrap: wrap;
    gap: 20px;
  }

  .right-section {
    width: 100%;
  }

  .location-btn {
    width: 100%;
    justify-content: center;
  }

  .page {
    flex-direction: column;
  }

  .filters {
    width: 95%;
    margin: 20px auto;
    position: static;
    border: 1px solid #636363;
  }

  .all-filters {
    width: 100%;
    height: auto;
    padding: 12px;
  }

  .filter-section {
    padding: 12px;
  }

  .content {
    width: 100%;
    padding: 15px;
  }

  .banner {
    width: 100%;
    margin-left: 0;
  }

  .car-list {
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
  }

  .car-card {
    width: 100%;
    max-width: 100%;
  }

  .car-card img {
    width: 100%;
    max-width: 100%;
  }

  .banner3 {
    width: 100%;
    margin-left: 0;
  }

  .car-action-section {
    flex-direction: column;
    gap: 30px;
    margin-left: 0;
    width: 95%;
    margin: 30px auto;
  }

  .card {
    width: 100%;
  }

  .action-row {
    gap: 100px;
  }

  .testimonials-maincard {
    margin-inline: 30px;
  }

  .testimonials-maincard h2 {
    font-size: 32px;
  }

  .testimonials {
    padding: 40px 30px;
  }

  .testimonials-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .testimonial-card {
    width: 100%;
    height: auto;
    max-width: 100%;
  }

  .faq-list {
    margin-inline: 30px;
  }

  .bottom-banner {
    width: 95%;
    margin-left: auto;
    margin-right: auto;
  }

  .footer-content {
    flex-wrap: wrap;
    gap: 30px;
  }

  .footer-col,
  .brand-info {
    flex: 1 1 45%;
  }
}

/* ---------- Small Tablets & Large Phones (600px - 768px) ---------- */
@media (max-width: 768px) {
  .top-banner {
    margin-top: 80px;
    width: 95%;
  }

  .top-banner img {
    height: auto;
  }

  .filter-bar {
    width: 90%;
    padding: 12px;
  }

  .tabs {
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }

  .tab {
    font-size: 15px;
  }

  .location-btn {
    height: 44px;
    font-size: 15px;
  }

  .filters {
    width: 90%;
  }

  .all-filters {
    font-size: 15px;
  }

  .section-title {
    font-size: 16px;
  }

  .car-list {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .car-card {
    max-width: 450px;
    margin: 0 auto;
  }

  .car-card img {
    max-width: 350px;
  }

  .banner3 {
    width: 90%;
    margin: 20px auto;
  }

  .car-action-section {
    width: 90%;
  }

  .action-row {
    flex-direction: column;
    gap: 20px;
    align-items: flex-start;
  }

  .card h3 {
    font-size: 1.6rem;
  }

  .card p {
    font-size: 1.05rem;
  }

  .sell-btn {
    width: 100%;
  }

  .testimonials-maincard {
    margin-inline: 20px;
  }

  .testimonials-maincard h2 {
    font-size: 28px;
  }

  .testimonials {
    padding: 30px 20px;
  }

  .testimonial-card {
    padding: 25px;
  }

  .customer-details h4 {
    font-size: 1.05rem;
  }

  .testimonial-text {
    font-size: 14px;
  }

  .faq-list {
    margin-inline: 20px;
    padding: 15px;
  }

  .faq-question {
    padding: 15px 20px;
    font-size: 15px;
  }

  .faq-answer {
    font-size: 14px;
  }

  .bottom-banner {
    width: 90%;
  }

  .footer {
    padding: 50px 25px 20px;
  }

  .footer-content {
    flex-direction: column;
  }

  .footer-col,
  .brand-info {
    width: 100%;
    max-width: 100%;
    flex: 1 1 100%;
  }

  .footer-logo {
    width: 220px;
  }

  .connect .store-buttons {
    justify-content: flex-start;
  }
}

/* ---------- Mobile Devices (480px - 600px) ---------- */
@media (max-width: 600px) {
  .top-banner {
    margin-top: 60px;
    width: 100%;
    margin-left: 0;
    margin-right: 0;
  }

  .top-banner img {
    width: 100%;
    margin-left: 0;
    margin-bottom: 20px;
  }

  .filter-bar {
    width: 95%;
    padding: 10px;
    margin: 15px auto;
  }

  .dropdown {
    width: 100%;
    height: 36px;
    font-size: 13px;
  }

  .tab {
    font-size: 14px;
  }

  .location-btn {
    width: 100%;
    height: 42px;
    font-size: 14px;
    padding: 6px 20px;
  }

  .filters {
    width: 95%;
    padding: 12px;
    margin: 15px auto;
  }

  .all-filters {
    width: 100%;
    padding: 10px;
    font-size: 14px;
  }

  .filter-section {
    padding: 10px;
    margin-top: 12px;
  }

  .section-title {
    font-size: 15px;
  }

  .search-input,
  .year-input {
    padding: 6px;
    font-size: 14px;
  }

  .content {
    padding: 10px;
  }

  .breadcrumb {
    font-size: 13px;
  }

  .car-list {
    gap: 18px;
  }

  .car-card {
    width: 100%;
    max-width: 100%;
    padding: 12px;
  }

  .car-card img {
    width: 100%;
    max-width: 100%;
  }

  .car-card h3 {
    font-size: 15px;
  }

  .car-card p {
    font-size: 13px;
  }

  .car-card .location {
    font-size: 12px;
  }

  .view-details {
    font-size: 12px;
  }

  .banner3 {
    width: 95%;
    margin: 15px auto;
  }

  .car-action-section {
    width: 95%;
    gap: 20px;
    margin: 25px auto;
  }

  .card {
    padding: 18px;
  }

  .card h3 {
    font-size: 1.4rem;
  }

  .card p {
    font-size: 0.95rem;
  }

  .action-row {
    gap: 15px;
  }

  .sell-btn {
    font-size: 14px;
    padding: 8px 16px;
  }

  .testimonials-maincard {
    margin-inline: 15px;
  }

  .testimonials-maincard h2 {
    font-size: 24px;
    margin-top: 30px;
  }

  .section-title1 {
    font-size: 24px;
  }

  .testimonials {
    padding: 25px 15px;
  }

  .testimonial-card {
    padding: 18px;
    height: auto;
  }

  .customer-details h4 {
    font-size: 1rem;
  }

  .rating {
    font-size: 14px;
  }

  .star {
    font-size: 14px;
  }

  .testimonial-text {
    font-size: 13px;
  }

  .faq {
    padding: 40px 0;
  }

  .faq-list {
    margin-inline: 15px;
    padding: 12px;
  }

  .faq-question {
    padding: 12px 15px;
    font-size: 14px;
  }

  .faq-answer {
    padding: 0 15px;
    font-size: 13px;
  }

  .faq-toggle {
    font-size: 14px;
  }

  .bottom-banner {
    width: 95%;
    margin: 25px auto;
  }

  .footer {
    padding: 40px 20px 15px;
  }

  .footer-logo {
    width: 200px;
  }

  .footer-col h4 {
    font-size: 16px;
  }

  .footer-col ul li {
    margin-bottom: 14px;
  }

  .footer-col ul li a {
    font-size: 14px;
  }

  .connect .store-buttons img {
    width: 100px;
  }

  .social-icons {
    gap: 15px;
  }

  .social-icons img {
    width: 28px;
    height: 28px;
  }

  .footer-bottom {
    font-size: 14px;
    padding-top: 15px;
  }
}

/* ---------- Extra Small Mobile Devices (320px - 480px) ---------- */
@media (max-width: 480px) {
  .top-banner {
    margin-top: 50px;
  }

  .filter-bar {
    width: 92%;
    padding: 8px;
  }

  .dropdown {
    height: 34px;
    font-size: 12px;
  }

  .tab {
    font-size: 13px;
    padding-bottom: 4px;
  }

  .location-btn {
    height: 40px;
    font-size: 13px;
    gap: 8px;
  }

  .filters {
    width: 92%;
    padding: 10px;
  }

  .all-filters {
    padding: 8px;
    font-size: 13px;
  }

  .filter-section {
    padding: 8px;
  }

  .section-title {
    font-size: 14px;
  }

  .search-input,
  .year-input {
    padding: 5px;
    font-size: 13px;
  }

  .label-title {
    font-size: 14px;
  }

  .brand-checkbox {
    font-size: 13px;
  }

  .content {
    padding: 8px;
  }

  .breadcrumb {
    font-size: 12px;
  }

  .car-list {
    gap: 15px;
  }

  .car-card {
    padding: 10px;
  }

  .car-card img {
    margin-bottom: 8px;
  }

  .car-card h3 {
    font-size: 14px;
  }

  .car-card p {
    font-size: 12px;
    margin: 2px 0;
  }

  .car-card .location {
    font-size: 11px;
  }

  .view-details {
    font-size: 11px;
    margin-top: 8px;
  }

  .banner3 {
    width: 92%;
  }

  .car-action-section {
    width: 92%;
    gap: 15px;
    margin: 20px auto;
  }

  .card {
    padding: 15px;
  }

  .card h3 {
    font-size: 1.25rem;
  }

  .card p {
    font-size: 0.9rem;
    margin-bottom: 15px;
  }

  .action-row {
    gap: 10px;
  }

  .sell-btn {
    font-size: 13px;
    padding: 7px 14px;
  }

  .testimonials-maincard {
    margin-inline: 10px;
  }

  .testimonials-maincard h2 {
    font-size: 20px;
    margin-top: 25px;
  }

  .section-title1 {
    font-size: 20px;
  }

  .testimonials {
    padding: 20px 12px;
  }

  .testimonial-card {
    padding: 15px;
  }

  .customer-details h4 {
    font-size: 0.95rem;
  }

  .rating {
    font-size: 13px;
  }

  .star {
    font-size: 13px;
  }

  .testimonial-text {
    font-size: 12px;
    line-height: 1.5;
  }

  .faq {
    padding: 30px 0;
  }

  .faq-list {
    margin-inline: 10px;
    padding: 10px;
  }

  .faq-question {
    padding: 10px 12px;
    font-size: 13px;
  }

  .faq-answer {
    padding: 0 12px;
    font-size: 12px;
  }

  .faq-toggle {
    font-size: 12px;
  }

  .bottom-banner {
    width: 92%;
    margin: 20px auto;
  }

  .footer {
    padding: 35px 15px 12px;
  }

  .footer-logo {
    width: 170px;
    margin-bottom: 15px;
  }

  .footer-col h4 {
    font-size: 15px;
    margin-bottom: 12px;
  }

  .footer-col ul li {
    margin-bottom: 12px;
  }

  .footer-col ul li a {
    font-size: 13px;
  }

  .connect .store-buttons {
    gap: 8px;
  }

  .connect .store-buttons img {
    width: 90px;
    margin: 5px 5px 10px 0;
  }

  .social-icons {
    gap: 12px;
  }

  .social-icons img {
    width: 26px;
    height: 26px;
  }

  .footer-bottom {
    font-size: 12px;
    margin-top: 20px;
    padding-top: 12px;
  }

  .footer-bottom span:first-child {
    font-size: 20px !important;
  }
}

/* ---------- Very Small Devices (max-width: 360px) ---------- */
@media (max-width: 360px) {
  .top-banner {
    margin-top: 40px;
  }

  .filter-bar {
    width: 90%;
    padding: 6px;
  }

  .tab {
    font-size: 12px;
  }

  .filters {
    width: 90%;
  }

  .card h3 {
    font-size: 1.1rem;
  }

  .card p {
    font-size: 0.85rem;
  }

  .testimonials-maincard h2,
  .section-title1 {
    font-size: 18px;
  }

  .footer-logo {
    width: 150px;
  }
}

/* ---------- Landscape Mode for Mobile ---------- */
@media (max-height: 500px) and (orientation: landscape) {
  .top-banner {
    margin-top: 20px;
  }

  .filters {
    position: static;
  }

  .filter-bar {
    flex-direction: row;
    flex-wrap: wrap;
  }

  .car-list {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* ---------- Print Styles (Optional) ---------- */
@media print {
  .filter-bar,
  .filters,
  .footer {
    display: none;
  }

  .car-card {
    break-inside: avoid;
  }
}

   </style>
  </head>
  <body>
  

     <?php
    include './header.php';
    ?>

    <!-- Top Banner -->
    <div class="top-banner">
      <img src="assets/image/banner car.png" alt="Altroz Ad" />
    </div>

    

    <!-- Filter Navigation Bar -->
    <div class="filter-bar">
      <div class="left-section">
        <select class="dropdown">
          <option>All Categories</option>
          <option>Car</option>
          <option>Bike</option>
          <option>E-Vehicle</option>
          <option>Other Vehicles</option>
        </select>

        <div class="tabs">
          <a href="#" class="tab active">Car</a>
          <a href="#" class="tab">Bike</a>
          <a href="#" class="tab"
            >E–Vehicle <i class="bi bi-caret-down-fill"></i
          ></a>
          <a href="#" class="tab">Other Vehicles</a>
        </div>
      </div>

      <div class="right-section">
        <button class="location-btn">
          <i class="bi bi-geo-alt"></i> Coimbatore
          <i class="bi bi-caret-down-fill"></i>
        </button>
      </div>
    </div>

    <div class="page">
    <!-- Sidebar -->
    <aside class="filters">
      <button class="all-filters"><i class="bi bi-funnel"></i> All Filters</button>

      
      <!-- Brand & Models -->
      <div class="filter-section">
      <h4>Brand & Models</h4>
      <input type="text" placeholder="Search" class="search-input" />
      <p class="label-title">Top Brands</p>
      <label class="brand-checkbox">
        <input type="checkbox" />
        Maruthi Suzuki
        <i class="bi bi-chevron-down"></i>
      </label>
      <label class="brand-checkbox">
        <input type="checkbox" />
        Kia
        <i class="bi bi-chevron-down"></i>
      </label>
    </div>

    <!-- Transmission -->
    <div class="filter-section collapsible">
      <div class="section-title" onclick="toggleSection(this)">
        Transmission
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="checkbox-list">
        <label><input type="checkbox" /> Automatic</label>
        <label><input type="checkbox" /> Manual</label>
      </div>
    </div>

    <!-- Fuel Type -->
    <div class="filter-section collapsible">
      <div class="section-title" onclick="toggleSection(this)">
        Fuel Type
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="fuel-options">
        <label><input type="radio" name="fuel" /> <i class="bi bi-fuel-pump-fill"></i> Petrol</label>
        <label><input type="radio" name="fuel" /> <i class="bi bi-fuel-pump-fill"></i> Diesel</label>
        <label><input type="radio" name="fuel" /> <i class="bi bi-fuel-pump-fill"></i> CNG</label>
        <label><input type="radio" name="fuel" /> <i class="bi bi-fuel-pump-fill"></i> Electric</label>
      </div>
    </div>

    <!-- Year and Body Type -->
    <div class="filter-section collapsible">
      <div class="section-title" onclick="toggleSection(this)">
        Year
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="year-options">
        <input type="text" placeholder="Enter the Year" class="year-input" />
        <div class="body-types">
          <label><input type="checkbox" /> SUV</label>
          <label><input type="checkbox" /> MUV</label>
          <label><input type="checkbox" /> Sedan</label>
          <label><input type="checkbox" /> Hatchback</label>
        </div>
      </div>
    </div>
   
    <!-- Budget -->
    <div class="filter-section collapsible">
      <div class="section-title" onclick="toggleSection(this)">
        Budget
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="checkbox-list">
        <label><input type="checkbox" /> Below ₹5 Lakhs</label>
        <label><input type="checkbox" /> ₹5-10 Lakhs</label>
        <label><input type="checkbox" /> ₹10-15 Lakhs</label>
        <label><input type="checkbox" /> ₹15-20 Lakhs</label>
        <label><input type="checkbox" /> ₹20 Lakhs & above</label>
      </div>
    </div>
    
     <!-- Seats -->
    <div class="filter-section collapsible">
      <div class="section-title" onclick="toggleSection(this)">
        Seats
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="checkbox-list">
        <label><input type="checkbox" /> 4 Seater</label>
        <label><input type="checkbox" /> 5 Seater</label>
        <label><input type="checkbox" /> 6 Seater</label>
        <label><input type="checkbox" /> 7+ Seater</label>
      </div>
    </div>

    <!-- Body Type -->
    <div class="filter-section collapsible">
      <div class="section-title" onclick="toggleSection(this)">
        Body Type
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="checkbox-list">
        <label><input type="checkbox" /> Hatchback</label>
        <label><input type="checkbox" /> Sedan</label>
        <label><input type="checkbox" /> SUV</label>
        <label><input type="checkbox" /> MUV</label>
        <label><input type="checkbox" /> Coupe</label>
        <label><input type="checkbox" /> Convertible</label>
      </div>
    </div>
    </aside>

    <!-- Main Content -->
     <div class = "rightsidebar">
    <main class="content">
      <img src="assets/image/bannerimage2.png" class="banner" alt="Ad" />
      <p class="breadcrumb">Buy Vehicle / Cars / Cars in Coimbatore</p>
      <h2>170 Used cars in coimbatore</h2>

      <div class="car-list">
        <!-- Card x 9 -->
        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>

        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>

        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>

        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>

        <div class="banner3">
        <img src="assets/image/bannerimage2.png" alt="Banner Ad">
        </div> <br> <br> 

       <div class = "container1"></div>
        
       <div class="car-card">
        <div class="corner-ellipse">
          <div class="heart" onclick="toggleLike(this)"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


      <div class="car-card">
        <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>
        
        <div class="car-action-section">
        <div class="card sell-card">
       <h3>Do You Want to <br> Sell a Vehicle ?</h3>
       <p>We are committed to providing our customers with exceptional service.</p>
       <div class="action-row">
      <img src="assets/icon/electric-car.svg.png" alt="electric-car2" style="margin-right: 10px; width:55px;">
      <button class="sell-btn">Sell a Vehicle</button>
      </div>
      </div>
      </div>  <br>

      <div></div>

      
        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>

        
        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>


        
        <div class="car-card">
          <div class="corner-ellipse">
          <div class="heart"><i class="bi bi-heart"></i></div>
          <img src="assets/image/Maruti-Suzuki-New-Swift.png" alt="Car Image"/>
          <h3>Maruti Suzuki Swift VXI 2021</h3>
          <p>25,000 km | Petrol | Manual</p>
          <p class="price">₹ 9.2 Lakh</p>
          <p class="location"><i class="bi bi-geo-alt"></i> Coimbatore</p>
          <a href="#" class="view-details">View Seller Details</a>
        </div>
        </div>

        <!-- Repeat 8 more times (copy-paste or use JavaScript loop in real implementation) -->
        <!-- ... -->
      </div>
    </main>
    </div>
  </div>

  <!-- Testimonials Section -->

        <section class="testimonials-maincard">
            <h2 class="section-title1">User Reviews & Ratings - What Our Customers Say</h2>

            <div class="testimonials">
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="customer-info">

                            <div class="customer-details">
                                <h4>🏍️ Priya S. – Coimbatore</h4>
                                <div class="rating">
                                    <span class="star">★★★★★</span>
                                    <span style="margin-left: 10px; color: #666;">(4.5/5)</span>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"Great range of bikes and quick service!" Found the exact model I was looking for, and they delivered it on time. Customer support was responsive even after the sale.</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="customer-info">

                            <div class="customer-details">
                                <h4>🏍️ Priya S. - Coimbatore</h4>
                                <div class="rating">
                                    <span class="star">★★★★★</span>
                                    <span style="margin-left: 10px; color: #666;">(4.5/5)</span>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"Great range of bikes and quick service!" Found the exact model I was looking for, and they delivered it on time. Customer support was responsive even after the sale.</p>
                    </div>
                </div>
            </div>
        </section>

<div class="bottom-banner">
  <img src="assets/image/banner car.png" alt="Banner4 img">
</div>



     <?php
            include './footer.php'
            ?>

<!-- jQuery CDN (required for your existing $(document).ready and other jQuery usage) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS Bundle (should be at the end of body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- <script src="./detail.js"></script> -->
    <script src="./header_footer.js"></script>

    <script>
        


// heart icon
function toggleLike(el) {
      el.classList.toggle("liked");
      el.textContent = el.classList.contains("liked") ? "❤️" : "♡";
    }


    
  function toggleSection(element) {
    const section = element.nextElementSibling;
    const isVisible = section.style.display === 'flex';
    
    // Toggle visibility
    section.style.display = isVisible ? 'none' : 'flex';
    
    // Toggle icon rotation class
    element.classList.toggle('open', !isVisible);
  }


    </script>
  </body>
</html>


































































































