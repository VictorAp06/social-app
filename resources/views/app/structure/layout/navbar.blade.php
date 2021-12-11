<div class="navbar">
    <div class="navbar_left">
        <img class="navbar_logo" src="/assets/imagens/social.jpeg" alt="logo"/>
        <div class="input-icons">
            <input class="input-field" type="text" placeholder="Pesquisar na Social Uniube">
        </div><!--input-icons--> 
    </div><!--div left--> 
    <div class="navbar_center">
        <a href="#" class="active_icon">
            <i class="fas fa-home"></i>
        </a>  
        <a href="#" class="active_icon">
            <i class="fas fa-user-friends"></i>
        </a>
        <a href="#" class="active_icon">
            <i class="fas fa-play-circle"></i>
        </a>
    </div>
    <div class="navbar_right">
        <div class="navbar_right_profile">
            <img src="/assets/imagens/andre.jpeg" alt="profile">
            <span>{{ Auth::user()->first_name }}</span>
        </div> <!--navbar_right_profile-->
        <div class="navbar_right_links">
            <i class="fas fa-plus"></i>
            <i class="fab fa-facebook-messenger"></i>
            <i class="fas fa-bell"></i>
            <i class="fas fa-arrow-down"></i>
        </div> <!--navbar_right_links-->
   </div> <!--navbar_right-->
</div> <!--navba--> 