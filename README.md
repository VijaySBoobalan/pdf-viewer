<p><strong>PDF Viewer</strong></p>
<ul>
<li>This Projects Depend on the View the PDF file by uploaded Users.</li>
<li>This Project have the Login, Register and logout interface.</li>
<li>Your can directly Register and your can upload the PDF, then your can view it.</li>
<li>On the left side, all uploaded files displayed by uploaded by yourself only.</li>
<li>Then if your click the file, Then your can view the pdf on right side.</li>
<li>In, top of the page, your can update the pdf file, if your need to change the file.</li>
</ul>
<p><strong>Project Running commands</strong></p>
<ol>
<li>Clone this project into your System.</li>
<li>Then, kindly install the vendor folder. <code>composer install</code>.</li>
<li>Then, copy the <code>.env.example</code> file. then name it as <code>.env</code>.</li>
<li>After the, &nbsp;need to key generate, using the command of<code> php artisan key:generate</code>.</li>
<li>Please provide the Your <strong>database name, and username and password</strong> of the your server.</li>
<li>likely this, <code>DB_DATABASE=DB_NAME</code>,<code>DB_USERNAME=UserName</code>,<code>DB_PASSWORD=Password</code>.</li>
<li>The execute the migration command <code>php artisan migrate:fresh</code>.</li>
<li>Finally , Your can run the Project. The command for execution is<code> php artisan serve</code>.</li>
<li>Then, this project running on the <a href="http://localhost:8000/login">http://localhost:8000/login</a>.</li>
</ol>
<p><strong>Project Flow</strong></p>
<ol>
<li>if Your have an account, Then your will proceed with the <strong>login</strong>, if else, tour can see the <strong>Sign Up</strong> option. Click on it, then please provide the details. then your can access it.</li>
<li>On the left side, your can see the <strong>file uploading option</strong>. please choose the file, then upload it. after the upload, your can see the uploaded file on the left side.</li>
<li>if your click the uploaded file, it view on the right side of the page.</li>
<li>In, top of the page, your can update the pdf file, if your need to change the file.</li>
<li>Logout option is provided in the top of the right side page.</li>
<li>In top of the right side, your see your user name, click on it, the toggle will open, here your can see the <strong>logout </strong>Button.</li>
<li>If your click the Logout Button, the session goes to expire.</li>
</ol>
