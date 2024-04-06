<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'
      rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
  </head>
  <link rel="stylesheet" href="<?= base_url('/public/assets/css/sidebar.css')?>">
  
  <body>
    <div class="sidebar">
      <div class="logo-details">
        
        <div class="logo_name">Acervo de codigo</div>
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Home</span>
          </a>
          <span class="tooltip">Home</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="links_name">Usúario</span>
          </a>
          <span class="tooltip">Usúario</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-chat'></i>
            <span class="links_name">Mensagens</span>
          </a>
          <span class="tooltip">Mensagens</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="links_name">Analytics</span>
          </a>
          <span class="tooltip">Analytics</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-folder'></i>
            <span class="links_name">Arquivos</span>
          </a>
          <span class="tooltip">Arquivos</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cart-alt'></i>
            <span class="links_name">Pedido</span>
          </a>
          <span class="tooltip">Pedido</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart'></i>
            <span class="links_name">Salvos</span>
          </a>
          <span class="tooltip">Salvos</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog'></i>
            <span class="links_name">Configurações</span>
          </a>
          <span class="tooltip">Configurações</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="../img/perfil.jpg" alt="profileImg">
            <div class="name_job">
              <div class="name">Lucas Araújo</div>
              <div class="job">Dev</div>
            </div>
          </div>
          <a href="Login.html" >
          <i class='bx bx-log-out' id="log_out"></i>
          <span class="links_name">Sair</span>
        </a>
        <span class="tooltip">Sair</span>
        </li>
      </ul> 
    </div>
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