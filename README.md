                                   “Language Header” Test task Documentation 
 

Before proceeding further, I would like to inform that I created two versions for this plugin. First, I would like to answer some questions regarding both versions. 
 
Q) What is the functionality of the first version? 
First version is a simple WordPress plugin that we can install normally and it will automatically make the Language bar appear below the main header of the website. No configuration is needed in this version.  
 
Q) Why I created the second version? 
While testing the first version, I found major bugs such as: 

- Confliction with the themes. 
- Sticky functionality not working if the website already has a sticky bar or multiple header bars. 

To overcome these two issues, I restructured the plugin and developed a new version which works through short codes. The first version worked just by installing the plugin. While the second version will work after placing the short code as the respective place and this can work with any WordPress theme be it ready-made or a custom theme. Since time was a constraint, this is the best I could come up with.   

Plugin development files. https://prnt.sc/Wr4UBh2TcWup  
 
I have added the custom CSS files to the respective “CSS” folder. https://prnt.sc/0tZQtEHJJFlN  
In the language.css file I have added all the CSS of the plugin 
“img” folder features all the images of the country flags for language purpose.  
“Fonts” folder consists of font stylesheets. 
In the “js” folder I have added the alert popup script. 
In the root language_header.php file, I have included external css, js and font awesome cdn. https://prnt.sc/vIOnOWTqfROe  
 
Also added short code hooks, admin menu hook and their respective callback functions. As and when we activate a plugin, the hooks automatically generate the “Header Language” option in the WordPress dashboard  menu (https://prnt.sc/osHBVb-8h5-Q) by clicking on which you can see the listings of the language header short codes.  
 
In the language_list.php file, I have added the plugin’s HTML. 
 
The menu_page.php page lists the short codes for language section. There are two types of short codes to be precise. 
a) First short code is for the PHP Tags which we can place in the child theme or anywhere in the PHP files where you want to language bar to appear. 
b) Second short code is for widgets, posts, and any kind of theme editor. 

How to use the plugin? 

- Upload plugin normally on the site from admin dashboard. 
- Install and activate plugin from plugin menu. 
- Once the plugin is activated, “Header Language” menu will appear on the LHS in admin panel. 
- Click on the “Header Language” option and there you can see the listings of the short codes.  
- Copy the php shortcode and go to Appearance > theme file editor 
- In theme file editor click on theme header file (header.php) from the right-side bar. 
- Paste the php shortcode in the “header.php” file after the header calling function as shown below: 
 get_header(); 
  <?php echo do_shortcode('[Language-Header]'); ?> 

Go to home page and do hard refresh (Ctrl + Shift + R) or clear cookies. Now you will be able to see the new Header Language section below the main header of the website. Language section is fixed, responsive, and with horizontal scrolling for short screen devices. Language flags are clickable and will show only the alert popup as of now (language changing functionality not added as per our discussion). 

Plugin can be easily deactivated and deleted.   
 
The plugin shows the static data as of now. All the language links are defined in the code only and if we are to make them modifiable, then we will have to add a custom functionality in the plugin which will allow the users to change/modify links and flag images easily from the admin panel (from the same area where you are seeing the short codes). Furthermore, the edit option will be provided only to particular users like Admin, Editors, etc. based on their roles. This will be a bit more time taking but easily feasible. 

If we are to not use the plugin and have to define the functionality directly on the existing WordPress theme, then I can simply add the language section in the child theme. This will show the language bar section on whole website including every functionality that is developed. 

 

 

----------------> Happy WordPress-ing!  
