<!DOCTYPE html>
<html lang="en" dir ="ltr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de contrat </title>

<link  rel ="stylesheet" href="side.css">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'rel='stylesheet'>
</head>

<body>
 <div class="sidebar">
     <div class ="logo-content">
        <div class ="logo">
       
            <div class="logo_name">Chef Service suivi</div>
        </div> 
        <i class='bx bx-menu-alt-right' id="btn"></i>
     </div>
<ul>
    <li>
        <i class="bx bx-search"></i> 
        <input type="text"  placeholder="Search...">
        <span class="tooltip"> Search</span>
       </li>
 <li>
   <a href="#">
    <i class='bx bxs-grid-alt' ></i>
    <span class="links_name">Dashboard</span>
   </a>
   <span class="tooltip"> Dashboard</span>
 </li>
 <li>
    <a href="#">
        <i class='bx bxs-folder-open' ></i>
       <span class="links_name">Profile </span>
    </a>
        <span class="tooltip">Profile</span>
   </li>
   
   <li>
    <a href="#">
    <i class='bx bxs-folder-open' ></i>
       <span class="links_name">Gestion du contrat</span>
    </a>
       <span class="tooltip">Contrats</span>
   </li>
   
   <li>
    <a href="#">
        <i class='bx bxs-bell bx-flip-horizontal' ></i>
       <span class="links_name">Fournisseurs</span>
    </a>
       <span class="tooltip">Fournisseurs</span>
   </li>
   <li>
    <a href="#">
    <i class='bx bxs-cog'></i>
       <span class="links_name">Setting</span>
    </a>
       <span class="tooltip">Setting</span>
   </li>
</ul>
<div class="profile_content">
 <div class="profile">
  <div class="profile_details">
        <img src="login.JPG"alt="  ">
        <div class="name_job">
            <div class="name">Gestion du contrat</div>
            <div class="job">Deriction d'Achat</div>
      </div> 
     </div>
     <i class='bx bx-log-out' id="log_out" ></i>
    </div>
   </div>
 </div>

 

 <script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

         btn.onclick =function toggle() {
         sidebar.classList.toggle("active");
     }

     searchBtn.onclick = function(){
         sidebar.classList.toggle("active");
         }

</script>


   
</body>
</html>