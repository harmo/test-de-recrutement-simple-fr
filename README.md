Test de recrutement (simple)
============================

Ce dépôt propose un test de recrutement (simple) pour évaluer les 
compétences du candidat en programmation orientée objet (POO) avec une 
approche dirigée par les tests (TDD).

Principe
--------

Pour préparer votre test, il suffit de :

	$ git clone https://github.com/duboisnicolas/test-de-recrutement-simple-fr.git
	$ cd test-de-recrutement-simple-fr/
	$ rm -rf solution

L'énoncé se trouve dans `docs/fr/Énoncé.pdf`.

Le candidat peut exécuter la série de tests en faisant :

	$ cd tests/
	$ sh run_tests.sh

Durée du test
-------------

30 minutes devraient suffire pour finir l'exercice.

Description du dépôt
--------------------

* `docs/` contient l'énoncé en français ;
* `lib/` contient la librairie PHPUnit qui a servi à écrire la suite de 
tests unitaires ;
* `solution/` propose une solution possible au problème ;
* `src/` est le répertoire de travail du candidat (fichiers vides) ;
* `tests/` contient la suite de tests unitaires.
