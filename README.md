# First-Project
Initial project using sass
# Description
<h3> Sass </h3>
1. <strong> style.sass </strong>
<p> The file where you want to write the main styles of the site and where other style files are connected. Everything that you write to this file will be compiled in style.css which will be in the <strong>css</strong> </p> folder
2. <strong> normalize.sass </strong>
<p> A regular file where each html tag is normalized, and there are also small reset styles. Without this file, you will have small problems with cross-browser compatibility </p>
3. <strong> media.sass </strong>
<p> There are several mixins here that will help you prescribe media queries </p>
4. <strong> mixins.sass </strong>
<p> The file itself has already assembled mixins that will help you speed up your code writing. You can create mixins in it yourself. The file itself is not compiled into the main file, you can only call any of the mixins, only then it will compile. </p>
5. <strong> sprites.sass </strong>
<p> Here the file itself is not simple, it works with compass. Usually needed to generate sprites. Also inside there are several mixins for icons and for connecting any images to the stylesheet. In projects, you can see how each mixin in the file works. </p>
<h3> js </h3>
1. <strong> custom.js </strong>
<p> This is your own file where you will connect plugins, write your own code, etc. </p>
2. <strong> jquery-3.2.1.min.js </strong>
<p> Jquery Library 3.2.1 </p>
<h3> img </h3>
In this folder you save images of the site, also inside this folder you will see the icons folder where you can save sprites, how sprites are created you will see in the first video of this project.
<h3> .sass-cache </h3>
You do not touch this folder, you can delete it, it can be described as a sass cache, this folder will always be created when you save sass. Therefore, it makes no sense to delete it before the completion of the project.
<h3> config </h3>
The main file that you will have is <strong> config </strong>, it is needed to configure sass compilation.
