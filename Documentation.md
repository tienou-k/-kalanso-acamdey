# Création d'un Site Web pour la Formation KALANSO
---

# Documentation du Site WordPress

## 1. Introduction
Cette documentation détaille l'architecture, les fonctionnalités et les instructions pour utiliser et maintenir le site web WordPress.

## 2. Architecture

### 2.1 Technologies Utilisées
- **CMS** : WordPress
- **Thème Utilisé** : Astra
- **Plugins** : Elementor, Askimet, Yoast SEO, UpdraftPlus

### 2.2 Structure du Site
- Pages Principales :
  - Page d'accueil
  - Formation
  - Apprenants
  - Detail profil(non visible)
  - Contact
- Menu de Navigation
- Widgets Utilisés

### 2.3 Base de Données WordPress
- Structure des Tables WordPress utilisées
  + wp_post(Cette table stocke tous les types de contenu (articles, pages, révisions, etc.))

## 3. Fonctionnalités

### 3.1 Fonctionnalités Actuelles
- Gestion des  pages
- Formulaire de contact
- Galerie d'images (via plugin Elementor)
- Intégration des réseaux sociaux
- Système de contact

### 3.2 Plugins Utilisés
    Elementor
	Constructeur de pages visuel permettant de créer des mises en page personnalisées avec glisser-déposer.
	Bibliothèque de modèles prédéfinis pour accélérer la création de pages.
	Possibilité de personnaliser facilement les styles CSS et les animations.
	Intégration avec d'autres plugins pour étendre les fonctionnalités.
    Akismet
	Protection contre les spams : filtre les commentaires indésirables et les soumet à un processus de vérification.
	Analyse des commentaires en fonction de différents critères pour déterminer leur probabilité d'être des spams.
	Permet de garder les sections de commentaires propres et pertinentes en éliminant les spams automatiquement.
    Yoast SEO
	Optimisation du référencement (SEO) : analyse et optimisation des articles et des pages pour les moteurs de recherche.
	Gestion des titres, des méta-descriptions et des balises canoniques pour améliorer la visibilité sur les moteurs de recherche.
	Analyse de lisibilité pour rendre le contenu plus accessible et engageant.
	Gestion des fichiers sitemap pour aider les moteurs de recherche à indexer le contenu.
    UpdraftPlus
	Sauvegarde et restauration du site : permet de planifier des sauvegardes automatiques du site et de ses bases de données.
	Stockage des sauvegardes sur des services cloud populaires comme Dropbox, Google Drive, etc.
	Facilité de restauration en cas de perte de données ou de problèmes techniques.
	Interface conviviale pour gérer les sauvegardes et surveiller l'état de la sécurité du site.

## 4. Instructions d'Utilisation

### 4.1 Accès au Site
- URL du site : [http://localhost/kalanso-acamdey.com/]

### 4.2 Gestion du Contenu

### Ajout/Modification des Articles et Pages 
Connexion à l'Interface d'Administration :
Rendez-vous sur l'URL de votre site WordPress suivi de /wp-admin.
Entrez vos identifiants (nom d'utilisateur et mot de passe) pour accéder à l'interface d'administration.

### Ajout  d'une Page :
Dans le tableau de bord, accédez à Pages > Ajouter une nouvelle page.
Donnez un titre à votre article ou à votre page.
Utilisez l'éditeur Elementor  pour saisir le contenu de manière similaire à un traitement de texte.
Une fois terminé, aller sur paramètre de la page publier la page ou cliquez sur le bouton mis à jour  pour rendre la page visible sur votre site.

### Modification d'une Page existante :
Accédez à la  Pages dans le tableau de bord pour voir la liste des contenus existants.
Survolez  la page que vous souhaitez modifier et cliquez sur Modifier.
Apportez les modifications nécessaires dans l'éditeur et n'oubliez pas de cliquer sur Mettre à jour pour enregistrer les modifications.

### Utilisation des Widgets :
Accéder à la Gestion des Widgets :
Dans le tableau de bord, allez dans Apparence > Widgets.

### Ajouter un Widget :
Sur le côté gauche, vous verrez une liste de zones de widget disponibles pour le thème (par exemple : menu principale, pied de page, etc.).
Faites glisser un widget depuis la section gauche vers une zone de widget de votre choix.

### Configurer un Widget :
Cliquez sur le widget ajouté dans la zone de widget pour afficher ses options de configuration.
Configurez les paramètres du widget selon vos besoins

### Enregistrer les Modifications :
Une fois que vous avez configuré le widget, assurez-vous de cliquer sur Enregistrer ou Mettre à jour/publier pour appliquer les modifications.

### Configuration du Menu :
Accéder à la Gestion des Menus :
Dans le tableau de bord, allez dans Apparence > Menus.

### Créer un Nouveau Menu :
Donnez un nom à votre menu et cliquez sur Créer le menu.
Vous pouvez maintenant ajouter des éléments au menu à partir de la colonne de gauche (Pages, Articles, Liens personnalisés, etc.).

### Ajouter des Éléments au Menu :
Cochez les pages  que vous souhaitez ajouter au menu.
Cliquez sur Ajouter au menu pour les inclure.

### Configurer l'Ordre et la Structure du Menu :
Faites glisser et déposez les éléments du menu pour les organiser dans l'ordre souhaité.
Créez des sous-menus en faisant glisser un élément en dessous et légèrement vers la droite pour le relier comme sous-élément.

### Enregistrer le Menu :
Une fois que vous avez configuré votre menu, sélectionnez l'emplacement du menu (par exemple : Menu principal) et cliquez sur Enregistrer le menu pour le rendre actif sur votre site.

### 4.3 Configuration du Thème
- Personnalisation du Thème WordPress
   Accédez à l'interface d'administration de WordPress (wp-admin).
   Allez dans Apparence > Personnaliser.
   Utilisez les sections disponibles pour modifier les couleurs, les polices, les en-têtes, les pieds de page, etc.
   Prévisualisez les modifications en temps réel avant de les publier sur votre site.
- Gestion des Options du Thème
   Accédez à Apparence > Personnaliser.
   Recherchez une section dédiée aux options du thème, souvent située sous "Paramètres du thème" ou similaire.
   Configurez les paramètres selon vos préférences : disposition des pages, options de blog, réglages de la page d'accueil, etc.
   Enregistrez vos modifications une fois satisfait.

### 4.4 Maintenance

#### Sauvegarde
- Accédez à Extensions > Installer des extensions dans le tableau de bord WordPress.
- Recherchez "UpdraftPlus" et installez-le.
- Activez le plugin une fois installé.
- Configurez les paramètres de sauvegarde dans Réglages > UpdraftPlus Sauvegarde/Restauration.
- Planifiez des sauvegardes automatiques et sélectionnez un emplacement de stockage sécurisé (comme Dropbox, Google Drive, etc.).

#### Mises à Jour
- Allez dans Tableau de bord > Mises à jour.
- Vérifiez les mises à jour disponibles pour WordPress, les thèmes et les plugins.
- Cochez toutes les cases des mises à jour que vous souhaitez effectuer.
- Cliquez sur "Mettre à jour maintenant" pour appliquer les mises à jour sélectionnées.

## 5. Support et Contact
Pour toute question ou problème, contactez [Kontere TIENOU] à [kontere13e@gmail.com].


## 6. Les liens
## Figma
	https://www.figma.com/file/h79smW4OlqWrHkvJGcOik9/Groupe_2?type=design&node-	id=0%3A1&mode=design&t=Qn9JXAHkOMMCblxu-1

## Depost gitHub
https://github.com/tienou-k/kalanso-academy.git

---


