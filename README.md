# School project : Wild Circus
### Challenge
5 months ago, in order to become a "Wilder" (Wild Code School trainee), the school asked me to create a simple static web page, the Wild Circus. At that time, I only knew a little HTML and CSS.

I have since learned to develop great websites with multiple dynamic features.

Near the end of my 5 months trainings, the school gave me the opportunity to work on a new application on my own.

I had up to 2 days to complete it.
They asked me to build a new Wild Circus experience with all the new skills that I have acquired!
I was free to design this experience as I wish.

Here is the link to my very first website, with only HTML and CSS : https://codepen.io/Delphinus_dev/pen/oRYoQv

You can now discover the new improved version! (I will update it regularly)
### Getting Started
#### Prerequisites
* Check composer is installed
* Check yarn & node are installed
#### Install
* Clone this project
* Run composer install
* Run yarn install
#### Working
* Copy .env to .env.local and enter your credentials for the database (line 32)
* Run php bin/console doctrine:database:create
* Run php bin/console doctrine:migrations:migrate (creates the tables)
* Run php bin/console doctrine:fixtures:load (creates entries in the database)
* Run symfony server:start (launches your local php web server)
* Run yarn run dev --watch (launches the local server for assets)

### Built With
* PHP
* Symfony
* twig
* phpMyAdmin
* javascript
* This Bootstrap sidebar template : https://codepen.io/jamiebrs/pen/zJBLWZ
* AND MY IMAGINATION :D
