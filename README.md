# Lägenhetsuthyres Portal

-   Hemsida där man kan hyra och hyra ut lägenheter.

![Alt Text](https://media.giphy.com/media/tHWaJAKfa7EWOBSNgQ/giphy.gif)

# Hur hemsidan fungerar:

-   Skapa användare.
-   Logga in & Logga ut.   
-   Ladda upp bilder och text.
-   Landningssida med olika lägenheter.
-   Intresseanmälan för lägenhet.


# Code Review By Simon & Réka

Based from [this](https://github.com/MadosMark/LagenhetsuthyrningsPortal/commit/47e7819b2792fe13bfe09572dafa9edc6d4b69bc) version.

-   Tests does not work without the Unit map.
-   Would be nice to see the listings without the need of an account.
-   Labels in the register form are missing.
-   Some leftover indentation and newlines.
-   Maybe consider adding an edit / delete option to the apartment-listings.
-   Add a factory for apartments aswell, for testing!
-   As far as we can tell Vue enabled/configured but never used.
-   Try to avoid inline-styling like in `apply.blade.php:11`.
-   `apply.blade:5` you forgot a comment there.
-   `ProfileController.php:22` you forgot a comment there.
-   `RegisterController.php:17`: Maybe add a minimal length for password in the validation.
-   The `_variables.scss` doesn't seem to be used anywhere?
-   The only purpose of `app.scss` file seems to be loading another `app.css` file?
-   `login.blade.php` doesn't extend the layout, and looks quite different (code-wise) from the rest of the views.
-   `PublishController.php` Might be a good idea to use the Apartment model with something like `$apartment = new Apartment` and adding the data directly to the model instead of using `insert`.
-   `dashboard.blade.php` & `publish.blade.php`: I can see the apply options for my own listings. Might be solved with an if-else-statement.
-   `DashboardController.php` Might be a good idea to use pagination or some sort of chunk loading behavior for the dashboard.
-   "Skicka in intresseanmälan" button does not work (Maybe it should be disabled?).
-   Error prevention in the signup form, the popup only seems to work on the username-field. Might just be buggy for me though.
-   Can't find any n+1 problems!
-   The site looks really great, good job! :tada:


