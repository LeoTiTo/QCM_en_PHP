# 📘 QCM en PHP

Un projet d'application de **Questionnaire à Choix Multiples (QCM)** développé en PHP. Ce projet permet de créer, gérer et répondre à des questionnaires avec une interface conviviale et une gestion des données via une base de données MySQL.

---

## 📂 Structure du Projet

### 🖥️ Code Source
- **`index.php`** : Point d'entrée de l'application, page principale.
- **`connect.php`** : Script de connexion à la base de données MySQL.
- **`menu.php`** : Composant de navigation pour accéder aux différentes pages.
- **`niveau.php`** : Gère les niveaux de difficulté ou d'accès du QCM.
- **`QCM.php`** : Logique principale pour gérer les questions et options du QCM.
- **`reponse.php`** : Gère les réponses soumises et affiche les résultats.

### 🗄️ Base de Données
- **`BDQCM.SQL`** : Script SQL pour configurer la base de données requise par l'application.

### 🎨 Style
- **`style.css`** : Fichier de styles pour personnaliser l'interface utilisateur.

---

## 🚀 Fonctionnalités

- **Gestion des Questions** : Ajout, modification et affichage des questions du QCM.
- **Gestion des Réponses** : Validation des réponses et affichage des résultats.
- **Niveaux de Difficulté** : Support pour des niveaux ou catégories personnalisables.
- **Connexion à une Base de Données** : Persistance des données via MySQL.

---

## ⚙️ Configuration

1. **Installation des Dépendances** :
   - Assurez-vous d'avoir un serveur local comme [XAMPP](https://www.apachefriends.org/index.html) ou [WAMP](https://www.wampserver.com/).

2. **Configuration de la Base de Données** :
   - Importez le fichier `BDQCM.SQL` dans votre gestionnaire de base de données (ex. phpMyAdmin).
   - Mettez à jour les informations de connexion dans `connect.php` (hôte, utilisateur, mot de passe, nom de la base de données).

3. **Démarrage du Serveur** :
   - Placez le dossier du projet dans le répertoire `htdocs` de votre serveur local.
   - Accédez à l'application via `http://localhost/QCM_en_PHP`.

---

## 📸 Aperçu

![image](https://github.com/user-attachments/assets/b693e9bd-5b1e-468c-b5ae-98561d18522a)
![image](https://github.com/user-attachments/assets/c259ba57-9652-4fdf-9d34-626feaceb611)
![image](https://github.com/user-attachments/assets/883a4f5b-7344-4c4f-9cd7-6ed7d4064dbb)


---

## 🛠️ Technologies Utilisées

- **Langages** : PHP, HTML, CSS
- **Base de Données** : MySQL
- **Serveur Web** : Apache

---

## 💡 Prochaines Améliorations

- Ajout d'une authentification utilisateur.
- Tableau de bord administrateur pour gérer les questionnaires.
- Design réactif pour une meilleure expérience sur mobile.

---

## 🤝 Contribution

Les contributions sont les bienvenues ! Veuillez ouvrir une issue ou soumettre une pull request pour toute suggestion ou amélioration.

---

## 📝 Licence

Ce projet est sous licence **MIT**. Consultez le fichier `LICENSE` pour plus de détails.
