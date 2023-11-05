var sideBarIsOpen = true;

toggleBtn.addEventListener( 'click', (event) => {
    event.preventDefault();

    if(sideBarIsOpen){
        dashboard_sidebar.style.width = '10%';
        dashboard_sidebar.style.transition = '0.3s all';
        dashboard_content_container.style.width = '90%' ;
        dashboard_logo.style.fontsize = '60px' ;
        userImage.style.width = '60px';
        menuIcone = document.getElementsByClassName('menuText');

        for(var i=0 ; i< menuIcone.length;i++){
            menuIcons[i].style.display = 'none';
        }

        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
        sideBarIsOpen = false;
    } else{
        dashboard_sidebar.style.width = '20%';
        dashboard_content_container.style.width = '80%';
        dashboard_logo.style.fontsize = '80px';
        userImage.style.wiidth = '80px';

        menuIcons = document.getElementsByClassName('menuText');

        for(var i=0 ; i<menuIcons.length ; i++){
            menuIcons[i].style.display = 'inline-block';
        }

        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
        sideBarIsOpen = true;
    }
})