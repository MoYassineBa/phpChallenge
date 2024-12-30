# PHP Challenge: Système de Feedback Simple  

## Session 2 : PHP Procédural et SQL  

### Objectif  
Créer une page web en PHP permettant aux utilisateurs de soumettre des commentaires et de les stocker dans une base de données MySQL.  

### Description des Tâches  
1. **Créer une table de base de données pour les commentaires**  
   - Champs : `id`, `nom`, `message`, `horodatage`.  

2. **Créer un formulaire PHP pour collecter les commentaires des utilisateurs**  
   - Le formulaire doit inclure des champs pour le nom et le message.  

3. **Insérer les commentaires dans la base de données**  
   - Utiliser des requêtes SQL `INSERT` pour stocker les données saisies par les utilisateurs.  

4. **Afficher les commentaires existants sur la même page**  
   - Utiliser des requêtes SQL `SELECT` pour récupérer les données et les afficher dynamiquement.  

### Étapes  
1. **Configuration de la base de données**  
   - Fournir la structure de la table nécessaire pour le projet.  

2. **Développement du formulaire HTML et PHP**  
   - Créer une interface utilisateur simple pour la soumission des commentaires.  

3. **Connexion à la base de données**  
   - Utiliser PDO pour interagir avec MySQL en toute sécurité.  

4. **Ajout des commentaires à la base de données**  
   - Insérer les données des utilisateurs dans la table des commentaires.  

5. **Affichage des commentaires sur la page**  
   - Récupérer et afficher les commentaires existants dans un format structuré.  

### Ressources  
- **Structure de la base de données :**  
```sql
CREATE TABLE commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    horodatage TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

