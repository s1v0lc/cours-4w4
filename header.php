    <header id="menu" class="global">
        <label id="burger" for="chk_burger">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path></svg>
        </label>
        <input type="checkbox" id="chk_burger">
        <?php wp_nav_menu(array("container"=>"nav")); ?>
    </header>