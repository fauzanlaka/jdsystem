 <span class="boldtext">1. How do I install DailyNotes onto my wordpress blog? </span> 
<div class="indent"> 
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p> 
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;DailyNotes.&quot; Via ftp, upload the &quot;DailyNotes&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p> 
  <p>Next you need to select DailyNotes and make it your default theme. Click on the design link, and under the themes tab locate DailyNotes from the selection of themes and activate it. Your blog should now be updated with your new theme. </p> 
<p>Finally, once the theme has been activated, you should navigate to the Appearances > DailyNotes Theme Options page. Here you can adjust settings pertaining to theme's display. Once you have adjusted whatever settings you would like to change click the "save" button. You must click the "save" button for the options to be saved to the database. Even if you did not change anything you should click the save button once before using the theme to insure that the database has been written correctly.</p> 
</div> 
<span class="boldtext">2. How do I add the thumbnails to my posts? </span> 
<div class="indent"> 
  <p>DailyNotes utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Name&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandwidth left) </p> 
  <p><span class="style1">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the DailyNotes directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try following <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p> 
</div> 
<span class="boldtext">3. How do I add my title/logo? </span> 
<div class="indent">In this theme the title/logo is an image, which means you will need an image editor to add your own text. You can do this by opening the blank logo image located at Photoshop Files/logo_blank.png, or by opening the logo PSD file located at Photoshop Files/logo.psd. Replace the edited logo with the old logo by placing it in the following directory: theme/DailyNotes/images, and naming the file "logo.png". If you need more room, or would like to edit the logo further, you can always do so by opening the original fully layered PSD file located at Photoshop Files/DailyNotes.psd  </div> 
 
<span class="boldtext">4. Using custom post types</span> 
<div class="indent">The power of DailyNotes is in its custom post types. These post types will allow you to add different types of posts to your blog, including: notes, photos, videos, audio files, quotes and links. You can access these post types from the main navigation on the right side of your WordPress Dashboard. You will see a box for each post type, and within the box there will be three links. For example, if you are adding a Video post you will see three links within the Video box: Video, Add Video and Taxonomies. To add a new video post, click the "Add Video" link and fill in the required fields. The "Taxonomies" link allows you to create different categories of posts for each post type. Categories created using the main category page in wp-admin will not work for this theme.</div> 