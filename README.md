# simplehtml5upload

A html5/jQuery lightweight form upload for images.

Preview and description of the file features are available

# How to

style.css
---------

Add the height / width on the filezone id wished

upload.js
---------
Line 48 :

actype = The mime type that you want to allow, just add / remove the value wanted 
maxweight = The weight of the file maximum, value in octet
maxwidth = 150; maximum width of the image
maxheight = 150; maximum height of the image

Line 134 : Set the path to the php script

152 : Success message upload of server side, you may want add your url before the the filename

upload.php
----------

Line 15 :

Add the max weight wanted

Line 34 :

Path to the final directory of the uploaded image
