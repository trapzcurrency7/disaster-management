<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'
      rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <link rel="stylesheet" href="<?= base_url('/public/assets/css/sidebar.css')?>">
  <body>
    <div class="sidebar">
      <input type="hidden" id="csrfTokenId" name="" value="<?=csrf_token()?>">
      <div class="logo-details">
        <div class="logo_name"><?= Session::get("user_name")!=''?Session::get("user_name"):"Admin" ?></div>
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav-list">
        <li class="dashboard">
          <a href="<?=base_url("/admin/dashboard")?>">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li class="volunteers">
          <a href="<?=base_url("/admin/volunteers")?>">
            <i class='bx bx-user'></i>
            <span class="links_name">Volunteers</span>
          </a>
          <span class="tooltip">Volunteers</span>
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
  <!-- <script src="<?=base_url('/public/assets/adminJs/common.js')?>"></script> -->
    <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  // searchBtn.addEventListener("click", ()=>{
  //   sidebar.classList.toggle("open");
  //   menuBtnChange(); //calling the function(optional)
  // });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  var base_url = "<?= base_url() ?>";
  </script>

  </body>
</html>