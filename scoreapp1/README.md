ScoreApp projekti
 ## Luo uusi migrations - tiedosto
 vendor/bin/phinx create MyMigration

 ## Aja migrations tietokantaan
 vendor/bin/phinx migrate -e development

 ## Peruuta muutokset
 vendor/bin/phinx rollback -e development

 ## Tee uusi seeds - tiedosto
 vendor/bin/phinx seed:create UserSeeder

 ## Aja seed:it tietokantaan
 vendor/bin/phinx seed:run  

 # KÄYNNISTYS
 CD '.\Scorecard App\' 
 php -S localhost:8888