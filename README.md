## Installation de projet

* Aller dans le fichier .env et changez le database information
* Telecharger les bibliotheque avec npm install
* Puis faire npm run dev
* Installer composer require laravel/ui
* Installer bootstrap php artisan ui bootstrap
* Créer un base de donnez cdm2022
* Declencher le server php artisan serve
* Pour installer les table taper la ligne de commande suivant: php artisan migrate
* D'abord il faut envoyere les information seeder le base de donner php artisan db:seed --class=GroupesSeeder
* D'abord il faut envoyere les information seeder le base de donner php artisan db:seed --class=EquipesSeeder

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif