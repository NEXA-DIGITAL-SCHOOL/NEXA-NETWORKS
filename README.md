# Cahier des Charges : NEXA-NETWORKS

## Introduction
Ce document présente le cahier des charges pour la conception et le développement de NEXA-NETWORKS. L’application sera réalisée en HTML5 sémantique, CSS3, JavaScript Vanilla pour le frontend et PHP avec MySQL pour le backend. L’architecture du projet suivra le modèle MVC (Model-View-Controller) avec une séparation claire des services et des repositories. Des mesures de sécurité comme la protection contre les failles XSS, les injections SQL et les attaques CSRF seront mises en place.

---

## Fonctionnalités

### 1. Authentification et Gestion des Comptes Utilisateurs
- **Inscription :**
  - Champs requis : nom d’utilisateur, email, nom, prénom, date de naissance, mot de passe.
  - Validation de l'email avant activation du compte (par envoi de lien ou de code de vérification).
  - Contraintes sur le mot de passe :
    - Minimum 8 caractères.
    - Contenir au moins une majuscule, un chiffre, une lettre et un caractère spécial.
- **Connexion :**
  - Authentification via email et mot de passe.
- **Sécurité :**
  - Stockage des mots de passe hashés (algorithme comme bcrypt).
  - Utilisation de jetons CSRF pour toutes les actions sensibles.

### 2. Gestion de Profil
- L’utilisateur peut modifier :
  - Son pseudonyme.
  - Son image de profil (upload).
- Les profils des utilisateurs sont visibles par les autres via une icône ou un lien.

### 3. Mur Commun
- **Publications :**
  - Texte, vidéos, markdown, GIFs (intégration avec Giphy).
  - Chaque publication doit inclure :
    - Date et heure de publication.
    - Boutons pour liker ou disliker.
  - Possibilité pour les utilisateurs de supprimer leurs publications.

---

## Architecture Logicielle

### Modèle MVC (Model-View-Controller)
- **Model :** Gestion de la logique métier et interaction avec la base de données.
- **View :** Rendu des pages (HTML5 et CSS3) avec une mise en avant du mode sombre.
- **Controller :** Traitement des requêtes et gestion des réponses.

### Services et Repositories
- **Services :** Logique métier, validation des données, gestion des jetons CSRF.
- **Repositories :** Accès aux données en base (SQL).

---

## User Stories

### Utilisateur lambda

1. **En tant qu'utilisateur,** je veux pouvoir m'inscrire en fournissant mon nom, prénom, email, date de naissance et mot de passe, un token donné par l'école afin de créer un compte.
   - **Critères d'acceptation :**
     - Tous les champs requis doivent être remplis.
     - Le mot de passe doit respecter les règles de complexité.
     - Un email de validation est envoyé après l'inscription.

2. **En tant qu'utilisateur,** je veux recevoir un email de validation pour activer mon compte afin d'assurer sa sécurité.
   - **Critères d'acceptation :**
     - L'email de validation contient un lien ou un code valide.
     - Le compte ne peut pas être utilisé tant qu'il n'est pas activé.

3. **En tant qu'utilisateur,** je veux me connecter à la plateforme avec mon email et mot de passe pour accéder aux fonctionnalités.
   - **Critères d'acceptation :**
     - L'utilisateur fournit un email et un mot de passe valides.
     - Une erreur claire est affichée en cas d'échec (compte inactif, mot de passe incorrect, etc.).

4. **En tant qu'utilisateur,** je veux pouvoir modifier mon pseudonyme et mon image de profil pour personnaliser mon compte.
   - **Critères d'acceptation :**
     - Les modifications sont enregistrées immédiatement.
     - L'image de profil respecte les contraintes de taille et de format.

5. **En tant qu'utilisateur,** je veux publier des textes, vidéos ou GIFs sur le mur commun pour partager du contenu avec les autres utilisateurs.
   - **Critères d'acceptation :**
     - Les publications sont visibles immédiatement après publication.
     - Les fichiers téléversés respectent les formats autorisés.

6. **En tant qu'utilisateur,** je veux pouvoir liker ou disliker les publications des autres utilisateurs pour exprimer mon avis.
   - **Critères d'acceptation :**
     - Un utilisateur ne peut liker ou disliker une publication qu'une seule fois.
     - Le compteur de likes/dislikes se met à jour instantanément.

7. **En tant qu'utilisateur,** je veux supprimer mes publications pour mieux contrôler mon contenu.
   - **Critères d'acceptation :**
     - Seules les publications de l'utilisateur sont supprimables par lui.
     - Une confirmation est demandée avant la suppression.

8. **En tant qu'utilisateur,** je veux voir le profil des autres utilisateurs pour en apprendre davantage sur eux.
   - **Critères d'acceptation :**
     - Les informations visibles incluent le pseudonyme, l'image de profil et les publications publiques.
     - Les profils sont accessibles via un lien ou une icône associée à l'utilisateur.

---

## Contraintes Techniques et Fonctionnelles

### Frontend
- Respect des standards HTML5 sémantiques.
- Design mode sombre (Dark Mode) par défaut.
- Responsive Design (mobile-first).

### Backend
- PHP avec le paradigme orienté objet.
- Base de données MySQL :
  - Modélisation respectant les bonnes pratiques (normalisation).
  - Protection contre les injections SQL.
- Gestion des sessions et cookies de manière sécurisée.

### Sécurité
- Protection XSS : échappement des données utilisateurs avant affichage.
- Protection CSRF : intégration de jetons pour chaque formulaire.
- Validation côté serveur pour toutes les entrées utilisateur.

---
