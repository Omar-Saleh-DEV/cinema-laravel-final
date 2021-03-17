INSTALATION:

composer update
php artisan migrate --seed


My step by step sheet for Laravel  course with Cyril Bosson (by Omar Saleh)



I. ---PREREQUISITES---
	I.1.TIPS/PROBLEMS with setup (my side):

		- make sure you are running on main disc with admin rights
		- AVG or Avast (AVG for me) may cause problems by deleting 
			the server.php folder on creation
		=> Solution: Create expection via antivirus program
		If: error 1071:
		Add to app/Providers/AppServiceProvider.php :

		use Illuminate\Support\Facades\Schema;

		public function boot()
		{
    		Schema::defaultStringLength(191);
		}

	I.2.VERSION CHECK: 

		npm -v
		node -v
		php -v


	I.3.Initial setup INSTALS/UPDATES:
 
		npm install
		composer update (if vendor folder is non-existant)
		composer install (if not installed)
		npm run dev
		php artisan serve
		.env => change db name (using MySQL here)
     		     => adapt port


II. ---PROJECT SUBMISSION---

- Using Cyril's Starter from  https://github.com/cyrilbosson/dev3-laravel 
 git clone https://github.com/cyrilbosson/dev3-laravel.git

	II.1. Creation de modèle (artiste, cinema, country, movie, room, session et user)
	II.2. Créer une nouvelle migration pour définir la clé étrangère
	II.3. Gérer les liaisons
	II.4. Ajouter les champs manquants pour chaque tables
	II.5. Adapter les relations
	II.6. Créer, gérer et sauvegarder les entrées
	II.7. Listing pour les modèles concernés
	II.8. Seeders
	II.9. Routes
	II.10. Gestions des images
	II.11. Authentification

