#--------------------------- Congestion_Web_APP -----------------------------

##-------------------------- Contexte et l’objectif du projet --------------------------

Le projet consiste à réaliser une application web qui informatise la gestion de congé dans l’objectif de faciliter la gestion de l’entreprise, faciliter les services de chaque utilisateur et améliorer les processus de cette dernière.

## -------------------------- Les fonctionnalités de l’application sont : -----------------

1. Une interface pour gérer les salariés (Ajout, Modification, Suppression)  avec le maximum des informations pour chaque employé (nom, prénom, CIN, tél., email, grade et service) dans la BD.
2. Possibilité de gérer les congés de chaque employé à condition de valider le congé par un administrateur. Les demandes sont caractérisées par : 
    - Numéro, date demande, type congé demandé, date de début, date de retour, nombre de jour et décision, 
    - Dont on a 3 type de congé :  
        * Congé annuel : 21 jours par an, cumulable.  
        * Congé exceptionnel ou permissions d’absence : 
            - 10 jours par an. Liée aux évènements familiaux. 
            - Le pèlerinage aux Lieux saints de l’Islam.  
        * Congé de maladie : Les congés pour raison de santé.  
        * Maternité 14 semaines.

***Pour les congés exceptionnels et les congés annuels, on ne compte que les jours ouvrables.***

3. Un calcul automatique et exact des soldes de congés.
4. Impression de bulletin de paiement pour les salariés et attestation de travail.
5. Deux interfaces d’authentification une pour l’administrateur et l’autre pour les salariés.
6. Un calendrier comporte les congés accordés selon les services*

## ------------------------------------- Partie conception ------------------------------
Analyse et conception du projet en utilisant ```le langage de modélisation UML``` :
 - Le diagramme de cas d’utilisation
 - Le diagramme de séquence
 - Le diagramme d’activité de l’authentification
 - Le diagramme de classe 
 

