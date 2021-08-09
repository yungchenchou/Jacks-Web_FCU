# Getting Start

## Environment setting
### Composer

- Step 1: Download Composer from <a href="https://getcomposer.org/download">HERE</a>


## Initalize a new project

### <span style="background: rgb(192, 192, 192);">Approach 1:</span>
The documentation can be found at <a href="https://laravel.com/docs/5.8">https://laravel.com/docs/5.8</a>

```
composer create-project --prefer-dist laravel/laravel projectName
```
<img src='imgs/Fig001.png' />


### <span style="background: rgb(192, 192, 192);">Approach 2:</span>

You can use following instructions to create a Laravel project:
```
laravel new projectName
```
<img src="imgs/Fig004_create_project_use_laravel.png" alt="creat project use laver method">

<h4 style='background: rgb(255, 255, 0);'>Troubleshooting</h4>
If you got the truble with the ```laravel new projectName``` instruction on Mac System, then you can apply following steps to solve the problem. 

* Step 1: edit '~/.bash_profile'
```vim ~/.bash_profile ```
* Step 2: add ```export PATH=~/.composer/vendor/bin:$PATH``` to .bash_profile file
* Step 3: Reopen the Terminal and excute ```laravel new projectName``` instruction again to create the new project.
  
### <span style="background: rgb(255, 255, 0);">Preview the result of laravel project</span>
run the following instructions in Termial, then the tool will show the link address.
```
php artisan serve
```
<img src='imgs/Fig002_php_artisan_serve.png'/>
<img src='imgs/Fig003_preview_laravel_project.png' style="border: solid 1px rgb(0, 0, 0);"/>

## Using xampp to preview Laravel project

### Mac OS
* Step 1: install apache on Mac
* Step 2: download MySQL server dmg file from [<a href="https://dev.mysql.com/downloads/mysql/">HERE </a>]   
* Step 3: edit .bash_profile file in user's home folder ``` vim ~/.bash_profile ``` then add ``` export PATH="/usr/local/mysql/bin:$PATH" ``` setting into the file. 
<img src='imgs/Fig012_edit_bash_profile.png' />
* Step 4: use ``` source ~/.bash_profile ``` to apply the settings.
<img src='imgs/Fig013_source_bash_profile.png' />
* Step 5: Set root's password of MySQL 
  * Step 5.1: run ``` sudo mysql start ``` to start mysql server
  * Step 5.2: login to mysql server with ``` mysql -u root ``` instruction in terminal. <span style="background: red;">Note: the default password of root is blank (i.e. no password)</span>
  * Step 5.3: exit mysql after stting root password
* Step 6: create a database for your Laravel project
  * Step 6.1: login mysql server using root with instruction ``` mysql -u root -p ```
<img src='imgs/Fig013-1.png'>
* Step 7: Download <a href="https://dev.mysql.com/downloads/file/?id=488575">MySQL workbench</a> and install it on Mac 
* Step 8: manage database by using MySQL workbench
<img src='imgs/Fig014.png'>
<img src='imgs/Fig015.png'>
<img src='imgs/Fig016.png'>
<img src='imgs/Fig017.png'>
<img src='imgs/Fig018.png'>
<img src='imgs/Fig019.png'>
<img src='imgs/Fig020.png'>
<img src='imgs/Fig021.png'>
<img src='imgs/Fig022.png'>
<img src='imgs/Fig023.png'>