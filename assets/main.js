function active_links(e,t){if(url=window.location.pathname.replace("/",""),selection="",t){if(anchor=window.location.hash,anchor)switch(anchor){case"#css":selection="a[title='CSS']";break;case"#animations":selection="a[title='Animations']";break;case"#design":selection="a[title='Design']"}else switch(url){case"index.php":case"":selection="a[title='footer_Home']";break;case"about.php":selection="a[title='footer_About']";break;case"pp.php":selection="a[title='footer_Past_Projects']";break;case"blog.php":selection="a[title='footer_Blog']";break;case"contact.php":selection="a[title='footer_Contact']";break;case"skills.php":selection="a[title='HTML']";break;case"indexfr.php":selection="a[title='footer_French']"}$(selection).attr("class",e)}else{switch(url){case"":selection="a[title='Home']";break;case"skills.php":e="dropbtn-current",selection="button[title='Skills']";break;case"blog.php":selection="a[title='Blog']";break;case"pp.php":selection="a[title='Past_Projects']";break;case"about.php":selection="a[title='About']";break;case"contact.php":selection="a[title='Contact']";break;case"indexfr.php":selection="a[title='French']";break;case"index.php":selection="a[title='Home']"}$(selection).attr("id",e)}}